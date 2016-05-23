<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	require_once '../mysql.func.php';
	require_once '../common.func.php';
	$mzwid=$_REQUEST['id1'];
	//echo $mzwid;//newdrugid
	$link=connectAndSelectDB();//连接数据库,定义在mysql.func.php中
	//先找出药品目录的最大序号
	$sql="select max(drug_id)from t_drug;";
	$row=fetchOne($sql,$link);
	$maxdrugid=$row[0]+1;
	$drugidcount=1;
	$drugid=(String)$maxdrugid;
	while(floor($maxdrugid/10)!=0){
		$drugidcount=$drugidcount+1;
		$maxdrugid=floor($maxdrugid/10);
	}
	$drugzeroneed=6-$drugidcount;
	while($drugzeroneed!=0){
		$drugid="0".$drugid;
		$drugzeroneed=$drugzeroneed-1;
	}
	//echo $drugid;//新插入的药品id
	$sql="update t_newdrug set newdrug_check=2 where newdrug_id='{$mzwid}'";//首先置位newdurg_check
	$rows=update($sql);
	//查询店家id
	$sql="select store_id from t_newdrug where newdrug_id='{$mzwid}'";
	$mzwrow=fetchOne($sql,$link);
	//echo $mzwrow[0];//店家id
	//查询消息编号最大值
	$sql="select max(mes_id) from t_message";
	$row=fetchOne($sql,$link);
	$index=$row[0]+1;
	//插入一条成功消息
	$sql="insert into t_message values('a','000000','s','{$mzwrow[0]}','{$index}','您的新药请求没有通过')";
	$rows=insert($sql);
	alertMes("RefuseOK","showAllNewDrugQequire.php");
?>
<body>
</body>
</html>