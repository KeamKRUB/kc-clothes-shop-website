<?php if(!$_SESSION['username']){ ?>

    <div class="store">
<div class="card border-0 shadow mb-4" style="width:1000px;left: 25%;margin-top:230px;border-radius:20px;">
                        <div class="card-body" style="position:absolue;">
                            <h5 class="m-0"><i class="fa fa-user"></i> เข้าสู่ระบบ</h5>
                            <hr>
                            <div class="">

                                <div class="col-12 mb-4">
                                    <form method="post" action="">
                                  <input type="hidden" name="login_submit">
                                <div class="form-group">top
                                    <input type="text" style="margin-:20px;" name="username" class="form-control" placeholder="ชื่อบัญชีผู้ใช้ : ">
                                </div>
                                <div class="form-group">
								<form method="get" action="index.php">
                                    <input type="password" style="margin-top:20px;" name="password" class="form-control" placeholder="รหัสผ่าน : ">
                                </div>
                                        <button type="submit"  style="margin-top:20px;" class="btn btn-block btn-outline-success mb-3"><i class="fa fa-sign-in fa-fw"></i> เข้าสู่ระบบ</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="card border-0 shadow mb-4" style="width:1000px;left: 25%;border-radius:20px;">
                        <div class="card-body">
                            <h5 class="m-0"><i class="fa fa-user"></i>สมัครสมาชิก</h5>
                            <hr>
                            <div class="">

                                <div class="col-12 mb-4">
                                    <form method="post" action="">
                                  <input type="hidden" name="register_submit">
                                <div class="form-group">
                                    <input type="text" style="margin-top:20px;"name="username" class="form-control" placeholder="ชื่อบัญชีผู้ใช้ : ">
                                </div>
                                <div class="form-group">
								<form method="get" action="">
                                    <input type="password" style="margin-top:20px;" name="password" class="form-control" placeholder="รหัสผ่าน : ">
								</div>
								<div class="form-group">
									<input type="password"  style="margin-top:20px;" name="conpassword" class="form-control" placeholder="ยืนยันรหัสผ่าน : "></div>
                                    <button type="submit" style="margin-top:20px;" class="btn btn-block btn-outline-success mb-3"><i class="fa fa-sign-in fa-fw"></i>สมัครสมาชิก</button>
							</form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

<?php }else{ 
     include_once __DIR__.'/home.php';
} ?>
