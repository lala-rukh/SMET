<div class="col-xs-12 well">
                    <div class="col-sm-6">
						<h2><b>Product Backlog</b></h2>
                        <div class="form-group">
                            <label class="control-label">Is there a product backlog for this project?</label><br>
                            <select class="form-control" name="is_prod_backlog_exists">
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>
                        </div>
						<div class="form-group">
                            <label class="control-label">Current number of items in product backlog?</label>
							<input type="text" name="items_product_backlog" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who prioritize the product backlog?</label>
                            <select class="form-control" name="prod_backlog_prioritize">
                              <option value="">Product Owner</option>
                              <option value="">Scrum Master</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who updates Product Backlog?</label>
							<select class="form-control" name="prod_backlog_updated">
                              <option value="">Product Owner</option>
                              <option value="">Scrum Master</option>
                            </select>
                        </div>   
						<div class="form-group">
                            <label class="control-label">When it is updated?</label>
                            <select class="form-control" name="prod_backlog_updated_time">
                              <option value="">Product Owner</option>
                              <option value="">Scrum Master</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Who gives estimates of product backlog items?</label>
                            <select class="form-control" name="prod_backlog_estimation">
                              <option value="">Product Owner</option>
                              <option value="">Scrum Master</option>
                            </select>
                        </div>			
                    </div>
                    
                    <div class="col-sm-6">
						<h2><b>Sprint Backlog</b></h2>
                        <div class="form-group">
                            <label class="control-label">Do you manage sprint backlog for your sprint?</label>
                            <select class="form-control" name="is_sprint_backlog_exists">
                              <option value="">Yes</option>
                              <option value="">No</option>
                            </select>
                       </div>
                        <div class="form-group">
                            <label class="control-label">What major parts your sprint backlog constitutes of?</label>
                            <select class="form-control" name="sprint_backlog_parts">
                              <option value="">Items to be delivered</option>
                              <option value="">Product backlog items</option>
                            </select>
                       </div>
						<div class="form-group">
                            <label class="control-label">Who change sprint backlog if required?</label>
                            <select class="form-control" name="sprint_backlog_changes">
                              <option value="">Product Owner</option>
                              <option value="">Scrum Master</option>
                            </select>
                        </div>
						<div class="form-group">
                            <label class="control-label">How many change requests were made in running sprint?</label>
                            <input type="number" name="sprint_change_requests" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">How sprint progress can be tracked at any given point?</label>
                            <input type="text" name="sprint_progress_tracking" class="form-control" required="required">
                        </div>                       
                    </div>
                    
                    <div class="col-sm-6">
						<h2><b>Increment</b></h2>
                        <div class="form-group">
                            <label class="control-label">What is the criterion of acceptance of an increment?</label>
                            <input type="text" name="is_acceptance_criteria_defined" class="form-control" required="required">
                        </div>
                     </div>
                   
                    <div class="col-sm-12">
						<button class="btn btn-primary btn-lg pull-right" type="submit" >Submit</button>
					</div>
					</div>
					