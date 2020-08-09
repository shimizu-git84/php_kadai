<?php
echo 'hello PHP!';

?>

<?php
//$a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a = 3;
$b = 7;
$ab = $a + $b;
echo "\n$ab";

?>

<?php
//$array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
//$array_month に　１月, ２月, ３月, ４月, ５月, ６月, ７月, ８月, ９月, １０月, １１月, １２月を代入する。
echo $array_month = [
    "January" => "１月", 
    "February" => "２月", 
    "March" => "３月", 
    "April" => "４月", 
    "May" => "５月", 
    "June" => "６月", 
    "July" => "７月", 
    "August" => "８月", 
    "September" => "９月", 
    "October" => "１０月", 
    "November" => "１１月", 
    "December" => "１２月"
    ];
//$array_month から　８月　を取り出して表示する。
echo $array_month[December];
//=> ８月　と表示される。

?>

<?php
//“Hello, あなたの名前’s World!” と表示してみましょう。
$Hello = "Hello";
$hello = "Shimizu";
$world = " 's World!";
echo "$Hello.$hello.$world";

?>

<?php
//複合演算を使ってecho $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう。
// 。＝　は変数に文字列を連結する
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
//=> tech boost　と表示される

?>

<?php
echo $_2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
// 12月を表示する
echo $_2018_calendar[December];

?>