<!--显示一家药店详情-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="styles/backstage.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	require_once '../mysql.func.php';
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
	//echo $mzwid;
	$link=connectAndSelectDB();//连接数据库,定义在mysql.func.php中
	$sql="select * from t_store where store_id ='{$mzwid}'";
	$row=fetchOne($sql,$link);
	
		/*echo "药店ID：".$row['store_id']."<br>";
		echo "药店名称：".$row['store_name']."<br>";
		echo "药店电话：".$row['store_phone']."<br>";
		echo "药店地址：".$row['store_address']."<br>";
		echo "药店负责人：".$row['store_keep']."<br>";
		echo "负责人电话：".$row['store_keep_phone']."<br>";*/
		
	
?>
<div class="details">
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="20%">药店</th>  
								<th width="80%">详情</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo "药店ID";?></td>
                                <td><?php echo $row['store_id'];?></td>
                            </tr>
							<tr>
                                <td><?php echo "药店名称";?></td>
                                <td><?php echo $row['store_name'];?></td>
                            </tr>
							<tr>
                                <td><?php echo "药店电话";?></td>
                                <td><?php echo $row['store_phone'];?></td>
                            </tr>
							<tr>
                                <td><?php echo "药店地址";?></td>
                                <td><?php echo $row['store_address'];?></td>
                            </tr>
							<tr>
                                <td><?php echo "药店负责人";?></td>
                                <td><?php echo $row['store_keep'];?></td>
                            </tr>
							<tr>
                                <td><?php echo "药店负责人ID";?></td>
                                <td><?php echo $row['store_keep_id'];?></td>
                            </tr>
							<tr>
                                <td><?php echo "负责人电话";?></td>
                                <td><?php echo $row['store_keep_phone'];?></td>
                            </tr>
                            <tr>
                                <td><?php echo "药店执照";?></td>
                                <td><input name="" type="image" src="../../store/pic/<?php echo $row['store_phone'];?>/bg.jpg" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <input name="accept" type="button" value="同意" class="btn" onclick="acceptNewDrugStore(<?php echo $row['store_id'];?>)"/>
                    <input name="refuse" type="button" value="拒绝" class="btn" onclick="refuseNewDrugStore(<?php echo $row['store_id'];?>)"/>
</div>
</body>
<script type="text/javascript">

	function acceptNewDrugStore(id){
			window.location="acceptNewDrugStore.php?id="+id;
	}
	function refuseNewDrugStore(id){
			window.location="refuseNewDrugStore.php?id="+id;
	}

</script>
</html>