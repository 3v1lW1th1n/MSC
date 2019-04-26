

<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=BeritaView"> Data Konten</a></h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										
									</div>
								</div>

									<?php 
									include '../db/koneksi.php';
									$id = $_GET['id'];
									$data = mysqli_query($koneksi,"select * from berita where id_berita='$id'");
									while($d = mysqli_fetch_array($data)){
									?>

								<form method="post" action="?page=edit" class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Konten</label>
												<div class="col-md-3">
													<input type="text" name="a" class="form-control" id="inputDefault" value="<?php echo $d['id_berita']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Judul Konten</label>
												<div class="col-md-3">
													<input type="text" name="b" class="form-control" id="inputDefault" value="<?php echo $d['JudulBerita']; ?>"> 
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Isi Konten</label>
												<div class="col-md-6">
													<textarea style="height: 200px" name="c" class="form-control" id="inputDefault" ><?php echo $d['IsiBerita']; ?></textarea> 
												</div>

											</div>


											<div class="col-sm-9 text-right">
											<button type="submit" class="btn btn-primary hidden-xs">Simpan</button>
											</div>
								</form>
									
									<?php 
									}
									?>
								
							</div>
						</section>
					<!-- end: page -->