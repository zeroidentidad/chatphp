<html>
	<head>
		<script stype="text/javascript">
			function ventanachat(){
				var xmlHttp;
				if (window.XMLHttpRequest)
				  { xmlHttp=new XMLHttpRequest(); }
				else
				  { xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); }
				  var fetch_unix_timestamp ="";
					fetch_unix_timestamp = function()
						{ return parseInt(new Date().getTime().toString().substring(0, 10))}
					var timestamp = fetch_unix_timestamp();
				xmlHttp.onreadystatechange=function(){
						if(xmlHttp.readyState==4){
							document.getElementById("ventanachat").innerHTML=xmlHttp.responseText;
							setTimeout('ventanachat()',1000);
						}
					}
				    xmlHttp.open("GET","db.php"+"?t="+timestamp,true);
					xmlHttp.send(null);
			}
			window.onload = function startrefresh(){
					setTimeout('ventanachat()',1000);
				}
		</script>
		
	</head>
	<body>
		<form action="insert.php" method="GET">
		<input type="text" name="mensaje" id="enviachat" > <input type="submit">
		</form>
		<div id="ventanachat" style="width:200px;height:200px;border:1px solid black;overflow:hidden;">
			<script type="text/javascript"> ventanachat(); </script>
		</div>
	</body>
</html>
