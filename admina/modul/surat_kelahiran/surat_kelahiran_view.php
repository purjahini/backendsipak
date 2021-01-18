
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Surat Kelahiran
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>surat-kelahiran">Surat Kelahiran</a></li>
                        <li class="active">Surat Kelahiran List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Surat Kelahiran</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_surat_kelahiran" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>nama</th>
													<th>jenis_kelamin</th>
													<th>tempat_lahir</th>
													<th>jam_lahir</th>
													<th>hari_lahir</th>
													<th>tanggal_lahir</th>
													<th>jenis_kelahiran</th>
													<th>kelahiran_ke</th>
													<th>penolong_lahir</th>
													<th>berat_bayi</th>
													<th>alamat</th>
													<th>rt</th>
													<th>rw</th>
													<th>dusun</th>
													<th>kelurahan</th>
													<th>kecamatan</th>
													<th>kabupaten</th>
													<th>provinsi</th>
													<th>nama_ibu</th>
													<th>nama_ayah</th>
													<th>id_user</th>
													<th>status_form_lahir</th>
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
          <a href="<?=base_index();?>surat-kelahiran/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
      
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {
    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."surat-kelahiran/edit/'+aData[indek]+'".'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/surat_kelahiran/surat_kelahiran_action.php".' class="btn btn-danger hapus btn-flat"><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_surat_kelahiran").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>surat-kelahiran/detail/'+aData[indek]+'" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/surat_kelahiran/surat_kelahiran_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });</script>  
            