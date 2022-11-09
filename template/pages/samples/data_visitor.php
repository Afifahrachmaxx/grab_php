<?php
    $koneksi = mysqli_connect("localhost", "root", "", "antriangrab");
?>

<?php
    if(isset($_GET['hal'])){
        if ($_GET['hal'] == "hapus") {
        //Jika tombol hapus di klik, akan menjalankan perintah query menghapus field
        $hapus = $koneksi->query("DELETE From karyawan where id_cs='$_GET[id_cs]'");
            
            header("Location:data_cs.php");
    }
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
    <title>Data Antrian GDC Thamrin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="../../vendors/ti-icons/css/themify-icons.css"
    />
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../vendors/select2/select2.min.css" />
    <link
      rel="stylesheet"
      href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/logo.png" />
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav
        class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
        aria-label=""
      >
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo mr-5" href="../../index.html"
            ><img src="../../images/logo.png" class="mr-2" alt="logo"
          /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"
            ><img src="../../images/logo.png" alt="logo"
          /></a>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="../../images/faces/face28.jpg" alt="profile" />
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="ti-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#ui-basic"
                aria-expanded="false"
                aria-controls="ui-basic"
              >
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Data Master</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="data_cs.php"
                      >Customer Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="data_visitor.php"
                      >Visitor</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#form-elements"
                aria-expanded="false"
                aria-controls="form-elements"
              >
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href=""
                      >Customer Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=""
                      >Visitor</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=""
                      >Survey Kepuasan</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth"
              >
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html">
                      Login
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">DATA ANTRIAN GDC THAMRIN</h4>
                            <div class="col my-3">
                                    <form action="data_visitor.php" method="post" class="d-flex flex-row justify-content-end">
                                        <div class="form-group">
                                                <!--bulan-->
                                                <div class="form-group">
                                                    <select name="bulan" id="bulan" class="form-control">
                                                        <?php
                                                        for($i=0;$i<12;$i++){
                                                            $bulan = date('F',strtotime('+'.$i.' month', 0));
                                                        echo "<option value='$i'>".$bulan."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                
                                        </div>
                                        <div class="form-group mx-3">
                                            <select name="tahun" id="tahun" class="form-control">
                                                <!-- tahun -->
                                                    <?php
                                                        for($i=0;$i<3;$i++){
                                                            $tahun = date('Y',strtotime('+'.$i.' YEAR'));
                                                        echo "<option value='$i'>".$tahun."</option>";
                                                        }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" name="carijurnal" type="submit">Cari</button>
                                        </div>
                                    </form>
                                </div>
                          <div class="table-responsive btn-success" >
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal, Bulan Dan Tahun</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    <?php
                                        $tampil=$koneksi->query("SELECT timestamp FROM `antriandriver` GROUP by day(timestamp)");
                                        $no=1;
                                        while($table = mysqli_fetch_array($tampil)):
                                        $hari = date('d',strtotime($table['timestamp']));
                                        $bulan = date('F',strtotime($table['timestamp']));
                                        $bulanAngka = date('m',strtotime($table['timestamp']));
                                        $tahun = date('Y',strtotime($table['timestamp']));
                                    ?>
                                </thead>
                                <tbody>
                                    <tr> 
                                        <td><?= $no++; ?></td>
                                        <td><?php echo "$hari "." "."$bulan"." "." $tahun"?></td>
                                        <td>
                                            <a href="antrian_detail.php?hal=antrian&hari=<?=$hari?>bulan=<?=$bulan?>&tahun=<?=$tahun?>" class="btn btn-success text-white">Lihat Data Visitor</a>
                                        </td>
                                    </tr>
                                    <?php
                                        endwhile;
                                    ?>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright © 2021. Premium
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >Bootstrap admin template</a
                >
                from BootstrapDash. All rights reserved.</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Hand-crafted & made with
                <i class="ti-heart text-danger ml-1"></i
              ></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
