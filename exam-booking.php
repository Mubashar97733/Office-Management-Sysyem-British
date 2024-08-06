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
                <div class="col-12 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-5">
                        <a class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">British Institute</span>
                        </a>
                    </div><!-- End Logo -->

                    <?php
                    if (isset($_REQUEST['edit_exam'])) {
                        $condition = array(
                            "eb_id" => $_REQUEST['edit_exam']
                        );
                        $data = display_where("bisa_exam_booked", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                    ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Exam Booking</h5>
                                        </div>

                                        <form class="" id="update-booking" method="post">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input type="text" value="<?php echo $user['eb_fname']; ?>" class="form-control eb_fname" id="eb_fname" placeholder="First Name" required>
                                                        <label for="eb_fname">First Name <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input type="text" value="<?php echo $user['eb_lname']; ?>" class="form-control eb_lname" id="eb_lname" placeholder="Last Name" required>
                                                        <label for="eb_lname">Last Name <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="date" value="<?php echo $user['eb_dob']; ?>" max="<?php echo date("Y-m-d", strtotime("-15years")); ?>" class="form-control eb_dob" id="eb_dob" placeholder="Date of Birth" required>
                                                        <label for="eb_dob">Date of Birth <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="text" value="<?php echo $user['eb_city']; ?>" class="form-control eb_city" id="eb_city" placeholder="City" required>
                                                        <label for="eb_city">City <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="email" value="<?php echo $user['eb_email']; ?>" class="form-control eb_email" id="eb_email" placeholder="Email" required>
                                                        <label for="eb_email">Email <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="date" value="<?php echo $user['eb_edate']; ?>" min="<?php echo date("Y-m-d", strtotime("+1days")) ?>" class="form-control eb_edate" id="eb_edate" placeholder="Exam Date" required>
                                                        <label for="eb_edate">Exam Date <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="tel" value="<?php echo $user['eb_phone']; ?>" class="form-control eb_phone" id="eb_phone" placeholder="Phone" required>
                                                        <label for="eb_phone">Phone <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="text" value="<?php echo $user['eb_cnic']; ?>" maxlength="14" minlength="13" class="form-control eb_cnic" id="eb_cnic" placeholder="CNIC No / Passport No" required>
                                                        <label for="eb_cnic">CNIC No / Passport No <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <input type="date" value="<?php echo $user['eb_cnic_exp_date']; ?>" class="form-control eb_cnic_exp_date" id="eb_cnic_exp_date" placeholder="CNIC / Passport Expiry Date" required>
                                                        <label for="eb_cnic_exp_date">CNIC / Passport Expiry Date <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <select name="eb_status" id="eb_status" class="form-control eb_status">
                                                            <option value="Indoor" <?php if ($user['eb_status'] == "Indoor") {
                                                                                        echo "selected";
                                                                                    } ?>>Indoor</option>
                                                            <option value="Outdoor" <?php if ($user['eb_status'] == "Outdoor") {
                                                                                        echo "selected";
                                                                                    } ?>>Outdoor</option>
                                                        </select>
                                                        <label for="eb_status">Student Status <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h5 class="card-title text-center pb-0 fs-4">Exams</h5>
                                                </div>
                                            </div>
                                            <?php $d = display("bisa_exam_list"); ?>
                                            <div class="exam-detail row g-3 mt-1">
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                    <select name="eb_exam_name" onchange="exam_de(this.value)" id="eb_exam_name" class="form-control eb_exam_name">
                                                    <?php
                                                    if ($d) {
                                                        foreach ($d as $u) {
                                                    ?>
                                                            <option value="<?php echo $u['el_name']; ?>"><?php echo $u['el_name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                        <label for="eb_exam_name">Exam <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input type="number" value="<?php echo $user['eb_fee']; ?>" id="eb_fee" class="form-control eb_fee" disabled placeholder="Exam Fee" required>
                                                        <label for="eb_fee">Exam Fee <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select name="eb_fee_meth" id="eb_fee_meth" class="form-control eb_fee_meth" placeholder="Payment Method" required>
                                                            <option value="Cash" <?php if ($user['eb_fee_meth' == "Cash"]) {
                                                                                        echo "selected";
                                                                                    } ?>>Cash</option>
                                                            <option value="JazzCash" <?php if ($user['eb_fee_meth' == "JazzCash"]) {
                                                                                            echo "selected";
                                                                                        } ?>>JazzCash</option>
                                                            <option value="EasyPaisa" <?php if ($user['eb_fee_meth' == "EasyPaisa"]) {
                                                                                            echo "selected";
                                                                                        } ?>>EasyPaisa</option>
                                                            <option value="HBL" <?php if ($user['eb_fee_meth' == "HBL"]) {
                                                                                    echo "selected";
                                                                                } ?>>HBL</option>
                                                            <option value="Bank-Al-Islamic" <?php if ($user['eb_fee_meth' == "Bank-Al-Islamic"]) {
                                                                                                echo "selected";
                                                                                            } ?>>Bank-Al-Islamic</option>
                                                            <option value="self-paid" <?php if ($user['eb_fee_meth' == "self-paid"]) {
                                                                                            echo "selected";
                                                                                        } ?>>Self Paid</option>
                                                        </select>
                                                        <label for="eb_fee_meth">Payment Method <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="update-booking"></div>
                                            <div class="row g-3 mt-2 text-center">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                            const ur = document.getElementById('update-booking');
                                            ur.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_exam('<?php echo $user['eb_id']; ?>');
                                            })
                                        </script>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                    } else {
                        ?>
                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-4">
                                    <h5 class="card-title text-center pb-0 fs-4">Exam Booking</h5>
                                </div>

                                <form class="" id="exam-booking" method="post">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control eb_fname" id="eb_fname" placeholder="First Name" required>
                                                <label for="eb_fname">First Name <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control eb_lname" id="eb_lname" placeholder="Last Name" required>
                                                <label for="eb_lname">Last Name <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="date" value="<?php echo date("Y-m-d", strtotime("-15years")); ?>" max="<?php echo date("Y-m-d", strtotime("-15years")); ?>" class="form-control eb_dob" id="eb_dob" placeholder="Date of Birth" required>
                                                <label for="eb_dob">Date of Birth <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control eb_city" id="eb_city" placeholder="Exam City" required>
                                                <label for="eb_city">Exam City <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control eb_email" id="eb_email" placeholder="Email" required>
                                                <label for="eb_email">Email <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="date" value="<?php echo date("Y-m-d", strtotime("+1days")) ?>" min="<?php echo date("Y-m-d", strtotime("+1days")) ?>" class="form-control eb_edate" id="eb_edate" placeholder="Exam Date" required>
                                                <label for="eb_edate">Exam Date <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control eb_phone" id="eb_phone" placeholder="Phone" required>
                                                <label for="eb_phone">Phone <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control eb_cnic" id="eb_cnic" placeholder="CNIC No / Passport No" required>
                                                <label for="eb_cnic">CNIC No / Passport No <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input type="date" value="" class="form-control eb_cnic_exp_date" id="eb_cnic_exp_date" placeholder="CNIC / Passport Expiry Date" required>
                                                <label for="eb_cnic_exp_date">CNIC / Passport Expiry Date <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <select name="eb_status" id="eb_status" class="form-control eb_status">
                                                    <option value="Indoor" selected>Indoor</option>
                                                    <option value="Outdoor">Outdoor</option>
                                                </select>
                                                <label for="eb_status">Student Status <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="card-title text-center pb-0 fs-4">Exams</h5>
                                        </div>
                                        <?php
                                        $d = display("bisa_exam_list");
                                        ?>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select name="eb_exam_name" onchange="exam_de(this.value)" id="eb_exam_name" class="form-control eb_exam_name">
                                                    <option value="" selected disabled>Select</option>
                                                    <?php
                                                    if ($d) {
                                                        foreach ($d as $u) {
                                                    ?>
                                                            <option value="<?php echo $u['el_name']; ?>"><?php echo $u['el_name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="eb_exam_name">Exam <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="number" id="eb_fee" class="form-control eb_fee" disabled placeholder="Exam Fee" required>
                                                <label for="eb_fee">Exam Fee <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select name="eb_fee_meth" id="eb_fee_meth" class="form-control eb_fee_meth" placeholder="Payment Method" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="JazzCash">JazzCash</option>
                                                    <option value="EasyPaisa">EasyPaisa</option>
                                                    <option value="HBL">HBL</option>
                                                    <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                    <option value="self-paid">Self Paid</option>
                                                </select>
                                                <label for="eb_fee_meth">Payment Method <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exam-booking"></div>
                                    <div class="row g-3 mt-2 text-center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    const cr = document.getElementById('exam-booking');
                                    cr.addEventListener('submit', (event) => {
                                        event.preventDefault();
                                        create_exam();
                                    })
                                </script>
                            </div>
                        </div>
                    <?php
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