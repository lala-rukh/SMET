<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMET | Compare</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<!--Jquery link-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<script>
	$(document).ready(function () {
		populateTechnologies();
		var navListItems = $('div.setup-panel div a'),
				allWells = $('.setup-content'),
				allNextBtn = $('.nextBtn');

		allWells.hide();

		navListItems.click(function (e) {
			e.preventDefault();
			var $target = $($(this).attr('href')),
					$item = $(this);

			if (!$item.hasClass('disabled')) {
				navListItems.removeClass('btn-primary').addClass('btn-default');
				$item.addClass('btn-primary');
				allWells.hide();
				$target.show();
				$target.find('input:eq(0)').focus();
			}
		});

		allNextBtn.click(function(){
			var curStep = $(this).closest(".setup-content"),
				curStepBtn = curStep.attr("id"),
				nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
				curInputs = curStep.find("input[type='text'],input[type='url']"),
				isValid = true;

			$(".form-group").removeClass("has-error");
			for(var i=0; i<curInputs.length; i++){
				if (!curInputs[i].validity.valid){
					isValid = false;
					$(curInputs[i]).closest(".form-group").addClass("has-error");
				}
			}

			if (isValid)
				nextStepWizard.removeAttr('disabled').trigger('click');
		});

		$('div.setup-panel div a.btn-primary').trigger('click');
		
		$("#scrum-pillars-prev,#scrum-team-prev,#scrum-events-prev").click(function(){
			var curStep = $(this).closest(".setup-content"),
			curStepBtn = curStep.attr("id"),
			nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
			curInputs = curStep.find("input[type='text'],input[type='url']"),
			isValid = true;
			$(".form-group").removeClass("has-error");
			nextStepWizard.removeAttr('disabled').trigger('click');
		});
		
	});

	function addTechnology(){
			
			$("#msg-success").hide();
			$("#msg-error").hide();
			$("#msg-tech").hide();
			
			$.ajax({
			  url: 'add_technology.php',
			  data: {
				 addtech: $("#addtech").val()
			  },
			  error: function() {
				$("#msg-error").show();
				setTimeout(function(){ $("#msg-error").hide(); }, 3000); 
			  },
			  success: function(data) {
				  $("#addtech").val('');
				if(data == $.trim("success")){
					$("#msg-success").show(); 
					setTimeout(function(){ $("#msg-success").hide(); }, 3000);
					populateTechnologies();
				}
				if(data == $.trim("exist")){
					$("#msg-tech").show();
					setTimeout(function(){ $("#msg-tech").hide(); }, 3000);
					}
				if(data == $.trim("error")){
					$("#msg-error").show();
					setTimeout(function(){ $("#msg-error").hide(); }, 3000);		  
				}
			  },
			  type: 'POST'
			});

	}
	function forgetid(){
		var val = $("#femail").val()
		$("#f-success").hide();
		$("#f-error").hide();
		
		$.ajax({
		  url: 'forget-id.php',
		  data: {
			 femail: val
		  },
		  
		  error: function() {  
			$("#f-error").show();
			setTimeout(function(){ $("#msg-error").hide(); }, 3000); 
		  },
		  success: function(data) {
			  if(data == $.trim("success")){
				$("#f-success").show();
				setTimeout(function(){ $("#msg-success").hide(); }, 3000);
			}
			if(data == $.trim("mailn")){
				$("#f-mailn").show();
				setTimeout(function(){ $("#f-mailn").hide(); }, 3000);
				}
			if(data == $.trim("error")){
				$("#msg-error").show();
				setTimeout(function(){ $("#msg-error").hide(); }, 3000);
				}		  
			},
		  type: 'POST'
		});
		
	}

	function generateid(){
		$("#g-success").hide();
		$("#g-error").hide();
		
		$.ajax({
		  url: 'generate-id-email.php',
		  data: {
			 genid: $("#genid").val()
		  },
		  error: function() {
			$("#g-error").show();
			setTimeout(function(){ $("#msg-error").hide(); }, 3000); 
		  },
		  success: function(data) {
			  if(data == $.trim("success")){
				$("#g-success").show();
				setTimeout(function(){ $("#msg-success").hide(); }, 3000);
			}
			  if(data == $.trim("error")){
				$("#g-error").show();
				setTimeout(function(){ $("#msg-error").hide(); }, 3000); 		  
			}
		  },
		  type: 'POST'
		});
		
	}
			
	function populateTechnologies(){
			$("#technologies-list").empty();
			$.ajax({
			  url: 'get_technologies.php',     
			  success: function(data) {
				  console.log(data);
					$("#technologies-list").html(data);
			  },
			  type: 'GET'
			});
	}
	</script>
	
	<style>
                
        body{ 
                 
            }

            .stepwizard-step p {
                margin-top: 10px;
            }

            .stepwizard-row {
                display: table-row;
            }

            .stepwizard {
                display: table;
                width: 100%;
                position: relative;
				margin-top: 5%;
            }

            .stepwizard-step button[disabled] {
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
            }

            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content: " ";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-order: 0;

            }

            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }

            .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
            }
	</style>


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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="compare-project-data.php">Compare</a></li>
                        <li><a href="#">Try</a></li>
                        <li><a href="#">Trends</a></li> 
						<li><a href="contributed-data.php">Explore</a></li> 
						<li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="feature" class="transparent-bg">
        <div class="container">
		<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Project Data </p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Scrum Pillars</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Scrum Team</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Scrum Events</p>
        </div>
             <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Scrum Artifacts</p>
        </div>
    </div>
</div>
<form id="compare" method="post" action="save-project-data.php">
    <div class="row setup-content" id="step-1">
        <?php require ("project-data.php")?>
    </div>
	
    <div class="row setup-content" id="step-2">
        <?php require("scrum-pillars-data.php")?>
    </div>
	
    <div class="row setup-content" id="step-3">
        <?php require ("scrum-team-data.php")?>
    </div>

	
    <div class="row setup-content" id="step-4">
        <?php require("partial-scrum-events.php")?>
    </div>
	
	
    <div class="row setup-content" id="step-5">
        <?php require("partial-scrum-artifacts.php")?>
    </div>
</form>	

        </div><!--/.container-->
    </section><!--/#feature-->
<div id="fid" class="modal fade in" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content row">
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Enquire Now</h4>
				</div>
				<div class="modal-body">
					<form name="info_form" class="form-inline" action="forget-id.php" method="post" onsubmit = 'return false;'>
						<div id="f-success" class="status alert alert-success" style="display: none">Email sent successfully</div>
						<div id="f-mailn" class="status alert alert-danger" style="display: none">Email address is not valid</div>
						<div id="f-mail" class="status alert alert-danger" style="display: none">Unable to send email</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="femail" required="required" id="femail" placeholder="Enter valid email">
						</div>
						<div class="form-group col-sm-12">
							<button type="submit" class="btn btn-success pull-right" onclick="forgetid()">Submit</button>
						</div>
					</form>
				</div>
				
			</div>
			
		</div>
	</div>
	
	<div id="gid" class="modal fade in" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content row">
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Generate New ID</h4>
				</div>
				<div class="modal-body">
					<form name="info_form" class="form-inline" action="generate-id-email.php" method="post" onsubmit ='return false;'>
						<div id="g-success" class="status alert alert-success" style="display: none">Email sent successfully.</div>
						<div id="g-error" class="status alert alert-danger" style="display: none">Email Address already exist</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="genid" id="genid" required="required" placeholder="Enter Email">
						</div>
						<div class="form-group col-sm-12">
							<button type="submit" class="btn btn-default pull-right" onclick="generateid()">Submit</button>
						</div>
					</form>
				</div>
				
			</div>
			
		</div>
	</div>
	<div id="atech" class="modal fade in" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content row">
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Add New Technology</h4>
				</div>
				<div class="modal-body">
					<form name="info_form" class="form-inline" action="add_technology.php" method="post" onsubmit = 'return false;'>
						<div id="msg-success" class="status alert alert-success" style="display: none">New record created successfully</div>
						<div id="msg-error" class="status alert alert-danger" style="display: none">Unable to add record</div>
						<div id="msg-tech" class="status alert alert-danger" style="display: none">Record already exists</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="addtech" id="addtech" required="required" placeholder="Enter New Technology Name">
						</div>
						
						<div class="form-group col-sm-12">
							<button type="submit" class="btn btn-default pull-right" onclick="addTechnology()">Add</button>
						</div>
					</form>
				</div>
				
			</div>
			
		</div>
	</div>

    

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
