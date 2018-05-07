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
    <?php $currentLocation=$_SERVER['REQUEST_URI'];?>
    
    <div class="side-bar ">
    <div class="head-side-bar ">
      <p>Danh mục</p>
    </div>

    <div class="hang_sx">
      <p>Hãng sản xuất</p>
      <ul>
      <?php foreach($data['allHangSX'] as $key => $hangSX):?>
      <?php 
      $pieces=explode("&", $currentLocation);
      foreach ($pieces as $key => $value) 
      {
        if(strstr($value, 'hang_sx')!==false ||strstr($value, 'page'))
        {
            unset($pieces[$key]);
        }
      }
      $currentLocation=implode('&',$pieces);
      ?>
         <li><a href="<?php echo $currentLocation;?>&hang_sx=<?php echo $hangSX['name']?>&page=1">&#187<?php echo $hangSX['name']?></a></li>
       <?php endforeach;?>
     </ul>
   </div>
   <hr style="font-size: 2px;">
   <div class="gia">
    <p>Gia thanh</p>
    <ul>
    <?php 
      $pieces=explode("&", $currentLocation);
      foreach ($pieces as $key => $value) 
      {
        if(strstr($value, 'min')!==false||strstr($value, 'max')!==false||strstr($value, 'page'))
        {
            unset($pieces[$key]);
        }
      }
      $currentLocation=implode('&',$pieces);
      
      ?>
      <li><a href="<?php echo $currentLocation;?>&min=1000000&max=5000000&page=1">&#187Từ 1 -> 5 triệu </a></li>
      <li><a href="<?php echo $currentLocation;?>&min=5000000&max=10000000&page=1">&#187Từ 5 -> 10 triệu</a></li>
      <li><a href="<?php echo $currentLocation;?>&min=10000000&max=15000000&page=1">&#187Từ 10 -> 15 triệu</a></li>
      <li><a href="<?php echo $currentLocation;?>&min=15000000&max=20000000&page=1">&#187Từ 15 -> 20 triệu</a></li>
      <li><a href="<?php echo $currentLocation;?>&min=20000000&max=25000000&page=1">&#187Từ 20 -> 25 triệu</a></li>
      <li><a href="<?php echo $currentLocation;?>&min=25000000&max=30000000&page=1">&#187Từ 25 -> 30 triệu</a></li>
    </ul>
  </div>
  <hr style="font-size: 2px;">
  <div class="gia">
    <p>Khác</p>
    <ul>
     <?php 
      $pieces=explode("&", $currentLocation);
      foreach ($pieces as $key => $value) 
      {
        if(strstr($value, 'sap_xep')!==false ||strstr($value, 'page'))
        {
            unset($pieces[$key]);
        }
      }
      $currentLocation=implode('&',$pieces);
      ?>
      <li><a href="<?php echo $currentLocation;?>&sap_xep=new&page=1">&#187Mới nhất</a></li>
      <li><a href="<?php echo $currentLocation;?>&sap_xep=view&page=1">&#187Xem nhiều</a></li>
      <li><a href="<?php echo $currentLocation;?>&sap_xep=asc&page=1">&#187Giá từ thấp đến cao</a></li>
      <li><a href="<?php echo $currentLocation;?>&sap_xep=desc&page=1">&#187Giá từ cao đến thấp</a></li>
    </ul>
  </div>
</div>
<div class="content">
<?php $id_table=$_GET['table']?? '';?>
<?php if ($id_table=="phone"):?>
<?php foreach($data['product'] as $key => $product): ?>
      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_phone=<?php echo $product['id'];?>"><img src="public/images/<?php echo $product['images'];?>" style="width: 180px;height: 220px;"></a>
      <a href="?c=product&m=detail&id_phone=<?php echo $product['id'];?>"><p><?php echo $product['phone_name'];?></p>
      <h4><?php echo $product['gia'];?></h4>  </a>
    </div>
  <?php endforeach; ?>
  <?php echo $data['page'];?>
<?php endif;?>
<?php if ($id_table=="laptop"):?>
<?php foreach($data['product'] as $key => $product): ?>

      <div class="col-md-4 " style="">
      <a href="?c=product&m=detail&id_laptop=<?php echo $product['id'];?>"><img src="public/images/<?php echo $product['images'];?>" style="width: 180px;height: 220px;"></a>
      <a href="?c=product&m=detail&id_laptop=<?php echo $product['id'];?>"><p><?php echo $product['laptop_name'];?></p>
      <h4><?php echo $product['gia'];?></h4>  </a>
    </div>
  <?php endforeach; ?>
  <?php echo $data['page'];?>
<?php endif;?>
</div>
</div>
</body>
</html>  


