<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=RSView"> Data Rumah Sakit</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="?page=RSTambah"><button id="addToTable" class="btn btn-primary">Tambah Data <i class="fa fa-plus"></i></button></a>
										</div>
									</div>
								</div>
								<table class="display table table-bordered table-striped mb-none" id="dataRS1">
									<thead>
										<tr>
											<th width="10px"><p align="center">ID Rumah Sakit</p></th>
											<th width="20px"><p align="center">Nama Rumah Sakit</p></th>
											<th width="50px"><p align="center">Alamat</p></th>
											<th width="10px"><p align="center">Telepon</p></th>
											<th width="10px"><p align="center">Aksi</p></th>
										</tr>
									</thead>
								<tbody>
									<?php 
									include '../db/koneksi.php';
									$data = mysqli_query($koneksi,"select * from tb_rs");
									while($d = mysqli_fetch_array($data)){
									?>

									
										<tr class="gradeX">
											<td><?php echo $d['id_rs']; ?></td>
											<td><?php echo $d['nama_rs']; ?></td>
											<td><?php echo $d['alamat_rs']; ?></td>
											<td><?php echo $d['telp_rs']; ?></td>
											<td class="actions">

												
									<a href="?page=RSEdit&id=<?php echo $d['id_rs']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
									<a href="?page=RSHapus&id=<?php echo $d['id_rs']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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