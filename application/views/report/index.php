<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

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
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form <small>Report Defect</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST"  action="<?php echo base_url('report/itemdefect')?>">
                    <div class="card-body">
                    <div class="form-group">
                        <label >Tower</label>
                        <select class="form-control" name="nmProject" id="nmProject">
                        <option value=''>--Pilih Project--</option>
                        <?php foreach ($project as $row) :
                        ?>  
                        <option value='<?php echo $row['id_project']; ?>'><?php echo $row['name_project']; ?> </option>
                        <?php endforeach; ?>
                        </select>
                    
                    </div>

                    <div class="form-group">
                        <label >Sub Project</label>
                        <select class="form-control" name="nmSubProject" id="nmSubProject">
                        <option value=''>--Sub Project--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label >Location</label>
                        <select class="form-control" name="nmLocation" id="nmLocation">
                        <option value=''>--Location--</option>
                        </select>
                    </div>
                   
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
             </div>
                <!-- /.card -->
    </div>
    
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
        $('#nmProject').change(function(){
            var idProject = $(this).val();
           
            // alert(idProject);
            $.ajax({
                url: "<?= base_url('Report/getsubproject');?>",
                method : "POST",
                data : {idProject: idProject},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){

                        html += '<option>'+data[i].name_sub_project+'</option>';
                    }
                    $('#nmSubProject').html(html);
                     
                }
            });
            var idSubProject = $('#nmSubProject').val();
            $.ajax({
                url: "<?= base_url('Report/getunit');?>",
                method : "POST",
                data : {idSubProject: idSubProject,idProject: idProject },
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        
                        html += '<option>'+data[i].name_unit+'/'+data[i].type+'</option>';
                    }
                    $('#nmLocation').html(html);
                     
                }
            });
        });

        $('#nmSubProject').change(function(){
            var idSubProject = $(this).val();
            var idProject = $('#nmProject').val();
            // alert(idProject + idSubProject);
            $.ajax({
                url: "<?= base_url('Report/getunit');?>",
                method : "POST",
                data : {idSubProject: idSubProject,idProject: idProject },
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        
                        html += '<option>'+data[i].name_unit+'/'+data[i].type+'</option>';
                    }
                    $('#nmLocation').html(html);
                     
                }
            });
        });
    });
 </script>


  