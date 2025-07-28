document.addEventListener('DOMContentLoaded', () => {

    /*=================================================
    かんたん見積もりシミュレーター用（チェックボックスで自動計算）
    ==================================================*/
    // ターゲットIDが無ければ終了
    const from = document.getElementById('estimate-form');
    console.log(from);
    if(!from) return;

    // すべてのチェックボックスを探して、変数（配列）にいれる
    const checkboxes = document.querySelectorAll('#estimate-form input[type="checkbox"]');

    // トータル金額
    const totalDisplay = document.getElementById('total');
    const taxDisplay = document.getElementById('total-tax');

    // ユーザーが選んだ項目とグレード
    const itemList = document.getElementById('selected-items');
    const badgeDisplay = document.getElementById('estimate-badge');

    // 見積りの更新ロジック
    function updateEstimate() {
        // 合計金額
        let total = 0;

        // 再計算するたびに前の項目を消すことで「二重表示」を防いでる！
        itemList.innerHTML = '';            

        checkboxes.forEach(b => {
            if (b.checked){ // b.checked は「チェックされてる？」を判定
                // リアルタイム合計の計算
                total += parseInt(b.value);

                // チェックボックスの親ラベルからテキスト取得
                const card = b.closest('.card-option');
                const labelText = card.querySelector('.card-title')?.textContent.trim() || '（無名項目）';


                // 項目一覧に追加
                const li = document.createElement('li');
                li.textContent = labelText;
                itemList.appendChild(li);

            } 
        });

        // バッジグレードの評価
        let badgeText = '';
        if (total >= 80000) {
            badgeText = '🔥 プロフェッショナル仕様（本気の構築）';
        } else if (total >= 50000) {
            badgeText = '🔵 ビジネススタンダード（拡張性あり）';
        } else if (total > 0) {
            badgeText = '🟢 スタータープラン（まずはお試し）';
        } else {
            badgeText = '';
        }
        // 税込み価格（10%）
        const taxIncluded = Math.round(total * 1.1);
        // 合計金額を整形してHTMLに表示。 toLocaleString() で3桁区切りになる（例：12000 → 12,000）
        totalDisplay.textContent = `￥${total.toLocaleString()}`;
        taxDisplay.textContent = `￥${taxIncluded.toLocaleString()}`
        // 金額に応じてバッジ表示
        badgeDisplay.textContent = badgeText;
    };

    // イベント設定
    checkboxes.forEach(box => {
        box.addEventListener('change', updateEstimate);
    });

    // ページ初期表示時にも一発実行！
    updateEstimate();

})