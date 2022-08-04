<div class="container-search">
	<div class="row">
		<div class="col-md-12">			
			
			
			<div class="search-blog" align="center">	
				<div class="row">
					<div class="col-lg-12">
						<h1 class="">
							Danh sách bài viết
						</h1>
					</div>
				</div>
				<?php
					$countTotal=0;
					foreach($data as $value){
						$countTotal++;
					}
				?>

				<div class="row">
					<div class="col-12">
						<p class="search-result" style="color: #999;">Kết quá tìm kiếm là <?php echo $countTotal ?> bài viết</p>
					</div>
				</div>
				
				<table class="table table-bordered">
					<tr>
						<td width="50px;">STT</td>
						<td>Tên bài viết</td>
						<td width="180px;">Chuyên mục</td>
						<td width="120px">Ngày đăng</td>
					</tr>
					<?php 
						$stt=0;
						foreach ($data as $value) {
							$stt++;
					?>
					<tr>
						<td style="text-align: center;"><?php echo $stt; ?></td>		
						<td>
							<a href="index.php?controller=detailBlog&id=<?php echo $value['token']?>" rel="bookmark" class="entry-title">
								<?php echo $value["name"] ?>
							</a>
						</td>
						<td>
							<?php
								$catalog = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
								if(isset($catalog["name"]))
									echo $catalog["name"];
							?>				
						</td>
						<td><?php echo $value["dateTime"] ?></td>
						
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>