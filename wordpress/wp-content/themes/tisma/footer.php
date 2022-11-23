<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tisma
 */
  global $get_template_directory_uri;
?>
  <?php 
    $mail = get_field('email', 'option');
    $mail_href = 'mailto:'.get_field('email', 'option');
  
    $tel = get_field('телефон', 'option');
    $tel_href = "tel:".str_replace(' ', "", $tel);

    $policy = get_field('политика_конфиденциальности', 'option');
  ?>
  <footer class="footer">
    <div class="container text-center text-md-start">
      <div class="footer__row row align-items-center">
        <div class="col-md-auto">
          <a class="footer__logo" href="#"><img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/
img/svg/logo-new.svg" alt=""/><span>С-проджект</span>
          </a>
        </div>
        <div class="col-md d-none d-md-block">
          <div class="footer__txt"><?php echo get_field('текст_рядом_с_лого', 'option') ?>
          </div>
        </div>
        <div class="col-auto">
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
        <div class="col-auto d-none d-md-block">
          <a class="footer__tel" href="<?php echo $tel_href?>"><?php echo $tel?>
          </a>
        </div>
        <div class="col-auto d-none d-md-block">
          <a class="footer__mail" href="<?php echo $mail_href?>"><?php echo $mail?>
          </a>
        </div>
        <div class="footer__policy-col col-md-auto"><a href="<?php echo $policy?>" target="_blank">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </footer>
  </div>

<?php wp_footer(); ?>

<!-- jivosite -->
<!-- <script src="//code.jivosite.com/widget/p2PpkrwbPR" async></script> -->
<!-- /jivosite -->

  </body>
</html>
