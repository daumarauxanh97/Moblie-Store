<div class="right_col" style="margin-left: 250px;">
<dic class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
	   <h3 class="text-center">this is add product</h3>
          <hr/>
            <form class="form-horizontal form-material" action="?c=product&m=handleadd" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-12">Name phone</label>
                    <div class="col-md-12">
                        <input name="phonename" id="phonename" type="text" placeholder="phone name" class="form-control form-control-line"> 
                    </div>
                     <?php if(!empty($data['errAdd']['phone_name'])&&isset($data['errAdd']['phone_name'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['phone_name'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="slcAuthor" class="col-md-12">Hang sản xuất</label>
                    <div class="col-md-12">
                        <select name="hang_sx" id="hang_sx" class="form-control form-control-line">
                            <option value="">Chọn hãng sx</option>
                        	<?php foreach($data['hang_sx'] as $key => $hang_sx): ?>
                                <option value="<?php echo $hang_sx['id']?>"><?php echo $hang_sx['name'];?></option>
                            <?php endforeach; ?>
                        </select> 
                     <?php if(!empty($data['errAdd']['sx'])&&isset($data['errAdd']['sx'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['sx'];?></p>
                     <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Chọn loại sp</label>
                    <div class="col-md-12">
                        <select name="loai_sp" id="slcPublicsher" class="form-control form-control-line">
                        <option value="">Chọn loại sản phẩm</option>
                            <?php foreach($data['loai_sp'] as $key => $loai_sp): ?>
                                <option value="<?php echo $loai_sp['id']?>"><?php echo $loai_sp['ten_loai'];?></option>
                            <?php endforeach; ?>
                      <?php if(!empty($data['errAdd']['loaisp'])&&isset($data['errAdd']['loaisp'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['loaisp'];?></p>
                     <?php endif; ?>
                        </select> 
                    </div> 
                </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Miêu tả</label>
                    <div class="col-md-12">
                        <textarea rows="5" class="form-control form-control-line" name="mieu_ta" id="mieu_ta"></textarea>
                    </div>
                                          <?php if(!empty($data['errAdd']['mieu_ta'])&&isset($data['errAdd']['mieu_ta'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['mieu_ta'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Giá</label>
                    <div class="col-sm-12">
                      <input name="gia" id="gia" type="text" placeholder="Giá bán" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['gia'])&&isset($data['errAdd']['gia'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['gia'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="col-sm-12">Màn hinh</label>
                        <input name="man_hinh" id="man_hinh" type="text" placeholder="man
                         hinh 
                        " class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['man_hinh'])&&isset($data['errAdd']['man_hinh'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['man_hinh'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                	 <label class="col-sm-12">Độ phân giải</label>
                	 <div class="col-sm-12">
                      <input name="do_phan_giai" id="do_phan_giai" type="text" placeholder="do_phan_giai" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['do_phan_giai'])&&isset($data['errAdd']['do_phan_giai'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['do_phan_giai'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Ram</label>
                     <div class="col-sm-12">
                      <input name="ram" id="ram" type="text" placeholder="ram" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['ram'])&&isset($data['errAdd']['ram'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['ram'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Camera sau</label>
                     <div class="col-sm-12">
                      <input name="camera_sau" id="camera_sau" type="text" placeholder="camera_sau" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['camera_sau'])&&isset($data['errAdd']['camera_sau'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['camera_sau'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Camera trước</label>
                     <div class="col-sm-12">
                      <input name="camera_truoc" id="camera_truoc" type="text" placeholder="camera_truoc" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['camera_truoc'])&&isset($data['errAdd']['camera_truoc'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['camera_truoc'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Bộ nhớ trong</label>
                     <div class="col-sm-12">
                      <input name="bo_nho_trong" id="bo_nho_trong" type="text" placeholder="bo_nho_trong" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['bo_nho_trong'])&&isset($data['errAdd']['bo_nho_trong'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['bo_nho_trong'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Thẻ nhớ</label>
                     <div class="col-sm-12">
                      <input name="the_nho" id="the_nho" type="text" placeholder="the_nho" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['the_nho'])&&isset($data['errAdd']['the_nho'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['the_nho'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Pin</label>
                     <div class="col-sm-12">
                      <input name="pin" id="pin" type="text" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                                          <?php if(!empty($data['errAdd']['pin'])&&isset($data['errAdd']['pin'])) :?>
                         <p style="color: red;"><?php echo $data['errAdd']['pin'];?></p>
                     <?php endif; ?>
                </div>
                <div class="form-group">
                	<label class="col-sm-12">Image</label>
                	<input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                	<label class="col-sm-12">save</label>
                	<button type="submit" name="btnSubmit" class="btn btn-success"></button>
                </div>
            </form>
	</div>
</dic>
</div>