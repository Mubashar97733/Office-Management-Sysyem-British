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
                    if (isset($_REQUEST['edit_expense'])) {
                        $condition = array(
                            "io_id" => $_REQUEST['edit_expense']
                        );
                        $data = display_where("bisa_in_out", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                    ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Expence</h5>
                                        </div>

                                        <form class="row g-3" id="update-expence">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['io_detail'] ?>" class="form-control e_de" id="e_de" placeholder="Details" required>
                                                    <label for="e_de">Details <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['io_rs'] ?>" min="0" class="form-control e_rs" id="e_rs" placeholder="e_rs" required>
                                                    <label for="e_rs">Expence <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <select name="e_cat" id="e_cat" class="form-control e_cat">
                                                        <option value="Tea" <?php if ($user['io_cat'] == "Tea") {
                                                                                echo "selected";
                                                                            } ?>>Tea</option>
                                                        <option value="Lunch" <?php if ($user['io_cat'] == "Lunch") {
                                                                                    echo "selected";
                                                                                } ?>>Lunch</option>
                                                        <option value="Rent" <?php if ($user['io_cat'] == "Rent") {
                                                                                    echo "selected";
                                                                                } ?>>Rent</option>
                                                        <option value="Teachers Pay" <?php if ($user['io_cat'] == "Teachers Pay") {
                                                                                            echo "selected";
                                                                                        } ?>>Teachers Pay</option>
                                                        <option value="Sir Abid" <?php if ($user['io_cat'] == "Sir Abid") {
                                                                                        echo "selected";
                                                                                    } ?>>Sir Abid</option>
                                                        <option value="Others" <?php if ($user['io_cat'] == "Others") {
                                                                                    echo "selected";
                                                                                } ?>>Others</option>
                                                    </select>
                                                    <label for="e_cat">Category <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select name="e_meth" id="e_meth" class="form-control e_meth">
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
                                                    <label for="e_meth">Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['io_date'] ?>" max="<?php echo $A; ?>" class="form-control e_date" id="e_date" placeholder="Date" required>
                                                    <label for="e_date">Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="update_expense"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const ur = document.getElementById('update-expence');
                                            ur.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_expense('<?php echo $user['io_id']; ?>');
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
                                    <h5 class="card-title text-center pb-0 fs-4">Create Expence</h5>
                                </div>

                                <form class="row g-3" id="create-expence">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control e_de" id="e_de" placeholder="Details" required>
                                            <label for="e_de">Details <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="number" min="0" class="form-control e_rs" id="e_rs" placeholder="e_rs" required>
                                            <label for="e_rs">Expence <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="e_cat" id="e_cat" class="form-control e_cat">
                                                <option value="" selected disabled>Select</option>
                                                <option value="Tea">Tea</option>
                                                <option value="Lunch">Lunch</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Teachers Pay">Teachers Pay</option>
                                                <option value="Sir Abid">Sir Abid</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <label for="e_cat">Category <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="e_meth" id="e_meth" class="form-control e_meth">
                                                <option value="" selected disabled>Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="JazzCash">JazzCash</option>
                                                <option value="EasyPaisa">EasyPaisa</option>
                                                <option value="HBL">HBL</option>
                                                <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                            </select>
                                            <label for="e_meth">Method <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <?php
                                    $d = display("bisa_office");
                                    if ($_SESSION['status'] == "Admin") {
                                    ?>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select name="e_on" id="e_on" class="form-control e_on">
                                                    <?php
                                                    if ($d) {
                                                        foreach ($d as $u) {
                                                    ?>
                                                            <option value="<?php echo $u['o_name']; ?>"><?php echo $u['o_name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="e_on">Institute <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select name="e_osn" id="e_osn" class="form-control e_osn">
                                                    <option value="" selected disabled>Select</option>
                                                    <?php
                                                    if ($d) {
                                                        foreach ($d as $u) {
                                                    ?>
                                                            <option value="<?php echo $u['o_srname']; ?>"><?php echo $u['o_srname']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="e_osn">Branch <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="create_expense"></div>
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
        const cr = document.getElementById('create-expence');
        cr.addEventListener('submit', (event) => {
            event.preventDefault();
            <?php
            if($_SESSION['status']=="Admin"){
                ?>create_expense_admin();<?php
            }else{
                ?>create_expense();<?php
            }
            ?>
        })
    </script>
</body>

</html>