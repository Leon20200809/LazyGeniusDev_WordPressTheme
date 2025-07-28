<!-- ページネーション表示 -->
<!-- メインクエリ用 -->
<div class="pagination">
    <?php the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => '« 前へ',
        'next_text' => '次へ »',
    )); ?>
</div>