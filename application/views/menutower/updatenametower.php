<?php
foreach($nametower as $rows ) : 
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Main content -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
    
        </div>
      </div><!-- /.container-fluid -->
  </section>
  <section class="content">
        <div class="container-fluid">
        <div class="col-md-6">
           <!-- jquery validation -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <small>Name Tower</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST"  action="<?php echo base_url('MenuTower/saveupdateNameTower')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" value="<?php echo $rows['name_tower'];?>" name="nameTower" class="form-control"  placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label >Code Tower</label>
                    <input type="text"  name="codeTower" value="<?php echo $rows['code_tower'];?>" class="form-control"  placeholder="e]E-mail">
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="numTower" id="status">
                        <option value=''>--Pilih Tower--</option>
                        <?php
                        foreach (Array('1','2','3','4','5','6','7','8','9','10','11','12') as $numTower) { ?>
                        <option value="<?php echo $numTower;?>"<?php if (!(strcmp($numTower, $rows['num_tower']))) {echo "selected=\"selected\"";} ?>><?php echo $numTower;?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="idNameTower" value="<?php echo $rows['id_tower'];?>" />
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>
    </section>
 </div>
 <?php
endforeach;
?>

<script>
  
</script>