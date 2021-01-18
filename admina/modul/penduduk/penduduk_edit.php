

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Penduduk
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>penduduk">Penduduk</a></li>
                        <li class="active">Edit Penduduk</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Penduduk</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/penduduk/penduduk_action.php?act=up">
                      <div class="form-group">
                        <label for="nama_user" class="control-label col-lg-2">nama_user</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_user" value="<?=$data_edit->nama_user;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nik_user" class="control-label col-lg-2">nik_user</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="nik_user" value="<?=$data_edit->nik_user;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="password" class="control-label col-lg-2">password</label>
                        <div class="col-lg-10">
                          <input type="text" name="password" value="<?=$data_edit->password;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id_user;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>penduduk" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 