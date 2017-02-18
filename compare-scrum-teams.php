<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compare | Scrum Teams</title>
    
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
    
    <script type="text/javascript">
        function show1(cb) { document.getElementById('text1').style.display = cb.checked ? 'block' : 'none'; }
    </script>
    
</head><!--/head-->

<body>

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="collapse navbar-collapse navbar-left">
                    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="width:100px;height:100px;"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" style="font-size: 16px; font-weight: bold;">
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="compare-project-data.php">Compare</a></li>
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
			<div class="col-sm-12" style=" background: #c52d2f; border-radius: 5px; height: 64px; margin:5px 0;">
				<ul>
					<li style="float: left;color: white;font-size: 16px;font-weight: 600;margin-top:12px;list-style: none;margin-left: 8%;">STEP 1 <small style="display:block">Project Data</small></li>
					<li style="float: left;color: white;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 2 <small style="display:block">Scrum Pillars</small></li>
					<li style="float: left;color: #000040;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 3 <small style="display:block">Scrum Teams</small></li>
					<li style="float: left;color: white;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 4 <small style="display:block">Scrum Events</small></li>
					<li style="float: left;color: white;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 5 <small style="display:block">Scrum Artifacts</small></li>
				</ul>
			</div>
                        
            <div class="center wow fadeInDown">
                <h2>Add Scrum Teams Data</h2><hr>
            </div>
			
			<div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-6">
						<h2><b>Product Owner</b></h2>
                        <div class="form-group">
                            <label>Is there a product owner?</label><br>
								<select class="form-control">
								  <option value="1">No</option>
								  <option value="2">Yes</option>
								</select>
                        </div>
						<div class="form-group">
                            <label>What responsibilities do product owner fulfills?</label>
							<select class="form-control">
								  <option value="">Write user stories</option>
								  <option value="">Write acceptance criteria</option>
								  <option value="">Product backlog management</option>
								  <option value="">Maximizing value of product and work of development team</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label>Level of authority given to product owner</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Number of product owners</label>
							<select>
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
							</select> 
                        </div>   
						<div class="form-group">
                            <label>Is product owner, a customer, customer representative or representative from company? </label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>			
                    </div>
                    
                    <div class="col-sm-6">
						<h2><b>Development Team</b></h2>
                        <div class="form-group">
                            <label>To whom development team reports?</label>
                            <select class="form-control">
							  <option value="">Product Owner</option>
								<option value="">Scrum Master</option>
								<option value="">Team Lead</option>
								<option value="">No One</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label>Skill set of project team</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Are there any sub teams?</label>
                            <select class="form-control">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>
						<div class="form-group">
                            <label>Team size</label>
                            <input type="number" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Who is accountable for development team work?</label>
                            <select class="form-control">
							  <option value="">Development Team</option>
							  <option value="">Scrum Master</option>
							  <option value="">Product Owner</option>
							  <option value="">Team Lead</option>
							  <option value="">Manager</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label>Is product owner part of development team?</label>
                            <select class="form-control">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>                       
                    </div>
                    
                    <div class="col-sm-6">
						<h2><b>Scrum Master</b></h2>
                        <div class="form-group">
                            <label>Is there a scrum master on project?</label>
                            <select class="form-control">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label>What responsibilities do scrum master fulfills?</label>
                            <select class="form-control">
							  <option value="">Adherence to scrum rules</option>
							</select>
                        </div>
						<div class="form-group">
                            <label>What services do s/he offer to development team?</label>
                            <select class="form-control">
							  <option value="">removing impediments</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label>Is Scrum master part of development team?</label>
                            <select class="form-control">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>
                     </div>
                    <div class="col-sm-12">
						<div class="form-group" style="float:left;">
                            <!--<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Next</button>-->
							<a href="compare-scrum-pillars.php" class="btn btn-primary btn-lg">Previous</a>
                        </div>
						<div class="form-group" style="float:right;">
                            <!--<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Next</button>-->
							<a href="compare-scrum-events.php" class="btn btn-primary btn-lg">Next</a>
                        </div>
					</div>
                </form> 
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
