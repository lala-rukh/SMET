<div class="col-xs-12 well">
        <div class="col-sm-6">
						<h2><b>Product Owner</b></h2>
                        <div class="form-group">
                            <label class="control-label">Is there a product owner?</label><br>
								<select class="form-control" name="is_prod_owner_exists">
								  <option value="1">No</option>
								  <option value="2">Yes</option>
								</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">What responsibilities do product owner fulfills?</label>
							<select class="form-control" name="prod_owner_responsibility">
								  <option value="">Write user stories</option>
								  <option value="">Write acceptance criteria</option>
								  <option value="">Product backlog management</option>
								  <option value="">Maximizing value of product and work of development team</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Level of authority given to product owner</label>
                            <input type="text" name="prod_owner_authority" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Number of product owners</label>
							<select name="num_of_prod_owner">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
							</select> 
                        </div>   
						<div class="form-group">
                            <label class="control-label">Is product owner, a customer, customer representative or representative from company? </label>
                            <input type="text" name="prod_owner_type" class="form-control" required="required">
                        </div>			
                    </div>
        
		<div class="col-sm-6">
						<h2><b>Scrum Master</b></h2>
                        <div class="form-group">
                            <label class="control-label">Is there a scrum master on project?</label>
                            <select class="form-control" name="is_scrum_master_exists">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">What responsibilities do scrum master fulfills?</label>
                            <select class="form-control" name="scrum_master_reponsibilities">
							  <option value="">Adherence to scrum rules</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">What services do s/he offer to development team?</label>
                            <select class="form-control" name="sc_master_services_dev_team">
							  <option value="">removing impediments</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Is Scrum master part of development team?</label>
                            <select class="form-control" name="is_scrum_master_part_of_dev_team">
							  <option value="1">No</option>
							  <option value="2">Yes</option>	
							</select>
                        </div>
						<div class="form-group" style="margin-bottom: 80px;">
                        </div>
                     </div>
		
		
        <div class="col-sm-6">
						<h2><b>Development Team</b></h2>
                        <div class="form-group">
                            <label class="control-label">To whom development team reports?</label>
                            <select class="form-control" name="dev_team_report">
							  <option value="">Product Owner</option>
								<option value="">Scrum Master</option>
								<option value="">Team Lead</option>
								<option value="">No One</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Skill set of project team</label>
                            <input type="text" name="skills_set" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label class="control-label">Are there any sub teams?</label>
                            <select class="form-control" name="is_subteam">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>
						<div class="form-group">
                            <label class="control-label">Team size</label>
                            <input type="number" name="team_size" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who is accountable for development team work?</label>
                            <select class="form-control" name="dev_team_accountable">
							  <option value="">Development Team</option>
							  <option value="">Scrum Master</option>
							  <option value="">Product Owner</option>
							  <option value="">Team Lead</option>
							  <option value="">Manager</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Is product owner part of development team?</label>
                            <select class="form-control" name="is_prod_owner_part_of_dev_team">
							  <option value="1">No</option>
							  <option value="2">Yes</option>
							</select>
                        </div>                       
                    </div>
        			
		<div class="col-xs-12">
			<button class="btn btn-primary btn-lg pull-left" id="scrum-team-prev" type="button" >Previous</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
	
</div>