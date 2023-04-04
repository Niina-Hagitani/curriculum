<?php
    require_once("getData.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>YIGroupBlog</title>
</head>
<body>
    <div class="flex">
        <div class="header">
            <img src="img/1599315827_logo.png" class ="logo" alt="logo">
        </div>
        <div>
            <div class="name">
                <p>ようこそ
                <?php 
                $data = new getData();
                $userData = $data->getUserData();
                echo $userData['last_name'];
                echo $userData['first_name'];
                 ?>
                さん</p>
            </div>
            <div class="time">
               <p>最終ログイン日：
               <?php 
                echo $userData['last_login'];
                 ?>
               </p>
            </div>
        </div>
    </div>
    <table class="posts">
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
                <?php
                $postData = $data->getPostData();
                while ($row = $postData->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                    echo'<td>'. $row['id'].'</td>';
                    echo'<td>'. $row['title'].'</td>';
                    echo'<td>';
                    if($row['category_no'] == 1) {
                        echo '食事';
                    }elseif($row['category_no'] == 2) {
                        echo '旅行';
                    } else {
                        echo 'その他';
                    }
                    echo '</td>';
                    echo'<td>'. $row['comment'].'</td>';
                    echo'<td>'. $row['created'].'</td>';
                    echo '</tr>';
                }
                ?>
    </table>
    <div class="footer">
        Y&I group.inc
    </div>
</body>
</html>