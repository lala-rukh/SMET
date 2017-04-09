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
	<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
	

	  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>
    
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"></script>
	



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
                    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="width:246px;height:130px;margin-top: -35px;"></a>
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
            <p>Scrum Events </br> <small>First Sprint</small></p>
        </div>
		<div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Scrum Events </br> <small>Second Sprint</small></p>
        </div>

		<div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p>Scrum Events </br> <small>Third Sprint</small></p>
        </div>
		
		
             <div class="stepwizard-step">
            <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
            <p>Scrum Artifacts</p>
        </div>
    </div>
</div>
<form id="compare" method="post" action="save-project-data.php">
    <div class="row setup-content" id="step-1">
        <?php require ("project-data.php")?>
    </div>
	
    <div class="row setup-content" id="step-2">
        <?php require("scrum-pillars-data.php") ?>
    </div>
	
    <div class="row setup-content" id="step-3">
        <?php require ("scrum-team-data.php") ?>
    </div>
	
    <div class="row setup-content" id="step-4">
        <?php require("partial-scrum-events-first.php") ?>
    </div>
	
	<div class="row setup-content" id="step-5">
        <?php require("partial-scrum-events-second.php") ?>
    </div>
	
	<div class="row setup-content" id="step-6">
        <?php require("partial-scrum-events-third.php") ?>
    </div>

    <div class="row setup-content" id="step-7">
        <?php require("partial-scrum-artifacts.php") ?>
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

  

	
</body>
</html>

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
            curInputs = curStep.find(":input"),		
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
	
	$("#scrum-pillars-prev,#scrum-team-prev,#scrum-events-prev,#scrum-artifact-prev,#second-sprint-prev,#first-sprint-back").click(function(){
		var curStep = $(this).closest(".setup-content"),
		curStepBtn = curStep.attr("id"),
		nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
		curInputs = curStep.find("input[type='text'],input[type='url']"),
		isValid = true;
        $(".form-group").removeClass("has-error");
        nextStepWizard.removeAttr('disabled').trigger('click');
	});
	

	$("#def_of_done").change(function(){
		var value =$(this).val();
		if(value==0 && value!="")
		{
			$("#def_of_done_communication").attr('disabled', true);
			//$("#progress_sprint_goal").attr('disabled', true);
		}else{
		
			$("#def_of_done_communication").attr('disabled', false);
			//$("#progress_sprint_goal").attr('disabled', false);
		}
	});
	
	
	$("#is_colocated").change(function(){
		var value =$(this).val();
		if(value==0)
		{
			$("#location_type").css('display', 'none');
			$("#colocated_type").attr('disabled', true);
		}
		if(value==1)
		{
			$("#location_type").css('display', 'block');
			$("#colocated_type").attr('disabled', false);
		}
	});

	//$("#def_of_done_communication").select2();
	
	$("#sprint2").find("*").prop('disabled', true);
	$("#sprint3").find("*").prop('disabled', true);
	
	$("#second_sprint").click(function(){
		isValid = true;	
	});
	
	$("#third-sprint").click(function(){
		var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find(":input"),		
            isValid = true;
        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
			if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }
		
		if (isValid){
			$('#sprint2').css('display', 'none')
			$('#sprint3').css('display', 'block')
			$("#sprint3").find("*").prop('disabled', false);
		}
		
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
