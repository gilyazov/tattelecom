<?php


namespace Tattelecom\Core\Search\ReIndex;

use Bitrix\Main\Diag\Debug;

class File
{
    /**
     * @var int Идентификатор инфоблока Бланки и документы
     */
    const IBLOCK_ID = '43';

    public static function BeforeIndex($arFields = [])
    {
        if (!static::isFileIb($arFields))
        {
            return $arFields;
        }

        $resElements = \CIBlockElement::getList(
            [],
            [
                'IBLOCK_ID' => $arFields['PARAM2'],
                'ID'        => $arFields['ITEM_ID'],
                '!PROPERTY_FILE' => false
            ],
            false,
            false,
            ["ID", "PROPERTY_FILE"]
        );
        if ( $arElement = $resElements->fetch() )
        {
            $arFields['URL'] = \CFile::GetPath($arElement["PROPERTY_FILE_VALUE"]);
        }

        return $arFields;
    }

    /**
     * Возвращает true, если это интересующий нас элемент
     * @param array $fields
     * @return boolean
     */
    public static function isFileIb( $fields = [] ): bool
    {
        return ( $fields["MODULE_ID"] == "iblock" && $fields['PARAM2'] == static::IBLOCK_ID );
    }
}