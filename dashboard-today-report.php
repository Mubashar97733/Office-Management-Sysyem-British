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

        include "assets/includes/header.php";
    ?>

        <main id="main" class="main">
            <?php
            bread("Dashboard", "Today Summary");
            ?>
            <section class="section dashboard">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <?php
                            $ad_con = array(
                                "a_date" => $A,
                                "a_on" => $_SESSION['office'],
                                "a_osn" => $_SESSION['srname']
                            );
                            $inq_con = array(
                                "inq_date" => $A,
                                "inq_on" => $_SESSION['office'],
                                "inq_osn" => $_SESSION['srname']
                            );
                            $f_con = array(
                                "f_date" => $A,
                                "f_on" => $_SESSION['office'],
                                "f_osn" => $_SESSION['srname']
                            );
                            $in_con = array(
                                "io_date" => $A,
                                "io_io" => "In",
                                "io_on" => $_SESSION['office'],
                                "io_osn" => $_SESSION['srname']
                            );
                            $ex_con = array(
                                "io_date" => $A,
                                "io_io" => "Out",
                                "io_on" => $_SESSION['office'],
                                "io_osn" => $_SESSION['srname']
                            );
                            $ad = display_count_where("bisa_admission", $ad_con);
                            $inq = display_count_where("bisa_inquiry", $inq_con);
                            $total_fee = sum_where("bisa_fee", "f_rs", $f_con);
                            $total_in = sum_where("bisa_in_out", "io_rs", $in_con);
                            $total_ex = sum_where("bisa_in_out", "io_rs", $ex_con);
                            ?>
                        </div>
                        <div class="row">

                            <!--=============   Admission   ===========-->

                            <div class="col-lg-3 col-md-6">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Admissions <span>| Today</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-2">
                                                <h6><?php echo $ad; ?></h6>
                                                <!--<span class="text-success small pt-1 fw-bold">12%</span>-->
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <div class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    View Details
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-3" id="exampleModalLabel">Admissions Detail</h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Admission Tabs</h5>

                                                                                <!-- Default Tabs -->
                                                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                                    <li class="nav-item" role="presentation">
                                                                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">By Course</button>
                                                                                    </li>
                                                                                    <li class="nav-item" role="presentation">
                                                                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">By User</button>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="tab-content pt-2" id="myTabContent">
                                                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                                                        <div class="row">
                                                                                            <?php
                                                                                            $data = display("bisa_course");
                                                                                            if ($data) {
                                                                                                $count = 1;
                                                                                                foreach ($data as $user) {
                                                                                                    $con = array(
                                                                                                        "a_course" => $user['co_name'],
                                                                                                        "a_date" => $A,
                                                                                                        "a_on" => $_SESSION['office'],
                                                                                                        "a_osn" => $_SESSION['srname']
                                                                                                    );
                                                                                                    $co = display_count_where("bisa_admission", $con);
                                                                                            ?>
                                                                                                    <div class="col-6 col-md-2">
                                                                                                        <div class="card <?php if ($co > 0) {
                                                                                                                                echo "text-bg-secondary";
                                                                                                                            } ?>">
                                                                                                            <div class="card-body p-0 m-0 pb-2">
                                                                                                                <h4 class="card-title <?php if ($co > 0) {
                                                                                                                                            echo "text-light";
                                                                                                                                        } ?>"><?php echo $user['co_name']; ?></h4>
                                                                                                                <?php echo $co; ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                            <?php
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                                                        <div class="row">
                                                                                            <?php
                                                                                            $condition = array(
                                                                                                "u_on" => $_SESSION['office'],
                                                                                                "u_osn" => $_SESSION['srname']
                                                                                            );
                                                                                            $data = display_where("bisa_user", $condition);
                                                                                            if ($data) {
                                                                                                $count = 1;
                                                                                                foreach ($data as $user) {
                                                                                                    $con = array(
                                                                                                        "a_user" => $user['u_name'],
                                                                                                        "a_date" => $A,
                                                                                                        "a_on" => $_SESSION['office'],
                                                                                                        "a_osn" => $_SESSION['srname']
                                                                                                    );
                                                                                                    $co = display_count_where("bisa_admission", $con);
                                                                                            ?>
                                                                                                    <div class="col-6 col-md-2">
                                                                                                        <div class="card <?php if ($co > 0) {
                                                                                                                                echo "text-bg-secondary";
                                                                                                                            } ?>">
                                                                                                            <h4 class="card-title <?php if ($co > 0) {
                                                                                                                                        echo "text-light";
                                                                                                                                    } ?>"><?php echo $user['u_name']; ?></h4>
                                                                                                            <div class="card-body p-0 m-0 pb-2"><?php echo $co; ?></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                            <?php
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- End Default Tabs -->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=============   Inquiry   ===========-->

                            <div class="col-lg-3 col-md-6">
                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Inquires <span>| Today</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-2">
                                                <h6><?php echo $inq; ?></h6>
                                                <!--<span class="text-danger small pt-1 fw-bold">12%</span>-->
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <div class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                    View Details
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Inquires</h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Inquiry Tabs</h5>
                                                                                <?php
                                                                                $data = display("bisa_inq_main_method");
                                                                                ?>
                                                                                <!-- Default Tabs -->
                                                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                                    <?php
                                                                                    if ($data) {
                                                                                        $count = 1;
                                                                                        foreach ($data as $user) {
                                                                                    ?>
                                                                                            <li class="nav-item" role="presentation">
                                                                                                <button class="nav-link <?php if ($count == 1) {
                                                                                                                            echo "active";
                                                                                                                        }
                                                                                                                        $count++; ?>" id="<?php echo $user['imm_name']; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $user['imm_name']; ?>" type="button" role="tab" aria-controls="<?php echo $user['imm_name']; ?>" aria-selected="true"><?php echo "By " . $user['imm_name']; ?></button>
                                                                                            </li>
                                                                                    <?php
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </ul>
                                                                                <div class="tab-content pt-2" id="myTabContent">
                                                                                    <?php
                                                                                    if ($data) {
                                                                                        $count = 1;
                                                                                        foreach ($data as $user) {
                                                                                    ?>
                                                                                            <div class="tab-pane fade <?php if ($count == 1) {
                                                                                                                            echo "show active";
                                                                                                                        }
                                                                                                                        $count++; ?>" id="<?php echo $user['imm_name']; ?>" role="tabpanel" aria-labelledby="<?php echo $user['imm_name']; ?>-tab">
                                                                                                <div class="row">
                                                                                                    <?php
                                                                                                    $condition = array(
                                                                                                        "im_on" => $_SESSION['office'],
                                                                                                        "im_osn" => $_SESSION['srname'],
                                                                                                        "im_method" => $user['imm_name']
                                                                                                    );
                                                                                                    $d = display_where("bisa_inq_method", $condition);
                                                                                                    if ($d) {
                                                                                                        foreach ($d as $u) {
                                                                                                            $con = array(
                                                                                                                "inq_on" => $_SESSION['office'],
                                                                                                                "inq_osn" => $_SESSION['srname'],
                                                                                                                "inq_method" => $user['imm_name'],
                                                                                                                "inq_detail" => $u['im_meth_detail'],
                                                                                                                "inq_date" => $A
                                                                                                            );
                                                                                                            $inq = display_count_where("bisa_inquiry", $con);
                                                                                                    ?>
                                                                                                            <div class="col-6 col-md-2">
                                                                                                                <div class="card <?php if ($inq > 0) {
                                                                                                                                        echo "text-bg-secondary";
                                                                                                                                    } ?>">
                                                                                                                    <div class="card-body p-0 m-0 pb-2">
                                                                                                                        <h4 class="card-title <?php if ($inq > 0) {
                                                                                                                                                    echo "text-light";
                                                                                                                                                } ?>"><?php echo $u['im_meth_detail']; ?></h4>
                                                                                                                        <?php echo $inq; ?>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    <?php
                                                                                                        }
                                                                                                    }
                                                                                                    ?>
                                                                                                </div>
                                                                                            </div>
                                                                                    <?php
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </div><!-- End Default Tabs -->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=============   Income   ===========-->

                            <div class="col-lg-3 col-md-6">
                                <div class="card info-card revenue-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Income <span>| Today</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cash-stack"></i>
                                            </div>
                                            <div class="ps-2">
                                                <h6><?php echo $total_fee + $total_in; ?></h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <div class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                    View Details
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Total Income</h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php
                                                                $on = $_SESSION['office'];
                                                                $osn = $_SESSION['srname'];
                                                                report_in($A, $on, $osn);
                                                                ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=============   Expence   ===========-->

                            <div class="col-lg-3 col-md-6">
                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Expence <span>| Today</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cash-stack"></i>
                                            </div>
                                            <div class="ps-2">
                                                <h6><?php echo $total_ex; ?></h6>
                                                <!--<span class="text-success small pt-1 fw-bold">8%</span>-->
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <div class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                                    View Details
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Total Expence</h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php
                                                                $on = $_SESSION['office'];
                                                                $osn = $_SESSION['srname'];
                                                                report_out($A, $on, $osn);
                                                                ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=============  Inquiry / Admission Detail ==============-->

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Today Details</h5>

                                        <!-- Default Tabs -->
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="inquiry-tab" data-bs-toggle="tab" data-bs-target="#inquiry" type="button" role="tab" aria-controls="inquiry" aria-selected="true">Inquiry</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="admission-tab" data-bs-toggle="tab" data-bs-target="#admission" type="button" role="tab" aria-controls="admission" aria-selected="false">Admission</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-2" id="myTabContent">
                                            <div class="tab-pane fade show active" id="inquiry" role="tabpanel" aria-labelledby="inquiry-tab">
                                                <?php
                                                $condition = array(
                                                    "inq_date" => $A,
                                                    "inq_on" => $_SESSION['office'],
                                                    "inq_osn" => $_SESSION['srname']
                                                );
                                                $data = display_where("bisa_inquiry", $condition);
                                                if ($data) {
                                                ?>
                                                    <table class="table table-borderless table-striped table-hover datatable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Course</th>
                                                                <th scope="col">Phone</th>
                                                                <th scope="col">Inquiry User</th>
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
                                                                    <td><?php echo $user['inq_user']; ?></td>
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
                                                        <p>Today No Inquiey is Entered!</p>
                                                        <hr>
                                                        <p class="mb-0">Please Fill The Inquiries Quick!</p>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                                                <?php
                                                $condition = array(
                                                    "a_date" => $A,
                                                    "a_on" => $_SESSION['office'],
                                                    "a_osn" => $_SESSION['srname']
                                                );
                                                $data = display_where("bisa_admission", $condition);
                                                if ($data) {
                                                ?>
                                                    <table class="table table-borderless table-striped table-hover datatable">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
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
                                                                <th>Refund</th>
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
                                                                <tr class="  <?php echo $user['a_id'] ?>">
                                                                    <td>
                                                                        <?php echo $count;
                                                                        $count++; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $user['a_name']; ?>
                                                                    </td>
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
                                                                                <a href="create-fee.php?edit_fee3=<?php echo $user['a_id']; ?>" class="text-info"><b><?php echo $if3; ?></b></a>
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
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="alert alert-info fade show text-center" role="alert">
                                                        <h4 class="alert-heading">
                                                            <i class="bi bi-exclamation-triangle"></i>
                                                            Warning!!!
                                                        </h4>
                                                        <p>Today No Admission is Entered!</p>
                                                        <hr>
                                                        <p class="mb-0">Please Add The Admission Quick!</p>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div><!-- End Default Tabs -->

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