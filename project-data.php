<div class="col-xs-12">
            <div class="col-md-12 well">
                <div class="">
                     <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Company Id</label>
                            <input type="text" name="company_id" class="form-control" required="required">
                            <p align="right" style="padding-top:5px;"><button type="button" class="btn" align="right" data-toggle="modal" data-target="#fid">Forget ID</button>
							<button type="button" class="btn" align="right" data-toggle="modal" data-target="#gid">Generate New ID</button></p>							
                        </div>
						<div class="form-group">
                            <label class="control-label">Domain</label>
							<select class="form-control" name="domain">
							  <option value="">Select Option</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Type</label>
                            <select class="form-control" name="project_type">
							  <option value="">Select Option</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Location</label>
							<select class="form-control" name="project_location">
							  <option value="">Select Option</option>
							</select> 
                        </div>   
						<div class="form-group">
                            <label class="control-label">Is development team co-located?</label>
                            <input type="text" name="is_colocated" class="form-control" required="required">
                        </div>						
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label"> Technologies</label>
                            <select class="form-control" name="technologies" id="technologies-list">
							  <option value="">Select Option</option>
							</select>
							<p align="right" style="padding-top:5px;"><button type="button" class="btn" align="right" data-toggle="modal" data-target="#atech">Add New Technology</button></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Estimated Duration</label>
                            <input type="number" name="duration" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label class="control-label">Total Resources</label>
                            <input type="number" name="total_resources" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label class="control-label">Skill Set</label>
                            <select class="form-control" name="skills">
							  <option value="">Select Option</option>
							</select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Roles/designtion of scrum team</label>
                            <input type="text" name="roles" class="form-control" required="required">
                        </div>
                    </div>
					
					<div class="col-sm-12">
						<div class="form-group">
                            <label class="control-label">Do you have a conflict resolution process in your organization?</label>
                            <input type="text" name="is_conflict_resolution_process_exists" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label class="control-label"> How many number of figures do you have in your organization?	</label>
                            <input type="text" name="num_of_figures_in_cres_process" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label class="control-label">How many number of sections do you have for conflict resolution in your organization?	</label>
                            <input type="text" name="num_of_sec_in_cres_process" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label class="control-label">How many number of tables do you have for conflict resolution in your organization?	</label>
                            <input type="text" name="num_of_tbl_in_cres_process" class="form-control" required="required">
                        </div>
						
					</div>
					</div>

				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
			
