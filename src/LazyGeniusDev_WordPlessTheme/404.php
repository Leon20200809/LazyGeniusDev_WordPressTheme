<?php get_header(); ?>
    <meta http-equiv="refresh" content="10;url=<?php echo esc_url(home_url('/')); ?>">

    <div class="error-page">
        <h1>404</h1>
        <p>10秒後にトップページへ戻ります。</p>
        <a href="<?= home_url(); ?>">トップページへ戻る</a>
    </div>

<?php get_footer(); ?>