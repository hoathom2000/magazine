<?php 
include_once('controller/c_manager.php');
if(isset($_POST['insertManager']))
{
  if(isset($_POST['managername']))
    $managername = $_POST['managername'];
  if(isset($_POST['manageremail']))
    $manageremail = $_POST['manageremail'];
  if(isset($_POST['pass']))
    $md5pass = $_POST['pass'];

  if(isset($_POST['managername']) && isset($_POST['manageremail']) && isset($_POST['pass']))
    {
      $cadd = new c_manager();
      $cadd->insertManager($managername,$manageremail,$md5pass);
    }
}?>
<h1>
	Insert
	<small>New Manager</small>
</h1>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
            <div class="box-header">
             	<h3 class="box-title">Insert new Manager</h3>
            </div>
            <!-- /.box-header -->
              <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Manager Name</label>
                  <input type="text" name="managername" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="">Manager Email</label>
                  <input type="email" name="manageremail" class="form-control" id="image" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="">Manager Password</label><br>
                  <input type="password" name="pass" class="form-control" placeholder="Enter Password" value="1" readonly="readonly">
                </div>
            
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="insertManager" type="submit" class="btn btn-primary">Insert new Manager</button>
              </div>
            </form>
            <!-- /.box-body -->
          	</div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	</div>
</section>