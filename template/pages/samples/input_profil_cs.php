<?php
    $koneksi = mysqli_connect("localhost", "root", "", "antriangrab");
?>
<?php
    if(isset($_POST['inputcs'])) {
        $nik_cs = $_POST['nik_cs'];
        $nama_cs = $_POST['nama_cs'];
        $tgllahir_cs = $_POST['tgllahir_cs'];
        $jeniskelamin_cs = $_POST['jeniskelamin_cs'];
        $alamat_cs = $_POST['alamat_cs'];
        $jabatan_cs = $_POST['jabatan_cs'];
        $tlp_cs = $_POST['tlp_cs'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $foto = $_POST['foto'];
        $counter = $_POST['counter'];

        $simpan = $koneksi->query("INSERT INTO karyawan(nik_cs, nama_cs, tgllahir_cs, jeniskelamin_cs, alamat_cs, jabatan_cs, counter, tlp_cs, email, username, password, foto) VALUES('$nik_cs','$nama_cs','$tgllahir_cs','$jeniskelamin_cs','$alamat_cs','$jabatan_cs', '$counter', '$tlp_cs','$email','$username','$password','$foto' )");

        if($simpan){
          ?>
          <script>
            alert('Berhasil Tambah Data Karyawan','success');
          </script>
          <?php
          header("Location:data_cs.html");
        }else{
          ?>
          <script>
            alert("<?= mysqli_error($koneksi);?>");
          </script>
          <?php
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
    <title>Input Data Customer Service</title>
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
                    <a class="nav-link" href="data_visitor.php"
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
                    <h4 class="card-title">Input Profil Customer Service</h4>
                    <form class="form-sample"  method="post">
                      <p class="card-description">Personal info</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="nama_cs"
                                name="nama_cs"
                                value="<?=@$nama_cs;?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="nik_cs"
                                name="nik_cs"
                                value="<?=@$nik_cs;?>"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >Jabatan</label
                            >
                            <div class="col-sm-9">
                              <select 
                                class="form-control"
                                name="jabatan_cs"
                                id="jabatan_cs"
                                value="<?=@$jabatan_cs;?>"
                              >
                                <option value ="">--Silahkan Pilih Jabatan--</option>
                                <option value = "Leader">Leader</option>
                                <option value = "Customer Service">Customer Service</option>
                                <?php
                                    $jenis = ['Leader','Customer Service'];
                                    for($i=0;$i<count($jenis);$i++) {
                                    if ($jabatan_cs == $jenis[$i]) {
                                    $select = "selected";
                                    }else{
                                    $select ="";
                                    }
                                    echo "<option ".$select." value='".$jabatan_cs."'>".$jabatan_cs."</option>";
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >Tanggal Lahir</label
                            >
                            <div class="col-sm-9">
                              <input 
                                class="form-control" 
                                type="date" 
                                name="tgllahir_cs" 
                                value="<?=isset($tgllahir_cs)?$tgllahir_cs:date('Y-m-d');?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >Jenis Kelamin</label
                            >
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input
                                    type="radio"
                                    class="form-check-input"
                                    name="jeniskelamin_cs"
                                    id="jeniskelamin_cs"
                                    checked
                                    value="Perempuan"
                                  />
                                  
                                  Perempuan
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input
                                    type="radio"
                                    class="form-check-input"
                                    name="jeniskelamin_cs"
                                    id="jeniskelamin_cs"
                                    value="Laki-Laki"
                                  />
                                  Laki-Laki
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >No.Tlp</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="tlp_cs"
                                name="tlp_cs"
                                value="<?=@$tlp_cs;?>"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >Username</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="username"
                                name="username"
                                value="<?=@$username;?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >Alamat</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="alamat_cs"
                                name="alamat_cs"
                                value="<?=@$alamat_cs;?>"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"
                              >Password</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="password"
                                name="password"
                                value="<?=@$password;?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                              <input
                                type="file"
                                name="foto"
                                class="form-control"
                                accept="image/png, image/gif, image/jpeg, image/jpg"
                                required=""
                                value=""
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control form-control-lg"
                                id="email"
                                name="email"
                                value="<?=@$email;?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Counter</label>
                            <div class="col-sm-9">
                              <select 
                                class="form-control"
                                name="jabatan_cs"
                                id="jabatan_cs"
                                value="<?=@$jabatan_cs;?>"
                              >
                                <option value ="">--Silahkan Pilih Counter--</option>
                                <option value = "1">1</option>
                                <option value = "2">2</option>
                                <option value = "3">3</option>
                                <option value = "4">4</option>
                                <option value = "5">5</option>
                                <?php
                                    $jenis_counter = ['1','2','3','4','5'];
                                    for($i=0;$i<count($jenis_counter);$i++) {
                                    if ($counter == $jenis_counter[$i]) {
                                    $select = "selected";
                                    }else{
                                    $select ="";
                                    }
                                    echo "<option ".$select." value='".$counter."'>".$counter."</option>";
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <input
                            class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn"
                            id="inputcs"
                            type="submit"
                            name="inputcs"
                            value="Submit"
                          />
                        </div>
                      </div>
                    </form>
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
