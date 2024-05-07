<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル1</title>
</head>

<body>
    <!-- これはHTMLのコメントです。 -->
    <h4>0J04022藤田健斗</h4>
    <?php
    // PHPのスクリプト内で1行コメントを書くときに使います。
    /*
       C言語やJavaと同じように、
    　 スクリプト内で複数行のコメントを書くときに使います。
    */

    $first_name = "健斗"; // 変数の宣言では「型」は必要ありません
    $last_name = "藤田";
    // 文字列の連結は「.(ドット)」を使う
    echo '<p>私の名前は、' . $last_name . $first_name . 'です。</p>';
    $num = 10;
    echo 'シングルクォーテーションでは、変数の値 $num は表示されません。<br>';
    echo "ダブルクォーテーションでは、変数の値 $num が表示されます。";
    ?>
</body>

</html>