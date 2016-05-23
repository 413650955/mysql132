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
	$sql="update t_newdrug set newdrug_check=1 where newdrug_id='{$mzwid}'";//首先置位newdurg_check
	$rows=update($sql);
	//查询店家id
	$sql="select store_id from t_newdrug where newdrug_id='{$mzwid}'";
	$mzwrow=fetchOne($sql,$link);
	//echo $mzwrow[0];//店家id
	//查询newdrug的信息
	$sql="select newdrug_key1,newdrug_key2,newdrug_indicate,
newdrug_gname,newdrug_ename,newdrug_cname,newdrug_name,
newdrug_element,newdrug_specify,newdrug_quantity,newdrug_matter,
newdrug_pack,newdrug_pdate,newdrug_time,newdrug_number,newdrug_factory,
newdrug_react,newdrug_avoid,newdrug_lay
from t_newdrug where newdrug_id='{$mzwid}'";//查询newdrug的信息
	$row=fetchOne($sql,$link);
	$sql="insert into t_drug(
drug_id,drug_key1,drug_key2,drug_indicate,
drug_gname,drug_ename,drug_cname,drug_name,
drug_element,drug_specify,drug_quantity,drug_matter,
drug_pack,drug_pdate,drug_time,drug_number,drug_factory,
drug_react,drug_avoid,drug_lay) values('{$drugid}','{$row[0]}','{$row[1]}','{$row[2]}','{$row[3]}',
'{$row[4]}','{$row[5]}','{$row[6]}','{$row[7]}','{$row[8]}','{$row[9]}','{$row[10]}',
'{$row[11]}','{$row[12]}','{$row[13]}','{$row[14]}','{$row[15]}','{$row[16]}',
'{$row[17]}','{$row[18]}')";//插入newdrug信息到drug表
	$rows=insert($sql);
	//查询消息编号最大值
	$sql="select max(mes_id) from t_message";
	$row=fetchOne($sql,$link);
	$index=$row[0]+1;
	//插入一条成功消息
	$sql="insert into t_message values('a','000000','s','{$mzwrow[0]}','{$index}','您的新药请求通过')";
	$rows=insert($sql);
	alertMes("OK","showAllNewDrugQequire.php");
?>
<body>
</body>
</html>