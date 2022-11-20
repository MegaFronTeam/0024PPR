<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tisma
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no,  shrink-to-fit=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="format-detection" content="telephone=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php
  $get_template_directory_uri=get_template_directory_uri();

  $mail = get_field('имейл00', 'option');
  $mail_href = 'mailto:'.get_field('имейл00', 'option');

  $tel = get_field('телефон00', 'option');
  $tel_href = "tel:+".str_replace('/[^0-9]/', "", $tel);
  $tel_wa_href = "https://wa.me/".str_replace('/[^0-9]/', "", $tel);

  $menu_args = array(
    'menu' => 'main_menu',
    'theme_location' => '',
    'container_class' => 'swiper menu-slide-js',
    'menu_class' => 'swiper-wrapper',
    'add_li_class'  => 'swiper-slide',
    'depth'	=> 1,
    'fallback_cb' => false
  );
?>
<div class="main-wrapper">
  <div class="menu-mobile menu-mobile--js d-lg-none">
    <div class="menu-mobile__inner">
      <div class="menu-mobile__top-row row align-items-center">
        <div class="col">
          <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
          </div>
        </div>
        <div class="col-auto">
          <a class="menu-mobile__logo" href="/"><img loading="lazy" src="img/svg/logo.svg" alt=""/>
          </a>
        </div>
        <div class="col text-end">
          <a class="menu-mobile__wa-btn ms-auto" href="#"><img loading="lazy" src="img/svg/wa.svg" alt=""/>
          </a>
        </div>
      </div>
      <UL class="menu">
        <li><a href="#">Гарантии</a></li>
        <li><a href="#">Услуги по ОДД</a></li>
        <li><a href="#">Согласования</a></li>
        <li><a href="#">Отзывы о нас</a></li>
        <li><a href="#">Наши объекты</a></li>
        <li><a href="#">О компании</a></li>
        <li><a href="#">Контакты</a></li>
      </UL>
      <a class="menu-mobile__callback-btn link-modal-js" href="#modal-call" data-order="Вызов модалки в шапке" data-pic="img/@2x/modal-paper-3.png" data-title="Мы перезвоним!">Обратный звонок
      </a>
      <div class="menu-mobile__tell-row row justify-content-between">
        <div class="col-auto">
          <a class="menu-mobile__link menu-mobile__link--mail" href="mailto:mail@orgdoc.ru">mail@orgdoc.ru
          </a>
        </div>
        <div class="col-auto">
          <a class="menu-mobile__link menu-mobile__link--tell" href="telto:+74959713971">+7 (495) 971-39-71
          </a>
        </div>
      </div>
      <div class="menu-mobile__footer">
        <div class="top-nav__since-row row">
          <div class="col-auto">
            <div class="top-nav__flag">4,8
            </div>
          </div>
          <div class="col">
            <div class="top-nav__stars">
              <svg class="icon icon-star ">
                <use xlink:href="img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="icon icon-star ">
                <use xlink:href="img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="icon icon-star ">
                <use xlink:href="img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="icon icon-star ">
                <use xlink:href="img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="icon icon-star ">
                <use xlink:href="img/svg/sprite.svg#star"></use>
              </svg>
            </div>
            <div class="top-nav__s-txt"><b>Работаем с 2006 года.</b>
              Рейтинг на основании 180 отзывов
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  мобильное меню-->
  <!-- start header-->
  <header class="header header--js" id="header">
    <!-- start top-nav-->
    <div class="top-nav block-with-lazy">
      <div class="container-lg">
        <div class="top-nav__row row align-items-center flex-nowrap">
          <div class="col-auto d-flex align-items-center">
            <a class="top-nav__logo" href="/"><img loading="lazy" src="img/svg/logo-new.svg" alt=""/><span>С-проджект</span>
            </a>
            <div class="top-nav__text">Проектирование<br>и согласование организации дорожного движения
            </div>
          </div>
          <div class="col-auto col-lg d-none d-lg-block">
            <a class="top-nav__ball-row row scroll-link" href="#sContact">
              <div class="col-auto">
                <div class="top-nav__ball"><img loading="lazy" src="img/svg/location.svg" alt=""/>
                </div>
              </div>
              <div class="col">
                <div class="top-nav__txt">Москва, Алтуфьевское ш., д. 48, корп. 1
                </div>
              </div>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <div class="soc">
              <a class="soc__item" href="#" target="_blank" style="--bgColor: linear-gradient(180deg, #00E676 0%, #00A454 100%);">
                <svg class="icon icon-whatsapp ">
                  <use xlink:href="img/svg/sprite.svg#whatsapp"></use>
                </svg>
              </a>
              <a class="soc__item" href="#" target="_blank" style="--bgColor: linear-gradient(180deg, #35AADA 0%, #1D91C2 100%);">
                <svg class="icon icon-telegram ">
                  <use xlink:href="img/svg/sprite.svg#telegram"></use>
                </svg>
              </a>
              <a class="soc__item" href="#" target="_blank" style="--bgColor: linear-gradient(180deg, #4D76A1 0%, #0E4C8D 100%);">
                <svg class="icon icon-vk ">
                  <use xlink:href="img/svg/sprite.svg#vk"></use>
                </svg>
              </a>
            </div>
          </div>
          <div class="col col-lg-auto text-end">
            <a class="top-nav__mail" href="mailto:mail@orgdoc.ru">mail@orgdoc.ru
            </a>
            <div>
              <a class="top-nav__tell" href="telto:+74959713971">+7 (495) 971-39-71
              </a>
            </div>
          </div>
          <div class="col-auto d-none d-md-block">
            <a class="top-nav__callback-btn link-modal-js" href="#modal-call" data-order="Вызов модалки в шапке" data-pic="img/@2x/modal-paper-3.png" data-title="Мы перезвоним!">перезвоните мне
            </a>
          </div>
          <div class="col-auto d-lg-none ms-auto">
            <div class="row gx-1">
              <div class="col-auto">
                <a class="top-nav__wa-btn" href="#"><img loading="lazy" src="img/svg/wa-icon.svg" alt=""/>
                </a>
              </div>
              <div class="col-auto">
                <a class="top-nav__wa-btn" href="#"><img loading="lazy" src="img/svg/tg-icon.svg" alt=""/>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end top-nav-->
    <!-- start topLine-->
    <div class="topLine" id="topLine">
      <div class="container-lg">
        <div class="menu">
          <div class="swiper menu-slide-js">
            <ul class="swiper-wrapper">
              <li class="swiper-slide"><a href="#">Гарантии</a></li>
              <li class="swiper-slide"><a href="#">Услуги по ОДД</a></li>
              <li class="swiper-slide"><a href="#">Согласования</a></li>
              <li class="swiper-slide"><a href="#">Отзывы о нас</a></li>
              <li class="swiper-slide"><a href="#">Наши объекты</a></li>
              <li class="swiper-slide"><a href="#">О компании</a></li>
              <li class="swiper-slide"><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fixed-line fixed-line--js">
      <div class="container-lg">
        <div class="fixed-line__row row align-items-center gy-3">
          <div class="col d-lg-none">
            <a class="fixed-line__logo" href="/"><img loading="lazy" src="img/svg/logo-new.svg" alt=""/><span>С-проджект</span>
            </a>
          </div>
          <div class="col-lg order-lg-0 order-last">
            <div class="menu">
              <div class="swiper menu-slide-js">
                <ul class="swiper-wrapper">
                  <li class="swiper-slide"><a href="#">Гарантии</a></li>
                  <li class="swiper-slide"><a href="#">Услуги по ОДД</a></li>
                  <li class="swiper-slide"><a href="#">Согласования</a></li>
                  <li class="swiper-slide"><a href="#">Отзывы о нас</a></li>
                  <li class="swiper-slide"><a href="#">Наши объекты</a></li>
                  <li class="swiper-slide"><a href="#">О компании</a></li>
                  <li class="swiper-slide"><a href="#">Контакты</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="fixed-line__mail-col col-auto text-end">
            <div>
              <a class="fixed-line__tell" href="telto:+74959713971">+7 (495) 971-39-71
              </a>
            </div>
            <a class="fixed-line__mail" href="mailto:mail@orgdoc.ru">mail@orgdoc.ru
            </a>
          </div>
          <div class="col-auto d-lg-none">
            <div class="row gx-1">
              <div class="col-auto">
                <a class="fixed-line__wa-btn" href="#"><img loading="lazy" src="img/svg/wa-icon.svg" alt=""/>
                </a>
              </div>
              <div class="col-auto">
                <a class="fixed-line__wa-btn" href="#"><img loading="lazy" src="img/svg/tg-icon.svg" alt=""/>
                </a>
              </div>
            </div>
          </div>
          <div class="col-auto d-none d-lg-block">
            <a class="fixed-line__callback-btn link-modal-js" href="#modal-call" data-order="Вызов модалки в фиксированной шапке" data-pic="img/@2x/modal-paper-3.png" data-title="Мы перезвоним!">перезвоните мне
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- end topLine-->
  </header>