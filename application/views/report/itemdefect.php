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
                <h3 class="card-title">Data <?php echo $title;?> <?php echo $nameProject;?> <?php echo $nameTower;?></h3><br>
                <p><a href="<?php echo base_url('reportpdf/'.$nameLocation);?>"><i class="far fa-file-pdf"> Download</i></a></p>
                
                <p> <?php echo $this->session->flashdata('messageupdate') ;?></p>
                <p> <?php echo $this->session->flashdata('message') ;?></p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="viewDataTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name Location</th>
                    <th>Area</th>
                    <th>Element</th>
                    <th>Description</th>
                    <th>Date Defect</th>
                    <th>Created By </th>
                    <th colspan="1">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $start =1;
                  foreach($itemdefect as $row ) :    
                  ?>
                  <tr>
                    <td><?php echo $start++; ?>. </td>
                    <td><?php echo $row['name_location']; ?>  </td>
                    <td><?php echo $row['area_defect']; ?>  </td>
                    <td><?php echo $row['element']; ?>  </td>
                    <td><?php echo $row['description']; ?>  </td>
                    <td><?php echo $row['date_defect']; ?>  </td>
                    <td><?php echo $row['first_name']; ?>  </td>
                    <td><button type="button" rel="tooltip" title="Edit <?php echo $row['first_name']; ?>" class="btn btn-info btn-simple btn-xs" >
                    <a href="<?php echo base_url('Report/updateItemDefect/'.$row['id_transaction_defect']);?>"><i class="fa fa-edit"></i></a>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" data-toggle="modal" data-target="#modalDelete<?php echo $row['id_transaction_defect'];?>" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times" onClick="return confirmDel();"></i>
                    </button>
                    </td>
                    
                  </tr>
                  <!-- Modal HTML -->
                  <div id="modalDelete<?php echo $row['id_transaction_defect'];?>" class="modal fade">
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
                          <button type="button" id ='<?php echo $row['id_transaction_defect'];?>' class="btn btn-danger btn-delete">Delete</button>
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

 <script>
    $(document).ready(function(){
        $(".spinner-border").show(function(){
          
          $(this).hide(2000);

       })
       $(".content").hide(function(){
         
         $(this).show(2000);

      })
        $('.btn-delete').click(function(index){
            var id = this.id;
                $.ajax({
                url:"<?php echo base_url();?>Report/deleteItemDefect",
                type: "POST",
                data:{
                    'idTransactionDefect' : id
                },
                success: function(data) {
                        window.location.reload();   
                    }
                })
         
        });

      
    });
</script>

  