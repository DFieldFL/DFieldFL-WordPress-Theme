<?php get_header(); ?>
<?php if(have_posts()): ?>
        <?php if(have_posts()): ?>
            <?php $post_num = 0; ?>
            <?php while(have_posts()): the_post(); ?>
                <?php if($post_num % 2 == 0): ?>
                <div class="post post-even">
                <?php else: ?>
                <div class="post post-odd">
                <?php endif; ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="post-title"><a href="<?php the_permalink(); ?>"><?=get_the_title(); ?></a></div>
                                <div class="post-content"><?php the_content(); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $post_num++; ?>
            <?php endwhile; ?>
        <?php else: ?>
            Sorry, there are not posts...
        <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
