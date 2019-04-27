<?php 
include_once('controller/c_written.php');

$user = new c_written();
$user = $data['password'];

if(isset($_POST['updateStudent']))
{
  if(isset($_POST['password']) && isset($_POST['repassword']))
    {
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $id = $_POST['id'];
        if($password == $repassword)
        {
        $cinfor = new c_written();
        $cinfor->updateMember($password, $id);
        }
        else{
            echo "Wrong password";
        }
    }
}
?>
<h1>
	Update
	<small>Information</small>
</h1>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
            <div class="box-header">
             	<h3 class="box-title">Infor edit</h3>
            </div>

              <form role="form" method="post">

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">New Password</label><br>
                  <input type="password" name="password" class="form-control" id="profile" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Re-Password</label><br>
                  <input type="password" name="repassword" class="form-control" id="profile" placeholder="Enter New Password">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button name="updateStudent" type="submit" class="btn btn-primary">Update</button>
              </div>
              <input type="hidden" name="id" value="<?=$user->StudentID?>">
            </form>
            <!-- /.box-body -->
          	</div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	</div>
</section>

