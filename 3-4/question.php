<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3-4question</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $my_name = $_POST['my_name'];
    ?>
    <p>お疲れ様です<?php echo $my_name; ?>さん</p>

    <form action="answer.php" method="post">
        <input type="hidden" name="my_name" value="<?php echo $my_name; ?>" />

        <!-- 質問1 -->
        <h2 style="margin: 20px 0;">①ネットワークのポート番号は何番？</h2>
        <?php
        $que1 = [80, 22, 20, 21];
            foreach ($que1 as $ans1) { ?>
            <input type="radio" name="ans1" value="<?php echo $ans1; ?>" />
            <?php echo $ans1;
            }
        ?>

        <!-- 質問2 -->
        <h2 style="margin: 20px 0;">②Webページを作成するための言語は？</h2>
        <?php
        $que2 = ["PHP", "Python", "JAVA", "HTML"];
            foreach ($que2 as $ans2) { ?>
            <input type="radio" name="ans2" value="<?php echo $ans2; ?>" />
            <?php echo $ans2;
            }
        ?>

        <!-- 質問3 -->
        <h2 style="margin: 20px 0;">③MySQLで情報を取得するためのコマンドは？</h2>
        <?php
        $que3 = ["join", "select", "insert", "update"];
            foreach ($que3 as $ans3) { ?>
            <input type="radio" name="ans3" value="<?php echo $ans3; ?>" />
            <?php echo $ans3;
            }
            ?>

    <p><input type="submit" value="回答する" /></p>
    </form>
</body>
</html>


