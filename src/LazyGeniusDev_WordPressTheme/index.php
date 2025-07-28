<?php get_header(); ?>

<main>
  <h2 style="text-align: center;">これは「index.php」です。</h2>

  <div style="padding-left: 2rem;">
    <h3>上にあるほど優先順位が高いです。</h3>
    <ul>
      <li>front-page.php:フロントページ。サイトのトップページ出力</li>
      <li>home.php:ブログの一覧ページを出力</li>
      <li>page.php:固定ページ。それぞれの固定ページ出力</li>
      <li>single.php:投稿。それぞれの投稿ページ出力</li>
      <li>date.php:日付。日付ごとのページ出力</li>
      <li>category.php:カテゴリー。カテゴリーごとの一覧ページ出力</li>
      <li>search.php:検索結果。検索結果ページ出力</li>
      <li>404.php:404(Not Found)。404エラー(Not Found)ページを出力</li>
      <li>index.php:テーマの必須ファイル。他に適切なテンプレートが存在しない場合に最終的に使用される最も汎用的なテンプレートファイル</li>
    </ul>
  </div>

</main>

<?php get_footer(); ?>
