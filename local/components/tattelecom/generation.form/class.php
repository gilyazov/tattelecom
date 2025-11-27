<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Web\HttpClient;
use \Bitrix\Main\Application;


if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class GenerationForm extends \CBitrixComponent implements Controllerable
{
    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    public function configureActions() : array
    {
        return [
            'generate' => [ // Ajax-метод
                'prefilters' => [
                    new \Bitrix\Main\Engine\ActionFilter\HttpMethod([
                        \Bitrix\Main\Engine\ActionFilter\HttpMethod::METHOD_POST
                    ]),
                ],
            ],
            'checkResult' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    public function checkResultAction($requestId, $bitrix_id)
    {
        $httpClient = new HttpClient();
        $httpClient->setHeader('Authorization', 'Bearer sk-Kjf2KZpgtgs0iE83qKNVQoc21RyG7bxvHZwMHCXZwQeKVlkxcmUMgr3lPf1D');
        $response = $httpClient->get('https://api.gen-api.ru/api/v1/request/get/' . $requestId);
        $arResult = json_decode($response, true);

		if($arResult["status"] != "success"){
			return $arResult;
		}

		$PROPERTY_VALUE = \CFile::MakeFileArray($arResult["result"][0]);
		\CIBlockElement::SetPropertyValuesEx($bitrix_id, false, array("AFTER_GENERATION" => $PROPERTY_VALUE));

		$res = \CIBlockElement::GetProperty(81, $bitrix_id, "sort", "asc", array("CODE" => "AFTER_GENERATION"));
		if ($ob = $res->GetNext())
		{
            // нанесем водяной знак и отдадим
            $image = CFile::GetFileArray($ob["VALUE"]);
            $arWaterMarkSmall = [
                array(
                    'name' => 'watermark',
                    'position' => 'br',
                    'type' => 'image',
                    'size' => 'real',
                    'fill' => 'exact',
                    'file' => $_SERVER['DOCUMENT_ROOT'].'/upload/medialibrary/126/8sc4oxg7ny17iem2xlvxq2e0l3wzubpc/watermark.png',
                )
            ];
            $file = \CFile::ResizeImageGet($image["ID"], array('width'=>$image["WIDTH"], 'height'=>$image["HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL, true, $arWaterMarkSmall);

			$path = $file["src"];
		}

		return ["path" => $path, "status" => "success"];
    }

    /**
     * @throws Exception
     */
    public function generateAction($email, $style, $clientID)
    {
        $arStyleMap = [
            "retro" => 307,
            "5g" => 308
        ];
        $arPromtMap = [
            "retro" => "A hyper-realistic portrait of a person with the best preserved facial features of the original image. The style of the 90s with warm tones and soft warm lighting. Clothes in the style of the USSR of the 80-90s, suitable for the atmosphere of that time. Background is a VHS cassette store with a characteristic entourage of the Soviet Union at the end of the twentieth century. Photos with light chromatic aberrations that create the effect of vintage film. To preserve the verisimilitude and maximum similarity of the face with the original.",
            "5g" => "A hyper-realistic portrait of a person with maximally preserved facial features of the original image. Composition: futuristic cyberpunk city of the future, with a lot of detailed buildings with various advertising inserts, holographic screens, bright banners and signs; the background is saturated with blue and orange neon colors. Neon light realistically illuminates all the objects of the scene, light reflections are reflected on skin and clothes, the atmosphere is deeply immersed in the cyberpunk world. The character is wearing high-tech, stylish cyberpunk clothes. The user's face is carefully integrated, while maintaining maximum realism. To make the photo look natural, add a little chromatic aberration and make a little noise throughout the frame so that the result looks like a real shot in the urban neon landscape of the future.",
//            "retro" => "Гипперреалистичный портрет человека с максимально сохранёнными чертами лица исходного снимка. Стиль 90-х годов с тёплыми тонами и мягким тёплым освещением. Одежда в стиле СССР 80-90-х годов, подходящая к атмосфере того времени. Фон — магазин VHS кассет с характерным антуражем Советского Союза конца ХХ века. Фото с лёгкими хроматическими аберрациями, создающими эффект винтажной плёнки. Сохранить правдоподобность и максимальное сходство лица с оригиналом.",
//            "5g" => "Гиперреалистичный портрет человека с максимально сохранёнными чертами лица исходного снимка. Композиция: футуристический киберпанк-город будущего, на фоне множество детализированных зданий с разнообразными рекламными вставками, голографическими экранами, яркими баннерами и вывесками; фон насыщен синими и оранжевыми неоновыми цветами. Неоновый свет реалистично освещает все объекты сцены, на коже и одежде отражаются световые отблески, атмосфера глубоко погружает в киберпанк-мир. На персонаже высокотехнологичная, стильная одежда в стиле киберпанк. Лицо пользователя тщательно интегрировано, сохранена максимальная реалистичность. Для придания фотографии натуральности добавить немного хроматических аберраций и чуть зашумить весь кадр, чтобы результат выглядел как реальная съёмка в городском неоновом пейзаже будущего."
        ];

        if ($this->checkUserGeneration($email, $clientID)){
            throw new \Exception("Вы уже проходили генерацию.");
        }

        // сохраним в админке
        $el = new \CIBlockElement;
        $PROP[343] = $arStyleMap[$style];
        $request = Application::getInstance()->getContext()->getRequest();
        $files = $request->getFileList()->toArray();
        $PROP[344] = $files['file'];
        $PROP[346] = $clientID;
        $arLoadProductArray = Array(
            "IBLOCK_ID"      => 81,
            "ACTIVE_FROM"    => date("d.m.Y"),
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => $email
        );
        $bxID = $el->Add($arLoadProductArray);
        if(!$bxID){
            throw new \Exception($el->LAST_ERROR);
        }

        // отправим картиночку в chadGPT
        $filePath = "";
        $res = \CIBlockElement::GetProperty(81, $bxID, "sort", "asc", array("CODE" => "BEFORE_GENERATION"));
        if ($ob = $res->GetNext())
        {
            $filePath = "https://letai.ru" . \CFile::GetPath($ob['VALUE']);
        }

        $httpClient = new HttpClient();
        $httpClient->setHeader('Content-Type', 'application/json', true);
        $httpClient->setHeader('Authorization', 'Bearer sk-Kjf2KZpgtgs0iE83qKNVQoc21RyG7bxvHZwMHCXZwQeKVlkxcmUMgr3lPf1D');

        $options = array(
            "prompt" => "Redraw: " . $arPromtMap[$style],
            "image_urls" => [$filePath]
        );

        $response = $httpClient->post('https://api.gen-api.ru/api/v1/networks/nano-banana', json_encode($options));
        $result = json_decode($response, true);
        $request_id = $result['request_id'];

        // сохраним id taska в битрикс
        $el->Update(
            $bxID, // айди элемента
            [
                'CODE' => $request_id
            ],
            true
        );
        return ["request_id" => $request_id , "bitrix_id" => $bxID];

        // сохраним результат в ИБ

        // шлепнем водяной знак
    }

    protected function checkUserGeneration($email, $clientID): bool
    {
        $arFilter = Array(
            "IBLOCK_ID"=>81,
            array(
                "LOGIC" => "OR",
                array("NAME" => $email, "PROPERTY_CLIENT_ID" => false),
                array("NAME" => $email, "PROPERTY_CLIENT_ID" => $clientID),
            ),

        );
        $res = \CIBlockElement::GetList(Array(), $arFilter, ["NAME"]);
        if($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            if ($arFields["CNT"] >= 3){
                return true;
            }
        }

        return false;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}