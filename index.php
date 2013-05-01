<?php get_header(); ?>
            <?php if(have_posts()): ?>
            <div class="container">
                <div class="row">
                    <div class="span12">
                    <?php while(have_posts()): the_posts(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>