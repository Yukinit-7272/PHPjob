<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3-4answer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $my_name = $_POST['my_name'];
    ?>
    <p><?php echo $my_name; ?>さんの結果は・・・？</p>

    <?php
    function getAnswer ($answer, $selectedans){
      if ($answer == $selectedans) {
        echo "正解！";
        } else {
        echo "残念・・・";
        }
    }
    ?>

    <!-- 質問1回答 -->
    <p style="margin: 20px 0;">①の答え</p>
    <?php
      $result1 = $_POST['ans1'];
      getAnswer (80, $result1);
    ?>

    <!-- 質問2回答 -->
    <p style="margin: 20px 0;">②の答え</p>
    <?php
      $result2 = $_POST['ans2'];
      getAnswer ("HTML", $result2);
    ?>

    <!-- 質問3回答 -->
    <p style="margin: 20px 0;">③の答え</p>
    <?php
      $result3 = $_POST['ans3'];
      getAnswer ("select", $result3);
     ?>
</body>
</html>