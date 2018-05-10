<div class="col-md-4 well-sm sideB">
            <div class="titlesideB"><span class="glyphicon glyphicon-th"> </span>
                <h3 class="text-center pdh3">Truyện mới cập nhập</h>
                </div>
                <div class="">
                    <div class="sideB-ctRight">
                       <ul class="ulListstory_right">
                        <?php foreach ($sidebar['getUpdate'] as $key => $value): ?>
                        <li>
                            <div class="divthumb"><a href="?c=details&id=<?php echo $value['id'] ?>" title="<?php echo $value['name_comic'] ?>"><img alt="<?php echo $value['images'] ?>" src="<?php echo IMG_PATH_UPLOAD.$value['images'] ?>" /></a></div>
                            <div class="newsContent"><a class="tile" href="?c=details&id=<?php echo $value['id'] ?>" title="<?php echo $value['name_comic'] ?>"><?php echo $value['name_comic'] ?></a> 
                                <?php $cut = explode(", ",$value['category']); ?>
                                <span>Thể loại: 
                                    <?php foreach ($cut as $key => $cut1): ?>
                                        <a href="?c=action&m=category&cat=<?php echo $cut1 ?>" title="<?php echo $cut1 ?>"><?php echo $cut1 ?></a>, 
                                     <?php endforeach ?>
                                </span>
                                 <span>Tác giả: <a href="?c=action&m=authors&author=<?php echo $value['name_author'] ?>" rel="nofollow" title="Thiên Tằm Thổ Đậu"><?php echo $value['name_author'] ?></a></span></div>
                        </li>
                        <?php endforeach ?>                       
                    </ul>
                </div>
            </div>
        </div>