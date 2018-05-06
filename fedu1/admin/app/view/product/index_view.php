<div class="right_col" style="margin-left: 250px;">
<dic class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
	    <div class="white-box">
		    <div class="row">
			   <h3 class="text-center">this is product</h3>
			   <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
			   	<a href="?c=product&m=add" class="btn btn-primary btn-block  "><i class="fa fa-plus" aria-hidden="true"></i>Add product</a>
			   </div>
			   <div class=" col-lg-8 col-md-8 col-xs-12 col-sm-12">
			   	<input type="text" name="txtSearch" class="form-control" id="txtSearch" value="<?php echo htmlentities($data['keyword']); ?>" placeholder="enter name book">
			   </div>
			   <div class=" col-lg-2 col-md-2 col-xs-12 col-sm-12">
			   	<button type="button" class="btn btn-primary btn-block" name="btnSearch" id="btnSearch">Search<i class="fa fa-search" aria-hidden="true"></i></button>
			   	</div>
			</div>
			<div class="row">
				<div class="table-responsive">
         <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Phone</th>
                    <th>Hãng SX</th>
                    <th>Giá</th>
                    <th>View</th>
<!--                     <th>Ram</th>
                    <th>Màn hình</th>
                    <th>Độ phân giải</th>
                    <th>Thẻ nhớ</th>
                    <th>Camera sau</th>
                    <th>Camera trước</th>
                    <th>pin</th> -->
                    <th class="text-center" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($data['product'])) :?>
               <?php foreach($data['product'] as $key => $product) :?>
               	  <tr>
               	  	<td>
               	  		<?php echo $key +1 ; ?>
               	  	</td>
               	  	<td>
               	  		<img width="120" height="120" src="<?php echo PATH_UPLOAD_IMG.$product['images']; ?> ">
               	  	</td>
               	  	<td><?php echo $product['phone_name']; ?></td>
               	  	<td><?php echo $product['name']; ?></td>
                    <td><?php echo number_format($product['gia']); ?></td>
               	  	<td><?php echo $product['view']; ?></td>
<!--                	  	<td><?php echo $product['ram']; ?></td>
               	  	<td><?php echo $product['man_hinh']; ?></td>
                    <td><?php echo $product['do_phan_giai']; ?></td>
                    <td><?php echo $product['the_nho']; ?></td>  
                    <td><?php echo $product['camera_sau']; ?></td>
                    <td><?php echo $product['camera_truoc']; ?></td>                    
                    <td><?php echo $product['pin']; ?></td> -->
               	  	<th class="text-center">action</th>
               	  	<td>
               	  	

               	  		<a class="btn btn-primary" href="?c=product&m=update&id=<?php echo $product['id']; ?>" title="edit">edit</a>
               	  	</td>
               	  	<td>
               	  		<a class="btn btn-primary" href="?c=product&m=delete&id=<?php echo $product['id']; ?>" title="delete">delete</a>
               	  	</td>
               	  </tr>
               <?php endforeach; ?>
           <?php endif; ?>
            </tbody>
        </table>
      </div>
      <hr/>
      <div class="row text-center">
      	<?php echo $data['panigation'];?>
      </div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function()
		{
			$('#btnSearch').click(function(){
				let keyword =$('#txtSearch').val().trim();
				window.location.href ="?c=product&s="+keyword;
			});
		});
	</script>
</dic>
</div>