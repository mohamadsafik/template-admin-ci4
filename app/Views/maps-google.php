<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title'=>'Google Maps')); ?>

    <?= $this->include('partials/head-css') ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php echo view('partials/page-title', array('pagetitle'=>'Maps', 'title'=>'Google Maps')); ?>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Markers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Overlays</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="gmaps-overlay" class="gmaps"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Street View Panoramas</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="panorama" class="gmaps-panaroma"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Map Types</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="gmaps-types" class="gmaps"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/vendor-scripts') ?>

    <!-- prismjs plugin -->
    <script src="/assets/libs/prismjs/prism.js"></script>

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- gmaps plugins -->
    <script src="/assets/libs/gmaps/gmaps.min.js"></script>

    <!-- gmaps init -->
    <script src="/assets/js/pages/gmaps.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
</body>

</html>