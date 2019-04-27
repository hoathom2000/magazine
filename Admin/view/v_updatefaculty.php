<?php 
include_once('controller/c_faculty.php');
if(isset($_POST['updateFaculty']))
{
  if(isset($_POST['facultyname']) && isset($_POST['startdate']) && isset($_POST['enddate']))
    {
        $facultyname = $_POST['facultyname'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $id = $_POST['id'];
        $cfaculty = new c_Faculty();
        $cfaculty->updateFaculty($facultyname , $startdate , $enddate ,$id);
    }
}
else
  {
    $cfaculty = new c_Faculty();
    $faculty = $data['UpdateFaculty'];
  }
?>
<h1>
  Update
  <small>Faculty</small>
</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Update Faculty</h3>
            </div>
            <!-- /.box-header -->
              <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Faculty Name</label>
                  <input type="text" name="facultyname" class="form-control" id="facultyname" placeholder="Enter name" value="<?=$faculty->FacultyName?>">
                </div>
                <div class="form-group">
                  <label for="">Start date</label>
                  <input type="date" name="startdate" class="form-control" id="startdate" value="<?=$faculty->StartDate?>">
                </div>
                <div class="form-group">
                  <label for="">End date</label>
                  <input type="date" name="enddate" class="form-control" id="enddate" value="<?=$faculty->EndDate?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="updateFaculty" type="submit" class="btn btn-primary">Update Faculty</button>
              </div>
              <input type="hidden" name="id" value="<?=$faculty->FacultyID?>">
            </form>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
  </div>
</section>