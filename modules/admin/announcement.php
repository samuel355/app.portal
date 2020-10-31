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


            <!-- Announcements Cards -->
            <section class="comp-section comp-cards" id="comp_cards">

                <div class="row">
                   <?php
                        $sql = "SELECT * FROM announcements ORDER BY id DESC ";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        while ($records = $stmt->fetch(PDO::FETCH_ASSOC)){
                            $id = $records['id'];
                            $title = $records['title'];
                            $messasge = substr($records['message'], 0, 150);
                            $author_id = $records['author_id'];
                            $author_firstname = $records['author_firstname'];
                            $author_lastname = $records['author_lastname'];
                            $post_views = $records['post_views'];
                            $posted_date = $records['posted_date'];
                            ?>
                            <div class="col-12 col-md-6 col-lg-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <h5 class="card-title"><?php echo $title?></h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"> <?php echo $messasge;?></p>
                                        <a href="announcement-detail?id=<?php echo $id; ?>" class="btn btn-primary">View Detail</a>

                                    </div>
                                    <div class="card-footer text-muted">
                                        <p>Views: <?php echo $post_views;?></p>
                                        <?php echo $posted_date;?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                   ?>


                </div>
            </section>
            <!-- / Announcements Cards -->
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

                        <!--notifications-->
                        <div class="row">
                            <div class="col-md-12">

                                <div id="process" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-top:20px; display:none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <span>Processing ! ....</span>
                                </div>

                                <div id="alert" class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top:20px; display:none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <span class="text-center" id="messages"></span>
                                </div>

                                <div id="succ" class="alert alert-info alert-dismissible fade show text-center" role="alert" style=" display:none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <span class="text-center" id="done"></span>
                                </div>
                            </div>
                        </div>
                        <!--/notifications-->

                        <form role="form" method="POST" id="announcement" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="Announcement Title">Announcement Title <span class="text-danger"> *</span></label>
                                        <input class="form-control" type="text" name="title" id="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Message" class="col-form-label"> Message<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <textarea name="content" id="content"  cols="100" rows="10"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="author_id" id="author_id" value="<?php echo $admin_id?>">
                            <input type="hidden" name="author_firstname" id="author_firstname" value="<?php echo $firstname?>">
                            <input type="hidden"  name="author_lastname" id="author_lastname" value="<?php echo $lastname;?>">
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" id="submit" type="submit" name="submit">Create</button>
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
<script src="../../node_modules/ckeditor4/ckeditor.js"></script>


<script src="ajax/announcement.js"></script>


</body>
</html>
