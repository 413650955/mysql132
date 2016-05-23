<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<!--接受新开店请求-->
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
	//echo $mzwid;//$mzwid是药店id
	$link=connectAndSelectDB();//连接数据库,定义在mysql.func.php中
	$sql="select * from t_store where store_id ='{$mzwid}'";
	$row=fetchOne($sql,$link);
	$link=connectAndSelectDB();//连接数据库,定义在mysql.func.php中
	$sql="update t_store set store_check='2' where store_id='{$mzwid}'";
	$rows=update($sql);
	$sql="update t_store set store_permit='1' where store_id='{$mzwid}'";
	$rows=update($sql);
	//查询消息编号最大值
	$sql="select max(mes_id) from t_message";
	$row=fetchOne($sql,$link);
	$index=$row[0]+1;
	$sql="insert into t_message values('a','000000','s','{$mzwid}','{$index}','您的开店请求通过')";
	$rows=insert($sql);
	alertMes("OK","showAllNewStoreRequire.php");
?>
<body>
</body>
</html>