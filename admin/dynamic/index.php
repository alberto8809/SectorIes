 <?php
 
require('conexion.php');
require('Clases_BD\cat_entidad.php');
require('Clases_BD\cat_sector.php');
require('Clases_BD\cat_rama.php');

$entidades=Entidad::Recupera();
//$sector=Sector::buscarPorId(11);
$sectores=Sector::Recupera();
$ramas=Rama::Recupera();  
$array= array();
$i=0;
foreach ($entidades as $value) {
	$i++;
	$array[$i]=$value['region'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>FESE</title>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCYLZ_QLXGmLRMoE62wHZY36a5y27-YmuM&signed_in=true&callback=start'async defer></script>
<link rel='stylesheet' href='..\css\bootstrap.css'>
<script type='text/javascript' src='..\js\function.js'></script>
<script type='text/javascript' src='..\js\regions.js'></script>
<link rel='stylesheet' href='..\css\estilo.css'>
<script type="text/javascript">
function Region ()
{
			var texto=document.getElementById('country').value;			
			var jArray0=<?php echo json_encode($array)?>;

			if (jArray0[1]==texto) {		
			
			myCenter=new google.maps.LatLng(20.661250, -103.352239);
			var mapOptions = {    
			center: myCenter,
			zoom: 8,    
			mapTypeId: google.maps.MapTypeId.ROADMAP};
			map= new google.maps.Map(document.getElementById("right"),mapOptions);		
						
			}else if ( jArray0[2]==texto) {

			myCenter=new google.maps.LatLng(18.718452, -100.581460);
			var mapOptions = {    
			center: myCenter,
			zoom: 8,    
			mapTypeId: google.maps.MapTypeId.ROADMAP};
			map1 = new google.maps.Map(document.getElementById("right"),mapOptions);
				
			}else if (jArray0[3]==texto) {
				myCenter=new google.maps.LatLng(19.446911, -99.135773);
			var mapOptions = {    
			center: myCenter,
			zoom: 9,
			mapTypeId: google.maps.MapTypeId.ROADMAP};    			
			map1 = new google.maps.Map(document.getElementById("right"),mapOptions);
				
			}else if (jArray0[4]==texto) {
				myCenter=new google.maps.LatLng(23.482155, -99.953514);
			var mapOptions = {    
			center: myCenter,
			zoom: 7,    
			mapTypeId: google.maps.MapTypeId.ROADMAP};
	
			map1 = new google.maps.Map(document.getElementById("right"),mapOptions);				

			}else if (jArray0[5]==texto) {
				myCenter=new google.maps.LatLng(29.583314, -109.663228);
			var mapOptions = {    
			center: myCenter,
			zoom: 7,    
			mapTypeId: google.maps.MapTypeId.ROADMAP};
	
			map1 = new google.maps.Map(document.getElementById("right"),mapOptions);

			}else if (jArray0[6]==texto) {

			myCenter=new google.maps.LatLng(17.327981, -93.695824);
			var mapOptions = {    
			center: myCenter,
			zoom: 8,    
			mapTypeId: google.maps.MapTypeId.ROADMAP};	
			map1 = new google.maps.Map(document.getElementById("right"),mapOptions);
			}
}
</script>
</head>

<body>
<div class='container-fluid'>
<div id='cabecera'>
<div class='row'>
<div class='col-xs-6 col-xs-offset-2 col-sm-3 col-sm-offset-2 col-md-3 col-lg-2'>
<img src='..\img\fese.png' class='img-responsive' alt='FESE'>
</div>
<div class='col-xs-3 col-sm-2 col-sm-offset-3 col-md-1 col-md-offset-3  col-lg-2 col-lg-offset-5'>
<img src='..\img\anuies.png' class='img-responsive' alt='ANUIES'>
</div>
</div>
</div>
<div id='left'>
<div class='row'>

<div id='form'>
<div class='col-xs-8 col-xs-offset-2  col-sm-8 col-sm-offset-2  col-md-8 col-md-offset-2  col-lg-8 col-lg-offset-2'>
<label class='col-sm-offset-3 col-sm-2 col-lg-offset-3 col-lg-5 control-label'>Sector</label>
<select class='form-control'  name='sector' >

<?php
foreach($sectores as $value){echo "<option disable>";echo utf8_encode($value['nombre_sector']);echo"</option>;";}?>
</select>
<br/><br/>

<label class='col-sm-offset-3 col-sm-2 col-lg-offset-2 col-lg-7 control-label'>Tipo Rama</label>

<form name='form1'  method='post' action='procesa.php'>
<?php
foreach ($ramas as $value) {
	echo "<br><br><input type='checkbox' name='ram[]' value='";
	echo utf8_encode($value['inf_descripcion'])."'>";
	echo utf8_encode($value['inf_descripcion'])."</input>";
}
?>

<br><br>
<input type=submit name='submit' value=enviar>
</form>
</div>
</div>
</div>
</div>
<div  id='right'></div>
</body>
</html>