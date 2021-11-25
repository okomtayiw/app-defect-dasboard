<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title;?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title;?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data <?php echo $title;?></h3><br>
                <i class="fas fa-plus-circle nav-icon" data-toggle="modal" data-target="#modal-add-data-tower"></i>
                <p> <?php echo $this->session->flashdata('messageupdate') ;?></p>
                <p> <?php echo $this->session->flashdata('message') ;?></p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="viewDataTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Tower</th>
                    <th>Code Tower</th>
                    <th>Nomor Tower</th>
                    <th colspan="1">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $start =1;
                        foreach($menutower as $row ) :    
                  ?>
                  <tr>
                    <td><?php echo $start++; ?>. </td>
                    <td><?php echo $row['name_tower']; ?>  </td>
                    <td><?php echo $row['code_tower']; ?>  </td>
                    <td><?php echo $row['num_tower']; ?> </td>
                    <td><button type="button" rel="tooltip" title="Edit <?php echo $row['name_tower']; ?>" class="btn btn-info btn-simple btn-xs" >
                    <a href="<?php echo base_url('MenuTower/updateNameTower/'.$row['id_tower']);?>"><i class="fa fa-edit"></i></a>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" data-toggle="modal" data-target="#modalDelete<?php echo $row['id_tower'];?>" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times" onClick="return confirmDel();"></i>
                    </button>
                    </td>
                    
                  </tr>
                  <!-- Modal HTML -->
                  <div id="modalDelete<?php echo $row['id_tower'];?>" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                      <div class="modal-content">
                        <div class="modal-header flex-column">
                          <div class="icon-box">
                            <i class="fa fa-times"></i>
                          </div>						
                          <h4 class="modal-title w-100">Are you sure?</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Do you really want to delete these records? This process cannot be undone.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger"><a href="<?php echo base_url('MenuTower/deletetower/'.$row['id_tower']);?>">Delete</a></button>
                        </div>
                      </div>
                    </div>
                  </div>     

                  <?php
	                endforeach;
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- modal add -->
   <div class="modal fade" id="modal-add-data-tower">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               
                </div>
                <div class="modal-body">
                               
                <div class="form-group">
                <label>Nama Tower</label>
                    <input type="text"  class="form-control" placeholder="Name" id="nameTower" >
                </div>

                <div class="form-group">
                <label>Kode Tower</label>
                <input type="text"  class="form-control" placeholder="Code Tower" id="codeTower" >
                </div>

                <div class="form-group">
                <label >Nomor</label>
                <select class="form-control" id="numTower" >
                    <option value=''>--Pilih Number--</option>
                        <?php
                            foreach (Array('1','2','3','4','5','6','7','8','9','10','11') as $num) { ?>
                            <option value="<?php echo $num;?>"><?php echo $num;?></option>
                        <?php } ?>
                        </select>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-save-data">Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
    $(document).ready(function(){
        $(".spinner-border").show(function(){
          
           $(this).hide(2000);

        })
        $(".content").hide(function(){
          
          $(this).show(2000);

       })
        // save tower
        $(".btn-save-data").click(function(){

          var nameTower = $("#nameTower").val();
          var codeTower = $("#codeTower").val();
          var numTower  = $("#numTower").val();
          $.ajax({
            type: "POST",
            data: {
              "nameTower" : nameTower,
              "codeTower" : codeTower,
              "numTower" : numTower
            },
            url: "<?= base_url('MenuTower/saveData');?>",
            success: function(data){
              window.location.href= data;
            }
          });
         
        });

  
    });
  </script>

  