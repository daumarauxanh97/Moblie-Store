<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="public/js/range-slider.js"></script>
  <script src="public/js/index.js"></script>
</head>
<body>
<div class="wrapper" style="width: 1200px;margin: auto; ">
<div style="margin-bottom: 10px;">
<p style="display: inline;font-size: 20px;">Trang chủ </p></a><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;">Tìm kiếm</p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>  
 <p style="display: inline;font-size: 20px;"><?php echo $_REQUEST['search'];?></p>
 </div>
 <div style="min-height: 1200px;">
<?php foreach($data['phone'] as $key => $phone): ?>
      <div class="col-md-3 " style="display: inline-block;min-height:380px;">
      <div class="pd1 " style="height:214px;width:100%;">
       <a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><img src="uploads/images/<?php echo $phone['images'];?>" style="width: 200px;height: auto;margin-top: 5px;"></a>
      </div>
      <hr style="color: #ddd;height: 2px;">
      <div class="PD2" ">
       <h2><a href="?c=product&m=detail&id_phone=<?php echo $phone['id'];?>"><p style="color: "><?php echo $phone['phone_name'];?></p></h2>
      <h4><?php echo $phone['gia'];?></h4></a>
    <form style="display: inline-block;" method="POST" action="?c=cart&m=add&id_phone=<?php echo $phone['id'];?>">
    <button type="submit" class="btn btn-danger" >Mua ngay</button>
    </form>
       <button class="btn btn-primary">Xem chi tiết</button>
      </div>
      </div>
  <?php endforeach; ?>
  <?php foreach($data['laptop'] as $key => $laptop): ?>
      <div class="col-md-3 " style="display: inline-block;min-height:380px;">
      <div class="pd1 " style="height:214px;width:100%;">
       <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><img src="public/images/<?php echo $laptop['images'];?>" style="width: 200px;height: auto;margin-top: 5px;"></a>
      </div>
      <hr style="color: #ddd;height: 2px;">
      <div class="PD2" ">
       <h2><a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><p style="color: "><?php echo $laptop['laptop_name'];?></p></h2>
      <h4><?php echo $laptop['gia'];?></h4></a>
    <form style="display: inline-block;" method="POST" action="?c=cart&m=add&id_laptop=<?php echo $laptop['id'];?>">
    <button type="submit" class="btn btn-danger" >Mua ngay</button>
    </form>
       <button class="btn btn-primary">Xem chi tiết</button>
      </div>
      </div>
  <?php endforeach; ?>
 </div>
 </div> 
 </div>
 </body>