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
          <a class="footer__logo" href="#"><img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/logo-new.svg" alt=""/><span>С-проджект</span>
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
  <!--  start modals-->
  <div class="modal-win" id="modal-calc" style="display: none">
    <div class="modal-win__row row gy-4">
      <div class="modal-win__col modal-win__col--title col-lg-auto text-center text-lg-start">
        <div class="modal-win__title-bl">
          <div class="modal-win__title">
            Рассчитайте стоимость проекта ОДД
            <span>за 1 минуту</span>
          </div>
          <p>Выберите вид ОДД для любого вида строительных работ, менеджер перзвонит вам для уточнения деталей, покажет реализованыее проекты и рассчитает стоимость.</p>
        </div>
        <div class="form-wrap">
          <form>
            <div class="form-wrap__inputs">
              <input class="title-js" type="hidden" value="" name="title"/>
              <input class="price-js" type="hidden" value="" name="price"/>
              <?php echo do_shortcode('[contact-form-7 id="286" title="Форма в модальном окне Рассчитать стоимость"]'); ?>
            </div>
            <div class="form-wrap__policy">
              Нажимая на кнопку вы соглашаетесь с
              <a href="<?php echo $policy ?>">политикой конфиденциальности</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg">
        <!-- picture-->
        <picture class="modal-win__paper">
          <img src="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-1.png" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
  </div>
  <!-- #modal-calc-->
  <div class="modal-win" id="modal-call" style="display: none">
    <div class="modal-win__row row gy-4">
      <div class="modal-win__col modal-win__col--title col-lg-auto text-center text-lg-start">
        <div class="modal-win__title-bl">
          <div class="modal-win__title modal-win__title--js">
          </div>
          <p>Оставьте зявку, мы свяжемся с вами в течении одной минуты и проконсультируем по всем интересующим вопросам.</p>
        </div>
        <div class="form-wrap">
          <form>
            <div class="form-wrap__inputs">
              <?php echo do_shortcode('[contact-form-7 id="282" title="Форма в модальном окне Мы перезвоним"]'); ?>
            </div>
            <div class="form-wrap__policy">
              Нажимая на кнопку вы соглашаетесь с
              <a href="<?php echo $policy?>">политикой конфиденциальности</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg">
        <!-- picture-->
        <picture class="modal-win__paper">
          <img src="<?php echo $get_template_directory_uri;?>/public/img/modal-paper-3.png" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
  </div>
  <!---->
  <!---->
  <div class="m-thanks modal-win" id="modal-thanks" style="display: none">
    <div class="text-center">
      <div class="m-thanks__title">Спасибо за заявку!
      </div>
      <div class="m-thanks__descr">Мы свяжемся с вами в течении одного рабочего дня. Также, мы закрепили скидку 15% за вашим номером телефона
      </div>
      <button class="m-thanks__close-btn modal-close-js" type="button">Закрыть и перейти на сайт
      </button>
    </div>
  </div>
  <!-- end modals-->
<?php wp_footer(); ?>
<?php echo get_field('коды_в_низу_страницы', 'option')?>
<!-- jivosite -->
<!-- <script src="//code.jivosite.com/widget/p2PpkrwbPR" async></script> -->
<!-- /jivosite -->

  </body>
</html>
