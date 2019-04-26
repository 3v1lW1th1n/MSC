
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Data Konten</h2>
							</header>
							<div class="panel-body">
								
								<table class="display table table-bordered table-striped mb-none" id="einap1">
									<thead>
										<tr>
											<th width="1px"><p align="center">ID Konten</p></th>
											<th width="65px"><p align="center">Judul Konten</p></th>
											<th width="65px"><p align="center">Isi Konten</p></th>
											<th width="14px"><p align="center">Aksi</p></th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$counter = 0;
									include '../db/koneksi.php';
									$data = mysqli_query($koneksi,"select * from berita");
									while($d = mysqli_fetch_array($data)){
										$counter++;
									?>

									
										<tr class="gradeX">
											<td><p align="center"><?php echo $counter; ?></p></td>
											<td><?php echo $d['JudulBerita']; ?></td>
											<td><?php echo $d['IsiBerita']; ?></td>
											<td class="actions">

									<center><a href="?page=BeritaEdit&id=<?php echo $d['id_berita']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a></center>
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

					



