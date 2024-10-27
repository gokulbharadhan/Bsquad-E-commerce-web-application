<?php

include '../config.php';

$admin = new Admin();

if (!isset($_SESSION['admin_id'])) {
    header("location:login_front.php");

}
$s_variable = $_SESSION['admin_id']; 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/dashboard_assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/dashboard_assets/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/dashboard_assets/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/dashboard_assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/dashboard_assets/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/dashboard_assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/dashboard_assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/dashboard_assets/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
<!-- 🟨 sidebar -->
<?php include 'sidebar.php' ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
<!-- 🟨 header -->
<?php include 'header.php' ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

<!-- 🟩 MAIN CONTENT AREA STARTS --------------------------------------- -->
<div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Profile</th>
                            <th>VatNo.</th>
                            <th>Created</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="color:white">Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>

<!-- 🟩 MAIN CONTENT AREA ENDS --------------------------------------- -->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
<!-- 🟨 footer -->
<?php include 'footer.php' ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/dashboard_assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/dashboard_assets/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/dashboard_assets/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/dashboard_assets/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/dashboard_assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/dashboard_assets/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/dashboard_assets/assets/js/off-canvas.js"></script>
    <script src="assets/dashboard_assets/assets/js/hoverable-collapse.js"></script>
    <script src="assets/dashboard_assets/assets/js/misc.js"></script>
    <script src="assets/dashboard_assets/assets/js/settings.js"></script>
    <script src="assets/dashboard_assets/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/dashboard_assets/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>