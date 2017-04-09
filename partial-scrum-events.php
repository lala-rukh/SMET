<div class="col-xs-12" id="sprint1">
<div class="col-md-12 ">
		
    <div class="col-md-12 well">
	<h2><b>First Sprint Data</b></h2>
	<div class="col-sm-12">
		<h2><b>Scrum Meeting</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Dos perform stand up (scrum) meeting?</label>
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What is the decided duration(in minutes) of your daily standup meeting?</label>
			<input type="number" name="standup_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What place and time is decided for your daily standup meeting?</label>
			<input type="text" name="is_place_time_decided_for_standup" class="form-control" required="required">
		</div>						
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Who is responsible to head daily standup meeting?</label>
			<select class="form-control" name="resp_for_standup">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">Team Lead</option>
			</select> 
		</div>   
		<div class="form-group">
			<label>What participants in daily standup meeting for your project?</label>
			<select class="form-control" name="standup_participants">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Manager</option>
			  <option value="">Team Lead</option>
			</select>
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint Planning</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Do you perform Sprint Planning meeting for every sprint?</label>
			<select class="form-control" name="is_sprint_planning_done">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of meeting?</label>
			<input type="number" name="planning_meeting_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to head this meeting?</label>
			<select class="form-control" name="head_of_planning_meeting">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">What was the number of items selected to do in this sprint?</label>
			<input type="number" name="selected_items_in_meeting" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who decided these items?</label>
			<select class="form-control" name="items_decided_by_whom">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">No one</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What were the inputs to this meeting?</label>
			<select class="form-control" name="meeting_inputs">
			  <option value="">Product Backlog</option>
			  <option value="">Latest developed increment</option>
			  <option value="">Development team capacity and performance</option>
			</select>
		</div>                      
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Was sprint goal created?</label>
			<select class="form-control" name="is_sprint_goal_created">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was sprint backlog formed?</label>
			<select class="form-control" name="is_sprint_backlog_created">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who provided estimations of tasks in planning meeting?</label>
			<select class="form-control" name="estimation_by_whome">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">Team Lead</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for scope re-negotiation in planning meeting?</label>
			<select class="form-control" name="resp_for_scope_negotiation">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Team Lead</option>
			  <option value="">Developement Team</option>
			  <option value="">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">How selected items were decomposed for estimation?</label>
			<select class="form-control" name="decomposition_of_selected_items">
			  <option value="">Story points</option>
			  <option value="">Hour units</option>
			  <option value="">Day units</option>
			  <option value="">Man units</option>
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
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of Sprint?</label>
			<select class="form-control" name="sprint_duration">
			  <option value="">1 week</option>
			  <option value="">2 weeks</option>
			  <option value="">3 weeks</option>
			  <option value="">4 weeks</option>
			  <option value="">>4 weeks</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">How many items were actually planned for sprint?</label>
			<input type="number" name="num_of_planned_items" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many of the planned items were delivered?</label>
			<input type="number" name="num_of_delivered_items" class="form-control" required="required"> 
		</div><div class="form-group">
			<label class="control-label">Number of change requests during sprint:</label>
			<input type="number" name="number_of_change_request" class="form-control" required="required"> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to re-negotiate the scope of sprint backlog?</label>
			<select class="form-control" name="responsible_to_negotiate_scope">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>                    
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label class="control-label">Was sprint goal achieved?</label>
			<select class="form-control" name="is_sprint_goal_achieved">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was increment produced at the end of sprint and qualified the definition of done?</label>
			<select class="form-control" name="is_increment_done">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for sprint backlog management?</label>
			<select class="form-control" name="sprint_backlog_management">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to select the item from sprint backlog?</label>
			<select class="form-control" name="scrum_backlog_items">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
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
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_review_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was the purpose of this sprint review?</label>
			<input type="text" name="sprint_review_purpose" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many feedback items were suggested in this meeting?</label>
			<input type="number" name="feedback_items_for_review" class="form-control" required="required"> 
		</div>               
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label>When sprint review is conducted?</label>
			<select class="form-control" name="sprint_review_condution">
			  <option value="">At the start of Sprint</option>
			  <option value="">In the middle of Sprint</option>
			  <option value="">At the end of Sprint</option>
			</select> 
		</div>    
		<div class="form-group">
			<label>Who facilitates the scrum review meeting?</label>
			<select class="form-control" name="review_meeting_facilitator">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>   
		<div class="form-group">
			<label>Who demonstrate the work product features?</label>
			<select class="form-control" name="features_demo">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
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
			<select class="form-control" name="is_sprint_retro_done">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_retro_duration" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was discussed in this meeting?</label>
			<input type="text" name="retro_discussion" class="form-control" required="required">
		</div>               
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">What was the output of this meeting?</label>
			<input type="text" name="retro_output" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label>Who scheduled sprint retrospective?</label>
			<select class="form-control" name="retro_scheduling">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select> 
		</div>
	</div>
	<!--<div class="col-sm-12">
		<button class="btn btn-primary btn-lg pull-left" id="scrum-pillars-prev" type="button" >Previous</button>
		<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
	</div>-->
	</div>
	 
</div>
</div>

<div class="col-xs-12" id="sprint2">
<div class="col-md-12 ">
<h2><b>Second Sprint Data</b></h2>
    <div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Scrum Meeting</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Dos perform stand up (scrum) meeting?</label>
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What is the decided duration(in minutes) of your daily standup meeting?</label>
			<input type="number" name="standup_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What place and time is decided for your daily standup meeting?</label>
			<input type="text" name="is_place_time_decided_for_standup1" class="form-control" required="required">
		</div>						
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Who is responsible to head daily standup meeting?</label>
			<select class="form-control" name="resp_for_standup1">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">Team Lead</option>
			</select> 
		</div>   
		<div class="form-group">
			<label>What participants in daily standup meeting for your project?</label>
			<select class="form-control" name="standup_participants1">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Manager</option>
			  <option value="">Team Lead</option>
			</select>
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint Planning</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Do you perform Sprint Planning meeting for every sprint?</label>
			<select class="form-control" name="is_sprint_planning_done1">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of meeting?</label>
			<input type="number" name="planning_meeting_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to head this meeting?</label>
			<select class="form-control" name="head_of_planning_meeting1">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">What was the number of items selected to do in this sprint?</label>
			<input type="number" name="selected_items_in_meeting1" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who decided these items?</label>
			<select class="form-control" name="items_decided_by_whom1">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">No one</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What were the inputs to this meeting?</label>
			<select class="form-control" name="meeting_inputs1">
			  <option value="">Product Backlog</option>
			  <option value="">Latest developed increment</option>
			  <option value="">Development team capacity and performance</option>
			</select>
		</div>                      
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Was sprint goal created?</label>
			<select class="form-control" name="is_sprint_goal_created1">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was sprint backlog formed?</label>
			<select class="form-control" name="is_sprint_backlog_created1">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who provided estimations of tasks in planning meeting?</label>
			<select class="form-control" name="estimation_by_whome1">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">Team Lead</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for scope re-negotiation in planning meeting?</label>
			<select class="form-control" name="resp_for_scope_negotiation1">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Team Lead</option>
			  <option value="">Developement Team</option>
			  <option value="">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">How selected items were decomposed for estimation?</label>
			<select class="form-control" name="decomposition_of_selected_items1">
			  <option value="">Story points</option>
			  <option value="">Hour units</option>
			  <option value="">Day units</option>
			  <option value="">Man units</option>
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
			<label>Do you work in sprint?</label>
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			</select>
		</div>
		<div class="form-group">
			<label>What was the duration of Sprint?</label>
			<select class="form-control" name="sprint_duration1">
			  <option value="">1 week</option>
			  <option value="">2 weeks</option>
			  <option value="">3 weeks</option>
			  <option value="">4 weeks</option>
			  <option value="">>4 weeks</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">How many items were actually planned for sprint?</label>
			<input type="number" name="num_of_planned_items1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many of the planned items were delivered?</label>
			<input type="number" name="num_of_delivered_items1" class="form-control" required="required"> 
		</div><div class="form-group">
			<label class="control-label">Number of change requests during sprint:</label>
			<input type="number" name="number_of_change_request1" class="form-control" required="required"> 
		</div>
		<div class="form-group">
			<label>Who was responsible to re-negotiate the scope of sprint backlog?</label>
			<select class="form-control" name="responsible_to_negotiate_scope1">
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
			<select class="form-control" name="is_sprint_goal_achieved1">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select> 
		</div>   
		<div class="form-group">
			<label>Was increment produced at the end of sprint and qualified the definition of done?</label>
			<select class="form-control" name="is_increment_done1">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label>Who was responsible for sprint backlog management?</label>
			<select class="form-control" name="sprint_backlog_management1">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>
		<div class="form-group">
			<label>Who was responsible to select the item from sprint backlog?</label>
			<select class="form-control" name="scrum_backlog_items1">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
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
			<label>Is Sprint review/demo performed in your organization?</label>
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_review_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was the purpose of this sprint review?</label>
			<input type="text" name="sprint_review_purpose1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many feedback items were suggested in this meeting?</label>
			<input type="number" name="feedback_items_for_review1" class="form-control" required="required"> 
		</div>               
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label>When sprint review is conducted?</label>
			<select class="form-control" name="sprint_review_condution1">
			  <option value="">At the start of Sprint</option>
			  <option value="">In the middle of Sprint</option>
			  <option value="">At the end of Sprint</option>
			</select> 
		</div>    
		<div class="form-group">
			<label>Who facilitates the scrum review meeting?</label>
			<select class="form-control" name="review_meeting_facilitator1">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>   
		<div class="form-group">
			<label>Who demonstrate the work product features?</label>
			<select class="form-control" name="features_demo1">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
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
			<label>Was sprint retrospective meeting conduct for this sprint?</label>
			<select class="form-control" name="is_sprint_retro_done1">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_retro_duration1" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was discussed in this meeting?</label>
			<input type="text" name="retro_discussion1" class="form-control" required="required">
		</div>               
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">What was the output of this meeting?</label>
			<input type="text" name="retro_output1" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label>Who scheduled sprint retrospective?</label>
			<select class="form-control" name="retro_scheduling1">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select> 
		</div>
	</div>
	<!--<div class="col-sm-12">
		<button class="btn btn-primary btn-lg pull-left" id="scrum-pillars-prev" type="button" >Previous</button>
		<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
	</div>-->
	</div>
	 
</div>
</div>


<div class="col-xs-12" id="sprint3">
<div class="col-md-12 ">
		
    <div class="col-md-12 well">
	<h2><b>Third Sprint Data</b></h2>
	<div class="col-sm-12">
		<h2><b>Scrum Meeting</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Dos perform stand up (scrum) meeting?</label>
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What is the decided duration(in minutes) of your daily standup meeting?</label>
			<input type="number" name="standup_duration2" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What place and time is decided for your daily standup meeting?</label>
			<input type="text" name="is_place_time_decided_for_standup2" class="form-control" required="required">
		</div>						
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Who is responsible to head daily standup meeting?</label>
			<select class="form-control" name="resp_for_standup2">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">Team Lead</option>
			</select> 
		</div>   
		<div class="form-group">
			<label>What participants in daily standup meeting for your project?</label>
			<select class="form-control" name="standup_participants2">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Manager</option>
			  <option value="">Team Lead</option>
			</select>
		</div>
	</div>
	</div>
	
	<div class="col-md-12 well">
	<div class="col-sm-12">
		<h2><b>Sprint Planning</b></h2>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Do you perform Sprint Planning meeting for every sprint?</label>
			<select class="form-control" name="is_sprint_planning_done2">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of meeting?</label>
			<input type="number" name="planning_meeting_duration2" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to head this meeting?</label>
			<select class="form-control" name="head_of_planning_meeting2">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">What was the number of items selected to do in this sprint?</label>
			<input type="number" name="selected_items_in_meeting2" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label class="control-label">Who decided these items?</label>
			<select class="form-control" name="items_decided_by_whom2">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">No one</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What were the inputs to this meeting?</label>
			<select class="form-control" name="meeting_inputs2">
			  <option value="">Product Backlog</option>
			  <option value="">Latest developed increment</option>
			  <option value="">Development team capacity and performance</option>
			</select>
		</div>                      
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">Was sprint goal created?</label>
			<select class="form-control" name="is_sprint_goal_created2">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was sprint backlog formed?</label>
			<select class="form-control" name="is_sprint_backlog_created2">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who provided estimations of tasks in planning meeting?</label>
			<select class="form-control" name="estimation_by_whome2">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Developer</option>
			  <option value="">Team Lead</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for scope re-negotiation in planning meeting?</label>
			<select class="form-control" name="resp_for_scope_negotiation2">
			  <option value="">Scrum Master</option>
			  <option value="">Product Owner</option>
			  <option value="">Team Lead</option>
			  <option value="">Developement Team</option>
			  <option value="">No one</option>
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label">How selected items were decomposed for estimation?</label>
			<select class="form-control" name="decomposition_of_selected_items2">
			  <option value="">Story points</option>
			  <option value="">Hour units</option>
			  <option value="">Day units</option>
			  <option value="">Man units</option>
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
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of Sprint?</label>
			<select class="form-control" name="sprint_duration2">
			  <option value="">1 week</option>
			  <option value="">2 weeks</option>
			  <option value="">3 weeks</option>
			  <option value="">4 weeks</option>
			  <option value="">>4 weeks</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">How many items were actually planned for sprint?</label>
			<input type="number" name="num_of_planned_items2" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many of the planned items were delivered?</label>
			<input type="number" name="num_of_delivered_items2" class="form-control" required="required"> 
		</div><div class="form-group">
			<label class="control-label">Number of change requests during sprint:</label>
			<input type="number" name="number_of_change_request2" class="form-control" required="required"> 
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to re-negotiate the scope of sprint backlog?</label>
			<select class="form-control" name="responsible_to_negotiate_scope2">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>                    
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label class="control-label">Was sprint goal achieved?</label>
			<select class="form-control" name="is_sprint_goal_achieved2">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select> 
		</div>   
		<div class="form-group">
			<label class="control-label">Was increment produced at the end of sprint and qualified the definition of done?</label>
			<select class="form-control" name="is_increment_done2">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible for sprint backlog management?</label>
			<select class="form-control" name="sprint_backlog_management2">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">Who was responsible to select the item from sprint backlog?</label>
			<select class="form-control" name="scrum_backlog_items2">
			  <option value="">Product Owner</option>
			  <option value="">Development Team</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
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
			<select class="form-control">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_review_duration2" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was the purpose of this sprint review?</label>
			<input type="text" name="sprint_review_purpose2" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">How many feedback items were suggested in this meeting?</label>
			<input type="number" name="feedback_items_for_review2" class="form-control" required="required"> 
		</div>               
	</div>
	<div class="col-sm-6">   
		<div class="form-group">
			<label>When sprint review is conducted?</label>
			<select class="form-control" name="sprint_review_condution2">
			  <option value="">At the start of Sprint</option>
			  <option value="">In the middle of Sprint</option>
			  <option value="">At the end of Sprint</option>
			</select> 
		</div>    
		<div class="form-group">
			<label>Who facilitates the scrum review meeting?</label>
			<select class="form-control" name="review_meeting_facilitator2">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select>
		</div>   
		<div class="form-group">
			<label>Who demonstrate the work product features?</label>
			<select class="form-control" name="features_demo2">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
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
			<select class="form-control" name="is_sprint_retro_done2">
			  <option value="">Yes</option>
			  <option value="">No</option>
			  <option value="">Occasionally</option>
			</select>
		</div>
		<div class="form-group">
			<label class="control-label">What was the duration of this meeting?</label>
			<input type="number" name="sprint_retro_duration2" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label class="control-label">What was discussed in this meeting?</label>
			<input type="text" name="retro_discussion2" class="form-control" required="required">
		</div>               
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label">What was the output of this meeting?</label>
			<input type="text" name="retro_output2" class="form-control" required="required"> 
		</div>   
		<div class="form-group">
			<label>Who scheduled sprint retrospective?</label>
			<select class="form-control" name="retro_scheduling2">
			  <option value="">Product Owner</option>
			  <option value="">Developer</option>
			  <option value="">Quality Engineer</option>
			  <option value="">Scrum Master</option>
			  <option value="">None of the above</option>
			</select> 
		</div>
	</div>
	<div class="col-sm-12">
		<button class="btn btn-primary btn-lg pull-left" id="scrum-pillars-prev" type="button" >Previous</button>
		<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
	</div>
	</div>
	 
</div>
</div>