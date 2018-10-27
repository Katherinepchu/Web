<?php
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
$sql = "SELECT * FROM galeria";
$rsc = mysql_query($sql);
$tabla = "


<style>


td, th {
    border: 1px solid #dddddd;
    text-align: left;
    
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<script src='src/table2csv.js'></script>

</head>
<body>

<script type='text/javascript'
src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
</script></div>
<div class='jquery-script-clear'></div>
</div>
</div>

</div>
<script>
  /* global $ */
	$('#dl').click(function(){
		$('#tab').table2csv('output', {appendTo: '#out'});
		$('#tab').table2csv();
	})
</script>
<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<div class='container2'><font size=3 align=center color=#0D0400><table id='tab' class='table table-bordered table-striped' width='900px' height='250px' align='center' border=10 border=5px solid black    size=40 cellspading='0' ></font></div>";
$tabla.="<tr   >";
$tabla.="<td >CODIGO</td>";
$tabla.="<td>NOMBRE DEL EVENTO</td>";
$tabla.="<td>IMAGEN</td>";
$tabla.="<td>NOMBRE - IMAGEN</td>";
$tabla.="<td>EDITAR</td>";
$tabla.="<td>ELIMINAR</td>";
$tabla.="</tr>";
//obtiene la cantidad de columnas o campos de una tabla
$cont_colum = mysql_num_fields($rsc);
while($fila = mysql_fetch_array($rsc)) {
	$tabla.="<tr  >";
	for ($x=0; $x<$cont_colum;$x++){
		if($x == 1){
			$tabla.="<td><img src='".$fila[$x]."' style='height:50px; width:50px'></img></td>";
		}
		$tabla.="<td>".$fila[$x]."</td>";
	}
	$tabla.="<td><font color=#1339B2><a class='myButton1'onclick ='modificargaleria(".$fila[0].");'> Editar</font></td>";
	
	$tabla.="<td><a  class='myButton2' onclick='eliminar_galeria(".$fila[0].");'>Eliminar</td>";//metodo get
	//$tabla.="<td><a href='.php?cod=".$fila[0]."'>Editar</td>";//metodo get
	$tabla.="</tr>";
	}
	$tabla.="</table><p>
  <button  class='myButton' id='dl' class='btn btn-primary'>Exportar a Excel</button>
</p>
<h3>Resultado:</h3>
<div id='out' class='well'></div>";
	echo $tabla;
?>
<!--Estilos de button eliminar--->

<style>
.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	-webkit-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	box-shadow:inset 0px 1px 0px 0px #dcecfb;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bddbfa), color-stop(1, #80b5ea));
	background:-moz-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-webkit-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-o-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-ms-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bddbfa', endColorstr='#80b5ea',GradientType=0);
	background-color:#bddbfa;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #80b5ea), color-stop(1, #bddbfa));
	background:-moz-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:-webkit-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:-o-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:-ms-linear-gradient(top, #80b5ea 5%, #bddbfa 100%);
	background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80b5ea', endColorstr='#bddbfa',GradientType=0);
	background-color:#80b5ea;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>
<!--- estilos de myButton1-->
<Style>
.myButton1 {
	-moz-box-shadow: 3px 4px 0px 0px #3e7327;
	-webkit-box-shadow: 3px 4px 0px 0px #3e7327;
	box-shadow: 3px 4px 0px 0px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #81b865;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.myButton1:active {
	position:relative;
	top:1px;
}

</style>

<!---estilos de myButton1-->
<style>
.myButton2 {
	-moz-box-shadow: 3px 4px 0px 0px #647327;
	-webkit-box-shadow: 3px 4px 0px 0px #647327;
	box-shadow: 3px 4px 0px 0px #647327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c1d95f), color-stop(1, #9aab38));
	background:-moz-linear-gradient(top, #c1d95f 5%, #9aab38 100%);
	background:-webkit-linear-gradient(top, #c1d95f 5%, #9aab38 100%);
	background:-o-linear-gradient(top, #c1d95f 5%, #9aab38 100%);
	background:-ms-linear-gradient(top, #c1d95f 5%, #9aab38 100%);
	background:linear-gradient(to bottom, #c1d95f 5%, #9aab38 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c1d95f', endColorstr='#9aab38',GradientType=0);
	background-color:#c1d95f;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #8f8729;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #aab872;
}
.myButton2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #9aab38), color-stop(1, #c1d95f));
	background:-moz-linear-gradient(top, #9aab38 5%, #c1d95f 100%);
	background:-webkit-linear-gradient(top, #9aab38 5%, #c1d95f 100%);
	background:-o-linear-gradient(top, #9aab38 5%, #c1d95f 100%);
	background:-ms-linear-gradient(top, #9aab38 5%, #c1d95f 100%);
	background:linear-gradient(to bottom, #9aab38 5%, #c1d95f 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9aab38', endColorstr='#c1d95f',GradientType=0);
	background-color:#9aab38;
}
.myButton2:active {
	position:relative;
	top:1px;
}

</style>





