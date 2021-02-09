<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Tambah Data Produk</title>
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
				<p><a href="index.php" class="btn btn-primary">Home</a></p>
				<div class="card-header bg-dark">
					<h1 class="card-title text-center text-white">Form Tambah Data</h1>
				</div>
				<div class="card p-3 bg-info text-white">
					<form action="tambah-proses.php" method="post">
						<div class="form-group">
							<label for="nama_produk">Nama Produk</label>
							<input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Enter Produk Name" required>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Enter Explanation" required>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" id="harga" name="harga" placeholder="Enter Price" required>
						</div>
						<div class="form-group">
							<label for="jumlah">Jumlah</label>
							<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Enter Total" required>
						</div>
						<input type="submit" class="btn btn-success" value="TAMBAH" name="tambah">
					</form>
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