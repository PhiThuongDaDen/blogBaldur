<div class="row">
    <div class="col-md-9">
        <div class="row">
            <?php
                foreach ($data as $value) {
            ?>    
            <div class="col-md-4 grid2">   
                <article class="hentry">
                    <div class="thumbnails">
                        <a class="link-blog-img" href="index.php?controller=detailBlog&id=<?php echo $value['token']?>" title="">
                            <img class="blog-img" src="<?php echo $value["avatar"] ?>" class="post-thumbnail img-responsive" style="width: 100%; height: 200px;">
                        </a>
                    </div>
                    <div class="post-content-area">
                        <header class="entry-header text-center">
                            <div class="post-cat">
                                <a href="#" rel="category tag">
                                    <?php
                                        $key = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
                                        if(isset($key["name"]))
                                           echo $key["name"];
                                    ?>
                                </a>
                            </div>
                            <a href="index.php?controller=detailBlog&id=<?php echo $value['token']?>" rel="bookmark" class="entry-title">
                               <?php echo $value["name"] ?>
                            </a>
                        </header>
                        <!--/.entry-header -->
                        <div class="entry-content">
                            <p><?php echo $value["description"] ?></p>
                        </div>
                        <!-- .entry-content -->
                        <div class="entry-meta text-center">
                            <span class="posted-on"><?php echo $value["dateTime"] ?></span>
                        </div>
                        <!-- .entry-meta -->
                    </div>
                </article>
                <!-- #post-## -->
            </div>
            <?php } ?>
        
            <div class="col-md-12">
                <ul id="nav" class="pagination">
                        <?php if($page == 1){ ?>
                            <li>
                                <span  style="cursor: default;" class="highlite">
                                    <i class="fa fa-chevron-left"></i>
                                </span>
                            </li>
                        <?php }else{?>
                            <li>
                                <a  href="index.php?p=<?php echo $page-1;?>">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </li>
                        <?php } ?>
                    <?php for($i=1; $i<=$page_show; $i++){ ?>
                        <?php if($i==$page){ ?>
                            <li>
                                <span  style="cursor: default; font-weight: 800;" class="highlite" href="index.php?p=<?php echo $i;?>">
                                    <?php echo $i;?>
                                </span>
                            </li>
                        <?php }else{?>
                            <li>
                                <a style="font-weight: 800;"  href="index.php?p=<?php echo $i;?>">
                                <?php echo $i;?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php }?>
                    
                    <?php if($page == $page_show){ ?>
                        <li>
                            <span style="cursor: default;" class="highlite">
                                <i class="fa fa-chevron-right"></i>
                            </span>
                        </li>
                    <?php }else{?>
                        <li>
                            <a  href="index.php?p=<?php echo $page+1;?>">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </li>
                    <?php } ?>

                </ul>               
            </div>
        
        </div>
    </div>
    <!--sidebar start-->
    <div class="col-md-3">
        <div class="primary-sidebar widget-area" role="complementary">
                                
            <?php include "app/controllers/newBlog.php"; ?>

        </div>
    </div>
    <!--sidebar end-->
</div>