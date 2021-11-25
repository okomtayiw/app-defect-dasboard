<?php
foreach($dataUsers as $rows ) : 
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
                <h3 class="card-title">Form <small>User</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST"  action="<?php echo base_url('user/saveupdateuser')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" value="<?php echo $rows['username'];?>" name="username" class="form-control"  placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label >E-mail</label>
                    <input type="text"  name="email" value="<?php echo $rows['email'];?>" class="form-control"  placeholder="e]E-mail">
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value=''>--Pilih Tower--</option>
                        <?php
                        foreach (Array('Active','Non Active') as $status) { ?>
                        <option value="<?php echo $status;?>"<?php if (!(strcmp($status, $rows['status']))) {echo "selected=\"selected\"";} ?>><?php echo $status;?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="idUsers" value="<?php echo $rows['id_users'];?>" />
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