<?php
foreach($transaction as $rows ) : 
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
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form <small>tenant</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST"  action="<?php echo base_url('HandOver/saveUpdateData')?>">
                    <div class="card-body">
                    <div class="form-group">
                        <label >Tower</label>
                        <select class="form-control" name="nmTower" id="nmTower">
                        <option value=''>--Pilih Tower--</option>
                        <?php
                        foreach (Array('A', 'B', 'C','D','E','F') as $tower) { ?>
                        <option value="<?php echo $tower;?>"<?php if (!(strcmp($tower, $rows['tower']))) {echo "selected=\"selected\"";} ?>><?php echo $tower?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Unit</label>
                        <select class="form-control" name="nmUnit" id="nmUnit">
                        <?php
                        if($rows['tower'] == 'A'){
                            $tower = $towera;
                        } else if ($rows['tower'] == 'B'){
                            $tower = $towerb;
                        } else if ($rows['tower'] == 'C'){
                            $tower = $towerc;
                        } else if ($rows['tower'] == 'D'){
                            $tower = $towerd;
                        } else if ($rows['tower'] == 'E'){
                            $tower = $towere;
                        } else if ($rows['tower'] == 'F'){
                            $tower = $towerf;
                        }
                        foreach ($tower as $unit) :
                        ?>
                        <option value="<?php echo $unit['lantai'];?>"<?php if (!(strcmp($unit['lantai'], $rows['lantai']))) {echo "selected=\"selected\"";} ?>><?php echo $unit['lantai'];?></option>
                        <?php
                        endforeach;
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Date </label>
                        <input type="text" name="dateho" value="<?php echo $rows['tgl_hand_over'];?>" class="form-control"  placeholder="Transaksi" id="datepicker">
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <input type="hidden" name="idTransaction" value="<?php echo $rows['id_transaction'];?>" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
        </div>
    </section>
 </div>
 <?php
endforeach;
?>

<script>
    $(document).ready(function(){
        
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