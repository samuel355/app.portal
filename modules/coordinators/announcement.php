<?php include "includes/header.php";?>
<body>
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <?php include "includes/top-nav.php";?>
    <!-- /Header -->

    <!-- Sidebar -->
    <?php include "includes/sidebar.php";?>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Announcements</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Announcement</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Create Announcement</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <!-- Cards -->
            <section class="comp-section comp-cards" id="comp_cards">

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                This is the header
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="announcement-detail" class="btn btn-primary">View Detail</a>
                            </div>
                            <div class="card-footer text-muted">
                                Oct. 22, 2020. At 8:23 AM
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                This is my header
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="announcement-detail" class="btn btn-primary">View Detail</a>
                            </div>
                            <div class="card-footer text-muted">
                                Oct. 22, 2020. At 8:23 AM
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                This is my header
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="announcement-detail" class="btn btn-primary">View Detail</a>
                            </div>
                            <div class="card-footer text-muted">
                                Oct. 22, 2020. At 8:23 AM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                This is my header
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="announcement-detail" class="btn btn-primary">View Detail</a>
                            </div>
                            <div class="card-footer text-muted">
                                Oct. 22, 2020. At 8:23 AM
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                This is my header
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="announcement-detail" class="btn btn-primary">View Detail</a>
                            </div>
                            <div class="card-footer text-muted">
                                Oct. 22, 2020. At 8:23 AM
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                This is my header
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="announcement-detail" class="btn btn-primary">View Detail</a>
                            </div>
                            <div class="card-footer text-muted">
                                Oct. 22, 2020. At 8:23 AM
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Cards -->

        </div>
        <!-- /Page Content -->

        <!-- Create Announcement -->
        <div id="add_client" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Announcement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Announcement Title <span class="text-danger"> *</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="" class="col-form-label"> Details<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="10"> Message</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Create Announcement -->
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- Select2 JS -->
<script src="assets/js/select2.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/app.js"></script>

</body>
</html>
