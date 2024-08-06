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
                    if (isset($_REQUEST['edit_course'])) {
                        $condition = array(
                            "co_id" => $_REQUEST['edit_course']
                        );
                        $data = display_where("bisa_course", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Course</h5>
                                        </div>

                                        <form class="row g-3" id="update-course">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['co_name']; ?>" class="form-control co_name" id="co_name" placeholder="Name" required>
                                                    <label for="co_name">Name <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['co_fee']; ?>" class="form-control co_fee" id="co_fee" placeholder="Fee" required>
                                                    <label for="co_fee">Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <?php
                                            $d = display("bisa_office");
                                            ?>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="co_on" class="form-control co_on" id="co_on">
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                        ?>
                                                                <option value="<?php echo $u['o_name']; ?>" <?php if($user['co_on']==$u['o_name']){ echo "selected"; } ?>><?php echo $u['o_name']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="co_on">Institute <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="co_osn" class="form-control co_osn" id="co_osn">
                                                        <option value="" selected disabled>Select</option>
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                        ?>
                                                                <option value="<?php echo $u['o_srname']; ?>" <?php if($user['co_osn']==$u['o_srname']){ echo "selected"; } ?>><?php echo $u['o_srname']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="co_osn">Branch <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['co_detail']; ?>" class="form-control co_detail" id="co_detail" placeholder="Detail" required>
                                                    <label for="co_detail">Details <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="update-course"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const update = document.getElementById('update-course');
                                            update.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_course("<?php echo $user['co_id'] . "," . $user['co_name']; ?>");
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
                                    <h5 class="card-title text-center pb-0 fs-4">Create Course</h5>
                                </div>

                                <form class="row g-3" id="create-course">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control co_name" id="co_name" placeholder="Name" required>
                                            <label for="co_name">Name <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="number" min="0" class="form-control co_fee" id="co_fee" placeholder="Fee" required>
                                            <label for="co_fee">Fee <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <?php
                                    $data = display("bisa_office");
                                    ?>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="co_on" class="form-control co_on" id="co_on">
                                                <?php
                                                if ($data) {
                                                    foreach ($data as $user) {
                                                ?>
                                                        <option value="<?php echo $user['o_name']; ?>"><?php echo $user['o_name']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="co_on">Institute <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="co_osn" class="form-control co_osn" id="co_osn">
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                if ($data) {
                                                    foreach ($data as $user) {
                                                ?>
                                                        <option value="<?php echo $user['o_srname']; ?>"><?php echo $user['o_srname']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="co_osn">Branch <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control co_detail" id="co_detail" placeholder="Details" required>
                                            <label for="co_detail">Details <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="create-course"></div>
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
                        <a href="admin-course.php" class="d-flex align-items-center btn btn-secondary">Back</a>
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
        const cr = document.getElementById('create-course');
        cr.addEventListener('submit', (event) => {
            event.preventDefault();
            create_course();
        })
    </script>
</body>

</html>