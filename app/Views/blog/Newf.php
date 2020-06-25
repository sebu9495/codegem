
<section>
	<div >
		<div class="container bg-white container-fluid ">
		<?php if($_POST) ?>
		<?= \Config\Services::validation()->listErrors();?>
		</div>
			<form class="" action="/Data/create" method="post"> 
 
						<div style="width: 50%;">
									<div class="form-group">
									<label  for="usr" style="color: blanchedalmond;">Name:</label>
									<input type="text" class="form-control  bg-dark " id="usr" name="usr">
									</div>
									<div class="form-group">
									<label  for="pwd" style="color: white;">Password:</label>
									<input type="password" class="form-control  bg-dark " id="pwd" name="pwd">
									</div>
							
						</div>

						<div class="form-check-inline" >
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" value="" width="40%"><div style="color: white; " >male</div> 
								</label>
						</div>

					<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value=""><div style="color: white;" >female</div> 
							</label>
					</div>

					<div class="form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="" disabled><div style="color: white;" >others</div> 
							</label>
					</div>
					<div>

							<button type="submit" class="btn btn-primary bg-dark">Submit</button>
					</div>

				</div>
	
		</form>

</section>










