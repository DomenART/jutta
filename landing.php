<?php
/*
Template Name: Главная
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <?php get_template_part( 'partials/head' ) ?>
    </head>
    <body>
        <div class="wrapper">
            <?php $intro = get_field('intro') ?>
            <div class="intro" style="background-image: url('<?php echo $intro['image']['url'] ?>')">
                <?php get_template_part( 'partials/header' ) ?>

                <?php if (!empty($intro['title'])) : ?>
                    <div class="intro__title"><?php echo $intro['title'] ?></div>
                <?php endif; ?>

                <?php if (!empty($intro['caption'])) : ?>
                    <div class="intro__caption" uk-scrollspy="cls: uk-animation-scale-up"><?php echo $intro['caption'] ?></div>
                <?php endif; ?>
            </div>

            <?php if ($definitions = get_field('definitions')) : ?>
            <div class="definitions">
                <div class="definitions__headline"><?php echo $definitions['section_headline'] ?></div>

                <div class="definitions__subheadline">
                    <?php echo $definitions['problems_headline'] ?>
                </div>

                <div class="definitions__problems">
                    <div class="numbered-list" uk-scrollspy="target: > div; cls: uk-animation-slide-left-small; delay: 500">
                        <?php foreach ($definitions['problems'] as $key=>$row): ?>
                        <div class="numbered-list-item">
                            <div class="numbered-list-item__number"><?php echo $key+1 ?></div>
                            <div class="numbered-list-item__text"><?php echo $row['text'] ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="definitions__subheadline">
                    <?php echo $definitions['suggestions_headline'] ?>
                </div>

                <div class="definitions__suggestions">
                    <div class="bulleted-list">
                        <div class="uk-grid uk-grid-medium" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium; delay: 300">
                            <?php foreach ($definitions['suggestions'] as $row): ?>
                            <div class="uk-width-1-2@m">
                                <div class="bulleted-list-item">
                                    <div class="bulleted-list-item__bullet"></div>
                                    <div class="bulleted-list-item__text"><?php echo $row['text'] ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($confidence = get_field('confidence')) : ?>
            <div class="confidence">
                <div class="confidence__headline"><?php echo $confidence['title'] ?></div>
                <div class="confidence__caption"><?php echo $confidence['caption'] ?></div>

                <div class="confidence__container">
                    <div class="confidence__info">
                        <?php if ($expert = $confidence['expert']) : ?>
                        <div class="confidence-expert">
                            <div class="confidence-expert__image">
                                <img src="<?php echo $expert['image']['url'] ?>" alt="">
                            </div>
                            <div class="confidence-expert__name"><?php echo $expert['name'] ?></div>
                        </div>
                        <?php endif; ?>

                        <?php if ($statistics = $confidence['statistics']) : ?>
                        <div class="statistics" uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium; delay: 500">
                            <?php foreach ($statistics as $row): ?>
                            <div class="statistics-item">
                                <div class="statistics-item__number">
                                    <span><?php echo $row['prefix'] ?></span>
                                    <?php echo $row['number'] ?>
                                </div>
                                <div class="statistics-item__text"><?php echo $row['text'] ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="confidence__text">
                        <?php echo $confidence['text'] ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($resuscitation = get_field('resuscitation')) : ?>
            <div class="resuscitation">
                <div class="uk-grid uk-grid-collapse">
                    <div class="resuscitation__image uk-width-1-2@m" style="background-image: url('<?php echo $resuscitation['image']['url'] ?>')"></div>
                    <div class="resuscitation__info uk-width-1-2@m">
                        <div class="resuscitation__title"><?php echo $resuscitation['title'] ?></div>
                        <div class="resuscitation__text"><?php echo $resuscitation['text'] ?></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="section-ju">
                <?php if ($questions = get_field('questions')) : ?>
                <div class="questions">
                    <div class="questions__title"><?php the_field('questions_headline') ?></div>
                    <div class="questions__list">
                        <?php foreach ($questions as $row): ?>
                        <div class="questions-item">
                            <div class="uk-grid" uk-grid>
                                <div class="uk-width-1-2@s uk-flex uk-flex-center">
                                    <div class="questions-item__question">
                                        <?php echo $row['question'] ?>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <div class="questions-item__answer">
                                        <?php echo $row['answer'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <div class="occupation">
                    <div class="occupation__title"><?php the_field('occupation_headline') ?></div>
                    <?php if ($occupation_first = get_field('occupation_first')) : ?>
                    <div class="occupation-first uk-grid uk-grid-small" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
                        <?php foreach ($occupation_first as $row): ?>
                        <div class="uk-width-1-2 uk-width-1-4@s">
                            <div class="occupation-first-item">
                                <div class="occupation-first-item__image">
                                    <img src="<?php echo $row['image']['url'] ?>" alt="<?php echo $row['text'] ?>">
                                </div>
                                <div class="occupation-first-item__title"><?php echo $row['text'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($occupation_second = get_field('occupation_second')) : ?>
                    <div class="occupation-second" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300">
                        <?php foreach ($occupation_second as $row): ?>
                            <div class="occupation-second-item"><?php echo $row['text'] ?></div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="contacts">
                <div class="uk-grid uk-grid-collapse">
                    <div class="contacts__map-first uk-width-1-2@s">
                        <?php the_field('map_first', 'option') ?>
                    </div>
                    <div class="contacts__info uk-width-1-2@s">
                        <div class="contacts__title">Контакты</div>

                        <div class="contacts__list">
                            <?php if ($contacts = get_field('contacts', 'option')) : ?>
                                <?php foreach ($contacts as $row): ?>
                                    <div class="contacts__item"><?php echo $row['text'] ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="contacts__item">
                                <a href="mailto:<?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
                            </div>
                        </div>

                        <div class="contacts__map-second">
                            <?php the_field('map_second', 'option') ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_template_part( 'partials/footer' ) ?>
        </div>
    </body>
</html>