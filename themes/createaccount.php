<div class="page-banner-section-lg bg-image" data-bg="/assets/images/bg-sub.jpg?v=1" style="background-image: url(/assets/images/bg-sub.jpg?v=1);">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2 class="white"><a href="createaccount">สมัครสมาชิก</a></h2>
                    <ul class="page-breadcrumb">
                        <li><a href="https://www.lucky-store.in.th">Home</a></li>
                        <li>Create account id</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-register-section section pb-20">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 offset-sm-2">
                <div class="customer-login-register">
                    <div class="bg_contentwhite">
                        <h3 class="">สมัครสมาชิก</h3>
                        <hr>
                        <div id="error"></div>
                        <a href="javascript:void(0);" class="fb-login social-login" onclick="logIn();">
                            <i class="fa fa-facebook-square fa-fw"></i> สมัครสมาชิกด้วย Facebook
                        </a>
                        <form action="#" name="form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-fild">
                                        <input type="hidden" id="affiliate" name="affiliate" value="">
                                        <p>
                                            <label>Username <span class="required">*</span></label>
                                        </p>
                                        <input type="text" id="username" name="username" placeholder="ชื่อบัญชีผู้ใช้งาน" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-fild">
                                        <p>
                                            <label>Password <span class="required">*</span></label>
                                        </p>
                                        <input type="password" id="password" name="password" placeholder="รหัสผ่าน" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-fild">
                                        <p>
                                            <label>Password Confirm <span class="required">*</span></label>
                                        </p>
                                        <input type="password" id="cpassword" name="cpassword" placeholder="ยืนยันรหัสผ่าน" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-fild">
                                        <p>
                                            <label>Email <span class="required">*</span></label>
                                        </p>
                                        <input type="email" id="email" name="email" placeholder="อีเมล์ที่ใช้งานจริง" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-fild">
                                        <p>
                                            <label>Phone <span class="required">*</span></label>
                                        </p>
                                        <input type="text" id="phone" name="phone" placeholder="เบอร์โทรศัพท์" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-fild">
                                        <p>
                                            <label>Recaptcha <span class="required">*</span></label>
                                        </p>
                                        <h2 class="box-capcha">1382441</h2>
                                        <input id="recaptcha" name="recaptcha" maxlength="7" placeholder="ใส่รหัส Recaptcha ให้ถูกต้อง . ." data-validation="required">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="login-submit mt-15">
                                        <button type="submit" id="register-btn" onclick="register();return false;" class="btn btn-success btn-block">สมัครสมาชิก</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="login-submit mt-15">
                                        <button type="reset" class="btn btn-danger btn-block">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
	var person = { userID: "", name: "", accessToken: "", picture: "", email: ""};
	function logIn() {
		FB.login(function (response) {
			if (response.status == "connected") {
				person.userID = response.authResponse.userID;
				person.accessToken = response.authResponse.accessToken;

				FB.api('/me?fields=id,name,email,picture.type(large)', function (userData) {
					person.name = userData.name;
					person.email = userData.email;
					person.picture = userData.picture.data.url;

					$.ajax({
					   url: "/accountmanage/callback?affiliate_id=",
					   method: "POST",
					   data: person,
					   dataType: 'text',
					   success: function (response) {
						   window.history.go(-1);
					   }
					});
				});
			}
		}, {scope: 'public_profile, email'})
	}
    </script>
    <script>
	document.forms["form"].addEventListener("input", function(e) {
	var input = this.querySelector("input[name=username]");
	var not = input.value.match(/[^a-zA-Z0-9]/);
	if (not) {
	not.forEach(function(text) {
	input.value = input.value.replace(text, "")
	})
	}
	})
	function register() {
	var username  = $('#username').val();
	var password  = $('#password').val();
	var cpassword = $('#cpassword').val();
	var phone     = $('#phone').val();
	var email     = $('#email').val();
	var affiliate     = $('#affiliate').val();
	var recaptcha = $('#recaptcha').val();
	$('#error').html('<div class="alert alert-info">กรุณารอสักครู่..</div>');
	if (username.length == 0 || password.length == 0 || phone.length == 0 || email.length == 0 || recaptcha.length == 0) {
	$('#error').html('<div class="alert alert-danger">กรุณากรอกข้อมูลให้ครบทุกถ้วน</div>');
	return;
	}
	if (username.length < 6) {
	$('#error').html('<div class="alert alert-danger">กรุณาตั้ง username ให้มากกว่า 6 ตัวอักษรขึ้นไป</div>');
	return;
	}
	if (password.length < 6) {
	$('#error').html('<div class="alert alert-danger">กรุณาตั้ง Password ให้มากกว่า 6 ตัวอักษรขึ้นไป</div>');
	return;
	}
	if (password != cpassword) {
	$('#error').html('<div class="alert alert-danger">กรุณาตรวจสอบ Password ให้ตรงกัน</div>');
	return;
	}
	if (phone.length < 10) {
	$('#error').html('<div class="alert alert-danger">หมายเลขโทรศัพท์ไม่ครบถ้วน</div>');
	return;
	}
	$("#register-btn").prop('disabled', true);
	$.ajax({
	type: "POST",
	url: "/createaccount/save",
	data: {'username': username, 'password': password, 'cpassword': cpassword, 'phone': phone, 'email': email, 'affiliate': affiliate,  'recaptcha': recaptcha}
	}).done(function (response) {
	var obj = jQuery.parseJSON(response);
	if (obj.error == 'success') {
	window.location.href = "/createaccount";
	} else if (obj.error == 'error') {
	$("#register-btn").prop('disabled', false);
	$('#error').html('<div class="alert alert-danger">' + obj.msg + '</div>');
	}
	});
	}
	</script>