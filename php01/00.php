<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="shift_jis" />
<title>calc.php</title>
</head>
<body>
<?php
$x=(int)$_POST["x"];	// フォームからの送信値を整数型に変換
$y=(int)$_POST["y"];	// フォームからの送信値を整数型に変換
?>
<form method="post" action="00.php">
	整数を入力<br>
	x = <input type="text" name="x" value="<?php echo($x)?>"><br>
	y = <input type="text" name="y" value="<?php echo($y)?>"><br>
	<input type="submit" value="送信">
</form>
<hr>

<?php
// 最初にアクセスした場合は，以下のテーブルを表示しない。
//if(以下のどの条件式だと0を入力しても正しく動くだろうか):

//if(!empty($x) && !empty($y)):
//if(!empty($_POST["x"]) && !empty($_POST["y"])):
//if($x!='' && $y!=''):
if($_POST["x"]!='' && $_POST["y"]!=''):
?>
<h1>計算結果</h1>
<table border="1">
<tr><td>加</td>
<td><?php echo($x+$y); ?></td></tr>
<tr><td>減</td>
<td><?php echo($x-$y); ?></td></tr>
<tr><td>乗</td>
<td><?php echo($x*$y); ?></td></tr>
<tr><td>除</td>
<td><?php
/*
if($y==0):
	echo('０で割ることはできません！');
else:
	echo($x/$y);
endif;
*/
// 上と同じ条件分岐を三項演算子で書くと…
echo($y==0?'０で割ることはできません！':$x/$y);
?></td></tr>
</table>
<?php
// 22行目のifを閉じる。
endif;
?>
</body>
</html>