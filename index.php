<?php get_header(); ?>
<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
            <?php
            if (have_posts()) :
                while (have_posts()) {
                    the_post();
                    get_template_part('theme/partials/loop');
                }
            
                get_template_part('theme/partials/pagination');
                ?>
            <?php else : ?>
                <h1>No results</h1>
                <p>Sorry, no posts found.</p>
            <?php endif; ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
