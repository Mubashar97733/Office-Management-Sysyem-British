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

<body>

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
                    if (isset($_REQUEST['fee'])) {
                        $condition = array(
                            "eb_id" => $_REQUEST['fee']
                        );
                        $data = display_where("bisa_exam_booked", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                                $con = array(
                                    "el_name" => $user['eb_exam_name']
                                );
                                $d = display_where("bisa_exam_list", $con);
                                if ($d) {
                                    foreach ($d as $u) {
                                        $profit = $u['el_st_pay'] - $u['el_in_pay'];
                                        ?>
                                        <div class="card mb-3">
                                            <div class="card-body">

                                                <div class="pt-4 pb-4">
                                                    <h5 class="card-title text-center pb-0 fs-4">Exam Fee</h5>
                                                </div>

                                                <form class="row g-3" id="fee" method="post">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="number" value="<?php echo $u['el_in_pay']; ?>" class="form-control eb_bi_fee" id="eb_bi_fee" placeholder="Fee Paid" disabled required>
                                                            <label for="eb_bi_fee">Fee Paid <span style="color: red;">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="number" value="<?php echo $profit; ?>" class="form-control eb_bi_profit" id="eb_bi_profit" placeholder="Profit" disabled required>
                                                            <label for="eb_bi_profit">Profit <span style="color: red;">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <select name="eb_bi_pay_meth" class="form-control eb_bi_pay_meth" id="eb_bi_pay_meth" required>
                                                                <option value="" selected disabled>Select</option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="JazzCash">JazzCash</option>
                                                                <option value="EasyPaisa">EasyPaisa</option>
                                                                <option value="HBL">HBL</option>
                                                                <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                            </select>
                                                            <label for="eb_bi_pay_meth">Payment Method <span style="color: red;">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="exam-fee"></div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                                <script>
                                                    const fee = document.getElementById('fee');
                                                    fee.addEventListener('submit', (event) => {
                                                        event.preventDefault();
                                                        DEF('<?php echo $user['eb_id']; ?>');
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
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