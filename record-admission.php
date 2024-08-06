<?php include "assets/includes/function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Record - British Institute</title>
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
            bread("Records", "Students");
            ?>
            <section class="section dashboard">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <!--=============   Inquiries Detail   ===========-->

                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Fee Pending Students <span>| Time Over</span></h5>
                                        <?php
                                        if ($_SESSION['status'] == "Admin") {
                                            $data = display("bisa_admission");
                                        } else {
                                            $condition = array(
                                                "a_on" => $_SESSION['office'],
                                                "a_osn" => $_SESSION['srname']
                                            );
                                            $data = display_where("bisa_admission", $condition);
                                        }
                                        if ($data) {
                                        ?>
                                            <div class="text-center g-3">
                                                <h2 class="text-danger pb-2"><b><u>1<sup>st</sup> Installment</u></b></h2>
                                                <?php
                                                foreach ($data as $user) {
                                                    $tfee = $user['a_tfee'];
                                                    $if1 = $user['a_fee1'];
                                                    $if2 = $user['a_fee2'];
                                                    $if3 = $user['a_fee3'];
                                                    $dis = $user['a_dis'];
                                                    $fee = $if1 + $if2 + $if3;
                                                    $re = $tfee - $fee - $dis;
                                                    if ($if1 == NULL || $if1 == 0) {
                                                    ?>
                                                        <a style="font-size: 14px;" href="detail.php?admission_detail=<?php echo $user['a_id']; ?>" target="_blank" class="badge bg-danger py-2 px-3 mb-2 me-1"><?php echo $user['a_rollno']; ?></a>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <hr>
                                            <div class="text-center">
                                            <h2 class="text-warning pb-2"><b><u>2<sup>nd</sup> Installment</u></b></h2>
                                                <?php
                                                foreach ($data as $user) {
                                                    $tfee = $user['a_tfee'];
                                                    $if1 = $user['a_fee1'];
                                                    $if2 = $user['a_fee2'];
                                                    $if3 = $user['a_fee3'];
                                                    $dis = $user['a_dis'];
                                                    $fee = $if1 + $if2 + $if3;
                                                    $re = $tfee - $fee - $dis;
                                                    if ($re > 0 && ($if2 == NULL || $if2 == 0) && ($if1 != 0) && $user['a_remind_date1'] <= $A) {
                                                        ?>
                                                        <a style="font-size: 14px;" href="detail.php?admission_detail=<?php echo $user['a_id']; ?>" target="_blank" class="badge bg-warning py-2 px-3 mb-2 me-1"><?php echo $user['a_rollno']; ?></a>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <hr>
                                            <div class="text-center">
                                            <h2 class="text-info pb-2"><b><u>3<sup>rd</sup> Installment</u></b></h2>
                                                <?php
                                                foreach ($data as $user) {
                                                    $tfee = $user['a_tfee'];
                                                    $if1 = $user['a_fee1'];
                                                    $if2 = $user['a_fee2'];
                                                    $if3 = $user['a_fee3'];
                                                    $dis = $user['a_dis'];
                                                    $fee = $if1 + $if2 + $if3;
                                                    $re = $tfee - $fee - $dis;
                                                    if ($re > 0 && ($if3 == NULL || $if3 == 0) && ($if2 != 0) && $user['a_remind_date2'] <= $A) {
                                                        ?>
                                                        <a style="font-size: 14px;" href="detail.php?admission_detail=<?php echo $user['a_id']; ?>" target="_blank" class="badge bg-info py-2 px-3 mb-2 me-1"><?php echo $user['a_rollno']; ?></a>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <hr>
                                            <div class="text-center">
                                            <h2 class="text-primary pb-2"><b><u>Pending Some After 3<sup>rd</sup></u></b></h2>
                                                <?php
                                                foreach ($data as $user) {
                                                    $tfee = $user['a_tfee'];
                                                    $if1 = $user['a_fee1'];
                                                    $if2 = $user['a_fee2'];
                                                    $if3 = $user['a_fee3'];
                                                    $dis = $user['a_dis'];
                                                    $fee = $if1 + $if2 + $if3;
                                                    $re = $tfee - $fee - $dis;
                                                    if ($re > 0 && $if1 > 0  && $if2 > 0 && $if3 > 0 && $user['a_remind_date3'] <= $A) {
                                                        ?>
                                                        <a style="font-size: 14px;" href="detail.php?admission_detail=<?php echo $user['a_id']; ?>" target="_blank" class="badge bg-primary py-2 px-3 mb-2 me-1"><?php echo $user['a_rollno']; ?></a>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Admissions <span>| All</span></h5>
                                        <?php
                                        if ($_SESSION['status'] == "Admin") {
                                            $data = display_order_2("bisa_admission", "a_date", "a_id");
                                        } else {
                                            $condition = array(
                                                "a_on" => $_SESSION['office'],
                                                "a_osn" => $_SESSION['srname']
                                            );
                                            $data = display_where_order("bisa_admission", $condition, "a_date", "a_id");
                                        }
                                        if ($data) {
                                        ?>
                                            <table class="table table-borderless table-striped table-hover datatable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <?php
                                                        if ($_SESSION['status'] == "Admin") {
                                                        ?>
                                                            <th>Institute</th>
                                                            <th>SrName</th>
                                                        <?php
                                                        }
                                                        ?>
                                                        <th>RollNo</th>
                                                        <th>Status</th>
                                                        <th>Phone</th>
                                                        <th>Course</th>
                                                        <th>Status</th>
                                                        <th>Fee</th>
                                                        <th>Discount</th>
                                                        <th>1<sup>st</sup>Fee</th>
                                                        <th>2<sup>nd</sup>Fee</th>
                                                        <th>3<sup>rd</sup>Fee</th>
                                                        <th>Remain</th>
                                                        <th>Refund</th>
                                                        <th>Extra Fee</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $count = 1;
                                                    foreach ($data as $user) {
                                                        $tfee = $user['a_tfee'];
                                                        $if1 = $user['a_fee1'];
                                                        $if2 = $user['a_fee2'];
                                                        $if3 = $user['a_fee3'];
                                                        $dis = $user['a_dis'];
                                                        $fee = $if1 + $if2 + $if3;
                                                        $re = $tfee - $fee - $dis;
                                                    ?>
                                                        <tr class="  <?php echo $user['a_id'] ?>" id="<?php echo $user['a_rollno']; ?>">
                                                            <td>
                                                                <?php echo $count;
                                                                $count++; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $user['a_name']; ?>
                                                            </td>
                                                            <?php
                                                            if ($_SESSION['status'] == "Admin") {
                                                            ?>
                                                                <td><?php echo $user['a_on'] ?></td>
                                                                <td><?php echo $user['a_osn']; ?></td>
                                                            <?php
                                                            }
                                                            ?>
                                                            <td><?php if ($user['a_rollno'] == NULL || $user['a_rollno'] == 0) {
                                                                    echo "<i class='bi bi-three-dots'></i>";
                                                                } else {
                                                                    echo $user['a_rollno'];
                                                                } ?></td>
                                                            <td><span class="badge <?php if($user['a_status'] == 0 ){ echo 'bg-info'; }else if($user['a_status'] == 1 ){ echo 'bg-success'; }else if($user['a_status'] == 2 ){ echo 'bg-warning'; }else if($user['a_status'] == 3 ){ echo 'bg-danger'; } ?>"><?php if($user['a_status'] == 0 ){ echo 'Active'; }else if($user['a_status'] == 1 ){ echo 'Complete'; }else if($user['a_status'] == 2 ){ echo 'Pending'; }else if($user['a_status'] == 3 ){ echo 'Leave'; } ?></span></td>
                                                            <td><?php echo $user['a_phone'] ?></td>
                                                            <td><?php echo $user['a_course']; ?></td>
                                                            <td><?php
                                                                if ($fee == 0) {
                                                                ?>
                                                                    <span class="badge bg-danger">Not Paid</span>
                                                                <?php
                                                                } else if ($fee > 0 && $re != 0) {
                                                                ?>
                                                                    <span class="badge bg-warning">Not Paid</span>
                                                                <?php
                                                                } else if ($re == 0) {
                                                                ?>
                                                                    <span class="badge bg-success">Paid</span>
                                                                <?php
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?php echo $tfee; ?></td>
                                                            <td><?php if ($dis == NULL || $dis == 0) {
                                                                    echo "<i class='bi bi-three-dots'></i>";
                                                                } else {
                                                                    echo $dis;
                                                                } ?></td>
                                                            <td>
                                                                <?php
                                                                if ($if1 == NULL || $if1 == 0) {
                                                                ?>
                                                                    <a href="create-fee.php?pay_fee1=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                                    <?php
                                                                } else {
                                                                    if ($_SESSION['status'] != "Data Operator") {
                                                                    ?>
                                                                        <a href="create-fee.php?edit_fee1=<?php echo $user['a_id']; ?>" class="text-info"><b><?php echo $if1; ?></b></a>
                                                                <?php
                                                                    } else {
                                                                        echo $if1;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?php if ($re != 0 && ($if2 == NULL || $if2 == 0) && ($if1 != 0)) {
                                                                ?>
                                                                    <a href="create-fee.php?pay_fee2=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                                    <?php
                                                                } else if ($if2 == NULL || $if2 == 0) {
                                                                    echo "<i class='bi bi-three-dots'></i>";
                                                                } else {
                                                                    if ($_SESSION['status'] != "Data Operator") {
                                                                    ?>
                                                                        <a href="create-fee.php?edit_fee2=<?php echo $user['a_id']; ?>" class="text-info"><b><?php echo $if2; ?></b></a>
                                                                <?php
                                                                    } else {
                                                                        echo $if2;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?php if ($re != 0 && ($if3 == NULL || $if3 == 0)  &&  ($if2 != 0)) {
                                                                ?>
                                                                    <a href="create-fee.php?pay_fee3=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                                    <?php
                                                                } else if ($if3 == NULL || $if3 == 0) {
                                                                    echo "<i class='bi bi-three-dots'></i>";
                                                                } else {
                                                                    if ($_SESSION['status'] != "Data Operator") {
                                                                    ?>
                                                                        <a href="create-fee.php?edit_fee3=<?php echo $user['a_id']; ?>" class="<?php
                                                                                                                                                if ($re == 0) {
                                                                                                                                                    echo "text-info";
                                                                                                                                                } else {
                                                                                                                                                    echo "text-danger";
                                                                                                                                                }
                                                                                                                                                ?>"><b><?php echo $if3; ?></b></a>
                                                                <?php
                                                                    } else {
                                                                        echo $if3;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?php if ($re == NULL || $re == 0) {
                                                                    echo "<i class='bi bi-three-dots'></i>";
                                                                } else {
                                                                    echo $re;
                                                                } ?></td>
                                                            <td>
                                                                <?php
                                                                if ($user['a_refund'] == "0") {
                                                                ?>
                                                                    <a href="create-fee.php?pay_refund=<?php echo $user['a_id']; ?>" class="badge bg-warning">Refund</a>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <a href="create-fee.php?edit_refund=<?php echo $user['a_id']; ?>" class="text-info"><b><?php echo $user['a_refund']; ?></b></a>
                                                                <?php
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($user['a_ex_fee'] == "0" || $user['a_ex_fee'] == "") {
                                                                ?>
                                                                    <a href="create-fee.php?pay_extra=<?php echo $user['a_id']; ?>" class="badge bg-warning">Extra Fee</a>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <a href="create-fee.php?edit_extra=<?php echo $user['a_id']; ?>" class="text-info"><b><?php echo $user['a_ex_fee']; ?></b></a>
                                                                <?php
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                                                    <i class="bi bi-gear"></i>
                                                                </a><!-- End Profile Iamge Icon -->

                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="create-admission.php?edit_admission=<?php echo $user['a_id']; ?>">
                                                                            <i class="bi bi-pencil-square"></i>
                                                                            <span>Edit</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>

                                                                    <li>
                                                                        <a class="dropdown-item d-flex align-items-center" href="detail.php?admission_detail=<?php echo $user['a_id']; ?>">
                                                                            <i class="bi bi-info-circle"></i>
                                                                            <span>Student Detail</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>

                                                                    <li>
                                                                        <button class="dropdown-item d-flex align-items-center" onclick="delete_ad(<?php echo $user['a_id']; ?>);">
                                                                            <i class="bi bi-x-circle"></i>
                                                                            <span>Delete </span>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                    <li>
                                                                        <button class="dropdown-item d-flex align-items-center" onclick="com_ad(<?php echo $user['a_id']; ?>);">
                                                                        <i class="bi bi-check-circle"></i>
                                                                            <span>Complete </span>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                    <li>
                                                                        <button class="dropdown-item d-flex align-items-center" onclick="pen_ad(<?php echo $user['a_id']; ?>);">
                                                                        <i class="bi bi-reception-2"></i>
                                                                            <span>Pending </span>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                    <li>
                                                                        <button class="dropdown-item d-flex align-items-center" onclick="le_ad(<?php echo $user['a_id']; ?>);">
                                                                        <i class="bi bi-heartbreak"></i>
                                                                            <span>Leave </span>
                                                                        </button>
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/validation.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>