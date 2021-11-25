<?php
foreach($itemDefect as $rows ) : 
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
        <div class="row">
        <div class="col-md-6">
           <!-- jquery validation -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <small>User</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >Location</label>
                    <input type="text" value="<?php echo $rows['name_location'];?>" id="nameLocation" class="form-control"  readonly>
                  </div>
                  <div class="form-group">
                    <label >Area</label>
                    <input type="text" value="<?php echo $rows['area_defect'];?>" id="areaDefect" class="form-control"  placeholder="">
                  </div>
                  <div class="form-group">
                    <label >Date </label>
                    <input type="text" name="dateDefect" value="<?php echo $rows['date_defect'];?>" class="form-control dateho" id="datepicker">
                  </div>
                  <div class="form-group">
                    <label >Description</label>
                    <input type="text" value="<?php echo $rows['description'];?>" id="description" class="form-control"  placeholder="">
                  </div>
                  <div class="form-group">
                    <label >Element</label>
                    <select class="form-control" name="element" id="element">
                        <option value=''>--Pilih Tower--</option>
                        <?php
                        foreach (Array('Finishing','MEP') as $element) { ?>
                        <option value="<?php echo $element;?>"<?php if (!(strcmp($element, $rows['element']))) {echo "selected=\"selected\"";} ?>><?php echo $element;?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Created By</label>
                    <input type="text" value="<?php echo $rows['first_name'];?>" name="createdby" class="form-control"  readonly>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" id="idTransactionDefect" value="<?php echo $rows['id_transaction_defect'];?>" />
                  <button type="submit" class="btn btn-primary btn-save">Submit</button>
                </div>
            </form>
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>File Name</th>
                    <th>Number</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $start = 1;
                  foreach($images as $rowimg) :    
                  ?>      
                  <tr>
                    <td><?php echo $start++;?></td>
                    <td><?php echo $rowimg['name_images'];?></td>
                    <td><?php echo $rowimg['number_defect'];?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a  href="https://mob-api.checkdeliver.com/upload/<?php echo $rowimg['name_images'];?>" data-toggle="lightbox" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <button  id="<?php echo $rowimg['id_images_defect'];?>"  class="btn btn-danger btn-deletefile"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                   <?php 
                   endforeach;
                   ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div> 
        </div>
        </div>
    </section>
 </div>
 <?php
endforeach;
?>

<script>
    $(document).ready(function(){
        $(".spinner-border").show(function(){
          
          $(this).hide(2000);

       })
       $(".content").hide(function(){
         
         $(this).show(2000);

      })
        $('.btn-deletefile').click(function(index){
            var id = this.id;
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                url:"<?php echo base_url();?>Report/deleteFileImage",
                type: "POST",
                data:{
                    'idFileImages' : id
                },
                success: function(data) {
                        window.location.reload();   
                    }
                })
            } else {
                window.location.reload();   
            }
        });

        $(".btn-save").click(function(){
            if (confirm('Apakah anda yakin untuk mengubah item defect ini?')) {
                var idTransactionDefect = $("#idTransactionDefect").val();
                var areaDefect =$("#areaDefect").val();
                var dateDefect = $("#datepicker").val();
                var description = $("#description").val();
                var element = $("#element").val();
                $.ajax({
                type: "POST",
                data: {
                    "idTransactionDefect" : idTransactionDefect,
                    "areaDefect" : areaDefect,
                    "dateDefect" : dateDefect,
                    "description": description,
                    "element" : element
                },
                url: "<?= base_url('Report/saveUpdate');?>",
                success: function(data){
                    window.location.href= data;
                }
            });
            } else {

            }

        });
    });
</script>
  
</script>