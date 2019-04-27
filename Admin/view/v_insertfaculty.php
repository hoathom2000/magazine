<?php 
include_once('controller/c_faculty.php');
if(isset($_POST['insertFaculty']))
{
  if(isset($_POST['facultyname']))
    $facultyname = $_POST['facultyname'];
  if(isset($_POST['startdate']))
    $startdate = $_POST['startdate'];
  if(isset($_POST['enddate']))
    $enddate = $_POST['enddate'];

  if(isset($_POST['facultyname']) && isset($_POST['startdate']) && isset($_POST['enddate']))
    {
      $cadd = new c_faculty();
      $cadd->postInsertFaculty($facultyname,$startdate,$enddate);
    }
}?>
<h1>
	Insert
	<small>New Faculty</small>
</h1>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
            <div class="box-header">
             	<h3 class="box-title">Insert new Faculty</h3>
            </div>
            <!-- /.box-header -->
              <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">facultyname</label>
                  <input type="text" name="facultyname" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">startdate</label>
                  <input type="date" name="startdate" class="form-control" id="image" placeholder="Image">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">enddate</label><br>
                  <input type="date" name="enddate" class="form-control" id="profile" placeholder="Enter Profile">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="insertFaculty" type="submit" class="btn btn-primary">Insert new Faculty</button>
              </div>
            </form>
            <!-- /.box-body -->
          	</div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	</div>
</section>