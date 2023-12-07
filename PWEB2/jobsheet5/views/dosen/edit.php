<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {

            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nip, $nama, $alamat);

            if ($result) {
                header("location:dosen");
            } else {
                header("location:edit.php");
            }
        }

   } else {
        echo " Dosen tidak ditemukan";
   }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
<div class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;">
<h3 class="text-center">Edit Data Dosen</h3>


<?php
if ($dosenData) {
?>
    <form action="" method="post">
        <?php
        foreach ($dosenData as $d => $value) {
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
                <button type="kembali" name="kembali" class="btn btn-primary" value="kembali">Kembali</button>
                </td>
            </tr>
            </table>
    </form>
<?php
}
?>
</div>
