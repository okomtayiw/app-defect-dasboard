<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
           
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0"><?php echo $judul;?></h3>
                        </div>
                        <div class="card-body">
                            <form class="form-user-registration" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo base_url('auth/forgotPassword');?>">
                               
                                <div class="form-group">
                                    <label for="uname2">Email</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" value="<?= set_value('email');?>">
                                    <small class="text-dangers"><?php echo form_error('email'); ?></small>
                                    
                                </div>
                               
                                <div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Send</button>
                            
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
