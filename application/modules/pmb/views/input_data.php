<!DOCTYPE >
<html>
	<head><title>PENDAFTARAN MAHASISWA BARU - POLITEKNIK KOTA MALANG</title></head>
	<link rel="stylesheet" href="<?php echo base_url() ?>stylesheets/css.css" type="text/css"  media="screen" />
	<link rel="stylesheet" href="<?php echo base_url() ?>stylesheets/jquery-ui-1.8.16.custom.css" type="text/css"  media="screen" />
	<script src="<?php echo base_url() ?>javascripts/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>javascripts/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>javascripts/style.js" type="text/javascript"></script>
	<body>
	<div id="content">
	<span id="subheader">
		<?php echo "<h2>".$subheader."</h2>"; ?>
	</span>
	<?php echo form_open(site_url()."/pmb/submit","action=POST") ?>
		<fieldset>
			<legend>I. Program Studi Pilihan</legend>
			<table class="table_input">
				<tr>
					<td class="left_td">Pilihan 1</td><td>:</td><td><?php echo form_dropdown("pilihan_1",$jurusan,set_value("pilihan_1"),"class='select'")?><?php echo form_error('pilihan_1'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Pilihan 2</td><td>:</td><td><?php echo form_dropdown("pilihan_2",$jurusan,set_value("pilihan_2"),"class='select'")?><?php echo form_error('pilihan_2'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Pilihan 3</td><td>:</td><td><?php echo form_dropdown("pilihan_3",$jurusan,set_value("pilihan_3"),"class='select'")?><?php echo form_error('pilihan_3'); ?></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>II. Data Pribadi</legend>
			<table  class="table_input">
				<tr>
					<td class="left_td">Nama Lengkap</td><td>:</td><td><?php echo form_input($input_nama_lengkap);?><?php echo form_error('nama_lengkap'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Jenis Kelamin</td><td>:</td><td><?php echo form_radio($input_jenis_kelamin,'L',set_radio('jenis_kelamin', 'L'));?>Laki-laki <?php echo form_radio($input_jenis_kelamin,'P',set_radio('jenis_kelamin', 'P'));?>Perempuan <?php echo form_error('jenis_kelamin'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Tempat Lahir</td><td>:</td><td><?php echo form_input($input_tempat_lahir);?><?php echo form_error('tempat_lahir'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Tanggal Lahir</td><td>:</td><td><?php echo form_dropdown("tanggal",$date,set_value("tanggal"),"class='select date'"); echo form_dropdown("bulan",$month,set_value("bulan"),"class='select date'"); echo form_dropdown("tahun",$year,set_value("tahun"),"class='select date'");?></td>
				</tr>
				<tr>
					<td class="left_td">Agama</td><td>:</td><td><?php echo form_dropdown("agama",$agama,set_value("agama"),"class='select'");?></td>
				</tr>
				<tr>
					<td class="left_td">Alamat Asal</td><td>:</td><td><?php echo form_textarea($input_alamat_asal);?><?php echo form_error('alamat_asal'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Alamat Sekarang</td><td>:</td><td><?php echo form_textarea($input_alamat_sekarang);?><?php echo form_error('alamat_sekarang'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Telp / HP</td><td>:</td><td><?php echo form_input($input_no_telp);?><?php echo form_error('no_telp'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Email</td><td>:</td><td><?php echo form_input($input_email);?><?php echo form_error('email'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Asal Sekolah</td><td>:</td><td><?php echo form_input($input_asal_sekolah);?><?php echo form_error('asal_sekolah'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Tahun Lulus</td><td>:</td><td><?php echo form_input($input_tahun_lulus);?><?php echo form_error('tahun_lulus'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Jurusan</td><td>:</td><td><?php echo form_dropdown("jurusan_sma",$jurusan_sma,set_value("jurusan_sma"),"class='select'");?></td>
				</tr>
				<tr>
					<td class="left_td">Nilai UN</td><td>:</td><td><?php echo form_input($input_nun)?><?php echo form_error('nilai_un'); ?></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>III. Data Keluarga</legend>
			<table class="table_input">
				<tr>
					<td class="left_td">Nama Ayah / Wali</td><td>:</td><td><?php echo form_input($input_nama_ayah);?><?php echo form_error('nama_ayah'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Pekerjaan</td><td>:</td><td><?php echo form_input($input_pekerjaan_ayah);?><?php echo form_error('pekerjaan_ayah'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Nama Ibu / Wali</td><td>:</td><td><?php echo form_input($input_nama_ibu);?><?php echo form_error('nama_ibu'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Pekerjaan</td><td>:</td><td><?php echo form_input($input_pekerjaan_ibu);?><?php echo form_error('pekerjaan_ibu'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Alamat Orang Tua</td><td>:</td><td><?php echo form_textarea($input_alamat_orang_tua);?><?php echo form_error('alamat_orang_tua'); ?></td>
				</tr>
				<tr>
					<td class="left_td">Telp / HP</td><td>:</td><td><?php echo form_input($input_no_telp_orang_tua);?><?php echo form_error('no_telp_orang_tua'); ?></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>IV. Biaya Pendidikan</legend>
			Sumber biaya pendidikan selama kuliah :<br>
			<?php echo form_checkbox($input_jenis_biaya,'1',set_checkbox('jenis_biaya', '1'));?>Orang Tua 
			<?php echo form_checkbox($input_jenis_biaya,'2',set_checkbox('jenis_biaya', '2'));?>Mandiri
			<?php echo form_checkbox($input_jenis_biaya,'3',set_checkbox('jenis_biaya', '3'));?>Beasiswa/Sponsor
			<?php echo form_checkbox($input_jenis_biaya,'4',set_checkbox('jenis_biaya', '4'));?>Lainnya <?php echo form_input($input_biaya_lainnya)?>
		</fieldset>
		<fieldset>
			<legend>V. Lain-lain</legend>
		Mendapatkan info POLTEKOM dari :<br>
			<?php echo form_checkbox($input_jenis_info,'1',set_checkbox('jenis_info', '1'));?>Brosur / Spanduk 
			<?php echo form_checkbox($input_jenis_info,'2',set_checkbox('jenis_info', '2'));?>Sekolah
			<?php echo form_checkbox($input_jenis_info,'3',set_checkbox('jenis_info', '3'));?>Koran
			<?php echo form_checkbox($input_jenis_info,'4',set_checkbox('jenis_info', '4'));?>Teman / Saudara
			<?php echo form_checkbox($input_jenis_info,'5',set_checkbox('jenis_info', '5'));?>Lainnya <?php echo form_input($input_info_lainnya)?>
		</fieldset>
		<div id="center">
			<?php 
				echo form_submit('submit','Kirim',"class=button");
				echo "   ";
				echo form_reset('reset','Reset',"class=button");
				echo form_close();
			?>
		</div>
	</div>
	</body>
</html>
