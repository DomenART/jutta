<div class="header">
    <div class="header__container">
        <div class="header__toggle" uk-toggle="target: #menu; cls: menu_opened">
            <span class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
            меню
        </div>

        <div class="header__spacer"></div>

        <div class="header__center">
            <div class="header__logo">
                <a href="/">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="">
                </a>
            </div>
            <div class="header__slogan">
                <?php the_field('slogan', 'option') ?>
            </div>
        </div>

        <?php if ($socials = get_field('socials', 'option')): ?>
        <div class="header__socials">
            <div class="socialgroups">
                <?php foreach ($socials as $social): ?>
                    <a href="<?php echo $social['link'] ?>" class="socialgroups-item socialgroups-item_<?php echo $social['key'] ?>">
                        <span uk-icon="<?php echo $social['key'] ?>"></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="header__phone">
            <?php the_field('phone', 'option') ?>
        </div>
    </div>
</div>

<div class="menu" id="menu">
    <div class="menu__overlay" uk-toggle="target: #menu; cls: menu_opened"></div>

    <div class="menu__side">
        <div>
            <button class="menu__close" uk-toggle="target: #menu; cls: menu_opened">
                <span class="menu-close"></span>
                закрыть
            </button>
        </div>
        <?php wp_nav_menu([
            'theme_location' => 'mainmenu',
            'container' => false,
            'menu_class' => 'mainmenu'
        ]) ?>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>