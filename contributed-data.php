<?php 
  $cid=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contributed Data</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <script type="text/javascript">
        function show1(cb) { document.getElementById('text1').style.display = cb.checked ? 'block' : 'none'; }
    </script>
    
</head><!--/head-->

<body>

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="collapse navbar-collapse navbar-left">
                    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="width:246px;height:130px;margin-top: -35px;"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" style="font-size: 16px; font-weight: bold;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="compare-project-data.php">Compare</a></li>
                        <li><a href="#">Try</a></li>
                        <li><a href="#">Trends</a></li> 
						<li class="active"><a href="contributed-data.php">Explore</a></li> 
						<li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
	

    <section id="feature" class="transparent-bg">
		<div class="container">
		
	<form id="contributed-data" action="contributed-data.php" method="post">
		<div class="center col-sm-12">
			<hr>
			<h2><b>Explore Contributed Data</b></h2>
			<div class="col-sm-3">
				<div id="msg-success" class="status alert alert-danger" style="display: none">No record found.</div>
				<div class="form-group">
                    <label class="control-label" style="margin-top:10px;">Company Id</label>
				</div>	
			</div>
			
			<div class="col-sm-6">
                <div class="form-group">
					<label></label>
                    <input type="number" name="cid" class="form-control" required="required">
				</div>	
			</div>
			
			<div class="col-sm-3">
                <div class="form-group">
					<input type="submit" class="btn btn-primary nextBtn btn-lg pull-right" value="Seacrh">
				</div>	
			</div>
        </div><!--/.container-->
        <div class="col-sm-12" align = "center">
			<hr>
			<table id="data" class="table1" border="4">
				<tr style="font-size:16px;">
					<th class="text1">Domain</th>
					<th class="text1">Type</th>
					<th class="text1">Location</th>
					<th class="text1">Technologies</th>
					<th class="text1">Estimated Duration</th>
					<th class="text1">Total Resources</th>
					<th class="text1">Skills Set</th>
					<th>View</th>
				</tr>
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "smet_core_database";
										
					$cid = $_POST['cid'];
					
					// Create connection
					//$conn = mysqli_connect($servername, $username, $password, $dbname);
					mysql_connect($servername, $username, $password) or die(mysql_error());
					mysql_select_db($dbname) or die("Cannot Connect to database");		
					// Check connection
					//if (!$conn) {
						//die("Connection failed: " . mysqli_connect_error());
					//}
					
					$query = mysql_query("SELECT project_id, domain, project_type, project_location, technologies, duration, total_resources, skills FROM `project_data` where project_id='$cid'");
					//$result = mysqli_query($conn, $sql);
					//echo $result;
					if($query!=Null)
					{
						while($row= mysql_fetch_array($query))
						{
							$id=$row['project_id'];
							$domain=$row['domain'];
							$type=$row['project_type'];
							$location=$row['project_location'];
							$tech=$row['technologies'];
							$duration=$row['duration'];
							$resources=$row['total_resources'];
							$skills=$row['skills'];
							
							//echo $id, $domain;
							
							Print '<tr>';
								Print '<td>'.$domain."</td>";
								Print '<td>'.$type."</td>";
								Print '<td>'.$location."</td>";
								Print '<td>'.$tech."</td>";
								Print '<td>'.$duration."</td>";								
								Print '<td>'.$resources."</td>";								
								Print '<td>'.$skills."</td>";
								Print '<td align="center"><a href="#.php?id='.$row['project_id'].'"><i class="fa fa-eye"></i></a></td>';
							Print '</tr>';
						}
						//mysqli_close($conn);
					}
					else{
						//mysqli_close($conn);
						//echo "error";
					}	
				?>
			</table>
         </div><!--/.container-->
        
	</form>
    </section><!--/#feature-->
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!--&copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.-->
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
