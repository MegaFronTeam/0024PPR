<?php

//new
add_shortcode('headerBlock', 'headerBlock_func');
function headerBlock_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <!-- start headerBlock-->
  <section class="headerBlock section wow animate__animated animate__fadeIn" id="headerBlock">
				<!-- picture-->
				<picture class="headerBlock__bg">
          <img src="<?php echo $get_template_directory_uri;?>/public/img/headerBlock-bg.jpg" alt="" loading="lazy"/>
				</picture>
				<!-- /picture-->
				<div class="container">
					<div class="section-title">
						<h1><?php echo the_field('заголовок01'); ?></h1>
					</div>
					<div class="headerBlock__row row">
            <?php if (have_rows('блоки01')): while (have_rows('блоки01')) : the_row();?>
              <div class="col-sm-6 col-md-auto order-first order-md-0">
                <div class="headerBlock__item">
                  <div class="headerBlock__i-row row align-items-center">
                    <div class="col-auto">
                      <div class="headerBlock__ball">
                        <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/check-ball.svg" alt=""/>
                      </div>
                    </div>
                    <div class="col">
                      <div class="headerBlock__txt"><?php echo get_sub_field('текст');?></div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
					</div>
					<picture class="headerBlock__paper">
						<source media="(min-width: 992px)" srcset="<?php echo $get_template_directory_uri;?>/public/img/headerBlock-paper.png"/>
            <img src="<?php echo $get_template_directory_uri;?>/public/img/headerBlock-bg-1.png" alt=""/>
					</picture>
					<div class="headerBlock__btn-row row">
						<div class="col-lg-auto">
							<div class="text-center text-md-start">
								<a class="headerBlock__btn link-modal-js" href="#modal-call" data-order="Вызов модалки в headerblock, кнопка 'Бесплатная консультация'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-1.png" data-title="Мы перезвоним!"><span><?php echo the_field('перваяКнопка01'); ?></span>
								</a>
							</div>
						</div>
						<div class="col-lg-auto d-none d-lg-block">
							<div class="text-center text-md-start">
								<a class="headerBlock__btn headerBlock__btn--blue link-modal-js" href="#modal-call" data-order="Вызов модалки в headerblock, кнопка 'СОГЛАСОВАНИЕ ГОТОВОГО ПРОЕКТА'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-1.png" data-title="Мы перезвоним!"><span><?php echo the_field('втораяКнопка01'); ?></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end headerBlock-->
			<!-- start sForm-->
			<section class="sForm section">
				<div class="container">
					<div class="sForm__box-wrap">
						<div class="sForm__box">
							<div class="sForm__row row">
								<div class="col-lg-auto">
									<h3><?php echo the_field('заголовокДляФормы01'); ?></h3>
								</div>
								<div class="col">
									<div class="form-wrap">
										<form>
											<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="tel" type="tel" placeholder="Номер телефона"/>
											</div>
											<!-- +e.input-wrap-->
											<button class="form-wrap__btn" type="submit"><?php echo the_field('кнопкаДляФормы01'); ?>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end sForm-->
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
            <img src="<?php echo $get_template_directory_uri;?>/public/img/trafficlight.png" alt="" loading="lazy"/>
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
                  };
                  function numberMorph2($n) {
                    $titles = ['страница', 'страниц', 'страниц'];
                    $cases = array(2, 0, 1, 1, 1, 2);
                    return $n.' '.$titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
                  };
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
                            <a class="sMade__btn link-modal-js" href="#modal-call" data-order="Вызов модалки на слайде '<?php echo get_sub_field('заголовок');?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-1.png" data-title="Мы перезвоним!"><?php echo get_sub_field('кнопка');?>
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
add_shortcode('sExamples', 'sExamples_func');
function sExamples_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sExamples-->
   <section class="sExamples section showAllWrap wow animate__animated animate__fadeIn sExamples sExamples--2" id="sExamples">
				<div class="sExamples__wrapper">
					<div class="sExamples__container container">
            <img class="img img--2" src="<?php echo $get_template_directory_uri;?>/public/img/road-sign-1.png" alt="">
            <img class="img img--3" src="<?php echo $get_template_directory_uri;?>/public/img/road-sign-2.png" alt="">
						<div class="section-title">
							<h2><?php echo the_field('заголовок04'); ?></h2>
						</div>
						<div class="slider-examples-wrap">
							<div class="slider-examples slider-examples--js swiper">
								<div class="swiper-wrapper">
                  <?php if (have_rows('блоки04')): while (have_rows('блоки04')) : the_row();?>
                    <div class="slider-examples__slide swiper-slide">
                      <div class="sExamples-item">
                        <div class="sExamples-item__title"><?php echo get_sub_field('заголовок');?>
                        </div>
                        <div class="toggle-wrap">
                          <p class="toggle-list"><?php echo get_sub_field('первыйПункт');?></p>
                          <div class="toggle-block">
                            <p class="toggle-list"><?php echo get_sub_field('первыйПункт');?></p>
                            <ul>
                              <?php if (have_rows('список')): while (have_rows('список')) : the_row();?>
                                <li><?php echo get_sub_field('пунктСписка');?></li>
                              <?php endwhile; else : endif; ?>
                            </ul>
                          </div>
                        </div>
                        <p><?php echo get_sub_field('второйпункт');?></p>
                        <div class="sExamples-item__images-block">
                          <a href="<?php echo get_sub_field('фоновоеИзображение')['url'];?>" data-fancybox="example-<?php echo get_row_index(); ?>">
                            <?php 
                              $image = get_sub_field('фоновоеИзображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '270' ];
                              if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="bg-img"/>
                            <?php endif; ?>
                          </a>
                          <a class="sExamples-item__img sExamples-item__img--front" href="<?php echo get_sub_field('передниеИзображение')['url'];?>" data-fancybox="example-<?php echo get_row_index(); ?>">
                            <?php 
                              $image = get_sub_field('передниеИзображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '270' ];
                              if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                          </a>
                          <a class="sExamples-item__img sExamples-item__img--back" href="<?php echo get_sub_field('третьеИзображение')['url'];?>" data-fancybox="example-<?php echo get_row_index(); ?>">
                            <?php 
                              $image = get_sub_field('третьеИзображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '270' ];
                              if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                          </a>
                        </div>
                        <div class="sExamples-item__footer">
                          <div class="sExamples-item__price">	<?php echo get_sub_field('цена');?></strong>
                          </div>
                          <a class="link-modal-js btn-green" href="#modal-call" data-order="Вызов модалки по '<?php echo get_sub_field('заголовок');?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-3.png" data-title="Мы перезвоним!"><?php echo get_sub_field('кнопка');?></a>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; else : endif; ?>
                </div>
							</div>
							<div class="control-wrap d-lg-none">
								<div class="swiper-pagination"></div>
							</div>
						</div>
						<a class="sExamples__btn sExamples__btn--blue btn-green btn-show-more" href="#"><?php echo the_field('кнопка04'); ?>
						</a>
					</div>
				</div>
			</section>
			<!-- end sExamples-->
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
				<div class="sCases__container container"><img class="bg" src="<?php echo $get_template_directory_uri;?>/public/img/sCases-bg-1.png" alt=""/>
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
					<a class="sCases__btn btn-green btn-show-more" href="#"><?php echo the_field('кнопка05'); ?>
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
                  <p><?php echo get_sub_field('текст');?></p>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
						<div class="col-12">
							<a class="sStandards__btn btn-green link-modal-js" href="#modal-call" data-order="Вызов модалки по кнопке '<?php echo the_field('заголовок06'); ?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-1.png" data-title="Мы перезвоним!"><?php echo the_field('кнопка06'); ?>
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
/*
* *****************************************************
*/
add_shortcode('sExamples2', 'sExamples2_func');
function sExamples2_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
    <!-- start sExamples-->
			<section class="sExamples section showAllWrap wow animate__animated animate__fadeIn" id="sExamples">
				<div class="sExamples__wrapper">
					<div class="sExamples__container container">
            <img class="img" src="<?php echo $get_template_directory_uri;?>/public/img/straight-sign.png" alt="">
						<div class="section-title">
              <span class="d-none d-sm-block"><?php echo the_field('надЗаголовок07'); ?></span>
							<h2><?php echo the_field('заголовок07'); ?></h2>
						</div>
						<div class="slider-examples-wrap">
							<div class="slider-examples slider-examples--js swiper">
								<div class="swiper-wrapper">
                  <?php if (have_rows('блоки07')): while (have_rows('блоки07')) : the_row();?>
                    <div class="slider-examples__slide swiper-slide">
                      <div class="sExamples-item">
                        <div class="sExamples-item__title"><?php echo get_sub_field('заголовок');?>
                        </div>
                        <div class="toggle-wrap">
                          <p class="toggle-list"><?php echo get_sub_field('первыйПункт');?></p>
                          <div class="toggle-block">
                            <p class="toggle-list"><?php echo get_sub_field('первыйПункт');?></p>
                            <ul>
                              <?php if (have_rows('список')): while (have_rows('список')) : the_row();?>
                                <li><?php echo get_sub_field('пунктСписка');?></li>
                              <?php endwhile; else : endif; ?>
                            </ul>
                          </div>
                        </div>
                        <p><?php echo get_sub_field('второйпункт');?></p>
                        <div class="sExamples-item__images-block">
                          <a href="<?php echo get_sub_field('фоновоеИзображение')['url'];?>" data-fancybox="example-2-<?php echo get_row_index(); ?>">
                            <?php 
                              $image = get_sub_field('фоновоеИзображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '270' ];
                              if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="bg-img"/>
                            <?php endif; ?>
                          </a>
                          <a class="sExamples-item__img sExamples-item__img--front" href="<?php echo get_sub_field('передниеИзображение')['url'];?>" data-fancybox="example-2-<?php echo get_row_index(); ?>">
                            <?php 
                              $image = get_sub_field('передниеИзображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '270' ];
                              if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                          </a>
                          <a class="sExamples-item__img sExamples-item__img--back" href="<?php echo get_sub_field('третьеИзображение')['url'];?>" data-fancybox="example-2-<?php echo get_row_index(); ?>">
                            <?php 
                              $image = get_sub_field('третьеИзображение');
                              // echo '<pre>';print_r($image);echo '</pre>';
                              $thumb = $image['sizes'][ '270' ];
                              if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                          </a>
                        </div>
                        <div class="sExamples-item__footer">
                          <div class="sExamples-item__price">	<?php echo get_sub_field('цена');?></strong>
                          </div>
                          <a class="link-modal-js btn-green" href="#modal-call" data-order="Вызов модалки по '<?php echo get_sub_field('заголовок');?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-3.png" data-title="Мы перезвоним!"><?php echo get_sub_field('кнопка');?></a>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; else : endif; ?>
                </div>
							</div>
							<div class="control-wrap d-lg-none">
								<div class="swiper-pagination"></div>
							</div>
						</div>
						<a class="sExamples__btn btn-green btn-show-more" href="#"><?php echo the_field('кнопка05'); ?>
						</a>
					</div>
				</div>
			</section>
			<!-- end sExamples-->
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sWhatWeDo', 'sWhatWeDo_func');
function sWhatWeDo_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sWhatWeDo-->
   <section class="sWhatWeDo section wow animate__animated animate__fadeIn" id="sWhatWeDo">
				<div class="sWhatWeDo__container container">
          <img class="img" src="<?php echo $get_template_directory_uri;?>/public/img/parking-sign.png" alt=""/>
					<div class="section-title text-center">
						<div class="section-title__headline"><?php echo the_field('надЗаголовок08'); ?>
						</div>
						<h2><?php echo the_field('заголовок08'); ?></h2>
					</div>
					<div class="sWhatWeDo__slider default-slider default-slider--js swiper">
						<div class="swiper-wrapper">
                <?php if (have_rows('блоки08')): while (have_rows('блоки08')) : the_row();?>
                  <div class="sWhatWeDo__slide swiper-slide bg-wrap">
                    <div class="sWhatWeDo__img-wrap picture-bg">
                      <!-- <img src="img/sWhatWeDo-bg-1.jpg" alt=""/> -->
                      <?php 
                        $image = get_sub_field('изображение');
                        // echo '<pre>';print_r($image);echo '</pre>';
                        $thumb = $image['sizes'][ '270' ];
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                      <?php endif?>
                    </div>
                    <div class="sWhatWeDo__title"><?php echo get_sub_field('заголовок');?>
                    </div>
                    <?php if(get_sub_field('текст')) {
                      echo '<p>';
                    }?>
                      <?php echo get_sub_field('текст');?>
                    <?php if(get_sub_field('текст')) {
                      echo '</p>';
                    }?>
                    <a class="sWhatWeDo__btn btn btn-outline-light link-modal-js" href="#modal-call" data-order="Вызов модалки по '<?php echo the_field('заголовок08'); ?>'" data-pic="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-1.png" data-title="Мы перезвоним!"><?php echo the_sub_field('кнопка'); ?>
                    </a>
                  </div>
                <?php endwhile; else : endif; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>
			<!-- end sWhatWeDo-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sCoordinate', 'sCoordinate_func');
function sCoordinate_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sCoordinate-->
   <section class="sCoordinate section wow animate__animated animate__fadeIn bg-wrap" id="sCoordinate">
    <img class="picture-bg" src="<?php echo $get_template_directory_uri;?>/public/img/sCoordinate-bg-1.png" alt="" loading="lazy"/>
    <div class="sCoordinate__container container">
      <img class="bg" src="<?php echo $get_template_directory_uri;?>/public/img/sCoordinate-bg-2.png" alt=""/>
      <div class="section-title text-center">
        <div class="section-title__headline"><?php echo the_field('надЗаголовок09'); ?>
        </div>
        <h2><?php echo the_field('заголовок09'); ?></h2>
      </div>
      <div class="sCoordinate__slider default-slider default-slider--js swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('блоки09')): while (have_rows('блоки09')) : the_row();?>
            <div class="sCoordinate__slide swiper-slide bg-wrap">
              <?php 
                $image = get_sub_field('изображение');
                // echo '<pre>';print_r($image);echo '</pre>';
                $thumb = $image['sizes'][ '190' ];
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
              <?php endif; ?>
              <p><?php echo get_sub_field('текст');?></p>
            </div>
          <?php endwhile; else : endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- end sCoordinate-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sOpen2', 'sOpen2_func');
function sOpen2_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sOpen-->
   <section class="sOpen sOpen--2 sOpen--js section wow animate__animated animate__fadeIn" id="sOpen">
				<div class="sOpen__container container">
					<div class="section-title section-title--2 text-center">
						<h2><?php echo the_field('заголовок10'); ?></h2>
					</div>
					<div class="sOpen__slider-wrap">
						<div class="swiper sOpen-slider-js">
							<div class="swiper-wrapper">
                <?php if (have_rows('блоки10')): while (have_rows('блоки10')) : the_row();?>
                  <div class="swiper-slide">
                    <div class="sOpen__card-wrap">
                      <div class="sOpen__card">
                        <div class="sOpen__img">
                          <?php 
                            $image = get_sub_field('изображение');
                            $thumb = $image['sizes'][ '380' ];
                            if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; else : endif; ?>
							</div>
							<div class="d-none d-xl-block">
								<div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev">
									<svg class="icon icon-arrow-left ">
										<use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-left"></use>
									</svg>
								</div>
								<div class="swiper-button-hand swiper-button-hand-next swiper-button-next">
									<svg class="icon icon-arrow-right ">
										<use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-right"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>
			<!-- end sOpen-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sOpen', 'sOpen_func');
function sOpen_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sOpen-->
   <section class="sOpen sOpen--js section wow animate__animated animate__fadeIn" id="sOpen">
				<div class="sOpen__container container">
					<div class="sOpen__bg d-none d-xl-block">
            <img src="<?php echo $get_template_directory_uri;?>/public/img/sOpen-img.png" alt=""/>
					</div>
					<div class="section-title">
						<p><?php echo the_field('надзаголовок11'); ?></p>
						<h2><?php echo the_field('заголовок11'); ?></h2>
            <?php if (have_rows('текста11')): while (have_rows('текста11')) : the_row();?>
						  <p><?php echo get_sub_field('текст');?></p>
            <?php endwhile; else : endif; ?>
					</div>
					<div class="sOpen__cert-title"><?php echo the_field('подзаголовок11'); ?>
					</div>
					<div class="sOpen__slider-wrap">
						<div class="swiper sOpen-slider-js">
							<div class="swiper-wrapper">
                <?php if (have_rows('блоки11')): while (have_rows('блоки11')) : the_row();?>
                  <div class="swiper-slide">
                    <div class="sOpen__card-wrap">
                      <div class="sOpen__card">
                        <div class="sOpen__img">
                          <?php 
                            $image = get_sub_field('изображение');
                            $thumb = $image['sizes'][ '380' ];
                            if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; else : endif; ?>
							</div>
							<div class="d-none d-xl-block">
								<div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev">
									<svg class="icon icon-arrow-left ">
										<use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-left"></use>
									</svg>
								</div>
								<div class="swiper-button-hand swiper-button-hand-next swiper-button-next">
									<svg class="icon icon-arrow-right ">
										<use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-right"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>
			<!-- end sOpen-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sOrder', 'sOrder_func');
function sOrder_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sOrder-->
   <section class="sOrder section wow animate__animated animate__fadeIn">
				<div class="sOrder__container container">
          <img class="img img--1" src="<?php echo $get_template_directory_uri;?>/public/img/sOrder-img-1.jpg" alt=""/>
          <img class="img img--2" src="<?php echo $get_template_directory_uri;?>/public/img/sOrder-img-2.png" alt=""/>
					<div class="sOrder__row row">
						<div class="col-lg-7">
							<div class="section-title text-center text-lg-start">
								<h2><?php echo the_field('заголовок12'); ?>
								</h2>
							</div>
							<div class="sOrder__items">
                <?php if (have_rows('блоки12')): while (have_rows('блоки12')) : the_row();?>
                  <div class="sOrder__item">
                    <?php 
                      $image = get_sub_field('изображение');
                      // echo '<pre>';print_r($image);echo '</pre>';
                      $thumb = $image['sizes'][ '190' ];
                      if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <span><?php echo get_sub_field('число');?></span>
                    <p><?php echo get_sub_field('текст');?></p>
                  </div>
                <?php endwhile; else : endif; ?>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="form-wrap">
								<form>
									<div class="form-wrap__box">
										<div class="text-center">
											<div class="form-wrap__title"><?php echo the_field('заголовокформы12'); ?></div>
											<div class="form-wrap__sm-txt"><?php echo the_field('подзаголовокформы12'); ?></div>
										</div>
										<div class="form-wrap__inputs">
											<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="text" type="text" placeholder="Какой ППР вам нужен?"/>
											</div>
											<!-- +e.input-wrap-->
											<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="tel" type="tel" placeholder="На какой телефон перезвонить?"/>
											</div>
											<!-- +e.input-wrap-->
											<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="text" type="text" placeholder="Как вас зовут?"/>
											</div>
											<!-- +e.input-wrap-->
										</div>
										<button class="form-wrap__btn" type="submit"><?php echo the_field('кнопка12'); ?>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end sOrder-->
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sContact', 'sContact_func');
function sContact_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
   <!-- start sContact-->
   <section class="sContact section wow animate__animated animate__fadeIn" id="sContact">
      <?php 
        $mail = get_field('email', 'option');
        $mail_href = 'mailto:'.get_field('email', 'option');
      
        $tel = get_field('телефон', 'option');
        $tel_href = "tel:".str_replace(' ', "", $tel);

        $adress = get_field('адрес', 'option');

        $workTime = get_field('режим_работы', 'option');

        $mapCode = get_field('код_карты', 'option');
      ?>
      <div class="sContact__map d-none d-md-block">
        <?php echo $mapCode?>
      </div>
      <div class="sContact__container container">
        <div class="sContact__box-wrap">
          <div class="sContact__box">
            <h2><?php echo the_field('заголовок13'); ?></h2>
            <div class="sContact__title">Телефон:
            </div>
            <a class="sContact__txt sContact__txt--tell" href="<?php echo $tel_href?>"><?php echo $tel?>
            </a>
            <div class="sContact__title">Режим работы:
            </div>
            <div class="sContact__txt sContact__txt--shedule"><?php echo $workTime?>
            </div>
            <div class="sContact__title">Электронная почта:
            </div>
            <a class="sContact__txt sContact__txt--mail" href="<?php echo $mail_href?>"><?php echo $mail?>
            </a>
            <div class="sContact__title">Адрес офиса:
            </div>
            <div class="sContact__txt sContact__txt--address"><?php echo $adress?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end sContact-->
  <?php
  return ob_get_clean();
}