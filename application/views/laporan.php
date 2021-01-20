<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="../img/logopusat.gif" type="image/gif" >   
  <title>Laporan Rekam Medis JSC</title>

  <style>
  body {
	font-family: Tahoma;

  }
	table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	}
	table tr th {
		font-size: 11px;
		background-color: gray;
	}
	table tr td {
		font-size: 11px;
	}
	table.center tr td {
		text-align: center;
	}
	table.center tr th {
		text-align: center;
	}
	th, td {
	padding: 5px;
	text-align: left;    
	}
	.logo {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.logo table {
		width: 80%;
	}
	.logo img {
		width: 120px;
	}
	.img-body {
		display: flex;
		align-items: center;
	}
	.img-body .tabel {
		width: 50%;
	}
	.img-body .tabel table {
		width: 100%;
	}
	.img-body .wrapper-img {
		width: 50%;
	}
	.img-body  .wrapper-img img {
		height: 340px;
	}
	.tabel-tipe {
		display: flex;
	}
	</style>
  
  	<script type='text/javascript'>
			<!--
				var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
				var bulromawi = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VII', 'IX', 'X', 'XI', 'XII'];
				var date = new Date();
				var day = date.getDate();
				var month = date.getMonth();
				var yy = date.getYear();
				var year = (yy < 1000) ? yy + 1900 : yy;
				//document.write(day + " " + months[month] + " " + year);
				
			//-->
	</script>
	<script type="text/javascript">
			var s5_taf_parent = window.location;
			function popup_print(){
			window.open(‘preview.php’,’page’,’toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes’)
			}
	</script>
</head>

<body onLoad="window.print()">   
    
	<div class="logo">
		<table>
			<tr>
				<th colspan="4">MEDICAL RECORD</th>
			</tr>
			<tr>
				<th style="width: 60px;">Tanggal</th>
				<td><?php $tanggal = $list_laporan['tanggal']; echo getIndoHari($tanggal); ?></td>
				<th style="width: 60px;">No. RM</th>
				<td><?php echo $list_laporan['no_rm'] ?></td>
			</tr>
		</table>
		<img src="<?= base_url('asset/img/logo cetak.PNG')?>" alt="">
	</div>
	<div style="display: flex; margin-top: 10px;">
		<table style="width: 70%; margin-right: 15px;">
			<tr>
				<th style="width: 60px;">Pasien</th>
				<td><?php echo $list_laporan['nama_pasien'] ?></td>
				<th style="width: 60px;">Usia</th>
				<td><?php foreach($age as $a) { echo $a['age']; } ?> thn</td>
			</tr>
			<tr>
				<th style="width: 60px;">Terapis</th>
				<td><?php echo $list_laporan['nama'] ?></td>
				<th style="width: 60px;">Sesi Ke-</th>
				<td><?php echo $list_laporan['sesi_ke'] ?></td>
			</tr>
		</table>
		<table style="width: 30%;">
			<tr>
				<th style="width: 90px;">Mulai Sesi</th>
				<td><?php echo $list_laporan['mulai_sesi'] ?></td>
			</tr>
			<tr>
				<th style="width: 90px;">Selesai Sesi</th>
				<td><?php echo $list_laporan['selesai_sesi'] ?></td>
			</tr>
		</table>
	</div>
	<table style="width: 100%; margin-top: 10px;">
		<tr>
			<th style="width: 100px;">Lokasi Cedera</th>
			<td><?php echo $list_laporan['lokasi_cedera'] ?></td>
			<th style="width: 60px;">Sisi</th>
			<td><?php echo $list_laporan['nama_sisi'] ?></td>
			<th style="width: 120px;">Dirasakan sejak</th>
			<td><?php $tanggal = $list_laporan['dirasakan_sejak']; echo getIndoHari($tanggal); ?></td>
		</tr>
		<tr>
			<th style="width: 140px;">Diagnosis (dokter)</th>
			<td colspan="5"><?php echo $list_laporan['diagnosa'] ?></td>
		</tr>
		<tr>
			<td colspan="6" style="height: 60px;">
				<span style="font-weight: bold; font-size: 10px;">Catatan: </span><?php echo $list_laporan['catatan'] ?>
			</td>
		</tr>
	</table>
	<div class="img-body" style="margin-top: 10px;">
		<div class="tabel">
			<table class="center">
				<tr>
					<td rowspan="3" style="width: 30px;"></td>
				</tr>
				<tr>
					<th colspan="2">Sports Injury Massage</th>
				</tr>
				<tr>
					<th style="background-color: white;">Regio</th>
					<th style="background-color: white;">Teknik</th>
				</tr>
				<?php foreach ($injury->result() as $row){ ?>
					<tr>
						<td style="width: 30px;"><?php echo $row->sorter; ?></td>
						<td><?php echo $row->regio; ?></td>
						<td><?php echo $row->teknik; ?></td>
					</tr>
				<?php } ?>
			</table>
			<table class="center" style="margin-top: 10px;">
				<tr>
					<td rowspan="3" style="width: 30px;"></td>
				</tr>
				<tr>
					<th colspan="2">Stretching</th>
				</tr>
				<tr>
					<th style="background-color: white;">Regio</th>
					<th style="background-color: white;">Teknik</th>
				</tr>
				<?php foreach ($stretching->result() as $row){ ?>
					<tr>
						<td style="width: 30px;"><?php echo $row->sorter; ?></td>
						<td><?php echo $row->regio; ?></td>
						<td><?php echo $row->teknik; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<div class="wrapper-img">
			<img src="<?php echo base_url('./uploads/gambar_sisi/'.$list_laporan['gambar_sisi']); ?>" alt="">
		</div>
	</div>
	<div class="tabel-tipe" style="margin-top: 10px;">
		<div class="tabel-wrapper" style="width: 50%;">
			<table class="center" style="width: 100%;">
				<tr>
					<th colspan="3">Latihan Aerobik</th>
				</tr>
				<tr>
					<td colspan="3" style="height: 60px; text-align: left;">
						<span style="font-weight: bold; font-size: 10px;">HR Max Paisen (220-usia)= </span><?php echo $list_laporan['latihan'] ?>
					</td>
				</tr>
				<tr>
					<th>Tipe</th>
					<th>Intensitas</th>
					<th>Durasi</th>
				</tr>
				<?php foreach ($aerobik->result() as $row){ ?>
					<tr>
						<td style="text-align: left;"><?php echo $row->tipe_aerobik; ?></td>
						<td><?php echo $row->intensitas; ?></td>
						<?php if($row->durasi=='00:00:00'): ?>
						<td></td>
						<?php else: ?>
						<td><?php echo $row->durasi; ?></td>
						<?php endif; ?>
					</tr>
				<?php } ?>
			</table>
		</div>
		<div class="tabel-wrapper" style="width: 50%; padding-left: 15px;">
			<table class="center" style="width: 100%;">
				<tr>
					<th colspan="2" style="width: 100px;">Modalitas</th>
				</tr>
				<?php foreach ($modalitas->result() as $row){ ?>
					<tr>
						<td style="width: 120px; text-align: left;"><?php echo $row->tipe_modalitas; ?></td>
						<td><?php echo $row->keterangan; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<table class="center" style="width: 100%; margin-top: 10px;">
		<tr>
			<th colspan="6">Exercise Therapy</th>
		</tr>
		<tr>
			<th style="background-color: white;">No</th>
			<th style="background-color: white;">Jenis Latihan</th>
			<th style="background-color: white;">Alat</th>
			<th style="background-color: white;">Rep</th>
			<th style="background-color: white;">Set</th>
			<th style="background-color: white;">Catatan</th>
		</tr>
		<?php foreach ($exercise->result() as $row){ ?>
			<tr>
				<td><?php echo $row->sorter; ?></td>
				<td><?php echo $row->jenis_latihan; ?></td>
				<td><?php echo $row->alat; ?></td>
				<?php if($row->rep==0): ?>
				<td></td>
				<?php else: ?>
				<td><?php echo $row->rep; ?></td>
				<?php endif; ?>
				<?php if($row->set==0): ?>
				<td></td>
				<?php else: ?>
				<td><?php echo $row->set; ?></td>
				<?php endif; ?>
				<td><?php echo $row->exercise_catatan; ?></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>