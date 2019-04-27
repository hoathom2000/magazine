<?php 
  $writtenlists = $data['WrittenNumber'];
?>

 <h1>
  Viewing and Caculating Writtens
</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
            <div class="box-body">
              <div class="form-group">
                  <label for="total">Total Of All Writtens: </label>
                  <input type="text" name="total" class="form-control" readonly="readonly" value="<?=$writtenlists->total?>">
                </div>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Faculty Name</th>
                  <th>Total Writtens</th>
                  <th>Percent of contribution</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                $cfaculty = new c_Faculty();
                $data2 = $cfaculty->getAllFaculty();
                $listfaculty = $data2['AllFaculty'];
                    foreach($listfaculty as $faculty)
                    {                                                        
                  ?>            
                <tr>
                  <td><?=$faculty->FacultyName?></td>
                  <td><?php $data3 = $cfaculty->countEachFaculty($faculty->FacultyID);
                        $listNumbers = $data3['WrittenNumberEachFaculty'];
                        foreach($listNumbers as $Numbers)
                    {
                     ?><?=$Numbers->total?></td>
                     <?php 
                     $x = $Numbers->total;
                     $y = $writtenlists->total;
                     ?>
                  <td><?php echo(($x / $y) * 100)?> %</td>
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

