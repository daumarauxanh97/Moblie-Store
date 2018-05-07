<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <<!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="public/js/range-slider.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/application_home.css">
  <style type="text/css">
    nav ul li
    {
      width: 150px;
      margin-top: 5px;
    }
  </style>
</head>
<header>
<div class="head">
  	<div class="header-logo">
  		<a href="?c=home&m=index" style="text-decoration:none;"><h2 style="color: white;">Dienthoai.com.vn</h2></a>
  	</div>
    <form class="" action="">
  	<div class="search" >
      <input type="text" name="" class="text-search" style="width: 500px;height: 32px;border: 1px solid grey;" placeholder="Nhập tên điện thoại,máy tính,phụ kiện cần tìm">
      <button type="submit" class="button-search" style="height: 32px;margin-top:20px;"><i class="fa fa-search" style="color: lightskyblue;"></i></button> 
      <button type=""></button>
    </div>
    <a href="?c=cart&m=index">
      <button type="submit" class="button-buy" style="color: white; font-size: 30px;"><i class="fa fa-shopping-cart"></i></button>
    </a>
    <button type="submit" class="button-contact" style="color: white; font-size: 30px;"><i class="fa fa-phone"></i></button>
    <div class="text-buy">
    <a href="?c=cart&m=index" style="text-decoration:none;"><p>Giỏ hàng</p></a>
    </div>
    <div class="text-contact" style="    margin-left: 1020px;
    margin-top: -38px;">
    <p>Liên hệ</p> 
    </div>
    </form>   
</div>     
</header>
<nav>
<form>
  <div class="menu-container">
   <ul>
     <li>
       <i class="fa fa-mobile" style="color: white;font-size: 30px;margin-right: 5px;cursor: pointer;"></i>
       <a href="?c=all&m=index&table=phone" style="font-size: 20px;">Điện thoại</a>
       <i class="fa fa-angle-down" style="color: white;
       font-size: 20px;margin-left: 2px;"></i>
       <div class="drop-menu" >
          <ul>
            <li>
             <a href="" style="color: black;font-weight: bold;">Hãng sản xuất</a>
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Apple">Apple</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Samsung">Samsung</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Sony">Sony</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Asus">Asus</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Xiaomi">Xiaomi</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Oppo">Oppo</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&hang_sx=Nokia">Nokia</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" style="color: black;font-weight: bold;">Mức giá</a>
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=phone&min=1000000&max=5000000">1->5 triệu</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=phone&min=5000000&max=10000000">5->10 triệu</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&min=10000000&max=15000000">10->15 triệu</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=phone&min=15000000&max=20000000">15->20 triệu</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="/?c=all&m=index&table=phone&min=20000000&max=25000000">20->25 triệu</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" style="color: black;font-weight: bold;">Giảm giá</a>
               <ul>
                  <li>
                    <a href="">Trả góp 0%</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">Giảm giá 10%</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">Giảm giá 20%</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Giảm giá 30%</a>
                  </li>
              </ul>
            </li>
          </ul>
        </div>  
     </li>
     <li>
       <i class="fa fa-tablet" style="color: white;font-size: 30px;margin-right: 5px;cursor: pointer;"></i>
       <a href="" style="font-size: 20px;">Tablet</a>
       <i class="fa fa-angle-down" style="color: white;
       font-size: 20px;margin-left: 2px;"></i>
       <div class="drop-menu" >
          <ul>
            <li>
             <a href="" style="color: black;font-weight: bold;">Hãng sản xuất</a>
               <ul>
                  <li>
                    <a href="">Apple</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">Samsung</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">Lenovo</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Huawei</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" style="color: black;font-weight: bold;">Mức giá</a>
               <ul>
                  <li>
                    <a href="">1->3 triệu</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">3->5 triệu</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">5->8 triệu</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Trên 8 triệu</a>
                  </li>
              </ul>
            <li>
             <a href="" style="color: black;font-weight: bold;">Giảm giá</a>
               <ul>
                  <li>
                    <a href="">Trả góp 0%</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">Giảm giá 10%</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">Giảm giá 20%</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Giảm giá 30%</a>
                  </li>
              </ul>
            </li>
          </ul>
        </div>  
     </li>
     <li style="margin-left: -7px;">
       <i class="fa fa-laptop" style="color: white;font-size: 30px;margin-right: 5px;cursor: pointer;"></i>
       <a href="?c=all&m=index&table=laptop" style="font-size: 20px;">Laptop</a>
       <i class="fa fa-angle-down" style="color: white;
       font-size: 20px;margin-left: 2px;"></i>
       <div class="drop-menu" >
          <ul>
            <li>
             <a href="" style="color: black;font-weight: bold;">Hãng sản xuất</a>
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=laptop&hang_sx=Apple">Apple</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=laptop&hang_sx=Asus">Asus</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&hang_sx=Dell">Dell</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&hang_sx=Lenovo">Lenovo</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&hang_sx=Acer">Acer</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&hang_sx=HP">HP</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" style="color: black;font-weight: bold;">Mức giá</a>
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=laptop&min=1000000&max=5000000">1->5 triệu</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="?c=all&m=index&table=laptop&min=5000000&max=10000000">5->10 triệu</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&min=10000000&max=15000000">10->15 triệu</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&min=15000000&max=20000000">15->20 triệu</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&min=20000000&max=25000000">20->25 triệu</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="?c=all&m=index&table=laptop&min=25000000&max=30000000">25->30 triệu</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" style="color: black;font-weight: bold;">Giảm giá</a>
               <ul>
                  <li>
                    <a href="">Trả góp 0%</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">Giảm giá 10%</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">Giảm giá 20%</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Giảm giá 30%</a>
                  </li>
              </ul>
            </li>
          </ul>
        </div>  
     </li>
     <li>
       <i class="fa fa-headphones" style="color: white;font-size: 30px;margin-right: 5px;cursor: pointer;"></i>
       <a href="" style="font-size: 20px;">Phụ kiện</a>
       <i class="fa fa-angle-down" style="color: white;
       font-size: 20px;margin-left: 2px;"></i>
       <div class="drop-menu" >
          <ul>
            <li>
             <a href="" style="color: black;font-weight: bold;">Các phụ kiện</a>
               <ul>
                  <li>
                    <a href="">Ốp lưng</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">Bao da ốp lưng</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">USB-ổ cứng</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Thẻ nhớ</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Tai nghe</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" ></a>
               <ul>
                  <li >
                  </li>
               </ul>
               <ul>
                  <li >
                    <a href="">Dây sạc</a>
                  </li>
               </ul> 
               <ul>
                  <li>
                    <a href="">Loa</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">Chuột</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Bàn phím</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Miếng dán màn hình</a>
                  </li>
              </ul>
            </li>
            <li>
             <a href="" style="color: black;font-weight: bold;">Khuyến mãi</a>
               <ul>
                  <li>
                    <a href="">Giảm giá 10%</a>
                  </li>
               </ul>
               <ul>  
                  <li>
                    <a href="">Giảm giá 20%</a>
                  </li>
              </ul>
              <ul>  
                  <li>
                    <a href="">Giảm giá 30%</a>
                  </li>
              </ul>
            </li>
          </ul>
        </div>  
     </li>
     <li style="margin-left:9px;">
       <i class="fa fa-apple" style="color: white;font-size: 30px;margin-right: 5px;cursor: pointer;"></i>
       <a href="" style="font-size: 20px;">Apple</a>
     </li>
     <li style="margin-left: -9px;">
       <a href="" style="font-size: 20px;font-weight:bold;">SAMSUNG</a>
     </li>
     <li style="margin-left: 3px;">
       <i class="fa fa-gift" style="color: white;font-size: 30px;margin-right: 5px;cursor: pointer;"></i>
       <a href="" style="font-size: 20px;">Khuyến mãi</a>
       <!-- <i class="fa fa-angle-down" style="color: white;
       font-size: 20px;"></i> -->
     </li>
   </ul>
  </div>
</form>
</nav>
<!-- <header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
           <li class="active"><a href="#">Home</a></li>
           <li><a href="#">For Beginners</a></li>
           <li><a href="#">Tutorials</a></li>
           <li><a href="#">Themes</a></li>
           <li><a href="#">Plugins</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header> -->