<?php
foreach($dataEmail as $rows ) : 
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
                <h3 class="card-title">Form <small>Data Email</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST"  action="<?php echo base_url('ListEmail/saveDataUpdate')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" value="<?php echo $rows['name'];?>" name="name" class="form-control"  placeholder="name">
                  </div>
                  <div class="form-group">
                    <label >E-mail</label>
                    <input type="text"  name="email" value="<?php echo $rows['email'];?>" class="form-control"  placeholder="E-mail">
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="jabatan" >
                        <option value=''>--Pilih Tower--</option>
                        <?php
                        foreach (Array('PM','Koordinator') as $jabatan) { ?>
                        <option value="<?php echo $jabatan;?>"<?php if (!(strcmp($jabatan, $rows['jabatan']))) {echo "selected=\"selected\"";} ?>><?php echo $jabatan;?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="idSendDataEmail" value="<?php echo $rows['id_data_send_email'];?>" />
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