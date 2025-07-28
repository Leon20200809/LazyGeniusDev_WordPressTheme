<?php get_header(); ?>

<main class="blog-archive">
    <div class="container">
        <h1 class="blog-title"><?php the_archive_title(); ?></h1>

        <div class="blog-layout">
            <!-- 左カラム：月別・カテゴリ -->
            <aside class="blog-sidebar">
                <?php get_search_form() ?>
                <section class="widget widget-archive">
                    <h2>月別アーカイブ</h2>
                    <ul>
                        <?php wp_get_archives(array('type' => 'monthly')); ?>
                    </ul>
                </section>

                <section class="widget widget-categories">
                    <h2>カテゴリ</h2>
                    <ul>
                        <?php wp_list_categories(array(
                            'title_li'    => '',
                            'show_count'  => true
                        )); ?>
                    </ul>
                </section>
            </aside>

            <!-- 右カラム：カードグリッド -->
            <section class="blog-main">
                
                <!-- ブロググリッド　パーツ -->
                <?php get_template_part('template-parts/blog-contents') ?>

                <!-- ページネーション表示 -->
                <?php get_template_part('template-parts/blog-pagination') ?>

            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
