<!DOCTYPE html>
<html lang="en">  
    <!--initial connection script -->
    <?php    	

    	$link = mysqli_connect("127.0.0.1", "ptdrake2", "stormyskies", "StormySkies");		
	?>   
    
  	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Stormy Skies Stage 4</title> 
	    <!-- Bootstrap -->
	    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
	    <link href="../css/styles.css" rel = "stylesheet">  
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
		        

		        <li><a href="#" class = "active" >Queries</a></li>
		        <li><a href="../predictions/predictions.php">Predictions</a></li>
		        <li><a href="../map/map.php">Map</a></li>
		        
		      </ul>

		     
		      
		      <ul class="nav navbar-nav navbar-right">
		      	<li>
		      	  	<p class="navbar-btn">
                    	<a href="../insert/insert_daily.php" class="btn btn-success">Add Data</a>
                	</p>
                </li>		        
		      </ul>

		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav> 	


		<div class="query_body">

			<ul class="nav nav-tabs">
			 	<li role="presentation"><a href="query_date.php">Date</a></li>
			  	<li role="presentation"><a href="query_fatalities.php">Fatalities</a></li>
			  	<li role="presentation" class ="active"><a href="query_rating.php">Rating</a></li>
			</ul>

			<div class = "row insert_criteria">

				<div class = "col-md-2">
					<h4>Earthquakes:</h4>

				</div>
			
				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Richter (Lower)</span>
					 	<input type="text" class="form-control" id="basic-url" placeholder="">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Richter (Upper)</span>
					 	<input type="text" class="form-control" id="basic-url" placeholder="">
					</div>
				</div>			

				<div class = "col-md-1">
					<div style ="margin: 0 auto;width: 50%;">
						<button type="button" class="btn btn-success" id = "search_earthquakes">Search Earthquakes</button>	
					</div>

				</div>
			</div>

			<div class = "row insert_criteria">

				<div class = "col-md-2">
					<h4>Hurricanes:</h4>

				</div>
			
				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Category(Lower)</span>
					 	<input type="text" class="form-control" id="basic-url" placeholder="">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Category(Upper)</span>
					 	<input type="text" class="form-control" id="basic-url" placeholder="">
					</div>
				</div>			

				<div class = "col-md-1">
					<div style ="margin: 0 auto;width:50%;">
						<button type="button" class="btn btn-success" id = "search_hurricanes">Search Hurricanes</button>	
					</div>				
				</div>
			</div>

			<div class = "row insert_criteria">

				<div class = "col-md-2">
					<h4>Tornadoes:</h4>

				</div>
			
				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">F Rating(Lower)</span>
					 	<input type="text" class="form-control" id="f_lower" placeholder="">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">F Rating(Upper)</span>
					 	<input type="text" class="form-control" id="f_upper" placeholder="">
					</div>
				</div>			

				<div class = "col-md-1">
					<div style ="margin: 0 auto;width: 50%;">
						<button type="button" class="btn btn-success" id = "search_tornadoes">Search Tornadoes</button>	
					</div>				
				</div>
			</div>

			<div class = "row insert_criteria">

				<div class = "col-md-2">
					<h4>Fires:</h4>

				</div>
			
				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Acreage(Lower)</span>
					 	<input type="text" class="form-control" id="a_lower" placeholder="">
					</div>
				</div>

				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Acreage(Upper)</span>
					 	<input type="text" class="form-control" id="a_upper" placeholder="">
					</div>
				</div>			

				<div class = "col-md-1">
					<div style ="margin: 0 auto;width:50%;">					
						<button type="button" class="btn btn-success" id = "search_fires">Search Fires</button>	
					</div>				
				</div>
			</div>

		</div> <!--close query body-->

		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  	<!-- closing db connection -->
    <?php

        mysqli_close($link);
    ?>
</html>
