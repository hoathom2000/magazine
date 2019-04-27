<?php 
include_once('controller/c_written.php');
include_once('controller/c_register.php');

    $user = new c_written();
    $user = $data['Student'];

?>
 <h1>
  Information management
</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>StudentID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?=$user->StudentID?></td>
                    <td><?=$user->StdName?></td> 
                    <td><?=$user->StuEmail?></td>  
                    <td><img src="./../Student/publicmanagepage/images/<?=$user->StuImage?>" width="60" heigh ="80"></td>
                 <td>
                    <a href="studentinformation.php?action=update&id=<?=$user->StudentID?>">
                    <i class="fa fa-edit" style="color: blue"> Edit Password</i><br>
                    </a>
                    <a href="studentinformation.php?action=updateImage&id=<?=$user->StudentID?>">
                    <i class="fa fa-edit" style="color: blue"> Edit Image </i><br>
                    </a>
                  </td>                    
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>StudentID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
  </div>
</section>
