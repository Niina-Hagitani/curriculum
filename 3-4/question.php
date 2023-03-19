<link rel="stylesheet" href="css/style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$port_number = [80, 22, 20, 21];
$language = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correct_p = $port_number[0];
$correct_l = $language[3];
$correct_c = $command[1];
?>
<form action="answer.php" method="post">
<p class="qu-p">お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($port_number as $p_num) { ?>
    <input type="radio" name="p_num" value="<?php echo($p_num); ?>"/><?php echo($p_num);
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($language as $lan) { ?>
    <input type="radio" name="lan" value="<?php echo($lan); ?>"/><?php echo($lan);
}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($command as $com) { ?>
    <input type="radio" name="com" value="<?php echo($com); ?>"/><?php echo($com);
}
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<input type="hidden" name="correct_p" value="<?php echo $correct_p; ?>">
<input type="hidden" name="correct_l" value="<?php echo $correct_l; ?>">
<input type="hidden" name="correct_c" value="<?php echo $correct_c; ?>">
<input type="submit" value="回答する">
</form>