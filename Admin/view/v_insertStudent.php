<?php 
include_once('controller/c_student.php');
if(isset($_POST['insertStudent']))
{
  if(isset($_POST['studentname']))
    $studentname = $_POST['studentname'];
  if(isset($_POST['studentemail']))
    $studentemail = $_POST['studentemail'];
  if(isset($_POST['pass']))
    $md5pass = $_POST['pass'];
  if(isset($_POST['faculty']))
    $faculty = $_POST['faculty'];

  if(isset($_POST['studentname']) && isset($_POST['studentemail']) && isset($_POST['pass']) && isset($_POST['faculty']))
    {
      $cadd = new c_student();
      $cadd->postInsertStudent($studentname,$studentemail,$md5pass,$faculty);
    }
}?>
<h1>
	Insert
	<small>New Student</small>
</h1>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
            <div class="box-header">
             	<h3 class="box-title">Insert new Student</h3>
            </div>
            <!-- /.box-header -->
              <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Student Name</label>
                  <input type="text" name="studentname" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="studentemail" class="form-control" id="image" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="">Password</label><br>
                  <input type="password" name="pass" class="form-control" placeholder="Enter Password" value="1" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="">Faculty</label>
                  <select name="faculty">
                    <?php
                $cwritten = new c_Student();
                $data2 = $cwritten->getFaculty();
                $facultylist = $data2['FacultyList'];
                    foreach($facultylist as $faculty)
                    {                                                        
                  ?>
                    <option value="<?=$faculty->FacultyID?>"><?=$faculty->FacultyName?></option>
                  <?php }?>

                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="insertStudent" type="submit" class="btn btn-primary">Insert new Studen</button>
              </div>
            </form>
            <!-- /.box-body -->
          	</div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	</div>
</section>