<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include "../layout/sidebar.php"; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include "../layout/navbar.php"; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Tambah Menu -->
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div id="input-form">
                                <div>
                                    <h4>MENU</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="menu[][title]" id="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">URL</label>
                                        <div class="input-group">
                                            <input type="text" name="menu[][url]" id="url" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Icon</label>
                                        <div class="input-group">
                                            <select name="menu[][icon]" id="icon" class="form-select">
                                                <option value="fa-home">Home</option>
                                                <option value="fa-info-circle">Info</option>
                                                <option value="fa-envelope">Envelope</option>
                                                <option value="fa-folder">Folder</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mt-3">
                                    <h4>SUB-MENU</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="submenu[][0][title]" id="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">URL</label>
                                        <div class="input-group">
                                            <input type="text" name="submenu[][0][url]" id="url" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Icon</label>
                                        <div class="input-group">
                                            <select name="submenu[][0][icon]" id="icon" class="form-select">
                                                <option value="fa-home">Home</option>
                                                <option value="fa-info-circle">Info</option>
                                                <option value="fa-envelope">Envelope</option>
                                                <option value="fa-folder">Folder</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <br>
                                        <button class="btn btn-success btn-plus" id="btnplus"> + </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <button class="btn btn-primary" id="btn-save">Save</button>
                                </div>
                            </div>
                        </div>    
                        
                    </div>
                </div>
                <!--/ Tambah Menu -->
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include "../layout/footer.php"; ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- <script>
        document.getElementById('btnplus').addEventListener('click', function() {
            var formRow = document.querySelector('#input-form .row');
            var clone = formRow.cloneNode(true);
            document.querySelector('#input-form').appendChild(clone);

            
        });
        
    </script> -->
    <script>
    // Add event listener to the plus button on the default form
        document.querySelector('#input-form .btn-plus').addEventListener('click', function() {
            var formRow = document.querySelector('#input-form .row');
            var clone = formRow.cloneNode(true);
            
            // Create a new delete button
            var deleteButton = document.createElement('button');
            deleteButton.className = 'btn btn-danger btn-delete';
            deleteButton.textContent = '-';
            deleteButton.addEventListener('click', function() {
                this.parentNode.parentNode.remove();
            });
            
            // Replace plus button with delete button
            var plusButton = clone.querySelector('.btn-plus');
            plusButton.parentNode.replaceChild(deleteButton, plusButton);
            
            // Append the cloned row to the input form
            document.querySelector('#input-form').appendChild(clone);
        });

        // Add event listener to the save button
        document.getElementById('btn-save').addEventListener('click', function() {
            var formRows = document.querySelectorAll('#input-form .row');
            var formData = [];

            // Loop through each form row and extract the input values
            formRows.forEach(function(row) {
                var menuTitle = row.querySelector('input[name="menu[][title]"]').value;
                var menuUrl = row.querySelector('input[name="menu[][url]"]').value;
                var menuIcon = row.querySelector('select[name="menu[][icon]"]').value;

                var submenuTitle = row.querySelector('input[name="submenu[][0][title]"]').value;
                var submenuUrl = row.querySelector('input[name="submenu[][0][url]"]').value;
                var submenuIcon = row.querySelector('select[name="submenu[][0][icon]"]').value;

                formData.push({
                    menu: {
                        title: menuTitle,
                        url: menuUrl,
                        icon: menuIcon
                    },
                    submenu: [{
                        title: submenuTitle,
                        url: submenuUrl,
                        icon: submenuIcon
                    }]
                });
            });

            // Send the form data to the PHP script using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_form.php');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Handle the response from the PHP script
                    console.log(xhr.responseText);
                } else {
                    // Handle errors
                    console.error(xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Error sending the request.');
            };
            xhr.send(JSON.stringify(formData));
        });

    </script>
  </body>
</html>
