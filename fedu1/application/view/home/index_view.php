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
	<link rel="stylesheet" type="text/css" href="public/css/application_home.css">
  <style type="text/css">
  *{
    margin: 0;
    padding: 0;
    border: 0;
  }
  .content
  {
    width: 1200px;
    margin: auto;
  }
  .menu-content
  {
    background-color: rgb(229, 229, 229);
  }
  .menu-content ul
  {
    margin-left: 5px;
  }
  .menu-content ul li
  {
    display: inline-block;
    list-style: none;
    background-color: white;
    padding: 5px;
    border-radius: 12px;
    margin-right: 3px;
    margin-top: 10px;
    margin-bottom: 10px; 
  }
  .menu-content ul li a
  {
    color: black;
    font-size: 16px;
  }
  .product-content
  {
    margin-top: 10px;
    margin-bottom: 10px;
    width: 1200px;
    padding: 0;
    box-sizing: border-box;
  }
  .product-content a
  {
    text-decoration: none;
    color: black;
  }
  .col-md-3
   {
    height: 300px;
    background-color: white;
   }
   .col-md-3 h4
   {
    margin-top: -10px;
   }
   .col-md-3:hover
   {
        box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
   }
   #mySidenav a {
    position: fixed;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 115px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
    }

    #mySidenav a:hover {
        left: 0;
    }

    #about {
        top: 360px;
        background-color: #4CAF50;
    }

    #blog {
        top: 420px;
        background-color: #2196F3;
    }

    #projects {
        top: 480px;
        background-color: #f44336;
    }

    #contact {
        top: 540px;
        background-color: #555
    }
  </style>
</head>

<body>
<div id="mySidenav" class="sidenav">
  <a href="#phone" id="about">Phone</a>
  <a href="#tablet" id="blog">Tablet</a>
  <a href="#laptop" id="projects">Laptop</a>
  <a href="#" id="contact">Phụ kiện</a>
</div>
<!-- <div class="wrapper" > -->
<div class="contain" style="width: 1200px; margin: auto;">
<div class="row">
<div id="demo" class="carousel slide col-lg-12" data-ride="carousel" style="margin-top: 10px;">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/6.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img src="public/images/7.jpg" alt="" >
    </div>
    <div class="carousel-item">
      <img src="public/images/8.jpg" alt="" >
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
</div>
<div class="container1">
 <div class="content" >
   <div class="head-content" id="phone" style="margin-top: 15px;width: 1200px;height: 45px;background-color: #222222;font-family: arial;">
     <h3 style="color: white;padding-top:5px;padding-left: 5px;">Điện Thoại Hot</h3>
     <!-- <a href=""  style="float: right; margin-top: -34px;text-decoration: none; ">Xem thêm.</a> -->
   </div>
   <div class="menu-content">
     <ul>
    <li>
      <a href="?c=all&m=index&table=phone&hang_sx=Apple">Apple</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&hang_sx=Samsung">Samsung</a> 
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&hang_sx=Oppo">Oppo</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&hang_sx=Nokia">Nokia</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&hang_sx=Xiaomi">Xiaomi</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&hang_sx=Asus">Asus</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&sap_xep=asc">Giá từ thấp đến cao</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=phone&sap_xep=desc">Giá từ cao đến thấp</a>
    </li>
  </ul>
    <a href="?c=all&m=index&table=phone"  style="float: right; margin-top: -50px;text-decoration: none;">Xem thêm.</a>
   </div>
<div class="product-content row" style="width: 1200px;margin: auto;">
  <?php foreach($data['allDataPhone'] as $key => $phone): ?>
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
</div>
</div>

 <div class="content">
<div class="head-content" id="laptop" style="margin-top: 20px;width: 1200px;height: 45px;background-color: #222222;font-family: arial;">
     <h3 style="color: white;padding-top:5px;padding-left: 5px;">Latop Hot</h3>
     <!-- <a href="?c=product&m=all&loai_sp=<?php echo $latop['ten_loai'];?>"  style="float: right; margin-top: -34px;text-decoration: none; ">Xem thêm.</a> -->
</div>
<form method="GET" action="">
<div class="menu-content"> 
  <ul>
    <li>
      <a href="?c=all&m=index&table=laptop&hang_sx=Apple">Apple</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&hang_sx=Asus">Asus</a> 
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&hang_sx=Dell">Dell</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&hang_sx=Lenovo">Lenovo</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&hang_sx=Acer">Acer</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&hang_sx=Hp">Hp</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&sap_xep=asc">Giá từ thấp đến cao</a>
    </li>
    <li>
      <a href="?c=all&m=index&table=laptop&sap_xep=desc">Giá từ cao đến thấp</a>
    </li>
  </ul>
  <a href="?c=all&m=index&table=laptop"  style="float: right; margin-top: -50px;text-decoration: none;">Xem thêm.</a>
 </div>
 </form>

 <div class="product-content row" style="width: 1200px;margin: auto;">
    <?php foreach($data['allDataLaptop'] as $key => $laptop): ?>
      <div class="col-md-3 " style="display: inline-block;min-height:380px;">
      <div class="pd1 " style="height:214px;width:100%;">
       <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><img src="public/images/<?php echo $laptop['images'];?>" style="width: 180px;height: 220px;"></a>
      </div>
      <hr style="color: #ddd;height: 2px;">
      <div class="PD2" ">
      <a href="?c=product&m=detail&id_laptop=<?php echo $laptop['id'];?>"><p><?php echo $laptop['laptop_name'];?></p>
      <h4><?php echo $laptop['gia'];?></h4>
    <form style="display: inline-block;" method="POST" action="?c=cart&m=add&id_laptop=<?php echo $laptop['id'];?>">
    <button type="submit" class="btn btn-danger" >Mua ngay</button>
    </form>
       <button class="btn btn-primary">Xem chi tiết</button>
      </div>
      </div>
  <?php endforeach; ?>
  </div>

 </div>
 <div class="content">
<div class="head-content" id="phu_kien" style="margin-top: 20px;width: 1200px;height: 45px;background-color: #222222;font-family: arial;">
     <h3 style="color: white;padding-top:5px;padding-left: 5px;">Phụ kiện Hot</h3>
     <!-- <a href="?c=product&m=all&loai_sp=<?php echo $latop['ten_loai'];?>"  style="float: right; margin-top: -34px;text-decoration: none; ">Xem thêm.</a> -->
</div>
<form method="GET" action="">
<div class="menu-content"> 
  <ul>
  <li>
      <a href="">Miếng dán màn hinh</a>
    </li>
    <li>
      <a href="">Ốp lưng</a>
    </li>
    <li>
      <a href="">Tai nghe</a> 
    </li>
    <li>
      <a href="">Sạc dự phòng</a>
    </li>
    <li>
      <a href="">Sạc nhanh</a>
    </li>
    <li>
      <a href="">Thẻ nhớ</a>
    </li>
    <li>
      <a href="">Chuột</a>
    </li>
  </ul>
  <a href=""  style="float: right; margin-top: -50px;text-decoration: none;">Xem thêm.</a>
 </div>
 </form>

 <div class="product-content">

  </div>

</div>
 </div>
 </div>
 </body>
 </html>


