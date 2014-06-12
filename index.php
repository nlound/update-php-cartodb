
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Escribo en cartoDB</title>
  	<script src="js/jquery-1.11.1.min.js"></script>

<script>
	function addDato() {
		var arg1 = $('#ldesc').val(),
			arg2 = $('#lnomb').val(),
		 	query =  "funciones.php?action=addTable&arg1=" + arg1 + "&arg2=" + arg2;

		$.ajax({
	    	url: query
	    }).done(function(data) {
	    	if (data !== ''){
				console.log(data);
	    	}
	    });
  	}
	
</script>
</head>

<body>

<form>
	Nombre: <input type="text" id="lnomb"><br>
	Descripción: <input type="text" id="ldesc"><br>
	<input type="button" name="add" value="Agregar" onclick="javascript:addDato();"> 
</form>


</body>
</html>
