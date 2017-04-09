

<script type="text/javascript">
$(document).ready(function() {
	
$("#is_stand_up_meeting").change(function(){
	
	var val = $("#is_stand_up_meeting").val();
	if(val==0 && val != "")
	{
		console.log("if");
		$("#standup_duration").attr('disabled', true);
		$("#is_place_time_decided_for_standup").attr('disabled', true);
		$("#resp_for_standup").attr('disabled', true);
		$("#standup_participants").attr('disabled', true);
	}
	else{
		console.log("else");
		$("#standup_duration").attr('disabled', false);
		$("#is_place_time_decided_for_standup").attr('disabled', false);
		$("#resp_for_standup").attr('disabled', false);
		$("#standup_participants").attr('disabled', false);
	}
});

// Sprint Planning Meeting
$("#is_sprint_planning_done").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#planning_meeting_duration").attr('disabled', true);
		$("#head_of_planning_meeting").attr('disabled', true);
		$("#selected_items_in_meeting").attr('disabled', true);
		$("#meeting_inputs").attr('disabled', true);
		$("#items_decided_by_whom").attr('disabled', true);
		$("#is_sprint_goal_created").attr('disabled', true);
		$("#is_sprint_backlog_created").attr('disabled', true);
		$("#estimation_by_whome").attr('disabled', true);
		$("#resp_for_scope_negotiation").attr('disabled', true);
		$("#decomposition_of_selected_items").attr('disabled', true);
		$("#resp_for_scope_negotiation").attr('disabled', true);
		$("#resp_for_scope_negotiation").attr('disabled', true);
		$("#is_sprint_goal_created").attr('disabled', true);
		
	}
	else{
		$("#planning_meeting_duration").attr('disabled', false);
		$("#head_of_planning_meeting").attr('disabled', false);
		$("#selected_items_in_meeting").attr('disabled', false);
		$("#meeting_inputs").attr('disabled', false);
		$("#items_decided_by_whom").attr('disabled', false);
		$("#is_sprint_goal_created").attr('disabled', false);
		$("#is_sprint_backlog_created").attr('disabled', false);
		$("#estimation_by_whome").attr('disabled', false);
		$("#resp_for_scope_negotiation").attr('disabled', false);
		$("#decomposition_of_selected_items").attr('disabled', false);
		$("#resp_for_scope_negotiation").attr('disabled', false);
		$("#resp_for_scope_negotiation").attr('disabled', false);
		$("#is_sprint_goal_created").attr('disabled', false);
		
	}
}); 

//Sprint
$("#work_in_sprints").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_duration").attr('disabled', true);
		$("#num_of_planned_items").attr('disabled', true);
		$("#num_of_delivered_items").attr('disabled', true);
		$("#number_of_change_request").attr('disabled', true);
		$("#responsible_to_negotiate_scope").attr('disabled', true);
		$("#is_sprint_goal_achieved").attr('disabled', true);
		$("#sprint_backlog_management").attr('disabled', true);
		$("#scrum_backlog_items").attr('disabled', true);
		$("#is_increment_done").attr('disabled', true);
		
	}
	else{
		$("#sprint_duration").attr('disabled', false);
		$("#num_of_planned_items").attr('disabled', false);
		$("#num_of_delivered_items").attr('disabled', false);
		$("#number_of_change_request").attr('disabled', false);
		$("#responsible_to_negotiate_scope").attr('disabled', false);
		$("#is_sprint_goal_achieved").attr('disabled', false);
	    $("#sprint_backlog_management").attr('disabled', false);
		$("#scrum_backlog_items").attr('disabled', false);
		$("#is_increment_done").attr('disabled', false);
	}
}); 



//Sprint Review

$("#is_review_performed").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_review_duration").attr('disabled', true);
		$("#sprint_review_purpose").attr('disabled', true);
		$("#feedback_items_for_review").attr('disabled', true);
		$("#sprint_review_condution").attr('disabled', true);
		$("#review_meeting_facilitator").attr('disabled', true);
		$("#features_demo").attr('disabled', true);
		
	}
	else{
		$("#sprint_review_duration").attr('disabled', false);
		$("#sprint_review_purpose").attr('disabled', false);
		$("#feedback_items_for_review").attr('disabled', false);
		$("#sprint_review_condution").attr('disabled', false);
		$("#review_meeting_facilitator").attr('disabled', false);
		$("#features_demo").attr('disabled', false);
	}
}); 
// Sprint Retrospective
$("#is_sprint_retro_done").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_retro_duration").attr('disabled', true);
		$("#retro_discussion").attr('disabled', true);
		$("#retro_output").attr('disabled', true);
		$("#retro_scheduling").attr('disabled', true);
	}
	else{
		$("#sprint_retro_duration").attr('disabled', false);
		$("#retro_discussion").attr('disabled', false);
		$("#retro_output").attr('disabled', false);
		$("#retro_scheduling").attr('disabled', false);
	}
}); 

$("#is_sprint_retro_done1").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_retro_duration1").attr('disabled', true);
		$("#retro_discussion1").attr('disabled', true);
		$("#retro_output1").attr('disabled', true);
		$("#retro_scheduling1").attr('disabled', true);
	}
	else{
		$("#sprint_retro_duration1").attr('disabled', false);
		$("#retro_discussion1").attr('disabled', false);
		$("#retro_output1").attr('disabled', false);
		$("#retro_scheduling1").attr('disabled', false);
	}
}); 

$("#is_sprint_retro_done2").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_retro_duration2").attr('disabled', true);
		$("#retro_discussion2").attr('disabled', true);
		$("#retro_output2").attr('disabled', true);
		$("#retro_scheduling2").attr('disabled', true);
	}
	else{
		$("#sprint_retro_duration2").attr('disabled', false);
		$("#retro_discussion2").attr('disabled', false);
		$("#retro_output2").attr('disabled', false);
		$("#retro_scheduling2").attr('disabled', false);
	}
}); 


});
</script>

<div class="col-xs-12" id="sprint1">
<div class="col-md-12 ">
		
    <div class="col-md-12 well">
	<h2><b>First Sprint Data</b></h2>
	<div class="col-sm-12">
		<h2><b>StandUp Meeting</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Do you perform stand up (scrum) meeting?</label>
			<select class="form-control" name="is_stand_up_meeting" id="is_stand_up_meeting" required="required">
			  <option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What is the decided duration(in minutes) of your daily standup meeting?</label>
			<input type="number" name="standup_duration" id="standup_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What place and time is decided for your daily standup meeting?</label>
			<input type="text" name="is_place_time_decided_for_standup" id="is_place_time_decided_for_standup" class="form-control" required="required">
		</div>						
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Who is responsible to head daily standup meeting?</label>
			<select class="form-control" name="resp_for_standup" id="resp_for_standup" required="required">
			  <option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="quality_engineer">Quality Engineer</option>
			  <option value="developer">Developer</option>
			  <option value="team_lead">Team Lead</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who participates in daily standup meeting of your project?</label>
			<select class="form-control responsibilitiesSelect" name="standup_participants[]" id="standup_participants" multiple="multiple" required="required">
			  <option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="manager">Manager</option>
			  <option value="team_lead">Team Lead</option>
			</select>
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint Planning Meeting</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Do you perform Sprint Planning meeting for every sprint?</label>
			<select class="form-control" name="is_sprint_planning_done" id="is_sprint_planning_done" required="required">
			  <option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of meeting?</label>
			<input type="number" name="planning_meeting_duration" id="planning_meeting_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to head this meeting?</label>
			<select class="form-control" name="head_of_planning_meeting" id="head_of_planning_meeting" required="required">
			  <option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="roduct_owner">Product Owner</option>
			  <option value="quality_engineer">Quality Engineer</option>
			  <option value="developer">Developer</option>
			  <option value="none">None</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">What was the number of items selected to do in this sprint?</label>
			<input type="number" name="selected_items_in_meeting" id="selected_items_in_meeting" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who decided these items?</label>
			<select class="form-control" name="items_decided_by_whom" id="items_decided_by_whom" required="required">
			  <option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="none">None</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What were the inputs to this meeting?</label>
			<select class="form-control responsibilitiesSelect" name="meeting_inputs[]" id="meeting_inputs" multiple="multiple"
			required="required">
			  <option value="">Select option</option>
			  <option value="product_backlog">Product Backlog</option>
			  <option value="latest_shippable_product">Latest shippable product</option>
			  <option value="bugs">Bugs</option>
			</select>
		</div>                      
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Was sprint goal created?</label>
			<select class="form-control" name="is_sprint_goal_created" id="is_sprint_goal_created" required="required">
			  <option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was sprint backlog formed?</label>
			<select class="form-control" name="is_sprint_backlog_created" id="is_sprint_backlog_created" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who provided estimations of tasks in planning meeting?</label>
			<select class="form-control responsibilitiesSelect" name="estimation_by_whome[]" id="estimation_by_whome" required="required" multiple="multiple">
			  <option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="quality_engineer">Quality Engineer</option>
			  <option value="developer">Developer</option>
			  <option value="team_lead">Team Lead</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for scope re-negotiation in planning meeting?</label>
			<select class="form-control" name="resp_for_scope_negotiation" id="resp_for_scope_negotiation" required="required">
			<option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="team_lead">Team Lead</option>
			  <option value="development_team">Developement Team</option>
			  <option value="no_one">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">How selected items were decomposed for estimation?</label>
			<select class="form-control" name="decomposition_of_selected_items" id="decomposition_of_selected_items" required="required">
			  <option value="">Select option</option>
			  <option value="story_points">Story points</option>
			  <option value="hour_units">Hour units</option>
			  <option value="day_units">Day units</option>
			  <option value="man_units">Man units</option>
			</select> 
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Do you work in sprint?</label>
			<select class="form-control" id="work_in_sprints" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of Sprint? <small>(in weeks)</small></label>
			<input type="number" name="sprint_duration" id="sprint_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many items were actually planned for sprint?</label>
			<input type="number" name="num_of_planned_items" id="num_of_planned_items" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many of the planned items were delivered?</label>
			<input type="number" name="num_of_delivered_items" id="num_of_delivered_items" class="form-control" required="required"> 
		</div><div class="form-group">
			<label class="control-label">Number of change requests during sprint:</label>
			<input type="number" name="number_of_change_request" id="number_of_change_request" class="form-control" required="required"> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to re-negotiate the scope of sprint backlog?</label>
			<select class="form-control" name="responsible_to_negotiate_scope" id="responsible_to_negotiate_scope" required="required">
			  <option value="">Select option</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="scrum_master">Scrum Master</option>
			</select>
		</div>                    
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label class="control-label">Was sprint goal achieved?</label>
			<select class="form-control" name="is_sprint_goal_achieved" id="is_sprint_goal_achieved" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was increment produced at the end of sprint and qualified the definition of done?</label>
			<select class="form-control" name="is_increment_done" id="is_increment_done" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for sprint backlog management?</label>
			<select class="form-control" name="sprint_backlog_management" id="sprint_backlog_management" required="required">
			<option value="">Select option</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="none">None</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to select the item from sprint backlog?</label>
			<select class="form-control" name="scrum_backlog_items" id="scrum_backlog_items" required="required">
			<option value="">Select option</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="none">None</option>
			</select> 
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint Review</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Is Sprint review/demo performed in your organization?</label>
			<select class="form-control" name="is_review_performed" id="is_review_performed" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting? <small>(in minutes)</small></label>
			<input type="number" name="sprint_review_duration" id="sprint_review_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was the purpose of this sprint review?</label>
			<input type="text" name="sprint_review_purpose" id="sprint_review_purpose" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many feedback items were suggested in this meeting?</label>
			<input type="number" name="feedback_items_for_review" id="feedback_items_for_review" class="form-control" required="required"> 
		</div>               
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label class="control-label">When sprint review is conducted?</label>
			<select class="form-control" name="sprint_review_condution" id="sprint_review_condution" required="required">
			<option value="">Select option</option>
			  <option value="start_of_sprint">At the start of Sprint</option>
			  <option value="middle_of_sprint">In the middle of Sprint</option>
			  <option value="end_of_sprint">At the end of Sprint</option>
			</select> 
		</div>    
		<div class="form-group">
			<label class="control-label">Who facilitates the scrum review meeting?</label>
			<select class="form-control" name="review_meeting_facilitator" id="review_meeting_facilitator" required="required">
			<option value="">Select option</option>
			<option value="product_owner">Product Owner</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="developer">Developer</option>
			  <option value="quality_engineer">Quality Engineer</option>
			  <option value="none">None</option>
			</select>
		</div>   
		<div class="form-group">
			<label class="control-label">Who demonstrate the work product features?</label>
			<select class="form-control" name="features_demo" id="features_demo" required="required">
			<option value="">Select option</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="developer">Developer</option>
			  <option value="quality_engineer">Quality Engineer</option>
			  <option value="none">None</option>
			</select> 
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint Retrospective</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Was sprint retrospective meeting conduct for this sprint?</label>
			<select class="form-control" name="is_sprint_retro_done" id="is_sprint_retro_done" required="required">
			  <option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?<small>(in hours)</small><label>
			<input type="number" name="sprint_retro_duration" id="sprint_retro_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was discussed in this meeting?</label>
			<input type="text" name="retro_discussion" id="retro_discussion" class="form-control" required="required">
		</div>               
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">What was the output of this meeting?</label>
			<input type="text" name="retro_output" id="retro_output" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who scheduled sprint retrospective?</label>
			<select class="form-control" name="retro_scheduling" id="retro_scheduling" required="required">
			<option value="">Select option</option>
			<option value="product_owner">Product Owner</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="developer">Developer</option>
			  <option value="quality_engineer">Quality Engineer</option>
			  <option value="none">None</option>
			</select> 
		</div>
	</div>
	<div class="col-sm-12">
	    <button class="btn btn-primary pull-left btn-lg" id="scrum-events-prev" type="button" >Previous</button>
		<button class="btn btn-primary pull-right nextBtn btn-lg" type="button" id="second_sprint">Next</button>
	</div>
	</div>
	 
</div>
</div>

