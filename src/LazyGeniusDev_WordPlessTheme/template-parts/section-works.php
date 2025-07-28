<!-- section-work -->
<section id="works" class="works-section">
    <div class="container">
        <h2 class="section-title">Works</h2>

        <div class="works-grid">
            
            <div class="work-card">
                <a href="https://github.com/Leon20200809/my-portfolio-themeV2" target="_blank">
                    <img src="<?= esc_url(get_theme_file_uri('/images/WordPressオリジナルテーマ.png')) ?>" alt="Project 1">
                    <div class="work-info">
                        <h3>WordPressのオリジナルテーマ</h3>
                        <p>このWEBサイトのオリジナルテーマ。HTMLサイトを動的に管理できる。お問い合わせフォームも自作だが「wp_mail()」を使うメールハンドラーPHPを書いている。カスタム投稿・カスタムフィールド対応可。</p>
                    </div>
                </a>
            </div>

            <div class="work-card">
                <a href="https://github.com/Leon20200809/my-cms" target="_blank">
                    <img src="<?= esc_url(get_theme_file_uri('/images/Twitter風のCMS.png')) ?>" alt="Project 2">
                    <div class="work-info">
                        <h3>Twitter風CMS</h3>
                        <p>PHPで構築したTwitter風CMS。基本的なCRUD操作が可能。ユーザー認証機能あり。ユーザーネーム、アイコン設定・画像投稿・コメントを投稿。データベースへの接続、プリペアドステートメントを理解するのに最適な逸品。</p>
                    </div>
                </a>
            </div>

            <div class="work-card">
                <a href="https://github.com/Leon20200809/filestorage-cms" target="_blank">
                    <img src="<?= esc_url(get_theme_file_uri('/images/ファイルストレージCMS.png')) ?>" alt="Project 3">
                    <div class="work-info">
                        <h3>ファイルストレージCMS</h3>
                        <p>Googleドライブ（無料版）がすぐいっぱいになって困るというソリューション。WordPressのサブディレクトリとして公開。ブラウザからファイルのアップ、ダウンロードができる。ユーザー認証機能、投稿ユーザー及びファイル種別でのソートが可能。</p>
                    </div>
                </a>
            </div>

            <div class="work-card">
                <a href="https://lazygenius.dev/huntinghorn-simulator/" target="_blank">
                    <img src="<?= esc_url(get_theme_file_uri('/images/狩猟笛シミュレーター.png')) ?>" alt="Project 4">
                    <div class="work-info">
                        <h3>MHWsの狩猟笛シミュレーター</h3>
                        <p>狩猟笛の旋律確認WEBアプリ。完全に趣味のもの。CSVファイルをJSONへ変換しJavaScriptで処理。wp_localize_script() がポイント。</p>
                    </div>
                </a> 
            </div>
            
            <div class="work-card">
                <a href="https://github.com/Leon20200809/wp-react-plugin" target="_blank">
                    <img src="<?= esc_url(get_theme_file_uri('/images/Reactを組み込んだWordPressのプラグイン.png')) ?>" alt="Project 5">
                    <div class="work-info">
                        <h3>WordPressのプラグイン（ダッシュボードウィジェット）</h3>
                        <p>フロント部分はReactで作成。ダッシュボードに今日の名言と天気を表示する。本当は日本語訳も表示したかったがGoogle Translate APIが有料（月額・従量課金）だったため断念(泣)</p>
                    </div>
                </a>
            </div>

            <div class="work-card">
                <a href="https://github.com/Leon20200809/chat-app" target="_blank">
                    <img src="<?= esc_url(get_theme_file_uri('/images/chat-app.png')) ?>" alt="Project 6">
                    <div class="work-info">
                        <h3>疑似リアルタイム表示のチャットアプリ</h3>
                        <p> AJAXポーリングを使って疑似リアルタイム表示（3秒）。気が向いたら画像などのファイルもやり取りできるようにして、WebSocket版も作ろうと思ってる。</p>
                    </div>
                </a>
            </div>
            <!-- カスタム投稿ループ処理にするか考え中 -->
        </div>
    </div>
</section>
