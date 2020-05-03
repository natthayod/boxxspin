<div class="page-banner-section-lg bg-image" data-bg="/assets/images/bg-sub.jpg?v=1" style="background-image: url(/assets/images/bg-sub.jpg?v=1);">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2 class="white"><a href="accountmanage">ระบบจัดการบัญชีผู้ใช้</a></h2>
                    <ul class="page-breadcrumb">
                        <li><a href="<?php echo $url;?>">Home</a></li>
                        <li>Account manage</li>
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
                        <h3 class="">เข้าสู่ระบบ</h3>
                        <hr>
                        <div id="error"></div>
                        <a href="javascript:void(0);" class="fb-login social-login" onclick="logIn();">
                            <i class="fa fa-facebook-square fa-fw"></i> เข้าสู่ระบบด้วย Facebook
                        </a>
                        <form action="#">
                            <div class="form-fild">
                                <p>
                                    <label>Username <span class="required">*</span></label>
                                </p>
                                <input type="text" id="username" name="username" placeholder="ชื่อบัญชีผู้ใช้งาน" required="">
                            </div>
                            <div class="form-fild">
                                <p>
                                    <label>Password <span class="required">*</span></label>
                                </p>
                                <input type="password" id="password" name="password" placeholder="รหัสผ่าน" required="">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="login-submit mt-15">
                                        <input type="hidden" name="recaptcha_response" id="recaptcha">
                                        <button type="submit" onclick="login();return false;" class="btn btn-success btn-block">เข้าสู่ระบบ</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="login-submit mt-15">
                                        <a href="<?php echo $url;?>/accountmanage/forget" class="btn btn-danger btn-block">ลืมรหัสผ่าน ?</a>
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
	var person = { userID: "", name: "", accessToken: "", email: ""};
	function logIn() {
		FB.login(function (response) {
			if (response.status == "connected") {
				person.userID = response.authResponse.userID;
				person.accessToken = response.authResponse.accessToken;

				FB.api('/me?fields=id,name,email', function (userData) {
					person.id = userData.id;
					person.name = userData.name;
					person.email = userData.email;

					$.ajax({
					   url: "/accountmanage/callback",
					   method: "POST",
					   data: person,
					   dataType: 'text',
					   success: function (response) {
			   				   location.href = '<?php echo $url;?>';
			   		}
					});
				});
			}
		}, { scope: 'email' })
	}
	function checkLoginState() {
		FB.getLoginStatus(function(response) {
			logIn(response);
		});
	}
    </script>
    <script>
	function login() {
		
		grecaptcha.ready(function () {
		grecaptcha.execute('6LcLhNgUAAAAAJQE0HY79MZ6riuznpfv0d0otw2x', { action: 'accountmanage' }).then(function (token) {
		var recaptcha_response = document.getElementById('recaptcha');
		recaptcha.value = token;
		
		var username = $('#username').val();
		var password = $('#password').val();
		var recaptcha_post = $('#recaptcha_response').val();
		$('#error').html('<div class="alert alert-info">Loading..</div>');
		if (username.length == 0 || password.length == 0) {
			$('#error').html('<div class="alert alert-danger">กรุณากรอกข้อมูล..</div>');
			return;
		}

		$("#login-btn").prop('disabled', true);
			$.ajax({
				type: "POST",
				url: "/accountmanage/ajaxlogin",
				data: {'username': username, 'password': password, 'recaptcha_response':recaptcha_post}
				}).done(function (response) {
				var obj = jQuery.parseJSON(response);
					if (obj.error == 'success') {
						location.reload();
					} else if (obj.error == 'error') {
						$("#login-btn").prop('disabled', false);
						$('#error').html('<div class="alert alert-danger">' + obj.msg + '</div>');
					}
				});
			});
		});
	}
	</script>