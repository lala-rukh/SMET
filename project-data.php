<div class="col-xs-12">
            <div class="col-md-12 well">
                <div class="">
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Company Id</label>
                            <input type="text" name="company_id" class="form-control" required="required">
                            <p align="right" style="padding-top:5px;"><button type="button" class="btn" align="right" data-toggle="modal" data-target="#fid">Forget ID</button>
							<button type="button" class="btn" align="right" data-toggle="modal" data-target="#gid">Generate New ID</button></p>							
                        </div>
						<div class="form-group">
                            <label class="control-label">Domain</label>
							<select class="form-control"  required="required" id="role" name="domain">
							  <option value="">Select Option</option>
							  <option value="Management information systems">Management information systems</option>
							  <option value="Transaction processing system">Transaction processing system</option>
							  <option value="web-based systems">Web-based systems</option>
							  <option value="Systems softwar">Systems software</option>
							  <option value="Finance and lease">Finance and lease</option>
							  <option value="Banking application">Banking application</option>
							  <option value="Mobile application">Mobile application</option>
							</select>
                        </div>
                    
                       <!-- <div class="form-group">
                            <label class="control-label">Estimated Duration</label>
                            <input type="number" name="duration" class="form-control" required="required" min="1">
                        </div>-->
						
						<!--<div class="form-group">
                            <label class="control-label">Skill Set</label>
                            <select class="form-control" name="skills">
							  <option value="">Select Option</option>
							</select>
                        </div>-->
						
						<div class="form-group">	
						<label class="control-label">Roles/designtion of your scrum team</label>
							<select name="roles[]" class="form-control responsibilitiesSelect" required="required" multiple="multiple">
							    <option value="">Select option</option>
								<option value="scrum_master">Scrum Master</option>
								<option value="product_owner">Product Owner</option>
								<option value="quality_engineer">Quality Engineer</option>
								<option value="developer">Developer</option>
								<option value="team_lead">Team Lead</option>
							</select>
                        </div>
						
						<div class="form-group">
                            <label class="control-label">How many people are employed in your organization?</label>
                            <input type="number" name="total_resources" class="form-control" required="required">
                        </div>
						
						<div class="form-group">
                            <label class="control-label">Is development team co-located?</label>
							<select class="form-control" name="is_colocated" id="is_colocated" required="required">
							  <option value="">Select Option</option>
							  <option value="1">Yes</option>
							  <option value="0">No</option>
							</select>
                        </div>
						
						<div class="form-group" style="display:none;" id="location_type">
                            <label class="control-label">If yes, then to what extent team is collated?</label>
							<select class="form-control" name="colocated_type" id="colocated_type" required="required">
							  <option value="null">Select Option</option>
							  <option value="0.25">In same building</option>
							  <option value="0.5">On same floor</option>
							  <option value="1">Side by side</option>
							</select>
                        </div>
						
                    </div>
					
					<div class="col-sm-6">
					
						<div class="form-group">
                            <label class="control-label"> Technologies</label>
                            <select class="form-control" name="technologies" id="technologies-list" required="required">
							  <option value="">Select Option</option>
							</select>
							<p align="right" style="padding-top:5px;"><button type="button" class="btn" align="right" data-toggle="modal" data-target="#atech">Add New Technology</button></p>
                        </div>
						
						<div class="form-group">
                            <label class="control-label">Type of Project</label>
                            <select class="form-control" name="project_type" id="project_type" required="required">
							  <option value="">Select Option</option>
							  <option value="In-House">In-House</option>
							  <option value="Project for a Client">Project for a Client</option>
							  <option value="Product to be Sold">Product to be Sold</option>
							  <option value="None">None</option>
							</select>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label">Location</label>
							<select class="form-control" name="project_location" required="required">
							  <option value="">Select Option</option>
							  <option>Onsite</option>
							  <option>Offshore</option>
							</select> 
                        </div>   
						
						<div class="form-group">
                            <label class="control-label">How disagreements/conflicts are resolved in the team?</label>
							<select class="form-control" name="is_conflict_resolution_process_exists" id="is_conflict_resolution_process_exists" 
							required="required">
							  <option value="">Select Option</option>
							  <option value="1">There is process to resolve conflict</option>
							  <option value="0">People shout at each other</option>
							</select>
                        </div>
						
						
						<div class="form-group">
                            <label style="margin-bottom: 55px;"></label>
                        </div>
						
						<!--<div class="form-group">
                            <label class="control-label"> How many number of figures do you have in your organization?	</label>
                            <input type="number" name="num_of_figures_in_cres_process" id="num_of_figures_in_cres_process" class="form-control" required="required">
                        </div>
						
						<div class="form-group">
                            <label class="control-label">How many number of tables do you have for conflict resolution in your organization?	</label>
                            <input type="number" name="num_of_tbl_in_cres_process" id="num_of_tbl_in_cres_process" class="form-control" required="required">
                        </div>-->
						
					</div>
					</div>

				<button class="btn btn-primary btn-lg nextBtn pull-right" type="button" >Next</button>
            </div>
        </div>
			
