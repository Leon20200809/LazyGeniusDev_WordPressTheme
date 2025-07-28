<!-- ブロググリッド　パーツ -->
<!-- メインクエリ用 -->
<div class="blog-grid">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="blog-card">
                <div class="card-meta">
                    <span class="card-date"><?php echo get_the_date('Y年n月j日'); ?></span>
                    <span class="card-category">
                        <?php
                        $cats = get_the_category();
                        if (!empty($cats)) {
                            echo esc_html($cats[0]->name);
                        }
                        ?>
                    </span>
                </div>

                <a href="<?php the_permalink(); ?>" class="card-link">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="card-thumb"><?php the_post_thumbnail(); ?></div>
                    <?php endif; ?>
                    <div class="card-content">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-excerpt"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>記事がありません。</p>
    <?php endif; ?>
</div>