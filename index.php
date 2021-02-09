<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Data Produk</title>
</head>

<body>
	<div class="container justify-content-end">
		<a href="#" class="navbar-brand">
			<img src="img/logo.png" alt="arkademy" width="100px">
		</a>
	</div>


	<header id="home">
		<div class="jumbotron jumbotron-fluid bg-transparent">
			<div class="container">
				<h2 class="card-title">Data Produk</h2>
				<p><a href="tambah.php" class="btn btn-primary">Tambah Data</a></p>
				<div class="row text-center">
					<div class="col-lg-12 justify-content-end">
						<table class="table table-bordered">
							<thead class="bg-info">
								<tr class="text-white">
									<th scope="col">No</th>
									<th scope="col">Nama Produk</th>
									<th scope="col">Keterangan</th>
									<th scope="col">Harga</th>
									<th scope="col">Jumlah</th>
									<th scope="col">Aksi</th>
								</tr>

							</thead>
							<tbody>
								<?php
								include("koneksi.php");
								$query = mysql_query("SELECT * FROM produk ORDER BY id DESC") or die(mysql_error());
								if (mysql_num_rows($query) == 0) { ?>
									<tr>
										<td colspan="8">Tidak ada data</td>
									</tr>
									<?php } else {
									$no = 1;
									while ($data = mysql_fetch_assoc($query)) {
									?>
										<tr>
											<td class="bg-info text-white"><?php echo $no ?></td>
											<td><?php echo $data['nama_produk'] ?></td>
											<td><?php echo $data['keterangan'] ?></td>
											<td><?php echo $data['harga'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><a class="btn btn-info" href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Hapus</a></td>
										</tr>
								<?php
										$no++;
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>