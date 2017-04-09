

<script type="text/javascript">
$(document).ready(function() {
	
$("#is_stand_up_meeting1").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#standup_duration1").attr('disabled', true);
		$("#is_place_time_decided_for_standup1").attr('disabled', true);
		$("#resp_for_standup1").attr('disabled', true);
		$("#standup_participants1").attr('disabled', true);
	}
	else{
		$("#standup_duration1").attr('disabled', false);
		$("#is_place_time_decided_for_standup1").attr('disabled', false);
		$("#resp_for_standup1").attr('disabled', false);
		$("#standup_participants1").attr('disabled', false);
	}
});


// Sprint Planning Meeting

$("#is_sprint_planning_done1").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#planning_meeting_duration1").attr('disabled', true);
		$("#head_of_planning_meeting1").attr('disabled', true);
		$("#selected_items_in_meeting1").attr('disabled', true);
		$("#meeting_inputs1").attr('disabled', true);
		$("#items_decided_by_whom1").attr('disabled', true);
		$("#is_sprint_goal_created1").attr('disabled', true);
		$("#is_sprint_backlog_created1").attr('disabled', true);
		$("#estimation_by_whome1").attr('disabled', true);
		$("#resp_for_scope_negotiation1").attr('disabled', true);
		$("#decomposition_of_selected_items1").attr('disabled', true);
		$("#resp_for_scope_negotiation1").attr('disabled', true);
		$("#resp_for_scope_negotiation1").attr('disabled', true);
		$("#is_sprint_goal_created1").attr('disabled', true);
		
	}
	else{
		$("#planning_meeting_duration1").attr('disabled', false);
		$("#head_of_planning_meeting1").attr('disabled', false);
		$("#selected_items_in_meeting1").attr('disabled', false);
		$("#meeting_inputs1").attr('disabled', false);
		$("#items_decided_by_whom1").attr('disabled', false);
		$("#is_sprint_goal_created1").attr('disabled', false);
		$("#is_sprint_backlog_created1").attr('disabled', false);
		$("#estimation_by_whome1").attr('disabled', false);
		$("#resp_for_scope_negotiation1").attr('disabled', false);
		$("#decomposition_of_selected_items1").attr('disabled', false);
		$("#resp_for_scope_negotiation1").attr('disabled', false);
		$("#resp_for_scope_negotiation1").attr('disabled', false);
		$("#is_sprint_goal_created1").attr('disabled', false);
		
	}
}); 



//Sprint
$("#work_in_sprints1").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_duration1").attr('disabled', true);
		$("#num_of_planned_items1").attr('disabled', true);
		$("#num_of_delivered_items1").attr('disabled', true);
		$("#number_of_change_request1").attr('disabled', true);
		$("#responsible_to_negotiate_scope1").attr('disabled', true);
		$("#is_sprint_goal_achieved1").attr('disabled', true);
		$("#sprint_backlog_management1").attr('disabled', true);
		$("#scrum_backlog_items1").attr('disabled', true);
		$("#is_increment_done1").attr('disabled', true);
		
	}
	else{
		$("#sprint_duration1").attr('disabled', false);
		$("#num_of_planned_items1").attr('disabled', false);
		$("#num_of_delivered_items1").attr('disabled', false);
		$("#number_of_change_request1").attr('disabled', false);
		$("#responsible_to_negotiate_scope1").attr('disabled', false);
		$("#is_sprint_goal_achieved1").attr('disabled', false);
	    $("#sprint_backlog_management1").attr('disabled', false);
		$("#scrum_backlog_items1").attr('disabled', false);
		$("#is_increment_done1").attr('disabled', false);
	}
}); 


//Sprint Review

$("#is_review_performed1").change(function(){
	var val = $(this).val();
	if(val==0 && val != "")
	{
		$("#sprint_review_duration1").attr('disabled', true);
		$("#sprint_review_purpose1").attr('disabled', true);
		$("#feedback_items_for_review1").attr('disabled', true);
		$("#sprint_review_condution1").attr('disabled', true);
		$("#review_meeting_facilitator1").attr('disabled', true);
		$("#features_demo1").attr('disabled', true);
		
	}
	else{
		$("#sprint_review_duration1").attr('disabled', false);
		$("#sprint_review_purpose1").attr('disabled', false);
		$("#feedback_items_for_review1").attr('disabled', false);
		$("#sprint_review_condution1").attr('disabled', false);
		$("#review_meeting_facilitator1").attr('disabled', false);
		$("#features_demo1").attr('disabled', false);
	}
}); 


// Sprint Retrospective
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

});
</script>

<div class="col-xs-12">
<div class="col-md-12 ">
<h2><b>Second Sprint Data</b></h2>
    <div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>StandUp Meeting</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Do you perform stand up (scrum) meeting?</label>
			<select class="form-control" name="is_stand_up_meeting1" id="is_stand_up_meeting1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value=".5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What is the decided duration(in minutes) of your daily standup meeting?</label>
			<input type="number" name="standup_duration1"  id="standup_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What place and time is decided for your daily standup meeting?</label>
			<input type="text" name="is_place_time_decided_for_standup1" id="is_place_time_decided_for_standup1" class="form-control" required="required">
		</div>						
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Who is responsible to head daily standup meeting?</label>
			<select class="form-control" name="resp_for_standup1" id="resp_for_standup1" required="required">
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
			<select class="form-control responsibilitiesSelect" name="standup_participants1[]" id="standup_participants1" multiple="multiple" required="required">
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
			<select class="form-control" name="is_sprint_planning_done1" id="is_sprint_planning_done1" required="required" >
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of meeting?</label>
			<input type="number" name="planning_meeting_duration1" id="planning_meeting_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to head this meeting?</label>
			<select class="form-control" name="head_of_planning_meeting1" id="head_of_planning_meeting1" required="required">
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
			<input type="number" name="selected_items_in_meeting1" id="selected_items_in_meeting1" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who decided these items?</label>
			<select class="form-control" name="items_decided_by_whom1" id="items_decided_by_whom1" required="required">
			  <option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="none">None</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What were the inputs to this meeting?</label>
			<select class="form-control responsibilitiesSelect" name="meeting_inputs1[]" id="meeting_inputs1" required="required" multiple="multiple">
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
			<select class="form-control" name="is_sprint_goal_created1" id="is_sprint_goal_created1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was sprint backlog formed?</label>
			<select class="form-control" name="is_sprint_backlog_created1" id="is_sprint_backlog_created1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who provided estimations of tasks in planning meeting?</label>
			<select class="form-control responsibilitiesSelect" name="estimation_by_whome1[]" id="estimation_by_whome1" required="required" multiple="multiple">
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
			<select class="form-control" name="resp_for_scope_negotiation1" id="resp_for_scope_negotiation1" required="required">
			<option value="">Select option</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="team_lead">Team Lead</option>
			  <option value="development_team">Developement Team</option>
			  <option value="none">None</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">How selected items were decomposed for estimation?</label>
			<select class="form-control" name="decomposition_of_selected_items1" id="decomposition_of_selected_items1" required="required">
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
			<select class="form-control" id="work_in_sprints1" required="required">
			  <option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of Sprint? <small>(in weeks)</small></label>
			<input type="number" name="sprint_duration1" id="sprint_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many items were actually planned for sprint?</label>
			<input type="number" name="num_of_planned_items1" id="num_of_planned_items1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many of the planned items were delivered?</label>
			<input type="number" name="num_of_delivered_items1" id="num_of_delivered_items1" class="form-control" required="required"> 
		</div><div class="form-group">
			<label class="control-label">Number of change requests during sprint:</label>
			<input type="number" name="number_of_change_request1" id="number_of_change_request1" class="form-control" required="required"> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to re-negotiate the scope of sprint backlog?</label>
			<select class="form-control" name="responsible_to_negotiate_scope1" id="responsible_to_negotiate_scope1" required="required">
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
			<select class="form-control" name="is_sprint_goal_achieved1" id="is_sprint_goal_achieved1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was increment produced at the end of sprint and qualified the definition of done?</label>
			<select class="form-control" name="is_increment_done1" id="is_increment_done1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for sprint backlog management?</label>
			<select class="form-control" name="sprint_backlog_management1" id="sprint_backlog_management1" required="required">
			<option value="">Select option</option>
			  <option value="product_owner">Product Owner</option>
			  <option value="development_team">Development Team</option>
			  <option value="scrum_master">Scrum Master</option>
			  <option value="none">None</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to select the item from sprint backlog?</label>
			<select class="form-control" name="scrum_backlog_items1" id="scrum_backlog_items1" required="required">
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
			<select class="form-control" name="is_review_performed1" id="is_review_performed1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?<small>(in hours)</small></label>
			<input type="number" name="sprint_review_duration1" id="sprint_review_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was the purpose of this sprint review?</label>
			<input type="text" name="sprint_review_purpose1" id="sprint_review_purpose1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many feedback items were suggested in this meeting?</label>
			<input type="number" name="feedback_items_for_review1" id="feedback_items_for_review1" class="form-control" required="required"> 
		</div>               
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label class="control-label">When sprint review is conducted?</label>
			<select class="form-control" name="sprint_review_condution1" id="sprint_review_condution1" required="required">
			<option value="">Select option</option>
			  <option value="start_of_sprint">At the start of Sprint</option>
			  <option value="middle_of_sprint">In the middle of Sprint</option>
			  <option value="end_of_sprint">At the end of Sprint</option>
			</select> 
		</div>    
		<div class="form-group">
			<label class="control-label">Who facilitates the scrum review meeting?</label>
			<select class="form-control" name="review_meeting_facilitator1" id="review_meeting_facilitator1" required="required">
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
			<select class="form-control" name="features_demo1" id="features_demo1" required="required">
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
			<select class="form-control" name="is_sprint_retro_done1" id="is_sprint_retro_done1" required="required">
			<option value="">Select option</option>
			  <option value="1">Yes</option>
			  <option value="0">No</option>
			  <option value="0.5">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_retro_duration1" id="sprint_retro_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was discussed in this meeting?</label>
			<input type="text" name="retro_discussion1" id="retro_discussion1" class="form-control" required="required">
		</div>               
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">What was the output of this meeting?</label>
			<input type="text" name="retro_output1" id="retro_output1" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who scheduled sprint retrospective?</label>
			<select class="form-control" name="retro_scheduling1" id="retro_scheduling1" required="required">
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
		<button class="btn btn-primary pull-left btn-lg" id="first-sprint-back" type="button">Previous Sprint</button>
		<button class="btn btn-primary pull-right nextBtn btn-lg" type="button" id="third-sprint">Next</button>
	</div>
	</div>
	 
</div>
</div>
