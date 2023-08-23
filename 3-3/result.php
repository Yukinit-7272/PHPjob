<?php
$my_name = $_GET['my_name'];
$number = $_GET['number'];

$result = $number * mt_rand(1,6);

if ($result >= 1 && $result <=10) {
    $omikuji = "凶";
} elseif ($result >= 11 && $result <=15) {
    $omikuji = "小吉";
} elseif ($result >= 16 && $result <=20) {
    $omikuji = "中吉";
} elseif ($result >= 21 && $result <=25) {
    $omikuji = "吉";
} elseif ($result >= 26 && $result <=36) {
    $omikuji = "大吉";
} else {
    $omikuji = "残念";
}

date_default_timezone_set('Asia/Tokyo');
?>

<p><?php echo date("Y-m-d H:i:s", time()); ?></p>
<p>名前は<?php echo $my_name; ?>です。</p>
<P>番号は<?php echo $result; ?>です。</p>
<P>結果は<?php echo $omikuji; ?>です。</p>

