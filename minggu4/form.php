<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>FORMULIR PPDB JALUR ZONASI TAHUN 2021</title>
	</head>
	<body>
		<div class="main-container">
			<div class="content-wrapper">
				<h3>FORMULIR PPDB JALUR ZONASI TAHUN 2021</h3>
				<form method="POST">
					<table>
						<tr>
							<th colspan="8">INFO PENDAFTARAN</th>
						</tr>
						<tr>
							<td>1.</td>
							<td colspan="2">NISN</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['nisn']; ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td colspan="2">Asal Sekolah</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['sekolah']; ?></td>
						</tr>
						<tr>
							<td>3.</td>
							<td colspan="2">Tahun Lulus</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['thn_lulus']; ?></td>
						</tr>
						<tr>
							<th colspan="8">DATA CALON PESERTA</th>
						</tr>
						<tr>
							<td>4.</td>
							<td colspan="2">Nama Lengkap</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['nama']; ?></td>
						</tr>
						<tr>
							<td>5.</td>
							<td colspan="2">NIK</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['nik']; ?></td>
						</tr>
						<tr>
							<td>6.</td>
							<td colspan="2">Tempat/Tanggal Lahir</td>
							<td>:</td>
							<td><?php echo $_POST['ttl']; ?></td>
							<td>Umur:</td>
							<td colspan="2" style="width: unset;"><?php echo $_POST['umur']; ?> Tahun</td>
						</tr>
						<tr>
							<td>7.</td>
							<td colspan="2">Jenis Kelamin</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['jk']; ?></td>
						</tr>
						<tr style="vertical-align: top;">
							<td>8.</td>
							<td colspan="2">Alamat</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['alamat']; ?></td>
						</tr>
						<tr>
							<td>9.</td>
							<td></td>
							<td>Desa/Kel.</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['desa']; ?></td>
						</tr>
						<tr>
							<td>10.</td>
							<td></td>
							<td>Kecamatan</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['kec']; ?></td>
						</tr>
						<tr>
							<td>11.</td>
							<td></td>
							<td>Kota</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['kota']; ?></td>
						</tr>
						<tr>
							<td>12.</td>
							<td></td>
							<td>Provinsi</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['prov']; ?></td>
						</tr>
						<tr>
							<td>13.</td>
							<td colspan="2">E-mail Aktif</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['email']; ?></td>
						</tr>
						<tr>
							<th colspan="8">DATA ORANG TUA <i><span class="unbold">(lampirkan KK)</span></i></th>
						</tr>
						<tr>
							<td>14.</td>
							<td colspan="2">Nomor Kartu Keluarga</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['no_kk']; ?></td>
						</tr>
						<tr>
							<td>15.</td>
							<td colspan="2">Nama Ayah Kandung</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['nama_ayah']; ?></td>
						</tr>
						<tr>
							<td>16.</td>
							<td colspan="2">Agama</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['agama_ayah']; ?></td>
						</tr>
						<tr>
							<td>17.</td>
							<td colspan="2">Pekerjaan</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['kerja_ayah']; ?></td>
						</tr>
						<tr>
							<td>18.</td>
							<td colspan="2">Nama Ibu Kandung</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['nama_ibu']; ?></td>
						</tr>
						<tr>
							<td>19.</td>
							<td colspan="2">Agama</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['agama_ibu']; ?></td>
						</tr>
						<tr>
							<td>20.</td>
							<td colspan="2">Pekerjaan</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['kerja_ibu']; ?></td>
						</tr>
						<tr style="vertical-align: top;">
							<td>21.</td>
							<td colspan="2">Alamat Orang Tua</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['alamat_ortu']; ?></td>
						</tr>
						<tr>
							<td>22.</td>
							<td></td>
							<td>Desa/Kel.</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['desa_ortu']; ?></td>
						</tr>
						<tr>
							<td>23.</td>
							<td></td>
							<td>Kecamatan</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['kec_ortu']; ?></td>
						</tr>
						<tr>
							<td>24.</td>
							<td></td>
							<td>Kota</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['kota_ortu']; ?></td>
						</tr>
						<tr>
							<td>25.</td>
							<td></td>
							<td>Provinsi</td>
							<td>:</td>
							<td colspan="4"><?php echo $_POST['prov_ortu']; ?></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>