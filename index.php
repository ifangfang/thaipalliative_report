<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thaipalliative Report</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>
 <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<!-- load graph swfobject graph-->

</head>



<body>

<?php include 'header.php'; ?>
    <!-- Page Content -->
<div class="container"><!-- end div show under footer -->
<?php include 'filter.php'; ?>
<hr>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<h5>Report</h5>
<ul class="nav nav-tabs">
<li class="active"><a href="#report1" data-toggle="tab">ส่วนที่ 1 รายงานเฉพาะผู้ป่วยของ</a></li>
<li><a href="#report2" data-toggle="tab">ส่วนที่ 2 รายงานเปรียบเทียบระหว่างหน่วยบริการกับพื้นที่อื่นๆ</a></li>
<li><a href="#report3" data-toggle="tab">ส่วนที่ 3 การประเมินด้านจิตสังคม และจิตวิญญาณ</a></li>
<li><a href="#report4" data-toggle="tab">ส่วนที่ 4 การยืมอุปกรณ์การแพทย์</a></li>
</ul>
<div class="tab-content">
  <div id="report1" class="tab-pane fade in active">
    <a href="#" class="btn btn-info">แสดงรายงาน</a>
    <p><?php include 'report1.php'; ?></p>
  </div>
  <div id="report2" class="tab-pane fade">
    <h4>แสดงรายงาน</h4>
    <p>
    <?php include 'report2.php'; ?></p>
  </div>
  <div id="report3" class="tab-pane fade">
    <h4>แสดงรายงาน</h4>
    <p>
    <?php include 'report3.php'; ?></p>
  </div>
  <div id="report4" class="tab-pane fade">
    <h4>แสดงรายงาน</h4>
    <p>
    <?php include 'report4.php'; ?></p>
  </div>
</div>
</div>
</div>
</div>




<!--End-->

        <!-- Footer -->
<hr>
  <footer>
      <div class="row">
          <div class="col-lg-12">
              <p>Copyright &copy; DAMASAC : Data Management and Statistical Analysis Center | 2016</p>
            </div>
            </div>

  </footer>
<!-- /.container -->
</div>

</body>
</html>
