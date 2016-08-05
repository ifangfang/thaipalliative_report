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
        </div> <!-- end panel-->

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                            รายงานการนำเข้าข้อมูล
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="h4">รายงานระหว่างวันที่ </span> <span class="h4 date_start">2015-01-01</span> ถึง <span class="h4 date_end">2016-01-01</span><br>
                                <button type="button" id="btn-palliative-report1" class="btn btn-success btn-md"><span class="fa fa-search"></span> แสดงรายงาน</button>                                                            </div>
                        </div>
                        <br>
                        <div id="report-palliative1">
<div id="palliative-report1" class="grid-view">	    <div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
			    <div class="col-md-6"></div>
			    <div class="col-md-6 text-right">

			    </div>
			</div>
		</div>
		<div class="table-responsive"><table class="table table-striped table-bordered table-hover"><thead>
<tr><th style="text-align: center;">#</th><th class="text-center">ชื่อสถานบริการ</th><th class="text-center">Register</th><th class="text-center">Treatment</th><th class="text-center">Follow-up</th><th class="text-center">Refer</th></tr>
</thead>
<tbody>
<tr><td colspan="6"><div class="empty">No results found.</div></td></tr>
</tbody></table></div>
		<div class="panel-footer"></div>
	    </div>	</div><h5>Total Register = , Total Treatment = , Total Follow-up = , Total Refer = </h5>
<script src="/assets/79f63fd4/jquery.js?v=1464466163"></script>
<script src="/assets/5406f6f0/yii.js?v=1464466165"></script>
<script src="/assets/5406f6f0/yii.gridView.js?v=1464466165"></script>
<script type="text/javascript">jQuery('#palliative-report1').yiiGridView({"filterUrl":"\/timeline-event\/palliative-report?type=report1","filterSelector":"#palliative-report1-filters input, #palliative-report1-filters select"});</script></div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            รายงานแยกตามสิทธิ์การรักษา (ไม่นับเลขบัตรที่ลงทะเบียนซ้ำ)
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="h4">รายงานระหว่างวันที่ </span> <span class="h4 date_start">2015-01-01</span> ถึง <span class="h4 date_end">2016-01-01</span><br>
                                <button type="button" id="btn-palliative-report2" class="btn btn-success btn-md"><span class="fa fa-search"></span> แสดงรายงาน</button>                                                            </div>
                        </div>
                        <br>
                        <div id="report-palliative2"><div id="w0" class="grid-view">	    <div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
			    <div class="col-md-6"></div>
			    <div class="col-md-6 text-right">

			    </div>
			</div>
		</div>
		<div class="table-responsive"><table class="table table-striped table-bordered table-hover"><thead>
<tr><th style="text-align: center;">#</th><th class="text-center">จังหวัด</th><th class="text-center">บัตรทอง</th><th class="text-center">ข้าราชการ</th><th class="text-center">ประกันสังคม</th><th class="text-center">รัฐวิสาหกิจ</th><th class="text-center">จ่ายเอง</th><th class="text-center">อื่นๆ</th><th class="text-center bg-danger">ไม่ระบุ</th><th class="text-center">ทั้งหมด</th></tr>
</thead>
<tbody>
<tr><td colspan="10"><div class="empty">No results found.</div></td></tr>
</tbody></table></div>
		<div class="panel-footer"></div>
	    </div>	</div><script src="/assets/79f63fd4/jquery.js?v=1464466163"></script>
<script src="/assets/5406f6f0/yii.js?v=1464466165"></script>
<script src="/assets/5406f6f0/yii.gridView.js?v=1464466165"></script>
<script type="text/javascript">jQuery('#w0').yiiGridView({"filterUrl":"\/timeline-event\/palliative-report?type=report2","filterSelector":"#w0-filters input, #w0-filters select"});</script></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            รายงานข้อมูลเครือข่าย (เลือกจังหวัด จำแนกตามสิทธิ์การรักษา)
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="h4">รายงานระหว่างวันที่ </span> <span class="h4 date_start">2015-01-01</span> ถึง <span class="h4 date_end">2016-01-01</span><br>
                                <button type="button" id="btn-palliative-report3" class="btn btn-success btn-md"><span class="fa fa-search"></span> แสดงรายงาน</button>                                                            </div>
                        </div>
                        <br>
                        <div id="report-palliative3"></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="heading4">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">
                            รายงานสรุปตามเขตบริการสุขภาพ
                        </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="h4">รายงานระหว่างวันที่ </span> <span class="h4 date_start">2015-01-01</span> ถึง <span class="h4 date_end">2016-01-01</span><br>
                                <button type="button" id="btn-palliative-report4" class="btn btn-success btn-md"><span class="fa fa-search"></span> แสดงรายงาน</button>                                                            </div>
                        </div>
                        <br>
                        <div id="report-palliative4"><div class="row">
    <div class="col-md-6">
<div id="gd-palliative-report3" class="grid-view">	    <div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
			    <div class="col-md-6"></div>
			    <div class="col-md-6 text-right">

			    </div>
			</div>
		</div>
		<div class="table-responsive"><table class="table table-striped table-bordered table-hover"><thead>
<tr><th style="text-align: center;">#</th><th class="text-center">ชื่อจังหวัด</th><th class="text-center">Total case</th><th class="text-center">ใช้ Opioid</th><th class="text-center">ไม่ใช้</th><th class="text-center">ไม่ระบุ</th></tr>
</thead>
<tbody>
<tr><td colspan="6"><div class="empty">No results found.</div></td></tr>
</tbody></table></div>
		<div class="panel-footer"></div>
	    </div>	</div>    </div>

        <div class="col-md-6">
<div id="gd-palliative-report3" class="grid-view">	    <div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
			    <div class="col-md-6"></div>
			    <div class="col-md-6 text-right">

			    </div>
			</div>
		</div>
		<div class="table-responsive"><table class="table table-striped table-bordered table-hover"><thead>
<tr><th style="text-align: center;">#</th><th class="text-center">ชื่อจังหวัด</th><th class="text-center">Total case</th><th class="text-center">การดูแลต่อเนื่องที่บ้าน</th><th class="text-center">ไม่ได้ติดตาม</th><th class="text-center">อื่นๆ</th><th class="text-center">ไม่ระบุ</th></tr>
</thead>
<tbody>
<tr><td colspan="7"><div class="empty">No results found.</div></td></tr>
</tbody></table></div>
		<div class="panel-footer"></div>
	    </div>	</div>            </div>
        </div>
<script src="/assets/79f63fd4/jquery.js?v=1464466163"></script>
<script src="/assets/5406f6f0/yii.js?v=1464466165"></script>
<script src="/assets/5406f6f0/yii.gridView.js?v=1464466165"></script>
<script type="text/javascript">jQuery('#gd-palliative-report3').yiiGridView({"filterUrl":"\/timeline-event\/palliative-report?type=report4","filterSelector":"#gd-palliative-report3-filters input, #gd-palliative-report3-filters select"});</script></div>
                    </div>
                </div>
            </div>

        </div><!--//end col-->

    </div>
