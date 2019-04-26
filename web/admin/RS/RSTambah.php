<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=RSView"> Data Rumah Sakit</a></h2>
							</header>
							<div class="panel-body">
								
								<form method="post" action="?page=rs_tambah" class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="a" class="form-control" id="inputDefault">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="b" class="form-control" id="inputDefault">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Alamat Rumah Sakit</label>
												<div class="col-md-6">
													<textarea class="form-control" name="c" rows="3" id="textareaDefault"></textarea>
												</div>

											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Telepon Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="d" class="form-control" id="inputDefault">
												</div>
											</div>
							
										

											<div class="col-sm-9 text-right">
											<button type="submit" name="tambah" class="btn btn-primary hidden-xs">Simpan</button>
											</div>
								</form>
							</div>
						</section>
					<!-- end: page -->