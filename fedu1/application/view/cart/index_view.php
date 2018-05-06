<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/application_cart.css">
</head>
<body style="width: 100%;background-color: rgb(243, 243, 243);">
	<div class="container1" style="width: 1200px;margin: auto;">
	<form method="POST" action="?c=cart&m=update" id="form_gio_hang">
  <h2 style="text-align:center;">Chào mừng bạn</h2>
  <p style="text-align:center;">Chúng tôi xin cam đoan giao hàng tận nơi miễn phí</p>
  <p style="text-align:center;">và có thể hoàn trả lại sản phẩm nếu có sai sót</p>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Tên Sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php $index=1;$totalMoney=0; ?> 
      <?php foreach($data['cart'] as $key => $cart): ?>
      <tr>
          <td>
              <?php echo $key ; ?>
          </td>
          <td>
              <?php echo $cart['phone_name']; ?>
          </td>
          <td>
            <img style=" width: 200px;height: auto;" src="<?php echo IMG_PATH_UPLOAD.'/'.$cart['images']; ?>" alt="image sản phẩm">
          </td>
          <td>
            <?php echo number_format($cart['gia']); ?>  
          </td>
          <td >
            <select name="txtQty[<?php echo $cart['id']; ?>]" >
  			        <option <?php if($cart['qty']==1)
                {
                  echo "selected";
                } ?> >1</option>
  			        <option <?php if($cart['qty']==2)
                {
                  echo "selected";
                } ?> >2</option>
  			        <option <?php if($cart['qty']==3)
                {
                  echo "selected";
                } ?> >3</option>
  			        <option <?php if($cart['qty']==4)
                {
                  echo "selected";
                } ?> >4</option>
  			        <option <?php if($cart['qty']==5)
                {
                  echo "selected";
                } ?> >5</option>
  			    </select>  
          </td>
          <td >
            <?php echo ($cart['qty'] * $cart['gia']); ?>
          </td>
          <td >
            <a href="?c=cart&m=remove&id=<?php echo($cart['id']); ?>"> <i class="fa fa-trash"></i></a>
          </td>
      </tr>
      <?php $index++; $totalMoney += ($cart['qty'] * $cart['gia']); ?> 
    <?php endforeach; ?>
     <?php $index=1;$totalMoney1=0; ?> 
      <?php foreach($data['cart1'] as $key => $cart1): ?>
      <tr>
          <td>
              <?php echo $key ; ?>
          </td>
          <td>
              <?php echo $cart1['laptop_name']; ?>
          </td>
          <td>
            <img style="width: 200px;height: 240px;" src="public/images/<?php echo $cart1['images']; ?>" alt="image sản phẩm">
          </td>
          <td>
            <?php echo number_format($cart1['gia']); ?>  
          </td>
          <td >
            <select name="txtQty[<?php echo $cart['id']; ?>]" >
                <option <?php if($cart1['qty']==1)
                {
                  echo "selected";
                } ?> >1</option>
                <option <?php if($cart1['qty']==2)
                {
                  echo "selected";
                } ?> >2</option>
                <option <?php if($cart1['qty']==3)
                {
                  echo "selected";
                } ?> >3</option>
                <option <?php if($cart1['qty']==4)
                {
                  echo "selected";
                } ?> >4</option>
                <option <?php if($cart1['qty']==5)
                {
                  echo "selected";
                } ?> >5</option>
            </select>  
          </td>
          <td >
            <?php echo ($cart1['qty'] * $cart1['gia']); ?>
          </td>
          <td >
            <a href="?c=cart&m=remove1&id=<?php echo($cart1['id']); ?>"> <i class="fa fa-trash"></i></a>
          </td>
      </tr>
      <?php $index++; $totalMoney1 += ($cart1['qty'] * $cart1['gia']); ?> 
    <?php endforeach; ?>
    <tr>
        <td colspan="5">Tổng tiền: </td>
        <td > 
           <span><?php echo $totalMoney=$totalMoney+$totalMoney1;?></span>
        </td>   
        <td>
          <a href=""></a>
        </td> 
    </tr>
      <tr>
        <td colspan="7" style="text-align: right">          
          <button type="submit" style="" name="btnSubmit"
          class="btn btn-info">Cập nhật giỏ hàng</button>
          <a href="?c=cart&m=delete" class="btn btn-warning">Xóa tất cả</a>
        </td>
      </tr>
    </tbody>
  </table>
  </form>
  <form  action="?c=cart&m=order" method="POST" class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Họ tên:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="txtHoTen">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-8">          
        <input type="email" class="form-control" id="email" placeholder="Nhập email" name="txtEmail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">SĐT:</label>
      <div class="col-sm-8">          
        <input type="phone" class="form-control" id="phone" placeholder="Nhập sdt" name="txtSoDienThoai">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="addr">Địa chỉ:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="addr" placeholder="Nhập địa chỉ" name="txtDiaChi">
      </div>
    </div>
    <div>
        <button type="submit" style="margin-bottom: 20px;" name="bnSubmit"
          class="btn btn-danger col-sm-12">Tiến hành thanh toán</button>
    </div>
  </form>
</div>

</body>
</html>