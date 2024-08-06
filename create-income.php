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
                    if (isset($_REQUEST['edit_income'])) {
                        $condition = array(
                            "io_id" => $_REQUEST['edit_income']
                        );
                        $data = display_where("bisa_in_out", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Income</h5>
                                        </div>

                                        <form class="row g-3" id="update-income">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['io_detail'] ?>" class="form-control i_de" id="i_de" placeholder="Details" required>
                                                    <label for="i_de">Details <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['io_rs'] ?>" min="0" class="form-control i_rs" id="i_rs" placeholder="Income" required>
                                                    <label for="i_rs">Income <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select name="i_meth" id="i_meth" class="form-control i_meth">
                                                        <option value="Cash" <?php if ($user['io_meth'] == "Cash") {
                                                                                    echo "selected";
                                                                                } ?>>Cash</option>
                                                        <option value="JazzCash" <?php if ($user['io_meth'] == "JazzCash") {
                                                                                        echo "selected";
                                                                                    } ?>>JazzCash</option>
                                                        <option value="EasyPaisa" <?php if ($user['io_meth'] == "EasyPaisa") {
                                                                                        echo "selected";
                                                                                    } ?>>EasyPaisa</option>
                                                        <option value="HBL" <?php if ($user['io_meth'] == "HBL") {
                                                                                echo "selected";
                                                                            } ?>>HBL</option>
                                                        <option value="Bank-Al-Islamic" <?php if ($user['io_meth'] == "Bank-Al-Islamic") {
                                                                                            echo "selected";
                                                                                        } ?>>Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="i_meth">Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['io_date'] ?>" max="<?php echo $A; ?>" class="form-control i_date" id="i_date" placeholder="Date" required>
                                                    <label for="i_date">Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="update_income"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const ur = document.getElementById('update-income');
                                            ur.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_income('<?php echo $user['io_id']; ?>');
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
                                    <h5 class="card-title text-center pb-0 fs-4">Create Income</h5>
                                </div>

                                <form class="row g-3" id="create-income">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control i_de" id="i_de" placeholder="Details" required>
                                            <label for="i_de">Details <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" min="0" class="form-control i_rs" id="i_rs" placeholder="i_rs" required>
                                            <label for="i_rs">Income <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select name="i_meth" id="i_meth" class="form-control i_meth">
                                                <option value="" selected disabled>Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="JazzCash">JazzCash</option>
                                                <option value="EasyPaisa">EasyPaisa</option>
                                                <option value="HBL">HBL</option>
                                                <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                            </select>
                                            <label for="i_meth">Method <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <?php
                                    $d = display("bisa_office");
                                    if($_SESSION['status']=="Admin"){
                                        ?>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                            <select name="i_on" id="i_on" class="form-control i_on">
                                                <?php
                                                if($d){
                                                    foreach($d as $u){
                                                        ?>
                                                        <option value="<?php echo $u['o_name']; ?>"><?php echo $u['o_name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="i_on">Institute <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                            <select name="i_osn" id="i_osn" class="form-control i_osn">
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                if($d){
                                                    foreach($d as $u){
                                                        ?>
                                                        <option value="<?php echo $u['o_srname']; ?>"><?php echo $u['o_srname']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="i_osn">Branch <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="create_income"></div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="d-flex justify-content-center py-3">
                        <button onclick="history.back();" class="d-flex align-items-center btn btn-secondary">Back</button>
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
    <script>
        const cr = document.getElementById('create-income');
        cr.addEventListener('submit', (event) => {
            event.preventDefault();
            <?php
            if($_SESSION['status']=="Admin"){
                ?>create_income_admin();<?php
            }else{
                ?>create_income();<?php
            }
            ?>
        })
    </script>
</body>

</html>