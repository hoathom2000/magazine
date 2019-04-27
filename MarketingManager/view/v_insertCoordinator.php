<?php 
include_once('controller/c_coordinator.php');
if(isset($_POST['insertCoordinator']))
{
  if(isset($_POST['coordinatorname']))
    $coordinatorname = $_POST['coordinatorname'];
  if(isset($_POST['coordinatoremail']))
    $coordinatoremail = $_POST['coordinatoremail'];
  if(isset($_POST['coordinatorpass']))
    $md5pass = $_POST['coordinatorpass'];

  if(isset($_POST['coordinatorname']) && isset($_POST['coordinatoremail']) && isset($_POST['coordinatorpass']))
    {
      $cadd = new c_Coordinator();
      $cadd->postInsertCoordinator($coordinatorname,$coordinatoremail,$md5pass); 
    }
}?>
<h1>
	Insert
	<small>New Coordinator</small>
</h1>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
            <div class="box-header">
             	<h3 class="box-title">Insert new Coordinator</h3>
            </div>
            <!-- /.box-header -->
              <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Coordinator Name</label>
                  <input type="text" name="coordinatorname" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" name="coordinatoremail" class="form-control" id="image" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Password</label><br>
                  <input type="password" name="coordinatorpass" class="form-control" placeholder="Enter Password" value="1" readonly="readonly"">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="insertCoordinator" type="submit" class="btn btn-primary">Insert new Coordinator</button>
              </div>
            </form>
            <!-- /.box-body -->
          	</div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	</div>
</section>