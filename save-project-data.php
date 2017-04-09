<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smet_core_database";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
    
	// Save Project Data	
	$company_id = $_POST['company_id'];
	$domain = $_POST['domain'];
	$project_type = $_POST['project_type'];
	$project_location = $_POST['project_location'];
	$technologies = $_POST['technologies'];
	//$duration = $_POST['duration'];
	$total_resources = $_POST['total_resources'];
	//$skills = $_POST['skills'];
	$roles = null;
	foreach ($_POST['roles'] as $selectedOption){
			if($roles == null)
				$roles = $selectedOption . ",";
		    else
				$roles = $roles . $selectedOption . ",";
		}
	if(isset($_POST['is_colocated']))
		$is_colocated = $_POST['is_colocated'];
	else
		$is_colocated = null;
	
	//echo $_POST['colocated_type']."\n";
	if(isset($_POST['colocated_type']))
		$colocated_type = $_POST['colocated_type'];
	else
		$colocated_type = null;
	
    $is_conflict_resolution_process_exists = $_POST['is_conflict_resolution_process_exists'];
	
	$sql = "INSERT INTO project_data (company_id, domain, project_type,project_location,technologies,
	        total_resources,is_colocated,colocated_type,roles,is_conflict_resolution_process_exists,is_deleted,created_date)
			
			VALUES ('$company_id','$domain','$project_type','$project_location','$technologies',
			'$total_resources','$is_colocated','$colocated_type','$roles','$is_conflict_resolution_process_exists',
			0,'2-2-2017')";
	
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	// scrum pillars
	
	// fetch project id
	$sql = "SELECT MAX(project_id) AS project_id FROM project_data";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
			 $project_id = $row["project_id"];
		 }
	}

    //$conflict_resolution_process_exists = $_POST['conflict_resolution_process_exists']; 

    $def_of_done = isset($_POST['def_of_done']) ? $_POST['def_of_done'] : ''; 
    $def_of_done_communication = isset($_POST['def_of_done_communication']) ? $_POST['def_of_done_communication'] : ''; ; 
    $progress_sprint_goal = $_POST['progress_sprint_goal'];
	
	$scrumPillars = "INSERT INTO scrum_pillars(project_id,
			is_def_of_done_exists, communication_def_of_done, inspect_progress_sprint_goal, is_deleted, created_date)		
			VALUES ('$project_id','$def_of_done',
			'$def_of_done_communication','$progress_sprint_goal',0,'2-2-2017')";
	
	if (mysqli_query($conn, $scrumPillars)) {
		echo "New scrum pillars record is created successfully";
	} else {
		echo "Error: " . $scrumPillars . "<br>" . mysqli_error($conn);
	}

	//scrum team data
	$is_prod_owner_exists = $_POST['is_prod_owner_exists']; 
    $prod_owner_responsibility = '';
	if(isset($_POST['prod_owner_responsibility']))
	{
		foreach ($_POST['prod_owner_responsibility'] as $selectedOption)
		{
			if($prod_owner_responsibility != null)
				$prod_owner_responsibility = $prod_owner_responsibility . $selectedOption . ",";
			else 
				$prod_owner_responsibility = $selectedOption . ",";
		}
	}
	
    $prod_owner_authority = isset($_POST['prod_owner_authority']) ? $_POST['prod_owner_authority'] : ''; 
    $num_of_prod_owner = isset($_POST['num_of_prod_owner']) ? $_POST['num_of_prod_owner'] : '';
    $prod_owner_type = isset($_POST['prod_owner_type']) ? $_POST['prod_owner_type'] : '' ; 
    $dev_team_report = isset($_POST['dev_team_report']) ? $_POST['dev_team_report'] : ''; 
    $is_subteam = isset($_POST['is_subteam']) ? $_POST['is_subteam'] : '';
    $team_size = isset($_POST['team_size']) ? $_POST['team_size'] : '';
    $dev_team_accountable = $_POST['dev_team_accountable']; 
    $is_prod_owner_part_of_dev_team = isset($_POST['is_prod_owner_part_of_dev_team']) ? is_prod_owner_part_of_dev_team : ''; 
    $is_scrum_master_exists = $_POST['is_scrum_master_exists'];
	$scrum_master_reponsibilities = '';
	if(isset($_POST['scrum_master_reponsibilities']))
	{
		
		foreach ($_POST['scrum_master_reponsibilities'] as $selectedOption1){
			if($scrum_master_reponsibilities == null)
	           $scrum_master_reponsibilities = $selectedOption1 . ",";
	        else 
			   $scrum_master_reponsibilities = $scrum_master_reponsibilities . $selectedOption1 . ",";
		}
	}
	
	
    $sc_master_services_dev_team = ''; 
	if(isset($_POST['sc_master_services_dev_team'])){
		foreach ($_POST['sc_master_services_dev_team'] as $selectedOption){
			if($sc_master_services_dev_team ==  null)
				$sc_master_services_dev_team = $selectedOption . ",";
			else
				$sc_master_services_dev_team = $sc_master_services_dev_team . $selectedOption . ",";
		}
	}
		
    $sc_master_services_prod_owner = '';
	if(isset($_POST['sc_master_services_prod_owner'])){
		foreach ($_POST['sc_master_services_prod_owner'] as $selectedOption){
			if($sc_master_services_prod_owner == null)
				$sc_master_services_prod_owner = $selectedOption . ",";
			else
				$sc_master_services_prod_owner = $sc_master_services_prod_owner . $selectedOption . ",";
		}
	}
		
    $sc_master_services_org = '';
	if(isset($_POST['sc_master_services_org'])){
		foreach ($_POST['sc_master_services_org'] as $selectedOption){
			if($sc_master_services_org == null)
				$sc_master_services_org = $selectedOption . ",";
		    else
				$sc_master_services_org = $sc_master_services_org. $selectedOption . ",";
		}
	}
		
	$qa_perform_dev = $_POST['qa_perform_dev'];
    $dev_perform_qa = $_POST['dev_perform_qa'];
    $is_scrum_master_part_of_dev_team = isset($_POST['is_scrum_master_part_of_dev_team']) ? $_POST['is_scrum_master_part_of_dev_team'] : '';
	
	
	$scrumteam = "INSERT INTO scrum_team(project_id, is_prod_owner_exists, prod_owner_responsibility, prod_owner_authority, 
			num_of_prod_owner, prod_owner_type, dev_team_report, is_subteam,team_size,dev_team_accountable,
			is_prod_owner_part_of_dev_team,is_scrum_master_exists,scrum_master_reponsibilities,sc_master_services_dev_team,
			sc_master_services_prod_owner,sc_master_services_org,qa_perform_dev,dev_perform_qa,
			is_scrum_master_part_of_dev_team,is_deleted, created_date)		
			
			VALUES ('$project_id','$is_prod_owner_exists','$prod_owner_responsibility',
			'$prod_owner_authority','$num_of_prod_owner','$prod_owner_type',
			'$dev_team_report','$is_subteam','$team_size',
			'$dev_team_accountable',
			'$is_prod_owner_part_of_dev_team','$is_scrum_master_exists','$scrum_master_reponsibilities','$sc_master_services_dev_team',
			'$sc_master_services_prod_owner','$sc_master_services_org',
			'$is_scrum_master_part_of_dev_team','$qa_perform_dev','$dev_perform_qa',
			0,'2-2-2017')";
	
	if (mysqli_query($conn, $scrumteam)) {
		echo "New scrum team record is created successfully";
	} else {
		echo "Error: " . $scrumteam . "<br>" . mysqli_error($conn);
	}
	
	
	//scrum event data
	$is_stand_up_meeting = isset($_POST['is_stand_up_meeting']) ? $_POST['is_stand_up_meeting'] : '';
	$sprint_duration = isset($_POST['sprint_duration']) ? $_POST['sprint_duration'] : ''; 
    $num_of_planned_items = isset($_POST['num_of_planned_items']) ? $_POST['num_of_planned_items'] : ''; 
    $num_of_delivered_items = isset($_POST['num_of_delivered_items']) ? $_POST['num_of_delivered_items'] : ''; 
    $number_of_change_request = isset($_POST['number_of_change_request']) ? $_POST['number_of_change_request'] : '';
    $responsible_to_negotiate_scope = isset($_POST['responsible_to_negotiate_scope']) ? $_POST['responsible_to_negotiate_scope'] : ''; 
    $is_sprint_goal_achieved = isset($_POST['is_sprint_goal_achieved']) ?  $_POST['is_sprint_goal_achieved'] : ''; 
    $is_increment_done = isset($_POST['is_increment_done']) ? $_POST['is_increment_done'] : ''; 
    $scrum_backlog_items = isset($_POST['scrum_backlog_items']) ? $_POST['scrum_backlog_items'] : '';
    $sprint_backlog_management = isset($_POST['sprint_backlog_management']) ? $_POST['sprint_backlog_management'] : '';
    $is_sprint_planning_done = isset($_POST['is_sprint_planning_done']) ? $_POST['is_sprint_planning_done'] : ''; 
    $planning_meeting_duration = isset($_POST['planning_meeting_duration']) ? $_POST['planning_meeting_duration'] : ''; 
    $head_of_planning_meeting = isset($_POST['head_of_planning_meeting']) ? $_POST['head_of_planning_meeting'] : '';	
    $selected_items_in_meeting = isset($_POST['selected_items_in_meeting']) ? $_POST['selected_items_in_meeting'] : '';
    $items_decided_by_whom = isset($_POST['items_decided_by_whom']) ? $_POST['items_decided_by_whom'] : ''; 
    $meeting_inputs = '';
	if(isset($_POST['meeting_inputs']))
	{
		foreach ($_POST['meeting_inputs'] as $selectedOption){
			if($meeting_inputs == null)
				$meeting_inputs = $selectedOption . ",";
		    else
				$meeting_inputs = $meeting_inputs. $selectedOption . ",";
		}
	}
	$is_sprint_goal_created = isset($_POST['is_sprint_goal_created']) ? $_POST['is_sprint_goal_created'] : '';
    $is_sprint_backlog_created = isset($_POST['is_sprint_backlog_created']) ? $_POST['is_sprint_backlog_created'] : '';
    $estimation_by_whome = ''; 
	if(isset($_POST['estimation_by_whome'])){
		foreach ($_POST['estimation_by_whome'] as $selectedOption){
		if($estimation_by_whome == null)
			$estimation_by_whome = $selectedOption . ",";
		else
			$estimation_by_whome = $estimation_by_whome. $selectedOption . ",";
		}
	}
	
    $resp_for_scope_negotiation = isset($_POST['resp_for_scope_negotiation']) ? $_POST['resp_for_scope_negotiation'] : ''; 
    $decomposition_of_selected_items = isset($_POST['decomposition_of_selected_items']) ? $_POST['decomposition_of_selected_items'] :'';
    $standup_duration = isset($_POST['standup_duration']) ? $_POST['standup_duration'] : '' ;
    $is_place_time_decided_for_standup = isset($_POST['is_place_time_decided_for_standup']) ? $_POST['is_place_time_decided_for_standup'] : ''; 
    //$questions_in_standup = $_POST['questions_in_standup'];
	$resp_for_standup = isset($_POST['resp_for_standup']) ? $_POST['resp_for_standup'] : '';
	$standup_participants = '';
	if(isset($_POST['standup_participants'])){
		foreach ($_POST['standup_participants'] as $selectedOption){
			if($standup_participants == null)
				$standup_participants = $selectedOption . ",";
		    else
				$standup_participants = $standup_participants. $selectedOption . ",";
		}
	}
	
    $sprint_review_duration = isset($_POST['sprint_review_duration']) ? $_POST['sprint_review_duration'] : ''; 
    $sprint_review_purpose = isset($_POST['sprint_review_purpose']) ? $_POST['sprint_review_purpose'] : ''; 
    $feedback_items_for_review = isset($_POST['feedback_items_for_review']) ? $_POST['feedback_items_for_review'] : '';
    $sprint_review_condution = isset($_POST['sprint_review_condution']) ? $_POST['sprint_review_condution'] : '';
    $review_meeting_facilitator = isset($_POST['review_meeting_facilitator']) ? $_POST['review_meeting_facilitator'] : ''; 
    $features_demo = isset($_POST['features_demo']) ? $_POST['features_demo'] : '';
	$is_sprint_retro_done = isset($_POST['is_sprint_retro_done']) ? $_POST['is_sprint_retro_done'] : '';
    $sprint_retro_duration = isset($_POST['sprint_retro_duration']) ? $_POST['sprint_retro_duration'] : '';
    $retro_discussion = isset($_POST['retro_discussion']) ? $_POST['retro_discussion'] : ''; 
    $retro_output = isset($_POST['retro_output']) ? $_POST['retro_output'] : ''; 
    $retro_scheduling = isset($_POST['retro_scheduling']) ? $_POST['retro_scheduling'] : '';
	
		
	$scrumEvent = "INSERT INTO scrum_events(project_id,is_stand_up_meeting, sprint_duration, num_of_planned_items, num_of_delivered_items, 
		number_of_change_request, responsible_to_negotiate_scope, is_sprint_goal_achieved, is_increment_done,
		scrum_backlog_items,sprint_backlog_management,is_sprint_planning_done,planning_meeting_duration,
		head_of_planning_meeting,selected_items_in_meeting,items_decided_by_whom,meeting_inputs,is_sprint_goal_created,
		is_sprint_backlog_created,estimation_by_whome,resp_for_scope_negotiation,decomposition_of_selected_items,
		standup_duration,is_place_time_decided_for_standup,questions_in_standup,resp_for_standup,standup_participants,
		sprint_review_duration,sprint_review_purpose,feedback_items_for_review,sprint_review_condution,review_meeting_facilitator,
		features_demo,is_sprint_retro_done,sprint_retro_duration,retro_discussion,retro_output,retro_scheduling,
		is_deleted, created_date)		
		VALUES ('$project_id','$is_stand_up_meeting', '$sprint_duration', '$num_of_planned_items', '$num_of_delivered_items', 
		'$number_of_change_request', '$responsible_to_negotiate_scope', '$is_sprint_goal_achieved', '$is_increment_done',
		'$scrum_backlog_items','$sprint_backlog_management','$is_sprint_planning_done','$planning_meeting_duration',
		'$head_of_planning_meeting','$selected_items_in_meeting','$items_decided_by_whom','$meeting_inputs','$is_sprint_goal_created',
		'$is_sprint_backlog_created','$estimation_by_whome','$resp_for_scope_negotiation','$decomposition_of_selected_items',
		'$standup_duration','$is_place_time_decided_for_standup','','$resp_for_standup','$standup_participants',
		'$sprint_review_duration','$sprint_review_purpose','$feedback_items_for_review','$sprint_review_condution','$review_meeting_facilitator',
		'$features_demo','$is_sprint_retro_done','$sprint_retro_duration','$retro_discussion','$retro_output','$retro_scheduling',
	    0,'2-2-2017')";
	
	if (mysqli_query($conn, $scrumEvent)) {
		echo "New scrum events record is created successfully";
	} else {
		echo "Error: " . $scrumEvent . "<br>" . mysqli_error($conn);
	}
	
	
	// Second sprint data
	// Second sprint data
	$is_stand_up_meeting1 = isset($_POST['is_stand_up_meeting1'])? $_POST['is_stand_up_meeting1'] : '' ;
	$sprint_duration1 = isset ($_POST['sprint_duration1']) ? $_POST['sprint_duration1'] :''; 
    $num_of_planned_items1 = isset($_POST['num_of_planned_items1'])? $_POST['num_of_planned_items1']:''; 
    $num_of_delivered_items1 = isset($_POST['num_of_delivered_items1']) ? $_POST['num_of_delivered_items1']:'' ; 
    $number_of_change_request1 = isset($_POST['number_of_change_request1']) ? $_POST['number_of_change_request1']:'';
    $responsible_to_negotiate_scope1 = isset($_POST['responsible_to_negotiate_scope1']) ? $_POST['responsible_to_negotiate_scope1']:''; 
    $is_sprint_goal_achieved1 = isset($_POST['is_sprint_goal_achieved1']) ? $_POST['is_sprint_goal_achieved1']:''; 
    $is_increment_done1 = isset($_POST['is_increment_done1']) ? $_POST['is_increment_done1']:'' ; 
    $scrum_backlog_items1 = isset($_POST['scrum_backlog_items1']) ? $_POST['scrum_backlog_items1']:'' ;
    $sprint_backlog_management1 = isset($_POST['sprint_backlog_management1']) ? $_POST['sprint_backlog_management1'] :'';
    $is_sprint_planning_done1 = isset($_POST['is_sprint_planning_done1'])? $_POST['is_sprint_planning_done1']:''; 
    $planning_meeting_duration1 = isset($_POST['planning_meeting_duration1']) ? $_POST['planning_meeting_duration1'] : '';
    $head_of_planning_meeting1 = isset($_POST['head_of_planning_meeting1']) ? $_POST['head_of_planning_meeting1'] : '';	
    $selected_items_in_meeting1 = isset($_POST['selected_items_in_meeting1']) ? $_POST['selected_items_in_meeting1']:'';
    $items_decided_by_whom1 = isset($_POST['items_decided_by_whom1']) ? $_POST['items_decided_by_whom1'] :''; 
    $meeting_inputs1 = '';
	if(isset($_POST['meeting_inputs1'])){
		foreach ($_POST['meeting_inputs1'] as $selectedOption){
			if($meeting_inputs1 == null)
				$meeting_inputs1 = $selectedOption . ",";
		    else
				$meeting_inputs1 = $meeting_inputs1. $selectedOption . ",";
		}
	}
	
	$is_sprint_goal_created1 = isset($_POST['is_sprint_goal_created1']) ? $_POST['is_sprint_goal_created1'] :'';
    $is_sprint_backlog_created1 = isset($_POST['is_sprint_backlog_created1']) ? $_POST['is_sprint_backlog_created1'] :'';
    $estimation_by_whome1 = ''; 
	if(isset($_POST['estimation_by_whome1'])){
		foreach ($_POST['estimation_by_whome1'] as $selectedOption){
			if($estimation_by_whome1 == null)
				$estimation_by_whome1 = $selectedOption . ",";
		    else
				$estimation_by_whome1 = $estimation_by_whome1. $selectedOption . ",";
		}
	}
	
    $resp_for_scope_negotiation1 = isset($_POST['resp_for_scope_negotiation1']) ? $_POST['resp_for_scope_negotiation1'] :''; 
    $decomposition_of_selected_items1 = isset($_POST['decomposition_of_selected_items1'])? ($_POST['decomposition_of_selected_items1']):'';
    $standup_duration1 = isset($_POST['standup_duration1'])? $_POST['standup_duration1'] : '';
    $is_place_time_decided_for_standup1 = isset($_POST['is_place_time_decided_for_standup1'])? $_POST['is_place_time_decided_for_standup1'] : ''; 
    //$questions_in_standup1 = $_POST['questions_in_standup1'];
	$resp_for_standup1 = isset($_POST['resp_for_standup1']) ? $_POST['resp_for_standup1']:'';
    $standup_participants1 = '';
	if(isset($_POST['standup_participants1'])){
		foreach ($_POST['standup_participants1'] as $selectedOption){
			if($standup_participants1 == null)
				$standup_participants1 = $selectedOption . ",";
		    else
				$standup_participants1 = $standup_participants1. $selectedOption . ",";
		}
	}
	
    $sprint_review_duration1 = isset($_POST['sprint_review_duration1']) ? $_POST['sprint_review_duration1']:''; 
    $sprint_review_purpose1 = isset($_POST['sprint_review_purpose1']) ? $_POST['sprint_review_purpose1']:''; 
    $feedback_items_for_review1 = isset($_POST['feedback_items_for_review1']) ? $_POST['feedback_items_for_review1']:'';
    $sprint_review_condution1 = isset($_POST['sprint_review_condution1']) ? $_POST['sprint_review_condution1'] :'';
    $review_meeting_facilitator1 = isset($_POST['review_meeting_facilitator1']) ? $_POST['review_meeting_facilitator1']:''; 
    $features_demo1 = isset($_POST['features_demo1']) ? $_POST['features_demo1'] : '';
	$is_sprint_retro_done1 = isset($_POST['is_sprint_retro_done1']) ? $_POST['is_sprint_retro_done1']:'';
    $sprint_retro_duration1 = isset($_POST['sprint_retro_duration1']) ? $_POST['sprint_retro_duration1']:'';
    $retro_discussion1 = isset($_POST['retro_discussion1']) ? $_POST['retro_discussion1'] :''; 
    $retro_output1 = isset($_POST['retro_output1'])? $_POST['retro_output1'] :''; 
    $retro_scheduling1 = isset($_POST['retro_scheduling1']) ? $_POST['retro_scheduling1']:'';
		
	$scrumEvent2 = "INSERT INTO scrum_events(project_id,is_stand_up_meeting, sprint_duration, num_of_planned_items, num_of_delivered_items, 
		number_of_change_request, responsible_to_negotiate_scope, is_sprint_goal_achieved, is_increment_done,
		scrum_backlog_items,sprint_backlog_management,is_sprint_planning_done,planning_meeting_duration,
		head_of_planning_meeting,selected_items_in_meeting,items_decided_by_whom,meeting_inputs,is_sprint_goal_created,
		is_sprint_backlog_created,estimation_by_whome,resp_for_scope_negotiation,decomposition_of_selected_items,
		standup_duration,is_place_time_decided_for_standup,questions_in_standup,resp_for_standup,standup_participants,
		sprint_review_duration,sprint_review_purpose,feedback_items_for_review,sprint_review_condution,review_meeting_facilitator,
		features_demo,is_sprint_retro_done,sprint_retro_duration,retro_discussion,retro_output,retro_scheduling,
		is_deleted, created_date)		
		VALUES ('$project_id','$is_stand_up_meeting1', '$sprint_duration1', '$num_of_planned_items1', '$num_of_delivered_items1', 
		'$number_of_change_request1', '$responsible_to_negotiate_scope1', '$is_sprint_goal_achieved1', '$is_increment_done1',
		'$scrum_backlog_items1','$sprint_backlog_management1','$is_sprint_planning_done1','$planning_meeting_duration1',
		'$head_of_planning_meeting1','$selected_items_in_meeting1','$items_decided_by_whom1','$meeting_inputs1','$is_sprint_goal_created1',
		'$is_sprint_backlog_created1','$estimation_by_whome1','$resp_for_scope_negotiation1','$decomposition_of_selected_items1',
		'$standup_duration1','$is_place_time_decided_for_standup1','','$resp_for_standup1','$standup_participants1',
		'$sprint_review_duration1','$sprint_review_purpose1','$feedback_items_for_review1','$sprint_review_condution1','$review_meeting_facilitator1',
		'$features_demo1','$is_sprint_retro_done1','$sprint_retro_duration1','$retro_discussion1','$retro_output1','$retro_scheduling1',
	    0,'2-2-2017')";
	
	if (mysqli_query($conn, $scrumEvent2)) {
		echo "New scrum event-2 record is created successfully";
	} else {
		echo "Error: " . $scrumEvent2 . "<br>" . mysqli_error($conn);
	}
	
	//third sprint
	if($_POST['is_stand_up_meeting2'] != null && $_POST["step3"]==1)
	{
	$is_stand_up_meeting2 = isset($_POST['is_stand_up_meeting2']) ? $_POST['is_stand_up_meeting2']:'';
	$sprint_duration2 = isset($_POST['sprint_duration2']) ? $_POST['sprint_duration2'] :'' ; 
    $num_of_planned_items2 = isset($_POST['num_of_planned_items2']) ? $_POST['num_of_planned_items2'] :''; 
    $num_of_delivered_items2 = isset($_POST['num_of_delivered_items2']) ? $_POST['num_of_delivered_items2'] :'';
    $number_of_change_request2 = isset($_POST['number_of_change_request2']) ? $_POST['number_of_change_request2'] :'' ;
    $responsible_to_negotiate_scope2 = isset($_POST['responsible_to_negotiate_scope2']) ? $_POST['responsible_to_negotiate_scope2'] :''; 
    $is_sprint_goal_achieved2 = isset($_POST['is_sprint_goal_achieved2']) ? $_POST['is_sprint_goal_achieved2'] :''; 
    $is_increment_done2 = isset($_POST['is_increment_done2']) ? $_POST['is_increment_done2'] :''; 
    $scrum_backlog_items2 = isset($_POST['scrum_backlog_items2']) ? $_POST['scrum_backlog_items2'] :'' ;
    $sprint_backlog_management2 = isset($_POST['sprint_backlog_management2']) ? $_POST['sprint_backlog_management2']:'' ;
    $is_sprint_planning_done2 = isset($_POST['is_sprint_planning_done2']) ? $_POST['is_sprint_planning_done2'] :''; 
    $planning_meeting_duration2 = isset($_POST['planning_meeting_duration2'])? $_POST['planning_meeting_duration2']:'' ; 
    $head_of_planning_meeting2 = isset($_POST['head_of_planning_meeting2']) ? $_POST['head_of_planning_meeting2']: '';	
    $selected_items_in_meeting2 = isset($_POST['selected_items_in_meeting2']) ? $_POST['selected_items_in_meeting2']:'';
    $items_decided_by_whom2 = isset($_POST['items_decided_by_whom2']) ? $_POST['items_decided_by_whom2']:''; 
    $meeting_inputs2 = '';
	if(isset($_POST['meeting_inputs2'])){
		foreach ($_POST['meeting_inputs2'] as $selectedOption){
			if($meeting_inputs2 == null)
				$meeting_inputs2 = $selectedOption . ",";
		    else
				$meeting_inputs2 = $meeting_inputs2. $selectedOption . ",";
		}
	}
	
	$is_sprint_goal_created2 = isset($_POST['is_sprint_goal_created2']) ? $_POST['is_sprint_goal_created2'] : '';
    $is_sprint_backlog_created2 = isset($_POST['is_sprint_backlog_created2']) ? $_POST['is_sprint_backlog_created2'] : '';
    $estimation_by_whome2 = ''; 
	if(isset($_POST['estimation_by_whome2'])){
		foreach ($_POST['estimation_by_whome2'] as $selectedOption){
			if($estimation_by_whome2 == null)
				$estimation_by_whome2 = $selectedOption . ",";
		    else
				$estimation_by_whome2 = $estimation_by_whome2. $selectedOption . ",";
		}
	}
	
    $resp_for_scope_negotiation2 = isset($_POST['resp_for_scope_negotiation2']) ? $_POST['resp_for_scope_negotiation2'] :''; 
    $decomposition_of_selected_items2 = isset($_POST['decomposition_of_selected_items2']) ? $_POST['decomposition_of_selected_items2'] :''; 
    $standup_duration2 = isset($_POST['standup_duration2']) ? $_POST['standup_duration2'] :'';
    $is_place_time_decided_for_standup2 = isset($_POST['is_place_time_decided_for_standup2']) ? $_POST['is_place_time_decided_for_standup2'] :''; 
    //$questions_in_standup = $_POST['questions_in_standup'];
	$resp_for_standup2 = isset($_POST['resp_for_standup2']) ? $_POST['resp_for_standup2'] :'';
    
    $standup_participants2 = '';
	if(isset($_POST['standup_participants2'])){
		foreach ($_POST['standup_participants2'] as $selectedOption){
			if($standup_participants2 == null)
				$standup_participants2 = $selectedOption . ",";
		    else
				$standup_participants2 = $standup_participants2. $selectedOption . ",";
		}
	}
	
    $sprint_review_duration2 = isset($_POST['sprint_review_duration2']) ? $_POST['sprint_review_duration2'] :''; 
    $sprint_review_purpose2 = isset($_POST['sprint_review_purpose2']) ? $_POST['sprint_review_purpose2']:''; 
    $feedback_items_for_review2 = isset($_POST['feedback_items_for_review2']) ? $_POST['feedback_items_for_review2']:'';
    $sprint_review_condution2 = isset($_POST['sprint_review_condution2']) ? $_POST['sprint_review_condution2']:'';
    $review_meeting_facilitator2 = isset($_POST['review_meeting_facilitator2']) ? $_POST['review_meeting_facilitator2']:''; 
    $features_demo2 = isset($_POST['features_demo2']) ? $_POST['features_demo2']:'';
	$is_sprint_retro_done2 = isset($_POST['is_sprint_retro_done2']) ? $_POST['is_sprint_retro_done2']:'';
    $sprint_retro_duration2 = isset($_POST['sprint_retro_duration2']) ? $_POST['sprint_retro_duration2']:'';
    $retro_discussion2 = isset($_POST['retro_discussion2']) ? $_POST['retro_discussion2']:''; 
    $retro_output2 = isset($_POST['retro_output2']) ? $_POST['retro_output2']:''; 
    $retro_scheduling2 = isset($_POST['retro_scheduling2']) ? $_POST['retro_scheduling2']:'';
		
	
	$scrumEvent3 = "INSERT INTO scrum_events(project_id,is_stand_up_meeting, sprint_duration, num_of_planned_items, num_of_delivered_items, 
		number_of_change_request, responsible_to_negotiate_scope, is_sprint_goal_achieved, is_increment_done,
		scrum_backlog_items,sprint_backlog_management,is_sprint_planning_done,planning_meeting_duration,
		head_of_planning_meeting,selected_items_in_meeting,items_decided_by_whom,meeting_inputs,is_sprint_goal_created,
		is_sprint_backlog_created,estimation_by_whome,resp_for_scope_negotiation,decomposition_of_selected_items,
		standup_duration,is_place_time_decided_for_standup,questions_in_standup,resp_for_standup,standup_participants,
		sprint_review_duration,sprint_review_purpose,feedback_items_for_review,sprint_review_condution,review_meeting_facilitator,
		features_demo,is_sprint_retro_done,sprint_retro_duration,retro_discussion,retro_output,retro_scheduling,
		is_deleted, created_date)		
		VALUES ('$project_id','$is_stand_up_meeting2' ,'$sprint_duration2', '$num_of_planned_items2', '$num_of_delivered_items2', 
		'$number_of_change_request2', '$responsible_to_negotiate_scope2', '$is_sprint_goal_achieved2', '$is_increment_done2',
		'$scrum_backlog_items2','$sprint_backlog_management2','$is_sprint_planning_done2','$planning_meeting_duration2',
		'$head_of_planning_meeting2','$selected_items_in_meeting2','$items_decided_by_whom2','$meeting_inputs2','$is_sprint_goal_created2',
		'$is_sprint_backlog_created2','$estimation_by_whome2','$resp_for_scope_negotiation2','$decomposition_of_selected_items2',
		'$standup_duration2','$is_place_time_decided_for_standup2','','$resp_for_standup2','$standup_participants2',
		'$sprint_review_duration2','$sprint_review_purpose2','$feedback_items_for_review2','$sprint_review_condution2','$review_meeting_facilitator2',
		'$features_demo2','$is_sprint_retro_done2','$sprint_retro_duration2','$retro_discussion2','$retro_output2','$retro_scheduling2',
	    0,'2-2-2017')";
	
		if (mysqli_query($conn, $scrumEvent3)) {
			echo "New scrum events 3 record is created successfully";
		} else {
			echo "Error: " . $scrumEvent3 . "<br>" . mysqli_error($conn);
		}
			
	}
	
	
	// scrum artifacts
	$is_prod_backlog_exists = isset($_POST['is_prod_backlog_exists']) ? $_POST['is_prod_backlog_exists'] : '';
    $items_product_backlog = isset($_POST['items_product_backlog']) ? $_POST['items_product_backlog']: '';
    $prod_backlog_prioritize = isset($_POST['prod_backlog_prioritize']) ? $_POST['prod_backlog_prioritize']: ''; 
    $prod_backlog_updated = isset($_POST['prod_backlog_updated']) ? $_POST['prod_backlog_updated']: '';
	$prod_backlog_updated_time = isset($_POST['prod_backlog_updated_time']) ? $_POST['prod_backlog_updated_time']: '';
    $prod_backlog_estimation = isset($_POST['prod_backlog_estimation']) ? $_POST['prod_backlog_estimation'] : '';
    $is_sprint_backlog_exists = isset($_POST['is_sprint_backlog_exists']) ? $_POST['is_sprint_backlog_exists'] : ''; 
    $sprint_backlog_parts = ''; 
	if(isset($_POST['sprint_backlog_parts'])){
		foreach ($_POST['sprint_backlog_parts'] as $selectedOption){
			if($sprint_backlog_parts == null)
				$sprint_backlog_parts = $selectedOption . ",";
		    else
				$sprint_backlog_parts = $sprint_backlog_parts. $selectedOption . ",";
		}
	}
	
    $sprint_backlog_changes = isset($_POST['sprint_backlog_changes']) ? $_POST['sprint_backlog_changes']:'';
	$sprint_change_requests = isset($_POST['sprint_change_requests']) ? $_POST['sprint_change_requests'] : ''; 
    $sprint_progress_tracking = isset($_POST['sprint_progress_tracking']) ? $_POST['sprint_progress_tracking'] : ''; 
    $is_acceptance_criteria_defined = isset($_POST['is_acceptance_criteria_defined']) ? $_POST['is_acceptance_criteria_defined'] : '';
	
	
	$scrumArtifacts = "INSERT INTO scrum_artifacts(project_id,is_prod_backlog_exists,items_product_backlog,prod_backlog_prioritize,
						prod_backlog_updated,prod_backlog_updated_time,prod_backlog_estimation,is_sprint_backlog_exists,
						sprint_backlog_parts,sprint_backlog_changes,sprint_change_requests,sprint_progress_tracking,
						is_acceptance_criteria_defined,is_deleted, created_date)		
			
			VALUES ('$project_id','$is_prod_backlog_exists','$items_product_backlog','$prod_backlog_prioritize',
				    '$prod_backlog_updated','$prod_backlog_updated_time','$prod_backlog_estimation','$is_sprint_backlog_exists',
					'$sprint_backlog_parts','$sprint_backlog_changes','$sprint_change_requests','$sprint_progress_tracking',
					'$is_acceptance_criteria_defined',
			0,'2-2-2017')";	
	
	if (mysqli_query($conn, $scrumArtifacts)) {
		echo "New scrum artifacts record is created successfully";
	} else {
		echo "Error: " . $scrumArtifacts . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);

?>