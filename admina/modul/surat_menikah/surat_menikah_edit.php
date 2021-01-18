

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Surat Menikah
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>surat-menikah">Surat Menikah</a></li>
                        <li class="active">Edit Surat Menikah</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Surat Menikah</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/surat_menikah/surat_menikah_action.php?act=up">
                      <div class="form-group">
                        <label for="nama_pria" class="control-label col-lg-2">nama_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_pria" value="<?=$data_edit->nama_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nik_pria" class="control-label col-lg-2">nik_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="nik_pria" value="<?=$data_edit->nik_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jenis_kel_pria" class="control-label col-lg-2">jenis_kel_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_kel_pria" value="<?=$data_edit->jenis_kel_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tempat_lahir_pria" class="control-label col-lg-2">tempat_lahir_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="tempat_lahir_pria" value="<?=$data_edit->tempat_lahir_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_lahir_pria" class="control-label col-lg-2">tanggal_lahir_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="tanggal_lahir_pria" value="<?=$data_edit->tanggal_lahir_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pekerjaan_pria" class="control-label col-lg-2">pekerjaan_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="pekerjaan_pria" value="<?=$data_edit->pekerjaan_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="alamat_pria" class="control-label col-lg-2">alamat_pria</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat_pria" value="<?=$data_edit->alamat_pria;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama_wanita" class="control-label col-lg-2">nama_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_wanita" value="<?=$data_edit->nama_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nik_wanita" class="control-label col-lg-2">nik_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="nik_wanita" value="<?=$data_edit->nik_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jenis_kel_wanita" class="control-label col-lg-2">jenis_kel_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_kel_wanita" value="<?=$data_edit->jenis_kel_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tempat_lahir_wanita" class="control-label col-lg-2">tempat_lahir_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="tempat_lahir_wanita" value="<?=$data_edit->tempat_lahir_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_lahir_wanita" class="control-label col-lg-2">tanggal_lahir_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="tanggal_lahir_wanita" value="<?=$data_edit->tanggal_lahir_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pekerjaan_wanita" class="control-label col-lg-2">pekerjaan_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="pekerjaan_wanita" value="<?=$data_edit->pekerjaan_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="alamat_wanita" class="control-label col-lg-2">alamat_wanita</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat_wanita" value="<?=$data_edit->alamat_wanita;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="id_user" class="control-label col-lg-2">id_user</label>
                        <div class="col-lg-10">
                          <input type="text" name="id_user" value="<?=$data_edit->id_user;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="create_surat_nikah" class="control-label col-lg-2">create_surat_nikah</label>
                        <div class="col-lg-10">
                          <input type="text" name="create_surat_nikah" value="<?=$data_edit->create_surat_nikah;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="status_form_nikah" class="control-label col-lg-2">status_form_nikah</label>
                        <div class="col-lg-10">
                          <select name="status_form_nikah" data-placeholder="Pilih status_form_nikah..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <?php foreach ($db->fetch_all("tingkat_acc") as $isi) {

                  if ($data_edit->status_form_nikah==$isi->id_tingkat_acc) {
                    echo "<option value='$isi->id_tingkat_acc' selected>$isi->jenis_acc</option>";
                  } else {
                  echo "<option value='$isi->id_tingkat_acc'>$isi->jenis_acc</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id_menikah;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>surat-menikah" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 