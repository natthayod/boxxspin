<div class="page-banner-section-lg bg-image" data-bg="/assets/images/bg-sub.jpg?v=1" style="background-image: url(/assets/images/bg-sub.jpg?v=1);">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2 class="white"><a href="banktransfer">แจ้งเงินโอนธนาคาร</a></h2>
                    <ul class="page-breadcrumb">
                        <li><a href="<?php echo $url;?>">Home</a></li>
                        <li><a href="/topup">Prepaid channel</a></li>
                        <li>Bank transfer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pt-20 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg_contentwhite">
                    <form id="bank-form" name="form" role="form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class=""><img style="width:54px;" src="/assets/images/icons/promptpay.png?v=1"> รองรับทุกธนาคาร</h3>
                                <small><i class="fas fa-exclamation-circle red"></i> โปรดทำการแจ้งโอนเงินทันที หลังจากโอนเงินสำเร็จแล้ว <span class="red required">*</span></small>
                                <hr>
                                <div class="text-center media pb-10">
                                    <div class="media-body">
                                        <small>หมายเลขพร้อมเพย์</small>
                                        <h2 class="m-0 mt-0 pt-0" style="color:#014eab;font-weight:700">098-134-0546</h2>
                                        <span style="color:#0a899e;font-weight:700">ร้านลัคกี้สโตร์ โดย น.ส.อัจฉรีย์ อุเทนสุต</span>
                                        <h5 class="text-center"><span style="color:red">กรุณาโอนเงินเข้ามาเป็นเศษสตางค์เพื่อความปลอดภัย และ การตรวจสอบข้อมูลจากระบบที่ถูกต้อง</span></h5>
                                    </div>
                                </div>

                                <div class="form-fild">
                                    <p>
                                        <label>จำนวนเงิน <span class="required">*</span></label>
                                    </p>
                                    <input type="text" autocomplete="no" id="amountb" name="amount" placeholder="0.00" value="0.00" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-fild">
                                    <p>
                                        <label>วันที่ <span class="required">*</span></label>
                                    </p>
                                    <input type="text" id="dateb" name="date" placeholder="กรุณาเลือกวันที่" value="2020-03-05" data-validation="required">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-fild">
                                    <p>
                                        <label>เวลา <span class="required">*</span></label>
                                    </p>
                                    <input type="time" id="timeb" name="time" placeholder="เวลา" value="13:19">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-fild">
                                    <p>
                                        <label>ยืนยันตัวตน <span class="required">*</span></label>
                                    </p>
                                    <div class="g-recaptcha" data-sitekey="6LeOIdYUAAAAAOgTB2ZtLsX41kjD0tg2bugYMrWE" data-theme="light" style="transform:scale(0.87);-webkit-transform:scale(0.87);transform-origin:0 0;-webkit-transform-origin:0 0;">
                                        <div style="width: 304px; height: 78px;">
                                            <div>
                                                <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeOIdYUAAAAAOgTB2ZtLsX41kjD0tg2bugYMrWE&amp;co=aHR0cHM6Ly93d3cubHVja3ktc3RvcmUuaW4udGg6NDQz&amp;hl=th&amp;v=wk6lx42JIeYmEAQSHndnyT8Q&amp;theme=light&amp;size=normal&amp;cb=21gfwosf1n48" width="304" height="78" role="presentation" name="a-h7fpflpixkac" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div>
                                        <iframe style="display: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button id="btn_b" class="btn btn-success btn-block btn-md">ยืนยันการทำรายการ</button>
                                <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3" role="alert">
                                    <strong><i class="fas fa-exclamation-circle"></i> กรุณา หลีกเลี่ยง !!</strong> การโอนเงินในช่วงเวลา 23:00น. - 00:00น.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">จำนวนเงิน</th>
                                                <th style="text-align:center">เครดิตที่ได้รับ</th>
                                                <th style="text-align:center">แต้มสะสมที่ได้รับ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center">1 บาท</td>
                                                <td style="text-align:center">1 เครดิต</td>
                                                <td style="text-align:center">1 แต้ม</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="bg_contentwhite" style="margin-top:0">
                    <h3 class="">ประวัติการทำรายการ</h3>
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
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 55px;">#</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 233px;">เลขที่บัญชี</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 162px;">จำนวน</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 289px;">วัน - และเวลา</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 135px;">ช่องทาง</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110px;">
                                                    <center>สถานะ</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td>xxx-3-99915-x</td>
                                                <td>50.01 บาท</td>
                                                <td>2020-05-03 00:36</td>
                                                <td>Moblie</td>
                                                <td><span class="green"><center><span class="badge badge-success">ผ่าน</span></center>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td>xxx-3-99915-x</td>
                                                <td>50.01 บาท</td>
                                                <td>2020-05-02 23:59</td>
                                                <td>Moblie</td>
                                                <td><span class="green"><center><span class="badge badge-success">ผ่าน</span></center>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>3</td>
                                                <td>xxx-3-99915-x</td>
                                                <td>100.01 บาท</td>
                                                <td>2020-05-02 22:34</td>
                                                <td>Moblie</td>
                                                <td><span class="green"><center><span class="badge badge-success">ผ่าน</span></center>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>4</td>
                                                <td>xxx-3-99915-x</td>
                                                <td>100.21 บาท</td>
                                                <td>2020-05-02 21:51</td>
                                                <td>Moblie</td>
                                                <td><span class="green"><center><span class="badge badge-success">ผ่าน</span></center>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">แสดงทั้งหมด 1 ถึง 4 จาก 4 รายการ</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link"><i class="fas fa-chevron-right"></i></a></li>
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