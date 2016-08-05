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
<div class="row">
<div class="col-lg-12 col-md-12">
<h5>Tabs Sample</h5>
<ul class="nav nav-tabs">
<li class=""><a href="#home" data-toggle="tab">Home</a></li>
<li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
<li class="active"><a href="#messages" data-toggle="tab">Messages</a></li></ul>
  <div class="tab-content">
  <div class="tab-pane fade" id="home">
                                <h4>Home Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h4>Profile Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>

                            </div>
                            <div class="tab-pane fade active in" id="messages">
                                <h4>Messages Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>
</div>
</div>
</div>
</div> <!--End-->
<div class="row">
<div class="col-md-12"><?php include 'report1.php'; ?></div>
</div>
<div class="row">
<div class="col-md-12"><?php include 'report2.php'; ?></div>
</div>
<div class="row">
<div class="col-md-12"><?php include 'report3.php'; ?></div>
</div>
<div class="row">
<div class="col-md-12"><?php include 'report4.php'; ?></div>
</div>

        <!-- Footer -->
<hr>
  <footer>
      <div class="row">
          <div class="col-lg-12">
              <p>Copyright &copy; DAMASAC : Data Management and Statistical Analysis Center| 2016</p>
            </div>
            </div>

  </footer>
<!-- /.container -->
</div>

</body>
</html>
