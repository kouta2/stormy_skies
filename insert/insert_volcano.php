<!DOCTYPE html>
<html lang="en">  
  	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Stormy Skies</title> 
	    <!-- Bootstrap -->
	    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
	    <link href="../css/styles.css" rel = "stylesheet">  
	    <link href="../img/header.png" rel = "icon" >
	    
  	</head>

  	<body>

		<nav class="navbar navbar-default navbar-custom">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <a class="navbar-brand" href="../index.php"> 
		        	<img src="../img/bolt.png"  width=32 height=32>
		        </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        

		        <li><a href="../queries/query_date.php" class = "active" >Queries</a></li>
		        <li><a href="../predictions/predictions.php">Predictions</a></li>
		        <li><a href="../map/map.php">Map</a></li>
		        
		      </ul>

		     
		      
		      <ul class="nav navbar-nav navbar-right">
		        <li><button type="button" class="btn btn-success navbar-btn">Add Data</button></li>		        
		      </ul>

		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav> 	


		<div class="query_body">

			<ul class="nav nav-tabs">
			 	<li role="presentation"><a href="insert_daily.php">Daily Weather</a></li>
			  	<li role="presentation"><a href="insert_hurricane.php">Hurricanes</a></li>
			  	<li role="presentation"><a href="insert_tornado.php">Tornados</a></li>
			  	<li role="presentation"><a href="insert_earthquake.php">Earthquakes</a></li>
			  	<li role="presentation"><a href="insert_fire.php">Fires</a></li>
			  	<li role="presentation" class="active"><a href="insert_volcano.php">Volcanos</a></li>
			</ul>

			<form id="insertForm" action="volcano_info.php" method="post">	
			<div class = "row insert_criteria">
				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Name</span>
					 	<input type="text" class="form-control" placeholder="" name="Name">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Height</span>
					 	<input type="text" class="form-control" placeholder="ft." name="Height">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Last Eruption</span>
					 	<input type="text" class="form-control" placeholder="yyyy" name="Last_Eruption">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Location</span>
					 	<input type="text" class="form-control" placeholder="state" name="Location">
					</div>
				</div>



				<div class = "col-md-2">
					<button id="sub" type="button" class="btn btn-success">Submit</button>
					<!--button id="sub_volcanos">Save</button-->
				</div>

			</div>
			</form>
		</div> <!--close query body-->

                <span id="result"></span>

                <!--script>
                function readInputs() {
                        var text = ""

                        var x = document.getElementById("Name");
                        var name = x.value;
                        x = document.getElementById("Height");
                        var height = x.value;
                        x = document.getElementById("Last Eruption");
                        var last_eruption = x.value;
                        x = document.getElementById("Location");
                        var loc = x.value;

                        text = loc + ", " + name + ", " + height;
                        document.getElementById("result").innerHTML = text;
                }
                </script-->
		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="handle_after_submit.js" type="text/javascript"></script>
  </body>
</html>
