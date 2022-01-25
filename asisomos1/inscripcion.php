<?php  
header('Content-Type: text/html; charset=utf-8');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['mail'];
$contacto = $_POST['contacto'];
$cuenta = $_POST['cuenta'];
$categoria = $_POST['categoria'];
$entidad = $_POST['entidad'];
$pais = $_POST['pais'];
$tema = $_POST['tema'];
$propuesta = $_POST['propuesta'];
$habeas1 = $_POST['habeas1'];


if($categoria == "Seleccione"){$categoriaValido = 0;}else{$categoriaValido = 1;}
if($tema == "Seleccione"){$temaValido = 0;}else{$temaValido = 1;}
if(VerificarrDireccionCorreo($email)){ $emailValido = 1; }else{$emailValido = 0;}
if(is_numeric($contacto)){ $contactoValido = 1; }else{ $contactoValido = 0; }

if ( $categoriaValido == 1) {//VALIDA TEMA
if ( $temaValido == 1) {//VALIDA TEMA
if ( $contactoValido == 1) {//VALIDA CONTACTO NUMERO
if ( $emailValido == 1) {//VALIDA EMAIL


if( $nombre != "" && $apellido != "" && $contacto != "" && $entidad != "" && $categoria != "" && $pais != "" && $tema != "" && $propuesta != "" ){

if($habeas1 == "si"){
	$resulthabeas = "Si";
}else{
	$resulthabeas = "No";
}


$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$fileName = "inscripcion.csv";
$fileHandle = fopen($fileName, 'a+');
fwrite($fileHandle, "\n".date('Y-m-d H:i:s').' ; '.$nombre.' ; '.$apellido.' ; '.$email.' ; '.$contacto.' ; '.$cuenta.' ; '.$categoria.' ; '.$entidad.' ; '.$pais.' ; '.$tema.' ;'.$propuesta.' ; '.$resulthabeas.' ; '.$ip.' ');


    require("class.phpmailer.php");
    $mail             = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Host       = "mail.benditaess.com";
    $mail->Port       = 587;
    $mail->Username   = 'antony_padilla@benditaess.com';
    $mail->Password   = "essantony2013";

    $mail->From       = "laura_lopez@speak1to1.com";
    $mail->FromName   = "FMR";

	$mail->From       = "sandra_duarte@benditaess.com";
    $mail->FromName   = "FMR";


    $mail->Subject    = "Gracias por registrarte en FMR";
    $mail->AddAddress($email,"CONTACTO");
      
	$mail->IsHTML(true);
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        
$body = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' name='viewport'>
	<title>Speak1to1</title>

	<style type='text/css'>
		/* Cool mobile stuff, please don't touch :) */
.izq{padding-left:50px;}
.der{padding-right:50px;}
.img1	{height:57px; width:205px;}
.img2	{height:61px; width:317px;}
@media only screen and (max-width: 600px) {
	body                    { width: 100% !important; -webkit-text-size-adjust: none; }
	table table             { width: 320px !important; }
	.scaleHeader            { width: 320px !important; }
	.scaleHeaderLogo        { width: 300px !important; }
	.scaleFullwidth         { width: 300px !important; height: 127px !important; }
	.scaleSeperator         { width: 300px !important; }
	.scaleFollowus          { width: 240px !important; }
	.fullWidth              { width: 320px !important; }
	.mobileImage            { margin: 20px auto; }
	.center                 { text-align: center !important; }
	.tableCenter            { margin-left: auto !important; margin-right: auto !important; float: none !important; }
	.columnMargin           { margin-bottom: 20px !important; }
	.button                 { margin-left: auto !important; margin-right: auto !important; float: none !important; }
	.img-resposnive			{width: 60px;}
	.img1, .img2			{ width: 200px;}
	.legales				{	width: 35px; height:auto;}
	.shadow_lados			{width: 26px; height: auto;}
	.izq{padding-left:0px;}
	.der{padding-right:0px;}
}
.mobileImage {margin: 20px auto; }
</style>
</head>
<body style='margin: 0; padding: 0;' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>      
<font style='font-family: Tahoma, Geneva, sans-serif; font-size:1px; color:#fff;'>
Pronto nos comunicaremos contigo para seguir el proceso de convocatoria al <strong>1er FORO DE MARKETING RELACIONAL, COLOMBIA 2016.</strong> Por primera vez en el país reunimos a los más importantes expertos de Marketing relacional de Latinoamérica y tú harás parte de este evento.

	<!-- START PAGE WRAPPER -->
	<table width='100%' cellspacing='0' cellpadding='0' align='center' style='background:white; color:#666; font-family: Tahoma, Geneva, sans-serif; font-size:14px;'>
		<tr>
			<td valign='top'>

				<!-- START VIEW ONLINE LINK -->
				<table width='100%' class='fullWidth' cellspacing='0' cellpadding='0' align='center' style='background:white;'>
					<tr>
						<td valign='top'>
							<table width='700' cellspacing='0' cellpadding='0' align='center'>
								<tr>
									<td style='font-family: Tahoma, Geneva, sans-serif; font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: right;'>

										<table width='330' cellspacing='0' cellpadding='0' align='left'>
											<tr>
												<td style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: left;'>Problemas con la previsualizaci&oacute;n? <a href='http://fmr.com.co/autorespuesta/' style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #1D242C; text-decoration: none;'>Clic para ver la versi&oacute;n online</a></td>
											</tr>
										</table>                                        

										<table width='200' cellspacing='0' cellpadding='0' align='right'>
											<tr>
												<td style='font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: right;'></td>
											</tr>
										</table> 
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END VIEW ONLINE LINK -->

				<!-- START FULL WIDTH QUOTE+LOGO -->

				<table width='100%' cellspacing='0' cellpadding='0' align='center'>
					<tr>
						<td valign='top'>
							<table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>
								<tr>
									<td width='720' valign='top'><!-- START LOGO --><!-- END LOGO -->
										<div style=' font-size:10px; color:#FFF; font-family: Tahoma, Geneva, sans-serif;' align='right' ><img src='http://fmr.com.co/autorespuesta//images/header.png' style='width:100%;'></div>
										</td>
								</tr>
							</table>   
						</td>
					</tr>
				</table>


				




				<!-- END FULL WIDTH QUOTE+LOGO -->

				<!-- START LEFT IMAGE RIGHT TEXT -->
				
				<table width='100%' cellspacing='0' style='background:white;' cellpadding='0' align='center'>
					<tr>
						<td valign='top'>
							<table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#EFF1F0;'>
								<tr>
									<td>
										<table  cellspacing='0' cellpadding='0'>
											<tr>
												<td valign='top'></td>
												<td align='center' valign='top'>
											<div style='font-family: Arial, Helvetica, sans-serif; font-size:20px; color:#00B2C5; line-height:20px;' align='center'><br><br>
															<strong>Hola ".$nombre.",</strong>
														</div>	
											

												<div style='font-family: Arial, Helvetica, sans-serif; padding:15px 70px 15px 70px; font-size:15px; color:#5A5A5A; line-height:20px;' align='center'>

												Pronto nos comunicaremos contigo para seguir el proceso de convocatoria al <strong>1er FORO DE MARKETING RELACIONAL, COLOMBIA 2016.</strong> Por primera vez en el pa&iacute;s reunimos a los m&aacute;s importantes expertos de Marketing relacional de Latinoam&eacute;rica y t&uacute; har&aacute;s parte de este evento.<br><br>
														</div>
														
																							
																									</td>
											</tr>
										</table>

					<table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>			
								<tr>
									<td width='720' valign='top'><!-- START LOGO --><!-- END LOGO -->
<img src='http://fmr.com.co/autorespuesta/images/blanco.jpg' width='100%' alt=''/>
									</td>
								</tr>
							</table> 


							




										
							<table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>			
								<tr>
									<td width='720' valign='top'><!-- START LOGO --><!-- END LOGO -->
<img src='http://fmr.com.co/autorespuesta/images/footer.jpg' width='100%' alt=''/>
									</td>
								</tr>
							</table> 




										





									</td>									
								</tr>
								<tr>
									<td align='center'>
									</td>
								</tr>
							</table>
							
                       

						</td>
					</tr>
				</table>
				<!-- END LEFT IMAGE RIGHT TEXT -->

				<!-- START FULL WIDTH QUOTE+LOGO -->
				<table width='100%' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>
					<tr>
						<td valign='top'>
							<table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#EFEFF0;'>
								
								</table>   
							</td>
						</tr>
					</table>
					<!-- END FULL WIDTH QUOTE+LOGO -->
				</td>
			</tr>
		</table>
		<!-- END PAGE WRAPPER -->  
		<br/><br/>

	</body>
	</html>


";

  	$mail->Body = $body;      


  if($mail->Send()) {} else {}





















    $mail             = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Host       = "mail.benditaess.com";
    $mail->Port       = 587;
    $mail->Username   = 'antony_padilla@benditaess.com';
    $mail->Password   = "essantony2013";

    $mail->From       = "laura_lopez@speak1to1.com";
    $mail->FromName   = "FMR";

    $mail->Subject    = "Nuevo registro en FMR";
    $mail->AddAddress("antony_padilla@benditaess.com","Contacto");
    $mail->AddAddress("sandra_duarte@benditaess.com","Contacto");
    $mail->AddAddress("laura_lopez@benditaess.com","Contacto");
      
	$mail->IsHTML(true);
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        



        
        $body = "Nombre: $nombre\n<br>".
        "Apellido: $apellido\n<br>".
        "Email: $email \n<br>".
        "Contacto: $contacto\n<br>".
        "cuenta: $cuenta\n<br>".
        "Categoria: $categoria \n<br>".
        "Entidad: $entidad \n<br>".
        "Pais: $pais\n<br>".
        "Tematica $tematica\n<br>".
        "Propuesta: $propuesta\n<br>".
        "Habeas data: $resulthabeas\n<br>".
        "IP: $ip\n";

  	$mail->Body = $body;      


  if($mail->Send()) {echo "<script language='javascript'>alert('Tu registro ha sido realizado.');window.location.href='http://www.speak1to1.com/';</script>";} else {echo "<script language='JavaScript'>alert('Error al realizar el registro.');history.back();</script>";}

































}else{
	echo "<script language='javascript'>alert('Te falta diligenciar algunos campos.');history.back();</script>";
}

}else{echo "<script language='javascript'>alert('Tu cuenta de E-mail no es valida.');history.back();</script>";}//FIN SI EMAIL

}else{echo "<script language='javascript'>alert('Tu número de contacto no es valido.');history.back();</script>";}//FIN SI CONTACTO NUMERO

}else{echo "<script language='javascript'>alert('Debes seleccionar una temática valida.');history.back();</script>";}//FIN SI TEMA

}else{echo "<script language='javascript'>alert('Debes seleccionar una categoría valida.');history.back();</script>";}//FIN SI CATEGORIA


function VerificarrDireccionCorreo($direccion)
{
   $Sintaxis='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
   if(preg_match($Sintaxis,$direccion))
      return true;
   else
     return false;
}

?>