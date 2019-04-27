
 <h1>
  Faculty management
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
              <button type="button" class="btn btn-block btn-primary btn-lg" style="width: 20%;" onclick="window.location.assign('coordinator.php?action=insert');">Insert new Coordinator</button>
              <h3 class="box-title">Table Coordinator</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>CoordinatorName</th>
                  <th>Name Account</th>
                  <th>Password</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $coordinatorlist = $data['CoordinatorList'];
                    foreach ($coordinatorlist as $coordinator)
                    {
                  ?>                
                <tr>
                  <td><?=$coordinator->CoorID?></td>
                  <td><?=$coordinator->CoorName?></td>
                  <td><?=$coordinator->CoorEmail?></td>
                  <td><?=$coordinator->CoorPassword?></td>
                  <td><?=$coordinator->Status?></td>
                  <td> 
                    <a href="coordinator.php?action=update&id=<?=$coordinator->CoorID?>">
                    <i class="fa fa-trash" style="color: red"> Update Role </i>
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
