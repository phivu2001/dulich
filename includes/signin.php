<?php
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
} else{
	
	echo "<script>alert('Đăng nhập thất bại');</script>";

}

}

?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
										<div class="login-left">
												<ul>
													<!-- <li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li> -->
													<li><a href="#"><img src="https://kenh14cdn.com/thumb_w/660/2020/9/26/travelling-to-singapore-tips-880x660-1601108484286547732460.jpg" width="250px" height="300px"></a></li>
													
												</ul>

											</div>
									<div class="login-right">
										<form method="post">
											<h3>Đăng nhập bằng tài khoản của bạn</h3>
	<input type="text" name="email" id="email" placeholder="Nhập email"  required="">	
	<input type="password" name="password" id="password" placeholder="Mật khẩu" value="" required="">	
											<h4><a href="forgot-password.php">Quên mật khẩu </a></h4>
											
											<input type="submit" name="signin" value="Đăng nhập">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>Bằng cách đăng nhập, bạn đồng ý với <a href="page.php?type=terms">Các điều khoản và điều kiện</a> & <a href="page.php?type=privacy">Chính sách bảo mật</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>