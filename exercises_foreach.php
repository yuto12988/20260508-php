<?php
echo '<br>----- 練習問題：1 -----<br>';
$users = [
    ["name" => "Alice", "email" => "alice@example.com", "age" => 30],
    ["name" => "Bob", "email" => "bob@example.com", "age" => 24],
    ["name" => "Charlie", "email" => "charlie@example.com", "age" => 35],
];
$total = 0;
foreach ($users as $user) {
   echo "名前:{$user['name']}：メールアドレス:{$user['email']}<br>";
   $total++;
}

echo '<br>----- 練習問題：2 -----<br>';
$cities = [ "東京" => 1400, "大阪" => 270, "名古屋" => 230, "札幌" => 190, "福岡" => 160 ];
$total = 0;
foreach ($cities as $key => $value ) {
    echo $key . "の人口は" . $value . "万人です" . "<br>";

    $total += $value;
}

echo "都市の総合計：" . $total . "人";

echo '<br>----- 練習問題：3 -----<br>';
$sales_data = [
    "1月" => ["テレビ" => 100, "パソコン" => 150, "レンジ" => 50],
    "2月" => ["テレビ" => 120, "冷蔵庫" => 80],
    "3月" => ["パソコン" => 200, "テレビ" => 90, "掃除機" => 70]
];
$total = 0;
foreach ($sales_data as $key => $value) {
    $tal = 0;
 foreach ($value as $keys => $values) {
   $tal += $values;
 }
 echo $key . "の合計" . $tal . "円" . "<br>";
 $total += $tal;
}
echo "総合計" . $total . "円";


