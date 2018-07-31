<div class="footer js-footer">
    <div class="uk-container uk-container-large">
        <div class="footer__wrap">
            <div class="footer__copyright">
                <?php the_field('copyright', 'option') ?>
            </div>

            <div class="footer__links">
                <a href="<?php echo get_permalink(164) ?>">Пользовательское соглашение</a><br>
                <a href="<?php echo get_permalink(166) ?>">Политика обработки персональных данных</a>
            </div>

            <div class="footer__misc">
                <div class="footer__sitemap">
                    <a href="<?php echo get_permalink(168) ?>">Карта&nbsp;сайта</a>
                </div>
                <div class="footer__counters">
                    <?php the_field('counters', 'option') ?>
                </div>
            </div>

            <div class="footer__spacer"></div>

            <div class="footer__creator">
                <a href="http://domenart-studio.ru/" target="_blank">
                    <img src="<?php echo get_bloginfo('template_url') ?>/dist/img/creator.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<button class="totop js-totop" uk-totop uk-scroll></button>

<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/dist/main.js"></script>

<?php wp_footer() ?>