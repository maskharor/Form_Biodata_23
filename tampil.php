<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampil Biodata</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleTampil.css">
</head>

<body>
	<div class="container">
		<div class="card-container">
			<div class="left">
				<div class="left-container">
                <h2>Selamat datang di </h2>
				<h2> Website kami</h2>
                <p>berikut hasil biodata yang sudah kamu isi, ayo jelajahi web ini dan catat ilmu ilmu yang bermanfaat</p>
					<br>
					<p>untuk beberapa menu sedang ada masalah, beberapa masalah sedang diperbaiki</p>
				</div>
			</div>
			<div class="right">
				<div class="right-container">
					<h2 class="lg-view">Hasil Biodata</h2>
					<h2 class="sm-view">Hasil Biodata</h2>
						<table style="width: 100%;">
							<tr class="label">
                                <td><b>Nama :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["nama"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Jenis Kelamin :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["gender"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Agama :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["agama"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Alamat :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["nama"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Tempat lahir :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["TempatLahir"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Tanggal lahir :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["TanggalLahir"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Hobi :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["hobi"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Cita-cita :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["CitaCita"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Usia :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["usia"]?>
                                </td>
                            </tr>

                            <tr class="label">
                                <td><b>Asal sekolah :</b></td>
                            </tr>

                            <tr class="data">                              
                                <td>
                                    <?php echo $_POST["AsalSekolah"]?>
                                </td>
                            </tr>
						</table>
					
				</div>
			</div>
		</div>
	</div>
</body>

</html>