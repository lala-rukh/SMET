<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compare | Contact</title>
    
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="compare-project-data.php">Compare</a></li>
                        <li><a href="#">Try</a></li>
                        <li><a href="@">Trends</a></li> 
						<li><a href="#">Explore</a></li> 
						<li><a href="about-us.php">About Us</a></li>
                        <li class="active"><a href="contact-us.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead" name="msg"><font color="#c52d2f">Feel free to contact us for any kind of issue or inconsistency of data we gathered from surveys, query, comment and feedback.</font></p>
            </div> 
            <div class="row contact-wrap"> 
                <!--<div class="status alert alert-success" style="display: none"></div>-->
                <form id="main-contact-form" class="contact-form" name="contact-form" action="contactdb.php" method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>First Name *</label>
                            <input type="text" name="f_name" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" name="l_name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="number" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
						   <button type="submit" class="btn btn-success btn-lg" onclick="myFunction()">Submit</button>
						   <button type="reset" class="btn btn-primary btn-lg" onclick="myFunction()">Submit</button>
                           <!--<input type="submit" value="Submit" class="btn btn-success btn-lg"></input>
                           <input type="reset" Value="Reset" class="btn btn-primary btn-lg"></input>-->
                            
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

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
