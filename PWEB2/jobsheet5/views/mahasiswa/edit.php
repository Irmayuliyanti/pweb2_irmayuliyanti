<?php


include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:mahasiswa");
            } else {
                header("location:edit.php");
            }
        }

   } else {
        echo " Mahasiswa tidak ditemukan";
   }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
<div class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;">
<h3 class="text-center">Edit Data Mahasiswa</h3>

<?php
if ($mahasiswaData) {
?>
    <form action="" method="post">
        <?php
        foreach ($mahasiswaData as $d => $value) {
        ?>
            <table border="0">
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
        }
            ?>
            <tr>
                <td></td>
                <td>
                <button type="submit" name="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </td>
            </tr>
            </table>
    </form>
<?php
}
?>
</div>
