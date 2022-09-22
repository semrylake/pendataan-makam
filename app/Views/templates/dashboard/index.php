<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url(); ?>/assets/sneat/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?= $title; ?></title>

    <meta name="description" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/sneat/assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/sneat/assets/css/demo.css" />

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <script src="<?= base_url(); ?>/assets/sneat/assets/vendor/js/helpers.js"></script>
    <script src="<?= base_url(); ?>/assets/sneat/assets/js/config.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datepicker/css/datepicker.css">
</head>

<body id="body">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?= $this->include('components/dashboard/sidebar'); ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- topbar -->
                <?= $this->include('components/dashboard/topbar'); ?>
                <!-- / topbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid flex-grow-1 container-p-y">
                        <?= $this->renderSection('content'); ?>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                Copyright
                                ©
                                JSL
                                <?= date('Y') ?>
                                , more documentation in
                                <a href="https://github.com/semrylake/" target="_blank">Github</a>
                            </div>
                            <div>
                                <!-- <a href="https://github.com/semrylake/" class="footer-link me-4" target="_blank">Documentation</a> -->
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url(); ?>/assets/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>/assets/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>/assets/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url(); ?>/assets/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url(); ?>/assets/sneat/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>