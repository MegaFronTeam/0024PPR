<?php

//new
add_shortcode('headerBlock', 'headerBlock_func');
function headerBlock_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="headerBlock section" id="headerBlock">
    <!-- picture-->
    <picture class="headerBlock__bg">
      <img src="<?php echo the_field('фон01'); ?>" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <!-- picture-->
    <picture class="headerBlock__paper d-none d-lg-block">
      <img src="<?php echo the_field('документ01'); ?>" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="section-title">
        <?php echo the_field('заголовок01'); ?>
      </div>
      <div class="headerBlock__row row">
        <?php if (have_rows('плиточки01')): while (have_rows('плиточки01')) : the_row(); ?>
          <div class="col-6 col-md-auto <?php echo get_sub_field('cssclasses');?>">
            <div class="headerBlock__item">
              <div class="headerBlock__i-row row align-items-center">
                <div class="col-auto">
                  <div class="headerBlock__ball">
                    <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/check-ball.svg" alt=""/>
                  </div>
                </div>
                <div class="col">
                  <div class="headerBlock__gray">
                    <?php echo get_sub_field('заголовок');?>
                  </div>
                  <div class="headerBlock__txt">
                    <?php echo get_sub_field('значение');?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
      <div class="text-center text-md-start">
        <a class="headerBlock__btn btn-animate link-modal-js" href="#modal-calc">
          <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/calc.svg" alt=""/>
          <span>Рассчитать стоимость ППР</span>
        </a>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sOrganize', 'sOrganize_func');
function sOrganize_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <!-- start sOrganize-->
  <section class="sOrganize section wow animate__animated animate__fadeIn" id="sOrganize">
      <div class="sOrganize__container container"><img class="img" src="<?php echo $get_template_directory_uri;?>/public/img/sOrganize-img-1.png" alt=""/>
        <div class="section-title text-center">
          <h3><?php echo the_field('заголовок2'); ?></h3>
        </div>
        <div class="sOrganize__row row">
          <?php if (have_rows('блоки2')): while (have_rows('блоки2')) : the_row(); ?>
            <div class="col-md-6 col-lg-4">
              <div class="sOrganize__item">
                <div class="sOrganize__icon-wrap">
                  <svg class="icon icon-check ">
                    <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                  </svg>
                </div>
                <p><?php echo get_sub_field('текст');?></p>
              </div>
            </div>
          <?php endwhile; else : endif; ?>
        </div>
      </div>
    </section>
    <!-- end sOrganize-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sMade', 'sMade_func');
function sMade_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
    <!-- start sMade-->
			<section class="sMade section wow animate__animated animate__fadeIn" id="sMade">
				<div class="container"> 
					<!-- picture-->
					<picture class="bg">
            <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/trafficlight.png" alt="" loading="lazy"/>
					</picture>
					<div class="section-title text-center">
						<h2><?php echo the_field('заголовок3'); ?></h2>
					</div>
					<div class="sMade__slider-wrap">
						<div class="swiper sMade-slider-js">
							<div class="swiper-wrapper">
                <?php
                  function numberMorph($n) {
                    $titles = ['лист', 'листов', 'листов'];
                    $cases = array(2, 0, 1, 1, 1, 2);
                    return $n.' '.$titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
                  }
                ?>
                <?php
                  function numberMorph2($n) {
                    $titles = ['страница', 'страниц', 'страниц'];
                    $cases = array(2, 0, 1, 1, 1, 2);
                    return $n.' '.$titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
                  }
                ?>
                <?php if (have_rows('блоки3')): while (have_rows('блоки3')) : the_row();?>
                  <div class="swiper-slide">
                    <div class="sMade__item-wrap">
                      <div class="sMade__item">
                        <div class="sMade__i-row row justify-content-center">
                          <div class="sMade__col sMade__col--img col-md-9 col-lg-6 col-xl-auto">
                            <?php 
                              $image = get_sub_field('изображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '600' ];
                              if( !empty( $image ) ): ?>
                              <a class="sMade__link" href="<?php echo esc_url($image['url']); ?>" data-fancybox="sMadeSlide-<?php echo get_row_index(); ?>">
                                <!-- picture-->
                                <picture class="sMade__img">
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </picture>
                                <!-- /picture-->
                                <div class="sMade__btn-pl">
                                  <svg class="icon icon-zoom-pl ">
                                    <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#zoom-pl"></use>
                                  </svg>
                                </div>
                              </a>
                            <?php endif; ?>
                          </div>
                          <div class="sMade__col sMade__col--content col-lg-6 col-xl text-center text-lg-start">
                            <div class="sMade__title"><?php echo get_sub_field('заголовок');?>
                            </div>
                            <div class="sMade__client"><?php echo get_sub_field('подзаголовок');?>
                            </div>
                            <div class="sMade__b-row row justify-content-lg-start justify-content-center">
                              <div class="col-12">
                                <div class="sMade__difficulty">
                                  <div class="sMade__d-txt">Сложность
                                  </div>
                                  <div class="sMade__d-stars">
                                    <?php 
                                      $num = get_sub_field('сложность'); 
                                      for($x = 0; $x < $num; $x++) { ?>
                                        <svg class="icon icon-star ">
                                          <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-auto">
                                <div class="sMade__blue"> <?php echo numberMorph( get_sub_field('количество_графической_части')) ?> графической части
                                </div>
                              </div>
                              <div class="col-md-auto">
                                <div class="sMade__blue"><?php echo numberMorph2(get_sub_field('страницы'))?>
                                </div>
                              </div>
                            </div>
                            <a class="sMade__btn link-modal-js" href="#modal-call" data-order="Вызов модалки на слайде '<?php echo get_sub_field('заголовок');?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/@2x/modal-paper-1.png" data-title="Мы перезвоним!">Узнать стоимость такого ппр
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; else : endif; ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- end sMade-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sCases', 'sCases_func');
function sCases_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
    <!-- start sCases-->
			<section class="sCases showAllWrap section wow animate__animated animate__fadeIn" id="sCases">
				<div class="sCases__container container"><img class="bg" src="img/sCases-bg-1.png" alt=""/>
					<div class="section-title text-center">
						<h3><?php echo the_field('заголовок05'); ?></h3>
					</div>
					<div class="sCases__row row">
            <?php if (have_rows('блокПреимущества05')): while (have_rows('блокПреимущества05')) : the_row();?>
            <div class="col-lg-4">
              <div class="sCases__item">
                  <?php 
                    $image = get_sub_field('изображение');
                    // echo '<pre>';print_r($image);echo '</pre>';
                    $thumb = $image['sizes'][ '190' ];
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="<?php echo get_sub_field('классдляизображения');?>"/>
                  <?php endif; ?>
                  <div class="sCases__title"> <?php echo get_sub_field('заголовок');?>
                  </div>
                  <p><?php echo get_sub_field('текст');?>
                </div>
              </div>
              <?php endwhile; else : endif; ?>
            </div>
            <div class="sCases__slider default-slider default-slider--js swiper">
              <div class="swiper-wrapper">
                <?php if (have_rows('блокСлайдер05')): while (have_rows('блокСлайдер05')) : the_row();?>
                  <div class="sCases__slide swiper-slide">
                    <a class="sCases__img-wrap" href="<?php echo esc_url(get_sub_field('большоеизображение')['url']); ?>" data-fancybox="sCases-slide-<?php echo get_row_index(); ?>">
                      <!-- <img src="img/sCases-slide-1.jpg" alt=""/> -->
                      <?php 
                        $image = get_sub_field('изображение');
                        // echo '<pre>';print_r($image);echo '</pre>';
                        $thumb = $image['sizes'][ '190' ];
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php endif; ?>
                      <div class="sCases__icon-wrap">
                        <svg class="icon icon-zoom-pl ">
                          <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#zoom-pl"></use>
                        </svg>
                      </div>
                    </a>
                    <p><?php echo get_sub_field('текст');?></p>
                  </div>
                <?php endwhile; else : endif; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
					<a class="sCases__btn btn-green btn-show-more" href="#">ПОСМОТРЕТЬ ЕЩЕ
					</a>
				</div>
			</section>
			<!-- end sCases-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sStandards', 'sStandards_func');
function sStandards_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
    <!-- start sStandards-->
			<section class="sStandards section wow animate__animated animate__fadeIn" id="sStandards">
				<div class="sStandards__container container">
					<div class="section-title">
						<h2><?php echo the_field('заголовок06'); ?></h2>
					</div>
					<div class="sStandards__row row">
            <?php if (have_rows('блоки06')): while (have_rows('блоки06')) : the_row();?>
              <div class="col-md-6">
                <div class="sStandards__item">
                  <div class="sStandards__icon-wrap">
                    <svg class="icon icon-check ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                    </svg>
                  </div>
                  <p>Проектируем и&nbsp;согласовываем ОДД с&nbsp;2006&nbsp;г.&nbsp;с&nbsp;одним ИНН и&nbsp;номером телефона</p>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
						<div class="col-12">
							<a class="sStandards__btn btn-green link-modal-js" href="#modal-call" data-order="Вызов модалки по кнопке '<?php echo the_field('заголовок06'); ?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/@2x/modal-paper-1.png" data-title="Мы перезвоним!">Заказать ОДД по  стандартам
							</a>
						</div>
					</div>
					<picture class="img">
						<source media="(max-width:991px)" srcset="<?php echo $get_template_directory_uri;?>/public/img/sStandards-img-2.png" alt=""/>
            <img class="img" src="<?php echo $get_template_directory_uri;?>/public/img/sStandards-img-1.png" alt=""/>
					</picture>
          <img class="bg" src="<?php echo $get_template_directory_uri;?>/public/img/sStandards-bg-1.png" alt=""/>
				</div>
			</section>
			<!-- end sStandards-->
  <?php
  return ob_get_clean();
}