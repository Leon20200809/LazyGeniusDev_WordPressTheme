<?php
/*
Template Name: カリピストンシミュレーター
*/
get_header('simulator');
?>

    <!-- HTML -->
    <div class="continar">
        <h1 class="main-title">カリピストンシミュレーター(仮)</h1>

        <div class="button-area">
            <div class="page-icon">
                <img src="<?= get_theme_file_uri('simulator_images/karipiston.webp') ?>" alt="メインアイコン">
            </div>
            <button class="btn btn-random">武器ランダム選出</button>
            <button class="btn">旋律被りチェック</button>
            <button class="btn">被りの少ない組み合わせ</button>
        </div>

        <div class="hunter-team">
            <div class="hunter-card">
                <input type="text" class="hunter-name hunter-1" value="カリピストン1号" placeholder="カリピストン1号" />
                <img src="<?= get_theme_file_uri('simulator_images/default.webp') ?>" alt="default.webp" class="weapon-img">
                <select class="weapon-select">
                    <!-- simulator.jsで自動生成 -->
                </select>

                <ul class="special">
                    <!-- simulator.jsで自動生成 -->
                </ul>

                <ul class="melodies">
                    <!-- simulator.jsで自動生成 -->
                </ul>
            </div>

            <div class="hunter-card">
                <input type="text" class="hunter-name hunter-2" value="カリピストン2号" placeholder="カリピストン2号"/>
                <img src="<?= get_theme_file_uri('simulator_images/default.webp') ?>" alt="default.webp" class="weapon-img">
                <select class="weapon-select">
                    <!-- simulator.jsで自動生成 -->
                </select>

                <ul class="special">
                    <!-- simulator.jsで自動生成 -->
                </ul>

                <ul class="melodies">
                    <!-- simulator.jsで自動生成 -->
                </ul>
            </div>

            <div class="hunter-card">
                <input type="text" class="hunter-name hunter-3" value="カリピストン3号" placeholder="カリピストン3号"/>
                <img src="<?= get_theme_file_uri('simulator_images/default.webp') ?>" alt="default.webp" class="weapon-img">
                <select class="weapon-select">
                    <!-- simulator.jsで自動生成 -->
                </select>

                <ul class="special">
                    <!-- simulator.jsで自動生成 -->
                </ul>

                <ul class="melodies">
                    <!-- simulator.jsで自動生成 -->
                </ul>
            </div>

            <div class="hunter-card">
                <input type="text" class="hunter-name hunter-4" value="カリピストン4号" placeholder="カリピストン4号"/>
                <img src="<?= get_theme_file_uri('simulator_images/default.webp') ?>" alt="default.webp" class="weapon-img">
                <select class="weapon-select">
                    <!-- simulator.jsで自動生成 -->
                </select>

                <ul class="special">
                    <!-- simulator.jsで自動生成 -->
                </ul>

                <ul class="melodies">
                    <!-- simulator.jsで自動生成 -->
                </ul>
            </div>
        </div>
    </div>

<?php get_footer(); ?>