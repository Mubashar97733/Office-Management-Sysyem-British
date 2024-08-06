function ABC() {
    alert("abc");
}

function DEF(id) {
    $.post(
        "api.php", {
        ex_id: id,
        ex_fee: $(".eb_bi_fee").val().trim(),
        ex_pro: $(".eb_bi_profit").val().trim(),
        ex_meth: $(".eb_bi_pay_meth").val().trim()
    },
        function (data) {
            $('.exam-fee').html(data);
        }
    );
}

function login() {
    var username = $(".u_username").val();
    var pass = $(".u_pass").val();
    if (username != "" && pass != "") {
        $.post(
            "api.php", {
            log_na: username,
            log_pa: pass
        },
            function (data) {
                $('.login-result').html(data);
            }
        );
    } else {
        swal("Login Failed!", "Something is Missing!", "warning", {
            button: false,
            timer: 2000
        });
    }
}

function delete_ad(id) {
    swal({
        title: "Note!",
        text: "Are You Really Want To Delete It?",
        icon: "warning",
        buttons: ["Cancel", "Delete"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Student Deleted Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?ad_del=" + id,
                    function (data) {
                        if (data == 1) {
                            setTimeout(function () {
                                window.location.reload(); // search page location
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Student Is Not Deleted!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}


function com_ad(id) {
    swal({
        title: "Note!",
        text: "Is Student Really Complete The Course?",
        icon: "warning",
        buttons: ["No", "Yes"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Course Completed Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?ad_com=" + id,
                    function (data) {
                        if (data == 1) {
                            setTimeout(function () {
                                window.location.reload(); // search page location
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Course Is Not Completed!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function pen_ad(id) {
    swal({
        title: "Note!",
        text: "Is Student Delay The Course?",
        icon: "warning",
        buttons: ["No", "Yes"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Course Delaid Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?ad_pen=" + id,
                    function (data) {
                        if (data == 1) {
                            setTimeout(function () {
                                window.location.reload(); // search page location
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Course Is Not Delay!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function le_ad(id) {
    swal({
        title: "Note!",
        text: "Is Student Leave The Course?",
        icon: "warning",
        buttons: ["No", "Yes"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Student Leaved!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?ad_le=" + id,
                    function (data) {
                        if (data == 1) {
                            setTimeout(function () {
                                window.location.reload(); // search page location
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Student is Not Leave The course!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}




function delete_inq(id) {
    swal({
        title: "Note!",
        text: "Are You Really Want To Delete It?",
        icon: "warning",
        buttons: ["Cancel", "Delete"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Inquiry Deleted Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?inq_del=" + id,
                    function (data) {
                        if (data == 1) {
                            $("." + id).fadeOut()
                            setTimeout(function () {
                                window.location.reload(); // after del landing page 
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Inquiry Is Not Deleted!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function delete_ur(id) {
    swal({
        title: "Note!",
        text: "Are You Really Want To Delete It?",
        icon: "warning",
        buttons: ["Cancel", "Delete"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "User Deleted Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?del_ur=" + id,
                    function (data) {
                        if (data == 1) {
                            $("." + id).fadeOut()
                            setTimeout(function () {
                                window.location.reload(); // after del landing page 
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Inquiry Is Not Deleted!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function delete_co(id) {
    swal({
        title: "Note!",
        text: "Are You Really Want To Delete It?",
        icon: "warning",
        buttons: ["Cancel", "Delete"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Course Deleted Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?del_co=" + id,
                    function (data) {
                        if (data == 1) {
                            $("." + id).fadeOut()
                            setTimeout(function () {
                                window.location.reload(); // after del landing page 
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Course Is Not Deleted!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function create_user() {
    $.post(
        "api.php", {
        u_na: $(".u_name").val().trim(),
        u_una: $(".u_username").val().trim(),
        u_ph: $(".u_phone").val().trim(),
        u_st: $(".u_status").val().trim(),
        u_ps: $(".u_pass").val().trim(),
        u_on: $(".u_on").val().trim(),
        u_osn: $(".u_osn").val().trim()
    },
        function (data) {
            $('.create-user').html(data);
        }
    );
}

function update_user(id) {
    $.post(
        "api.php", {
        u_up_id: id,
        u_up_na: $(".u_name").val().trim(),
        u_up_una: $(".u_username").val().trim(),
        u_up_ph: $(".u_phone").val().trim(),
        u_up_st: $(".u_status").val().trim(),
        u_up_ps: $(".u_pass").val().trim(),
        u_up_on: $(".u_on").val().trim(),
        u_up_osn: $(".u_osn").val().trim()
    },
        function (data) {
            $('.update-user').html(data);
        }
    );
}

function create_course() {
    $.post(
        "api.php", {
        co_na: $(".co_name").val().trim(),
        co_fee: $(".co_fee").val().trim(),
        co_de: $(".co_detail").val().trim(),
        co_on: $(".co_on").val().trim(),
        co_osn: $(".co_osn").val().trim()
    },
        function (data) {
            $('.create-course').html(data);
        }
    );
}

function update_course(id) {
    array = id.split(",");
    $.post(
        "api.php", {
        co_up_na: $(".co_name").val().trim(),
        co_up_fee: $(".co_fee").val().trim(),
        co_up_de: $(".co_detail").val().trim(),
        co_up_on: $(".co_on").val().trim(),
        co_up_osn: $(".co_osn").val().trim(),
        co_up_id: array[0],
        co_up_old_na: array[1]
    },
        function (data) {
            $('.update-course').html(data);
        }
    );
}

function inq_th(name) {
    $.post(
        "api.php", {
        inq_th: name
    },
        function (data) {
            $('.form-control.inq_detail').html(data);
        }
    );
}

function inq_de(name) {
    $.post(
        "api.php", {
        inq_de: name
    },
        function (data) {
            $('.inq_de').html(data);
        }
    );
}

function create_inquiry() {
    $.post(
        "api.php", {
        inq_na: $(".inq_name").val().trim(),
        inq_co: $(".inq_course").val().trim(),
        inq_ph: $(".inq_phone").val().trim(),
        inq_th: $(".inq_method").val().trim(),
        inq_de: $(".inq_detail").val().trim(),
        inq_ar: $(".inq_area").val().trim(),
        inq_dct: $(".inq_date_com").val().trim(),
        inq_cmt: $(".inq_comment").val().trim()
    },
        function (data) {
            $('.create-inquiry').html(data);
        }
    );
}

function create_inquiry_admin() {
    $.post(
        "api.php", {
        inq_na: $(".inq_name").val().trim(),
        inq_co: $(".inq_course").val().trim(),
        inq_ph: $(".inq_phone").val().trim(),
        inq_th: $(".inq_method").val().trim(),
        inq_de: $(".inq_detail").val().trim(),
        inq_ar: $(".inq_area").val().trim(),
        inq_dct: $(".inq_date_com").val().trim(),
        inq_cmt: $(".inq_comment").val().trim(),
        inq_on: $(".inq_on").val().trim(),
        inq_osn: $(".inq_osn").val().trim()
    },
        function (data) {
            $('.create-inquiry').html(data);
        }
    );
}

function update_inquiry(id) {
    $.post(
        "api.php", {
        inq_up_id: id,
        inq_up_na: $(".inq_name").val().trim(),
        inq_up_co: $(".inq_course").val().trim(),
        inq_up_ph: $(".inq_phone").val().trim(),
        inq_up_th: $(".inq_method").val().trim(),
        inq_up_de: $(".inq_detail").val().trim(),
        inq_up_ar: $(".inq_area").val().trim(),
        inq_up_da: $(".inq_date").val().trim(),
        inq_up_dct: $(".inq_date_com").val().trim(),
        inq_up_cmt: $(".inq_comment").val().trim()
    },
        function (data) {
            $('.update-inquiry').html(data);
        }
    );
}

function update_inquiry_admin(id) {
    $.post(
        "api.php", {
        inq_up_id: id,
        inq_up_na: $(".inq_name").val().trim(),
        inq_up_co: $(".inq_course").val().trim(),
        inq_up_ph: $(".inq_phone").val().trim(),
        inq_up_th: $(".inq_method").val().trim(),
        inq_up_de: $(".inq_detail").val().trim(),
        inq_up_ar: $(".inq_area").val().trim(),
        inq_up_da: $(".inq_date").val().trim(),
        inq_up_dct: $(".inq_date_com").val().trim(),
        inq_up_cmt: $(".inq_comment").val().trim(),
        inq_up_on: $(".inq_on").val().trim(),
        inq_up_osn: $(".inq_osn").val().trim()
    },
        function (data) {
            $('.update-inquiry').html(data);
        }
    );
}

function inquiry_admission(id) {
    $.post(
        "api.php", {
        id: id,
        a_na: $(".a_name").val().trim(),
        a_fana: $(".a_faname").val().trim(),
        a_co: $(".a_course").val().trim(),
        a_ph: $(".a_phone").val().trim(),
        a_th: $(".a_thro").val().trim(),
        a_ar: $(".a_area").val().trim(),
        a_tfee: $(".a_tfee").val().trim(),
        a_dis: $(".a_dis").val().trim(),
        a_sex: $(".a_sex").val().trim(),
        a_dob: $(".a_dob").val().trim(),
        a_em: $(".a_email").val().trim(),
        a_cnic: $(".a_cnic").val().trim(),
        a_roll: $(".a_rollno").val().trim(),
        a_dis_com: $(".a_dis_com").val().trim()
    },
        function (data) {
            $('.inquiry_admission').html(data);
        }
    );
}

function inquiry_admission_admin(id) {
    $.post(
        "api.php", {
        id: id,
        a_na: $(".a_name").val().trim(),
        a_fana: $(".a_faname").val().trim(),
        a_co: $(".a_course").val().trim(),
        a_ph: $(".a_phone").val().trim(),
        a_th: $(".a_thro").val().trim(),
        a_ar: $(".a_area").val().trim(),
        a_tfee: $(".a_tfee").val().trim(),
        a_dis: $(".a_dis").val().trim(),
        a_sex: $(".a_sex").val().trim(),
        a_dob: $(".a_dob").val().trim(),
        a_em: $(".a_email").val().trim(),
        a_cnic: $(".a_cnic").val().trim(),
        a_roll: $(".a_rollno").val().trim(),
        a_on: $(".a_on").val().trim(),
        a_osn: $(".a_osn").val().trim(),
        a_dis_com: $(".a_dis_com").val().trim()
    },
        function (data) {
            $('.inquiry_admission').html(data);
        }
    );
}

function create_admission() {
    $.post(
        "api.php", {
        ad_na: $(".a_name").val().trim(),
        ad_fana: $(".a_faname").val().trim(),
        ad_co: $(".a_course").val().trim(),
        ad_ph: $(".a_phone").val().trim(),
        ad_th: $(".a_thro").val().trim(),
        ad_ar: $(".a_area").val().trim(),
        ad_tfee: $(".a_tfee").val().trim(),
        ad_dis: $(".a_dis").val().trim(),
        ad_sex: $(".a_sex").val().trim(),
        ad_dob: $(".a_dob").val().trim(),
        ad_em: $(".a_email").val().trim(),
        ad_cnic: $(".a_cnic").val().trim(),
        ad_roll: $(".a_rollno").val().trim(),
        ad_dis_com: $(".a_dis_com").val().trim()
    },
        function (data) {
            $('.create-admission').html(data);
        }
    );
}

function create_admission_admin() {
    $.post(
        "api.php", {
        ad_na: $(".a_name").val().trim(),
        ad_fana: $(".a_faname").val().trim(),
        ad_co: $(".a_course").val().trim(),
        ad_ph: $(".a_phone").val().trim(),
        ad_th: $(".a_thro").val().trim(),
        ad_ar: $(".a_area").val().trim(),
        ad_tfee: $(".a_tfee").val().trim(),
        ad_dis: $(".a_dis").val().trim(),
        ad_sex: $(".a_sex").val().trim(),
        ad_dob: $(".a_dob").val().trim(),
        ad_em: $(".a_email").val().trim(),
        ad_cnic: $(".a_cnic").val().trim(),
        ad_roll: $(".a_rollno").val().trim(),
        ad_on: $(".a_on").val().trim(),
        ad_osn: $(".a_osn").val().trim(),
        ad_dis_com: $(".a_dis_com").val().trim()
    },
        function (data) {
            $('.create-admission').html(data);
        }
    );
}

function update_admission(id) {
    $.post(
        "api.php", {
        ad_up_id: id,
        ad_up_na: $(".a_name").val().trim(),
        ad_up_fana: $(".a_faname").val().trim(),
        ad_up_co: $(".a_course").val().trim(),
        ad_up_ph: $(".a_phone").val().trim(),
        ad_up_th: $(".a_thro").val().trim(),
        ad_up_ar: $(".a_area").val().trim(),
        ad_up_da: $(".a_date").val().trim(),
        ad_up_tfee: $(".a_tfee").val().trim(),
        ad_up_dis: $(".a_dis").val().trim(),
        ad_up_sex: $(".a_sex").val().trim(),
        ad_up_dob: $(".a_dob").val().trim(),
        ad_up_em: $(".a_email").val().trim(),
        ad_up_cnic: $(".a_cnic").val().trim(),
        ad_up_roll: $(".a_rollno").val().trim(),
        ad_up_dis_com: $(".a_dis_com").val().trim()
    },
        function (data) {
            $('.update_admission').html(data);
        }
    );
}

function update_admission_admin(id) {
    $.post(
        "api.php", {
        ad_up_id: id,
        ad_up_na: $(".a_name").val().trim(),
        ad_up_fana: $(".a_faname").val().trim(),
        ad_up_co: $(".a_course").val().trim(),
        ad_up_ph: $(".a_phone").val().trim(),
        ad_up_th: $(".a_thro").val().trim(),
        ad_up_ar: $(".a_area").val().trim(),
        ad_up_da: $(".a_date").val().trim(),
        ad_up_tfee: $(".a_tfee").val().trim(),
        ad_up_dis: $(".a_dis").val().trim(),
        ad_up_sex: $(".a_sex").val().trim(),
        ad_up_dob: $(".a_dob").val().trim(),
        ad_up_em: $(".a_email").val().trim(),
        ad_up_cnic: $(".a_cnic").val().trim(),
        ad_up_roll: $(".a_rollno").val().trim(),
        ad_up_on: $(".a_on").val().trim(),
        ad_up_osn: $(".a_osn").val().trim(),
        ad_up_dis_com: $(".a_dis_com").val().trim()
    },
        function (data) {
            $('.update_admission').html(data);
        }
    );
}

function fee(name) {
    $.post(
        "api.php", {
        conafix: name
    },
        function (data) {
            $('.a_tfee').val(data);
        }
    );
}

function create_pay1(id) {
    $.post(
        "api.php", {
        pay1_id: id,
        pay1_ifee1: $(".a_ifee1").val().trim(),
        pay1_ifee1_date: $(".a_ifee1_date").val().trim(),
        pay1_ifee1_meth: $(".a_ifee1_meth").val().trim(),
        pay1_re_date: $(".a_re_date1").val().trim()
    },
        function (data) {
            $('.create_fee1').html(data);
        }
    );
}

function create_pay2(id) {
    $.post(
        "api.php", {
        pay2_id: id,
        pay2_ifee2: $(".a_ifee2").val().trim(),
        pay2_ifee2_date: $(".a_ifee2_date").val().trim(),
        pay2_ifee2_meth: $(".a_ifee2_meth").val().trim(),
        pay2_re_date2: $(".a_re_date2").val().trim()
    },
        function (data) {
            $('.create_fee2').html(data);
        }
    );
}

function create_pay3(id) {
    $.post(
        "api.php", {
        pay3_id: id,
        pay3_ifee3: $(".a_ifee3").val().trim(),
        pay3_ifee3_date: $(".a_ifee3_date").val().trim(),
        pay3_ifee3_meth: $(".a_ifee3_meth").val().trim(),
        pay3_re_date3: $(".a_re_date3").val().trim()
    },
        function (data) {
            $('.create_fee3').html(data);
        }
    );
}

function create_refund(id) {
    $.post(
        "api.php", {
        re_id: id,
        re: $(".a_refund").val().trim(),
        re_date: $(".a_re_date").val().trim(),
        re_meth: $(".a_re_meth").val().trim()
    },
        function (data) {
            $('.create_refund').html(data);
        }
    );
}

function create_extra_fee(id) {
    $.post(
        "api.php", {
        ep_id: id,
        ep_fee: $(".a_extra").val().trim(),
        ep_date: $(".a_ex_date").val().trim(),
        ep_meth: $(".a_ex_meth").val().trim(),
        ep_com: $(".a_ex_comment").val().trim()
    },
        function (data) {
            $('.create_extra_fee').html(data);
        }
    );
}

function update_pay1(id) {
    $.post(
        "api.php", {
        up_pay1_id: id,
        up_pay1_ifee1: $(".a_ifee1").val().trim(),
        up_pay1_ifee1_date: $(".a_ifee1_date").val().trim(),
        up_pay1_ifee1_meth: $(".a_ifee1_meth").val().trim(),
        up_pay1_re_date1: $(".a_re_date1").val().trim()
    },
        function (data) {
            $('.update_fee1').html(data);
        }
    );
}

function update_pay2(id) {
    $.post(
        "api.php", {
        up_pay2_id: id,
        up_pay2_ifee2: $(".a_ifee2").val().trim(),
        up_pay2_ifee2_date: $(".a_ifee2_date").val().trim(),
        up_pay2_ifee2_meth: $(".a_ifee2_meth").val().trim(),
        up_pay2_re_date2: $(".a_re_date2").val().trim()
    },
        function (data) {
            $('.update_fee2').html(data);
        }
    );
}

function update_pay3(id) {
    $.post(
        "api.php", {
        up_pay3_id: id,
        up_pay3_ifee3: $(".a_ifee3").val().trim(),
        up_pay3_ifee3_date: $(".a_ifee3_date").val().trim(),
        up_pay3_ifee3_meth: $(".a_ifee3_meth").val().trim(),
        up_pay3_re_date3: $(".a_re_date3").val().trim()
    },
        function (data) {
            $('.update_fee3').html(data);
        }
    );
}

function update_refund(id) {
    $.post(
        "api.php", {
        up_re_id: id,
        up_re: $(".a_refund").val().trim(),
        up_re_date: $(".a_re_date").val().trim(),
        up_re_meth: $(".a_re_meth").val().trim()
    },
        function (data) {
            $('.update_refund').html(data);
        }
    );
}

function update_extra_pay(id) {
    $.post(
        "api.php", {
        up_ep_id: id,
        up_ep_fee: $(".a_ex_fee").val().trim(),
        up_ep_date: $(".a_ex_date").val().trim(),
        up_ep_meth: $(".a_ex_meth").val().trim(),
        up_ep_com: $(".a_ex_com").val().trim()
    },
        function (data) {
            $('.update_refund').html(data);
        }
    );
}

function create_expense() {
    $.post(
        "api.php", {
        e_de: $(".e_de").val().trim(),
        e_cat: $(".e_cat").val().trim(),
        e_rs: $(".e_rs").val().trim(),
        e_meth: $(".e_meth").val().trim()
    },
        function (data) {
            $('.create_expense').html(data);
        }
    );
}

function create_expense_admin() {
    $.post(
        "api.php", {
        e_de: $(".e_de").val().trim(),
        e_cat: $(".e_cat").val().trim(),
        e_rs: $(".e_rs").val().trim(),
        e_meth: $(".e_meth").val().trim(),
        on: $(".e_on").val().trim(),
        osn: $(".e_osn").val().trim()
    },
        function (data) {
            $('.create_expense').html(data);
        }
    );
}

function update_expense(id) {
    $.post(
        "api.php", {
        e_up_id: id,
        e_up_de: $(".e_de").val().trim(),
        e_up_cat: $(".e_cat").val().trim(),
        e_up_ex: $(".e_rs").val().trim(),
        e_up_meth: $(".e_meth").val().trim(),
        e_up_date: $(".e_date").val().trim()
    },
        function (data) {
            $('.update_expense').html(data);
        }
    );
}

function exam_de(name) {
    $.post(
        "api.php", {
        examfee: name
    },
        function (data) {
            $('.eb_fee').val(data);
        }
    );
}

function create_exam() {
    $.post(
        "api.php", {
        eb_fname: $(".eb_fname").val().trim(),
        eb_lname: $(".eb_lname").val().trim(),
        eb_dob: $(".eb_dob").val().trim(),
        eb_city: $(".eb_city").val().trim(),
        eb_email: $(".eb_email").val().trim(),
        eb_edate: $(".eb_edate").val().trim(),
        eb_phone: $(".eb_phone").val().trim(),
        eb_cnic: $(".eb_cnic").val().trim(),
        eb_cnic_exp_date: $(".eb_cnic_exp_date").val().trim(),
        eb_status: $(".eb_status").val().trim(),
        eb_exam_name: $(".eb_exam_name").val().trim(),
        eb_fee: $(".eb_fee").val().trim(),
        eb_fee_meth: $(".eb_fee_meth").val().trim()
    },
        function (data) {
            $('.exam-booking').html(data);
        }
    );
}

function delete_exam(id) {
    swal({
        title: "Note!",
        text: "Are You Really Want To Delete It?",
        icon: "warning",
        buttons: ["Cancel", "Delete"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Exam Deleted Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?del_exam=" + id,
                    function (data) {
                        if (data == 1) {
                            setTimeout(function () {
                                window.reload(); // search page location
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Exam Is Not Deleted!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function update_exam(id) {
    $.post(
        "api.php", {
        eb_up_id: id,
        eb_up_fname: $(".eb_fname").val().trim(),
        eb_up_lname: $(".eb_lname").val().trim(),
        eb_up_dob: $(".eb_dob").val().trim(),
        eb_up_city: $(".eb_city").val().trim(),
        eb_up_email: $(".eb_email").val().trim(),
        eb_up_edate: $(".eb_edate").val().trim(),
        eb_up_phone: $(".eb_phone").val().trim(),
        eb_up_cnic: $(".eb_cnic").val().trim(),
        eb_up_cnic_exp_date: $(".eb_cnic_exp_date").val().trim(),
        eb_up_status: $(".eb_status").val().trim(),
        eb_up_exam_name: $(".eb_exam_name").val().trim(),
        eb_up_fee: $(".eb_fee").val().trim(),
        eb_up_fee_meth: $(".eb_fee_meth").val().trim()
    },
        function (data) {
            $('.update-booking').html(data);
        }
    );
}

function create_income() {
    $.post(
        "api.php", {
        i_de: $(".i_de").val().trim(),
        i_rs: $(".i_rs").val().trim(),
        i_meth: $(".i_meth").val().trim()
    },
        function (data) {
            $('.create_income').html(data);
        }
    );
}

function create_income_admin() {
    $.post(
        "api.php", {
        i_de: $(".i_de").val().trim(),
        i_rs: $(".i_rs").val().trim(),
        i_meth: $(".i_meth").val().trim(),
        on: $(".i_on").val().trim(),
        osn: $(".i_osn").val().trim()
    },
        function (data) {
            $('.create_income').html(data);
        }
    );
}

function delete_io(id) {
    swal({
        title: "Note!",
        text: "Are You Really Want To Delete It?",
        icon: "warning",
        buttons: ["Cancel", "Delete"],
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Good Job!", "Record Deleted Successfully!", "success", {
                    button: false,
                    timer: 1500
                });
                $.get(
                    "api.php?del_io=" + id,
                    function (data) {
                        if (data == 1) {
                            setTimeout(function () {
                                window.location.reload(); // search page location
                            }, 1000);
                        }
                    }
                );
            } else {
                swal("Note!", "Record Is Not Deleted!", "info", {
                    button: false,
                    timer: 1500
                });
            }
        });
}

function update_income(id) {
    $.post(
        "api.php", {
        i_up_id: id,
        i_up_de: $(".i_de").val().trim(),
        i_up_ex: $(".i_rs").val().trim(),
        i_up_meth: $(".i_meth").val().trim(),
        i_up_date: $(".i_date").val().trim()
    },
        function (data) {
            $('.update_income').html(data);
        }
    );
}

function update_pass(id) {
    $.post(
        "api.php", {
        pass_id: id,
        pass_una: $(".u_username").val().trim(),
        pass_pass: $(".u_pass").val().trim()
    },
        function (data) {
            $('.update-pass').html(data);
        }
    );
}
