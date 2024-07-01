<?php
// $company=htmlspecialchars($_GET['company'],ENT_QUOTES);
// print"会社名は".$company."ですね";
$name=htmlspecialchars($_post['name'],ENT_QUOTES);
$goods=htmlspecialchars($_POST['goods'],ENT_QUOTES);
$number=htmlspecialchars($_POST['namber'],ENT_QUOTES);

echo "私の名前は、""$name";
echo "ご希望の商品は、"."$goods";
echo "注文数は、".$number";
