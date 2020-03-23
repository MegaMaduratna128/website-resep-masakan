<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.6/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.6/css/bootstrap.min.css">
	<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
	<script src="Bootstrap-3.3.6/js/jquery.js"></script>
    
    <style> /* css untuk mengatur tampilan login supaya berada di tengah */
        #index{
            margin-top: 100px;
            margin-left: 400px;
        }
    </style>
</head>

<body style="background:url(foto/bg-6.jpg);background-size:100% 160%;">
<div class="container">
	<div class="row" style="margin-top:100px;">
		<div class="col-md-offset-4 col-md-8">

            <div class="card col-sm-6"  style="background-color:rgba(0,0,0, 0.2);">
                <div class="card-body">

				    <form action="cekloginadmin.php" class="inner-login" method="post">

					    <div class="form-group">
						    <center><img src="foto/login.png" height="160px;"></center>
					    </div>
					
					    <div class="form-group">
						    <div class="input-group">
							    <div class="input-group-addon">
								    <span class="glyphicon glyphicon-user"></span>
							    </div>
							    <input type="text" name="username_admin" class="form-control" placeholder="Username" autofocus autocomplete="off" required>
						    </div>
					   </div>

					   <div class="form-group">
					      <div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<input type="password" name="password_admin" class="form-control" placeholder="Password" autocomplete="off" required>
						 </div>
					  </div>

					 <div class="form-group">
						<input type="checkbox" class="showpass"> <font color="white">Show Password</font>
						<script type="text/javascript">
						$(function(){
							$(".showpass").click(function(){
								if ($("[name=password_admin]").attr("type")=="password") {
									$("[name=password_admin]").attr("type","text");
								}else{
									$("[name=password_admin]").attr("type","password");
								};
							});
						});
						</script>
					</div>
<!--
					<div class="form-group">
						<label for="status" >STATUS USER: </label>
              				<select name="status" id="status">
								<option value="ADMIN">ADMIN</option>
                				<option value="USER BIASA">USER BIASA</option>
                				<option value="USER VIP">USER VIP</option>
              			</select>
					</div>
                    -->

					<div class="form-group">
						<input style="width:100%;" type="submit" name="login" class="btn btn-primary" value="LOGIN">
					</div>	
				</form>
            </div>
        </div>
	</div>
    </div>
	</div>
</body>
</html>

