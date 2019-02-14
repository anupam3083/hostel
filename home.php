

<!DOCTYPE html>
<html>
<head>
	<title>Hostel room  management</title>

</head>
<body>
	<div class="container">
		<h2>Hi this is aditya's hostel</h2>
		<div id="showdata">
			<div id="header">Aditya's hostel</div>
			<br>
			<br>
			<div id="A">
				<label>A </label>&nbsp;&nbsp;
				<button id="blockA" onclick="emptyroom('A')" ><img src="images/red.png"></button>
			</div>
			&nbsp;&nbsp; &nbsp; &nbsp;
			<div id="A">
				<label>B </label>&nbsp;&nbsp;
				<button id="blockB" onclick="emptyroom('B')"><img src="images/red.png"></button>
			</div>
			&nbsp;&nbsp; &nbsp; &nbsp;
			<div id="A">
				<label>C </label>&nbsp;&nbsp;
				<button id="blockC" onclick="emptyroom('C')"><img src="images/red.png"></button>
			</div>
			&nbsp;&nbsp; &nbsp; &nbsp;
			<div id="A">
				<label>D </label>&nbsp;&nbsp;
				<button id="blockD" onclick="emptyroom('D')"><img src="images/red.png"></button>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		function emptyroom(block){
			$.ajax({
				type : 'post',
				url : 'server.php',
				data : {'blockn':block},
				success : function(data){
					$("#showdata").html(data);
				}
			});
		}
		function showFlower(flower)
		{
			$.ajax({
				type : 'post',
				url : 'server.php',
				data : {'floors':flower},
				success : function(data){
					$("#showdata").html(data);
				}
				});
		}
		function showrooms(room){
			alert(room);
		}
	</script>
</body>
</html>