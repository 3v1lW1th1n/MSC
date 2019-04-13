

<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=EinapView"> Data E-inap</a></h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										
									</div>
								</div>

									<?php 
									include '../db/koneksi.php';
									$id = $_GET['id'];
									$data = mysqli_query($koneksi,"select * from einap where DT_RowId='$id'");
									while($d = mysqli_fetch_array($data)){
									?>

								<form method="post" action="?page=edit" class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Puskesmas</label>
												<div class="col-md-3">
													<input type="text" name="a" class="form-control" id="inputDefault" value="<?php echo $d['DT_RowId']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Puskesmas</label>
												<div class="col-md-3">
													<input type="text" name="b" class="form-control" id="inputDefault" value="<?php echo $d['NamaRS']; ?>"> 
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Alamat Puskesmas</label>
												<div class="col-md-6">
													<input type="text" name="c" class="form-control" id="inputDefault" value="<?php echo $d['Alamat']; ?>">
												</div>

											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Telepon Puskesmas</label>
												<div class="col-md-3">
													<input type="text" name="d" class="form-control" id="inputDefault" value="<?php echo $d['Telp']; ?>">
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