<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
<div class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;">
<h3 class="text-center">Tambah Data Mahasiswa</h3>
<form action="proses_tambahmahasiswa" method="post">

  <div class="mb-4">
    <label class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir">
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir">
  </div>
  <div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
        <option value=""></option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Agama</label>
    <select name="agama" class="form-control">
        <option value=""></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Khatolik">Khatolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghuchu">Konghuchu</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary" value="simpan">Simpan</button>
  
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>