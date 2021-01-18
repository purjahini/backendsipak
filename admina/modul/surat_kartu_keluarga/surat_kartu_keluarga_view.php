
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Surat Kartu Keluarga
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>surat-kartu-keluarga">Surat Kartu Keluarga</a></li>
                        <li class="active">Surat Kartu Keluarga List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Surat Kartu Keluarga</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_surat_kartu_keluarga" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>nama</th>
													<th>nik</th>
													<th>jenis_kelamin</th>
													<th>tempat_lahir</th>
													<th>tanggal_lahir</th>
													<th>pekerjaan</th>
													<th>alamat</th>
													<th>rt</th>
													<th>rw</th>
													<th>dusun</th>
													<th>kelurahan</th>
													<th>kecamatan</th>
													<th>kabupaten</th>
													<th>provinsi</th>
													<th>status_nikah</th>
													<th>agama</th>
													<th>gol_darah</th>
													<th>warganegara</th>
													<th>id_user</th>
													<th>status_form</th>
													<th>tanggal_pengajuan</th>
													
                          <th>Action</th>
                         
                        </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                    
        <?php
       foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url) {
                          if ($role_act["insert_act"]=="Y") {
                    ?>
          <a href="<?=base_index();?>surat-kartu-keluarga/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
      
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {

    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."surat-kartu-keluarga/edit/'+aData[indek]+'".'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/surat_kartu_keluarga/surat_kartu_keluarga_action.php".' class="btn btn-danger hapus btn-flat"><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }

  
  
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_surat_kartu_keluarga").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>surat-kartu-keluarga/detail/'+aData[indek]+'" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/surat_kartu_keluarga/surat_kartu_keluarga_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });
        
        </script>  
            