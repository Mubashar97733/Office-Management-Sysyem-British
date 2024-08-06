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

            <div class="row justify-content-center">
                <div class="col-12 align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-5">
                        <a class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">British Institute</span>
                        </a>
                    </div><!-- End Logo -->

                    <?php
                    if (isset($_REQUEST['exam_detail'])) {
                        $condition = array(
                            "eb_id" => $_REQUEST['exam_detail']
                        );
                        $data = display_where("bisa_exam_booked", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Exam Details</h5>
                                        </div>
                                        <table class="table table-hover table-bordered">
                                            <tr>
                                                <th>Name</th>
                                                <th><?php echo $user['eb_fname'] . " " . $user['eb_lname']; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td><?php echo $user['eb_dob']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td><?php echo $user['eb_city']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?php echo $user['eb_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Exam Date</th>
                                                <td><?php echo $user['eb_edate']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Phone No</th>
                                                <td><?php echo $user['eb_phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>CNIC / Passport No</th>
                                                <td><?php echo $user['eb_cnic']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>CNIC / Passport Expiry Date</th>
                                                <td><?php echo $user['eb_cnic_exp_date']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Exam Type</th>
                                                <td><?php echo $user['eb_exam_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fee</th>
                                                <td><?php echo $user['eb_fee']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method</th>
                                                <td><?php echo $user['eb_fee_meth']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Student Paied ?</th>
                                                <td><?php if ($user['eb_st_pay'] == 1) { ?><span class="badge bg-success">Paid</span><?php } else { ?><span class="badge bg-danger">Not Paid</span><?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>Intitute Fee</th>
                                                <td><?php if ($user['eb_bi_fee'] == 0 || $user['eb_bi_fee'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['eb_bi_fee'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>Institute Paied ?</th>
                                                <td><?php if ($user['eb_bi_fee'] == 0 || $user['eb_bi_fee'] == NULL) { ?><span class="badge bg-danger">Not Paid</span><?php } else { ?><span class="badge bg-success">Paid</span><?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>Institute Profit</th>
                                                <td><?php if ($user['eb_profit'] == NULL || $user['eb_profit'] == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['eb_profit'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>Intitute Exam Booking Date</th>
                                                <td><?php echo $user['eb_date']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }
                    if (isset($_REQUEST['admission_detail'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['admission_detail']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                                $tfee = $user['a_tfee'];
                                $if1 = $user['a_fee1'];
                                $if2 = $user['a_fee2'];
                                $if3 = $user['a_fee3'];
                                $dis = $user['a_dis'];
                                $fee = $if1 + $if2 + $if3;
                                $re = $tfee - $fee - $dis;
                                ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Student Details</h5>
                                        </div>
                                        <table class="table table-hover table-bordered">
                                            <tr>
                                                <th>Name</th>
                                                <th><?php echo $user['a_name']; ?></th>
                                            </tr>
                                            <tr>
                                                <th>CNIC No</th>
                                                <td><?php echo $user['a_cnic']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Roll No</th>
                                                <td><?php echo $user['a_rollno']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Father Name</th>
                                                <td><?php echo $user['a_fname']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Course</th>
                                                <td><?php echo $user['a_course']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Phone No</th>
                                                <td><?php echo $user['a_phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?php echo $user['a_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Admission Through</th>
                                                <td><?php echo $user['a_method']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><?php echo $user['a_area']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td><?php echo $user['a_sex']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td><?php echo $user['a_dob']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Admission By</th>
                                                <td><?php echo $user['a_user']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Admission Date</th>
                                                <td><?php echo $user['a_date']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total Fee</th>
                                                <td><?php echo $tfee; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Discount</th>
                                                <td><?php if ($dis == NULL || $dis == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $dis;
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>1<sup>st</sup> Fee</th>
                                                <td><?php
                                                    if ($if1 == NULL || $if1 == 0) {
                                                    ?>
                                                        <a href="create-fee.php?pay_fee1=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                        <?php
                                                    } else {
                                                        if ($_SESSION['status'] != "Data Operator") {
                                                        ?>
                                                            <a href="create-fee.php?edit_fee1=<?php echo $user['a_id']; ?>" class="text-danger"><b><?php echo $if1; ?></b></a>
                                                    <?php
                                                        } else {
                                                            echo $if1;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method</th>
                                                <td><?php if ($user['a_fee1_meth'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_fee1_meth'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>1<sup>st</sup> Fee Pay Date</th>
                                                <td><?php if ($user['a_fee1_date'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_fee1_date'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>2<sup>nd</sup> Fee</th>
                                                <td><?php if ($re != 0 && ($if2 == NULL || $if2 == 0) && ($if1 != 0)) {
                                                    ?>
                                                        <a href="create-fee.php?pay_fee2=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                        <?php
                                                    } else if ($if2 == NULL || $if2 == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        if ($_SESSION['status'] != "Data Operator") {
                                                        ?>
                                                            <a href="create-fee.php?edit_fee2=<?php echo $user['a_id']; ?>" class="text-danger"><b><?php echo $if2; ?></b></a>
                                                    <?php
                                                        } else {
                                                            echo $if2;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method</th>
                                                <td><?php if ($user['a_fee2_meth'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_fee2_meth'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>2<sup>nd</sup> Fee Pay Date</th>
                                                <td><?php if ($user['a_fee2_date'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_fee2_date'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>3<sup>rd</sup> Fee</th>
                                                <td><?php if ($re != 0 && ($if3 == NULL || $if3 == 0)  &&  ($if2 != 0)) {
                                                    ?>
                                                        <a href="create-fee.php?pay_fee3=<?php echo $user['a_id']; ?>" class="badge bg-secondary">Add Fee</a>
                                                        <?php
                                                    } else if ($if3 == NULL || $if3 == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        if ($_SESSION['status'] != "Data Operator") {
                                                        ?>
                                                            <a href="create-fee.php?edit_fee3=<?php echo $user['a_id']; ?>" class="text-danger"><b><?php echo $if3; ?></b></a>
                                                    <?php
                                                        } else {
                                                            echo $if3;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method</th>
                                                <td><?php if ($user['a_fee3_meth'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_fee3_meth'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>3<sup>rd</sup> Fee Pay Date</th>
                                                <td><?php if ($user['a_fee3_date'] == NULL) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $user['a_fee3_date'];
                                                    } ?></td>
                                            </tr>
                                            <tr>
                                                <th>Remaining Dues</th>
                                                <td><?php if ($re == NULL || $re == 0) {
                                                        echo "<i class='bi bi-three-dots'></i>";
                                                    } else {
                                                        echo $re;
                                                    } ?></td>
                                            </tr>

                                            <tr class="table-info">
                                                <th>Institute Name </th>
                                                <td><?php echo $user['a_on']; ?></td>
                                            </tr>
                                            <tr class="table-info">
                                                <th>Sr Name</th>
                                                <td><?php echo $user['a_osn']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }
                    if (isset($_REQUEST['inquiry_detail'])) {
                        $condition = array(
                            "inq_id" => $_REQUEST['inquiry_detail']
                        );
                        $data = display_where("bisa_inquiry", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                                ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Inquiry Details</h5>
                                        </div>
                                        <table class="table table-hover table-bordered">
                                            <tr>
                                                <th>Name</th>
                                                <th><?php echo $user['inq_name']; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Course</th>
                                                <td><?php echo $user['inq_course']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td><?php echo $user['inq_phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Inquiry Through</th>
                                                <td><?php echo $user['inq_method']." (".$user['inq_detail'].")"; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><?php echo $user['inq_area']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Inquiry Through</th>
                                                <td><?php echo $user['inq_user']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Inquity Date</th>
                                                <td><?php echo $user['inq_date']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Commitment Date </th>
                                                <td><?php echo $user['inq_remind_date']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Comments</th>
                                                <td><?php echo $user['inq_comment']; ?></td>
                                            </tr>
                                            
                                            <tr class="table-info">
                                                <th>Institute Name </th>
                                                <td><?php echo $user['inq_on']; ?></td>
                                            </tr>
                                            <tr class="table-info">
                                                <th>Sr Name</th>
                                                <td><?php echo $user['inq_osn']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }
                    ?>

                    <div class="d-flex justify-content-center py-3">
                        <button class="d-flex align-items-center btn btn-secondary" onclick="history.back();">Back</button>
                    </div><!-- End Logo -->

                </div>
            </div>

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