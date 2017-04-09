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
                    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="width:100px;height:100px;"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav" style="font-size: 16px; font-weight: bold;">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="compare-project-data.php">Compare</a></li>
                        <li><a href="#">Try</a></li>
                        <li><a href="#">Trends</a></li> 
						<li><a href="#">Explore</a></li> 
						<li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact</a></li>                        
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
						<div id="f-success" class="status alert alert-success" style="display: none">Email sent successfully.</div>
						<div id="f-error" class="status alert alert-danger" style="display: none">Email address does not exist.</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="femail" id="femail" required="required" placeholder="Enter Email">
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
					<form name="info_form" class="form-inline" action="generate-id-email.php" method="post">
						<div id="g-success" class="status alert alert-success" style="display: none">Email sent successfully.</div>
						<div id="g-error" class="status alert alert-danger" style="display: none">Email Address already exist.</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="gid" id="gid" required="required" placeholder="Enter Email">
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
						<div id="msg-error" class="status alert alert-danger" style="display: none">Unable to add record.</div>
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
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
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
		//alert('d');
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
	
	/*$("#is_conflict_resolution_process_exists").change(function(){
		var value =$(this).val();
		if(value==0)
		{
			$("#num_of_tbl_in_cres_process").attr('disabled', true);
			$("#num_of_figures_in_cres_process").attr('disabled', true);
			$("#num_of_sec_in_cres_process").attr('disabled', true);
		}
		if(value==1)
		{
			$("#num_of_tbl_in_cres_process").attr('disabled', false);
			$("#num_of_figures_in_cres_process").attr('disabled', false);
			$("#num_of_sec_in_cres_process").attr('disabled', false);
		}
	});*/
	

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
		 /*var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find(":input"),*/		
            isValid = true;
        /*$(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
			if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
		
		/*if($("#is_stand_up_meeting").val() != '' && $("#is_stand_up_meeting").val() == 0 )
		{
			$("#standup_duration").removeAttr('required');​​​​​
		}
		
		
		if($("#is_stand_up_meeting").val() != '' && 
		$("#standup_duration").val() != '' && 
		$("#is_place_time_decided_for_standup").val() != '' && 
		$("#resp_for_standup").val() != '' && 
		$("#standup_participants").val() != '' && 
		$("#is_sprint_planning_done").val() != '' && 
		$("#planning_meeting_duration").val() != '' && 
		$("#head_of_planning_meeting").val() != '' && 
		$("#selected_items_in_meeting").val() != '' && 
		$("#meeting_inputs").val() != '' && 
		$("#items_decided_by_whom").val() != '' && 
		$("#is_sprint_goal_created").val() != '' && 
		$("#is_sprint_backlog_created").val() != '' && 
		$("#estimation_by_whome").val() != '' && 
		$("#resp_for_scope_negotiation").val() != '' && 
		$("#decomposition_of_selected_items").val() != '' && 
		$("#resp_for_scope_negotiation").val() != '' && 
		$("#resp_for_scope_negotiation").val() != '' && 
		$("#is_sprint_goal_created").val() != '' && 
		$("#work_in_sprints").val() != '' && 
		$("#sprint_duration").val() != '' && 
		$("#num_of_planned_items").val() != '' && 
		$("#num_of_delivered_items").val() != '' && 
		$("#number_of_change_request").val() != '' && 
		$("#responsible_to_negotiate_scope").val() != '' && 
		$("#is_sprint_goal_achieved").val() != '' && 
		$("#sprint_backlog_management").val() != '' && 
		$("#scrum_backlog_items").val() != '' && 
		$("#is_increment_done").val() != '' && 
		$("#is_review_performed").val() != '' && 
		$("#sprint_review_duration").val() != '' &&
		$("#sprint_review_purpose").val() != '' &&
		$("#feedback_items_for_review").val() != '' &&
		$("#sprint_review_condution").val() != '' &&
		$("#review_meeting_facilitator").val() != '' &&
		$("#is_sprint_retro_done").val() != '' &&
		$("#sprint_retro_duration").val() != '' &&
		$("#retro_discussion").val() != '' &&
		$("#retro_output").val() != '' &&
		$("#retro_scheduling").val() != '')
		
		//2nd sprint data
	/*	
		if($("#is_stand_up_meeting1").val() != '' && 
		$("#standup_duration1").val() != '' && 
		$("#is_place_time_decided_for_standup1").val() != '' && 
		$("#resp_for_standup1").val() != '' && 
		$("#standup_participants1").val() != '' && 
		$("#is_sprint_planning_done1").val() != '' && 
		$("#planning_meeting_duration1").val() != '' && 
		$("#head_of_planning_meeting1").val() != '' && 
		$("#selected_items_in_meeting1").val() != '' && 
		$("#meeting_inputs1").val() != '' && 
		$("#items_decided_by_whom1").val() != '' && 
		$("#is_sprint_goal_created1").val() != '' && 
		$("#is_sprint_backlog_created1").val() != '' && 
		$("#estimation_by_whome1").val() != '' && 
		$("#resp_for_scope_negotiation1").val() != '' && 
		$("#decomposition_of_selected_items1").val() != '' && 
		$("#resp_for_scope_negotiation1").val() != '' && 
		$("#resp_for_scope_negotiation1").val() != '' && 
		$("#is_sprint_goal_created1").val() != '' && 
		$("#work_in_sprints1").val() != '' && 
		$("#sprint_duration1").val() != '' && 
		$("#num_of_planned_items1").val() != '' && 
		$("#num_of_delivered_items1").val() != '' && 
		$("#number_of_change_request1").val() != '' && 
		$("#responsible_to_negotiate_scope1").val() != '' && 
		$("#is_sprint_goal_achieved1").val() != '' && 
		$("#sprint_backlog_management1").val() != '' && 
		$("#scrum_backlog_items1").val() != '' && 
		$("#is_increment_done1").val() != '' && 
		$("#is_review_performed1").val() != '' && 
		$("#sprint_review_duration1").val() != '' &&
		$("#sprint_review_purpose1").val() != '' &&
		$("#feedback_items_for_review1").val() != '' &&
		$("#sprint_review_condution1").val() != '' &&
		$("#review_meeting_facilitator1").val() != '' &&
		$("#is_sprint_retro_done1").val() != '' &&
		$("#sprint_retro_duration1").val() != '' &&
		$("#retro_discussion1").val() != '' &&
		$("#retro_output1").val() != '' &&
		$("#retro_scheduling1").val() != '' &&
		
		
		
		
		)
		{
			alert("valid");
				$('#sprint1').css('display', 'none')
			$('#sprint2').css('display', 'block')
		}*/
       /* if (isValid)
		{
			$('#sprint1').css('display', 'none')
			$('#sprint2').css('display', 'block')
			$("#sprint2").find("*").prop('disabled', false);
		}*/
	
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
	
	/*$("#first-sprint-back").click(function(){
		$('#sprint2').css('display', 'none')
		$('#sprint1').css('display', 'block')
	});*/
	
	/*$("#first-sprint-back").click(function(){
		//$("#sprint2").find("*").prop('disabled', true);
		$('#sprint2').css('display', 'none')
		$('#sprint1').css('display', 'block')
	});*/
	
	/*$("#second-sprint-prev").click(function(){
		//$("#sprint3").find("*").prop('disabled', true);
		$('#sprint3').css('display', 'none')
		$('#sprint2').css('display', 'block')
	});*/
});

function addTechnology(){
		
		var val = $("#addtech").val();
		$("#msg-success").hide();
		$("#msg-error").hide();
		
		$.ajax({
		  url: 'add_technology.php',
		  data: {
			 addtech: val
		  },
		  error: function() {
			$("#msg-error").show(); 
		  },
		  success: function(data) {
			  $("#addtech").val('');
			  if(data == $.trim("success")){
				$("#msg-success").show(); 
				populateTechnologies();
			}
			  else
				$("#msg-error").show(); 		  
		  },
		  type: 'POST'
	    });

}
function forgetid(){
	var val = $("#femail").val();
	$("#f-success").hide();
	$("#f-error").hide();
	
	$.ajax({
	  url: 'forget-id.php',
	  data: {
		 femail: val
	  },
	  error: function() {
		$("#f-error").show(); 
	  },
	  success: function(data) {
		  if(data == $.trim("success")){
			$("#f-success").show();
		}
		  else
			$("#f-error").show(); 		  
	  },
	  type: 'POST'
	});
}

function generateid(){
	var val = $("#gid").val();
	$("#g-success").hide();
	$("#g-error").hide();
	
	$.ajax({
	  url: 'generate-id-email.php',
	  data: {
		 gid: val
	  },
	  error: function() {
		$("#g-error").show(); 
	  },
	  success: function(data) {
		  if(data == $.trim("success")){
			$("#g-success").show();
		}
		  else
			$("#g-error").show(); 		  
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
