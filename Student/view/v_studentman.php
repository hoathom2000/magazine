
 <h1>
  Article management

</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
 
           <div class="box-header">
              <button type="button" class="btn btn-block btn-primary btn-lg" style="width: 20%;" onclick="window.location.assign('studentman.php?action=insert');">Insert new article</button>
              <h3 class="box-title">Table of Article</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>id</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Profile</th>
                  <th>Content</th>
                  <th>FacultyName</th>
                  <th>StudentName</th>
                  <th>Status</th>
                
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $writtenlistbyId = $data['WrittenList5'];
                      function dawnload_file($path) {
    if (file_exists($path) && is_file($path)) {
        // file exist
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($path));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        set_time_limit(0);
        @readfile($path);//"@" is an error control operator to suppress errors
    } else {
        // file doesn't exist
        die('Error: The file ' . basename($path) . ' does not exist!');
    }
}
                    if(is_array($writtenlistbyId)){
                    foreach($writtenlistbyId as $written)
                    {
                  ?>                
                <tr>
                  <td><?=$written->WrittenID?></td>
                  <td><?=$written->Name?></td>
                  <td><img src="./publicmanagepage/images/<?=$written->Image?>" width="120" heigh="60"></td>
                  <td><a href="./publicmanagepage/pdf/<?=$written->Profile?>"><?=$written->Profile?></a></td>
                  <td><?=$written->Content?></td>
                  <td><?=$written->FacultyName?></td>
                  <td><?=$written->StdName?></td>
                  <td><?=$written->Status?></td>
                  

                </tr>
                <?php }} ?>
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
