

<script type="text/javascript">
$(document).ready(function() {
$(".responsibilitiesSelect").select2({
	placeholder: "Select Option"
});

$("#is_prod_owner_exists").change(function(){
	
	var val = $("#is_prod_owner_exists").val();
	if(val==0 && val != "")
	{
		$("#prod_owner_responsibility").attr('disabled', true);
		$("#prod_owner_authority").attr('disabled', true);
		$("#num_of_prod_owner").attr('disabled', true);
		$("#prod_owner_type").attr('disabled', true);
		$("#is_prod_owner_part_of_dev_team").attr('disabled', true);
	}
	else{
		$("#prod_owner_responsibility").attr('disabled', false);
		$("#prod_owner_authority").attr('disabled', false);
		$("#num_of_prod_owner").attr('disabled', false);
		$("#prod_owner_type").attr('disabled', false);
		$("#is_prod_owner_part_of_dev_team").attr('disabled', false);
	}
});

$("#is_scrum_master_exists").change(function(){
	
	var val = $("#is_scrum_master_exists").val();
	if(val==0 && val != "")
	{
		$("#scrum_master_reponsibilities").attr('disabled', true);
		$("#sc_master_services_dev_team").attr('disabled', true);
		$("#sc_master_services_prod_owner").attr('disabled', true);
		$("#sc_master_services_org").attr('disabled', true);
		$("#is_scrum_master_part_of_dev_team").attr('disabled', true);
	}
	else{
		$("#scrum_master_reponsibilities").attr('disabled', false);
		$("#sc_master_services_dev_team").attr('disabled', false);
		$("#sc_master_services_prod_owner").attr('disabled', false);
		$("#sc_master_services_org").attr('disabled', false);
		$("#is_scrum_master_part_of_dev_team").attr('disabled', false);
	}
});
  
});
</script>


<div class="col-xs-12 well">
        <div class="col-sm-6">
						<h2><b>Product Owner</b></h2>
                        <div class="form-group">
                            <label class="control-label">Is there a product owner?</label><br>
								<select class="form-control" name="is_prod_owner_exists" id="is_prod_owner_exists" required="required">
								<option value="">Select option</option>
								  <option value="0">No</option>
								  <option value="1">Yes</option>
								</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">What responsibilities do product owner fulfills?</label>
							<select  class="form-control responsibilitiesSelect" multiple="multiple" name="prod_owner_responsibility[]" 
							id="prod_owner_responsibility" required="required">
								  <option value="write_user_stories">Write user stories</option>
								  <option value="write_acceptance_criteria">Write acceptance criteria</option>
								  <option value="product_backlog_management">Product backlog management</option>
								  <option value="Maximizing_value_of_product_and_work_of_development_team">Maximizing value of product and work of development team</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mention the Level of authority given to Product Owner</label>
                            
							<select class="form-control" name="prod_owner_authority" id="prod_owner_authority" required="required">
								  <option value="">Select option</option>
								  <option value="1">Full</option>
								  <option value="0.5">Partial</option>
								  <option value="0">None</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">How many Product Owners per project are there? </label>
							<select name="num_of_prod_owner" required="required" class="form-control" id="num_of_prod_owner">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select> 
                        </div>   
						<div class="form-group">
                            <label class="control-label">Is product owner, a customer, customer representative or representative from company? </label>
                            <input type="text" name="prod_owner_type" class="form-control" required="required" id="prod_owner_type">
                        </div>
						
						
                        <div class="form-group">
                            <label class="control-label">Is product owner part of development team?</label>
                            <select class="form-control" name="is_prod_owner_part_of_dev_team" id="is_prod_owner_part_of_dev_team" required="required">
							<option value="">Select option</option>
							  <option value="0">No</option>
							  <option value="1">Yes</option>
							</select>
                        </div> 

                    </div>
        
		
        <div class="col-sm-6" style="margin-bottom: 2%;">
						<h2><b>Development Team</b></h2>
                        <div class="form-group">
                            <label class="control-label">To whom development team reports?</label>
                            <select class="form-control" name="dev_team_report" id="dev_team_report" required="required">
							    <option value="">Select option </option>
							    <option value="product_owner">Product Owner</option>
								<option value="scrum_master">Scrum Master</option>
								<option value="team_lead">Team Lead</option>
								<option value="none">None</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">Are there any sub teams?</label>
                            <select class="form-control" name="is_subteam" id="is_subteam" required="required">
							<option value="">Select option</option>
							  <option value="0">No</option>
							  <option value="1">Yes</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">Team size</label>
                            <input type="number" name="team_size" id="team_size" class="form-control" required="required">
                        </div>
						
						<div class="form-group">
                            <label class="control-label">Do your QA resources perform development when needed?</label>
                            <select class="form-control" name="qa_perform_dev" required="required">
							<option value="">Select option</option>
							  <option value="0">No</option>
							  <option value="1">Yes</option>
							</select>
                        </div>
						
						<div class="form-group">
                            <label class="control-label">Do your development team performs testing when needed?</label>
                            <select class="form-control" name="dev_perform_qa" required="required">
							<option value="">Select option</option>
							  <option value="0">No</option>
							  <option value="1">Yes</option>
							</select>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label">Who is accountable for development team work?</label>
                            <select class="form-control" name="dev_team_accountable" required="required">
							  <option value="">Select option</option>
							  <option value="development_team">Development Team</option>
							  <option value="scrum_master">Scrum Master</option>
							  <option value="product_owner">Product Owner</option>
							  <option value="team_lead">Team Lead</option>
							  <option value="manager">Manager</option>
							</select>
                        </div>                  
                    </div>
		
		<div class="col-sm-6">
						<h2><b>Scrum Master</b></h2>
                        <div class="form-group">
                            <label class="control-label">Is there a scrum master on project?</label>
                            <select class="form-control" name="is_scrum_master_exists" id="is_scrum_master_exists" required="required">
							  <option value="">Select option</option>
							  <option value="0">No</option>
							  <option value="1">Yes</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">What responsibilities do scrum master fulfills?</label>
                            <select class="form-control responsibilitiesSelect" name="scrum_master_reponsibilities[]" multiple="multiple" required="required"
							id="scrum_master_reponsibilities">
							  <option value="">Select option</option>
							  <option value="adherence_to_scrum_rules ">Adherence to scrum rules</option>
							  <option value="maximize_team_value">Maximize team value</option>
							  <option value="control_team_interactions">Control team interactions</option>
							  <option value="responsible_to_make_sprint_successful">Responsible to make sprint successful</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">What services do Scrum Master offers to Development Team?</label>
                            <select class="form-control responsibilitiesSelect" name="sc_master_services_dev_team[]" multiple="multiple" required="required"
							id="sc_master_services_dev_team">
							  <option value="">Select option</option>
							  <option value="coaching_team">Coaching team</option>
							  <option value="facilitating_scrum_events">Facilitating scrum events </option>
							  <option value="help_learn_self_organization_and_cross_functionality">Help learn self-organization and cross-functionality</option>
							  <option value="removing_impediments">removing impediments</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">What services do Scrum Master offers to Product Owner?</label>
                            <select class="form-control responsibilitiesSelect" name="sc_master_services_prod_owner[]" multiple="multiple" required="required"
							id="sc_master_services_prod_owner">
							  <option value="">Select option</option>
							  <option value="practicing_agility">Practicing agility</option>
							  <option value="facilitating_scrum_event">Facilitating scrum event</option>
							  <option value="helps_product_owner_in_effective_backlog_management"> Helps Product Owner in effective backlog management</option>
							  <option value="provides_visibility_and_progress_about_product">Provides visibility and progress about product</option>
							  <option value="product_planning">Product planning</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">What services do Scrum Master offers to Organization?</label>
                            <select class="form-control responsibilitiesSelect" name="sc_master_services_org[]" multiple="multiple" required="required"
							id="sc_master_services_org">
							  <option value="">Select option</option>
							  <option value="scrum_adoption">Scrum adoption</option>
							  <option value="facilitating_scrum_event">working with Scrum Masters</option>
							  <option value="leading_and_coaching">leading and coaching</option>
							</select>
                        </div>
                        
						<div class="form-group">
                            <label class="control-label">Is Scrum master part of development team?</label>
                            <select class="form-control" name="is_scrum_master_part_of_dev_team" required="required"
							id="is_scrum_master_part_of_dev_team">
							<option value="">Select option</option>
							  <option value="0">No</option>
							  <option value="1">Yes</option>	
							</select>
                        </div>
						
						<div class="form-group" style="margin-bottom: 80px;">
                        </div>
                     </div>
		
        			
		<div class="col-xs-12">
			<button class="btn btn-primary btn-lg pull-left" id="scrum-team-prev" type="button" >Previous</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
	
</div>



