<?php
require_once('connect.php');
session_start();

 if(!empty($_GET)){
 $drug_id=$_GET['hidden'];
    
    $_SESSION['drugid']=$drug_id;

	$sql="select *from t_drug where drug_id=$drug_id";
    $result=mysql_query($sql);
    $row = mysql_fetch_assoc($result);

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
		<script type="text/javascript" src="./js/scripts.js"></script>
		<script type="text/javascript">
			function add() {
				 //window.location.href="./user_accountinfo.html" ;
				 document.location="./user_login.html";
			}
		</script>
		<title>商品信息</title>
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
            <div class="container">
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #000000;">我的订单 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"style="color: #000000;">待支付</a></li>
            <li><a href="#"style="color: #000000;">待收货</a></li>
            <li><a href="#"style="color: #000000;">待评价</a></li>
             <li><a href="#"style="color: #000000;">修改订单</a></li>
            </ul>
        </li>
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
      <form class="navbar-form navbar-left" role="search">
       <div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      	</div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>搜索</button>
    </div>
   </div>
  </form>
  </div>
  </div>
</nav>
</div>

<div class="row-fluid">
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<div id="drug_main_pic" >
				<img src="../store/img/Img_Login3.jpg" width="310px" height="300px">
			</div>
			<span>-------------------------------------------------------------</span>
			<div id="drug_second_pic" class="carousel slide" data-ride="carousel">
								<!-- 轮播（Carousel）指标 -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
								</ol>
								<!-- 轮播（Carousel）项目 -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="img/Img_Login.jpg" alt="First slide">
										<div class="carousel-caption"><span style="font-size: 40px;">展示图1</span></div>
									</div>
									<div class="item">
										<img src="img/Img_login2.jpg" alt="Second slide">
										<div class="carousel-caption"><span style="font-size: 40px;">展示图2</span></div>
									</div>
									<div class="item">
										<img src="img/Img_Login3.jpg" alt="Third slide">
										<div class="carousel-caption"><span style="font-size: 40px;">展示图3</span></div>
									</div>
									<div class="item">
										<img src="img/Img_Login4.jpg" alt="Fourth slide">
										<div class="carousel-caption"><span style="font-size: 40px;">展示图4</span></div>
									</div>
								</div>
								<!-- 轮播（Carousel）导航 -->
								<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
								<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
							</div>
		</div>
		<div class="col-md-4">
			<form  method="GET" action="user_admin/drug_infoview_handle.php" style="layout-grid: horizontal;">
				<fieldset>
					 <label id="drug_name"><?php  echo $row['drug_gname']?></label>
					 <label class="pre-scrollable"></label>
					 <label id="drug_specify"><?php  echo $row['drug_pack']?></label>
					 <span class="help-block" ></span>
					 <label id="drug_effect"><?php  echo $row['drug_indicate']?></label>
					 <span class="help-block"></span>
					 <div style="background-color: #B7B7B7;">
					 <label>单价：</label><label>29.9</label>
					 <span class="help-block" style="height: 30px;"></span>
					 <label>库存：</label><label>972</label>
					 <span class="help-block"></span>
					 </div>
					 <label>规格：</label><label><?php  echo $row['drug_pack']?></label>
					 <span class="help-block"></span>
					 <label>生产厂商：</label><label><?php  echo $row['drug_factory']?></label>
					 <span class="help-block"></span>
					 <label id="number">数量</label>
					 <div class="input-group" style="width: 110px;">
					    <span class="input-group-addon minus" id="minus" onclick="minu()">-</span>
					    <input type="text" id="count" class="number form-control input-sm" value="1" />
					    <span id="plus" class="input-group-addon plus" onclick="plu()">+</span>
					 </div>
					<span class="help-block"></span>
				

					<input type='text' style="display: none" name="addShopDrug" value='<?php echo 
				 	$row['drug_id'];?>'>
					<button type="submit" name="addShop"  class="btn btn-danger">
					加入购物车 </button>

					<!--<button type="submit" class="btn btn-danger">查看详情</button>-->
					
					
				</fieldset>
			</form>
			<div class="tabbable" id="tabs-945165" >
							<ul class="nav nav-tabs nav-justified">
								<li>
									<a href="#panel-info" data-toggle="tab">药品信息</a>
								</li>
								<li>
									<a href="#panel-dirction" data-toggle="tab">使用说明</a>
								</li>
							</ul>
							<div class="tab-content" style="overflow-x: hidden;overflow-y: auto;height: 300px;">
								<div class="tab-pane" id="panel-info">
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">产品名</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_gname']?></div>
											</div>
											<div class="panel-heading">规格</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_pack']?></div>
											</div>
											<div class="panel-heading">生产厂家</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_factory']?></div>
											</div>
											<div class="panel-heading">成分</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_element']?></div>
											</div>
										</div>

									</div>
								</div>

								<div class="tab-direction " id="panel-direction">
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">用量</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_quantity']?></div>
											</div>
											<div class="panel-heading">禁忌</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_avoid']?></div>
											</div>
											<div class="panel-heading">不良反应</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_react']?></div>
											</div>
											<div class="panel-heading">保存方式</div>
											<div class="panel-body">
												<div class="col-md-12"><?php  echo $row['drug_lay']?></div>
											</div>
										</div>

									</div>
								</div>
						</div>
						</div>
		</div>
		<div class="col-md-3">
        <div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-striped">
				<span class="help-block" style="height: 20px;"></span>
				<thead>
					<tr>
						<th>
							评价
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="warning">
						<td>
							好评度
						</td>
						<td>
							99%
						</td>
					</tr>
					<tr class="success">
						<td>
							好评
						</td>
						<td>
							198
						</td>
					</tr>
					<tr class="error">
						<td>
							中评
						</td>
						<td>
							1
						</td>
					</tr>
					<tr class="warning">
						<td>
							差评
						</td>
						<td>
							1
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="tabbable" id="tabs-945165" >
							<ul class="nav nav-tabs nav-justified">
								<li>
									<a href="#panel-all" data-toggle="tab">全部</a>
								</li>
								<li>
									<a href="#panel-high" data-toggle="tab">好评</a>
								</li>
								<li class="active">
									<a href="#panel-middle" data-toggle="tab">中评</a>
								</li>
								<li>
									<a href="#panel-low" data-toggle="tab">差评</a>
								</li>
							</ul>
							<div class="tab-content" style="overflow-x: hidden;overflow-y: auto;height: 400px;">
								<div class="tab-pane" id="panel-all">
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，</div>
											</div>
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，</div>
											</div>
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，</div>
											</div>
										</div>

									</div>
								</div>

								<div class="tab-pane " id="panel-high">
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，</div>
											</div>
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，药品很有效，</div>
											</div>
										</div>

									</div>
								</div>

								<div class="tab-pane active" id="panel-middle">
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般</div>
											</div>
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般，药品一般</div>
											</div>
										</div>

									</div>
								</div>

								<div class="tab-pane " id="panel-low">
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般</div>
											</div>
											<div class="panel-heading">日期：2016-04-05 卖家：<a href="#">but1</a></div>
											<div class="panel-body">
												<div class="col-md-12">一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般，一般般</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						</div>
		</div>
		</div>
	</div>
			<script type="text/javascript">
			var coun=document.getElementById("count");
			var minu =function(){
				  coun.value=parseInt(coun.value)-1;
			}
			var plu=function(){
				  coun.value=parseInt(coun.value)+1;
			}
			
		    </script>
	</body>
</html>
