
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Data E-inap</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="?page=EinapTambah"><button id="addToTable" class="btn btn-primary">Tambah Data <i class="fa fa-plus"></i></button></a>
										</div>
									</div>
								</div>
								<table class="display table table-bordered table-striped mb-none" id="einap1">
									<thead>
										<tr>
											<th width="1px"><p align="center">ID Puskesmas</p></th>
											<th width="65px"><p align="center">Nama RS</p></th>
											<th width="75px"><p align="center">Alamat</p></th>
											<th width="10px"><p align="center">Telp</p></th>
											<th width="14px"><p align="center">Aksi</p></th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$counter = 0;
									include '../db/koneksi.php';
									$data = mysqli_query($koneksi,"select * from einap");
									while($d = mysqli_fetch_array($data)){
										$counter++;
									?>

									
										<tr class="gradeX">
											<td><p align="center"><?php echo $d['DT_RowId']; ?></p></td>
											<td><?php echo $d['NamaRS']; ?></td>
											<td><?php echo $d['Alamat']; ?></td>
											<td><?php echo $d['Telp']; ?></td>
											<td class="actions">

									<a href="?page=EinapEdit&id=<?php echo $d['DT_RowId']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
									<a href="?page=EinapHapus&id=<?php echo $d['DT_RowId']; ?>" class="on-default remove-row" onclick="javascript: return confirm('Anda yakin akan menghapus data?')"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
									<?php 
									}
									?>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->

					



