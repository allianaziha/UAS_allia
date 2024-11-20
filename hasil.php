<?php
if (isset($_POST['proses'])) {
    
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    if ($status_kerja = "tetap") {
        $bonus = 1000000;
    } else {
        $bonus = 0;
    }

    if ($jabatan == "Kepala_sekolah") {
        $gaji_pokok = 10000000;
    } elseif ($jabatan == "Wakasek") {
        $gaji_pokok = 7000000;
    } elseif ($jabatan == "Guru") {
        $gaji_pokok = 5000000;
    } elseif ($jabatan == "Karyawan") {
        $gaji_pokok = 2500000;
    }
 
    $gaji_bersih = ($gaji_pokok + $bonus) - ($bpjs - $pinjaman - $cicilan - $infaq); 

    class penggajihan{

        public $gaji;

        public function gaji($no2,$nama2,$unit2,$tanggal_gaji2,$jabatan2,$lama_kerja2,$status_kerja2,$bpjs2,
        $pinjaman2,$cicilan2,$infaq2){
      
          echo "no : ".$no2."<br>";
          echo "Nama : ".$nama2. "<br>";
          echo "unit : ".$unit2. "<br>";
          echo "Tanggal gaji : ".$tanggal_gaji2. "<br>";
          echo "Jabatan : ".$jabatan2. "<br>";
          echo "Lama Kerja : ".$lama_kerja2. "<br>";
          echo "Status kerja : ".$status_kerja2. "<br>";
          echo "BPJS : ".$bpjs2."<br>";
          echo "pinjaman : ".$pinjaman2. "<br>";
          echo "cicilan : ".$cicilan2. "<br>";
          echo "infaq : ".$infaq2. "<br>";
      
      
        }
    }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 30rem;">
                        <div class="card-header">
                            <?php echo $nama; ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title text-primary">struk Gaji</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <table class="text-primary">
                                        <tr>
                                            <td>No</td>
                                            <td>: <?php echo $no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>: <?php echo $nama; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Unit Pendidikan</td>
                                            <td>: <?php echo $unit; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Gaji</td>
                                            <td>: <?php echo $tanggal_gaji; ?></td>
                                        </tr>
                                    <tr>
                                            <td>Jabatan</td>
                                            <td>: <?php echo $jabatan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji</td>
                                            <td>: <?php echo $gaji_pokok; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Lama Kerja</td>
                                            <td>: <?php echo $lama_kerja; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status kerja</td>
                                            <td>: <?php echo $status_kerja; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bonus</td>
                                            <td>: <?php echo $bonus; ?></td>
                                        </tr>
                                    <tr>
                                            <td>BPJS</td>
                                            <td>: <?php echo $bpjs; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pinjaman</td>
                                            <td>: <?php echo $pinjaman; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Cicilan</td>
                                            <td>: <?php echo $cicilan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Infaq</td>
                                            <td>: <?php echo $infaq; ?></td>
                                        </tr>
                                            <td>Gaji bersih</td>
                                            <td>: <?php echo $gaji_bersih; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php }?>