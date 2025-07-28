<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="s">検索:</label>
    <input type="search" id="s" class="search-field" name="s" value="<?php echo get_search_query(); ?>" placeholder="キーワードを入力">
    <button type="submit" class="search-submit">🔎</button>
</form>
