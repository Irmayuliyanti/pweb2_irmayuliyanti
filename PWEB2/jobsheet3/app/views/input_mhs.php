<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
<form class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;" action="proses_mhs.php?aksi=tambah" method="post">
<h3 class="text-center">Tambah Data Mahasiswa</h3>
<div class="mb-4">
    <label class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>