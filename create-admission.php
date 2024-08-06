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
                    $course = display_order("bisa_course", "co_name");
                    if (isset($_REQUEST['edit_admission'])) {
                        $condition = array(
                            "a_id" => $_REQUEST['edit_admission']
                        );
                        $data = display_where("bisa_admission", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Create Admission</h5>
                                        </div>

                                        <form class="row g-3" id="update-admission" method="post">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['a_name']; ?>" class="form-control a_name" id="a_name" placeholder="Name" required>
                                                    <label for="a_name">Name <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['a_fname']; ?>" class="form-control a_faname" id="a_faname" placeholder="Father Name">
                                                    <label for="a_faname">Father Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_cnic']; ?>" maxlength="13" minlength="13" class="form-control a_cnic" id="a_cnic" placeholder="CNIC">
                                                    <label for="a_cnic">CNIC</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['a_area']; ?>" class="form-control a_area" id="a_area" placeholder="Address">
                                                    <label for="a_area">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_sex" class="form-control a_sex" id="a_sex" required>
                                                        <option value="Male" <?php if($user['a_sex']=="Male"){ echo "selected"; } ?>>Male</option>
                                                        <option value="Female" <?php if($user['a_sex']=="Female"){ echo "selected"; } ?>>Female</option>
                                                    </select>
                                                    <label for="a_sex">Gender <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_dob']; ?>" class="form-control a_dob" id="a_dob" placeholder="Date of Birth" required>
                                                    <label for="a_dob">Date of Birth<span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="tel" value="<?php echo $user['a_phone']; ?>" class="form-control a_phone" id="a_phone" placeholder="Phone" required>
                                                    <label for="a_phone">Phone <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="email" value="<?php echo $user['a_email']; ?>" class="form-control a_email" id="a_email" placeholder="Email">
                                                    <label for="a_email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_thro" class="form-control a_thro" id="a_thro">
                                                        <option value="Visit" <?php if($user['a_method']=="Visit"){ echo "selected"; } ?>>Visit</option>
                                                        <option value="Online" <?php if($user['a_method']=="Online"){ echo "selected"; } ?>>Online</option>
                                                    </select>
                                                    <label for="a_thro">Admission Through <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['a_date']; ?>" class="form-control a_date" id="a_date" placeholder="Admission Date">
                                                    <label for="a_date">Admission Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_rollno']; ?>" class="form-control a_rollno" id="a_rollno" placeholder="Roll No">
                                                    <label for="a_rollno">Roll No <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <?php
                                            $dat = display("bisa_office");
                                            if ($_SESSION['status'] == "Admin") {
                                            ?>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select name="a_on" onchange="on(this.vale)" id="a_on" class="form-control a_on">
                                                            <?php
                                                            if ($dat) {
                                                                foreach ($dat as $us) {
                                                            ?>
                                                                    <option value="<?php echo $us['o_name']; ?>" <?php if($user['a_on'] ==$us['o_name']){ echo "selected"; } ?> ><?php echo $us['o_name']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="a_on">Institute <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select name="a_osn" onchange="osn(this.value)" id="a_osn" class="form-control a_osn">
                                                            <?php
                                                            if ($dat) {
                                                                foreach ($dat as $us) {
                                                            ?>
                                                                    <option value="<?php echo $us['o_srname']; ?>" <?php if($user['a_osn'] ==$us['o_srname']){ echo "selected"; } ?> ><?php echo $us['o_srname']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="a_osn">SrName <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            $d = display("bisa_course");
                                            ?>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <select name="a_course" onchange="fee(this.value)" class="form-control a_course" id="a_course">
                                                        <option value="" selected disabled>Select</option>
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                        ?>
                                                                <option value="<?php echo $u['co_name']; ?>" <?php if($user['a_course'] ==$u['co_name']){ echo "selected"; } ?> ><?php echo $u['co_name']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="a_course">Courses <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_tfee']; ?>" disabled class="form-control a_tfee" id="a_tfee" placeholder="Roll No">
                                                    <label for="a_tfee">Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="number" value="<?php echo $user['a_dis']; ?>" class="form-control a_dis" id="a_dis" placeholder="Discount">
                                                    <label for="a_dis">Discount <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-12";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['a_dis_com']; ?>" class="form-control a_dis_com" id="a_dis_com" placeholder="Discount Details">
                                                    <label for="a_dis_com">Discount Details</label>
                                                </div>
                                            </div>
                                            <div class="update_admission"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const ua = document.getElementById('update-admission');
                                            ua.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                <?php
                                                if ($_SESSION['status'] == "Admin") {
                                                ?>update_admission_admin('<?php echo $user['a_id']; ?>');
                                                <?php
                                                } else {
                                                ?>update_admission('<?php echo $user['a_id']; ?>');
                                            <?php
                                                }
                                            ?>
                                            })
                                        </script>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    } else if (isset($_REQUEST['inquiry_admission'])) {
                        $condition = array(
                            "inq_id" => $_REQUEST['inquiry_admission']
                        );
                        $data = display_where("bisa_inquiry", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Create Admission</h5>
                                        </div>

                                        <form class="row g-3" id="inquiry-admission" method="post">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['inq_name']; ?>" class="form-control a_name" id="a_name" placeholder="Name" required>
                                                    <label for="a_name">Name <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control a_faname" id="a_faname" placeholder="Father Name">
                                                    <label for="a_faname">Father Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" maxlength="13" minlength="13" class="form-control a_cnic" id="a_cnic" placeholder="CNIC">
                                                    <label for="a_cnic">CNIC</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['inq_area']; ?>" class="form-control a_area" id="a_area" placeholder="Address">
                                                    <label for="a_area">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <select name="a_sex" class="form-control a_sex" id="a_sex" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <label for="a_sex">Gender <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $A; ?>" class="form-control a_dob" id="a_dob" placeholder="Date of Birth" required>
                                                    <label for="a_dob">Date of Birth<span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="tel" value="<?php echo $user['inq_phone']; ?>" class="form-control a_phone" id="a_phone" placeholder="Phone" required>
                                                    <label for="a_phone">Phone <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control a_email" id="a_email" placeholder="Email">
                                                    <label for="a_email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="a_thro" class="form-control a_thro" id="a_thro">
                                                        <option value="Visit" selected>Visit</option>
                                                        <option value="Online">Online</option>
                                                    </select>
                                                    <label for="a_thro">Admission Through <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="number" value="0" class="form-control a_rollno" id="a_rollno" placeholder="Roll No">
                                                    <label for="a_rollno">Roll No <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <?php
                                            $dat = display("bisa_office");
                                            if ($_SESSION['status'] == "Admin") {
                                            ?>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select name="a_on" onchange="on(this.vale)" id="a_on" class="form-control a_on">
                                                            <?php
                                                            if ($dat) {
                                                                foreach ($dat as $us) {
                                                            ?>
                                                                    <option value="<?php echo $us['o_name']; ?>"><?php echo $us['o_name']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="a_on">Institute <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select name="a_osn" onchange="osn(this.value)" id="a_osn" class="form-control a_osn">
                                                            <option value="">Select</option>
                                                            <?php
                                                            if ($dat) {
                                                                foreach ($dat as $us) {
                                                            ?>
                                                                    <option value="<?php echo $us['o_srname']; ?>"><?php echo $us['o_srname']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="a_osn">SrName <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            $d = display("bisa_course");
                                            ?>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <select name="a_course" onchange="fee(this.value)" class="form-control a_course" id="a_course">
                                                        <option value="" selected disabled>Select</option>
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                        ?>
                                                                <option value="<?php echo $u['co_name']; ?>"><?php echo $u['co_name']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="a_course">Courses <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="number" disabled class="form-control a_tfee" id="a_tfee" placeholder="Roll No">
                                                    <label for="a_tfee">Fee <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-4";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="number" value="0" class="form-control a_dis" id="a_dis" placeholder="Discount">
                                                    <label for="a_dis">Discount</label>
                                                </div>
                                            </div>
                                            <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-12";
                                                        } else {
                                                            echo "col-md-3";
                                                        } ?>">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control a_dis_com" id="a_dis_com" placeholder="Discount Details">
                                                    <label for="a_dis_com">Discount Details</label>
                                                </div>
                                            </div>
                                            <div class="inquiry_admission"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const ia = document.getElementById('inquiry-admission');
                                            ia.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                <?php
                                                if ($_SESSION['status'] == "Admin") {
                                                ?>inquiry_admission_admin('<?php echo $user['inq_id']; ?>');
                                                <?php
                                                } else {
                                                ?>inquiry_admission('<?php echo $user['inq_id']; ?>');
                                            <?php
                                                }
                                            ?>
                                            })
                                        </script>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                    } else if (isset($_REQUEST['phone'])) {
                        $phone = $_REQUEST['phone'];
                        ?>
                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-4">
                                    <h5 class="card-title text-center pb-0 fs-4">Create Admission</h5>
                                </div>

                                <form class="row g-3" id="create-admission" method="post">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control a_name" id="a_name" placeholder="Name" required>
                                            <label for="a_name">Name <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control a_faname" id="a_faname" placeholder="Father Name">
                                            <label for="a_faname">Father Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" maxlength="13" minlength="13" class="form-control a_cnic" id="a_cnic" placeholder="CNIC">
                                            <label for="a_cnic">CNIC</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control a_area" id="a_area" placeholder="Address">
                                            <label for="a_area">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select name="a_sex" class="form-control a_sex" id="a_sex" required>
                                                <option value="" selected disabled>Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <label for="a_sex">Gender <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="date" value="<?php echo $A; ?>" class="form-control a_dob" id="a_dob" placeholder="Date of Birth" required>
                                            <label for="a_dob">Date of Birth<span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="tel" value="<?php echo $phone; ?>" class="form-control a_phone" id="a_phone" placeholder="Phone" required>
                                            <label for="a_phone">Phone <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control a_email" id="a_email" placeholder="Email">
                                            <label for="a_email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="a_thro" class="form-control a_thro" id="a_thro">
                                                <option value="Visit" selected>Visit</option>
                                                <option value="Online">Online</option>
                                            </select>
                                            <label for="a_thro">Admission Through <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                    echo "col-md-4";
                                                } else {
                                                    echo "col-md-3";
                                                } ?>">
                                        <div class="form-floating">
                                            <input type="number" value="0" class="form-control a_rollno" id="a_rollno" placeholder="Roll No">
                                            <label for="a_rollno">Roll No <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <?php
                                    $dat = display("bisa_office");
                                    if ($_SESSION['status'] == "Admin") {
                                    ?>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select name="a_on" onchange="on(this.vale)" id="a_on" class="form-control a_on">
                                                    <?php
                                                    if ($dat) {
                                                        foreach ($dat as $us) {
                                                    ?>
                                                            <option value="<?php echo $us['o_name']; ?>"><?php echo $us['o_name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="a_on">Institute <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select name="a_osn" onchange="osn(this.value)" id="a_osn" class="form-control a_osn">
                                                    <option value="">Select</option>
                                                    <?php
                                                    if ($dat) {
                                                        foreach ($dat as $us) {
                                                    ?>
                                                            <option value="<?php echo $us['o_srname']; ?>"><?php echo $us['o_srname']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="a_osn">SrName <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $d = display("bisa_course");
                                    ?>
                                    <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                    echo "col-md-4";
                                                } else {
                                                    echo "col-md-3";
                                                } ?>">
                                        <div class="form-floating">
                                            <select name="a_course" onchange="fee(this.value)" class="form-control a_course" id="a_course">
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                if ($d) {
                                                    foreach ($d as $u) {
                                                ?>
                                                        <option value="<?php echo $u['co_name']; ?>"><?php echo $u['co_name']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="a_course">Courses <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                    echo "col-md-4";
                                                } else {
                                                    echo "col-md-3";
                                                } ?>">
                                        <div class="form-floating">
                                            <input type="number" disabled class="form-control a_tfee" id="a_tfee" placeholder="Roll No">
                                            <label for="a_tfee">Fee <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                    echo "col-md-4";
                                                } else {
                                                    echo "col-md-3";
                                                } ?>">
                                        <div class="form-floating">
                                            <input type="number" value="0" class="form-control a_dis" id="a_dis" placeholder="Discount">
                                            <label for="a_dis">Discount</label>
                                        </div>
                                    </div>
                                    <div class="<?php if ($_SESSION['status'] == "Admin") {
                                                    echo "col-md-12";
                                                } else {
                                                    echo "col-md-3";
                                                } ?>">
                                        <div class="form-floating">
                                            <input type="text" class="form-control a_dis_com" id="a_dis_com" placeholder="Discount Detail">
                                            <label for="a_dis_com">Discount Details </label>
                                        </div>
                                    </div>
                                    <div class="create-admission"></div>
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
    <script>
        const cr = document.getElementById('create-admission');
        cr.addEventListener('submit', (event) => {
            event.preventDefault();
            <?php
            if ($_SESSION['status'] == "Admin") {
            ?>create_admission_admin();
            <?php
            } else {
            ?>create_admission();
        <?php
            }
        ?>
        })
    </script>
</body>

</html>