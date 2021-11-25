<body class="hold-transition login-page">
<div class="login-box">
 <!-- /.login-logo -->
 <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><?php echo $title;?> </a>
    </div>

                
                        <div class="card-body">
                            <form  role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo base_url('auth/registration');?>">
                                <div class="form-group">
                                    <label for="uname1">Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="name"  value="<?= set_value('name');?>">
                                    <small class=".text-danger"><?php echo form_error('name'); ?></small>                 
                                </div>
                                <div class="form-group">
                                    <label for="uname2">Email</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" value="<?= set_value('email');?>">
                                    <small class=".text-danger"><?php echo form_error('email'); ?></small>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd" id="pwd1" required="" autocomplete="new-password">
                                    <small class=".text-danger"><?php echo form_error('pwd'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd1" id="pwd2" required="" autocomplete="new-password">
                                    
                                </div>
                                <div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" id="btnLogin">Create Acount</button>
                            </form>
                            <p class="mb-0">
                                <a href="<?php echo base_url('auth');?>" class="text-center">Login</a>
                            </p>
                        </div>
                
 </div>
</div>
</body>
