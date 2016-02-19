<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Hasby Administrator | Login</title>
    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>statics/css/admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>statics/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container" style="margin-top:10%;">
      <div class="row">
        <div class="col-lg-4">
		    </div>
        <div class="col-lg-4">
          <form class="form-login" method="post">
            <h2 class="form-signin-heading"><b>Hasby</b> Sablon</h2>
            <?php echo $warning; ?>
            <label for="nik" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Masuk">
          </form>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>statics/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>statics/js/bootstrap.min.js"></script>
  </body>
</html>
