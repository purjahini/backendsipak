

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Surat Kelahiran
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>surat-kelahiran">Surat Kelahiran</a></li>
                        <li class="active">Edit Surat Kelahiran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Surat Kelahiran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/surat_kelahiran/surat_kelahiran_action.php?act=up">
                      <div class="form-group">
                        <label for="nama" class="control-label col-lg-2">nama</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama" value="<?=$data_edit->nama;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jenis_kelamin" class="control-label col-lg-2">jenis_kelamin</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_kelamin" value="<?=$data_edit->jenis_kelamin;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tempat_lahir" class="control-label col-lg-2">tempat_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="tempat_lahir" value="<?=$data_edit->tempat_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jam_lahir" class="control-label col-lg-2">jam_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="jam_lahir" value="<?=$data_edit->jam_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="hari_lahir" class="control-label col-lg-2">hari_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="hari_lahir" value="<?=$data_edit->hari_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_lahir" class="control-label col-lg-2">tanggal_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="tanggal_lahir" value="<?=$data_edit->tanggal_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jenis_kelahiran" class="control-label col-lg-2">jenis_kelahiran</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_kelahiran" value="<?=$data_edit->jenis_kelahiran;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kelahiran_ke" class="control-label col-lg-2">kelahiran_ke</label>
                        <div class="col-lg-10">
                          <input type="text" name="kelahiran_ke" value="<?=$data_edit->kelahiran_ke;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="penolong_lahir" class="control-label col-lg-2">penolong_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="penolong_lahir" value="<?=$data_edit->penolong_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="berat_bayi" class="control-label col-lg-2">berat_bayi</label>
                        <div class="col-lg-10">
                          <input type="text" name="berat_bayi" value="<?=$data_edit->berat_bayi;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="alamat" class="control-label col-lg-2">alamat</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat" value="<?=$data_edit->alamat;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="rt" class="control-label col-lg-2">rt</label>
                        <div class="col-lg-10">
                          <input type="text" name="rt" value="<?=$data_edit->rt;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="rw" class="control-label col-lg-2">rw</label>
                        <div class="col-lg-10">
                          <input type="text" name="rw" value="<?=$data_edit->rw;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="dusun" class="control-label col-lg-2">dusun</label>
                        <div class="col-lg-10">
                          <input type="text" name="dusun" value="<?=$data_edit->dusun;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kelurahan" class="control-label col-lg-2">kelurahan</label>
                        <div class="col-lg-10">
                          <input type="text" name="kelurahan" value="<?=$data_edit->kelurahan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kecamatan" class="control-label col-lg-2">kecamatan</label>
                        <div class="col-lg-10">
                          <input type="text" name="kecamatan" value="<?=$data_edit->kecamatan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kabupaten" class="control-label col-lg-2">kabupaten</label>
                        <div class="col-lg-10">
                          <input type="text" name="kabupaten" value="<?=$data_edit->kabupaten;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="provinsi" class="control-label col-lg-2">provinsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="provinsi" value="<?=$data_edit->provinsi;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama_ibu" class="control-label col-lg-2">nama_ibu</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_ibu" value="<?=$data_edit->nama_ibu;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama_ayah" class="control-label col-lg-2">nama_ayah</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_ayah" value="<?=$data_edit->nama_ayah;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="id_user" class="control-label col-lg-2">id_user</label>
                        <div class="col-lg-10">
                          <input type="text" name="id_user" value="<?=$data_edit->id_user;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="status_form_lahir" class="control-label col-lg-2">status_form_lahir</label>
                        <div class="col-lg-10">
                          <select name="status_form_lahir" data-placeholder="Pilih status_form_lahir..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <?php foreach ($db->fetch_all("tingkat_acc") as $isi) {

                  if ($data_edit->status_form_lahir==$isi->id_tingkat_acc) {
                    echo "<option value='$isi->id_tingkat_acc' selected>$isi->jenis_acc</option>";
                  } else {
                  echo "<option value='$isi->id_tingkat_acc'>$isi->jenis_acc</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_pengajuan" class="control-label col-lg-2">tanggal_pengajuan</label>
                        <div class="col-lg-10">
                          <input type="text" name="tanggal_pengajuan" value="<?=$data_edit->tanggal_pengajuan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id_kelahiran;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>surat-kelahiran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 