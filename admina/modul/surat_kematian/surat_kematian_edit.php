

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Surat Kematian
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>surat-kematian">Surat Kematian</a></li>
                        <li class="active">Edit Surat Kematian</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Surat Kematian</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/surat_kematian/surat_kematian_action.php?act=up">
                      <div class="form-group">
                        <label for="nik" class="control-label col-lg-2">nik</label>
                        <div class="col-lg-10">
                          <input type="text" name="nik" value="<?=$data_edit->nik;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama" class="control-label col-lg-2">nama</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama" value="<?=$data_edit->nama;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jenis_kel" class="control-label col-lg-2">jenis_kel</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_kel" value="<?=$data_edit->jenis_kel;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="hari_rip" class="control-label col-lg-2">hari_rip</label>
                        <div class="col-lg-10">
                          <input type="text" name="hari_rip" value="<?=$data_edit->hari_rip;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_rip" class="control-label col-lg-2">tanggal_rip</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="tanggal_rip" value="<?=$data_edit->tanggal_rip;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tempat_rip" class="control-label col-lg-2">tempat_rip</label>
                        <div class="col-lg-10">
                          <input type="text" name="tempat_rip" value="<?=$data_edit->tempat_rip;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="usia_rip" class="control-label col-lg-2">usia_rip</label>
                        <div class="col-lg-10">
                          <input type="text" name="usia_rip" value="<?=$data_edit->usia_rip;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="id_user" class="control-label col-lg-2">id_user</label>
                        <div class="col-lg-10">
                          <input type="text" name="id_user" value="<?=$data_edit->id_user;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_create" class="control-label col-lg-2">tanggal_create</label>
                        <div class="col-lg-10">
                          <input type="text" name="tanggal_create" value="<?=$data_edit->tanggal_create;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="status_form" class="control-label col-lg-2">status_form</label>
                        <div class="col-lg-10">
                          <select name="status_form" data-placeholder="Pilih status_form..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <?php foreach ($db->fetch_all("tingkat_acc") as $isi) {

                  if ($data_edit->status_form==$isi->id_tingkat_acc) {
                    echo "<option value='$isi->id_tingkat_acc' selected>$isi->jenis_acc</option>";
                  } else {
                  echo "<option value='$isi->id_tingkat_acc'>$isi->jenis_acc</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id_rip;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>surat-kematian" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 