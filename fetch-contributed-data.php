<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smet_core_database";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT company_id, domain, project_type,project_location,technologies,duration,
			total_resources,skills,is_colocated,roles,is_conflict_resolution_process_exists,num_of_figures_in_cres_process,
			num_of_tbl_in_cres_process,num_of_sec_in_cres_process,

			is_processes_exist, no_of_figures_process, no_of_tables_process, 
			no_of_sections_process, is_def_of_done_exists, communication_def_of_done, inspect_progress_sprint_goal, scrum_adapted,

			is_prod_owner_exists, prod_owner_responsibility, prod_owner_authority, 
			num_of_prod_owner, prod_owner_type, dev_team_report, skills_set, is_subteam,team_size,dev_team_accountable,
			is_prod_owner_part_of_dev_team,is_scrum_master_exists,scrum_master_reponsibilities,sc_master_services_dev_team,
			is_scrum_master_part_of_dev_team,

			is_prod_backlog_exists,items_product_backlog,prod_backlog_prioritize,
			prod_backlog_updated,prod_backlog_updated_time,prod_backlog_estimation,is_sprint_backlog_exists,
			sprint_backlog_parts,sprint_backlog_changes,sprint_change_requests,sprint_progress_tracking,
			is_acceptance_criteria_defined

			FROM project_data proj
			LEFT JOIN scrum_pillars pillars ON proj.project_id = pillars.project_id
			LEFT JOIN scrum_team team ON proj.project_id = team.project_id 
			LEFT JOIN scrum_artifacts art ON proj.project_id = art.project_id";
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		 // output data of each row
		 $row = $result->fetch_assoc();
		 //while($row = $result->fetch_assoc()) {
		//	 echo "id".$row["company_id"];
		 //}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compare | Scrum Team</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
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
                    <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
                    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="width:100px;height:100px;"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" style="font-size: 16px; font-weight: bold;">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="compare-project-data.php">Compare</a></li>
                        <li><a href="portfolio.html">Try</a></li>
                        <li><a href="blog.html">Trends</a></li> 
						<li><a href="blog.html">Explore</a></li> 
						<li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
	

    <section id="feature" class="transparent-bg">
		<div class="container">
		<div class="center col-sm-12">
			<hr>
			<!--<h2><b>Features</b></h2>-->
		</div>
		<div class="row">
                <div class="features">
                    <div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Project Data Detail</h2>
							<table width=100% border= 1px;>
								<tr>
								   <td>Domain: </td>
								   <td><?php echo $row["domain"]?></td>
								   
								   <td>Technology: </td>
								   <td><?php echo $row["technologies"]?></td>
								</tr>
								
								<tr>
								   <td>Type: </td>
								   <td><?php echo $row["project_type"]?></td>
								   
								   <td>Development team co-located: </td>
								   <td><?php echo $row["is_colocated"]?></td>
								</tr>
								
								<tr>
								   <td>Total Resources: </td>
								   <td><?php echo $row["total_resources"]?></td>
								   
								   <td>Estimated Duration: </td>
								   <td><?php echo $row["duration"]?></td>
								</tr>
								
								<tr>
								   <td>Roles: </td>
								   <td><?php echo $row["roles"]?></td>
								   
								   <td>Conflict Resolution Process: </td>
								   <td><?php echo $row["is_conflict_resolution_process_exists"]?></td>
								</tr>
								
								<tr>
								   <td>Project Located: </td>
								   <td><?php echo $row["project_location"]?></td>
								   <td></td>
								   <td></td>
								</tr>
								
							</table>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Scrum Pillars</h2>
							<table width=100% border= 1px;>
								<tr>
								   <td>Process in organization: </td>
								   <td><?php echo $row["is_processes_exist"]?></td>
								   
								   <td>Definition of done exists: </td>
								   <td><?php echo $row["is_def_of_done_exists"]?></td>
								</tr>
								
								<tr>
								   <td>Inspect sprint goal progress: </td>
								   <td><?php echo $row["inspect_progress_sprint_goal"]?></td>
								   
								   <td>Scrum adaption: </td>
								   <td><?php echo $row["scrum_adapted"]?></td>
								</tr>
							</table>
                        </div>
                    </div>
					
					<div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Scrum Team</h2>
							<table width=100% border= 1px;>
							
								<!--<tr>
									<td><h6>Product Owner</h6></td>
								</tr>-->
								<tr>
								   <td>Product Owner: </td>
								   <td><?php echo $row["is_prod_owner_exists"]?></td>
								   
								   <td>Responsibilities: </td>
								   <td><?php echo $row["prod_owner_responsibility"]?></td>
								</tr>
								
								<tr>
								   <td>Authority: </td>
								   <td><?php echo $row["prod_owner_authority"]?></td>
								   
								   <td>Number of product owners: </td>
								   <td><?php echo $row["num_of_prod_owner"]?></td>
								</tr>
								
								<tr>
								   <td>Type of product Owner: </td>
								   <td><?php echo $row["prod_owner_type"]?></td>
								   <td></td>
								   <td></td>
								</tr>
								
								<!--<tr>
									<td><h6>Scrum Master</h6></td>
								</tr>-->
								<tr>
								   <td>Scrum Master: </td>
								   <td><?php echo $row["is_scrum_master_exists"]?></td>
								   
								   <td>Responsibilities: </td>
								   <td><?php echo $row["scrum_master_reponsibilities"]?></td>
								</tr>
								
								<tr>
								   <td>Services offer to development team: </td>
								   <td><?php echo $row["sc_master_services_dev_team"]?></td>
								   
								   <td>Part of development team: </td>
								   <td><?php echo $row["is_scrum_master_part_of_dev_team"]?></td>
								</tr>
								
							    <!--<tr>
									<td><h6>Development Team</h6></td>
								</tr>-->
								<tr>
								   <td>Development team report: </td>
								   <td><?php echo $row["dev_team_report"]?></td>
								   
								   <td>Skills: </td>
								   <td><?php echo $row["skills_set"]?></td>
								</tr>
								
								<tr>
								   <td>Sub team: </td>
								   <td><?php echo $row["is_subteam"]?></td>
								   
								   <td>Team Size: </td>
								   <td><?php echo $row["team_size"]?></td>
								</tr>
								
								<tr>
								   <td>Accountable for development team: </td>
								   <td><?php echo $row["dev_team_accountable"]?></td>
								   
								   <td>Product owner part of development team: </td>
								   <td><?php echo $row["is_prod_owner_part_of_dev_team"]?></td>
								</tr>
								
							</table>
                        </div>
                    </div>
					
					<div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Scrum Artifacts</h2>
							<table width=100% border= 1px;>
							    <!--tr>
									<td>Product Backlog</td>
								</tr>-->
								<tr>
								   <td>Product Backlog: </td>
								   <td><?php echo $row["is_processes_exist"]?></td>
								   
								   <td>Number of items: </td>
								   <td><?php echo $row["is_def_of_done_exists"]?></td>
								</tr>
								
								<tr>
								   <td>Who prioritize: </td>
								   <td><?php echo $row["inspect_progress_sprint_goal"]?></td>
								   
								   <td>Who Update: </td>
								   <td><?php echo $row["scrum_adapted"]?></td>
								</tr>
								
								<tr>
								   
								   <td>Who give estimation: </td>
								   <td><?php echo $row["scrum_adapted"]?></td>
								</tr>
							</table>
                        </div>
                    </div>

                </div><!--/.services-->
            </div><!--/.row-->  

        </div><!--/.container-->
    </section><!--/#feature-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!--&copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.-->
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
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



<?php
?>

	