$('document').ready(function() {

   
    var email_state = false;
    $('#email').on('blur', function() {
        var email = $('#email').val();
        if (email == '') {
            email_state = false;
            return;
        }
        $.ajax({
            url: 'edit.php',
            type: 'post',
            data: {
                'email_check': 1,
                'email': email
            },
            success: function(response) {
                if (response == 'taken') {
                    email_state = false;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass('form_error');
                    $('#email').siblings("span").text("อีเมลนี้ไม่สามารถใช้ได้");
                } else if (response == "not_taken") {
                    email_state = true;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass('form_success');
                    $('#email').siblings("span").text("อีเมลนี้สามารถใช้ได้");
                }
            }
        })
    });

    $('#edit_btn').on("click", function(e) {
        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        if (username_state == false || email_state == false) {
            e.preventDefault();
            $("#error_msg").text("กรุณาใส่ข้อมูลให้ครบ");
        } else {
            $.ajax({
                url: 'edit.php',
                type: 'post',
                data: {
                    'save': 1,
                    'email': email,
                    'password': password
                },
                success: function(response) {
                    alert('User saved');
                    $('#email').val('');
                    $('#password').val('');
                }
            })
        }
    });


});