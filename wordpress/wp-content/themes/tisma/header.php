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
  <?php echo get_field('коды_в_верху_страницы', 'option')?>
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php
  $get_template_directory_uri=get_template_directory_uri();

  $mail = get_field('email', 'option');
  $mail_href = 'mailto:'.get_field('email', 'option');

  $tel = get_field('телефон', 'option');
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
  <!-- start header-->
  <header class="header header--js" id="header">
    <!-- start top-nav-->
    <?php 
      $mail = get_field('email', 'option');
      $mail_href = 'mailto:'.get_field('email', 'option');
    
      $tel = get_field('телефон', 'option');
      $tel_href = "tel:".str_replace(' ', "", $tel);

      $adress = get_field('адрес', 'option');
    ?>
    <div class="top-nav block-with-lazy">
      <div class="container-lg">
        <div class="top-nav__row row align-items-center flex-nowrap">
          <div class="col-auto d-flex align-items-center">
            <a class="top-nav__logo" href="/">
              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/logo-new.svg" alt=""/><span>С-проджект</span>
            </a>
            <div class="top-nav__text"><?php echo get_field('текст_рядом_с_лого', 'option') ?>
            </div>
          </div>
          <div class="col-auto col-lg d-none d-lg-block">
            <a class="top-nav__ball-row row scroll-link" href="#sContact">
              <div class="col-auto">
                <div class="top-nav__ball"><img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/location.svg" alt=""/>
                </div>
              </div>
              <div class="col">
                <div class="top-nav__txt"><?php echo $adress?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <div class="soc">
              <?php if (have_rows('ссылка_на_соц_сети', 'option')): while (have_rows('ссылка_на_соц_сети', 'option')) : the_row();?>
                <a class="soc__item soc__item--<?php echo get_sub_field('иконка');?>" href="<?php echo get_sub_field('ссылка');?>" target="_blank">
                  <svg class="icon icon-<?php echo get_sub_field('иконка');?> ">
                    <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#<?php echo get_sub_field('иконка');?>"></use>
                  </svg>
                </a>
              <?php endwhile; else : endif; ?>
            </div>
          </div>
          <div class="col col-lg-auto text-end">
            <a class="top-nav__mail" href="<?php echo $mail_href?>"><?php echo $mail?>
            </a>
            <div>
              <a class="top-nav__tell" href="<?php echo $tel_href?>"><?php echo $tel?>
              </a>
            </div>
          </div>
          <div class="col-auto d-none d-md-block">
            <a class="top-nav__callback-btn link-modal-js" href="#modal-call" data-order="Вызов модалки в шапке" data-pic="<?php echo $get_template_directory_uri;?>/public/img/<?php echo get_field('ссылка_на_изображение', 'option')?>" data-title="<?php echo get_field('заголовок', 'option')?>">перезвоните мне
            </a>
          </div>
          <div class="col-auto d-lg-none ms-auto">
            <div class="row gx-1">
              <?php if (have_rows('социальные_сети_в_шапке', 'option')): while (have_rows('социальные_сети_в_шапке', 'option')) : the_row();?>
                <div class="col-auto">
                  <a class="top-nav__<?php echo get_sub_field('название');?>-btn" href="<?php echo get_sub_field('ссылка');?>">
                    <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/<?php echo get_sub_field('название');?>-icon.svg" alt=""/>
                  </a>
                </div>
              <?php endwhile; else : endif; ?>
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
              <li class="swiper-slide"><a href="#sOrganize">Гарантии</a></li>
              <li class="swiper-slide"><a href="#sExamples2">Услуги по ОДД</a></li>
              <li class="swiper-slide"><a href="#sCases">Согласования</a></li>
              <li class="swiper-slide"><a href="#sOpen">Отзывы о нас</a></li>
              <li class="swiper-slide"><a href="#sWhatWeDo">Наши объекты</a></li>
              <li class="swiper-slide"><a href="#sOpen2">О компании</a></li>
              <li class="swiper-slide"><a href="#sContact">Контакты</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fixed-line fixed-line--js">
      <div class="container-lg">
        <div class="fixed-line__row row align-items-center gy-3">
          <div class="col d-lg-none">
            <a class="fixed-line__logo" href="/">
              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/logo-new.svg"?> alt=""/><span>С-проджект</span>
            </a>
          </div>
          <div class="col-lg order-lg-0 order-last">
            <div class="menu">
              <div class="swiper menu-slide-js">
                <ul class="swiper-wrapper">
                  <li class="swiper-slide"><a href="#sOrganize">Гарантии</a></li>
                  <li class="swiper-slide"><a href="#sExamples2">Услуги по ОДД</a></li>
                  <li class="swiper-slide"><a href="#sCases">Согласования</a></li>
                  <li class="swiper-slide"><a href="#sOpen">Отзывы о нас</a></li>
                  <li class="swiper-slide"><a href="#sWhatWeDo">Наши объекты</a></li>
                  <li class="swiper-slide"><a href="#sOpen2">О компании</a></li>
                  <li class="swiper-slide"><a href="#sContact">Контакты</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="fixed-line__mail-col col-auto text-end">
            <div>
              <a class="fixed-line__tell" href="<?php echo $tel_href?>"><?php echo $tel?>
              </a>
            </div>
            <a class="fixed-line__mail" href="<?php echo $mail_href?>"><?php echo $mail?>
            </a>
          </div>
          <div class="col-auto d-lg-none">
            <div class="row gx-1">
              <?php if (have_rows('социальные_сети_в_шапке', 'option')): while (have_rows('социальные_сети_в_шапке', 'option')) : the_row();?>
                <div class="col-auto">
                  <a class="fixed-line__<?php echo get_sub_field('название');?>-btn" href="<?php echo get_sub_field('ссылка');?>">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/<?php echo get_sub_field('название');?>-icon.svg" alt=""/>
                  </a>
                </div>
              <?php endwhile; else : endif; ?>
            </div>
          </div>
          <div class="col-auto d-none d-lg-block">
            <a class="fixed-line__callback-btn link-modal-js" href="#modal-call" data-order="Вызов модалки в фиксированной шапке" data-pic="<?php echo $get_template_directory_uri;?>/public/img/<?php echo get_field('ссылка_на_изображение', 'option')?>" data-title="<?php echo get_field('заголовок', 'option')?>">перезвоните мне
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- end topLine-->
  </header>