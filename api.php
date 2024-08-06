<?php

include "assets/includes/function.php";

if (isset($_REQUEST['log_na'])) {
    $name = $_REQUEST['log_na'];
    $pass = $_REQUEST['log_pa'];
    $condition = array(
        "u_username" => $name,
        "u_pass" => $pass
    );
    $data = display_where("bisa_user", $condition);
    if ($data) {
        foreach ($data as $data) {
            $_SESSION['id'] = $data['u_id'];
            $_SESSION['name'] = $data['u_name'];
            $_SESSION['status'] = $data['u_status'];
            $_SESSION['office'] = $data['u_on'];
            $_SESSION['srname'] = $data['u_osn'];
            ?>
            <script>
                swal("Welcome! <?php echo $data['u_name']; ?>", "Login Successfully!", "success", {
                    button: false,
                    timer: 2000
                });
                setTimeout(function() {
                    <?php
                    if($_SESSION['status']== "Admin"){
                        ?>
                        window.location = "admin-generate-report.php";
                        <?php
                    }else{
                        ?>
                        window.location = "dashboard-today-report.php";
                        <?php
                    }
                    ?>
                }, 2000);
                $(".u_username").val("");
                $(".u_pass").val("");
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            swal("Login Failed!", "Username Or Password Is Incorrect!", "error", {
                button: false,
                timer: 2000
            });
            $(".u_username").val("");
            $(".u_pass").val("");
        </script>
    <?php
    }
}

if (isset($_REQUEST['ad_del'])) {
    $condition = array(
        "a_id" => $_REQUEST['ad_del']
    );

    if (del("bisa_admission", $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['ad_com'])) {
    $condition = array(
        "a_id" => $_REQUEST['ad_com']
    );
    $data = array(
        "a_status" => "1"
    );
    if (update('bisa_admission', $data, $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['ad_pen'])) {
    $condition = array(
        "a_id" => $_REQUEST['ad_pen']
    );
    $data = array(
        "a_status" => "2"
    );
    if (update('bisa_admission', $data, $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['ad_le'])) {
    $condition = array(
        "a_id" => $_REQUEST['ad_le']
    );
    $data = array(
        "a_status" => "3"
    );
    if (update('bisa_admission', $data, $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['inq_del'])) {
    $condition = array(
        "inq_id" => $_REQUEST['inq_del']
    );

    if (del("bisa_inquiry", $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['del_ur'])) {
    $condition = array(
        "u_id" => $_REQUEST['del_ur']
    );

    if (del("bisa_user", $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['del_co'])) {
    $condition = array(
        "co_id" => $_REQUEST['del_co']
    );

    if (del("bisa_course", $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['u_na'])) {
    $data = array(
        "u_name" => $_REQUEST['u_na'],
        "u_username" => $_REQUEST['u_una'],
        "u_phone" => $_REQUEST['u_ph'],
        "u_pass" => $_REQUEST['u_ps'],
        "u_status" => $_REQUEST['u_st'],
        "u_on" => $_REQUEST['u_on'],
        "u_osn" => $_REQUEST['u_osn']
    );
    if (insert('bisa_user', $data)) {
    ?>
        <script>
            swal("Good job!", "User Created Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "admin-user.php";
            }, 1000);
        </script>
    <?php
    }
}

if (isset($_REQUEST['u_up_na'])) {
    $data = array(
        "u_name" => $_REQUEST['u_up_na'],
        "u_username" => $_REQUEST['u_up_una'],
        "u_phone" => $_REQUEST['u_up_ph'],
        "u_status" => $_REQUEST['u_up_st'],
        "u_pass" => $_REQUEST['u_up_ps'],
        "u_on" => $_REQUEST['u_up_on'],
        "u_osn" => $_REQUEST['u_up_osn']
    );
    $condition = array(
        "u_id" => $_REQUEST['u_up_id']
    );
    if (update('bisa_user', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "User Update Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "admin-user.php"; // search page location
            }, 1000);
        </script>
    <?php
    }
}

if (isset($_REQUEST['co_na'])) {
    $data = array(
        "co_name" => $_REQUEST['co_na'],
        "co_fee" => $_REQUEST['co_fee'],
        "co_detail" => $_REQUEST['co_de']
    );
    if (insert('bisa_course', $data)) {
    ?>
        <script>
            swal("Good job!", "Course Added Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "admin-course.php"; // search page location
            }, 1000);
        </script>
        <?php
    }
}

if (isset($_REQUEST['co_up_na'])) {
    $data = array(
        "co_name" => $_REQUEST['co_up_na'],
        "co_fee" => $_REQUEST['co_up_fee'],
        "co_detail" => $_REQUEST['co_up_de']
    );
    $condition = array(
        "co_id" => $_REQUEST['co_up_id']
    );
    if (update('bisa_course', $data, $condition)) {
        $d = array(
            "a_course" => $_REQUEST['co_up_na']
        );
        $c = array(
            "a_course" => $_REQUEST['co_up_old_na']
        );
        if (update("bisa_admission", $d, $c)) {
        ?>
            <script>
                swal("Good job!", "Course Update Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location = "admin-course.php"; // search page location
                }, 1000);
            </script>
    <?php
        }
    }
}

if (isset($_REQUEST['inq_th'])) {
    if($_SESSION['status']=="Admin"){
        $condition = array(
            "im_method" => $_REQUEST['inq_th']
        );
    }else{
        $condition = array(
            "im_method" => $_REQUEST['inq_th'],
            "im_on" => $_SESSION['office'],
            "im_osn" => $_SESSION['srname']
        );
    }
    $data = display_where("bisa_inq_method", $condition);
    if($data){
        ?>
        <option value="" selected disabled>Select</option>
        <?php
        foreach($data as $user){
            ?>
            <option value="<?php echo $user['im_meth_detail']; ?>"><?php echo $user['im_meth_detail']; ?></option>
            <?php
        }
    }
}   //Done

if (isset($_REQUEST['inq_na'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['inq_on'];
        $osn = $_REQUEST['inq_osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "inq_name" => $_REQUEST['inq_na'],
        "inq_course" => $_REQUEST['inq_co'],
        "inq_phone" => $_REQUEST['inq_ph'],
        "inq_method" => $_REQUEST['inq_th'],
        "inq_detail" => $_REQUEST['inq_de'],
        "inq_area" => $_REQUEST['inq_ar'],
        "inq_remind_date" => $_REQUEST['inq_dct'],
        "inq_comment" => $_REQUEST['inq_cmt'],
        "inq_date" => $A,
        "inq_user" => $_SESSION['name'],
        "inq_on" => $on,
        "inq_osn" => $osn
    );

    if (insert('bisa_inquiry', $data)) {
    ?>
        <script>
            swal("Good job!", "Inquiry Created Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "record-inquiry.php"; // search page location
                //history.back();
            }, 1000);
        </script>
    <?php
    }
}   //Done

if (isset($_REQUEST['inq_up_na'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['inq_up_on'];
        $osn = $_REQUEST['inq_up_osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "inq_name" => $_REQUEST['inq_up_na'],
        "inq_course" => $_REQUEST['inq_up_co'],
        "inq_phone" => $_REQUEST['inq_up_ph'],
        "inq_method" => $_REQUEST['inq_up_th'],
        "inq_detail" => $_REQUEST['inq_up_de'],
        "inq_area" => $_REQUEST['inq_up_ar'],
        "inq_date" => $_REQUEST['inq_up_da'],
        "inq_remind_date" => $_REQUEST['inq_up_dct'],
        "inq_comment" => $_REQUEST['inq_up_cmt'],
        "inq_on" => $on,
        "inq_osn" => $osn
    );
    $condition = array(
        "inq_id" => $_REQUEST['inq_up_id']
    );
    if (update('bisa_inquiry', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "Inquiry Update Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                history.back();
            }, 1000);
        </script>
    <?php
    }
}   //Done

if (isset($_REQUEST['a_na'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['a_on'];
        $osn = $_REQUEST['a_osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "a_name" => $_REQUEST['a_na'],
        "a_fname" => $_REQUEST['a_fana'],
        "a_course" => $_REQUEST['a_co'],
        "a_phone" => $_REQUEST['a_ph'],
        "a_method" => $_REQUEST['a_th'],
        "a_area" => $_REQUEST['a_ar'],
        "a_tfee" => $_REQUEST['a_tfee'],
        "a_dis" => $_REQUEST['a_dis'],
        "a_sex" => $_REQUEST['a_sex'],
        "a_dob" => $_REQUEST['a_dob'],
        "a_email" => $_REQUEST['a_em'],
        "a_cnic" => $_REQUEST['a_cnic'],
        "a_rollno" => $_REQUEST['a_roll'],
        "a_date" => $A,
        "a_user" => $_SESSION['name'],
        "a_on" => $on,
        "a_osn" => $osn,
        "a_dis_com" => $_REQUEST['a_dis_com']
    );
    $condition = array(
        "inq_id" => $_REQUEST['id']
    );
    if (insert('bisa_admission', $data)) {
    ?>
        <script>
            swal("Good job!", "Admission Created Successfully!", "success", {
                button: false,
                timer: 1500
            });
            <?php
            if (del("bisa_inquiry", $condition)) {
            ?>
                setTimeout(function() {
                    window.location = "record-admission.php"; // search page location
                }, 1000);
            <?php
            }
            ?>
        </script>
    <?php
    }
}   //Done

if (isset($_REQUEST['ad_na'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['ad_on'];
        $osn = $_REQUEST['ad_osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "a_name" => $_REQUEST['ad_na'],
        "a_fname" => $_REQUEST['ad_fana'],
        "a_course" => $_REQUEST['ad_co'],
        "a_phone" => $_REQUEST['ad_ph'],
        "a_method" => $_REQUEST['ad_th'],
        "a_area" => $_REQUEST['ad_ar'],
        "a_tfee" => $_REQUEST['ad_tfee'],
        "a_dis" => $_REQUEST['ad_dis'],
        "a_sex" => $_REQUEST['ad_sex'],
        "a_dob" => $_REQUEST['ad_dob'],
        "a_email" => $_REQUEST['ad_em'],
        "a_cnic" => $_REQUEST['ad_cnic'],
        "a_rollno" => $_REQUEST['ad_roll'],
        "a_date" => date("Y-m-d"),
        "a_user" => $_SESSION['name'],
        "a_on" => $on,
        "a_osn" => $osn,
        "a_dis_com" => $_REQUEST['ad_dis_com']
    );
    if (insert('bisa_admission', $data)) {
    ?>
        <script>
            swal("Good job!", "Admission Created Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "record-admission.php"; // search page location
            }, 1000);
        </script>
    <?php
    }
}   //Done

if (isset($_REQUEST['ad_up_id'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['ad_up_on'];
        $osn = $_REQUEST['ad_up_osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "a_name" => $_REQUEST['ad_up_na'],
        "a_fname" => $_REQUEST['ad_up_fana'],
        "a_course" => $_REQUEST['ad_up_co'],
        "a_phone" => $_REQUEST['ad_up_ph'],
        "a_method" => $_REQUEST['ad_up_th'],
        "a_area" => $_REQUEST['ad_up_ar'],
        "a_date" => $_REQUEST['ad_up_da'],
        "a_tfee" => $_REQUEST['ad_up_tfee'],
        "a_dis" => $_REQUEST['ad_up_dis'],
        "a_dis_com" => $_REQUEST['ad_up_dis_com'],
        "a_sex" => $_REQUEST['ad_up_sex'],
        "a_dob" => $_REQUEST['ad_up_dob'],
        "a_email" => $_REQUEST['ad_up_em'],
        "a_cnic" => $_REQUEST['ad_up_cnic'],
        "a_rollno" => $_REQUEST['ad_up_roll'],
        "a_on" => $on,
        "a_osn" => $osn
    );
    $condition = array(
        "a_id" => $_REQUEST['ad_up_id']
    );
    if (update('bisa_admission', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "Student Update Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "record-admission.php"; // search page location
            }, 1000);
        </script>
        <?php
    }
}   //Done

if (isset($_REQUEST['conafix'])) {
    $condition = array(
        "co_name" => $_REQUEST['conafix']
    );
    $data = display_where("bisa_course", $condition);
    if ($data) {
        foreach ($data as $d) {
            echo $d['co_fee'];
        }
    }
}   //Done

if (isset($_REQUEST['pay1_id'])) {
    $data = array(
        "a_fee1" => $_REQUEST['pay1_ifee1'],
        "a_fee1_date" => $_REQUEST['pay1_ifee1_date'],
        "a_fee1_meth" => $_REQUEST['pay1_ifee1_meth'],
        "a_remind_date1" => $_REQUEST['pay1_re_date']
    );
    $condition = array(
        "a_id" => $_REQUEST['pay1_id']
    );
    if (update('bisa_admission', $data, $condition)) {
        $fetch = display_where("bisa_admission", $condition);
        if ($fetch) {
            foreach ($fetch as $user) {
                $name = $user['a_name'];
                $roll = $user['a_rollno'];
                $co = $user['a_course'];
                $on = $user['a_on'];
                $osn = $user['a_osn'];
            }
            $r = $_REQUEST['pay1_id'] + 0.1;
            $detail = $name . " submitted his/her 1st fee installment";
            $data = array(
                "f_detail" => $detail,
                "f_roll" => $r,
                "f_co" => $co,
                "f_rs" => $_REQUEST['pay1_ifee1'],
                "f_date" => $_REQUEST['pay1_ifee1_date'],
                "f_meth" => $_REQUEST['pay1_ifee1_meth'],
                "f_on" => $on,
                "f_osn" => $osn
            );
            if (insert("bisa_fee", $data)) {
            ?>
                <script>
                    swal("Good job!", "Fee Added Successfully!", "success", {
                        button: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        history.back(); // search page location
                    }, 1000);
                </script>
            <?php
            }
        }
    }
}   //Done

if (isset($_REQUEST['pay2_id'])) {
    $data = array(
        "a_fee2" => $_REQUEST['pay2_ifee2'],
        "a_fee2_date" => $_REQUEST['pay2_ifee2_date'],
        "a_fee2_meth" => $_REQUEST['pay2_ifee2_meth'],
        "a_remind_date2" => $_REQUEST['pay2_re_date2']
    );
    $condition = array(
        "a_id" => $_REQUEST['pay2_id']
    );
    if (update('bisa_admission', $data, $condition)) {
        $fetch = display_where("bisa_admission", $condition);
        if ($fetch) {
            foreach ($fetch as $user) {
                $name = $user['a_name'];
                $roll = $user['a_rollno'];
                $co = $user['a_course'];
                $on = $user['a_on'];
                $osn = $user['a_osn'];
            }

            $r = $_REQUEST['pay2_id'] + 0.2;
            $detail = $name . " submitted his/her 2nd fee installment";
            $data = array(
                "f_detail" => $detail,
                "f_roll" => $r,
                "f_co" => $co,
                "f_rs" => $_REQUEST['pay2_ifee2'],
                "f_date" => $_REQUEST['pay2_ifee2_date'],
                "f_meth" => $_REQUEST['pay2_ifee2_meth'],
                "f_on" => $on,
                "f_osn" => $osn
            );
            if (insert("bisa_fee", $data)) {
            ?>
                <script>
                    swal("Good job!", "Fee Added Successfully!", "success", {
                        button: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        history.back(); // search page location
                    }, 1000);
                </script>
            <?php
            }
        }
    }
}   //Done

if (isset($_REQUEST['pay3_id'])) {
    $data = array(
        "a_fee3" => $_REQUEST['pay3_ifee3'],
        "a_fee3_date" => $_REQUEST['pay3_ifee3_date'],
        "a_fee3_meth" => $_REQUEST['pay3_ifee3_meth'],
        "a_remind_date3" => $_REQUEST['pay3_re_date3']
    );
    $condition = array(
        "a_id" => $_REQUEST['pay3_id']
    );
    if (update('bisa_admission', $data, $condition)) {
        $fetch = display_where("bisa_admission", $condition);
        if ($fetch) {
            foreach ($fetch as $user) {
                $name = $user['a_name'];
                $roll = $user['a_rollno'];
                $co = $user['a_course'];
                $on = $user['a_on'];
                $osn = $user['a_osn'];
            }

            $r = $_REQUEST['pay3_id'] + 0.3;
            $detail = $name . " submitted his/her 3rd fee installment";
            $data = array(
                "f_detail" => $detail,
                "f_roll" => $r,
                "f_co" => $co,
                "f_rs" => $_REQUEST['pay3_ifee3'],
                "f_date" => $_REQUEST['pay3_ifee3_date'],
                "f_meth" => $_REQUEST['pay3_ifee3_meth'],
                "f_on" => $on,
                "f_osn" => $osn
            );
            if (insert("bisa_fee", $data)) {
            ?>
                <script>
                    swal("Good job!", "Fee Added Successfully!", "success", {
                        button: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        history.back(); // search page location
                    }, 1000);
                </script>
            <?php
            }
        }
    }
}   //Done

if (isset($_REQUEST['re_id'])) {
    $refund = "-".$_REQUEST['re'];
    $data = array(
        "a_refund" => $_REQUEST['re'],
        "a_re_date" => $_REQUEST['re_date'],
        "a_re_meth" => $_REQUEST['re_meth']
    );
    $condition = array(
        "a_id" => $_REQUEST['re_id']
    );
    if (update('bisa_admission', $data, $condition)) {
        $fetch = display_where("bisa_admission", $condition);
        if ($fetch) {
            foreach ($fetch as $user) {
                $name = $user['a_name'];
                $roll = $user['a_rollno'];
                $co = $user['a_course'];
                $on = $user['a_on'];
                $osn = $user['a_osn'];
            }

            $r = $_REQUEST['re_id'] + 0.4;
            $detail = $name . " Gets his/her Refund";
            $data = array(
                "f_detail" => $detail,
                "f_roll" => $r,
                "f_co" => $co,
                "f_rs" => $refund,
                "f_date" => $_REQUEST['re_date'],
                "f_meth" => $_REQUEST['re_meth'],
                "f_on" => $on,
                "f_osn" => $osn
            );
            if (insert("bisa_fee", $data)) {
            ?>
                <script>
                    swal("Good job!", "Fee Added Successfully!", "success", {
                        button: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        history.back(); // search page location
                    }, 1000);
                </script>
            <?php
            }
        }
    }
}   //Done

if (isset($_REQUEST['ep_id'])) {
    $data = array(
        "a_ex_fee" => $_REQUEST['ep_fee'],
        "a_ex_date" => $_REQUEST['ep_date'],
        "a_ex_meth" => $_REQUEST['ep_meth'],
        "a_ex_com" => $_REQUEST['ep_com']
    );
    $condition = array(
        "a_id" => $_REQUEST['ep_id']
    );
    if (update('bisa_admission', $data, $condition)) {
        $fetch = display_where("bisa_admission", $condition);
        if ($fetch) {
            foreach ($fetch as $user) {
                $name = $user['a_name'];
                $roll = $user['a_rollno'];
                $co = $user['a_course'];
                $on = $user['a_on'];
                $osn = $user['a_osn'];
            }
            $r = $_REQUEST['ep_id'] + 0.5;
            $detail = $name ." pay for ". $_REQUEST['ep_com'];
            $data = array(
                "f_detail" => $detail,
                "f_roll" => $r,
                "f_co" => $co,
                "f_rs" => $_REQUEST['ep_fee'],
                "f_date" => $_REQUEST['ep_date'],
                "f_meth" => $_REQUEST['ep_meth'],
                "f_on" => $on,
                "f_osn" => $osn
            );
            if (insert("bisa_fee", $data)) {
            ?>
                <script>
                    swal("Good job!", "Fee Added Successfully!", "success", {
                        button: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        history.back(); // search page location
                    }, 1000);
                </script>
            <?php
            }
        }
    }
}   //Done

if (isset($_REQUEST['up_pay1_id'])) {
    $c = $_REQUEST['up_pay1_id'] + 0.1;
    $data = array(
        "a_fee1" => $_REQUEST['up_pay1_ifee1'],
        "a_fee1_date" => $_REQUEST['up_pay1_ifee1_date'],
        "a_fee1_meth" => $_REQUEST['up_pay1_ifee1_meth'],
        "a_remind_date1" => $_REQUEST['up_pay1_re_date1']
    );
    $condition = array(
        "a_id" => $_REQUEST['up_pay1_id']
    );
    $data1 = array(
        "f_rs" => $_REQUEST['up_pay1_ifee1'],
        "f_date" => $_REQUEST['up_pay1_ifee1_date'],
        "f_meth" => $_REQUEST['up_pay1_ifee1_meth'],
        "edit" => "1"
    );
    if (update_income('bisa_fee', $data1, $c)) {
        if (update('bisa_admission', $data, $condition)) {
            ?>
            <script>
                swal("Good job!", "Fee Update Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                setTimeout(function() {
                    history.back();
                }, 1000);
            </script>
        <?php
        }
    }
}   //Done

if (isset($_REQUEST['up_pay2_id'])) {
    $c = $_REQUEST['up_pay2_id'] + 0.2;
    $data = array(
        "a_fee2" => $_REQUEST['up_pay2_ifee2'],
        "a_fee2_date" => $_REQUEST['up_pay2_ifee2_date'],
        "a_fee2_meth" => $_REQUEST['up_pay2_ifee2_meth'],
        "a_remind_date2" => $_REQUEST['up_pay2_re_date2']
    );
    $condition = array(
        "a_id" => $_REQUEST['up_pay2_id']
    );
    $data1 = array(
        "f_rs" => $_REQUEST['up_pay2_ifee2'],
        "f_date" => $_REQUEST['up_pay2_ifee2_date'],
        "f_meth" => $_REQUEST['up_pay2_ifee2_meth'],
        "edit" => "1"
    );
    if (update_income('bisa_fee', $data1, $c)) {
        if (update('bisa_admission', $data, $condition)) {
        ?>
            <script>
                swal("Good job!", "Fee Update Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                setTimeout(function() {
                    history.back();
                }, 1000);
            </script>
        <?php
        }
    }
}   //Done

if (isset($_REQUEST['up_pay3_id'])) {
    $c = $_REQUEST['up_pay3_id'] + 0.3;
    $data = array(
        "a_fee3" => $_REQUEST['up_pay3_ifee3'],
        "a_fee3_date" => $_REQUEST['up_pay3_ifee3_date'],
        "a_fee3_meth" => $_REQUEST['up_pay3_ifee3_meth'],
        "a_remind_date3" => $_REQUEST['up_pay3_re_date3']
    );
    $condition = array(
        "a_id" => $_REQUEST['up_pay3_id']
    );
    $data1 = array(
        "f_rs" => $_REQUEST['up_pay3_ifee3'],
        "f_date" => $_REQUEST['up_pay3_ifee3_date'],
        "f_meth" => $_REQUEST['up_pay3_ifee3_meth'],
        "edit" => "1"
    );
    if (update_income('bisa_fee', $data1, $c)) {
        if (update('bisa_admission', $data, $condition)) {
        ?>
            <script>
                swal("Good job!", "Fee Update Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                setTimeout(function() {
                    history.back();
                }, 1000);
            </script>
        <?php
        }
    }
}   //Done

if (isset($_REQUEST['up_re_id'])) {
    $refund = "-".$_REQUEST['up_re'];
    $c = $_REQUEST['up_re_id'] + 0.4;
    $data = array(
        "a_refund" => $_REQUEST['up_re'],
        "a_re_date" => $_REQUEST['up_re_date'],
        "a_re_meth" => $_REQUEST['up_re_meth']
    );
    $condition = array(
        "a_id" => $_REQUEST['up_re_id']
    );
    $data1 = array(
        "f_rs" => $refund,
        "f_date" => $_REQUEST['up_re_date'],
        "f_meth" => $_REQUEST['up_re_meth'],
        "edit" => "1"
    );
    if (update_income('bisa_fee', $data1, $c)) {
        if (update('bisa_admission', $data, $condition)) {
        ?>
            <script>
                swal("Good job!", "Refund Update Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                setTimeout(function() {
                    history.back();
                }, 1000);
            </script>
        <?php
        }
    }
}   //Done

if (isset($_REQUEST['up_ep_id'])) {
    $c = $_REQUEST['up_ep_id'] + 0.5;
    $data = array(
        "a_ex_fee" => $_REQUEST['up_ep_fee'],
        "a_ex_date" => $_REQUEST['up_ep_date'],
        "a_ex_meth" => $_REQUEST['up_ep_meth'],
        "a_ex_com" => $_REQUEST['up_ep_com']
    );
    $condition = array(
        "a_id" => $_REQUEST['up_ep_id']
    );
    $fetch = display_where("bisa_admission", $condition);
    if($fetch){
        foreach($fetch as $user){     
            $coment = $user["a_name"]." Pay for ".$_REQUEST['up_ep_com'];
            $data1 = array(
                'f_detail'=> $coment,
                "f_rs" => $_REQUEST['up_ep_fee'],
                "f_date" => $_REQUEST['up_ep_date'],
                "f_meth" => $_REQUEST['up_ep_meth'],
                "edit" => "1"
            );
            if (update_income('bisa_fee', $data1, $c)) {
                if (update('bisa_admission', $data, $condition)) {
                ?>
                    <script>
                        swal("Good job!", "Fee Update Successfully!", "success", {
                            button: false,
                            timer: 1500
                        });
                        setTimeout(function() {
                            history.back();
                        }, 1000);
                    </script>
                <?php
                }
            }
        }
    }
}   //Done

if (isset($_REQUEST['e_de'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['on'];
        $osn = $_REQUEST['osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "io_detail" => $_REQUEST['e_de'],
        "io_cat" => $_REQUEST['e_cat'],
        "io_rs" => $_REQUEST['e_rs'],
        "io_meth" => $_REQUEST['e_meth'],
        "io_date" => date("Y-m-d"),
        "io_on" => $on,
        "io_osn" => $osn,
        "io_io" => "Out"
    );
    if (insert('bisa_in_out', $data)) {
        ?>
        <script>
            swal("Good job!", "Expence Added Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "create-expence.php";
            }, 1000);
        </script>
    <?php
    }
}   //Done

if (isset($_REQUEST['e_up_id'])) {
    $data = array(
        "io_detail" => $_REQUEST['e_up_de'],
        "io_cat" => $_REQUEST['e_up_cat'],
        "io_rs" => $_REQUEST['e_up_ex'],
        "io_meth" => $_REQUEST['e_up_meth'],
        "io_date" => $_REQUEST['e_up_date'],
        "edit" => "1"
    );
    $condition = array(
        "io_id" => $_REQUEST['e_up_id']
    );
    if (update('bisa_in_out', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "Expence Update Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                history.back();
            }, 1000);
        </script>
        <?php
    }
}   //Done

if (isset($_REQUEST['examfee'])) {
    $condition = array(
        "el_name" => $_REQUEST['examfee']
    );
    $data = display_where("bisa_exam_list", $condition);
    if ($data) {
        foreach ($data as $user) {
            echo $user['el_st_pay'];
        }
    }
}

if (isset($_REQUEST['eb_fname'])) {

    $data = array(
        "eb_fname" => $_REQUEST['eb_fname'],
        "eb_lname" => $_REQUEST['eb_lname'],
        "eb_dob" => $_REQUEST['eb_dob'],
        "eb_city" => $_REQUEST['eb_city'],
        "eb_email" => $_REQUEST['eb_email'],
        "eb_edate" => $_REQUEST['eb_edate'],
        "eb_phone" => $_REQUEST['eb_phone'],
        "eb_cnic" => $_REQUEST['eb_cnic'],
        "eb_cnic_exp_date" => $_REQUEST['eb_cnic_exp_date'],
        "eb_status" => $_REQUEST['eb_status'],
        "eb_exam_name" => $_REQUEST['eb_exam_name'],
        "eb_fee" => $_REQUEST['eb_fee'],
        "eb_fee_meth" => $_REQUEST['eb_fee_meth'],
        "eb_date" => $A,
    );

    if (insert('bisa_exam_booked', $data)) {
        ?>
        <script>
            swal("Good job!", "Exam Booked Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location = "record-exam.php"; // search page location
                //history.back();
            }, 1000);
        </script>
        <?php
    }
}   //Done

if (isset($_REQUEST['del_exam'])) {
    $condition = array(
        "eb_id" => $_REQUEST['del_exam']
    );

    if (del("bisa_exam_booked", $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}   //Done

if (isset($_REQUEST['eb_up_id'])) {
    $condition = array(
        "eb_id"=> $_REQUEST['eb_up_id']
    );
    $data = array(
        "eb_fname" => $_REQUEST['eb_up_fname'],
        "eb_lname" => $_REQUEST['eb_up_lname'],
        "eb_dob" => $_REQUEST['eb_up_dob'],
        "eb_city" => $_REQUEST['eb_up_city'],
        "eb_email" => $_REQUEST['eb_up_email'],
        "eb_edate" => $_REQUEST['eb_up_edate'],
        "eb_phone" => $_REQUEST['eb_up_phone'],
        "eb_cnic" => $_REQUEST['eb_up_cnic'],
        "eb_cnic_exp_date" => $_REQUEST['eb_up_cnic_exp_date'],
        "eb_status" => $_REQUEST['eb_up_status'],
        "eb_exam_name" => $_REQUEST['eb_up_exam_name'],
        "eb_fee" => $_REQUEST['eb_up_fee'],
        "eb_fee_meth" => $_REQUEST['eb_up_fee_meth']
    );

    if (update('bisa_exam_booked', $data, $condition)) {
        ?>
            <script>
                swal("Good job!", "Exam Update Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location = "record-exam.php";
                }, 1000);
            </script>
            <?php
        }
}   //Done

if (isset($_REQUEST['i_de'])) {
    if($_SESSION['status']=="Admin"){
        $on = $_REQUEST['on'];
        $osn = $_REQUEST['osn'];
    }else{
        $on = $_SESSION['office'];
        $osn = $_SESSION['srname'];
    }
    $data = array(
        "io_detail" => $_REQUEST['i_de'],
        "io_rs" => $_REQUEST['i_rs'],
        "io_meth" => $_REQUEST['i_meth'],
        "io_date" => $A,
        "io_on" => $on,
        "io_osn" => $osn,
        "io_io" => "In"
    );
    if (insert('bisa_in_out', $data)) {
        ?>
        <script>
            swal("Good job!", "Income Added Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location= "create-income.php";
            }, 1000);
        </script>
    <?php
    }
}   //Done

if (isset($_REQUEST['i_up_id'])) {
    $data = array(
        "io_detail" => $_REQUEST['i_up_de'],
        "io_rs" => $_REQUEST['i_up_ex'],
        "io_meth" => $_REQUEST['i_up_meth'],
        "io_date" => $_REQUEST['i_up_date'],
        "edit" => "1"
    );
    $condition = array(
        "io_id" => $_REQUEST['i_up_id']
    );
    if (update('bisa_in_out', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "Expence Update Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                history.back();
            }, 1000);
        </script>
        <?php
    }
}

if (isset($_REQUEST['del_io'])) {
    $condition = array(
        "io_id" => $_REQUEST['del_io']
    );
    if (del("bisa_in_out", $condition)) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_REQUEST['pass_id'])) {
    $data = array(
        "u_username" => $_REQUEST['pass_una'],
        "u_pass" => $_REQUEST['pass_pass']
    );
    $condition = array(
        "u_id" => $_REQUEST['pass_id']
    );
    if (update('bisa_user', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "Password Update Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                history.back();
            }, 1000);
        </script>
    <?php
    }
}

if (isset($_REQUEST['ex_id'])) {
    $data = array(
        "eb_bi_fee" => $_REQUEST['ex_fee'],
        "eb_profit" => $_REQUEST['ex_pro'],
        "eb_bi_meth" => $_REQUEST['ex_meth'],
        "eb_bi_date" => $A
    );
    $condition = array(
        "eb_id" => $_REQUEST['ex_id']
    );
    if (update('bisa_exam_booked', $data, $condition)) {
    ?>
        <script>
            swal("Good job!", "Fee Paid Successfully!", "success", {
                button: false,
                timer: 1500
            });
            setTimeout(function() {
                history.back();
            }, 1000);
        </script>
    <?php
    }
}
