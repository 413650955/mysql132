<?php
require_once('connect.php');
require_once('page.php');
session_start();

//$offset=$_GET['page'];
if(!empty($_GET)){
	   // 	echo "<script>alert('请输入搜索信息');document.location='user_search_result.php';</script>";
	   // }

	   $_SESSION['search']="%".$_GET['search']."%";
	   $_SESSION['flag']=true;
	   $search1=$_SESSION['search'];
 $sql1="select * from t_drug where drug_key1 LIKE '$search1' or drug_gname LIKE '$search1' ";
    $result1=mysql_query($sql1)or die("请重新搜索");
     //$line=mysql_num_rows($result);
$_SESSION['totalRows']=mysql_num_rows($result1);
	
	}			
	   ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<script type="text/javascript" src="../js/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<title>搜索结果</title>
	</head>
	<body>
				<div class="container">
	       <div class="lg-a"align="left">
            <a id="SN_DOMAIN" href="" title="药店" name="Logo"><img class="lg-logo" src="../image/logo.png" alt="苏宁易购"/></a>
            </div>
            <div class="user"align="right">
       
				<div class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">用户名001<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">我的VIP</a>
						</li>
						<li>
							<a href="#">个人中心</a>
						</li>
						<li>
							<a href="#">账号设置</a>
						</li>
						<li>
							<a href="#">意见反馈</a>
						</li>
						<li>
							<a href="#">退出</a>
						</li>
						
					</ul>
				</div>
	
            </div>
            </div>
            <nav class="navbar btn-success" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed glyphicon glyphicon-align-justify" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false" >
      	</button>
      </div>
  <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color: #000000;">首页<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">登录<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">注册<span class="sr-only">(current)</span></a></li>
         <li class="active"><a href="user_orders.php"style="color: #000000;">订单<span class="sr-only">(current)</span></a></li>
 <!--        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #000000;">我的订单 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"style="color: #000000;">待支付</a></li>
            <li><a href="#"style="color: #000000;">待收货</a></li>
            <li><a href="#"style="color: #000000;">待评价</a></li>
             <li><a href="#"style="color: #000000;">修改订单</a></li>
            </ul>
        </li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #000000;">客服服务<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"style="color: #000000;">帮助中心</a></li>
            <li><a href="#"style="color: #000000;">退换货</a></li>
            <li><a href="#"style="color: #000000;">建议反馈</a></li>
             <li><a href="#"style="color: #000000;">在线咨询</a></li>
            </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" method='get' action='user_search_result.php' role="search">
       <div class="row">
  <div class="col-lg-12">
   <div class="input-group">
      <input type="text"  name='search' class="form-control" aria-label="...">
      	</div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>搜索</button>
    </div>
   </div>
  </form>
  </div>
  </div>
</nav>
</div>
<div class="row">
	<div id="sidebar" class="   col-sm-2 hidden-xs">
		<div class="block">
			<h2 class="list-group-item-heading">所有药品分类</h2>
			<ul class="list-group">
				<li class="list-group-item-success"><a href="#"style="color: #000000;">家庭常备药</a></li>
				<li class="list-group-item-success"><a href="#"style="color: #000000;">高血压</a></li>
				<li class="list-group-item-success"><a href="#"style="color: #000000;">性功能障碍</a></li>
				<li class="list-group-item-success"><a href="#"style="color: #000000;">抑郁症</a></li>
			<li class="list-group-item-success"><a href="#"style="color: #000000;">滋补保健</a></li>
			<li class="list-group-item-success"><a href="#"style="color: #000000;">口腔诊疗</a></li>

			</ul>
		</div>
		
	</div>
	<div id="main" class="col-sm-10">
		<div class="block">
			 <nav class="navbar btn-block" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed glyphicon glyphicon-align-justify" data-toggle="collapse" data-target="#bs-navbar-collapse-2" aria-expanded="false" >
      	</button>
      </div>
  <div class="collapse navbar-collapse" id="bs-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color: #000000;">综合<span class="glyphicon glyphicon-sort-by-attributes-alt"></span><span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">销量<span class="glyphicon glyphicon-sort-by-attributes-alt"></span><span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">评论<span class="glyphicon glyphicon-sort-by-attributes-alt"></span><span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">人气<span class="glyphicon glyphicon-sort-by-attributes-alt"></span><span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">最新<span class="glyphicon glyphicon-sort-by-attributes-alt"></span><span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#"style="color: #000000;">价格<span class="sr-only">(current)</span></a></li>
        </ul>
      <form class="navbar-form navbar-left" role="search">
       <div class="row">
  <div class="row">
  	<div class="col-sm-3">
   <div class="input-group">
      <input type="number" class="form-control" aria-label="...">
      	</div>
      </div>
      <div class="col-sm-1">--</div>
      <div class="col-sm-3">
      	<div class="input-group">
      <input type="number" class="form-control" aria-label="...">
      	</div>
      </div>
      	
      <button type="submit" name='submit' class="btn btn-default"><span class="glyphicon glyphicon-usd"></span>确定</button>
    </div>
   </div>
  </form>
  </div>
  </div>
</nav>
		</div>
		<div class="row  drug-list">
		<?php
		
	   //  if(empty($_POST)){
	   // // 	echo "<script>alert('请输入搜索信息');document.location='user_search_result.php';</script>";
	   // // }

	   // $_SESSION['search']="%".$_POST['search']."%";}
      
      $page=isset($_GET['page'])?$_GET['page']:1;
      
      //if(!isset($page));
        $offset=($page-1)*6;
      if(isset($_SESSION['search'])){
        $search=$_SESSION['search'];
	   $sql="select * from t_drug where drug_key1 LIKE '$search' or drug_gname LIKE '$search' limit {$offset},6";
    $result=mysql_query($sql)or die("请重新搜索");
     //$line=mysql_num_rows($result);
    while($row = mysql_fetch_assoc($result)){
  
	
	   ?>
		
		<div class="col-lg-4 col-xs-12">
			<div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger"><?php echo "drug price未定义";?></span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore"><?php echo "名称：".$row['drug_gname']."<br>"."规格：".$row['drug_specify']."<br>"."功能主治：".$row['drug_indicate'];?></p>
					<form method="get" action="drug_infoview.php">
					<input type='text' style="display: none" name="hidden"value='<?php echo $row['drug_id'];?>'>
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		<?php
	}}?>
	<?php
	//if(empty($_POST));
	if(!isset($_SESSION['flag'])){?>
	<div class="col-lg-4 col-xs-12">
<div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div><div class="col-lg-4 col-xs-12"><div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div><div class="col-lg-4 col-xs-12"><div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div><div class="col-lg-4 col-xs-12">
		<div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div><div class="col-lg-4 col-xs-12"><div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div><div class="col-lg-4 col-xs-12"><div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		<?php

	}
	
		?></div>
<?php
if(isset($_SESSION['totalRows'])){
	if($_SESSION['totalRows']>6)
{   $totalPage=ceil($_SESSION['totalRows']/6);
               ?>             <div style="margin-bottom: 0px">
                            	<?php echo showPage($page, $totalPage);?>
                            </div>
                            
	
	
<?php 
}}
?>

		
		
			<!-- <div class="col-lg-4 col-xs-12">
			<div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-xs-12">
			<div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="drug">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<a href="#"><img class="fill avatar" src="../image/logo.jpg"></a>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-7"> 
					<span id="price"class="btn-danger">￥20</span>
					</br>
					<span id="drugstore" class="btn-primary">自营</span>
					<p id="drugstore">巨康安  头孢丙烯分散片0.25g*6片用于敏感所致的轻、中度感染：呼吸道感染、皮肤软组织感染</p>
					<form method="get">
					<button type="submit" class="btn btn-danger">查看详情</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-xs-12">.....</div>
		</div>
	</div>
	
</div>
	<!-- <div class="navfooter" align="center">
		                   <nav>  
                        <ul class="pagination pagination-sm">  
                            <li class="disabled">  
                                <a href="#" aria-label="Previous">  
                                    <span aria-hidden="true">«</span>  
                                </a>  
                            </li>  
                            <li class="active"><a href="#">1</a></li>  
                            <li><a href="#">2</a></li>  
                            <li><a href="#">3</a></li>  
                            <li><a href="#">4</a></li>  
                            <li><a href="#">5</a></li>  
                            <li>  
                                <a href="#" aria-label="Next">  
                                    <span aria-hidden="true">»</span>  
                                </a>  
                            </li>  
                        </ul>  
                    </nav>  
	</div> --> 
	
	<footer>

	   	<div class="container" align="center">
	   		<span >Copyright.......</span>
	   	</div>
	   	
	   </footer>
	  

	</body>
</html>
