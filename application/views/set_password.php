
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dance Manager || Forgot Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Set Password</h3>
                </div>
               

                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('forgot/reset_password'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Enter your Email" name="user_email" type="email" autofocus>
                            </div> 
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter new Password" name="user_password" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Reset Password" name="Reset Password" >

                        </fieldset>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>
