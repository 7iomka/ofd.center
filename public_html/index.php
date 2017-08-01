<?php
header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'ОФД-Центр';
$desc = 'Переход на онлайн-кассы. Автоматизация торговли';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

//sypexgeo.net/ru/about/
if (file_exists('SxGeo.php')) {
    include 'SxGeo.php';
    $p_address = '';
    $p_phone = '';
    $p_phone_link = '';
    $p_email = '';
    $p_city = '';

    $SxGeo = new SxGeo('SxGeo.dat');
    $SxGeoCity = new SxGeo('SxGeoCity.dat');
    $ip = $_SERVER['REMOTE_ADDR'];
    $country = $SxGeo->getCountry($ip);
    $region = $SxGeoCity->getCityFull($ip);
    $regionCity = $region["city"]["name_ru"];


    switch ($regionCity) {
        case 'Новороссийск':
            $p_city = 'Новороссийск';
            $p_address = 'г. Новороссийск, пр-т Дзержинского 211, помещение 146-б, офис 1';
            $p_phone = '+7 (861) 205-08-64';
            $p_phone_link = '+78612050864';
            $p_email = 'blacksea@kafe-soft.ru';
            break;
        case 'Ростов-на-Дону':
            $p_city = 'Ростов-на-Дону';
            $p_address = 'г. Ростов-на-Дону, пр-т Стачки 160';
            $p_phone = '+7 (863) 333-27-43';
            $p_phone_link = '+78633332743';
            $e_mail = 'south@kafe-soft.ru';
            break;
        case 'Москва':
            $p_city = 'Москва';
            $p_address = 'Москва, ул. Выборгская 16, стр. 1, БЦ "Выборгский", офис №106 (на входе пропускная система по паспорту).';
            $p_phone = '+7 (495) 662-99-54';
            $p_phone_link = '+74956629954';
            $e_mail = 'info@kafe-soft.ru';
            break;
        case 'Химки':
            $p_city = 'Москва';
            $p_address = 'Москва, ул. Выборгская 16, стр. 1, БЦ "Выборгский", офис №106 (на входе пропускная система по паспорту).';
            $p_phone = '+7 (495) 662-99-54';
            $p_phone_link = '+74956629954';
            $e_mail = 'info@kafe-soft.ru';
            break;
        case 'Красногорск':
            $p_city = 'Москва';
            $p_address = 'Москва, ул. Выборгская 16, стр. 1, БЦ "Выборгский", офис №106 (на входе пропускная система по паспорту).';
            $p_phone = '+7 (495) 662-99-54';
            $p_phone_link = '+74956629954';
            $p_email = 'info@kafe-soft.ru';
            break;
        case 'Домодедово':
            $p_city = 'Москва';
            $p_address = 'Москва, ул. Выборгская 16, стр. 1, БЦ "Выборгский", офис №106 (на входе пропускная система по паспорту).';
            $p_phone = '+7 (495) 662-99-54';
            $p_phone_link = '+74956629954';
            $p_email = 'info@kafe-soft.ru';
            break;
        case 'Люберцы':
            $p_city = 'Москва';
            $p_address = 'Москва, ул. Выборгская 16, стр. 1, БЦ "Выборгский", офис №106 (на входе пропускная система по паспорту).';
            $p_phone = '+7 (495) 662-99-54';
            $p_phone_link = '+74956629954';
            $p_email = 'info@kafe-soft.ru';
            break;
        default:
            $p_city = 'Москва';
            $p_address = 'Москва, ул. Выборгская 16, стр. 1';
            $p_phone = '8 (800) 555-90-84';
            $p_phone_link = '+78005559084';
            $p_email = 'info@kafe-soft.ru';
            break;
    }
}
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NBZMT4T');</script>
    <!-- End Google Tag Manager -->

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


    <!-- CSS styles -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jquery.formstyler.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style-fix.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>


<body id="main">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBZMT4T"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="global-wrapper">

    <!--===================================================== Loader -->
    <!-- <div class="loader">
        <div class="pseudo-table">
            <div class="pseudo-table-cell text-center">

                <div class="a-loader a-loader-1">
                    <img src="images/loader.png" alt=" ">
                </div>

                <div class="loader-text">
                    загрузка
                </div>

            </div>
        </div>
    </div> -->

    <!--===================================================== Header -->
    <header class="layout-header">
            <div class="container">
                <div class="row">

                    <!-- left-top col -->
                    <div class="col-9 col-sm-7 col-md-8">
                      <div class="row align-items-sm-center align-items-lg-start">
                        <!-- Logo -->
                        <div class="col-8 col-sm-5 col-md-4 mb-sm-3 mb-xl-0 text-center text-sm-left">
                            <a href="#" class="logo light si-jump">
                                <img src="images/logo-light.png" alt=" ">
                            </a>
                            <a href="#" class="logo dark si-jump">
                                <img src="images/logo.png" alt=" ">
                            </a>
                        </div>

                        <!-- Slogan -->
                        <div class="hidden-lg-down col-sm-2 col-lg-4 text-center text-sm-left mb-3 mb-xl-0">
                            <div class="header-text">
                                <div style=" margin-right: -0.5em; margin-left: -0.5em; ">Переход на&nbsp;онлайн‑кассы<br>
                                Автоматизация торговли</div>
                            </div>
                        </div>

                        <!-- Region -->
                        <div class="hidden-xs-down col-12 col-sm-7 col-xl-4 text-center text-sm-left">
                            <div class="header-geo-holder">
                                <div class="header-geo">
                                    Ваш регион:
                                    <span class="primary">Москва</span>
                                </div>

                                <p>
                                    Мы переводим на&nbsp;ФЗ‑54 в&nbsp;г.&nbsp;Москва                            </p>
                            </div>
                        </div>
                      </div>
                    </div>

                    <!-- Phone block -->
                    <div class="hidden-xs-down col-12 col-sm-5 col-md-4 text-center text-sm-right text-xl-left">
                        <div class="si-phone">
                            <a href="tel:+78005559084" class="phone-link light">8 (800) 555-90-84</a>
                            <a href="#" class="btn btn-accent open-phone-modal" data-extra="1">
                                <span class="icon icon-phone"></span>
                                Заказать звонок
                            </a>
                        </div>
                    </div>


                    <div class="hidden-sm-up col-3">
                      <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                      </div>
                    </div>
                    <div class="mobile-header-content hidden-sm-up" style="display: none;">
                      <div class="mobile-header-content__inner row justify-content-center">
                        <!-- /**
                        ** Copy of 3 blocks **
                        **/ -->
                        <!-- Slogan -->
                        <div class="col-12 my-3 ">
                            <div class="header-text">
                                Переход на&nbsp;онлайн‑кассы<br>
                                Автоматизация торговли
                            </div>
                        </div>

                        <!-- Region -->
                        <div class="col-auto my-3 pull-2">
                            <div class="header-geo-holder">
                                <div class="header-geo">
                                    Ваш регион:
                                    <span class="primary">Москва</span>
                                </div>

                                <p>
                                    Мы переводим на&nbsp;ФЗ‑54 в&nbsp;г.&nbsp;Москва                            </p>
                            </div>
                        </div>

                        <!-- Phone block -->
                        <div class="col-auto text-center">
                            <div class="si-phone">
                                <a href="tel:+78005559084" class="phone-link light">8 (800) 555-90-84</a>
                                <a href="#" class="btn btn-accent open-phone-modal" data-extra="1">
                                    <span class="icon icon-phone"></span>
                                    Заказать звонок
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </header>

    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">
        <div class="container text-center">

            <h1>
                <span class="big">
                    Настроим Ваш бизнес под&nbsp;требования
                </span>
                54&#8209;ФЗ за&nbsp;1&#8209;2 дня
            </h1>

            <p class="primary">
                Переведем торговлю на&nbsp;онлайн&#8209;кассы<br>
                без&nbsp;головной&nbsp;боли и&nbsp;лишних&nbsp;затрат
            </p>

            <div class="heading-advantages-block row justify-content-center">

                <div class="col-12 col-md-4 mb-3 mb-md-0 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="heading-advantage-item hover-scale-3">
                        <div class="heading-advantage-image">
                            <span class="icon icon-heading-1"></span>
                        </div>

                        <div class="heading-advantage-text">
                            «Под&nbsp;ключ» или&nbsp;частично
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-3 mb-md-0 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                    <div class="heading-advantage-item hover-scale-3">
                        <div class="heading-advantage-image">
                            <span class="icon icon-heading-2"></span>
                        </div>

                        <div class="heading-advantage-text">
                            Модернизация старого оборудования или&nbsp;покупка нового
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="600" data-offset="90%" data-easing="easeOutQuint">
                    <div class="heading-advantage-item hover-scale-3">
                        <div class="heading-advantage-image">
                            <span class="icon icon-heading-3"></span>
                        </div>

                        <div class="heading-advantage-text">
                            Разные тарифы и&nbsp;наборы услуг
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--===================================================== section advantages -->

    <section class="section-advantages" id="advantages">
        <div class="section-bg-holder"></div>

        <div class="heading-images-holder">
            <img src="images/heading-image-1.png" alt=" " class="i-1 cre-animate" data-animation="slide-up-from-bottom"
                 data-speed="1000" data-delay="400" data-offset="90%" data-easing="easeOutQuint">
            <img src="images/heading-image-2.png" alt=" " class="i-2 cre-animate" data-animation="slide-up-from-bottom"
                 data-speed="1000" data-delay="200" data-offset="90%" data-easing="easeOutQuint">
            <img src="images/heading-image-3.png" alt=" " class="i-3 cre-animate" data-animation="slide-up-from-bottom"
                 data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOutQuint">
        </div>

        <div class="bg-el">
            <img src="images/advantages-bg.jpg" alt=" ">
        </div>

        <div class="container">

            <h2 class="text-center">
                Почему с нами?
            </h2>

            <div class="advantages-block row row-2">

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="advantage-item hover-scale-3">
                        <div class="row justify-content-center text-center text-sm-left">
                            <div class="col-12 col-sm-auto">
                                <div class="advantage-image">
                                    <span class="icon icon-advantage-1"></span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8">
                                <div class="advantage-text-holder">
                                    <div class="advantage-title">
                                        Гарантия 100%&nbsp;соответствия закону
                                    </div>

                                    <div class="advantage-text">
                                        Переход осуществляем в&nbsp;строгом соответствии со&nbsp;всеми правилами
                                        и&nbsp;нюансами. Вам не&nbsp;грозят штрафы и&nbsp;претензии со&nbsp;стороны
                                        проверяющих органов.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="100" data-offset="90%" data-easing="easeOutQuint">
                    <div class="advantage-item hover-scale-3">
                        <div class="row justify-content-center text-center text-sm-left">
                            <div class="col-12 col-sm-auto">
                                <div class="advantage-image">
                                    <span class="icon icon-advantage-2"></span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8">
                                <div class="advantage-text-holder">
                                    <div class="advantage-title">
                                        Подробная и&nbsp;понятная консультация
                                    </div>

                                    <div class="advantage-text">
                                        Вы не&nbsp;обязаны вникать в&nbsp;каждый новый закон и&nbsp;досконально
                                        в&nbsp;нём разбираться. У&nbsp;вас и&nbsp;так много дел. Не&nbsp;тратьте
                                        лишнее время&nbsp;— мы быстро и&nbsp;доступно объясним, как что работает.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="advantage-item hover-scale-3">
                        <div class="row justify-content-center text-center text-sm-left">
                            <div class="col-12 col-sm-auto">
                                <div class="advantage-image">
                                    <span class="icon icon-advantage-3"></span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8">
                                <div class="advantage-text-holder">
                                    <div class="advantage-title">
                                        Вы платите только за&nbsp;то, что нужно
                                    </div>

                                    <div class="advantage-text">
                                        И экономите на&nbsp;том, что не&nbsp;нужно. Зачем переплачивать? Вместе мы
                                        выберем только те&nbsp;услуги в&nbsp;рамках тарифов, которые вам действительно
                                        нужны. Мы не&nbsp;будем ничего навязывать.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="800" data-offset="90%" data-easing="easeOutQuint">
                    <div class="advantage-item hover-scale-3">
                        <div class="row justify-content-center text-center text-sm-left">
                            <div class="col-12 col-sm-auto">
                                <div class="advantage-image">
                                    <span class="icon icon-advantage-4"></span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8">
                                <div class="advantage-text-holder">
                                    <div class="advantage-title">
                                        Прозрачное ценообразование
                                    </div>

                                    <div class="advantage-text">
                                        Вы получите отчёт за&nbsp;каждую потраченную тысячу рублей. Мы понимаем, что
                                        новый закон для&nbsp;вас&nbsp;— это досадные внеплановые расходы.
                                        И&nbsp;стараемся сделать их&nbsp;прозрачными и&nbsp;оправданными.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--===================================================== section form-1 -->

    <section class="section-form form-1" id="form-1">
        <div class="section-bg-holder"></div>

        <div class="container text-center">

            <h2>
                Рассчитаем оптимальный набор услуг для&nbsp;Вас
            </h2>

            <p>
                Всего через 5&nbsp;минут консультации Вы получите оптимальный вариант.
            </p>

            <form action="send.php" method="post" class="send-form" autocomplete="off">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6">
                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                    </div>

                    <div class="col-12 col-sm-6">
                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                    </div>
                </div>

                <input type="hidden" name="send_type" class="send-type" value="2">
                <input type="hidden" name="send_extra" class="send-extra" value="1">

                <div class="btn-holder">
                    <button type="submit" class="btn btn-accent btn-big">
                        Послушать предложения и узнать цену
                    </button>
                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                </div>

                <!-- Agreement -->
                <div class="form-agree text-center">
                    <label class="checkbox-label form-agree-check checked">
                        <input type="checkbox" checked>
                        Согласен на&nbsp;обработку персональных данных.
                    </label>
                    <a href="#" class="light underline open-text-modal" data-id="1">Подробнее</a>
                </div>
            </form>

        </div>
    </section>

    <!--===================================================== section price -->

    <section class="section-price" id="price">
        <div class="section-bg-holder"></div>

        <div class="container">

            <h2 class="text-center">
                Пошаговый план перехода на&nbsp;ФЗ&#8209;54
            </h2>

            <div class="tabs-block price-block text-center" data-tab-block="t-price">
                <div class="tabs-title">
                    2 варианта перехода:
                </div>

                <ul class="nav nav-tabs">
                    <li class="tab-link tab-1 active" data-tab="t-price-1" data-tab-block="t-price">
                        Покупка нового оборудования
                    </li>

                    <li class="tab-link tab-2" data-tab="t-price-2" data-tab-block="t-price">
                        Модернизация имеющихся касс
                    </li>

                    <li class="tab-slider"></li>
                </ul>

                <div class="tabs-content-container">

                    <!-- ================================================ price tab 1-->
                    <div class="tab-content active" data-tab="t-price-1" data-tab-block="t-price">
                        <div class="step-block">

                            <!-- single item -->
                            <div class="step-item hover-scale-3">
                                <div class="step-image">
                                    <span class="icon icon-step-1"></span>
                                </div>

                                <div class="step-text">
                                    Получение электронной цифоровой подписи (2700&nbsp;руб.)
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="step-item hover-scale-3">
                                <div class="step-image">
                                    <span class="icon icon-step-2"></span>
                                </div>

                                <div class="step-text">
                                    Заключение договора с&nbsp;оператором фискальных данных
                                    (3000&nbsp;руб. за&nbsp;кассу)
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="step-item hover-scale-3">
                                <div class="step-image">
                                    <span class="icon icon-step-3"></span>
                                </div>

                                <div class="step-text">
                                    Покупка нового фискального регистратора (22300&#8209;31000&nbsp;руб.)
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="step-item hover-scale-3">
                                <div class="step-image">
                                    <span class="icon icon-step-4"></span>
                                </div>

                                <div class="step-text">
                                    Регистрация фискального регистратора за&nbsp;1&nbsp;час (бесплатно)
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="step-item hover-scale-3">
                                <div class="step-image">
                                    <span class="icon icon-step-5"></span>
                                </div>

                                <div class="step-text">
                                    Обновление существующего програмного обеспечения
                                    (2000&nbsp;руб. за&nbsp;рабочее место)
                                </div>
                            </div>

                        </div>

                        <div class="price-sum-holder">
                            Итого от&nbsp;90&nbsp;000&nbsp;руб.
                        </div>

                        <ul class="not-marked price-plus-block">
                            <li>
                                <span class="icon icon-plus"></span>
                                бесплатная доставка оборудования
                            </li>
                            <li>
                                <span class="icon icon-plus"></span>
                                экономия времени
                            </li>
                        </ul>

                        <div class="btn-holder">
                            <button class="btn btn-big btn-accent open-phone-modal" data-extra="3">
                                Проконсультироваться со специалистом
                            </button>
                        </div>
                    </div>

                    <!-- ================================================ price tab 2-->
                    <div class="tab-content" data-tab="t-price-2" data-tab-block="t-price">
                        <div class="modern-block">

                            <div class="modern-item">
                                <div class="modern-image">
                                    <span class="icon icon-modern-1"></span>
                                </div>

                                <div class="modern-text">
                                    Покупка комплекта для&nbsp;модернизации контрольно&#8209;кассовой техники
                                    (150&#8209;5000&nbsp;руб.)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-2"></span>
                                </div>

                                <div class="modern-text">
                                    Покупка фискального накопителя (8000&nbsp;руб.)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-3"></span>
                                </div>

                                <div class="modern-text">
                                    Получение электронной цифоровой подписи (2700&nbsp;руб.)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-4"></span>
                                </div>

                                <div class="modern-text">
                                    Заключение договора с&nbsp;оператором фискальных данных
                                    (3000&nbsp;руб. за&nbsp;кассу)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-5"></span>
                                </div>

                                <div class="modern-text">
                                    Снятие контрольно&#8209;кассовой техники с&nbsp;учёта на&nbsp;месте
                                    за&nbsp;3&nbsp;часа (5000&nbsp;руб.)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-6"></span>
                                </div>

                                <div class="modern-text">
                                    Установка комплекта модернизации за&nbsp;2&nbsp;часа (5000&nbsp;руб.)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-7"></span>
                                </div>

                                <div class="modern-text">
                                    Регистрация фискального регистратора за&nbsp;1&nbsp;час (бесплатно)
                                </div>
                            </div>

                            <div class="modern-item hover-scale-3">
                                <div class="modern-image">
                                    <span class="icon icon-modern-8"></span>
                                </div>

                                <div class="modern-text">
                                    Обновление существующего програмного обеспечения
                                    (2000&nbsp;руб. за&nbsp;рабочее место)
                                </div>
                            </div>

                        </div>

                        <div class="price-sum-holder">
                            Итого от&nbsp;90&nbsp;000&nbsp;руб.
                        </div>

                        <ul class="not-marked price-plus-block">
                            <li>
                                <span class="icon icon-plus"></span>
                                не&nbsp;нужно покупать новые кассы
                            </li>
                            <li>
                                <span class="icon icon-plus"></span>
                                бесплатная доставка дополнительного оборудования
                            </li>
                            <li>
                                <span class="icon icon-plus"></span>
                                бесплатная регистрация фискального регистратора
                            </li>
                        </ul>

                        <div class="btn-holder">
                            <button class="btn btn-big btn-accent open-phone-modal" data-extra="4">
                                Проконсультироваться со специалистом
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!--===================================================== section catalogue -->

    <section class="section-catalogue" id="catalogue">
        <div class="section-bg-holder"></div>

        <div class="container">

            <h2 class="text-center">
                Оборудование
            </h2>

            <div class="catalogue-block row row-2 justify-content-center">

                <!-- single item -->
                <div class="col-12 col-sm-10 col-md-6 mb-3 mb-md-0 cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="catalogue-item">
                        <div class="catalogue-image">
                            <img src="images/catalogue/1.jpg" alt=" ">
                        </div>

                        <div class="catalogue-text-holder">
                            <div class="catalogue-title">
                                Онлайн&#8209;касса<br>
                                ШТРИХ&#8209;М&#8209;01Ф
                            </div>

                            <div class="catalogue-text offtop">
                                Для любых организаций в&nbsp;сфере торговли, услуг, автотранспорта, электросвязи, почты,
                                ЖКХ, АЗС, ресторанов, платежных агентов, отелей, приемных пунктов и&nbsp;прочих
                            </div>

                            <div class="catalogue-price">
                                Цена: 30&nbsp;000&nbsp;руб.
                            </div>
                        </div>

                        <div class="catalogue-btn-holder text-center">
                            <a href="#" class="btn btn-accent open-buy-modal" data-extra="1">
                                <span class="icon icon-basket"></span>
                                Купить
                            </a>

                            <a href="#" class="primary underline open-install-modal" data-extra="1">
                                Заказать установку
                            </a>
                        </div>
                    </div>
                </div>

                <!-- single item -->
                <div class="col-12 col-sm-10 col-md-6 mb-3 mb-md-0 cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                     data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                    <div class="catalogue-item">
                        <div class="catalogue-image">
                            <img src="images/catalogue/2.jpg" alt=" ">
                        </div>

                        <div class="catalogue-text-holder">
                            <div class="catalogue-title">
                                Онлайн&#8209;касса<br>
                                АТОЛ&#8209;25Ф
                            </div>

                            <div class="catalogue-text offtop">
                                Для&nbsp;предприятий с&nbsp;высокой проходимостью, где требуется чек до&nbsp;80&nbsp;мм.
                                Ресурс: 1&nbsp;500&nbsp;000 операций, 150&nbsp;км ленты
                            </div>

                            <div class="catalogue-price">
                                Цена: 31&nbsp;000&nbsp;руб.
                            </div>
                        </div>

                        <div class="catalogue-btn-holder text-center">
                            <a href="#" class="btn btn-accent open-buy-modal" data-extra="2">
                                <span class="icon icon-basket"></span>
                                Купить
                            </a>

                            <a href="#" class="primary underline open-install-modal" data-extra="2">
                                Заказать установку
                            </a>
                        </div>
                    </div>
                </div>

                <!-- single item -->
                <div class="col-12 col-sm-10 col-md-6 mb-3 mb-md-0 cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="catalogue-item">
                        <div class="catalogue-image">
                            <img src="images/catalogue/3.jpg" alt=" ">
                        </div>

                        <div class="catalogue-text-holder">
                            <div class="catalogue-title">
                                Онлайн&#8209;касса<br>
                                АТОЛ&#8209;30Ф
                            </div>

                            <div class="catalogue-text offtop">
                                Для&nbsp;любых предприятий с&nbsp;низкой пропускной способностью и&nbsp;чеками 44&nbsp;или
                                58&nbsp;мм. Ресурс: 50&nbsp;км ленты
                            </div>

                            <div class="catalogue-price">
                                Цена: 18&nbsp;000&nbsp;руб.
                            </div>
                        </div>

                        <div class="catalogue-btn-holder text-center">
                            <a href="#" class="btn btn-accent open-buy-modal" data-extra="3">
                                <span class="icon icon-basket"></span>
                                Купить
                            </a>

                            <a href="#" class="primary underline open-install-modal" data-extra="3">
                                Заказать установку
                            </a>
                        </div>
                    </div>
                </div>

                <!-- single item -->
                <div class="col-12 col-sm-10 col-md-6 cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                     data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                    <div class="catalogue-item">
                        <div class="catalogue-image">
                            <img src="images/catalogue/4.jpg" alt=" ">
                        </div>

                        <div class="catalogue-text-holder">
                            <div class="catalogue-title">
                                Онлайн&#8209;касса<br>
                                АТОЛ&#8209;11Ф
                            </div>

                            <div class="catalogue-text offtop">
                                Для&nbsp;предприятий любых отраслей с&nbsp;низкой пропускной способностью,
                                где&nbsp;требуется чек 44&nbsp;или 58&nbsp;мм. Ресурс: 50&nbsp;км ленты
                            </div>

                            <div class="catalogue-price">
                                Цена: 21&nbsp;300&nbsp;руб.
                            </div>
                        </div>

                        <div class="catalogue-btn-holder text-center">
                            <a href="#" class="btn btn-accent open-buy-modal" data-extra="4">
                                <span class="icon icon-basket"></span>
                                Купить
                            </a>

                            <a href="#" class="primary underline open-install-modal" data-extra="4">
                                Заказать установку
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="btn-holder spoiler-holder text-center">
                    <button type="button" class="btn btn-big btn-primary spoiler" data-spoiler-link="1">
                        Показать всё оборудование
                    </button>
                </div>

                <div class="spoiler-content" data-spoiler-link="1">

                    <!-- single item -->
                    <div class="col-12 col-sm-10 col-md-6 cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                         data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                        <div class="catalogue-item">
                            <div class="catalogue-image">
                                <img src="images/catalogue/5.jpg" alt=" ">
                            </div>

                            <div class="catalogue-text-holder">
                                <div class="catalogue-title">
                                    ФН-1 РИК
                                </div>

                                <div class="catalogue-text offtop">
                                    Для любых отраслей с&nbsp;низкой пропускной способностью, где требуется чек
                                    44&nbsp;или 58&nbsp;мм. Ресурс: 50&nbsp;км ленты
                                </div>

                                <div class="catalogue-price">
                                    Цена: 21&nbsp;300&nbsp;руб.
                                </div>
                            </div>

                            <div class="catalogue-btn-holder text-center">
                                <a href="#" class="btn btn-accent open-buy-modal" data-extra="5">
                                    <span class="icon icon-basket"></span>
                                    Купить
                                </a>

                                <a href="#" class="primary underline open-install-modal" data-extra="5">
                                    Заказать установку
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!--===================================================== section tariff -->

    <section class="section-tariff" id="tariff">
        <div class="section-bg-holder"></div>

        <div class="container text-center">

            <h2>
                Тарифы
            </h2>

            <div class="tariff-block row justify-content-center">

                <div class="col-12 col-sm-auto col-lg-4 mb-3 mb-lg-0 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="tariff-item">
                        <div class="tariff-title">
                            Mini
                        </div>

                        <div class="tariff-text offtop">
                            Модернизация касс «под&nbsp;ключ»
                        </div>

                        <div class="tariff-price primary">
                            50 000 руб.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-auto col-lg-4 mb-3 mb-lg-0 cre-animate" data-animation="scale-up" data-speed="1000"
                     data-delay="600" data-offset="90%" data-easing="easeOutQuint">
                    <div class="tariff-item active">
                        <div class="tariff-title">
                            Standart
                        </div>

                        <div class="tariff-text offtop">
                            Установка и&nbsp;регистрация нового комплекта&nbsp;оборудования
                        </div>

                        <div class="tariff-price primary">
                            50 000 руб.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-auto col-lg-4 mb-3 mb-lg-0 cre-animate" data-animation="slide-in-from-right" data-speed="1000"
                     data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                    <div class="tariff-item">
                        <div class="tariff-title">
                            Maxi
                        </div>

                        <div class="tariff-text offtop">
                            Установка и&nbsp;регистрация нового комплекта&nbsp;оборудования +&nbsp;услуги оператора
                            фискальных данных
                        </div>

                        <div class="tariff-price primary">
                            50 000 руб.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--===================================================== section document -->

    <section class="section-document" id="document">
        <div class="section-bg-holder"></div>

        <div class="container text-center">

            <h2>
                Посмотрите, по&nbsp;какому договору мы будем работать:
            </h2>

            <div class="document-block cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                 data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                <a href="images/review/1.jpg" class="document-item" target="_blank">
                    <img src="mthumb.php?src=images/review/1.jpg&amp;w=460&amp;h=654" alt=" ">
                </a>
            </div>

        </div>
    </section>

    <!--===================================================== section warning -->

    <section class="section-warning" id="warning">
        <div class="section-bg-holder"></div>

        <div class="container text-center">

            <h2>
                Почему не&nbsp;стоит переходить на&nbsp;ФЗ&#8209;54 самостоятельно?
            </h2>

            <div class="warning-block row row-2">

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="warning-item hover-scale-3">
                        <div class="warning-image">
                            <span class="icon icon-warning-1"></span>
                        </div>

                        <div class="warning-title">
                            Наличие недочёта повлечёт блокировку регистратора
                        </div>

                        <div class="warning-text offtop">
                            Есть <b>риск</b> упустить важную деталь или&nbsp;<b>совершить ошибку</b> в&nbsp;данных
                            <b>при&nbsp;регистрации</b> нового оборудования.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                    <div class="warning-item hover-scale-3">
                        <div class="warning-image">
                            <span class="icon icon-warning-2"></span>
                        </div>

                        <div class="warning-title">
                            Несовместимость с&nbsp;ПО
                        </div>

                        <div class="warning-text offtop">
                            Самостоятельно купленная контрольно&#8209;кассовая техника
                            <b>может оказаться несовместимой с&nbsp;программным обеспечением.</b>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <div class="warning-item hover-scale-3">
                        <div class="warning-image">
                            <span class="icon icon-warning-3"></span>
                        </div>

                        <div class="warning-title">
                            Вы потратите больше времени
                        </div>

                        <div class="warning-text offtop">
                            Рабочие процессы придется приостановить. При&nbsp;обращении к&nbsp;нам вы
                            <b>не&nbsp;потеряете прибыль и&nbsp;клиентов</b>. Мы <b>установим</b> фискальный
                            регистратор всего <b>за&nbsp;1&nbsp;час!</b>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 cre-animate" data-animation="slide-in-from-left" data-speed="1000"
                     data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                    <div class="warning-item hover-scale-3">
                        <div class="warning-image">
                            <span class="icon icon-warning-4"></span>
                        </div>

                        <div class="warning-title">
                            Обратиться за&nbsp;помощью будет не&nbsp;к&nbsp;кому
                        </div>

                        <div class="warning-text offtop">
                            Мы&nbsp;же всегда <b>остаёмся на&nbsp;связи и&nbsp;поможем решить любую проблему.</b>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--===================================================== section about -->

    <section class="section-about" id="about">
        <div id="about-line"></div>
        <div class="section-bg-holder"></div>

        <div class="container text-center">

            <h2>
                О компании
            </h2>

            <p>
                Группа компаний ITS&nbsp;Group&nbsp;— эксперт в&nbsp;области автоматизации бизнеса!
            </p>

            <div class="about-block row row-3">

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="about-item">
                        <div class="about-number primary">
                            <span data-from="0" data-to="11">11</span>
                            лет
                        </div>
                        <div class="about-text">
                            на рынке
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="about-item">
                        <div class="about-number primary">
                            <span data-from="0" data-to="17">17</span>
                        </div>
                        <div class="about-text">
                            новых клиентов<br>
                            в месяц
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="about-item">
                        <div class="about-number primary">
                            <span data-from="0" data-to="742">742</span>+
                        </div>
                        <div class="about-text">
                            довольных клиента
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="about-item">
                        <div class="about-number primary">
                            <span data-from="0" data-to="1475">1475</span>+
                        </div>
                        <div class="about-text">
                            успешных проектов
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="about-item">
                        <div class="about-text top">
                            Работа в
                        </div>
                        <div class="about-number primary">
                            <span data-from="0" data-to="45">45</span>
                        </div>
                        <div class="about-text">
                            регионах РФ
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="about-item">
                        <div class="about-number primary">
                            <span data-from="0" data-to="24">24</span>/<span data-from="0" data-to="7">7</span>
                        </div>
                        <div class="about-text">
                            техподдержка
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--===================================================== section reviews -->

    <section class="section-reviews" id="reviews">
        <div class="section-bg-holder"></div>

        <div class="container">

            <h2 class="text-center">
                Отзывы
            </h2>

            <div class="reviews-slider-holder">
                <div class="reviews-block swiper-container">
                    <div class="swiper-wrapper">

                        <!-- single item -->
                        <div class="swiper-slide">
                            <a href="images/review/1.jpg" class="review-item" data-rel="fancybox[reviews]">
                                <img src="mthumb.php?src=images/review/1.jpg&amp;w=300&amp;h=393" alt=" ">
                            </a>
                        </div>

                        <!-- single item -->
                        <div class="swiper-slide">
                            <a href="images/review/2.jpg" class="review-item" data-rel="fancybox[reviews]">
                                <img src="mthumb.php?src=images/review/2.jpg&amp;w=300&amp;h=393" alt=" ">
                            </a>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination review-pagination"></div>
            </div>

        </div>
    </section>

    <!--===================================================== section work -->

    <section class="section-work" id="work">
        <div class="section-bg-holder"></div>

        <div class="container">

            <h2 class="text-center">
                Сэкономьте своё&nbsp;время, исключите&nbsp;риск ошибок и&nbsp;штрафов
            </h2>

            <p class="text-center">
                Передайте нам все&nbsp;процессы, связанные с&nbsp;переходом на&nbsp;ФЗ&#8209;54
            </p>

            <div class="work-block row align-items-center justify-content-center">
              <div class="col-12 col-md-5 mb-3 mb-sm-4 mb-md-0 text-center">
                <div class="work-el cre-animate" data-animation="slide-up-from-bottom" data-speed="1000"
                     data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                    <img src="images/heading-image-1.png" alt=" ">
                </div>
              </div>

                <div class="col-12 col-md-7">
                    <ol class="work-list">
                        <li class="cre-animate" data-animation="slide-in-from-right" data-speed="1000"
                            data-delay="200" data-offset="90%" data-easing="easeOutQuint">
                            Снятие старого оборудования с&nbsp;учёта или его&nbsp;модернизация
                        </li>
                        <li class="cre-animate" data-animation="slide-in-from-right" data-speed="1000"
                            data-delay="300" data-offset="90%" data-easing="easeOutQuint">
                            Подбор нового оборудования, его&nbsp;установка, настройка и&nbsp;обновление&nbsp;ПО
                        </li>
                        <li class="cre-animate" data-animation="slide-in-from-right" data-speed="1000"
                            data-delay="400" data-offset="90%" data-easing="easeOutQuint">
                            Регистрация на&nbsp;необходимых порталах
                        </li>
                        <li class="cre-animate" data-animation="slide-in-from-right" data-speed="1000"
                            data-delay="500" data-offset="90%" data-easing="easeOutQuint">
                            Оформление документов для&nbsp;налоговой
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </section>

    <!--===================================================== section form-2 -->

    <section class="section-form form-2" id="form-2">
        <div class="section-bg-holder"></div>

        <div class="container text-center">

            <h2>
                Узнайте, какой вариант перехода лучше выбрать? Какой тариф выгоднее для&nbsp;вас?
            </h2>

            <p>
                Пусть ФЗ&#8209;54 пройдет для&nbsp;вас максимально быстро и&nbsp;безболезненно!
            </p>

            <form action="send.php" method="post" class="send-form" autocomplete="off">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-4">
                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                    </div>

                    <div class="col-12 col-sm-8 col-md-4">
                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                    </div>

                    <div class="col-12 col-sm-8 col-md-4">
                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">
                    </div>
                </div>

                <input type="hidden" name="send_type" class="send-type" value="2">
                <input type="hidden" name="send_extra" class="send-extra" value="2">

                <div class="btn-holder">
                    <button type="submit" class="btn btn-accent btn-big">
                        Пообщаться со специалистом
                    </button>
                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                </div>

                <!-- Agreement -->
                <div class="form-agree text-center">
                    <label class="checkbox-label form-agree-check checked">
                        <input type="checkbox" checked>
                        Согласен на&nbsp;обработку персональных данных.
                    </label>
                    <a href="#" class="light underline open-text-modal" data-id="1">Подробнее</a>
                </div>
            </form>

        </div>
    </section>


    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-8 col-md-4 mb-3 mb-md-0 text-center text-md-left">

                    <!-- logo -->
                    <a href="#" class="logo si-jump">
                        <img src="images/logo.png" alt=" ">
                    </a>

                    <!-- company legal block -->
                    <div class="company-legal-block">
                        <dl>
                            <dt>ИНН:</dt>
                            <dd></dd>
                        </dl>

                        <dl>
                            <dt>ОГРН:</dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div>

                <!-- company info block -->
                <div class="col-12 col-sm-8 col-md-4 mb-3 mb-md-0 text-center text-md-left">
                    <div class="company-info-block">
                        <address>
                            <dl>
                                <dt>Адрес:</dt>
                                <dd><?php echo $p_address; ?></dd>
                            </dl>
                        </address>

                        <p>
                            <a href="mailto:<?php echo $p_email; ?>" class="primary underline">
                                <?php echo $p_email; ?>
                            </a>
                        </p>

                        <p>
                            <a href="#" class="primary underline open-text-modal" data-id="1">
                                Политика конфиденциальности
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-4 text-center text-md-right">

                    <!-- Phone block -->
                    <div class="si-phone">
                        <a href="tel:<?php echo $p_phone_link; ?>" class="phone-link dark"><?php echo $p_phone; ?></a>
                        <a href="#" class="btn btn-accent open-phone-modal" data-extra="2">
                            <span class="icon icon-phone"></span>
                            Заказать звонок
                        </a>
                    </div>

                    <!-- copyright block -->
                    <div class="copyright">
                        Разработано в
                        <a href="http://hello-brand.ru/" class="primary underline" target="_blank"
                           rel="nofollow noopener">
                            "Hello, brand!"
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </footer>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container text-center">

                <div class="si-success-modal-title">
                    Спасибо!
                </div>

                <div class="success-time">
                    Наш менеджер свяжется с вами в течение 15 минут
                </div>

                <p>
                    <strong>Время работы отдела продаж:</strong>
                    пн-пт с 10.00 до 20.00 (по Москве)
                </p>

            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal phone-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container text-center">

                <div class="modal-form-title">
                    Закажите консультацию
                </div>

                <div class="modal-time">
                    Ответ в течение 15 минут
                </div>

                <form action="send.php" method="post" class="send-form" autocomplete="off">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                        </div>
                    </div>

                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>

                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                    <div class="btn-holder">
                        <button type="submit" class="btn btn-accent btn-big">Позвоните мне</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree text-center">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Согласен на&nbsp;обработку персональных данных.
                        </label>
                        <a href="#" class="dark underline open-text-modal" data-id="1">Подробнее</a>
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== buy modal -->
        <div class="si-modal buy-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container text-center">

                <div class="modal-form-title">
                    Оставьте заявку на&nbsp;покупку
                </div>

                <div class="modal-time">
                    Ответ в течение 15 минут
                </div>

                <form action="send.php" method="post" class="send-form" autocomplete="off">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                        </div>
                    </div>

                    <input type="hidden" name="send_type" class="send-type" value="3">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                    <div class="btn-holder">
                        <button type="submit" class="btn btn-accent btn-big">Оставить заявку</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree text-center">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Согласен на&nbsp;обработку персональных данных.
                        </label>
                        <a href="#" class="dark underline open-text-modal" data-id="1">Подробнее</a>
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== install modal -->
        <div class="si-modal install-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container text-center">

                <div class="modal-form-title">
                    Оставьте заявку на&nbsp;установку
                </div>

                <div class="modal-time">
                    Ответ в течение 15 минут
                </div>

                <form action="send.php" method="post" class="send-form" autocomplete="off">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                        </div>
                    </div>

                    <input type="hidden" name="send_type" class="send-type" value="4">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                    <div class="btn-holder">
                        <button type="submit" class="btn btn-accent btn-big">Оставить заявку</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree text-center">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Согласен на&nbsp;обработку персональных данных.
                        </label>
                        <a href="#" class="dark underline open-text-modal" data-id="1">Подробнее</a>
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== text modal 1 -->
        <div class="si-modal text-modal text-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title text-center">
                    Политика конфиденциальности
                </div>

                <div class="modal-text-block">
                    <p class="bold">
                        Введение
                    </p>

                    <p>
                        Мы стремимся уважать информацию личного характера, касающуюся посетителей нашего сайта. В
                        настоящей Политике конфиденциальности разъясняются некоторые из мер, которые мы предпринимаем
                        для защиты Вашей частной жизни. Конфиденциальность информации личного характера «Информация
                        личного характера» обозначает любую информацию, которая может быть использована для
                        идентификации личности, например, фамилия или адрес электронной почты.
                    </p>

                    <p class="bold">
                        Использование информации частного характера
                    </p>

                    <p>
                        Информация личного характера, полученная через наш сайт, используется нами, среди прочего, для
                        целей регистрирования пользователей, для поддержки работы и совершенствования нашего сайта,
                        отслеживания политики и статистики пользования сайтом, а также в целях, разрешенных вами.
                    </p>

                    <p class="bold">
                        Раскрытие информации частного характера
                    </p>

                    <p>
                        Мы нанимаем другие компании или связаны с компаниями, которые по нашему поручению предоставляют
                        услуги, такие как обработка и доставка информации, размещение информации на данном сайте,
                        доставка содержания и услуг, предоставляемых настоящим сайтом, выполнение статистического
                        анализа. Чтобы эти компании могли предоставлять эти услуги, мы можем сообщать им информацию
                        личного характера, однако им будет разрешено получать только ту информацию личного характера,
                        которая необходима им для предоставления услуг. Они обязаны соблюдать конфиденциальность этой
                        информации, и им запрещено использовать ее в иных целях.
                    </p>

                    <p>
                        Мы можем использовать или раскрывать Ваши личные данные и по иным причинам, в том числе, если мы
                        считаем, что это необходимо в целях выполнения требований закона или решений суда, для защиты
                        наших прав или собственности, защиты личной безопасности пользователей нашего сайта или
                        представителей широкой общественности, в целях расследования или принятия мер в отношении
                        незаконной или предполагаемой незаконной деятельности, в связи с корпоративными сделками, такими
                        как разукрупнение, слияние, консолидация, продажа активов или в маловероятном случае
                        банкротства, или в иных целях в соответствии с Вашим согласием.
                    </p>

                    <p>
                        Мы не будем продавать, предоставлять на правах аренды или лизинга наши списки пользователей с
                        адресами электронной почты третьим сторонам.
                    </p>

                    <p class="bold">
                        Доступ к информации личного характера
                    </p>

                    <p>
                        Если после предоставления информации на данный сайт, Вы решите, что Вы не хотите, чтобы Ваша
                        Персональная информация использовалась в каких-либо целях, Вы можете исключить себя из списка,
                        связавшись с нами по следующему адресу:
                        <a href="mailto:info@kafe-soft.ru" class="primary underline">info@kafe-soft.ru</a>
                    </p>

                    <p class="bold">
                        Наша практика в отношении информации неличного характера
                    </p>

                    <p>
                        Мы можем собирать информацию неличного характера о Вашем посещении сайта, в том числе
                        просматриваемые вами страницы, выбираемые вами ссылки, а также другие действия в связи с Вашим
                        использованием нашего сайта. Кроме того, мы можем собирать определенную стандартную информацию,
                        которую Ваш браузер направляет на любой посещаемый вами сайт, такую как Ваш IP-адрес, тип
                        браузера и язык, время, проведенное на сайте, и адрес соответствующего веб-сайта. Использование
                        закладок (cookies) Файл cookie — это небольшой текстовый файл, размещаемый на Вашем твердом
                        диске нашим сервером. Cookies содержат информацию, которая позже может быть нами прочитана.
                        Никакие данные, собранные нами таким путем, не могут быть использованы для идентификации
                        посетителя сайта. Не могут cookies использоваться и для запуска программ или для заражения
                        Вашего компьютера вирусами. Мы используем cookies в целях контроля использования нашего сайта,
                        сбора информации неличного характера о наших пользователях, сохранения Ваших предпочтений и
                        другой информации на Вашем компьютере с тем, чтобы сэкономить Ваше время за счет снятия
                        необходимости многократно вводить одну и ту же информацию, а также в целях отображения Вашего
                        персонализированного содержания в ходе Ваших последующих посещений нашего сайта. Эта информация
                        также используется для статистических исследований, направленных на корректировку содержания в
                        соответствии с предпочтениями пользователей.
                    </p>

                    <p class="bold">
                        Агрегированная информация
                    </p>

                    <p>
                        Мы можем объединять в неидентифицируемом формате предоставляемую вами личную информацию и личную
                        информацию, предоставляемую другими пользователями, создавая таким образом агрегированные
                        данные. Мы планируем анализировать данные агрегированного характера в основном в целях
                        отслеживания групповых тенденций. Мы не увязываем агрегированные данные о пользователях с
                        информацией личного характера, поэтому агрегированные данные не могут использоваться для
                        установления связи с вами или Вашей идентификации. Вместо фактических имен в процессе создания
                        агрегированных данных и анализа мы будем использовать имена пользователей. В статистических
                        целях и в целях отслеживания групповых тенденций анонимные агрегированные данные могут
                        предоставляться другим компаниям, с которыми мы взаимодействуем.
                    </p>

                    <p class="bold">
                        Изменения, вносимые в настоящее Заявление о конфиденциальности
                    </p>

                    <p>
                        Мы сохраняeм за собой право время от времени вносить изменения или дополнения в настоящую
                        Политику конфиденциальности — частично или полностью. Мы призываем Вас периодически перечитывать
                        нашу Политику конфиденциальности с тем, чтобы быть информированными относительно того, как мы
                        защищаем Вашу личную информацию. С последним вариантом Политики конфиденциальности можно
                        ознакомиться путем нажатия на гипертекстовую ссылку «Политика конфиденциальности», находящуюся в
                        нижней части домашней страницы данного сайта. Во многих случаях, при внесении изменений в
                        Политику конфиденциальности, мы также изменяем и дату, проставленную в начале текста Политики
                        конфиденциальности, однако других уведомлений об изменениях мы можем вам не направлять. Однако,
                        если речь идет о существенных изменениях, мы уведомим Вас, либо разместив предварительное
                        заметное объявление о таких изменениях, либо непосредственно направив вам уведомление по
                        электронной почте. Продолжение использования вами данного сайта и выход на него означает Ваше
                        согласие с такими изменениями.
                    </p>

                    <p class="bold">
                        Связь с нами
                    </p>

                    <p>
                        Если у Вас возникли какие-либо вопросы или предложения по поводу нашего положения о
                        конфиденциальности, пожалуйста, свяжитесь с нами по следующему адресу:
                        <a href="mailto:info@kafe-soft.ru" class="primary underline">info@kafe-soft.ru</a>
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<script type="text/javascript">
    var template_url = '<?php echo SI_CurrentPageURL(); ?>';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>
