<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Biodata</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<div class="card-container">
			<div class="left">
				<div class="left-container">
					<h2>Selamat datang di </h2>
					<h2> Website kami</h2>
					<p>Untuk mendaftar di sekolah kami, ayo isikan biodata kalian di form ini</p>
					<br>
					<p>untuk info lanjut akan bisa di akses setelah selesai mengisi biodata</p>
				</div>
			</div>
			<div class="right">
				<div class="right-container">
					<h2 class="lg-view">Form Biodata</h2>
					<h2 class="sm-view">Form Biodata</h2>
					<form action="tampil.php" method="POST">
						<table >
							<tr>
								<td>
									<label>Nama:</label>
									<input type="text"  class="input" name="nama">
									<label>Jenis Kelamin:</label>
									<select name="gender" id="">
										<option></option>
										<option value="laki">Laki-Laki</option>
										<option value="perempuan">perempuan</option>
									</select>
									<label>Agama:</label>
									<select name="agama" id="">
										<option></option>
										<option value="islam">Islam</option>
										<option value="kristen">Kristen</option>
										<option value="budha">Budha</option>
										<option value="hindu">Hindu</option>
										<option value="konghucu">Konghucu</option>
									</select>
									<br>
									<label>Alamat:</label>
									<br>
									<textarea class="textarea" name="alamat" cols="30" rows="10"></textarea>
									<br>
									<label>Tempat lahir:</label>
									<input type="text" class="input" name="TempatLahir">
									
									<label>Tanggal lahir:</label>
									<input type="date" class="input" name="TanggalLahir">
									<label>Hobi:</label>
									<input type="text" class="input" name="hobi">
									<label>Cita-cita:</label>
									<input type="text" class="input" name="CitaCita">
									<label>Usia:</label>
									<input type="text" class="input" name="usia">
									<label>Asal Sekolah:</label>
									<input type="text" class="input" name="AsalSekolah">
									<!-- <input type="submit" value="SUBMIT" class="btn"> -->
									<button>Kirim</button>
								</td>
							</tr>	
						</table>
					
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>