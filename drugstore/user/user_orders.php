<?php 
	require_once('connect.php');
	session_start();
	//echo $_SESSION['user'];
	$user_name=$_SESSION['user'];
	$sql="select * from t_order where user_username='$user_name'";
	$result=mysql_query($sql)or die("ss");
	// while($row=mysql_fetch_assoc($result)){
	// 	echo $row;
	// }



 ?>

<!DOCTYPE html>
<html>

	<head>
		<script type="text/javascript" src="../js/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<title>用户订单页面</title>
	</head>

	<body>

		<div class="container">
			<nav class="navbar btn-success">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed glyphicon glyphicon-align-justify" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#" style="color: #000000;">首页<span class="sr-only">(current)</span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #000000;">账户管理 <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#" style="color: #000000;">个人信息管理</a></li>
									<li><a href="#" style="color: #000000;">收获地址管理</a></li>
									<li><a href="#" style="color: #000000;">修改订单</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form  navbar-right" role="search">
							<div class="row">
								<div class="col-lg-12">
									<div class="input-group">
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">搜索方式 <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">药店</a></li>
												<li><a href="#">药品</a></li>
												<li><a href="#">症状</a></li>
											</ul>
										</div>
										<input type="text" class="form-control" aria-label="...">
									</div>
									<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>搜索</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
			<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-list">
						<li class="nav-header">
							订单中心
						</li>
						<li class="active">
							<a href="#">我的订单</a>
						</li>
						<li>
							<a href="#">。。。</a>
						</li>
						<li>
							<a href="#">。。。</a>
						</li>
						<li class="nav-header">
							关注中心
						</li>
						<li>
							<a href="#">我的收藏</a>
						</li>
						<li>
							<a href="#">我的评价</a>
						</li>
						
						<li>
							<a href="#">。。。</a>
						</li>
						<li class="divider">
						</li>
						<li class="nav-header">
							自助服务
						</li>
						<li>
							<a href="#">退换货</a>
						</li>
						<li>
							<a href="#">修改订单</a>
						</li>
							<li>
							<a href="#">帮助</a>
						</li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="col-md-12">
						<h2>我的订单</h2></div>
					<div class="col-md-12">
						<div class="tabbable" id="tabs-945165">
							<ul class="nav nav-tabs nav-justified">
								<li>
									<a href="#panel-all" data-toggle="tab">全部订单</a>
								</li>
								<li>
									<a href="#panel-pay" data-toggle="tab">待付款</a>
								</li>
								<li class="active">
									<a href="#panel-receive" data-toggle="tab">待收货</a>
								</li>
								<li>
									<a href="#panel-evaluate" data-toggle="tab">待评价</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane" id="panel-all">
									<div class="row">
										<div class="col-md-6">订单商品</div>
										<div class="col-md-2">支付金额</div>
										<div class="col-md-2">订单状态</div>
										<div class="col-md-2">操作</div>
									</div>
									<div class="row">
										<div class="panel panel-default">

											<!-- Default panel contents -->
											<div class="panel-heading">下单时间：2016-04-05 订单编号：123903237 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-6">
													<img alt="140x140" src="../image/logo.png" class="img-rounded" href="#" /> <a href="#">商品名称及描述</a>
												</div>
												<div class="col-md-2">200</div>
												<div class="col-md-2">已完成</div>
												<div class="col-md-2"><a href="#">操作</a></div>
											</div>
										</div>

									</div>
								</div>

								<div class="tab-pane " id="panel-pay">
									<div class="row">
										<div class="col-md-6">订单商品</div>
										<div class="col-md-2">支付金额</div>
										<div class="col-md-2">订单状态</div>
										<div class="col-md-2">操作</div>
									</div>

									<div class="row">
										<div class="panel panel-default">

											<!-- Default panel contents -->
											<div class="panel-heading">下单时间：2016-04-05 订单编号：123903237 卖家：<a href="#">but2</a></div>
											<div class="panel-body">
												<div class="col-md-6">
													<img alt="140x140" src="../image/logo.png" class="img-rounded" href="#" /> <a href="#">商品名称及描述</a>
												</div>
												<div class="col-md-2">200</div>
												<div class="col-md-2">已完成</div>
												<div class="col-md-2"><a href="#">操作</a></div>

											</div>
										</div>

									</div>
								</div>

								<div class="tab-pane active" id="panel-receive">
									<div class="row">
										<div class="col-md-6">订单商品</div>
										<div class="col-md-2">支付金额</div>
										<div class="col-md-2">订单状态</div>
										<div class="col-md-2">操作</div>
									</div>

									<div class="row">
									<?php 
				while($row=mysql_fetch_assoc($result)){
					$store= $row['store_id'];
						$sql_d="select * from t_drug a,t_order b where  b.drug_id=a.drug_id and b.store_id='$store'";
						$result_d=mysql_query($sql_d) or die('ss');
						$row_d=mysql_fetch_assoc($result_d);
	
									 ?>
										<div class="panel panel-default">

											<!-- Default panel contents -->
											<div class="panel-heading">下单时间：2016-04-05 订单编号：<?php echo $row['order_id']?> 卖家：<?php echo $row_d['drug_name']?></div>
											<div class="panel-body">
												<div class="col-md-6">
													<img alt="140x140" src="../image/logo.png" class="img-rounded" href="#" /> <a href="#">商品名称及描述</a>
												</div>
												<div class="col-md-2">200</div>
												<div class="col-md-2">已完成</div>
												<div class="col-md-2"><a href="#">操作</a></div>

											</div>
										</div>
										<?php }?>

									</div>
								</div>

								<div class="tab-pane " id="panel-evaluate">

									<div class="row">
										<div class="col-md-6">订单商品</div>
										<div class="col-md-2">支付金额</div>
										<div class="col-md-2">订单状态</div>
										<div class="col-md-2">操作</div>
									</div>

									<div class="row">
										<div class="panel panel-default">

											<!-- Default panel contents -->
											<div class="panel-heading">下单时间：2016-04-05 订单编号：123903237 卖家：<a href="#">but4</a></div>
											<div class="panel-body">
												<div class="col-md-6">
													<img alt="140x140" src="../image/logo.png" class="img-rounded" href="#" /> <a href="#">商品名称及描述</a>
												</div>
												<div class="col-md-2">200</div>
												<div class="col-md-2">已完成</div>
												<div class="col-md-2"><a href="#">操作</a></div>

											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>

</html>