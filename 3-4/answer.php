<link rel="stylesheet" href="css/style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];/* 名前 */
$p_num = $_POST['p_num'];/* 選択した①の回答 */
$lan = $_POST['lan'];/* 選択した②の回答 */
$com = $_POST['com'];/* 選択した③の回答 */
$correct_p = $_POST['correct_p'];/* ①の正解 */
$correct_l = $_POST['correct_l'];/* ②の正解 */
$correct_c = $_POST['correct_c'];/* ③の正解 */

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function answerConfirmation($selection, $correct) {
    if($selection == $correct) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示-->
<?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php answerConfirmation($p_num, $correct_p) ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php answerConfirmation($lan, $correct_l) ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php answerConfirmation($com, $correct_c) ?>