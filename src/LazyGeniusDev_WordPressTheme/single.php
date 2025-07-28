<?php get_header(); ?>

<main class="single">
    <div class="single__containerr">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="single__content">
                    <div class="single__meta">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <span class="single__category"><?php the_category(', '); ?></span>
                    </div>
                    <h1 class="single__title"><?php the_title(); ?></h1>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single__thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="single__body">
                        <?php the_content(); ?>
                    </div>

                    <!-- 戻るリンク -->
                    <div class="back-wrapper">
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="back-to-blog">← ブログ一覧に戻る</a>
                    </div>

                </article>

                <nav class="single__navigation">
                    <div class="single__prev"><?php previous_post_link('%link', '← 前の記事　 %title'); ?></div>
                    <div class="single__next"><?php next_post_link('%link', '%title 　→ 次の記事'); ?></div>
                </nav>

        <?php endwhile;
        endif; ?>

    </div>
</main>

<?php get_footer(); ?>