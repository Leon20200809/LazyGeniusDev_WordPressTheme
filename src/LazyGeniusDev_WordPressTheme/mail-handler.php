<?php
	// WordPress環境を読み込む
	file_put_contents(__DIR__ . '/path-debug.txt', dirname(__FILE__, 4));
	require_once( dirname(__FILE__, 4) . '/wp-load.php' );

    // 1. 値を受け取る（フォームから）
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // 2. バリデーション（空チェック）
    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        wp_redirect(home_url('/404'));
        exit;
    }

    // 3. サニタイズ（安全のためにエスケープ）
    $name    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    // 4. メール送信
    $to = get_option('admin_email');
    $mail_subject = "[お問い合わせ] $subject";
    $mail_body = <<<EOM
    名前: $name
    メール: $email
    件名: $subject

    メッセージ:
    $message
    EOM;

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "From: {$name} <{$email}>"
    ];

    wp_mail($to, $mail_subject, $mail_body, $headers);

    // 5. 完了ページへ
    wp_redirect(home_url('/thanks'));
    exit;
