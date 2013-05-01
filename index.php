<?php get_header(); ?>
            <?php if(have_posts()): ?>
            <div class="container">
                <div class="row">
                    <div class="span12">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        Sorry, there are not posts...
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>