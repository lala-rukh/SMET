<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compare | Contact Us</title>
    
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
    
    <script >
			
		function myfun(){
			$("#submit").attr('disabled','disabled');			
			$("#msg-success").hide();
			$("#msg-error").hide();
			
			$.ajax({
			  url: 'contactemail.php', 
			  data: {
				f_name: $("#f_name").val(),
				l_name: $("#l_name").val(), 
				email: $("#email").val(), 
				number: $("#number").val(), 
				subject: $("#subject").val(), 
				message: $("#message").val()
			  },
			  		  
			  error: function(data) {
				if(data == $.trim("email")){						
					$("#msg-email").show();
					$("#submit").removeAttr('disabled');			
					setTimeout(function(){ $("#msg-email").hide(); }, 3000); 
				  }
				else{
					$("#msg-error").show();
					$("#submit").removeAttr('disabled');			
					setTimeout(function(){ $("#msg-error").hide(); }, 3000);
				}
				  
			  },
			  			  
			  success: function(data) {
				  if(data == $.trim("success")){
					$("#msg-success").show();

					$("#f_name").val(""),
					$("#l_name").val(""), 
					$("#email").val(""), 
					$("#number").val(""), 
					$("#subject").val(""),
					$("#message").val("")
						
					$("#submit").removeAttr('disabled');			
					setTimeout(function(){ $("#msg-success").hide(); }, 3000);
				}
				  else{
					$("#msg-error").show();
					$("#submit").removeAttr('disabled');			
					setTimeout(function(){ $("#msg-error").hide(); }, 3000);
				}		  
			  },
			  type: 'POST'
			});
		}

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
                        <li><a href="#">Trends</a></li> 
						<li><a href="contributed-data.php">Explore</a></li> 
						<li><a href="about-us.php">About Us</a></li>
                        <li class="active"><a href="contact-us.php">Contact Us</a></li>                       
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
                <div id="msg-success" class="status alert alert-success" style="display: none">Your message has been delivered successfully</div>
				<div id="msg-error" class="status alert alert-danger" style="display: none">Due to some tehcnical issue, system was unable to sent message</div>
				<div id="msg-email" class="status alert alert-danger" style="display: none">Some data is inappropriate</div>
				<form id="main-contact-form" class="contact-form" action="contactemail.php" method="post" onsubmit = "return false;">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group" id="contact">
                            <label>First Name *</label>
                            <input type="text" name="f_name" id="f_name" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" name="l_name" id="l_name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="number" id="number" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" id="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                    
                        <div class="form-group">
						   <button type="submit" id="submit" name="submit" class="btn btn-success btn-lg" onclick="myfun()">Submit</button>
						   <button type="reset" reset="Reset" class="btn btn-primary btn-lg">Reset</button>                            
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
