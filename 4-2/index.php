<?php
    require_once("getData.php");

    // getData()クラスのインスタンス化・getUserData()関数・getPostData()関数の呼び出し
    $data = new getData();
    $userData = $data->getUserData();
    $postData = $data->getPostData();
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
        <tr>

        </tr>
        <tr>
            <?php
            while ($row = $postData->fetch(PDO::FETCH_ASSOC)){ ?>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['title'];?></td>
            <td><?php
                if($row['category_no'] == 1) {
                    echo '食事';
                }elseif($row['category_no'] == 2) {
                    echo '旅行';
                } else {
                    echo 'その他';
                }?>
            </td>
            <td><?php echo $row['comment'];?></td>
            <td><?php echo $row['created'];?></td>
        </tr>    
        <?php } ?>
    </table>
    <div class="footer">
        Y&I group.inc
    </div>
</body>
</html>