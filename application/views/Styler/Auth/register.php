<div class="border-main">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <section class="section-area">
          <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-user"></i>Masuk Akun Anda</h2>
          <form class="form-contact ui-form" action="#" method="post">
            <div class="row">
            <?php if($error=$this->session->flashdata('errorLogin')){ ?>
              <div class="alert alert-danger alert-dark">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <span><?=$error?></span>
              </div>
              <?php }
              if($success=$this->session->flashdata('successLogin')){ ?>
              <div class="alert alert-success alert-dark">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <span><?=$success?></span>
              </div>
              <?php }?>
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Email or Username">
              </div>
              <div class="col-md-12">
                <input class="form-control" type="password" placeholder="Password">
              </div>
              <div class="col-xs-12">
                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Masuk</button>
              </div>
            </div>
          </form>
        </section>
      </div>
      <div class="col-md-2">
        
      </div>
      
      <div class="col-md-6">
        <section class="section-area section-contacts">
          <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-user-plus"></i>Daftar Member Baru</h2>
          <form class="form-contact ui-form" action="<?=base_url()?>prosesRegister" method="post">
            <div class="row">
            <?php if($error=$this->session->flashdata('error')){ ?>
              <div class="alert alert-danger alert-dark">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <span><?=$error?></span>
              </div>
              <?php }
              if($success=$this->session->flashdata('successMail')){ ?>
              <div class="alert alert-success alert-dark">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <span><?=$success?></span>
              </div>
              <?php }?>
              <div class="col-md-12">
                <input class="form-control" type="text" name="fullname" placeholder="Nama Lengkap">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="email" name="email" placeholder="Email">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" name="username" placeholder="Username">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="password" name="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="password" name="confirmPass" placeholder="Konfirmasi Password">
              </div>
              <div class="col-xs-12">
                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Daftar</button>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</div>