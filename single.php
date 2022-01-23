<?php get_header() ?>
<div class="content post-content">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <div class="post-first-row">
                <a class="back-link" href="/blog">Torna al blog</a>
                <p>Scritto il: <?= the_date('d F Y') ?></p>
            </div>
            <?= the_title('<h1 class="title">', '</h1>') ?>
            <?= the_content(); ?>
    <?php
        }
    }
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
</div>
<?php get_footer() ?>