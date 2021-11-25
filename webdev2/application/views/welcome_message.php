<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<div id="container">
	<title>DATABASE</title>
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<link rel="stylesheet" href="/css/table.css" type="text/css">
	<link rel="stylesheet" href="/css/popup.css" type="text/css">
</head>
<body>
	<div class="heading">
		<div class="left-pages"><a class="home" href="http://0.0.0.0:8000">DATA DIRI</a></div>
		<div class="right-pages">
			<a href="<?php echo base_url('crud');?>"><i class="fa fa-home"></i></a>
			<a href="<?php echo base_url('crud');?>"><i class="fa fa-bar-chart"></i></a>
			<a href="<?php echo base_url('');?>uploaders#up"><i class="fa fa-upload"></i></a>
			<a href="<?php echo base_url('');?>cetak_pdf_file" target="_blank"><i class="fa fa-file"></i></a>
			<a href="<?php echo base_url('');?>export" target="_blank"><i class="fa fa-table"></i></a>

			<a class="dialog" href="<?php echo base_url('crud/logout_session');?>#out">
				<i class="fa fa-sign-out" aria-hidden="true"></i>
			</a>
		</div>
	</div >
	<div id="body">
		<center>
			<table>
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>JENIS KELAMIN</th>
					<th>TANGGAL LAHIR</th>
					<th>UMUR</th>
					<th></th>
				</tr>
				<?php $no = 1;?>
				<?php foreach ($this->Bio_model->tampil_data('bio')->result() as $row): ?>
					<tr>
						<td><?php echo $no++?></td>
						<td><?php echo $row->nama?></td>
						<td><?php echo $row->jenis_kelamin?></td>
						<td><?php echo $row->tanggal_lahir?></td>
						<td><?php echo $row->umur?></td>
						<td>
							<a class="move" href="<?php echo base_url('ubah?id=').$row->id;?>#ch"><i class="fa fa-edit"></i></a>
							<a class="remove" href="<?php echo base_url('crud/hapus?id=').$row->id;?>" onclick="return confirm('Are you sure you want to remove this?')"><i class="fa fa-trash"></i></a></td>
					</tr>
				<?php endforeach; ?>
			</table>
			<a id="add" href="<?php echo base_url('crud');?>/tambah#reg"><i class="fa fa-user-plus"></i></a>	
		</center>
		<div class="footer">
			<p class="left">Status connected: <strong><?php echo $this->session->userdata('nama'); ?></strong></p>
			<p class="right">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
	</div>
	<div id="<?php echo $get_ref; ?>" class="overlay">
		<div class="popup">
		<?php $popups == "" ? "" : $this->load->view($popups, $user);?>
		</div>
	</div>
</body>
</html>