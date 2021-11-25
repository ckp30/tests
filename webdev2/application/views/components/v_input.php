<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/css/form.css" type="text/css">
    <link rel="stylesheet" href="/css/popup.css" type="text/css">
</head>
        <?php echo form_open('crud/tambah_data_Bio')?>
            <a class="close" href="<?php echo base_url('crud')?>">&times;</a> 
            <div class="subtitle">REGISTRATION</div>
            <div class="input-container ic1">
                <input id="nama" class="input" name="nama" type="text" placeholder=" " />
                <div class="saparator"></div>
                <label for="nama" class="placeholder">Nama Pengguna</label>
            </div>
            <div class="radio-container ic2">
                <input id="option-1" class="input" name="jenis_kelamin" type="radio" value="laki-laki"/>
                <input id="option-2" class="input" name="jenis_kelamin" type="radio" value="perempuan"/>
                <label for="jenis_kelamin" class="placeholder">Gender</label>
                <div class="cut-short"></div>
                <label for="option-1" class="option option-1">
                    <div class="dot"></div>
                    <span>Pria</span>
                </label>
                <label for="option-2" class="option option-2">
                    <div class="dot"></div>
                    <span>Wanita</span>
                </label>
            </div>
            <div class="input-container ic2">
                <input id="tanggal_lahir" class="input" name="tanggal_lahir" type="date" placeholder=" " />
                <div class=" cut-short"></div>
                <label for="tanggal_lahir" class="placeholder">Tanggal Lahir</label>
            </div>
            <div class="input-container ic2">
                <input id="umur" class="input" name="umur" type="text" placeholder=" " />
                <div class="saparator cut-short"></div>
                <label for="umur" class="placeholder">Umur</label>
            </div>
            <button type="text" class="submit">submit</button>
</html>