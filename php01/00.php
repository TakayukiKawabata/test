<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="shift_jis" />
<title>calc.php</title>
</head>
<body>
<?php
$x=(int)$_POST["x"];	// �t�H�[������̑��M�l�𐮐��^�ɕϊ�
$y=(int)$_POST["y"];	// �t�H�[������̑��M�l�𐮐��^�ɕϊ�
?>
<form method="post" action="00.php">
	���������<br>
	x = <input type="text" name="x" value="<?php echo($x)?>"><br>
	y = <input type="text" name="y" value="<?php echo($y)?>"><br>
	<input type="submit" value="���M">
</form>
<hr>

<?php
// �ŏ��ɃA�N�Z�X�����ꍇ�́C�ȉ��̃e�[�u����\�����Ȃ��B
//if(�ȉ��̂ǂ̏���������0����͂��Ă��������������낤��):

//if(!empty($x) && !empty($y)):
//if(!empty($_POST["x"]) && !empty($_POST["y"])):
//if($x!='' && $y!=''):
if($_POST["x"]!='' && $_POST["y"]!=''):
?>
<h1>�v�Z����</h1>
<table border="1">
<tr><td>��</td>
<td><?php echo($x+$y); ?></td></tr>
<tr><td>��</td>
<td><?php echo($x-$y); ?></td></tr>
<tr><td>��</td>
<td><?php echo($x*$y); ?></td></tr>
<tr><td>��</td>
<td><?php
/*
if($y==0):
	echo('�O�Ŋ��邱�Ƃ͂ł��܂���I');
else:
	echo($x/$y);
endif;
*/
// ��Ɠ�������������O�����Z�q�ŏ����Ɓc
echo($y==0?'�O�Ŋ��邱�Ƃ͂ł��܂���I':$x/$y);
?></td></tr>
</table>
<?php
// 22�s�ڂ�if�����B
endif;
?>
</body>
</html>