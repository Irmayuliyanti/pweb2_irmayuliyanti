<?php
//Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//Instansisasikan class database
$database =new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen= $dosenController->getAllDosen();
?>

<div class="px-5">
    <h3>Data Dosen</h3>
    <a class="btn btn-primary mb-2 mt-2"href="tambahdosen">Tambah Dosen</a>
    <br>
    <table class="table">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($dosen as $x) {
        ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x ['nip'] ?></td>
                    <td><?php echo $x ['nama'] ?></td>
                    <td><?php echo $x ['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning"href="editdosen?id=<?php echo $x['id']; ?>">Edit</a>
                        <a class="btn btn-danger"href="hapusdosen<?php echo $x['id']; ?>"onclick="return confirm('Apakah Anda yakin akan menghapus..?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>