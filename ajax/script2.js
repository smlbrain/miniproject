$('document').ready(function() {

    var username_state = false;
    var email_state = false;
    var password_state = false;

    $('#username').on('blur', function() {
        var username = $('#username').val();
        if (username.match(/^[a-zA-Z\s]{4,}$/)) {
            $.ajax({
            url: 'register.php',
            type: 'post',
            data: {
                'username_check': 1,
                'username': username
            },
            success: function(response) {
                if (response == 'taken') {
                    username_state = false;
                    $('#username').parent().removeClass();
                    $('#username').parent().addClass('form_error');
                    $('#username').siblings("span").text("ชื่อผู้ใช้นี้ไม่สามารถใช้ได้");
                } else if (response == "not_taken") {
                    username_state = true;
                    $('#username').parent().removeClass();
                    $('#username').parent().addClass('form_success');
                    $('#username').siblings("span").text("ชื่อผู้ใช้นี้สามารถใช้ได้");
                }
            }
        })
            
        }else{
        username_state = false;
        $('#username').parent().removeClass();
                    $('#username').parent().addClass('form_error');
                    $('#username').siblings("span").text("ชื่อผู้ใช้ต้องมีอย่างน้อย4ตัวอักษร");
            return;
        }
    });

    $('#email').on('blur', function() {
        var email = $('#email').val();
        if (email.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)) { 
            $.ajax({
            url: 'register.php',
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
            
        }else{
            email_state = false;
            $('#email').parent().removeClass();
            $('#email').parent().addClass('form_error');
            $('#email').siblings("span").text("ต้องใช้อีเมลเท่านั้น");
            return;

        }
        
    });
    $('#password').on('blur', function() {
        var password = $('#password').val();
        if (password.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)) { 
            $('#password').parent().removeClass();
            $('#password').parent().addClass('form_success');
            $('#password').siblings("span").text("รหัสผ่านนี้สามารถใช้ได้");
            return;
          
            
        }else{
            password_state = false;
            $('#password').parent().removeClass();
            $('#password').parent().addClass('form_error');
            $('#password').siblings("span").text("รหัสผ่านต้องมีอย่างน้อย8ตัวและประกอบด้วยตัวอักษรและตัวเลข");
            return;

        }
        
    });

   

    $('#reg_btn').on("click", function(e) {
        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        if (username_state == false || email_state == false) {
            e.preventDefault();
            $("#error_msg").text("กรุณากรอกข้อมูลให้ครบ");
        } else {
            $.ajax({
                url: 'register.php',
                type: 'post',
                data: {
                    'save': 1,
                    'email': email,
                    'username': username,
                    'password': password
                },
                success: function(response) {
                    alert('User saved');
                    $('#username').val('');
                    $('#email').val('');
                    $('#password').val('');
                }
            })
        }
    });


});