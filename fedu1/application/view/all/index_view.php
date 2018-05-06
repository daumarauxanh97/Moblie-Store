<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/application_all.css">
</head>
<body>
<div class="wrapper">
<?php if(isset($_GET['loai_sp']) && ($_GET['loai_sp']=='laptop')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>

  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="side-bar ">
	<div class="head-side-bar ">
		<p>Danh mục</p>
	</div>
  <hr>
	<div class="hang_sx">
    <p>Hãng sản xuất</p>
		<ul>
		<?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
			<li><a href="?c=all&m=index&hang_sxl=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
		<?php endforeach;?>
		</ul>
	</div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&loai_spp=laptop&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&loai_spp=laptop&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop</p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLaptop'] as $key => $latop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $latop['id'];?>"><img src="public/images/<?php echo $latop['images'];?>" style="width: 180px;height: 220px;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $latop['id'];?>"><p><?php echo $latop['laptop_name'];?></p>
      <h4><?php echo $latop['gia'];?></h4>  </a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page1'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['loai_sp']) && ($_GET['loai_sp']=='phone')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>

  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxp=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=phone&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&loai_spp=phone&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&loai_spp=phone&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại</p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allPhone'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxp']) && ($_GET['hang_sxp']=='Apple')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxp'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxp=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&hang_sxpp=Apple&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxpp=Apple&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxpp=Apple&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại - <?php echo $_GET['hang_sxp'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <!-- <?php echo "<pre>"; print_r($data['phone']); die;?> -->
  <?php foreach($data['phone'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page2'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxp']) && ($_GET['hang_sxp']=='Oppo')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxp'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxp=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại - <?php echo $_GET['hang_sxp'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container row">
  <?php foreach($data['allPhoneHangSXOppo'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page2'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxp']) && ($_GET['hang_sxp']=='Samsung')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxp'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxp=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&hang_sxpp=Samsung&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxpp=Samsung&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxpp=Samsung&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Samsung&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại - <?php echo $_GET['hang_sxp'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allPhoneHangSX'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxl']) && ($_GET['hang_sxl']=='Apple')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxl'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxl=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&hang_sxll=Apple&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxll=Apple&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxll=Apple&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop - <?php echo $_GET['hang_sxl'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLatopHangSXApple'] as $key => $laptop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><img src="public/images/<?php echo $laptop['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><p><?php echo $laptop['laptop_name'];?></p>
      <h4><?php echo $laptop['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page4']; ?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxl']) && ($_GET['hang_sxl']=='Asus')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p>
  <i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxl'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxl=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&hang_sxll=Asus&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxll=Asus&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxll=Asus&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop - <?php echo $_GET['hang_sxl'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLaptopHangSXOppo'] as $key => $laptop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><img src="public/images/<?php echo $laptop['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><p><?php echo $laptop['laptop_name'];?></p>
      <h4><?php echo $laptop['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page5']; ?>
</div>
<?php endif;?>

<?php if(isset($_GET['loai_spp']) &&($_GET['loai_spp'])=='phone' && ($_GET['sap_xep']=='asc')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>

  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxp=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
    <?php foreach($data['allGia'] as $key => $hangSX):?>
      <li><a href="">&#187<?php echo $hangSX['khoang_gia']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&loai_spp=phone&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại</p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allPhoneAsc'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page6'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['loai_spp']) && ($_GET['loai_spp'])=='laptop' &&isset($_GET['sap_xep']) && ($_GET['sap_xep']=='asc') ):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>

  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
<?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
      <li><a href="?c=all&m=index&hang_sxl=<?php echo $hangSX['name']?>">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&loai_spp=laptop&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&loai_spp=laptop&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&loai_spp=laptop&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=laptop&&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop</p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLaptopAsc'] as $key => $latop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $latop['id'];?>"><img src="public/images/<?php echo $latop['images'];?>" style="width: 180px;height: 220px;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $latop['id'];?>"><p><?php echo $latop['laptop_name'];?></p>
      <h4><?php echo $latop['gia'];?></h4>  </a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page7'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxpp']) &&($_GET['hang_sxpp'])=='Apple' && ($_GET['sap_xep']=='asc')):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxpp'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
     <li><a href="?c=all&m=index&hang_sxpp=Apple&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxpp=Apple&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxpp=Apple&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Apple&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại - <?php echo $_GET['hang_sxpp'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allPhoneAppleAsc'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page8'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxpp']) && ($_GET['hang_sxpp ']=='Oppo') && ($_GET['sap_xep']=='asc') ):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Phone</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxpp'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXPhone'] as $key => $hangSX):?>
      <li><a href="">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
 <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&hang_sxpp=Oppo&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxpp=Oppo&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Điện thoại - <?php echo $_GET['hang_sxpp'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container row">
  <?php foreach($data['allPhoneOppoAsc'] as $key => $phone): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p><?php echo $phone['phone_name'];?></p>
      <h4><?php echo $phone['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page9'];?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxll']) && ($_GET['hang_sxll']=='Apple') &&($_GET['sap_xep'])=='asc'):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxll'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
      <li><a href="">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Apple&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop - <?php echo $_GET['hang_sxll'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLaptopAppleAsc'] as $key => $laptop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><img src="public/images/<?php echo $laptop['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><p><?php echo $laptop['laptop_name'];?></p>
      <h4><?php echo $laptop['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page10']; ?>
</div>
<?php endif;?>

<?php if(isset($_GET['hang_sxll']) && ($_GET['hang_sxll']=='Asus') &&($_GET['sap_xep'])=='asc'):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>
<i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
<p style="display: inline;font-size: 20px;"><?php echo $_GET['hang_sxll'];?></p>
  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
      <li><a href="">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&hang_sxll=Asus&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop - <?php echo $_GET['hang_sxll'];?> </p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLaptopAsusAsc'] as $key => $laptop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><img src="public/images/<?php echo $laptop['images'];?>" style="width: 200px;height: auto;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><p><?php echo $laptop['laptop_name'];?></p>
      <h4><?php echo $laptop['gia'];?></h4></a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page11']; ?>
</div>
<?php endif;?>

<?php if(isset($_GET['loai_spp']) && ($_GET['loai_spp']=='laptop') && isset($_GET['min']) && isset($_GET['max'])):?>
  <p style="display: inline;font-size: 20px;">Trang chủ </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Laptop</p>

  <div id="demo" class="carousel slide col-lg-12 col-sm-12 col-xs-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/13.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/14.jpg" alt=""  >
    </div>
    <div class="carousel-item">
      <img src="public/images/15.jpg" alt="" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon" style="margin-left: -90px;"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: -40px;">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="side-bar ">
  <div class="head-side-bar ">
    <p>Danh mục</p>
  </div>
  <hr>
  <div class="hang_sx">
    <p>Hãng sản xuất</p>
    <ul>
    <?php foreach($data['allHangSXLaptop'] as $key => $hangSX):?>
      <li><a href="">&#187<?php echo $hangSX['name']?></a></li>
    <?php endforeach;?>
    </ul>
  </div>
   <hr style="font-size: 2px;">
  <div class="gia">
    <p>Gia thanh</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=1000000&max=5000000">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=5000000&max=10000000">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=10000000&max=15000000">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&min=15000000&max=20000000">&#187Từ 15 -> 20 triệu</a></li>
       <li><a href="?c=all&m=index&loai_spp=laptop&min=20000000&max=25000000">&#187Từ 20 -> 25 triệu</a></li>
        <li><a href="?c=all&m=index&loai_spp=laptop&min=25000000&max=30000000">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=new">&#187Mới nhất</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=view">&#187Xem nhiều</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=asc">&#187Giá từ thấp đến cao</a></li>
      <li><a href="?c=all&m=index&loai_spp=laptop&sap_xep=desc">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
  <div class="head-content">
    <p>Laptop</p>
  </div>
   <hr style="font-size: 2px;">
   <div class="product-content container">
  <?php foreach($data['allLaptopBetween'] as $key => $latop): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $latop['id'];?>"><img src="public/images/<?php echo $latop['images'];?>" style="width: 180px;height: 220px;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $latop['id'];?>"><p><?php echo $latop['laptop_name'];?></p>
      <h4><?php echo $latop['gia'];?></h4>  </a>
    </div>
  <?php endforeach; ?>
</div>
<?php echo $data['page12'];?>
</div>
<?php endif;?>
  </div>
</body>
</html>  