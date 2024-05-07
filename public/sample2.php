<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル2</title>
</head>

<body>
    <?php
    $fruits = ['リンゴ', 'ミカン', 'バナナ'];
    echo '配列$fruitsには次の要素が格納されている。<br>';
    for ($i = 0; $i < count($fruits); $i++) {
        echo  $fruits[$i]  . "<br>";
    }
    $fishes = array('鯛', '鯖', '鰤'); // タイ、サバ、ブリ
    echo '配列$fishesには次の要素が格納されている。<br>';
    foreach ($fishes  as  $fish) {
        echo  $fish . "<br>";
    }
    $area = ['神戸' => '078',  '大阪' => '06',  '京都' => '075'];
    echo  '配列$areaには次のキーと値が格納されている。<br>';
    foreach ($area  as  $key  =>  $value) {
        echo   $key . '市の市外局番は、' . $value . 'です。<br>';
    }
    ?>
    <hr>
    <h4>0J04022藤田健斗</h4> <!-- 注意：クラス、番号、氏名は自分のものに変更すること！ -->
</body>

</html>