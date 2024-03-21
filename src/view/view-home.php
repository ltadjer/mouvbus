<div class="page-container">
    <section class="hero" style="background: center/cover no-repeat url('<?= MB_get_field('image_home_hero') ?>');">
        <div class="overlay">
            <h1> <?= MB_get_field('title_home_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_home_hero') ?> </p>
            <p> <?= MB_get_field('text_button_home_hero') ?> </p>
            <a class="btn" href="<?= MB_get_field('button_home_hero')['link_button_home_hero'] ?>"><?= MB_get_field('button_home_hero')['text_button_home_hero'] ?></a>
        </div>
    </section>
        <div><?php MB_get_field('widget_home') ?> </div>
    <section class="section-icons">
        <h2> <?= MB_get_field('title_home_section_1') ?> </h2>
        <p> <?= MB_get_field('subtitle_home_section_1') ?> </p>
        <div class="icons">
            <div class="icon">
                <img src="<?= MB_get_field('icon_1_home_section_1') ?>" alt="">
                <h3> <?= MB_get_field('title_1_home_section_1') ?> </h3>
                <p> <?= MB_get_field('text_1_home_section_1') ?> </p>
            </div>
            <div class="icon">
                <img src="<?= MB_get_field('icon_2_home_section_1') ?>" alt="">
                <h3> <?= MB_get_field('title_2_home_section_1') ?> </h3>
                <p> <?= MB_get_field('text_2_home_section_1') ?> </p>
            </div>
            <div class="icon">
                <img src="<?= MB_get_field('icon_3_home_section_1') ?>" alt="">
                <h3> <?= MB_get_field('title_3_home_section_1') ?> </h3>
                <p> <?= MB_get_field('text_3_home_section_1') ?> </p>
            </div>
        </div>
    </section>
    <section class="two-columns bg-blue">
        <img src="<?= MB_get_field('image_home_section_2') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_home_section_2') ?> </h2>
            <p> <?= MB_get_field('text_home_section_2') ?> </p>
            <a class="btn" href="<?= MB_get_field('button_home_section_2')['link_button_home_section_2'] ?>"><?= MB_get_field('button_home_section_2')['text_button_home_section_2'] ?></a>
        </div>
    </section>
    <section class="two-columns">
        <div>
            <h2> <?= MB_get_field('title_home_section_3') ?> </h2>
            <p> <?= MB_get_field('text_home_section_3') ?> </p>
            <a class="btn-blue" href="<?= MB_get_field('button_home_section_3')['link_button_home_section_3'] ?>"><?= MB_get_field('button_home_section_3')['text_button_home_section_3'] ?></a>
        </div>
        <img src="<?= MB_get_field('image_home_section_3') ?>" alt="">
    </section>
    <section class="contact-section" style="background: center/cover no-repeat url('<?= MB_get_field('image_home_section_4') ?>');">
        <div class="overlay">
            <h2> <?= MB_get_field('title_home_section_4') ?> </h2>
            <p> <?= MB_get_field('text_home_section_4') ?> </p>
            <a class="btn" href="<?= MB_get_field('button_home_section_4')['link_button_home_section_4'] ?>"><?= MB_get_field('button_home_section_4')['text_button_home_section_4'] ?></a>
        </div>
    </section>
</div>