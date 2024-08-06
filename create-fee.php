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
                    if (isset($_REQUEST['pay_fee1'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['pay_fee1']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Add Fee (1<sup>st</sup> Installment)</h5>
                                        </div>
                                        <form class="row g-3" id="create-fee1">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" max="<?php echo $user['a_tfee']; ?>" class="form-control a_ifee1" id="a_ifee1" placeholder="First Fee" required>
                                                    <label for="a_ifee1">First Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $user['a_date']; ?>" max="<?php echo $A; ?>" value="<?php echo $A; ?>" class="form-control a_ifee1_date" id="a_ifee1_date" placeholder="Payment Date" required>
                                                    <label for="a_ifee1_date">Payment Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ifee1_meth" id="a_ifee1_meth" class="form-control a_ifee1_meth" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="JazzCash">JazzCash</option>
                                                        <option value="EasyPaisa">EasyPaisa</option>
                                                        <option value="HBL">HBL</option>
                                                        <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ifee1_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $A; ?>" value="<?php echo $D7; ?>" class="form-control a_re_date1" id="a_re_date1" placeholder="Next Payment Date">
                                                    <label for="a_re_date1">Next Payment Date</label>
                                                </div>
                                            </div>
                                            <div class="create_fee1"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const c1 = document.getElementById('create-fee1');
                                            c1.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                create_pay1(<?php echo $user['a_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['edit_fee1'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['edit_fee1']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Fee (1<sup>st</sup> Installment)</h5>
                                        </div>
                                        <form class="row g-3" id="update-fee1">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_fee1'] ?>" max="<?php echo $user['a_tfee']; ?>" class="form-control a_ifee1" id="a_ifee1" placeholder="First Fee" required>
                                                    <label for="a_ifee1">First Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_fee1_date']; ?>" min="<?php echo $user['a_date']; ?>" max="<?php echo $A; ?>" class="form-control a_ifee1_date" id="a_ifee1_date" placeholder="Payment Date" required>
                                                    <label for="a_ifee1_date">Payment Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ifee1_meth" id="a_ifee1_meth" class="form-control a_ifee1_meth" required>
                                                        <option value="Cash" <?php if($user['a_fee1_meth']=="Cash"){ echo "selected"; } ?>>Cash</option>
                                                        <option value="JazzCash" <?php if($user['a_fee1_meth']=="JazzCash"){ echo "selected"; } ?>>JazzCash</option>
                                                        <option value="EasyPaisa" <?php if($user['a_fee1_meth']=="EasyPaisa"){ echo "selected"; } ?>>EasyPaisa</option>
                                                        <option value="HBL" <?php if($user['a_fee1_meth']=="HBL"){ echo "selected"; } ?>>HBL</option>
                                                        <option value="Bank-Al-Islamic" <?php if($user['a_fee1_meth']=="Bank-Al-Islamic"){ echo "selected"; } ?>>Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ifee1_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_remind_date1']; ?>" min="<?php echo $user['a_remind_date1']; ?>" class="form-control a_re_date1" id="a_re_date1" placeholder="Next Payment Date">
                                                    <label for="a_re_date1">Next Payment Date</label>
                                                </div>
                                            </div>
                                            <div class="update_fee1"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const u1 = document.getElementById('update-fee1');
                                            u1.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_pay1(<?php echo $user['a_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['pay_fee2'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['pay_fee2']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Add Fee (2<sup>nd</sup> Installment)</h5>
                                        </div>
                                        <form class="row g-3" id="create-fee2">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" max="<?php echo $user['a_tfee'] - $user['a_fee1']; ?>" class="form-control a_ifee2" id="a_ifee2" placeholder="Second Fee" required>
                                                    <label for="a_ifee2">Second Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $user['a_fee2_date']; ?>" max="<?php echo $A; ?>" value="<?php echo $A; ?>" class="form-control a_ifee2_date" id="a_ifee2_date" placeholder="Payment Date" required>
                                                    <label for="a_ifee2_date">Payment Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ifee2_meth" id="a_ifee2_meth" class="form-control a_ifee2_meth" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="JazzCash">JazzCash</option>
                                                        <option value="EasyPaisa">EasyPaisa</option>
                                                        <option value="HBL">HBL</option>
                                                        <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ifee2_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $A; ?>" value="<?php echo $D7; ?>" class="form-control a_re_date2" id="a_re_date2" placeholder="Next Payment Date">
                                                    <label for="a_re_date2">Next Payment Date</label>
                                                </div>
                                            </div>
                                            <div class="create_fee2"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const c2 = document.getElementById('create-fee2');
                                            c2.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                create_pay2(<?php echo $user['a_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['edit_fee2'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['edit_fee2']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Fee (2<sup>nd</sup> Installment)</h5>
                                        </div>
                                        <form class="row g-3" id="update-fee2">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_fee2'] ?>" max="<?php echo $user['a_tfee'] - $user['a_fee1']; ?>" class="form-control a_ifee2" id="a_ifee2" placeholder="Second Fee" required>
                                                    <label for="a_ifee1">Second Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_fee2_date']; ?>" min="<?php echo $user['a_fee1_date']; ?>" max="<?php echo $A; ?>" class="form-control a_ifee2_date" id="a_ifee2_date" placeholder="Payment Date" required>
                                                    <label for="a_ifee2_date">Payment Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ifee2_meth" id="a_fee2_meth" class="form-control a_ifee2_meth" required>
                                                        <option value="Cash" <?php if($user['a_fee2_meth']=="Cash"){ echo "selected"; } ?>>Cash</option>
                                                        <option value="JazzCash" <?php if($user['a_fee2_meth']=="JazzCash"){ echo "selected"; } ?>>JazzCash</option>
                                                        <option value="EasyPaisa" <?php if($user['a_fee2_meth']=="EasyPaisa"){ echo "selected"; } ?>>EasyPaisa</option>
                                                        <option value="HBL" <?php if($user['a_fee2_meth']=="HBL"){ echo "selected"; } ?>>HBL</option>
                                                        <option value="Bank-Al-Islamic" <?php if($user['a_fee2_meth']=="Bank-Al-Islamic"){ echo "selected"; } ?>>Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ifee2_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_remind_date2']; ?>" min="<?php echo $A; ?>" class="form-control a_re_date2" id="a_re_date2" placeholder="Next Payment Date">
                                                    <label for="a_re_date2">Next Payment Date</label>
                                                </div>
                                            </div>
                                            <div class="update_fee2"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const u2 = document.getElementById('update-fee2');
                                            u2.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_pay2(<?php echo $user['a_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['pay_fee3'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['pay_fee3']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Add Fee (3<sup>rd</sup> Installment)</h5>
                                        </div>
                                        <form class="row g-3" id="create-fee3">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" max="<?php echo $user['a_tfee'] - $user['a_fee1'] - $user['a_fee2']; ?>" class="form-control a_ifee3" id="a_ifee3" placeholder="Third Fee" required>
                                                    <label for="a_ifee3">Third Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $user['a_fee2_date']; ?>" max="<?php echo $A; ?>" value="<?php echo $A; ?>" class="form-control a_ifee3_date" id="a_ifee3_date" placeholder="Payment Date" required>
                                                    <label for="a_ifee3_date">Payment Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ifee3_meth" id="a_ifee3_meth" class="form-control a_ifee3_meth" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="JazzCash">JazzCash</option>
                                                        <option value="EasyPaisa">EasyPaisa</option>
                                                        <option value="HBL">HBL</option>
                                                        <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ifee3_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $A; ?>" value="<?php echo $D7; ?>" class="form-control a_re_date3" id="a_re_date3" placeholder="Next Payment Date">
                                                    <label for="a_re_date3">Next Payment Date</label>
                                                </div>
                                            </div>
                                            <div class="create_fee3"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const c3 = document.getElementById('create-fee3');
                                            c3.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                create_pay3(<?php echo $user['a_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['edit_fee3'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['edit_fee3']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Fee (3<sup>rd</sup> Installment)</h5>
                                        </div>
                                        <form class="row g-3" id="update-fee3">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_fee3'] ?>" max="<?php echo $user['a_tfee'] - $user['a_fee1'] - $user['a_fee2'] ; ?>" class="form-control a_ifee3" id="a_ifee3" placeholder="Third Fee" required>
                                                    <label for="a_ifee1">First Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_fee3_date']; ?>" min="<?php echo $user['a_fee2_date']; ?>" max="<?php echo $A; ?>" class="form-control a_ifee3_date" id="a_ifee3_date" placeholder="Payment Date" required>
                                                    <label for="a_ifee3_date">Payment Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ifee1_meth" id="a_fee3_meth" class="form-control a_ifee3_meth" required>
                                                        <option value="Cash" <?php if($user['a_fee3_meth']=="Cash"){ echo "selected"; } ?>>Cash</option>
                                                        <option value="JazzCash" <?php if($user['a_fee3_meth']=="JazzCash"){ echo "selected"; } ?>>JazzCash</option>
                                                        <option value="EasyPaisa" <?php if($user['a_fee3_meth']=="EasyPaisa"){ echo "selected"; } ?>>EasyPaisa</option>
                                                        <option value="HBL" <?php if($user['a_fee3_meth']=="HBL"){ echo "selected"; } ?>>HBL</option>
                                                        <option value="Bank-Al-Islamic" <?php if($user['a_fee3_meth']=="Bank-Al-Islamic"){ echo "selected"; } ?>>Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ifee3_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_remind_date3']; ?>" min="<?php echo $A; ?>" class="form-control a_re_date3" id="a_re_date3" placeholder="Next Payment Date">
                                                    <label for="a_re_date3">Next Payment Date</label>
                                                </div>
                                            </div>
                                            <div class="update_fee3"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const u3 = document.getElementById('update-fee3');
                                            u3.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_pay3(<?php echo $user['a_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['pay_refund'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['pay_refund']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Refund</h5>
                                        </div>

                                        <form class="row g-3" id="create-refund">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" max="<?php echo $user['a_fee1'] + $user['a_fee2'] + $user['a_fee3']; ?>" class="form-control a_refund" id="a_refund" placeholder="Refund" required>
                                                    <label for="a_refund">Refund <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $user['a_date']; ?>" max="<?php echo $A; ?>" value="<?php echo $A; ?>" class="form-control a_re_date" id="a_re_date" placeholder="Refund Date" required>
                                                    <label for="a_re_date">Refund Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <select name="a_re_meth" id="a_re_meth" class="form-control a_re_meth" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="JazzCash">JazzCash</option>
                                                        <option value="EasyPaisa">EasyPaisa</option>
                                                        <option value="HBL">HBL</option>
                                                        <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_re_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="create_refund"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const c4 = document.getElementById('create-refund');
                                            c4.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                create_refund('<?php echo $user['a_id']; ?>');
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['edit_refund'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['edit_refund']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Refund</h5>
                                        </div>

                                        <form class="row g-3" id="update-refund">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_refund'] ?>" max="<?php echo $user['a_fee1'] + $user['a_fee2'] + $user['a_fee3'] ; ?>" class="form-control a_refund" id="a_refund" placeholder="Refund" required>
                                                    <label for="a_refund">First Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_re_date']; ?>" min="<?php echo $user['a_date']; ?>" max="<?php echo $A; ?>" class="form-control a_re_date" id="a_re_date" placeholder="Refund Date" required>
                                                    <label for="a_re_date">Refund Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <select name="a_re_meth" id="a_re_meth" class="form-control a_re_meth" required>
                                                        <option value="Cash" <?php if($user['a_re_meth']=="Cash"){ echo "selected"; } ?>>Cash</option>
                                                        <option value="JazzCash" <?php if($user['a_re_meth']=="JazzCash"){ echo "selected"; } ?>>JazzCash</option>
                                                        <option value="EasyPaisa" <?php if($user['a_re_meth']=="EasyPaisa"){ echo "selected"; } ?>>EasyPaisa</option>
                                                        <option value="HBL" <?php if($user['a_re_meth']=="HBL"){ echo "selected"; } ?>>HBL</option>
                                                        <option value="Bank-Al-Islamic" <?php if($user['a_re_meth']=="Bank-Al-Islamic"){ echo "selected"; } ?>>Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_re_meth">Refund Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="update_refund"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const u4 = document.getElementById('update-refund');
                                            u4.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_refund('<?php echo $user['a_id']; ?>');
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['pay_extra'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['pay_extra']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Pay Extra Fee</h5>
                                        </div>

                                        <form class="row g-3" id="create-refund">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control a_extra" id="a_extra" placeholder="Extra Fee" required>
                                                    <label for="a_extra">Extra Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" min="<?php echo $user['a_date']; ?>" max="<?php echo $A; ?>" value="<?php echo $A; ?>" class="form-control a_ex_date" id="a_ex_date" placeholder="Date" required>
                                                    <label for="a_ex_date">Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ex_meth" id="a_ex_meth" class="form-control a_ex_meth" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="JazzCash">JazzCash</option>
                                                        <option value="EasyPaisa">EasyPaisa</option>
                                                        <option value="HBL">HBL</option>
                                                        <option value="Bank-Al-Islamic">Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ex_meth">Payment Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control a_ex_comment" id="a_ex_comment" placeholder="Comments" required>
                                                    <label for="a_ex_comment">Comments <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="create_extra_fee"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const c5 = document.getElementById('create-refund');
                                            c5.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                create_extra_fee('<?php echo $user['a_id']; ?>');
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['edit_extra'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['edit_extra']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Refund</h5>
                                        </div>
                                        <form class="row g-3" id="update-refund">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_ex_fee'] ?>" class="form-control a_ex_fee" id="a_ex_fee" placeholder="Fee" required>
                                                    <label for="a_ex_fee">Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_ex_date']; ?>" min="<?php echo $user['a_date']; ?>" max="<?php echo $A; ?>" class="form-control a_ex_date" id="a_ex_date" placeholder="Date" required>
                                                    <label for="a_ex_date">Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_ex_meth" id="a_ex_meth" class="form-control a_ex_meth" required>
                                                        <option value="Cash" <?php if($user['a_ex_meth']=="Cash"){ echo "selected"; } ?>>Cash</option>
                                                        <option value="JazzCash" <?php if($user['a_ex_meth']=="JazzCash"){ echo "selected"; } ?>>JazzCash</option>
                                                        <option value="EasyPaisa" <?php if($user['a_ex_meth']=="EasyPaisa"){ echo "selected"; } ?>>EasyPaisa</option>
                                                        <option value="HBL" <?php if($user['a_ex_meth']=="HBL"){ echo "selected"; } ?>>HBL</option>
                                                        <option value="Bank-Al-Islamic" <?php if($user['a_ex_meth']=="Bank-Al-Islamic"){ echo "selected"; } ?>>Bank-Al-Islamic</option>
                                                    </select>
                                                    <label for="a_ex_meth">Refund Method <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['a_ex_com']; ?>" class="form-control a_ex_com" id="a_ex_com" placeholder="Comments" required>
                                                    <label for="a_ex_com">Comments <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="update_refund"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const u5 = document.getElementById('update-refund');
                                            u5.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_extra_pay('<?php echo $user['a_id']; ?>');
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }
                    ?>
                    <div class="d-flex justify-content-center py-3">
                        <a href="record-admission.php" class="d-flex align-items-center btn btn-secondary">Back</a>
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