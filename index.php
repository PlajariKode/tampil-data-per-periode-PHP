<?php 

// koneksi
$conn = new mysqli('localhost', 'root', '', 'test');

if (isset($_POST['submit'])) {
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];

	// perintah tampil data berdasarkan range tanggal
	$q = mysqli_query($conn, "SELECT * FROM produk WHERE tgl_transaksi BETWEEN '$date1' and '$date2'");	
} else {
	// perintah tampil semua data
	$q = mysqli_query($conn, "SELECT * FROM produk");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial PHP</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	
	<div class="container mt-5 mx-auto">
		<center>
			<h1>Menampilkan data berdasarkan periode tanggal dengan PHP</h1>
		</center>

		<div class="card mt-5">
			<div class="card-body mx-auto">
				<form method="POST" action="" class="form-inline mt-3">
					<label for="date1">Tanggal mulai&nbsp;</label>
					<input type="date" name="date1" id="date1" class="form-control mr-2" required>
					<label for="date2">sampai&nbsp;</label>
					<input type="date" name="date2" id="date2" class="form-control mr-2" required>
					<button type="submit" name="submit" class="btn btn-primary">Cari</button>
				</form>

				<table class="table table-bordered mt-5">
					<tr>
						<th>#</th>
						<th>Nama Barang</th>
						<th>Harga Satuan</th>
						<th>Qty</th>
						<th>Tgl. Transaksi</th>
					</tr>

					<?php
					
					$no = 1;

					while ($r = $q->fetch_assoc()) {
					?>

					<tr>
						<td><?= $no++ ?></td>
						<td><?= ucwords($r['nama_produk']) ?></td>
						<td><?= $r['harga'] ?></td>
						<td><?= $r['qty'] ?></td>
						<td><?= $r['tgl_transaksi'] ?></td>
					</tr>

					<?php			
					}
					?>

				</table>
			</div>
		</div>
	</div>

</body>
</html>