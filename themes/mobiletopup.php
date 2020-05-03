<div class="page-banner-section-lg bg-image" data-bg="/assets/images/bg-sub.jpg?v=1" style="background-image: url(/assets/images/bg-sub.jpg?v=1);">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2 class="white"><a href="mobiletopup">เติมเงินมือถือ</a></h2>
                    <ul class="page-breadcrumb">
                        <li><a href="https://www.lucky-store.in.th">Home</a></li>
                        <li>Mobile topup</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<div class="checkout-section section pt-20 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg_content">
                    <center><img style="margin-bottom:15px;" src="/assets/images/mobile-topup.png?v=7" class="img-fluid"></center>
                    <style media="screen">
                        .idsd:nth-child(1) {
                            background-image: url(/assets/images/icons/dtac_logo.jpg);
                            background-repeat: no-repeat;
                            background-position: right;
                            background-size: 80px;
                        }
                        
                        .idsd:nth-child(2) {
                            background-image: url(/assets/images/icons/true_h_logo.jpg);
                            background-repeat: no-repeat;
                            background-position: right;
                            background-size: 80px;
                        }
                        
                        .idsd:nth-child(3) {
                            background-image: url(/assets/images/icons/ais_logo.jpg);
                            background-repeat: no-repeat;
                            background-position: right;
                            background-size: 80px;
                        }
                        
                        .idsd:nth-child(4) {
                            background-image: url(/assets/images/icons/my.jpg);
                            background-repeat: no-repeat;
                            background-position: right;
                            background-size: 80px;
                        }
                        
                        .list {
                            width: 100%;
                            border: 1px #28a745 solid;
                        }
                    </style>

                    <form class="checkout-form">

                        <div id="billing-form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label for="txt_brand">ค่ายโทรศัพท์มือถือ <span class="required" style="color:red">*</span></label>
                                    <select class="nice-select" style="display: none;" id="txt_brand">
                                        <option class="option idsd" value="0"></option>
                                        <option class="option idsd" value="HAPPY"></option>
                                        <option class="option idsd" value="TRMV"></option>
                                        <option class="option idsd" value="12CALL"></option>
                                        <option class="option idsd" value="MY"></option>
                                    </select>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">เลือกค่ายโทรศัพท์มือถือที่ต้องการเติมเงิน</span>
                                        <ul class="list">
                                            <li data-value="HAPPY" class="option idsd">DTAC</li>
                                            <li data-value="TRMV" class="option idsd">Truemove H</li>
                                            <li data-value="12CALL" class="option idsd">AIS</li>
                                            <li data-value="MY" class="option idsd">MY by CAT</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>หมายเลขโทรศัพท์ <span class="required" style="color:red">*</span></label>
                                    <input type="text" id="txt_tel" name="txt_price" placeholder="หมายเลขโทรศัพท์" maxlength="10" required="">
                                </div>
                                <div class="col-lg-12 col-12">

                                    <label for="txt_price">จำนวนเงิน <span class="required" style="color:red">*</span></label>
                                    <select class="nice-select" style="display: none;" id="txt_price" name="txt_price">
                                        <option class="option" value="10">10 บาท</option>
                                        <option class="option" value="20">20 บาท</option>
                                        <option class="option" value="50">50 บาท</option>
                                        <option class="option" value="100">100 บาท</option>
                                        <option class="option" value="300">300 บาท</option>
                                        <option class="option" value="500">500 บาท</option>
                                    </select>
                                    <div class="nice-select" tabindex="1">
                                        <span class="current">เลือกจำนวนเงิน</span>
                                        <ul class="list">
                                            <li data-value="10" class="option">10 บาท</li>
                                            <li data-value="20" class="option">20 บาท</li>
                                            <li data-value="50" class="option">50 บาท</li>
                                            <li data-value="100" class="option">100 บาท</li>
                                            <li data-value="300" class="option">300 บาท</li>
                                            <li data-value="500" class="option">500 บาท</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-fild">
                                        <p>
                                            <label>ยืนยันตัวตน <span class="required">*</span></label>
                                        </p>
                                        <div class="g-recaptcha" data-sitekey="6LeOIdYUAAAAAOgTB2ZtLsX41kjD0tg2bugYMrWE" data-theme="light" style="transform:scale(0.87);-webkit-transform:scale(0.87);transform-origin:0 0;-webkit-transform-origin:0 0;">
                                            <div style="width: 304px; height: 78px;">
                                                <div>
                                                    <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeOIdYUAAAAAOgTB2ZtLsX41kjD0tg2bugYMrWE&amp;co=aHR0cHM6Ly93d3cubHVja3ktc3RvcmUuaW4udGg6NDQz&amp;hl=th&amp;v=wk6lx42JIeYmEAQSHndnyT8Q&amp;theme=light&amp;size=normal&amp;cb=2p6s9bitmjc7" width="304" height="78" role="presentation" name="a-4f27e0sictzm" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                </div>
                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                            </div>
                                            <iframe style="display: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-success btn-block" id="btn_pay" name="btn_pay">ยืนยันการเติมเงิน</button>
                                    <div class="alert alert-danger text-center mt-3 mb-0" role="alert">
                                        <i class="fas fa-exclamation-circle"></i> คำเตือน . . หากลูกค้าเลือกค่ายผิด หรือ กรอกเบอร์โทรศัพท์ไม่ถูกต้อง ระบบจะคืนเงินให้ภายใน 24 ช.ม. <i class="fas fa-exclamation-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="bg_content">
                    <h3 class="">ประวัติการเติมเงินมือถือ</h3>
                    <hr>
                    <div class="table-responsive">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="example1_length">
                    <label>แสดง
                        <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> รายการ</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="example1_filter" class="dataTables_filter">
                    <label>ค้นหา :
                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table text-center dataTable no-footer" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 69px;">#</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="เบอร์โทรศัพท์: activate to sort column ascending" style="width: 204px;">
                                <center>เบอร์โทรศัพท์</center>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="จำนวนเงิน: activate to sort column ascending" style="width: 170px;">จำนวนเงิน</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="เครือข่าย: activate to sort column ascending" style="width: 151px;">เครือข่าย</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="สถานะ: activate to sort column ascending" style="width: 121px;">สถานะ</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="วัน - เวลา: activate to sort column ascending" style="width: 161px;">วัน - เวลา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td valign="top" colspan="6" class="dataTables_empty">ไม่พบข้อมูล</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">แสดงทั้งหมด 0 to 0 of 0 รายการ</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                        <li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
		$(function () {
			$('#example1').DataTable({
			'paging'      : true,
			'lengthChange': true,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : true
			})
		})
    </script>
<script src="https://www.lucky-store.in.th/assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="https://www.lucky-store.in.th/assets/js/datatable/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {

    $("#btn_pay").click(function(e){
		
      e.preventDefault();
      var formData = new FormData();
      formData.append('txt_brand', $("#txt_brand").val());
      formData.append('txt_tel', $("#txt_tel").val());
      formData.append('txt_price', $("#txt_price").val());
	  captcha = grecaptcha.getResponse();
	  formData.append('captcha', captcha);

      $("#btn_pay").attr("disabled",true);
      $.ajax({
          type: 'POST',
          url: 'api/mtopup',
          data:formData,
          contentType: false,
          processData: false
      }).done(function(res){
          result = res;
          var n = result.point;
          var parts = parseFloat(n).toFixed(0).split(".");
          var num = parts[0].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + (parts[1] ? "." + parts[1] : "");
          $("#credit_user").text(num+" บาท");
		  grecaptcha.reset();
		  swal({
				icon: 'success',
				title: 'Success',
				text: result.message
			}).then(function() {
				location.reload();
			});
          $("#btn_pay").attr("disabled",false);
          //console.clear();
      }).fail(function(jqXHR){
          res = jqXHR.responseJSON;
		  grecaptcha.reset();
          swal('เกิดข้อผิดพลาด', res.message, 'error');
          $("#btn_pay").attr("disabled",false);
          console.clear();
      });
    });

  });
</script>