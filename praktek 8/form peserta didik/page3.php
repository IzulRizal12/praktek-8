
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.warning {color : #FF0000;}
		.hitam{
			background-color: black;
			color: white;
		}
		.tengah{
			width: 150%;
			margin-left: 180px;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="tengah">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<h1 style="text-align: center;">Formulir Peserta Didik</h1><br>
			Tanggal : <input type="text" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
		</div>
    <!-- Data Ayah Kandung -->
    <div class="hitam">Data Ayah Kandung</div>
		<div class="card-body">
			<form method="POST" action="save.php">
				<!-- Data Ayah Kandung -->
				<div class="hitam">Data Ayah Kandung</div>
				<!-- Nama Ayah Kandung -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
					<div class="col-sm-10">
						<input type="text" name="namaayah" class="form-control"  placeholder="Nama Ayah Kandung" required="">
					</div>
				</div>
				<!-- Tahun Lahir Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tahun Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="thnlahirayah" class="form-control" required="">
					</div>
				</div>
				<!-- Pendidikan Ayah-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan</label>
					<div class="col-sm-10">
						<select name="pendikayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Sekolah">Tidak Sekolah</option>
							<option value="Putus SD">Putus SD</option>
							<option value="SD Sederajat">SD Sederajat</option>
							<option value="SMP Sederajat">SMP Sederajat</option>
							<option value="SMA Sederajat">SMA Sederajat</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4/S1">D4/S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Pekerjaan Ayah-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-10">
						<select name="kerjaayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Bekerja">Tidak Bekerja</option>
							<option value="Nelayan">Nelayan</option>
							<option value="Petani">Petani</option>
							<option value="Peternak">Peternak</option>
							<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
							<option value="Karyawan Swasta">Karyawan Swasta</option>
							<option value="Pedagang Kecil">Pedagang Kecil</option>
							<option value="Pedagang Besar">Pedagang Besar</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Wirausaha">Wirausaha</option>
							<option value="Buruh">Buruh</option>
							<option value="Pensiunan">Pensiunan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Penghasilan Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penghasilan</label>
					<div class="col-sm-10">
						<select name="hasilayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Kurang dari 500,000">Kurang dari 500,000</option>
							<option value="500,000 - 999,999">500,000 - 999,999</option>
							<option value="1 jt - 1,999,999">1 jt - 1,999,999</option>
							<option value="4,2 jt - 4,9 jt">4,2 jt - 4,9 jt</option>
							<option value="5,5 jt - 20 jt">5,5 jt - 20 jt</option>
							<option value="6 Lebih dari 20 jt">6 Lebih dari 20 jt</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="bkayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Data Ibu Kandung -->
				<div class="hitam">Data Ibu Kandung</div>
				<!-- Nama Ibu Kandung -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
					<div class="col-sm-10">
						<input type="text" name="namaibu" class="form-control"  placeholder="Nama Ibu Kandung" required="">
					</div>
				</div>
				<!-- Tahun Lahir Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tahun Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="thnlahiribu" class="form-control" required="">
					</div>
				</div>
				<!-- Pendidikan Ibu-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan</label>
					<div class="col-sm-10">
						<select name="pendikibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Sekolah">Tidak Sekolah</option>
							<option value="Putus SD">Putus SD</option>
							<option value="SD Sederajat">SD Sederajat</option>
							<option value="SMP Sederajat">SMP Sederajat</option>
							<option value="SMA Sederajat">SMA Sederajat</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4/S1">D4/S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Pekerjaan Ibu-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-10">
						<select name="kerjaibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Bekerja">Tidak Bekerja</option>
							<option value="Nelayan">Nelayan</option>
							<option value="Petani">Petani</option>
							<option value="Peternak">Peternak</option>
							<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
							<option value="Karyawan Swasta">Karyawan Swasta</option>
							<option value="Pedagang Kecil">Pedagang Kecil</option>
							<option value="Pedagang Besar">Pedagang Besar</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Wirausaha">Wirausaha</option>
							<option value="Buruh">Buruh</option>
							<option value="Pensiunan">Pensiunan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Penghasilan Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penghasilan</label>
					<div class="col-sm-10">
						<select name="hasilibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Kurang dari 500,000">Kurang dari 500,000</option>
							<option value="500,000 - 999,999">500,000 - 999,999</option>
							<option value="1 jt - 1,999,999">1 jt - 1,999,999</option>
							<option value="4,2 jt - 4,9 jt">4,2 jt - 4,9 jt</option>
							<option value="5,5 jt - 20 jt">5,5 jt - 20 jt</option>
							<option value="6 Lebih dari 20 jt">6 Lebih dari 20 jt</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="bkibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary">Daftar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	</div>
	</div>
	
</body>
</html>