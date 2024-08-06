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

    <?php
    if (isset($_SESSION['name'])) {

        if (isset($_REQUEST['date'])) {
            $date = $_REQUEST['date'];
            ?>
            <main class="container">
                <?php
                $con = array(
                    "eb_date" => $date
                );
                $ne = display_count_where("bisa_exam_booked", $con);
                $tf = sum_where("bisa_exam_booked", "eb_profit", $con);

                ?>
                <div class="mt-3 pt-3">
                    <?php bread("Report Generated", $date); ?>
                </div>
                <section class="section dashboard">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <!--=============   Admission   ===========-->

                                <div class="col-md-6">
                                    <div class="card info-card sales-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Booked <span>| <?php echo $date; ?></span></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-people"></i>
                                                </div>
                                                <div class="ps-2">
                                                    <h6><?php echo $ne; ?></h6>
                                                    <!--<span class="text-success small pt-1 fw-bold">12%</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Income   ===========-->

                                <div class="col-md-6">
                                    <div class="card info-card revenue-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Profit <span>| <?php echo $date; ?></span></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-cash-stack"></i>
                                                </div>
                                                <div class="ps-2">
                                                    <h6><?php echo $tf; ?></h6>
                                                    <!--<span class="text-success small pt-1 fw-bold">8%</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Inquiries Detail   ===========-->

                                <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Detail <span>| <?php echo $date; ?></span></h5>
                                            <?php
                                            $condition = array(
                                                "eb_date" => $date
                                            );
                                            $data = display_where("bisa_exam_booked", $condition);
                                            if ($data) {
                                            ?>
                                                <div class="table-responsive align-middle">
                                                    <table class="table table-borderless table-striped table-hover datatable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Exam Date</th>
                                                                <th scope="col">Exam Type</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Fee</th>
                                                                <th scope="col">Fee Method</th>
                                                                <th scope="col">I.F.P</th>
                                                                <th scope="col">I.F.P Method</th>
                                                                <th scope="col">I.F.P Status</th>
                                                                <th scope="col">Profit</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $count = 1;
                                                            foreach ($data as $user) {
                                                            ?>
                                                                <tr class="<?php echo $user['eb_id']; ?>">
                                                                    <td><?php echo $count;
                                                                        $count++; ?></td>
                                                                    <td><?php echo $user['eb_fname'] . " " . $user['eb_lname']; ?></td>
                                                                    <td><?php echo $user['eb_date']; ?></td>
                                                                    <td><?php echo $user['eb_exam_name']; ?></td>
                                                                    <td><?php if ($user['eb_status'] == "Indoor") { ?><span class="badge bg-success">Indoor</span><?php } else if ($user['eb_status'] == "Outdoor") { ?><span class="badge bg-danger">Outdoor</span><?php } ?></td>
                                                                    <td><?php echo $user['eb_fee']; ?></td>
                                                                    <td><?php echo $user['eb_fee_meth']; ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_fee'] == NULL || $user['eb_bi_fee'] == 0) { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                                                                                                                            echo $user['eb_bi_fee'];
                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                    } ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_meth'] == NULL) { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                                                                                                    echo $user['eb_bi_meth'];
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                            } ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_fee'] == NULL || $user['eb_bi_fee'] == 0) { ?><span class="badge bg-danger">Not Paid</span><?php } else { ?><span class="badge bg-success">Paid</span><?php }
                                                                                                                                                                                                                                                                                                                            } ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_fee'] == NULL || $user['eb_bi_fee'] == 0) { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                                                                                                                            echo $user['eb_profit'];
                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                    } ?></td>
                                                                    <td>
                                                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                                                            <i class="bi bi-gear"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center" href="exam-booking.php?edit_exam=<?php echo $user['eb_id']; ?>">
                                                                                    <i class="bi bi-pencil-square"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <hr class="dropdown-divider">
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center" href="detail.php?exam_detail=<?php echo $user['eb_id']; ?>">
                                                                                    <i class="bi bi-info-circle"></i>
                                                                                    <span>Details</span>
                                                                                </a>
                                                                            </li>
                                                                            <?php
                                                                            if ($user['eb_fee_meth'] != "self-paied") {
                                                                            ?>
                                                                                <li>
                                                                                    <hr class="dropdown-divider">
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex align-items-center" href="exam-fee.php?fee=<?php echo $user['eb_id']; ?>">
                                                                                        <i class="bi bi-cash-stack"></i>
                                                                                        <span>Institute Fee Paid</span>
                                                                                    </a>
                                                                                </li>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                            <li>
                                                                                <hr class="dropdown-divider">
                                                                            </li>
                                                                            <li>
                                                                                <button class="dropdown-item d-flex align-items-center" onclick="delete_exam('<?php echo $user['eb_id'] ?>')">
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
                                                    <div class="fee_result"></div>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="alert alert-info fade show text-center" role="alert">
                                                    <h4 class="alert-heading">
                                                        <i class="bi bi-exclamation-triangle"></i>
                                                        Warning!!!
                                                    </h4>
                                                    <p>Today No Exam Booked!</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Inquiries Detail   ===========-->

                                <div class="col-12 col-md-6">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Detail <span>| <?php echo $date; ?></span></h5>

                                            <div class="table-responsive align-middle">
                                                <table class="table table-borderless table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Exam Name</th>
                                                            <th scope="col">Profit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $data = display_order("bisa_exam_list", "el_name");
                                                        if ($data) {
                                                            $count = 1;
                                                            foreach ($data as $user) {
                                                        ?>
                                                                <tr class="<?php if ($count % 2 == 1) {
                                                                                echo "table-info";
                                                                            } else {
                                                                                echo "table-warning";
                                                                            } ?>">
                                                                    <th><?php echo $count;
                                                                        $count++; ?></th>
                                                                    <th><?php echo $user['el_name']; ?></th>
                                                                    <?php
                                                                    $condition = array(
                                                                        "eb_date" => $date
                                                                    );
                                                                    $d = sum_where("bisa_exam_booked", "eb_profit", $condition);
                                                                    ?>
                                                                    <td><?php echo $d; ?></td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Inquiries Detail   ===========-->

                                <div class="col-12 col-md-6">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">Profit Detail <span>| <?php echo $date; ?></span></h5>

                                            <div class="table-responsive align-middle">
                                                <table class="table table-borderless table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Payment Method</th>
                                                            <th scope="col">Profit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $gen = array("Cash", "JazzCash", "EasyPaisa", "HBL", "Back-Al-Islamic");
                                                        for ($a = 0; $a < 5; $a++) {
                                                            $con = array(
                                                                "eb_bi_meth" => $gen[$a],
                                                                "eb_date" => $date
                                                            );
                                                            $d = sum_where("bisa_exam_booked", "eb_profit", $con);
                                                        ?>
                                                            <tr>
                                                                <th><?php echo $a + 1; ?></th>
                                                                <th><?php echo $gen[$a]; ?></th>
                                                                <td><?php echo $d; ?></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </main>
        <?php
        }

        if (isset($_REQUEST['start']) && isset($_REQUEST['end'])) {
            $start = $_REQUEST['start'];
            $end = $_REQUEST['end'];
        ?>
            <main class="container">
                <?php
                $ne = display_count_bet("bisa_exam_booked", "eb_date", $start, $end);
                $tf = sum_bet("bisa_exam_booked", "eb_profit", "eb_date", $start, $end);
                ?>
                <div class="mt-3 pt-3">
                    <?php bread("Report Generated", "(" . $start . ") To (" . $end . ")"); ?>
                </div>
                <section class="section dashboard">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <!--=============   Admission   ===========-->

                                <div class="col-md-6">
                                    <div class="card info-card sales-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Booked <span>| <?php echo "(" . $start . ") To (" . $end . ")"; ?></span></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-people"></i>
                                                </div>
                                                <div class="ps-2">
                                                    <h6><?php echo $ne; ?></h6>
                                                    <!--<span class="text-success small pt-1 fw-bold">12%</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Income   ===========-->

                                <div class="col-md-6">
                                    <div class="card info-card revenue-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Profit <span>| <?php echo "(" . $start . ") To (" . $end . ")"; ?></span></h5>
                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-cash-stack"></i>
                                                </div>
                                                <div class="ps-2">
                                                    <h6><?php echo $tf; ?></h6>
                                                    <!--<span class="text-success small pt-1 fw-bold">8%</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Inquiries Detail   ===========-->

                                <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Detail <span>| <?php echo "(" . $start . ") To (" . $end . ")"; ?></span></h5>
                                            <?php
                                            $data = display_bet("bisa_exam_booked", "eb_date", $start, $end);
                                            if ($data) {
                                            ?>
                                                <div class="table-responsive align-middle">
                                                    <table class="table table-borderless table-striped table-hover datatable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Exam Date</th>
                                                                <th scope="col">Exam Type</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Fee</th>
                                                                <th scope="col">Fee Method</th>
                                                                <th scope="col">I.F.P</th>
                                                                <th scope="col">I.F.P Method</th>
                                                                <th scope="col">I.F.P Status</th>
                                                                <th scope="col">Profit</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $count = 1;
                                                            foreach ($data as $user) {
                                                            ?>
                                                                <tr class="<?php echo $user['eb_id']; ?>">
                                                                    <td><?php echo $count;
                                                                        $count++; ?></td>
                                                                    <td><?php echo $user['eb_fname'] . " " . $user['eb_lname']; ?></td>
                                                                    <td><?php echo $user['eb_date']; ?></td>
                                                                    <td><?php echo $user['eb_exam_name']; ?></td>
                                                                    <td><?php if ($user['eb_status'] == "Indoor") { ?><span class="badge bg-success">Indoor</span><?php } else if ($user['eb_status'] == "Outdoor") { ?><span class="badge bg-danger">Outdoor</span><?php } ?></td>
                                                                    <td><?php echo $user['eb_fee']; ?></td>
                                                                    <td><?php echo $user['eb_fee_meth']; ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_fee'] == NULL || $user['eb_bi_fee'] == 0) { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                                echo $user['eb_bi_fee'];
                                                                                                                                                            }
                                                                                                                                                        } ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_meth'] == NULL) { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                                echo $user['eb_bi_meth'];
                                                                                                                                                            }
                                                                                                                                                        } ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_fee'] == NULL || $user['eb_bi_fee'] == 0) { ?><span class="badge bg-danger">Not Paid</span><?php } else { ?><span class="badge bg-success">Paid</span><?php }
                                                                                                                                                                                                                            } ?></td>
                                                                    <td><?php if ($user['eb_fee_meth'] == 'Self-paid') { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                            if ($user['eb_bi_fee'] == NULL || $user['eb_bi_fee'] == 0) { ?><i class="bi bi-three-dots"></i><?php } else {
                                                                                                                                                                echo $user['eb_profit'];
                                                                                                                                                            }
                                                                                                                                                        } ?></td>
                                                                    <td>
                                                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                                                            <i class="bi bi-gear"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center" href="exam-booking.php?edit_exam=<?php echo $user['eb_id']; ?>">
                                                                                    <i class="bi bi-pencil-square"></i>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <hr class="dropdown-divider">
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center" href="detail.php?exam_detail=<?php echo $user['eb_id']; ?>">
                                                                                    <i class="bi bi-info-circle"></i>
                                                                                    <span>Details</span>
                                                                                </a>
                                                                            </li>
                                                                            <?php
                                                                            if ($user['eb_fee_meth'] != "self-paied") {
                                                                            ?>
                                                                                <li>
                                                                                    <hr class="dropdown-divider">
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item d-flex align-items-center" href="exam-fee.php?fee=<?php echo $user['eb_id']; ?>">
                                                                                        <i class="bi bi-cash-stack"></i>
                                                                                        <span>Institute Fee Paid</span>
                                                                                    </a>
                                                                                </li>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                            <li>
                                                                                <hr class="dropdown-divider">
                                                                            </li>
                                                                            <li>
                                                                                <button class="dropdown-item d-flex align-items-center" onclick="delete_exam('<?php echo $user['eb_id'] ?>')">
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
                                                    <div class="fee_result"></div>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="alert alert-info fade show text-center" role="alert">
                                                    <h4 class="alert-heading">
                                                        <i class="bi bi-exclamation-triangle"></i>
                                                        Warning!!!
                                                    </h4>
                                                    <p>Today No Exam Booked!</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Inquiries Detail   ===========-->

                                <div class="col-12 col-md-6">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">Exam Detail <span>| <?php echo "(" . $start . ") To (" . $end . ")"; ?></span></h5>

                                            <div class="table-responsive align-middle">
                                                <table class="table table-borderless table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Exam Name</th>
                                                            <th scope="col">Profit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $data = display_order("bisa_exam_list", "el_name");
                                                        if ($data) {
                                                            $count = 1;
                                                            foreach ($data as $user) {
                                                        ?>
                                                                <tr class="<?php if ($count % 2 == 1) {
                                                                                echo "table-info";
                                                                            } else {
                                                                                echo "table-warning";
                                                                            } ?>">
                                                                    <th><?php echo $count;
                                                                        $count++; ?></th>
                                                                    <th><?php echo $user['el_name']; ?></th>
                                                                    <?php
                                                                    $condition = array(
                                                                        "eb_exam_name" => $user['el_name']
                                                                    );
                                                                    $d = sum_where_bet("bisa_exam_booked", "eb_profit", $condition, "eb_date", $start, $end);
                                                                    ?>
                                                                    <td><?php echo $d; ?></td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=============   Inquiries Detail   ===========-->

                                <div class="col-12 col-md-6">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">Profit Detail <span>| <?php echo "(" . $start . ") To (" . $end . ")"; ?></span></h5>

                                            <div class="table-responsive align-middle">
                                                <table class="table table-borderless table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Payment Method</th>
                                                            <th scope="col">Profit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $gen = array("Cash", "JazzCash", "EasyPaisa", "HBL", "Back-Al-Islamic");
                                                        for ($a = 0; $a < 5; $a++) {
                                                            $con = array(
                                                                "eb_bi_meth" => $gen[$a]
                                                            );
                                                            $d = sum_where_bet("bisa_exam_booked", "eb_profit", $con, "eb_date", $start, $end);
                                                        ?>
                                                            <tr>
                                                                <th><?php echo $a + 1; ?></th>
                                                                <th><?php echo $gen[$a]; ?></th>
                                                                <td><?php echo $d; ?></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </main>
        <?php
        }
        
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