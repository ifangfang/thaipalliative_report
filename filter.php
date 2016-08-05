<div class="col-md-12">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    ตั้งค่ารูปแบบรายงาน
                </h4>
            </div>
            <div role="tabpanel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <b>เลือกเขตบริการสุขภาพ</b>
                            <select id="tpc_area_zone" class="form-control" name="tpc_province">
<option value="">- ทุกเขตบริการสุขภาพ -</option>
<option value="01">เขตบริการสุขภาพที่ 1</option>
<option value="02">เขตบริการสุขภาพที่ 2</option>
<option value="03">เขตบริการสุขภาพที่ 3</option>
<option value="04">เขตบริการสุขภาพที่ 4</option>
<option value="05">เขตบริการสุขภาพที่ 5</option>
<option value="06">เขตบริการสุขภาพที่ 6</option>
<option value="07">เขตบริการสุขภาพที่ 7</option>
<option value="08">เขตบริการสุขภาพที่ 8</option>
<option value="09">เขตบริการสุขภาพที่ 9</option>
<option value="10">เขตบริการสุขภาพที่ 10</option>
<option value="11">เขตบริการสุขภาพที่ 11</option>
<option value="12">เขตบริการสุขภาพที่ 12</option>
</select>                                                    </div>
                        <div class="col-md-3 form-group"><b>จาก</b>
                            <input type="date" id="palliative_date_start" class="form-control" name="cccc">                        </div><div class="col-md-3 form-group"><b>ถึง</b>
                            <input type="date" id="palliative_date_end" class="form-control" name="ccccx">                        </div><div class="col-md-6 form-group">
                            <select id="tpc_province" class="form-control" name="tpc_province"><option value="">- ทุกจังหวัด -</option></select></div><div class="col-md-6 form-group"><select id="tpc_pay_right" class="form-control" name="tpc_pay_right" onchange="palliativeReport3($(this).val())">
<option value="0">ทุกสิทธิ์การรักษา</option>
<option value="1">บัตรทอง</option>
<option value="2">ข้าราชการ</option>
<option value="3">ประกันสังคม</option>
<option value="4">รัฐวิสาหกิจ</option>
<option value="5">จ่ายเอง</option>
<option value="6">อื่นๆ</option>
</select>                        </div>
                    </div>
                    <!-- end col and row-->

                </div>
            </div>
        </div>
        <!-- end panel-->

<!--//end col-->

    </div>
