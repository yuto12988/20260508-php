<?php
    //外部ファイルの読み込み
    require_once('./functions.php');
    //この中に記述


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML内でPHPを利用する</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>
<body>
    <h1>PHPの実行</h1>
    <p class="bg-sky-50 text-red-500 border-4 border-orange-500 p-2">
        <?php countDown(10) ?>
    </p>
    <?php
        tag('h1','見出し1','text-red-500 text-lg font-medium');
        $text = 'ダミーテキスト';
        tag('p', $text ,'text-Red-500 text-lg font-medium');
    ?>
        <?php
   
    $cities = [ "東京" => 1400, "大阪" => 270, "名古屋" => 230, "札幌" => 190, "福岡" => 160 ];
   
    echo '<ul>';
    foreach($cities as $key => $val){
        tag('li',$key,'text-blue-500 py-2 text-lg font-medium');
    }
    echo '</ul>';
    ?>
</body>
</html>