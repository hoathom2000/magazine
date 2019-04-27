
 <h1>
  Student management
 
</h1>
<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
      return confirm("Are you sure you want to delete?")
    }
</SCRIPT>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
 
            <div class="box-header">
              <button type="button" class="btn btn-block btn-primary btn-lg" style="width: 20%;" onclick="window.location.assign('student.php?action=insert');">Insert new Student</button>
              <h3 class="box-title">Table Student</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>StudentName</th>
                  <th>Name Account</th>
                  <th>Password</th>
                  <th>Image</th>
                  <th>FacultyName</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $studentlist = $data['StudentList'];
                    foreach ($studentlist as $student)
                    {
                  ?>                
                <tr>
                  <td><?=$student->StudentID?></td>
                  <td><?=$student->StdName?></td>
                  <td><?=$student->StuEmail?></td>
                  <td><?=$student->StuPass?></td>
                  <td><img src="./../Student/publicmanagepage/images/<?=$student->StuImage?>" width="60" heigh ="80"></td>
                  <td><?=$student->FacultyName?></td>
                
                  <td> 
                    <a href="student.php?action=delete&id=<?=$student->StudentID?>" onclick="return confirmAction()">
                    <i class="fa fa-trash" style="color: red"> Delete </i>
                    </a>
                  </td>

                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
  </div>
</section>
