<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
include '../classes/database.php';
$db = new database();
?>
<div>
<form class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;" action="proses_mhs.php?aksi=update" method="post" >
    <?php
    foreach ($db-> edit_mhs ($_GET['id']) as $d) {
    ?>
<h3 class="text-center">Edit Data Mahasiswa</h3>
<div class="mb-4">
    <label class="form-label">NIM</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id'] ?>">
    <input type="text" class="form-control" name="nim" value="<?php echo $d['nim'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button> 
    <?php
    }
    ?>
</from>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
