<div class="page-container">
    <section class="hero" style="background: center/cover no-repeat url('<?= MB_get_field('image_about_hero') ?>');">
        <div class="overlay">
            <h1> <?= MB_get_field('title_about_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_about_hero') ?> </p>
        </div>
    </section>
    <section class="about-images">
        <div>
            <img src="<?= MB_get_field('image_1_about_section_1') ?>" alt="">
            <img src="<?= MB_get_field('image_2_about_section_1') ?>" alt="">
            <img src="<?= MB_get_field('image_3_about_section_1') ?>" alt="">
            <img src="<?= MB_get_field('image_4_about_section_1') ?>" alt="">
        </div>
        <?= MB_get_field('text_about_section_1') ?>
    </section>
    <section class="section-members">
        <h2> <?= MB_get_field('title_about_section_2') ?> </h2>
        <div class="members">
            <div class="member">
                <img src="<?= MB_get_field('image_1_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_1_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_1_about_section_2') ?> </p>
            </div>
            <div class="member">
                <img src="<?= MB_get_field('image_2_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_2_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_2_about_section_2') ?> </p>
            </div>
            <div class="member">
                <img src="<?= MB_get_field('image_3_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_3_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_3_about_section_2') ?> </p>
            </div>
            <div class="member">
                <img src="<?= MB_get_field('image_4_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_4_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_4_about_section_2') ?> </p>
            </div>
        </div>
    </section>
    <section class="contact-section" style="background: center/cover no-repeat url('<?= MB_get_field('image_about_section_3') ?>');">
        <div class="overlay">
            <h2> <?= MB_get_field('title_about_section_3') ?> </h2>
            <?= MB_get_field('text_about_section_3') ?>
            <a class="btn" href="<?= MB_get_field('button_about_section_3')['link_button_about_section_3'] ?>"><?= MB_get_field('button_about_section_3')['text_button_about_section_3'] ?></a>
        </div>
    </section>
</div>