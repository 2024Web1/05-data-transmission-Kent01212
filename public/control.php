<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<br>";
$fruits = [ 'リンゴ',  'ミカン',  'バナナ' ];
$fishes = array ( '鯛',  '鯖',  '鰤' ); //たい、さば、ぶり

//count($fruits) で配列$fruitsの要素数を返す
for ( $i = 0; $i < count($fruits); $i++) {
    echo  $fruits[$i]  . "<br>";
}

echo "<br>";

//配列$fishes の要素を $fish として繰り返し処理内で使用する
foreach ( $fishes  as  $fish ) {
    echo  $fish . "<br>" ;
}

echo "<br>";

// 連想配列の利用例
$area =    [ '神戸'=>'078',  '大阪'=>'06',  '京都'=>'075' ];

foreach ( $area  as  $key => $value ) {
    echo   $key . '市の市外局番は、' . $value . 'です。<br>'; 
}

echo "<br>";

// ダブルアローを使用しない場合...
foreach ( $area  as  $a ) {
    // echo   $key . '市の市外局番は、' . $value . 'です。<br>';
    echo   $a . '<br>';
}

echo "<br>";

// 連想配列のキーのみがほしいとき
$keys = array_keys($area);
foreach ( $keys  as  $key ) {
    echo   $key . '<br>';
}


?>
</body>
</html>
