

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Surat EKTP
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>surat-ektp">Surat EKTP</a></li>
                        <li class="active">Edit Surat EKTP</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Surat EKTP</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/surat_ektp/surat_ektp_action.php?act=up">
                      <div class="form-group">
                        <label for="nama" class="control-label col-lg-2">nama</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama" value="<?=$data_edit->nama;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nik" class="control-label col-lg-2">nik</label>
                        <div class="col-lg-10">
                          <input type="text" name="nik" value="<?=$data_edit->nik;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jenis_kel" class="control-label col-lg-2">jenis_kel</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_kel" value="<?=$data_edit->jenis_kel;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tempat_lahir" class="control-label col-lg-2">tempat_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="tempat_lahir" value="<?=$data_edit->tempat_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tanggal_lahir" class="control-label col-lg-2">tanggal_lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="tanggal_lahir" value="<?=$data_edit->tanggal_lahir;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pekerjaan" class="control-label col-lg-2">pekerjaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="pekerjaan" value="<?=$data_edit->pekerjaan;?>" class="form-control" > 
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
                        <label for="status_nikah" class="control-label col-lg-2">status_nikah</label>
                        <div class="col-lg-10">
                          <input type="text" name="status_nikah" value="<?=$data_edit->status_nikah;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="agama" class="control-label col-lg-2">agama</label>
                        <div class="col-lg-10">
                          <input type="text" name="agama" value="<?=$data_edit->agama;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="gol_darah" class="control-label col-lg-2">gol_darah</label>
                        <div class="col-lg-10">
                          <input type="text" name="gol_darah" value="<?=$data_edit->gol_darah;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kewarganegaraan" class="control-label col-lg-2">kewarganegaraan</label>
                        <div class="col-lg-10">
                          <input type="text" name="kewarganegaraan" value="<?=$data_edit->kewarganegaraan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="masa_berlaku" class="control-label col-lg-2">masa_berlaku</label>
                        <div class="col-lg-10">
                          <input type="text" name="masa_berlaku" value="<?=$data_edit->masa_berlaku;?>" class="form-control" > 
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

                      <input type="hidden" name="id" value="<?=$data_edit->id_form_ektp;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>surat-ektp" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 