<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hand Over</h1>
            <p> <?php echo $this->session->flashdata('message') ;?></p>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hand Over </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <div class="text-center">
      <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hand Over</h3><br>
                <i class="fas fa-plus-circle nav-icon" data-toggle="modal" data-target="#modal-default"></i>
              </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="viewDataTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>No.Transaksi</th>
                    <th>Unit</th>
                    <th>Owner</th>
                    <th>Tgl. Ho</th>
                    <th>Status</th>
                    <th colspan="1">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $start = 0;
                        foreach($transaction as $row ) :    
                  ?>
                  <tr>
                    <td><?php echo ++$start; ?>. </td>
                    <td><?php echo $row['number_trans']; ?>  </td>
                    <td><?php echo $row['lantai']; ?>  </td>
                    <td><?php echo $row['pemilik']; ?>  </td>
                    <td><?php echo $row['tgl_hand_over']; ?>  </td>
                    <td><button type="button" class="btn bg-olive margin" title="<?php echo $row['id_transaction'];?>" data-toggle="modal" data-target="#modal-edit-status<?php echo $row['id_transaction'];?>"><?php echo $row['status']; ?></button></td>
                    <td>
                    <button type="button" rel="tooltip" title="Edit <?php echo $row['number_trans']; ?>" class="btn btn-info btn-simple btn-xs" >
                    <a href="<?php echo base_url('HandOver/updatehandover/'.$row['id_transaction']);?>"><i class="fa fa-edit"></i></a>
                    </button>
                  
                    <button type="button" rel="tooltip" title="Remove" data-toggle="modal" data-target="#modalDelete<?php echo $row['id_transaction'];?>" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                    </button>
                    <?php if ($row['status'] == 'HO'){?>
                    <button type="button" rel="tooltip" title="Next transaction detail" class="btn btn-info btn-simple btn-xs" >
                    <a href="<?php echo base_url('HandOver/updatehandoverdetail/'.$row['id_transaction']);?>"><i class="fa fa-arrow-alt-circle-right"></i></a>
                    </button>
                    <?php } ?>
                    </td>
                    
                  </tr>



                  <!-- Modal HTML -->
                  <div id="modalDelete<?php echo $row['id_transaction'];?>" class="modal fade">
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
                          <button type="button" class="btn btn-danger"><a href="<?php echo base_url('HandOver/deletehandover/'.$row['id_transaction']);?>">Delete</a></button>
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

              <!-- modal edit status -->
              <?php 
          
                foreach($transaction as $rows ) :    
              ?>
              <div class="modal fade" id="modal-edit-status<?php echo $rows['id_transaction'];?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <h4 class="modal-title">Select Data</h4>
                            </div>
                            <form method="POST" action="<?= base_url('HandOver/saveHandOverEditStatus');?>" enctype="multipart/form-data" >
                            <div class="modal-body">
                                <!-- select -->
                                <div class="form-group">
                                <label>Status </label>
                                <select  name="nameStatus" class="form-control">
                                    <option value="0">--PILIH STATUS--</option>
                                    <?php
                                      foreach (Array('Active', 'In progress','HO', 'Cancel', 'Pending') as $status) { ?>
                                        <option value="<?php echo $status;?>"<?php if (!(strcmp($status, $rows['status']))) {echo "selected=\"selected\"";} ?>><?php echo $status?></option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden"  name="idTransaction" class="form-control" value="<?php echo $rows['id_transaction'];?>" />
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Save</button>
                            </div>
                            </form>                
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <?php
                  endforeach;
                  ?>

              <!-- modal add -->
              <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <h4 class="modal-title">Select Data</h4>
                        </div>
                        <div class="modal-body">
                            <!-- select -->
                            <div class="form-group">
                            <label>Tower</label>
                            <select id="nmTower" class="form-control">
                                <option value="0">-PILIH TOWER-</option>
                                <option value="A">TOWER A</option>
                                <option value="B">TOWER B</option>
                                <option value="C">TOWER C</option>
                                <option value="D">TOWER D</option>
                                <option value="E">TOWER E</option>
                                <option value="F">TOWER F</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label >Unit</label>
                            <select id="nmUnit" class="form-control">
                            <option value="0">-PILIH UNIT-</option>
                            </select>
                            </div>
                            <div class="form-group">
                              <label >Date handover</label>
                              <input type="text"  class="form-control" value="<?php echo date('Y-m-d');?>"  placeholder="Transaksi" id="datepicker">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-save-handover">Save</button>
                        </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
              </div>
                    <!-- /.modal -->
                  
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

  <script>
    $(document).ready(function(){
        $(".spinner-border").show(function(){
          
           $(this).hide(2000);

        })
        $(".content").hide(function(){
          
          $(this).show(2000);

       })
        // save handover
        $(".btn-save-handover").click(function(){

          var nmTower = $("#nmTower").val();
          var nmUnit =$("#nmUnit").val();
          var dateho = $("#datepicker").val();
          $.ajax({
            type: "POST",
            data: {
              "nmTower" : nmTower,
              "nmUnit" : nmUnit,
              "dateho" : dateho
            },
            url: "<?= base_url('HandOver/saveHandOver');?>",
            success: function(data){
              window.location.href= data;
            }
          });
         
        });

        $('#nmTower').change(function(){
            var idTower = $(this).val();
            $.ajax({
                url: "<?= base_url('HandOver/getunit');?>",
                method : "POST",
                data : {idTower: idTower},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option>'+data[i].lantai+'</option>';
                    }
                    $('#nmUnit').html(html);
                     
                }
            });
        });
    });
  </script>

  