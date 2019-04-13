<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=FaskesView"> Data Fasilitas Kesehatan</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="?page=RSTambah"><button id="addToTable" class="btn btn-primary">Tambah Data <i class="fa fa-plus"></i></button></a>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th width="10px"><p align="center">ID Faskes</p></th>
											<th width="20px"><p align="center">Nama Rumah Sakit</p></th>
											<th width="50px"><p align="center">Jenis Faskes</p></th>
											<th width="10px"><p align="center">Status Ketersediaan</p></th>
											<th width="10px"><p align="center">Jumlah Tersedia</p></th>
											<th width="10px"><p align="center">Jumlah Terpakai</p></th>
											<th width="10px"><p align="center">Aksi</p></th>
										</tr>
									</thead>

									<?php 
									include '../db/koneksi.php';
									$data = mysqli_query($koneksi,"select * from tb_faskes INNER JOIN  tb_rs ON tb_rs.id_rs = tb_faskes.id_rs");
									while($d = mysqli_fetch_array($data)){
									?>

									<tbody>
										<tr class="gradeX">
											<td><?php echo $d['id_faskes']; ?></td>
											<td><?php echo $d['nama_rs']; ?></td>
											<td><?php echo $d['jenis_faskes']; ?></td>
											<td><?php echo $d['status_ketersediaan']; ?></td>
											<td><?php echo $d['jml_tersedia']; ?></td>
											<td><?php echo $d['terpakai']; ?></td>
											<td class="actions">

												
									<a href="?page=FaskesEdit&id=<?php echo $d['id_faskes']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
									<a href="?page=FaskesHapus&id=<?php echo $d['id_faskes']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
									
									</tbody>
									<?php 
									}
									?>
								</table>
							</div>
						</section>
					<!-- end: page -->