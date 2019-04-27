
 <h1>
  Faculty management
 
</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
 
            <div class="box-header">
              <button type="button" class="btn btn-block btn-primary btn-lg" style="width: 20%;" onclick="window.location.assign('faculty.php?action=insert');">Insert new Faculty</button>
              <h3 class="box-title">Table Faculty</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>id</th>
                  <th>FacultyName</th>
                  <th>StartDate</th>
                  <th>EndDate</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $facultylist = $data['FacultyList'];
                    foreach ($facultylist as $faculty)
                    {
                  ?>                
                <tr>
                  <td><?=$faculty->FacultyID?></td>
                  <td><?=$faculty->FacultyName?></td>
                  <td><?=$faculty->StartDate?></td>
                  <td><?=$faculty->EndDate?></td>
                  <td>  <a href="faculty.php?action=update&id=<?=$faculty->FacultyID?>">
                    <i class="fa fa-edit" style="color: blue"> Edit </i><br>
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
