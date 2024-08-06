<?php include "assets/includes/function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - British Institute</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="toggle-sidebar">

    <?php
    if (isset($_SESSION['name'])) {
    ?>
        <?php include "assets/includes/header.php"; ?>

        <main id="main" class="main">
            <?php
            bread("Dashboard", "Today Tasks");
            ?>
            <section class="section dashboard">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <!--=============   Inquiries Detail   ===========-->

                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <?php
                                        if($_SESSION['status']=="Admin"){
                                            $num = dcl("bisa_inquiry");
                                            $data = dle("bisa_inquiry");
                                        }else{
                                            $condition = array(
                                                "inq_on" => $_SESSION['office'],
                                                "inq_osn" => $_SESSION['srname']
                                            );
                                            $num = dclw("bisa_inquiry", $condition);
                                            $data = dlw("bisa_inquiry", $condition);
                                        }
                                        ?>
                                        <h5 class="card-title">Inquiries <?php echo "(" . $num . ") " ?><span>| Today Commited</span></h5>
                                        <?php
                                        if ($data) {
                                        ?>
                                            <table class="table table-borderless table-striped table-hover datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Inquiry Date</th>
                                                        <th scope="col">Commitment</th>
                                                        <th scope="col">Comments</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $count = 1;
                                                    foreach ($data as $user) {
                                                    ?>
                                                        <tr class="<?php echo $user['inq_id']; ?>">
                                                            <td><?php echo $count;
                                                                $count++; ?></td>
                                                            <td><?php echo $user['inq_name']; ?></td>
                                                            <td><?php echo $user['inq_course']; ?></td>
                                                            <td><?php echo $user['inq_phone']; ?></td>
                                                            <td><?php echo $user['inq_date']; ?></td>
                                                            <td><?php echo $user['inq_remind_date']; ?></td>
                                                            <td><?php echo $user['inq_comment']; ?></td>
                                                            <td>
                                                                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-gear"></i>
                                                                </a><!-- End Profile Iamge Icon -->

                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                                                            <i class="bi bi-person"></i>
                                                                            <span>Admission</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>

                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                                                            <i class="bi bi-info-circle"></i>
                                                                            <span>Inquiry Detail</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>

                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                                                            <i class="bi bi-pencil-square"></i>
                                                                            <span>Edit</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>

                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                                            <i class="bi bi-x-circle"></i>
                                                                            <span>Delete </span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="alert alert-info fade show text-center" role="alert">
                                                <h4 class="alert-heading">
                                                    <i class="bi bi-exclamation-triangle"></i>
                                                    Warning!!!
                                                </h4>
                                                <p>Today No Inquiey is Commited!</p>
                                                <hr>
                                                <p class="mb-0">Check Inquiries Manually!</p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include "assets/includes/footer.php"; ?>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php
    } else {
        ?>
            <main>
                <div class="container">
    
                    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                        <h1>404</h1>
                        <h2>Please Login First To Access This Page</h2>
                        <a class="btn" href="index.php">Login</a>
                        <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Developed by <a href="https://wa.me/+923048616865">Mubashar Ahmad</a>
                        </div>
                    </section>
    
                </div>
            </main>
        <?php
        }
    ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>