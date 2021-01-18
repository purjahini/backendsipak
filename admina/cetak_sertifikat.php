<?php
include('config.php');
include('fpdf/fpdf.php');
date_default_timezone_set('Asia/Jakarta');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

$id_client = $_POST['id_client'];
// $id_client =3;


$query_event=mysqli_query($db,"SELECT * FROM event_tb");
$pecah_event = mysqli_fetch_array($query_event);

$query_client=mysqli_query ($db, "SELECT * FROM client_tb  WHERE id_client='$id_client' ");
$pecah_client= mysqli_fetch_array($query_client);
 

if ($id_client != null) {
	
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(1,3,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',25);
$pdf->Image('upload_foto/sertifikatpolos.png',0.5,0.5,28.5,20);
$pdf->Image('upload_foto/logo.png',23,2,5,4);
$pdf->Image('upload_foto/ttdpembicara1.png',5,14.5,5,4);
$pdf->Image('upload_foto/ttdketua1.png',19,14.5,5,4);
$pdf->MultiCell(22,0.5,"SERTIFIKAT",0,'R');
$pdf->ln(1);     
$pdf->MultiCell(22,0.5,$pecah_event['nama_event'],0,'R');
$pdf->SetX(4);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Diberikan kepada :",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(25.5,0.7,$pecah_client['nama_client'],0,10,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25.5,0.7,"",0,10,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Atas partisipasinya sebagai :",0,10,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25.5,0.7,"",0,10,'C');
$pdf->SetFont('Arial','B',20);
$tipe_client = $pecah_client['tipe_client'];

switch (number_format($tipe_client)){
	case 0:
		$jabatan = "Peserta";
	break;
	case 1:
		$jabatan = "Panitia";
	break;
	case 2:
		$jabatan = "Admin";
	break;
}
$pdf->Cell(25.5,0.7,$jabatan,0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25.5,0.7,$pecah_event['nama_event'].",",0,10,'C');
$pdf->Cell(27,0.7,$pecah_event['deskripsi_event'],0,10,'C');
$pdf->Cell(25.5,0.7,"Diselenggarakan pada tanggal ".$pecah_event['waktu_event'].".",0,10,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"Magelang ,".date("d/m/Y"),0,10,'C');
$pdf->Cell(20,0.7,"                                    "."Pembicara"."                                                                                                   "."Kepala Sekolah,",0,5,'L');

$pdf->ln(1.5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,0.7,"                                    ".$pecah_event['pembicara_event']."                                                                        ".$pecah_event['ketua_event'],0,5,'L');
$pdf->Cell(20,0.7,"                                    ".""."                                                                                                                   "."NIP. 19600906 199412 1 001",0,5,'L');

$dir = $_SERVER['DOCUMENT_ROOT'] . '/event_app/pdf/';
$fileName = "Sertifikat.pdf" ;
$pdf->Output('F',$dir.$fileName);

	$response["api_status"] = "1";
	$response["message"] = "success";
	$response["url"] = $fileName;
	echo json_encode($response);
} else{
	$response["api_status"] = "0";
	$response["message"] = "success";
	  $response["data"] = "null";
	echo json_encode($response);
}

?>