<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compare | Scrum Events</title>
    
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
					<li style="float: left;color: white;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 3 <small style="display:block">Scrum Teams</small></li>
					<li style="float: left;color: #000040;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 4 <small style="display:block">Scrum Events</small></li>
					<li style="float: left;color: white;font-size: 16px;font-weight: 600;margin-top: 12px;list-style: none;margin-left: 10%;">STEP 5 <small style="display:block">Scrum Artifacts</small></li>
				</ul>
			</div>
                        
            <div class="center wow fadeInDown">
                <h2>Add Scrum Events Data</h2><hr>
            </div>
			
			<div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-12">
                        <h2><b>Scrum Meeting</b></h2>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Do you perform stand up (scrum) meeting?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select>
                        </div>
						<div class="form-group">
                            <label>What is the decided duration(in minutes) of your daily standup meeting?</label>
							<input type="number" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>What place and time is decided for your daily standup meeting?</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>						
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Who is responsible to head daily standup meeting?</label>
                            <select class="form-control">
                              <option value="">Scrum Master</option>
                              <option value="">Product Owner</option>
                              <option value="">Quality Engineer</option>
                              <option value="">Developer</option>
                              <option value="">Team Lead</option>
                            </select> 
                        </div>   
                        <div class="form-group">
                            <label>What participants in daily standup meeting for your project?</label>
                            <select class="form-control">
                              <option value="">Scrum Master</option>
                              <option value="">Product Owner</option>
                              <option value="">Development Team</option>
                              <option value="">Manager</option>
                              <option value="">Team Lead</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h2><b>Sprint Planning</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Do you perform Sprint Planning meeting for every sprint?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What was the duration of meeting?</label>
                            <input type="number" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Who was responsible to head this meeting?</label>
                            <select class="form-control">
                              <option value="">Scrum Master</option>
                              <option value="">Product Owner</option>
                              <option value="">Quality Engineer</option>
                              <option value="">Developer</option>
                              <option value="">No one</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label>What was the number of items selected to do in this sprint?</label>
                            <input type="number" name="subject" class="form-control" required="required"> 
                        </div>   
                        <div class="form-group">
                            <label>Who decided these items?</label>
                            <select class="form-control">
                              <option value="">Scrum Master</option>
                              <option value="">Product Owner</option>
                              <option value="">Development Team</option>
                              <option value="">No one</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What were the inputs to this meeting?</label>
                            <select class="form-control">
                              <option value="">Product Backlog</option>
                              <option value="">Latest developed increment</option>
                              <option value="">Development team capacity and performance</option>
                            </select>
                        </div>                      
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Was sprint goal created?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select> 
                        </div>   
                        <div class="form-group">
                            <label>Was sprint backlog formed?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Who provided estimations of tasks in planning meeting?</label>
                            <select class="form-control">
                              <option value="">Scrum Master</option>
                              <option value="">Product Owner</option>
                              <option value="">Quality Engineer</option>
                              <option value="">Developer</option>
                              <option value="">Team Lead</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label>Who was responsible for scope re-negotiation in planning meeting?</label>
                            <select class="form-control">
                              <option value="">Scrum Master</option>
                              <option value="">Product Owner</option>
                              <option value="">Team Lead</option>
                              <option value="">Developement Team</option>
                              <option value="">No one</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label>How selected items were decomposed for estimation?</label>
                            <select class="form-control">
                              <option value="">Story points</option>
                              <option value="">Hour units</option>
                              <option value="">Day units</option>
                              <option value="">Man units</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h2><b>Sprint</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Do you work in sprint?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What was the duration of Sprint?</label>
                            <select class="form-control">
                              <option value="">1 week</option>
                              <option value="">2 weeks</option>
                              <option value="">3 weeks</option>
                              <option value="">4 weeks</option>
                              <option value="">>4 weeks</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>How many items were actually planned for sprint?</label>
                            <input type="number" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>How many of the planned items were delivered?</label>
                            <input type="number" name="subject" class="form-control" required="required"> 
                        </div><div class="form-group">
                            <label>Number of change requests during sprint:</label>
                            <input type="number" name="subject" class="form-control" required="required"> 
                        </div>
                        <div class="form-group">
                            <label>Who was responsible to re-negotiate the scope of sprint backlog?</label>
                            <select class="form-control">
                              <option value="">Product Owner</option>
                              <option value="">Development Team</option>
                              <option value="">Scrum Master</option>
                              <option value="">None of the above</option>
                            </select>
                        </div>                    
                    </div>
                    <div class="col-sm-6">   
                        <div class="form-group">
                            <label>Was sprint goal achieved?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select> 
                        </div>   
                        <div class="form-group">
                            <label>Was increment produced at the end of sprint and qualified the definition of done?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Who was responsible for sprint backlog management?</label>
                            <select class="form-control">
                              <option value="">Product Owner</option>
                              <option value="">Development Team</option>
                              <option value="">Scrum Master</option>
                              <option value="">None of the above</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Who was responsible to select the item from sprint backlog?</label>
                            <select class="form-control">
                              <option value="">Product Owner</option>
                              <option value="">Development Team</option>
                              <option value="">Scrum Master</option>
                              <option value="">None of the above</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h2><b>Sprint Review</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Is Sprint review/demo performed in your organization?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What was the duration of this meeting?</label>
                            <input type="number" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>What was the purpose of this sprint review?</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>How many feedback items were suggested in this meeting?</label>
                            <input type="number" name="subject" class="form-control" required="required"> 
                        </div>               
                    </div>
                    <div class="col-sm-6">   
                        <div class="form-group">
                            <label>When sprint review is conducted?</label>
                            <select class="form-control">
                              <option value="">At the start of Sprint</option>
                              <option value="">In the middle of Sprint</option>
                              <option value="">At the end of Sprint</option>
                            </select> 
                        </div>    
                        <div class="form-group">
                            <label>Who facilitates the scrum review meeting?</label>
                            <select class="form-control">
                              <option value="">Product Owner</option>
                              <option value="">Developer</option>
                              <option value="">Quality Engineer</option>
                              <option value="">Scrum Master</option>
                              <option value="">None of the above</option>
                            </select>
                        </div>   
                        <div class="form-group">
                            <label>Who demonstrate the work product features?</label>
                            <select class="form-control">
                              <option value="">Product Owner</option>
                              <option value="">Developer</option>
                              <option value="">Quality Engineer</option>
                              <option value="">Scrum Master</option>
                              <option value="">None of the above</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h2><b>Sprint Retrospective</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Was sprint retrospective meeting conduct for this sprint?</label>
                            <select class="form-control">
                              <option value="">Yes</option>
                              <option value="">No</option>
                              <option value="">Occasionally</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What was the duration of this meeting?</label>
                            <input type="number" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>What was discussed in this meeting?</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>               
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>What was the output of this meeting?</label>
                            <input type="text" name="subject" class="form-control" required="required"> 
                        </div>   
                        <div class="form-group">
                            <label>Who scheduled sprint retrospective?</label>
                            <select class="form-control">
                              <option value="">Product Owner</option>
                              <option value="">Developer</option>
                              <option value="">Quality Engineer</option>
                              <option value="">Scrum Master</option>
                              <option value="">None of the above</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-sm-12">
						<div class="form-group" style="float:left;">
                            <!--<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Next</button>-->
							<a href="compare-scrum-teams.php" class="btn btn-primary btn-lg">Previous</a>
                        </div>
						<div class="form-group" style="float:right;">
                            <!--<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Next</button>-->
							<a href="compare-scrum-artifacts.php" class="btn btn-primary btn-lg">Next</a>
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

