<?php

// フォームからのデータを受け取る
$my_name = $_POST['my_name'];
$number = $_POST['number'];

// 受け取った数字に1~6までのランダムな数字を掛け合わせて変数に入れる
function likeNumber($base_number){
    $newnumber = $base_number * mt_rand(1,6);
    return $newnumber;
}
$number2 = likeNumber($number);

// 掛け合わせた数字の結果によっておみくじを選び、変数に入れる
if($number2 <= 10) {
    $omikuzi = "凶"; 
} else if($number2 > 10 && $number2 <= 15) {
    $omikuzi = "小吉"; 
} else if($number2 > 15 && $number2 <= 20) {
    $omikuzi = "中吉"; 
} else if($number2 > 20 && $number2 <= 25) {
    $omikuzi = "吉"; 
} else if($number2 > 25 && $number2 <= 36) {
    $omikuzi = "大吉"; 
} else {
    $omikuzi = "残念"; 
}




/*------------------------------------------*/
//   画面表示部分
/*------------------------------------------*/
// 今日の日付、名前、番号、おみくじ結果を表示する

ini_set('date.timezone', 'Asia/Tokyo');
echo date("Y-m-d H:i:s",time()); ?>
<p>名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $number2; ?>です。</p>
<p>結果は<?php echo $omikuzi; ?>です。</p>






