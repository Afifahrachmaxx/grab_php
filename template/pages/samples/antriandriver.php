<?php
    $koneksi = mysqli_connect("localhost", "root", "", "antriangrab");
?>

<?php
    if(isset($_POST['cetakantrian'])) {
            $simpan = $koneksi->query("INSERT INTO antriandriver (nama_driver, keperluan_driver, nomor_antrian) values ('$_POST[nama_driver]','$_POST[keperluan_driver]','$_POST[nomor_antrian]')");
            
            header("Location:cetakantriandriver.php");
        }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Antrian GDC Thamrin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="../../vendors/ti-icons/css/themify-icons.css"
    />
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/logo.png" />
  </head>

  <body>
    <div class="container-scroller">
      <div
        class="container-fluid page-body-wrapper full-page-wrapper bg-success"
      >
        <div
          class="content-wrapper d-flex align-items-center auth px-0 bg-success"
        >
          <div class="row w-100 mx-0 bg-success">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img
                    src="../../images/grab.png"
                    style="display: block; margin: auto"
                    alt="logo"
                  />
                </div>
                <h4>Selamat Datang Di Grab Driver Center Thamrin</h4>
                <h6 class="font-weight-light">
                  Silahkan Mengisi Daftar Antrian.
                </h6>
                <form class="pt-3" action= "" method="post">
                  <div class="form-group">
                  <?php
                      $query = "SELECT max(nomor_antrian) as maxKode FROM antriandriver";
                      $hasil = mysqli_query($koneksi, $query);
                      $data = mysqli_fetch_array($hasil);
                      $nomor_antrian = $data['maxKode'];
                      $noUrut = (int) substr($nomor_antrian, 3, 3);
                      $noUrut++;
                      $char = "GRB";
                      $nomor_antrian = $char . sprintf("%03s", $noUrut);
                      ?>  
                  <input
                      type="text"
                      class="form-control form-control-lg"
                      id="nomor_antrian"
                      name="nomor_antrian"
                      readonly=""
                      value="<?php echo $nomor_antrian ?>" 
                    />
                  </div>  
                <div class="form-group">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="nama_driver"
                      name="nama_driver"
                      placeholder="Nama"
                      value="<?=@$nama_driver;?>"
                    />
                  </div>
                  <select
                    class="form-control"
                    name="keperluan_driver"
                    id="keperluan_driver"
                    value="<?=@$keperluan_driver;?>"
                  >
                  <option value="">-- Silahkan Pilih Keperluan --</option>
                    <?php
                        $sql= mysqli_query($koneksi, "SELECT * FROM keperluandriver");
                          while ($dt = mysqli_fetch_array($sql)) {
                            if ($dt['keperluan_driver']==$keperluan_driver) {
                            $keperluan_driver_status = "selected";
                            } else {
                            $keperluan_driver_status = "";
                            }
                            echo "<option value='".$dt['keperluan_driver']."' ".$keperluan_driver_status.">".$dt['keperluan_driver']."</option>";
                          }
                    ?>
                  </select>
                  
                  <!-- <a class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn" id="cetakantrian"
                      type="submit"
                      name="cetakantrian" href="cetakantriandriver.php">SIGN IN</a> -->
    
                  <div class="mt-3">
                    <button
                      class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn"
                      id="cetakantrian"
                      type="submit"
                      name="cetakantrian"
                      onClick="alert('Berhasil Cetak Nomor Antrian','success')"
                    >
                      CETAK ANTRIAN
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
<script>
    $(document).ready(function() {
        $('#keperluandriver').change(function() {
            var keperluan_driver = document.getElementById('keperluandriver').value;
            $.ajax({
                url: 'keperluandriver.php',
                type: "POST",
                dataType: "html",
                data: {
                    keperluandriver: keperluandriver,
                },
                success: function(data) {
                    document.getElementsByName('keperluan_driver')[0].value = data;
                },
                error: function() {
                    alert("Data Tidak Ada")
                }

            })
        })
    })

</script>
