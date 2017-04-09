
<script type="text/javascript">
$(document).ready(function() {
	
$("#is_prod_backlog_exists").change(function(){
	
	var val = $("#is_prod_backlog_exists").val();
	if(val==0 && val != "")
	{
		$("#items_product_backlog").attr('disabled', true);
		$("#prod_backlog_prioritize").attr('disabled', true);
		$("#prod_backlog_updated").attr('disabled', true);
		$("#prod_backlog_updated_time").attr('disabled', true);
		$("#prod_backlog_estimation").attr('disabled', true);
	}
	else{
		$("#items_product_backlog").attr('disabled', false);
		$("#prod_backlog_prioritize").attr('disabled', false);
		$("#prod_backlog_updated").attr('disabled', false);
		$("#prod_backlog_updated_time").attr('disabled', false);
		$("#prod_backlog_estimation").attr('disabled', false);
	}
});

$("#is_sprint_backlog_exists").change(function(){
	
	var val = $("#is_sprint_backlog_exists").val();
	if(val==0 && val != "")
	{
		$("#sprint_backlog_parts").attr('disabled', true);
		$("#sprint_backlog_changes").attr('disabled', true);
		$("#sprint_change_requests").attr('disabled', true);
		$("#sprint_progress_tracking").attr('disabled', true);
	}
	else{
		$("#sprint_backlog_parts").attr('disabled', false);
		$("#sprint_backlog_changes").attr('disabled', false);
		$("#sprint_change_requests").attr('disabled', false);
		$("#sprint_progress_tracking").attr('disabled', false);
	}
});
});
</script>

<div class="col-xs-12 well">
                    <div class="col-sm-6">
						<h2><b>Product Backlog</b></h2>
                        <div class="form-group">
                            <label class="control-label">Is there a product backlog for this project?</label><br>
                            <select class="form-control" name="is_prod_backlog_exists" id="is_prod_backlog_exists" required="required">
							  <option value="">Select option</option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>
                        </div>
						<div class="form-group">
                            <label class="control-label">Current number of items in product backlog?</label>
							<input type="text" name="items_product_backlog" id="items_product_backlog" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who prioritize the product backlog?</label>
                            <select class="form-control" name="prod_backlog_prioritize" id="prod_backlog_prioritize" required="required">
							  <option value="">Select option</option>
                              <option value="prouct_owner">Product Owner</option>
                              <option value="scrum-master">Scrum Master</option>
							  <option value="quality_engineer">Quality Engineer</option>
							  <option value="developer">Developer</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who updates Product Backlog?</label>
							<select class="form-control" name="prod_backlog_updated" id="prod_backlog_updated" required="required">
							  <option value="">Select option</option>
                              <option value="prouct_owner">Product Owner</option>
                              <option value="scrum-master">Scrum Master</option>
							  <option value="quality_engineer">Quality Engineer</option>
							  <option value="developer">Developer</option>
                            </select>
                        </div>   
						<div class="form-group">
                            <label class="control-label">When product backlog is updated?</label>
                            <select class="form-control" name="prod_backlog_updated_time" id="prod_backlog_updated_time" required="required">
							  <option value="">Select option</option>
                              <option value="any_time">Any Time</option>
                              <option value="not_at_all">Not at all</option>
							  <option value="">Ocassionaly</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who gives estimates of product backlog items?</label>
                            <select class="form-control" name="prod_backlog_estimation" id="prod_backlog_estimation" required="required">
							  <option value="">Select option</option>
                              <option value="product_owner">Product Owner</option>
                              <option value="scrum_master">Scrum Master</option>
                            </select>
                        </div>			
                    </div>
                    
                    <div class="col-sm-6">
						<h2><b>Sprint Backlog</b></h2>
                        <div class="form-group">
                            <label class="control-label">Do you manage sprint backlog for your sprint?</label>
                            <select class="form-control" name="is_sprint_backlog_exists" id="is_sprint_backlog_exists" required="required">
							  <option value="">Select option</option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>
                       </div>
                        <div class="form-group">
                            <label class="control-label">What major parts your sprint backlog constitutes of?</label>
                            <select class="form-control responsibilitiesSelect" name="sprint_backlog_parts[]" id="sprint_backlog_parts" required="required"
							multiple="mutiple">
							  <option value="">Select option</option>
                              <option value="items_to_be_delivered">Items to be delivered</option>
                              <option value="product_backlog_items">Product backlog items</option>
							  <option value="bugs">Bugs</option>
                            </select>
                       </div>
						<div class="form-group">
                            <label class="control-label">Who change sprint backlog if required?</label>
                            <select class="form-control" name="sprint_backlog_changes" id="sprint_backlog_changes" required="required">
							  <option value="">Select option</option>
                              <option value="product_owner">Product Owner</option>
                              <option value="scrum_master">Scrum Master</option>
							  <option value="development_team">Development Team</option>
                            </select>
                        </div>
						<div class="form-group">
                            <label class="control-label">How many change requests were made in running sprint?</label>
                            <input type="number" name="sprint_change_requests" id="sprint_change_requests" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">How sprint progress can be tracked at any given point?</label>
                            <input type="text" name="sprint_progress_tracking" id="sprint_progress_tracking" class="form-control" required="required">
                        </div>                       
                    </div>
                    
                    <div class="col-sm-6">
						<h2><b>Increment</b></h2>
                        <div class="form-group">
                            <label class="control-label">Do you have any acceptance criteria for a shippable product?</label>
							<select name="is_acceptance_criteria_defined" class="form-control" id="is_acceptance_criteria_defined" required="required">
							    <option value="">Select option</option>
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
                        </div>
                     </div>
                   
                    <div class="col-sm-12">
						<button class="btn btn-primary btn-lg pull-left" id="scrum-artifact-prev" type="button" >Previous</button>
						<button class="btn btn-primary btn-lg pull-right" type="submit" >Submit</button>
					</div>
					</div>
					