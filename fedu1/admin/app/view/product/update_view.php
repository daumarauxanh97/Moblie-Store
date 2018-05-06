<div class="right_col" style="margin-left: 250px;">
<dic class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
	   <h3 class="text-center">this is update product</h3>
          <hr/>
          <?php if(!empty($data['errAdd'])&&isset($data['errAdd'])) :?>
          <ul>
              <?php foreach($data['errAdd'] as $k =>$err) :?>
                <?php if(!empty($err)): ?>
                <li style="color: red">
                    <?php echo $err; ?>
                </li>
                <?php endif; ?>
             <?php endforeach; ?>
       </ul>
       <?php endif; ?>
            <form class="form-horizontal form-material" action="?c=product&m=handleadd" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-12">Name phone</label>
                    <div class="col-md-12">
                        <input name="phonename" id="phonename" type="text" placeholder="phone name" class="form-control form-control-line" value="<?php echo $data['phone']['phone_name'];?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="slcAuthor" class="col-md-12">Hang sản xuất</label>
                    <div class="col-md-12">
                        <select name="hang_sx" id="hang_sx" class="form-control form-control-line">
                            <option value=""><?php echo $data['phone']['name'];?></option>
                        	<?php foreach($data['hang_sx'] as $key => $hang_sx): ?>
                                <option value="<?php echo $hang_sx['id']?>"><?php echo $hang_sx['name'];?></option>
                            <?php endforeach; ?>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Chọn loại sp</label>
                    <div class="col-md-12">
                        <select name="loai_sp" id="slcPublicsher" class="form-control form-control-line">
                        <option value=""><?php echo $data['phone']['ten_loai'];?></option>
                            <?php foreach($data['loai_sp'] as $key => $loai_sp): ?>
                                <option value="<?php echo $loai_sp['id']?>"><?php echo $loai_sp['ten_loai'];?></option>
                            <?php endforeach; ?>
                        </select> 
                    </div> 
                </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Miêu tả</label>
                    <div class="col-md-12">
                        <textarea rows="5" class="form-control form-control-line"  name="mieu_ta" id="mieu_ta"><?php echo $data['phone']['mieu_ta'];?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Giá</label>
                    <div class="col-sm-12">
                      <input name="gia" id="gia" type="text" value="<?php echo $data['phone']['gia'];?>"  placeholder="Giá bán" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="col-sm-12">Màn hinh</label>
                        <input name="man_hinh" id="man_hinh" type="text" value="<?php echo $data['phone']['man_hinh'];?>" placeholder="Quantity book" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                	 <label class="col-sm-12">Độ phân giải</label>
                	 <div class="col-sm-12">
                      <input name="do_phan_giai" id="do_phan_giai" value="<?php echo $data['phone']['do_phan_giai'];?>" type="text" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Ram</label>
                     <div class="col-sm-12">
                      <input name="ram" id="ram" value="<?php echo $data['phone']['ram'];?>" type="text" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Camera sau</label>
                     <div class="col-sm-12">
                      <input name="camera_sau" value="<?php echo $data['phone']['camera_sau'];?>" id="camera_sau" type="text" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Camera trước</label>
                     <div class="col-sm-12">
                      <input name="camera_truoc" id="camera_truoc" value="<?php echo $data['phone']['camera_truoc'];?>" type="text" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Bộ nhớ trong</label>
                     <div class="col-sm-12">
                      <input name="bo_nho_trong" id="bo_nho_trong" value="<?php echo $data['phone']['bo_nho_trong'];?>" type="text" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Thẻ nhớ</label>
                     <div class="col-sm-12">
                      <input name="the_nho" id="the_nho" type="text" value="<?php echo $data['phone']['the_nho'];?>" placeholder="pagebook" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                     <label class="col-sm-12">Pin</label>
                     <div class="col-sm-12">
                      <input name="pin" id="pin" type="text" placeholder="pagebook" class="form-control <?php echo $data['phone']['pin'];?> form-control-line">
                    </div>
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