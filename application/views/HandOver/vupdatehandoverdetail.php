
<?php
foreach($transaction as $rows ) : 
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Main content -->
    <div class="text-center">
      <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
      </div>
    </div>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tenant</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nmUnit">Unit</label>
                <input type="text" id="nmUnit" class="form-control" value="<?php echo $rows['lantai'];?>" disabled>
                <input type="hidden" id="idTrans" class="form-control" value="<?php echo $rows['id_transaction'];?>" />
                <input type="hidden" id="idTransDetail" class="form-control" value="<?php echo $rows['id_transaction_detail'];?>" />
              </div>

              <div class="form-group">
                <label >Date </label>
                <input type="text" name="dateho" value="<?php echo $rows['tgl_hand_over'];?>" class="form-control dateho" id="datepicker">
              </div>

              <div class="form-group">
                <label for="nmTiar">Pendamping Tenant</label>
                <select id="nmTiars" class="form-control custom-select">
                  <option >Select One</option>
                  <?php
                  foreach (Array('Andi', 'Budi', 'Cumi') as $tower) { ?>
                  <option value="<?php echo $tower;?>"<?php if (!(strcmp($tower, $rows['tiar_tenant']))) {echo "selected=\"selected\"";} ?>><?php echo $tower?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="nmTotDefect">Jumlah Defect</label>
                <select id="nmTotDefect" class="form-control custom-select">
                  <option >Select Tot Defect</option>
                  <?php
                  foreach (range(0, 100) as $totDefect) { ?>
                  <option value="<?php echo $totDefect;?>"<?php if (!(strcmp($totDefect, $rows['tot_defect']))) {echo "selected=\"selected\"";} ?>><?php echo $totDefect?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="nmStatusDefect">Status Defect</label>
                <select id="nmStatusDefect" class="form-control custom-select">
                  <option >Select Status Defect</option>
                  <?php
                  foreach (Array('On Progress', 'Progress', 'Done') as $statusTower) { ?>
                  <option value="<?php echo $statusTower;?>"<?php if (!(strcmp($statusTower, $rows['status_defect']))) {echo "selected=\"selected\"";} ?>><?php echo $statusTower?></option>
                  <?php } ?>
                </select>
              </div>

              <!-- kwh listrik -->
              <div class="form-group">
                <label for="noKwhListrik">No. KWH Listrik</label>
                <input type="text" id="noKwhListrik" class="form-control" value="<?php echo $rows['no_kwh_listrik'];?>">
              </div>
              <div class="form-group">
                <label for="startKwhListrik">Start KWH. Listrik</label>
                <input type="number" id="startKwhListrik" class="form-control" value="<?php echo $rows['start_kwh_listrik'];?>" step="1">
              </div>
              
              <form class="form-horizontal" id="submitFormImageListrik">
              <div class="form-group">
                    <label for="inputFileImageListrik">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="nmUnit" value="<?php echo $rows['lantai'];?>">
                        <input type="hidden" name="nmTitle" value="Start awal listrik">
                        <input type="file" class="custom-file-input" name="file" id="inputFileImageListrik">
                        <label class="custom-file-label" for="inputFileImageListrik">Choose file</label>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-success"  type="submit">Upload</button>
                      </div>
                    </div>
              </div>
              </form>
              

              <!-- kwh air -->
              <div class="form-group">
                <label for="noKwhAir">No. KWH Air</label>
                <input type="text" id="noKwhAir" class="form-control" value="<?php echo $rows['no_kwh_air'];?>">
              </div>
              <div class="form-group">
                <label for="startKwhAir">Start KWH Air</label>
                <input type="number" id="startKwhAir" class="form-control" value="<?php echo $rows['start_kwh_air'];?>" step="1">
              </div>


              <form class="form-horizontal" id="submitFormImageAir">
              <div class="form-group">
                    <label for="inputFileImageListrik">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="nmUnit" value="<?php echo $rows['lantai'];?>">
                        <input type="hidden" name="nmTitle" value="Start awal air">
                        <input type="file" class="custom-file-input" name="file" id="inputFileImageAir">
                        <label class="custom-file-label" for="inputFileImageAir">Choose file</label>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-success"  type="submit">Upload</button>
                      </div>
                    </div>
              </div>
              </form>
              
               

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Identitas</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="noIdentitas">No. Identitas /KTP</label>
                <input type="text" id="noIdentitas" class="form-control" value="">
              </div>

              <div class="form-group">
                <label for="nmName">Nama</label>
                <input type="text" id="nmName" class="form-control" value="">
              </div>

               <div class="form-group">
                <label for="nmAddress">Alamat</label>
                <textarea id="nmAddress" class="form-control" rows="4"></textarea>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
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
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $start = 1;
                  foreach($fileupload as $rowfile) :    
                  ?>      
                  <tr>
                    <td><?php echo $start++;?></td>
                    <td><?php echo $rowfile['image'];?></td>
                    <td><?php echo $rowfile['fileSize'];?> kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a  href="<?php echo base_url();?>uploads/<?php echo $rowfile['image'];?>" data-toggle="lightbox" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <button  id="<?php echo $rowfile['id_fileupload'];?>"  class="btn btn-danger btn-deletefile"><i class="fas fa-trash"></i></button>
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
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary btn-cancel">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right btn-save">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
        $('.btn-save').click(function(){
            var nmUnit = $("#nmUnit").val();
            var idTransaction = $("#idTrans").val();
            var idTransDetail = $("#idTransDetail").val();
            var dateHo = $(".dateho").val();
            var nmTiar = $("#nmTiars").val();
            var noKwhListrik = $("#noKwhListrik").val();
            var startKwhListrik = $("#startKwhListrik").val();
            var noKwhAir = $("#noKwhAir").val();
            var startKwhAir = $("#startKwhAir").val();

            var noIdentitas = $("#noIdentitas").val();
            var nmName = $("#nmName").val();
            var nmAddress = $("#nmAddress").val();
            var nmTotDefect = $("#nmTotDefect").val();
            var nmStatusDefect = $("#nmStatusDefect").val();

            // if(idTransDetail == ''){
            //     alert("Apakah anda yakin untuk menambahkan data");
            // } else {
            //     alert("Apakah anda yakin untuk merubah data");
            // }

            $.ajax({
                url:"<?php echo base_url();?>/HandOver/saveUpdateDetail",
                type:"post",
                data:{
                'nmUnit' : nmUnit,
                'idTransaction' : idTransaction,
                'idTransactionDetail' : idTransDetail,
                'dateHo' : dateHo,
                'nmTiar' : nmTiar,
                'noKwhListrik' : noKwhListrik,
                'startKwhListrik' : startKwhListrik,
                'noKwhAir' : noKwhAir,
                'startKwhAir' : startKwhAir,
                'noIdentitas' : noIdentitas,
                'nmName' : nmName,
                'nmAddress' : nmAddress,
                'nmTotDefect' : nmTotDefect,
                'nmStatusDefect' : nmStatusDefect
                },
                success: function(data){
                    if (data == "success insert data"){
                        window.location.reload();
                    } else if (data == "success update data"){
                        window.location.reload();
                    }
                   }
            });


        });

        $('.btn-cancel').click(function(){
            window.history.back();
        });

        $('#submitFormImageListrik').submit(function(e){
            e.preventDefault(); 
            $.ajax({
                     url:"<?php echo base_url();?>/upload/do_upload",
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Listrik Berhasil.");
                          window.location.reload();
                   }
                 });
        });

        $('#submitFormImageAir').submit(function(e){
            e.preventDefault(); 
            $.ajax({
                     url:"<?php echo base_url();?>upload/do_upload",
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Air Berhasil.");
                          window.location.reload();
                   }
                 });
        });

        $('.btn-deletefile').click(function(index){
            var id = this.id;
            $.ajax({
            url:"<?php echo base_url();?>HandOver/deleteFileUpload",
            type: "POST",
            data:{
                'idFileUpload' : id
            },
            success: function(data) {
                    window.location.reload(); 
                    
                }
            })
        });
    });
</script>