<?php
require_once('getData.php');

$data = new getData();
$user = $data->getUserData();
$posts = $data->getPostData();

//user読込確認表示
#$showuser = [$user];
#var_dump($showuser);

//posts読込確認表示
#foreach($posts as $showpost);
#var_dump($showpost)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>4章課題</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- ヘッダー部分 -->
    <header>
        <div class="left"><img src="img/Y&I_logo.png" class="logo"></div>

        <div class="right">
        <div class="right-upper">ようこそ <?php echo $user['last_name']; echo $user['first_name']; ?> さん</div>
        <div class="right-lower">最終ログイン日：<?php echo $user[last_login]; ?></div>
        </div>
    </header>

    <!-- 記事一覧 -->
    <table>
        <thead>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </thead>       
     
        <tbody>
            <?php foreach($posts as $rows) { ?>
             <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['title']; ?></td>
                <td><?php if($rows['category_no'] == '1') {
                        echo '食事';
                    } elseif($rows['category_no'] == '2') {
                        echo '旅行';
                    } else {
                        echo 'その他';
                    } ?></td>
                <td><?php echo $rows['comment']; ?></td>
                <td><?php echo $rows['created']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- フッター部分 -->
    <footer>
        <div class="footer">Y&I group.inc</div>
    </footer>
</body>
</html>