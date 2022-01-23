<?php get_header() ?>
<!-- sdf -->
<div class="content page-content">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_title('<h1 class="title">', '</h1>');
            the_post();
            the_content();
        }
    }
    ?>
</div>
<?php get_footer() ?>