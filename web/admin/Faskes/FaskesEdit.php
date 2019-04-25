<!-- start: page -->
									<?php 
									include '../db/koneksi.php';
									$id = $_GET['id'];
									$data = mysqli_query($koneksi,"select * from tb_faskes where id_faskes='$id'");
									while($d = mysqli_fetch_array($data)){
									?> 
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=FaskesView"> Data Faskes</a></h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										
									</div>
								</div>



								<form method="post" action="?page=faskes_edit" class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Faskes</label>
												<div class="col-md-3">
													<input type="text" name="a" class="form-control" id="inputDefault" value="<?php echo $d['id_faskes']; ?>">
												</div>
											</div>

												<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="b" class="form-control" id="inputDefault" value="<?php echo $d['id_rs']; ?>">
												</div>
											</div>


										

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jenis Faskes</label>
												<div class="col-md-6">
													<input type="text" name="c" class="form-control" id="inputDefault" value="<?php echo $d['jenis_faskes']; ?>"> 
												</div>

											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Status Ketersediaan</label>
												<div class="col-md-3">
													<input type="text" name="d" class="form-control" id="inputDefault" value="<?php echo $d['status_ketersediaan']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah Tersedia</label>
												<div class="col-md-3">
													<input type="text" name="e" class="form-control" id="inputDefault" value="<?php echo $d['jml_tersedia']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah Terpakai</label>
												<div class="col-md-3">
													<input type="text" name="f" class="form-control" id="inputDefault" value="<?php echo $d['terpakai']; ?>">
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