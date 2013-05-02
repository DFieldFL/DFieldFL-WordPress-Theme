<?php get_header(); ?>
<?php if(have_posts()): ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="post-title"><?=get_the_title(); ?></div>
                <div class="post-content"><?php the_content(); ?></div>
            <?php endwhile; ?>
        <?php else: ?>
            Sorry, there are not posts...
        <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>