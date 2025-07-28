<?php
    // データを JSON で返すとブラウザに教える（＝ヘッダーを設定）
    // header('ヘッダー名: ヘッダー値');
    header('Content-Type: application/json');

    // CSVファイルの場所を指定（__DIR__ は今いるフォルダの意味）
    $csv_path = __DIR__ . '/data/main.csv';

    // CSVファイルを読み込みモードで開く
    // fopen('ファイルパスまたはURL', 'モード');
    // 'r': 読み込み専用 / 'w': 書き込み専用 / 'r+': 読み書き両用
    $csv_file = fopen($csv_path, 'r');

    // 最初の1行目（見出し）を読み取って、列の名前に使う
    // CSV形式として解釈して配列に分割
    $headers = fgetcsv($csv_file);

    // ここにデータを入れていく
    $weapons_data = [];

    while (($row = fgetcsv($csv_file)) !== false) {
        $weapon = [];

        // ヘッダーの名前を使って、データをわかりやすくする
        foreach ($headers as $i => $header) {
            $weapon[$header] = $row[$i];
        }

        // 入れ物に追加していく（どんどん並べる）
        $weapons_data[] = $weapon;
    }

    // ファイルを閉じる（忘れがち）
    fclose($csv_file);

    // ぜんぶを JSON にして表示！これでJavaScriptが読める
    // JSON_UNESCAPED_UNICODE: Unicode文字をそのまま出力
    // JSON_PRETTY_PRINT: 生成されるJSON文字列を見やすく整形
    echo json_encode($weapons_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);