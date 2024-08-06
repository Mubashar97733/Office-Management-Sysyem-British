<?php include "assets/includes/function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>British Institute</title>
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

    <main>
        <div class="container">

            <?php
            if (isset($_REQUEST['search'])) {
                $phone = $_REQUEST['search'];
                $condition = array(
                    "inq_phone" => $phone
                );
                $inquiry = display_where("bisa_inquiry", $condition);
                $ad = array(
                    "a_phone" => $phone
                );
                $admission = display_where("bisa_admission", $ad);
                if ($inquiry) {
                    foreach ($inquiry as $user) {
                    ?>
                        <div class="card row mt-5 pt-4">
                            <div class="col-12">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Institute</th>
                                            <th scope="col">SrName</th>
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
                                        ?>
                                        <tr class="<?php echo $user['inq_id']; ?>">
                                            <td><?php echo $count;
                                                $count++; ?></td>
                                            <td><?php echo $user['inq_name']; ?></td>
                                            <td class="table-info"><?php echo $user['inq_on']; ?></td>
                                            <td class="table-info"><?php echo $user['inq_osn']; ?></td>
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
                                                        <a class="dropdown-item d-flex align-items-center" href="create-admission.php?inquiry_admission=<?php echo $user['inq_id']; ?>">
                                                            <i class="bi bi-person"></i>
                                                            <span>Admission</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="detail.php?inquiry_detail=<?php echo $user['inq_id']; ?>">
                                                            <i class="bi bi-info-circle"></i>
                                                            <span>Inquiry Detail</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="create-inquiry.php?edit_inquiry=<?php echo $user['inq_id']; ?>">
                                                            <i class="bi bi-pencil-square"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>

                                                    <li>
                                                        <button class="dropdown-item d-flex align-items-center" onclick="delete_inq(<?php echo $user['inq_id']; ?>);">
                                                            <i class="bi bi-x-circle"></i>
                                                            <span>Delete </span>
                                                        </button>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php
                    }
                } else if ($admission) {
                    foreach ($admission as $user) {
                    ?>
                        <div class="card row mt-5 pt-4">
                            <div class="col-12">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Institute</th>
                                            <th>SrName</th>
                                            <th>RollNo</th>
                                            <th>Phone</th>
                                            <th>Course</th>
                                            <th>Status</th>
                                            <th>Fee</th>
                                            <th>Discount</th>
                                            <th>1<sup>st</sup>Fee</th>
                                            <th>2<sup>nd</sup>Fee</th>
                                            <th>3<sup>rd</sup>Fee</th>
                                            <th>Remain</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        foreach ($admission as $user) {
                                            $tf = $user['a_tfee'];
                                            $if1 = $user['a_fee1'];
                                            $if2 = $user['a_fee2'];
                                            $if3 = $user['a_fee3'];
                                            $dis = $user['a_dis'];
                                            $fee = $if1 + $if2 + $if3;
                                            $re = $tf - $fee - $dis;
                                        ?>
                                            <tr class="  <?php echo $user['a_id'] ?>  ">
                                                <td>
                                                    <?php echo $count;
                                                    $count++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['a_name']; ?>
                                                </td>
                                                <td class="table-info"><?php echo $user['a_on'] ?></td>
                                                <td class="table-info"><?php echo $user['a_osn']; ?></td>
                                                <td><?php if ($user['a_rollno'] == NULL || $user['a_rollno'] == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_rollno'];
                                                    } ?></td>
                                                <td><?php echo $user['a_phone'] ?></td>
                                                <td><?php echo $user['a_course']; ?></td>
                                                <td><?php
                                                    if ($fee == 0) {
                                                    ?>
                                                        <span class="badge bg-danger">Not Payed</span>
                                                    <?php
                                                    } else if ($fee > 0 && $re != 0) {
                                                    ?>
                                                        <span class="badge bg-warning">Not Payed</span>
                                                    <?php
                                                    } else if ($re == 0) {
                                                    ?>
                                                        <span class="badge bg-success">Payed</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $tf; ?></td>
                                                <td><?php if ($dis == NULL || $dis == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $dis;
                                                    } ?></td>
                                                <td>
                                                    <?php
                                                    if ($if1 == NULL || $if1 == 0) {
                                                    ?>
                                                        <a href="create-ad.php?pay_ifee1=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                    <?php
                                                    } else {
                                                        /*if ($_SESSION['status'] == "Admin") {
                                                                ?>
                                                                    <a href="create-ad.php?edit_ifee1=<?php echo $user['a_id']; ?>" class="edit-link"><?php echo $in1; ?></a>
                                                                <?php
                                                                } else */ {
                                                            echo $if1;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php if ($re != 0 && ($if2 == NULL || $if2 == 0) && ($if1 != 0)) {
                                                    ?>
                                                        <a href="create-ad.php?pay_ifee2=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                    <?php
                                                    } else if ($if2 == NULL || $if2 == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        /*if ($_SESSION['status'] == "Admin") {
                                                                ?>
                                                                    <a href="create-ad.php?edit_ifee2=<?php echo $user['inq_a_id']; ?>" class="edit-link"><?php echo $in2; ?></a>
                                                                <?php
                                                                } else */ {
                                                            echo $if2;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php if ($re != 0 && ($if3 == NULL || $if3 == 0)  &&  ($if2 != 0)) {
                                                    ?>
                                                        <a href="create-ad.php?pay_ifee3=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                    <?php
                                                    } else if ($if3 == NULL || $if3 == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        /*if ($_SESSION['status'] == "Admin") {
                                                                ?>
                                                                    <a href="create-ad.php?edit_ifee3=<?php echo $user['a_id']; ?>" class="btn-link"><?php echo $in3; ?></a>
                                                                <?php
                                                                } else */ {
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

                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="card row mt-5 py-4">
                        <div class="col-12 text-center">
                            <a href="create-inquiry.php?phone=<?php echo $phone; ?>" class="btn btn-lg btn-secondary">Create Inquiry</a>
                            <a href="create-admission.php?phone=<?php echo $phone; ?>" class="btn btn-lg btn-secondary">Create Admission</a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </main>

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