<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var array $arResult */
//\Bitrix\Main\UI\Extension::load("ui.inputmask");
?>

<div class="intro__quiz-label">
    <img src="/local/js/new-letai/dist/images/quiz-icon.svg" alt="" class="intro__quiz-image">
    Интеллектуальная викторина
</div>

<form action="/" class="intro__quiz-form" method="post">
    <div class="intro__quiz-form-field">
        <input type="email" class="intro__quiz-form-input" name="email" placeholder="Введите Ваш Email" required="">
    </div>
    <div class="intro__quiz-form-field">
        <select class="intro__quiz-form-select" required="" name="unit">
            <option value="" disabled="" selected="" hidden="">Подразделение</option>
            <option value="292">Управление</option>
            <option value="293">ТМТ</option>
            <option value="294">Казанское управление электросвязи</option>
            <option value="295">Альметьевский ЗУЭС</option>
            <option value="296">Набережночелнинский ЗУЭС</option>
            <option value="297">Чистопольский ЗУЭС</option>
            <option value="298">Буинский ЗУЭС</option>
        </select>
    </div>
    <button class="intro__quiz-form-submit" type="submit">
        Принять участие
    </button>
</form>

<div class="intro__quiz-rules">
    <ul class="intro__quiz-rules-list">
        <li class="intro__quiz-rules-list-item">
            <div class="intro__quiz-rules-card">
                <div class="intro__quiz-rules-card-icon">
                    <svg width="120" height="121" viewBox="0 0 120 121" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g filter="url(#filter0_f_3002_2)">
                                <path
                                        d="M84.1436 42.3356C85.2036 43.3794 85.2125 45.0891 84.1706 46.1509L64.4091 66.2082C64.3283 68.1518 62.7384 69.7085 60.7802 69.7085C58.822 69.7085 57.2591 68.1788 57.1513 66.2532L44.6746 53.8715C43.6147 52.8187 43.6057 51.109 44.6566 50.0562C45.7076 48.9944 47.4143 48.9854 48.4652 50.0382L60.7533 62.2309L80.3351 42.3626C81.377 41.3008 83.0837 41.2918 84.1436 42.3356ZM91.5003 96.8386C83.2903 105.063 72.3766 109.589 60.7712 109.589C49.1658 109.589 38.2521 105.063 30.0421 96.8386C13.1012 79.8677 13.1012 52.2428 30.0421 35.2719C37.8928 27.3983 48.0341 23.1871 58.337 22.6112V15.7095H52.9475C51.2139 15.7095 49.8036 14.2967 49.8036 12.5601C49.8036 10.8234 51.2139 9.41064 52.9475 9.41064H70.0052C71.7388 9.41064 73.1491 10.8234 73.1491 12.5601C73.1491 14.2967 71.7388 15.7095 70.0052 15.7095H64.6157V22.7102C74.4246 23.583 83.9909 27.7583 91.4913 35.2629C108.432 52.2338 108.432 79.8587 91.4913 96.8296L91.5003 96.8386ZM87.054 39.7171C79.8051 32.4554 70.2926 28.8291 60.7712 28.8291C51.2498 28.8291 41.7373 32.4554 34.4885 39.7171C19.9997 54.2314 19.9997 77.861 34.4885 92.3754C41.5128 99.4121 50.8456 103.281 60.7712 103.281C70.6969 103.281 80.0297 99.4121 87.054 92.3754C101.543 77.861 101.543 54.2314 87.054 39.7171ZM60.7712 38.6823C62.3881 38.6823 63.6905 37.3685 63.6905 35.7578C63.6905 34.1471 62.3791 32.8333 60.7712 32.8333C59.1633 32.8333 57.8519 34.1471 57.8519 35.7578C57.8519 37.3685 59.1633 38.6823 60.7712 38.6823ZM60.7712 93.7071C59.1544 93.7071 57.8519 95.0209 57.8519 96.6316C57.8519 98.2423 59.1633 99.5561 60.7712 99.5561C62.3791 99.5561 63.6905 98.2423 63.6905 96.6316C63.6905 95.0209 62.3791 93.7071 60.7712 93.7071ZM30.3835 63.2747C28.7666 63.2747 27.4642 64.5885 27.4642 66.1992C27.4642 67.8099 28.7756 69.1237 30.3835 69.1237C31.9913 69.1237 33.3028 67.8099 33.3028 66.1992C33.3028 64.5885 31.9913 63.2747 30.3835 63.2747ZM91.159 63.2747C89.5421 63.2747 88.2396 64.5885 88.2396 66.1992C88.2396 67.8099 89.5511 69.1237 91.159 69.1237C92.7668 69.1237 94.0783 67.8099 94.0783 66.1992C94.0783 64.5885 92.7668 63.2747 91.159 63.2747Z"
                                        fill="#C634FF" />
                            </g>
                            <path
                                    d="M83.1419 42.3356C84.2018 43.3794 84.2108 45.0891 83.1688 46.1509L63.4074 66.2082C63.3265 68.1518 61.7366 69.7085 59.7784 69.7085C57.8203 69.7085 56.2573 68.1788 56.1495 66.2532L43.6728 53.8715C42.6129 52.8187 42.6039 51.109 43.6549 50.0562C44.7058 48.9944 46.4125 48.9854 47.4634 50.0382L59.7515 62.2309L79.3333 42.3626C80.3753 41.3008 82.0819 41.2918 83.1419 42.3356ZM90.4985 96.8386C82.2885 105.063 71.3748 109.589 59.7694 109.589C48.1641 109.589 37.2504 105.063 29.0404 96.8386C12.0994 79.8677 12.0994 52.2428 29.0404 35.2719C36.8911 27.3983 47.0323 23.1871 57.3352 22.6112V15.7095H51.9457C50.2121 15.7095 48.8018 14.2967 48.8018 12.5601C48.8018 10.8234 50.2121 9.41064 51.9457 9.41064H69.0034C70.7371 9.41064 72.1473 10.8234 72.1473 12.5601C72.1473 14.2967 70.7371 15.7095 69.0034 15.7095H63.6139V22.7102C73.4228 23.583 82.9892 27.7583 90.4895 35.2629C107.43 52.2338 107.43 79.8587 90.4895 96.8296L90.4985 96.8386ZM86.0522 39.7171C78.8033 32.4554 69.2909 28.8291 59.7694 28.8291C50.248 28.8291 40.7356 32.4554 33.4867 39.7171C18.998 54.2314 18.998 77.861 33.4867 92.3754C40.511 99.4121 49.8438 103.281 59.7694 103.281C69.6951 103.281 79.0279 99.4121 86.0522 92.3754C100.541 77.861 100.541 54.2314 86.0522 39.7171ZM59.7694 38.6823C61.3863 38.6823 62.6888 37.3685 62.6888 35.7578C62.6888 34.1471 61.3773 32.8333 59.7694 32.8333C58.1616 32.8333 56.8501 34.1471 56.8501 35.7578C56.8501 37.3685 58.1616 38.6823 59.7694 38.6823ZM59.7694 93.7071C58.1526 93.7071 56.8501 95.0209 56.8501 96.6316C56.8501 98.2423 58.1616 99.5561 59.7694 99.5561C61.3773 99.5561 62.6888 98.2423 62.6888 96.6316C62.6888 95.0209 61.3773 93.7071 59.7694 93.7071ZM29.3817 63.2747C27.7649 63.2747 26.4624 64.5885 26.4624 66.1992C26.4624 67.8099 27.7738 69.1237 29.3817 69.1237C30.9896 69.1237 32.301 67.8099 32.301 66.1992C32.301 64.5885 30.9896 63.2747 29.3817 63.2747ZM90.1572 63.2747C88.5403 63.2747 87.2379 64.5885 87.2379 66.1992C87.2379 67.8099 88.5493 69.1237 90.1572 69.1237C91.765 69.1237 93.0765 67.8099 93.0765 66.1992C93.0765 64.5885 91.765 63.2747 90.1572 63.2747Z"
                                    fill="white" fill-opacity="0.6" />
                        </g>
                        <defs>
                            <filter id="filter0_f_3002_2" x="-9.21051" y="-5.58936" width="128.421"
                                    height="130.178" filterUnits="userSpaceOnUse"
                                    color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                         result="shape" />
                                <feGaussianBlur stdDeviation="7.5"
                                                result="effect1_foregroundBlur_3002_2" />
                            </filter>
                            <clipPath id="clip0_3002_2">
                                <rect width="120" height="120" fill="white"
                                      transform="translate(0 0.5)" />
                            </clipPath>
                            <clipPath id="clip1_3002_2">
                                <rect width="98.4211" height="100.179" fill="white"
                                      transform="translate(5.78949 9.41064)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="intro__quiz-rules-card-text">
                    Пришло время прокачать свой интеллект! 10 секунд - один ответ. Открывай новые вопросы в течение двух недель и участвуй в викторине.
                </div>
            </div>
        </li>
        <li class="intro__quiz-rules-list-item">
            <div class="intro__quiz-rules-card">
                <div class="intro__quiz-rules-card-icon">
                    <svg width="120" height="121" viewBox="0 0 120 121" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_f_3002_2)">
                            <path
                                    d="M32.4743 19.9658C32.7019 18.3392 34.3956 16.8338 36.0028 16.6485C37.61 16.4632 43.465 16.4151 44.8286 16.7011C45.6959 16.8818 47.4989 18.4375 47.4989 19.2794V26.0284H72.5398V19.2794C72.5398 19.1788 73.3821 17.7237 73.5573 17.5567C73.8009 17.3302 74.8868 16.7652 75.2078 16.6988C76.6078 16.4128 82.4833 16.4677 84.0358 16.6462C85.4723 16.8109 87.5643 18.449 87.5643 19.9635V26.0261H95.1904C98.7872 26.0261 102.279 30.1899 102.357 33.6948L102.37 95.6986C102.118 99.7434 99.543 103.715 95.4181 104.497L24.0378 104.397C20.9532 103.498 18.7314 100.764 17.9688 97.6844C17.295 76.3324 17.8641 54.8615 17.6797 33.466C17.8823 30.0572 21.3311 26.0284 24.8482 26.0284H32.4743C32.6633 24.141 32.2171 21.7914 32.4743 19.9658ZM42.946 20.9953H37.2548V32.4343H42.946V20.9953ZM83.0114 20.9953H76.865V32.4343H83.0114V20.9953ZM22.2303 33.235V46.161H97.8083V33.235C97.8083 32.9902 97.0298 31.7548 96.793 31.51C95.0607 29.7369 89.9705 30.9701 87.5643 30.6017C87.7601 32.6745 87.4437 35.2826 85.3676 36.2869C83.4166 37.234 76.6692 37.3988 74.757 36.4951C72.4578 35.4107 72.3895 32.8209 72.5398 30.6017H47.4989C47.6628 32.8369 47.5489 35.6234 45.12 36.5614C43.0803 37.3484 36.6652 37.2546 34.6711 36.2869C32.6769 35.3192 32.2785 32.6722 32.4743 30.6017C29.6219 31.0158 22.9542 29.1375 22.228 33.235H22.2303ZM97.8083 50.7366H22.2303V96.3781C22.2303 97.7599 24.1334 100.318 25.7588 100.153C48.8465 100.048 71.9707 100.361 95.0356 99.9951C96.2831 99.8899 97.8083 97.4099 97.8083 96.3758V50.7343V50.7366Z"
                                    fill="#0077FF" />
                            <path
                                    d="M60.6249 56.5342L65.7082 66.6394L76.5168 68.3598C78.0078 69.0164 78.4517 70.5081 77.548 71.9013L69.8422 79.5014C69.9492 82.7706 71.3629 86.3739 71.5996 89.5448C71.7044 90.9266 71.2787 92.4434 69.6692 92.6013C67.798 92.7866 61.2054 88.1195 58.9904 87.4286L49.1402 92.5441C48.0361 92.8484 47.0778 92.3771 46.5291 91.4025C46.1626 87.4835 47.7561 83.4249 48.1409 79.4945L40.3349 71.7755C39.4084 70.1214 40.1141 68.5451 41.9694 68.1768L52.284 66.6463L57.2762 56.564C58.3667 55.6054 59.5208 55.6191 60.6203 56.5342H60.6249ZM70.9463 72.0157C69.0364 71.3614 64.2467 71.6131 62.7534 70.5241C61.7176 69.7668 59.9055 64.6994 59.1042 63.3221C58.7332 63.0407 55.66 70.2884 55.0772 70.6545C53.5315 71.6268 48.9422 71.2882 47.0413 72.018C48.0293 73.7499 52.0495 76.0743 52.5799 77.7718C53.1103 79.4694 51.3347 85.8637 51.5965 86.2C53.3995 85.6281 57.324 82.5373 58.9927 82.535C60.2037 82.535 65.8175 86.3327 66.1635 85.969C66.1726 85.484 66.1885 84.9967 66.1362 84.5094C65.9541 82.8027 65.1823 80.5995 65.0776 78.934C64.941 76.8041 69.6874 73.7041 70.9463 72.018V72.0157Z"
                                    fill="#0077FF" />
                        </g>
                        <g>
                            <path
                                    d="M32.4743 19.9658C32.7019 18.3392 34.3956 16.8338 36.0028 16.6485C37.61 16.4632 43.465 16.4151 44.8286 16.7011C45.6959 16.8818 47.4989 18.4375 47.4989 19.2794V26.0284H72.5398V19.2794C72.5398 19.1788 73.3821 17.7237 73.5573 17.5567C73.8009 17.3302 74.8868 16.7652 75.2078 16.6988C76.6078 16.4128 82.4833 16.4677 84.0358 16.6462C85.4723 16.8109 87.5643 18.449 87.5643 19.9635V26.0261H95.1904C98.7872 26.0261 102.279 30.1899 102.357 33.6948L102.37 95.6986C102.118 99.7434 99.543 103.715 95.4181 104.497L24.0378 104.397C20.9532 103.498 18.7314 100.764 17.9688 97.6844C17.295 76.3324 17.8641 54.8615 17.6797 33.466C17.8823 30.0572 21.3311 26.0284 24.8482 26.0284H32.4743C32.6633 24.141 32.2171 21.7914 32.4743 19.9658ZM42.946 20.9953H37.2548V32.4343H42.946V20.9953ZM83.0114 20.9953H76.865V32.4343H83.0114V20.9953ZM22.2303 33.235V46.161H97.8083V33.235C97.8083 32.9902 97.0298 31.7548 96.793 31.51C95.0607 29.7369 89.9705 30.9701 87.5643 30.6017C87.7601 32.6745 87.4437 35.2826 85.3676 36.2869C83.4166 37.234 76.6692 37.3988 74.757 36.4951C72.4578 35.4107 72.3895 32.8209 72.5398 30.6017H47.4989C47.6628 32.8369 47.5489 35.6234 45.12 36.5614C43.0803 37.3484 36.6652 37.2546 34.6711 36.2869C32.6769 35.3192 32.2785 32.6722 32.4743 30.6017C29.6219 31.0158 22.9542 29.1375 22.228 33.235H22.2303ZM97.8083 50.7366H22.2303V96.3781C22.2303 97.7599 24.1334 100.318 25.7588 100.153C48.8465 100.048 71.9707 100.361 95.0356 99.9951C96.2831 99.8899 97.8083 97.4099 97.8083 96.3758V50.7343V50.7366Z"
                                    fill="white" fill-opacity="0.8" />
                            <path
                                    d="M60.6249 56.5342L65.7082 66.6394L76.5168 68.3598C78.0078 69.0164 78.4517 70.5081 77.548 71.9013L69.8422 79.5014C69.9492 82.7706 71.3629 86.3739 71.5996 89.5448C71.7044 90.9266 71.2787 92.4434 69.6692 92.6013C67.798 92.7866 61.2054 88.1195 58.9904 87.4286L49.1402 92.5441C48.0361 92.8484 47.0778 92.3771 46.5291 91.4025C46.1626 87.4835 47.7561 83.4249 48.1409 79.4945L40.3349 71.7755C39.4084 70.1214 40.1141 68.5451 41.9694 68.1768L52.284 66.6463L57.2762 56.564C58.3667 55.6054 59.5208 55.6191 60.6203 56.5342H60.6249ZM70.9463 72.0157C69.0364 71.3614 64.2467 71.6131 62.7534 70.5241C61.7176 69.7668 59.9055 64.6994 59.1042 63.3221C58.7332 63.0407 55.66 70.2884 55.0772 70.6545C53.5315 71.6268 48.9422 71.2882 47.0413 72.018C48.0293 73.7499 52.0495 76.0743 52.5799 77.7718C53.1103 79.4694 51.3347 85.8637 51.5965 86.2C53.3995 85.6281 57.324 82.5373 58.9927 82.535C60.2037 82.535 65.8175 86.3327 66.1635 85.969C66.1726 85.484 66.1885 84.9967 66.1362 84.5094C65.9541 82.8027 65.1823 80.5995 65.0776 78.934C64.941 76.8041 69.6874 73.7041 70.9463 72.018V72.0157Z"
                                    fill="white" fill-opacity="0.8" />
                        </g>
                        <defs>
                            <filter id="filter0_f_3002_2" x="7.62964" y="6.5" width="104.741"
                                    height="108" filterUnits="userSpaceOnUse"
                                    color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                         result="shape" />
                                <feGaussianBlur stdDeviation="5"
                                                result="effect1_foregroundBlur_3002_2" />
                            </filter>
                            <clipPath id="clip0_3002_2">
                                <rect width="84.7407" height="88" fill="white"
                                      transform="translate(17.6296 16.5)" />
                            </clipPath>
                            <clipPath id="clip1_3002_2">
                                <rect width="84.7407" height="88" fill="white"
                                      transform="translate(17.6296 16.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="intro__quiz-rules-card-text">
                    Новые вопросы откроются<br>
                    <b>17.02</b>, <b>24.02</b>, <b>28.02.</b>
                </div>
            </div>
        </li>

        <li class="intro__quiz-rules-list-item">
            <div class="intro__quiz-rules-card">
                <div class="intro__quiz-rules-card-icon">
                    <svg width="120" height="121" viewBox="0 0 120 121" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g filter="url(#filter0_f_3002_2)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M22.7 37.5H98.3C99.7322 37.5 101.106 38.0689 102.118 39.0816C103.131 40.0943 103.7 41.4678 103.7 42.9V102.3C103.7 103.732 103.131 105.106 102.118 106.118C101.106 107.131 99.7322 107.7 98.3 107.7H22.7C21.2679 107.7 19.8944 107.131 18.8817 106.118C17.869 105.106 17.3 103.732 17.3 102.3V42.9C17.3 41.4678 17.869 40.0943 18.8817 39.0816C19.8944 38.0689 21.2679 37.5 22.7 37.5ZM98.3 102.3V42.9H22.7V102.3H98.3Z"
                                      fill="#FE5000" />
                                <path d="M57.5 42.5H63.5V102.5H57.5V42.5Z" fill="#FE5000" />
                                <path d="M22.5 67.5H98.5V72.5H22.5V67.5Z" fill="#FE5000" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M53.839 16.5078C59.3662 21.3061 62.6186 31.2315 58.924 35.4755C55.2392 39.7145 47.2605 36.8002 40.9472 31.3198C35.5723 26.654 33.7299 19.5497 37.4491 15.2812C41.1634 11.0127 48.4642 11.8419 53.839 16.5078ZM44.1702 27.6254C48.5772 31.4474 54.1584 33.4835 55.2196 32.2619C56.6935 30.5741 54.3647 23.4698 50.6161 20.2169C47.0541 17.126 42.7798 16.6353 41.1536 18.5046C39.5322 20.369 40.6131 24.5345 44.1702 27.6254Z"
                                      fill="#FE5000" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M66.8926 16.5078C61.5921 21.3061 58.4656 31.2315 62.0118 35.4755C65.5486 39.7145 73.2071 36.8002 79.2715 31.3198C84.4306 26.654 86.199 19.5497 82.6291 15.2812C79.064 11.0127 72.0564 11.8419 66.8926 16.5078ZM76.178 27.6205C71.9479 31.4425 66.5908 33.4786 65.5722 32.2569C64.1575 30.5692 66.3928 23.4649 69.9862 20.212C73.4051 17.1211 77.5125 16.6304 79.0687 18.4997C80.6249 20.3641 79.5922 24.5295 76.178 27.6205Z"
                                      fill="#FE5000" />
                            </g>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M21.7 39.5H97.3C98.7322 39.5 100.106 40.0689 101.118 41.0816C102.131 42.0943 102.7 43.4678 102.7 44.9V104.3C102.7 105.732 102.131 107.106 101.118 108.118C100.106 109.131 98.7322 109.7 97.3 109.7H21.7C20.2678 109.7 18.8943 109.131 17.8816 108.118C16.8689 107.106 16.3 105.732 16.3 104.3V44.9C16.3 43.4678 16.8689 42.0943 17.8816 41.0816C18.8943 40.0689 20.2678 39.5 21.7 39.5ZM97.3 104.3V44.9H21.7V104.3H97.3Z"
                                  fill="white" fill-opacity="0.6" />
                            <path d="M56.4999 44.5H62.4999V104.5H56.4999V44.5Z" fill="white"
                                  fill-opacity="0.6" />
                            <path d="M21.4999 69.5H97.4999V74.5H21.4999V69.5Z" fill="white"
                                  fill-opacity="0.6" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M52.839 18.5078C58.3661 23.3061 61.6186 33.2315 57.924 37.4755C54.2392 41.7145 46.2604 38.8002 39.9471 33.3198C34.5723 28.654 32.7299 21.5497 36.4491 17.2812C40.1633 13.0127 47.4641 13.8419 52.839 18.5078ZM43.1701 29.6254C47.5771 33.4474 53.1583 35.4835 54.2195 34.2619C55.6934 32.5741 53.3647 25.4698 49.616 22.2169C46.0541 19.126 41.7797 18.6353 40.1535 20.5046C38.5322 22.369 39.6131 26.5345 43.1701 29.6254Z"
                                  fill="white" fill-opacity="0.6" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M65.8926 18.5078C60.5921 23.3061 57.4655 33.2315 61.0118 37.4755C64.5486 41.7145 72.207 38.8002 78.2715 33.3198C83.4305 28.654 85.1989 21.5497 81.6291 17.2812C78.064 13.0127 71.0563 13.8419 65.8926 18.5078ZM75.1779 29.6205C70.9479 33.4425 65.5908 35.4786 64.5722 34.2569C63.1574 32.5692 65.3927 25.4649 68.9861 22.212C72.4051 19.1211 76.5125 18.6304 78.0687 20.4997C79.6249 22.3641 78.5921 26.5295 75.1779 29.6205Z"
                                  fill="white" fill-opacity="0.6" />
                        </g>
                        <defs>
                            <filter id="filter0_f_3002_2" x="-8.49994" y="-4.5" width="138" height="138"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                         result="shape" />
                                <feGaussianBlur stdDeviation="7.5"
                                                result="effect1_foregroundBlur_3002_2" />
                            </filter>
                            <clipPath id="clip0_3002_2">
                                <rect width="120" height="120" fill="white"
                                      transform="translate(0 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="intro__quiz-rules-card-text">
                    Первые <b>10 лучших</b> результатов в каждом подразделении будут вознаграждены
                    особым
                    призом.<br>
                    <b>Подведение итогов 5 марта.</b>
                </div>
            </div>
        </li>
    </ul>
</div>
