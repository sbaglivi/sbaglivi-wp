<?php get_header() ?>
<div class="content page-content">
    <?php if (is_search()) { ?>
        <h2>Risultati per: <?= get_search_query() ?></h2>
    <?php } ?>
    <div class="form-div">
        <label for="s">Cerca tra gli articoli</label>
        <?php get_search_form() ?>
    </div>
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <div class="post">
                <a class="title-link" href="<?= the_permalink() ?>"> <?= the_title('<h1 class="title">', '</h1>') ?> </a>
                <?= the_excerpt(); ?>
                <a class="read-more-link" href="<?= the_permalink() ?>">Continua a leggere</a>
            </div>
        <?php
        }
    } else if (is_search()) { ?>
        <p>Spiacenti, non abbiamo trovato risultati </p>

    <?php } ?>
    <div class="page-links">
        <?= paginate_links() ?>
    </div>
</div>
<?php get_footer() ?>