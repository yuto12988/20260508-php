<?php
// 例1: シンプルな関数の定義
function say_hello() {
    //処理すること
    echo "こんにちは！<br>";
}


function say_hello_world(){
    echo 'Hello, World!<br>';
}


function cuntUp10(){
    for($i = 1 ; $i <= 10 ; $i++){
        echo "{$i}、";
    }
    echo '<br>';
} 


function countDown10() {
    for ($i=10; $i >= 1; $i--) { 
        echo "{$i}、";
    }
}
echo "<br>";
function  odd50() {
    for ($i=1; $i < 50; $i++) { 
       if ($i % 2 == 1) {
       echo $i . "、";
       }
    }
}

function countDown($num) {
    for ($i= $num; $i >=0  ; $i--) { 
                echo "{$i}、";

    }
}

    function tag($name,$str,$class=''){
    echo "<{$name} class='{$class}'>{$str}</{$name}>";
}