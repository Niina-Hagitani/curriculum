<?php 

    // ①税率を定数TAXで作成。税率10%
    define("TAX",1.1);

    // 商品の情報を連想配列に入れる
    $products = ["鉛筆" => 100,"消しゴム" => 150,"物差し" => 500];
    
    // 税率を計算する関数
    function getIncludingTax($baseprice){
        $includingtax = $baseprice * TAX;
        return $includingtax;
     }

    //  繰り返し文を使って画面に指定の文字を表示
    foreach ($products as $item => $price){
        echo $item.'の税込価格は'.getIncludingTax($price).'円です';
        echo '<br>';
    }

?>