
 <h1>
  Manager management
 
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
              <button type="button" class="btn btn-block btn-primary btn-lg" style="width: 20%;" onclick="window.location.assign('manager.php?action=insert');">Insert new Manager</button>

              <h3 class="box-title">Table Manager</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>ManagerName</th>
                  <th>Name Account</th>
                  <th>Password</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $managerlist = $data['ManagerList'];
                    foreach ($managerlist as $manager)
                    {
                  ?>                
                <tr>
                  <td><?=$manager->MngID?></td>
                  <td><?=$manager->MngName?></td>
                  <td><?=$manager->MngEmail?></td>
                  <td><?=$manager->MngPass?></td>
                  <td><img src="./../Student/publicmanagepage/images/<?=$manager->MngImage?>" width="60" heigh ="80"></td>
                 <td>
                   <a href="manager.php?action=send&id=<?=$manager->MngID?>" class="btn btn-info btn-block btn-sm">
                    <i style="color: red"> Send Message </i>
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
