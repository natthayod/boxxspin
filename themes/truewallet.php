<div class="page-banner-section-lg bg-image" data-bg="/assets/images/bg-sub.jpg?v=1" style="background-image: url(/assets/images/bg-sub.jpg?v=1);">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2 class="white"><a href="truewallet">แจ้งโอนทรูวอลเล็ท</a></h2>
                    <ul class="page-breadcrumb">
                        <li><a href="https://www.lucky-store.in.th">Home</a></li>
                        <li><a href="/topup">Prepaid channel</a></li>
                        <li>True wallet</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pt-10 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg_content">
                    <h3 class="">โอนผ่านแอพ <img style="width:54px;" src="https://www.lucky-store.in.th/assets/images/icons/truewallet.png"> เท่านั้น</h3>
                    <small><i class="fas fa-exclamation-circle red"></i> โปรดเช็คเบอร์โทรศัพท์ด้านล่างก่อนทำการโอนเงินทุกครั้ง โอนแล้วไม่สามารถถอดยอดคืนได้ <span class="red required">*</span></small>
                    <hr>
                    <h4 class="text-center mt-2 gray">เลขบัญชี <span style="color:#ed1c24;font-weight:600;">True</span> <span style="color:#f58220;font-weight:600;">Wallet</span></h4>
                    <div class="text-center">
                        <h2 class="text-center mb-5 font-weight-bold" style="color:#009b3b;">090-892-1079</h2>
                        <h3 class="text-center font-weight-bold" style="color:#333;">ไพบูลย์ บรรจง</h3>
                        <h5 class="text-center" style="color:#f00;">* เมื่อโอนเงินแล้วรอ 1 นาทีแล้วนำเลขอ้างอิงมา กรอกด้านล่างได้ทันที *</h5>

                        <hr class="d-flex d-lg-none">
                    </div>
                    <form role="form">
                        <div class="form-fild">
                            <p>
                                <label>เลขอ้างอิง <span class="required">*</span></label>
                            </p>
                            <input type="text" id="txt_ref" name="txt_ref" placeholder="Transaction ID" maxlength="14" required="">
                        </div>
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-block btn-md mt-2" id="btn_confrim_ref">ยืนยันการทำรายการ</button>
                        </div>
                    </form>
                    <div class="mt-3 mb-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">จำนวนเงิน</th>
                                        <th style="text-align:center">เครดิตที่ได้รับ</th>
                                        <th style="text-align:center">แต้มเติมเงินสะสม</th>
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
                <div class="bg_content">
                    <h3 class="">ประวัติการทำรายการ</h3>
                    <hr>
                    <div class="table-responsive">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="dataTables_length" id="example1_length">
                                <label>แสดง
                                    <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> รายการ</label>
                            </div>
                            <div id="example1_filter" class="dataTables_filter">
                                <label>ค้นหา :
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                                </label>
                            </div>
                            <table id="example1" class="table text-center display dataTable no-footer" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ลำดับ: activate to sort column descending" style="width: 146px;">
                                            <center>ลำดับ
                                                <center></center>
                                            </center>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="เลขที่อ้างอิง: activate to sort column ascending" style="width: 241px;">เลขที่อ้างอิง</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="จำนวน: activate to sort column ascending" style="width: 164px;">จำนวน</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="วัน - เวลา: activate to sort column ascending" style="width: 202px;">วัน - เวลา</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="สถานะ: activate to sort column ascending" style="width: 165px;">
                                            <center>สถานะ</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="myBody">
                                    <tr class="odd">
                                        <td valign="top" colspan="5" class="dataTables_empty">ไม่พบข้อมูล</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">แสดงทั้งหมด 0 to 0 of 0 รายการ</div>
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