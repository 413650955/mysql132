<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	require_once '../mysql.func.php';
	require_once '../common.func.php';
	//echo $_REQUEST['id']."<br>";
	$mzwidcount=1;
	$mzwid=(String)$_REQUEST['id'];
	//echo $mzwid."<br>";
	$mzwid2=(int)$_REQUEST['id'];
	//echo $mzwid2."<br>";
	while(floor($mzwid2/10)!=0){
		//echo "okok"."<br>";
		$mzwidcount=$mzwidcount+1;
		$mzwid2=floor($mzwid2/10);
	}
	$zeroneed=6-$mzwidcount;
	//echo $mzwidcount."<br>";
	//echo $zeroneed."<br>";
	while($zeroneed!=0){
		$mzwid="0".$mzwid;
		$zeroneed=$zeroneed-1;
	}
	//echo $mzwid;//$mzwid是药品id
	$link=connectAndSelectDB();//连接数据库,定义在mysql.func.php中
	$sql="delete from t_drug where drug_id='{$mzwid}'";//首先置位newdurg_check
	$rows=sqldelete($sql);
	alertMes("DeleteOK","deleteDrug.php");
?>
<body>
</body>
</html>