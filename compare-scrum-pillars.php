
<form id="compare-scrum-pillars-form" method="post" action="save-scrum-pillars-data.php">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Do you have any established process in your organization? If yes, please provide name and details.</label>
					<input type="text" name="process_in_organization" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>How many number of figures do you have for that process in your organization?</label>
					<input type="number" name="no_of_figures_process" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>How many number of sections do you have for that process in your organization?</label>
					<input type="number" name="no_of_sections_process" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>How many number of tables do you have for that process in your organization?</label>
					<input type="number" name="no_of_tables_process" class="form-control" required="required">
				</div>   
				<div class="form-group">
					<label>Is conflict resolution process shared within the organization?</label>
					<select class="form-control" name="conflict_resolution_process_exists">
					  <option value="1">Yes</option>
					  <option value="0">No</option>
					</select>
				</div>						
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Do definition of done exists?</label>
					<select class="form-control" name="def_of_done">
					  <option value="1">Yes</option>
					  <option value="0">No</option>
					</select>
				</div>
			   <div class="form-group">
					<label>How definition of done communicated to project team?</label>
					<select class="form-control" name="def_of_done_communication">
					  <option value="Written Wiki">Written Wiki</option>
					  <option value="Word of mouth">Word of mouth</option>
					  <option value="Scrum board">Scrum board</option>
					</select>
				</div>
				<div class="form-group">
					<label>How do you monitor and inspect progress towards Sprint Goal?</label>
					<select class="form-control" name="progress_sprint_goal">
					  <option value="Burn-down chart">Burn-down chart</option>
					  <option value="Burn-up charts">Burn-up charts</option>
					  <option value="Sprint tracking sheets">Sprint tracking sheets</option>
					  <option value="Touch base">Touch base</option>
					</select>
				</div>
				<div class="form-group">
					<label>To what extent Scrum is adapted to your organizational and project condition?</label>
					<textarea name="scrum_adapted" id="taid" rows="4" wrap="soft" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group" style="float:left;">
					<!-- <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Previous</button> -->
					<a href="compare-project-data.php" class="btn btn-primary btn-lg">Previous</a>
				</div>
				<div class="form-group" style="float:right;">
<!--                             <input type="submit" value="Search">
-->                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Next</button>
					<!-- <a href="compare-scrum-teams.php" class="btn btn-primary btn-lg">Next</a> -->
				</div>
			</div>
		</form> 