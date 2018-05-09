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
  <link rel="stylesheet" type="text/css" href="public/css/application_detail.css">
</head>
<body>
 <?php if(isset($_GET['id_phone'])):?>
 <div class="container1" style="width: 1200px;margin: auto;">
 <div class="head-detail" style="margin-top: 10px;">
 <a href="?c=home&m=index" style="color: black;text-decoration: none;">
 <p style="display: inline;font-size: 20px;">Trang chủ </p></a><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;"><?php echo $data['info']['ten_loai'];?> </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>	
 <p style="display: inline;font-size: 20px;"><?php echo $data['info']['phone_name'];?></p>
 </div>
 <div class="produc-detail" style="width: 1200px;background-color: white;padding-bottom:30px;height: 430px; ">
    <div class="name-detail" style="margin-top: 10px;margin-left: 10px;">
    	<h2><?php echo $data['info']['phone_name'];?></h2>
    	<hr>
    </div>
 	<div class="img-detai zoom" style="float: left;">
 		<img style="width: 350px;" src="<?php echo IMG_PATH_UPLOAD."/".$data['info']['images'];?>">
 	</div>
 	<div class="detail">
 		<h3 style="text-align: center;">Cấu hình sản phẩm</h3>
 		<p style="font-size: 20px;">Hãng sản xuất : <?php echo $data['info']['name'];?></p>
 		<p style="font-size: 20px;">Giá           : <?php echo $data['info']['gia'];?> VNĐ</p>
 		<p style="font-size: 20px;">Miêu tả       : <?php echo $data['info']['mieu_ta'];?></p>
 		<form style="display: inline-block;" method="POST" action="?c=cart&m=add&id_phone=<?php echo $data['info']['id'];?>">
    <div style="display: inline-block;"> 
    <p>Số lượng đặt hàng</p>
    <select name="qty">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    </div>
    <div>
 		<button type="submit" class="btn btn-danger" style="width: 220px;height: 80px;border-radius: 10px;"><p style="font-size: 25px;">Mua ngay</p><p style="margin-top: -15px;">(Giao hàng tận nơi)</p></button>
 		</form>
 		<form style="display: inline-block;" method="POST" action="?c=cart&m=plush&id=<?php echo $data['info']['id'];?>">
 		<button type="submit" class="btn btn-primary" style="width: 220px;height: 80px;margin-left: 10px;border-radius: 10px;"><i class="fa fa-cart-plus" style="float: left;margin-top: 20px;font-size: 35px;margin-left: 10px;"></i><p style="font-size: 25px;">Thêm vào </p><p style="font-size: 20px;margin-top: -15px;">giỏ hàng</p></button>
 		</form>
    </div>
 	</div>
   </div>
  <div class="chi_tiet_sp" style="width:1200px;margin-top: 10px;">
   <button  style="margin-bottom: 20px;width: 1200px;color: #222222;" name="bnThongtin"
          class="btn bnThongtin col-md-12">Click vào để xem thông tin chi tiết sản phẩm  
   </button>
   <div class="chitiet" style="background-color: white;width: 100%;display: none;">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="">Danh mục</th>
        <th class="">Thông tin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tên sản phẩm</td>
        <td><?php echo $data['info']['phone_name'];?></td>
      </tr>
        <td>Hãng sản xuất</td>
        <td><?php echo $data['info']['name'];?></td>
      <tr>
        <td>Ram</td>
        <td><?php echo $data['info']['ram'];?></td>
      </tr>
      <tr>
        <td>Độ phân giải</td>
        <td><?php echo $data['info']['do_phan_giai'];?></td>
      </tr>
      <tr>
        <td>Camera sau</td>
        <td><?php echo $data['info']['camera_sau'];?></td>
      </tr>
      <tr>
        <td>Camera trước</td>
        <td><?php echo $data['info']['camera_truoc'];?></td>
      </tr>
      <tr>
        <td>Bộ nhớ trong</td>
        <td><?php echo $data['info']['bo_nho_trong'];?></td>
      </tr>
      <tr>
        <td>Thẻ nhớ</td>
        <td><?php echo $data['info']['the_nho'];?></td>
      </tr>
      <tr>
        <td>Pin</td>
        <td><?php echo $data['info']['pin'];?></td>
      </tr>
    </tbody>
  </table>
   </div>
 </div> 
 <h2 style="margin-top: 20px;">Điện thoại cùng hãng</h2>
 <div class="same-product" style="width: 1200px;
	background-color: white;
	padding-bottom:50px; 
	margin-top: 20px;">
  <div class="row">
	<?php foreach($data['sameProduct'] as $key => $product): ?>
      <div class="col-md-3 " style="display: inline-block;min-height:380px;">
      <div class="pd1 " style="height:214px;width:100%;">
       <a href="?c=product&m=detail&id_phone=<?php echo $product['id'];?>"><img src="uploads/images/<?php echo $product['images'];?>" style="width: 200px;height: auto;margin-top: 5px;"></a>
      </div>
      <hr style="color: #ddd;height: 2px;">
      <div class="PD2" ">
       <h2><a href="?c=product&m=detail&id_phone=<?php echo $product['id'];?>"><p style="color: "><?php echo $product['phone_name'];?></p></h2>
      <h4><?php echo $product['gia'];?></h4></a>
    <form style="display: inline-block;" method="POST" action="?c=cart&m=add&id_phone=<?php echo $product['id'];?>">
    <button type="submit" class="btn btn-danger" >Mua ngay</button>
    </form>
       <button class="btn btn-primary">Xem chi tiết</button>
      </div>
      </div>
  <?php endforeach; ?>
 </div> 
 </div>
    <div class="row" style="width: 1200px;margin: auto;margin-top: 10px;">
      <div class="left col-md-4" style="float: left;height: 385px;background-color: white;border-right: 1px solid black;">
        <div class="" style="margin-left: 10px;">
            <strong style="">Hỏi, Đáp Về Sản Phẩm</strong>
            </div>
            <ul>
                <li>
                    <input name="" type="text" style="background-color: rgb(243, 243, 243);margin-left: 10px;margin-top:10px;width: 240px;height: 30px;" placeholder="Hãy đặt câu hỏi..."/>
                </li>
                <hr>
                <p>Các câu hỏi thường gặp về sản phẩm:</p>
                <p>- Chế độ bảo hành cùng cách thức vận chuyển sản phẩm này thế nào?</p>
                <p>- Kích thước sản phẩm này ?</p>
                <p>- Sản phẩm này có dễ dùng không ?</p>
                <p><span>Các câu hỏi liên quan đến sản phẩm hư hỏng, cần đổi trả, v.v ... vui lòng truy cập trang hỗ trợ</span></p>
            </ul>
            <a href="#">
            <button style="margin-left:70px;background-color:black;color: white;width: 200px;margin-top:40px;" name="bnThongtin"
          class="btn bnThongtin">Gửi câu hỏi
            </button></a>
      </div>
      <div class="col-md-8" style="background-color: white;">
          <div class="fb-comments"  data-numposts="10"></div>
      </div>
    </div>       
<?php endif; ?>
</div>
<?php if(isset($_GET['id_laptop'])):?>
 <div class="container1" style="width: 1200px;margin: auto;">
 <div class="head-detail" style="margin-top: 10px;">
 <a href="?c=home&m=index" style="color: black;text-decoration: none;">
 <p style="display: inline;font-size: 20px;">Trang chủ </p></a><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>
 <p style="display: inline;font-size: 20px;"><?php echo $data['info']['ten_loai'];?> </p><i  style="display: inline;font-size: 20px;font-size: 20px;" class="fa fa-angle-right"></i>    
 <p style="display: inline;font-size: 20px;"><?php echo $data['info']['laptop_name'];?></p>
 </div>
 <div class="produc-detail" style="width: 1200px;background-color: white;padding-bottom:50px; ">
    <div class="name-detail" style="margin-top: 10px;margin-left: 10px;">
      <h2><?php echo $data['info']['laptop_name'];?></h2>
      <hr>
    </div>
  <div class="img-detai" style="float: left;">
    <img style="width: 350px;height: auto;" src="public/images/<?php echo $data['info']['images'];?>">
  </div>
  <div class="detail">
    <h3 style="text-align: center;">Cấu hình sản phẩm</h3>
    <p style="font-size: 20px;">Hãng sản xuất : <?php echo $data['info']['name'];?></p>
    <p style="font-size: 20px;">Màn hìnk      : <?php echo $data['info']['man_hinh'];?></p>
    <p style="font-size: 20px;">Ram :         <?php echo $data['info']['ram'];?></p>
    <p style="font-size: 20px;">Hệ điều hành : <?php echo $data['info']['hdh'];?></p>
    <p >Số lượng đặt hàng</p>
    <form method="POST" style="display: inline-block;" action="?c=cart&m=add&id_laptop=<?php echo $data['info']['id'];?>">
    <select name="qty">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    <button type="submit" class="btn btn-danger" style="width: 220px;height: 80px;border-radius: 10px;"><p style="font-size: 25px;">Mua ngay</p><p style="margin-top: -15px;">(Giao hàng tận nơi)</p></button>
    </form>
    <form style="display: inline-block;" method="POST" action="?c=cart&m=plus&id=<?php echo $data['info']['id'];?>">
    <button type="submit" class="btn btn-primary" style="width: 220px;height: 80px;margin-left: 10px;border-radius: 10px;"><i class="fa fa-cart-plus" style="float: left;margin-top: 20px;font-size: 35px;margin-left: 10px;"></i><p style="font-size: 25px;">Thêm vào </p><p style="font-size: 20px;margin-top: -15px;">giỏ hàng</p></button>
    </form>
  </div>
 </div>
 <h2 style="margin-top: 20px;">laptop cùng hãng</h2>
 <div class="same-product " style="width: 1200px;
  background-color: white;
  padding-bottom:50px; 
  margin-top: 20px;">
<div class="row">
 <?php foreach($data['sameProduct'] as $key => $product): ?>
      <div class="col-md-3 " style="display: inline-block;min-height:380px;">
      <div class="pd1 " style="height:214px;width:100%;">
       <a href="?c=product&m=detail&id_laptop=<?php echo $product['id'];?>"><img src="public/images/<?php echo $product['images'];?>" style="width: 180px;height: 220px;"></a>
      </div>
      <hr style="color: #ddd;height: 2px;">
      <div class="PD2" ">
      <a href="?c=product&m=detail&id_laptop=<?php echo $product['id'];?>"><p><?php echo $product['laptop_name'];?></p>
      <h4><?php echo $product['gia'];?></h4>
    <form style="display: inline-block;" method="POST" action="?c=cart&m=add&id_laptop=<?php echo $product['id'];?>">
    <button type="submit" class="btn btn-danger" >Mua ngay</button>
    </form>
       <button class="btn btn-primary">Xem chi tiết</button>
      </div>
      </div>
  <?php endforeach; ?>
  </div>
 </div>
 <div class="chi_tiet_sp row" style="width:1200px;margin: auto;margin-top: 10px;">
   <button style="margin-bottom: 5px;width: 1200px;color: #222222;" name="bnThongtin"
          class="btn bnThongtin ">Click vào để xem thông tin chi tiết sản phẩm 
   </button>
   <div class="chitiet" style="background-color: white;width: 1200px;margin: auto;display: none;margin-bottom: 10px;">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="">Danh mục</th>
        <th class="">Thông tin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tên sản phẩm</td>
        <td><?php echo $product['laptop_name'];?></td>
      </tr>
        <td>Hãng sản xuất</td>
        <td><?php echo $data['info']['name'];?></td>
      <tr>
        <td>Ram</td>
        <td><?php echo $product['ram'];?></td>
      </tr>
      <tr>
        <td>Màn hình</td>
        <td><?php echo $product['man_hinh'];?></td>
      </tr>
      <tr>
        <td>Ổ đĩa</td>
        <td><?php echo $product['disk'];?></td>
      </tr>
      <tr>
        <td>Hệ điều hành</td>
        <td><?php echo $product['hdh'];?></td>
      </tr>
      <tr>
        <td>Chíp đồ họa</td>
        <td><?php echo $product['chip_do_hoa'];?></td>
      </tr>
      <tr>
        <td>Pin</td>
        <td><?php echo $product['pin'];?></td>
      </tr>
    </tbody>
  </table>
   </div>
<div class="row" style="width: 1200px;margin: auto;">
      <div class="left col-md-4" style="float: left;height: 385px;background-color: white;border-right: 1px solid black;">
        <div class="" style="margin-left: 10px;">
            <strong style="">Hỏi, Đáp Về Sản Phẩm</strong>
            </div>
            <ul>
                <li>
                    <input name="" type="text" style="background-color: rgb(243, 243, 243);margin-left: 10px;margin-top:10px;width: 240px;height: 30px;" placeholder="Hãy đặt câu hỏi..."/>
                </li>
                <hr>
                <p>Các câu hỏi thường gặp về sản phẩm:</p>
                <p>- Chế độ bảo hành cùng cách thức vận chuyển sản phẩm này thế nào?</p>
                <p>- Kích thước sản phẩm này ?</p>
                <p>- Sản phẩm này có dễ dùng không ?</p>
                <p><span>Các câu hỏi liên quan đến sản phẩm hư hỏng, cần đổi trả, v.v ... vui lòng truy cập trang hỗ trợ</span></p>
            </ul>
            <a href="#">
            <button style="margin-left:70px;background-color:black;color: white;width: 200px;margin-top:40px;" name="bnThongtin"
          class="btn bnThongtin">Gửi câu hỏi
            </button></a>
      </div>
      <div class="col-md-8" style="background-color: white;">
          <div class="fb-comments"  data-numposts="10"></div>
      </div>
    </div>      
 </div>
<?php endif; ?>
</div>
</body>
<script type="text/javascript">
$(".bnThongtin").click(function(){
    $(".chitiet").toggle('1500');
});
(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
    $(document).on('click', '#favr', function(){  
     var id = $("#getID").attr("huy");  
     $.ajax({  
      url:"?c=fav&m=add",  
      method:"GET",  
      data:{id:id},  
      success:function(data)  
      {  
       //$("#result").val(data);
       alert(data);  
      }  
     })  
    });
  </script>
</html>