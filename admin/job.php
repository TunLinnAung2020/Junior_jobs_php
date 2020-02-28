<div class="container">
    <?php
    include_once("layout.php");

    ?>
    <div class="row mt-4">
        <div class="col-md-10 alert alert-dimissable fade <?php echo isset($_SESSION['job_success'])? 'show alert-success': '';?>">
            <?php echo isset($_SESSION['job_success'])?$_SESSION['job_success']:'';?>
             <button class="btn close" data-dimmiss="alert">&times;</button>    
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" data-target="#createJob" data-toggle="modal">
            Create New Job
            </button>
        </div>
    </div>
    <div class="row-mt-4">
        <div class="md-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Position</th>
                            <th>Description</th>
                            <th>Requirements</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($job = mysqli_fetch_assoc($jobs)):?>
                        <tr>
							<td><?php echo $job['title'];?></td>
							<td><?php echo $job['position_name'];?></td>
							<td><?php echo $job['description'];?></td>
							<td><?php echo $job['requirement'];?></td>
							<td>
								<a href="#" class="btn btn-success">Edit</a> |
								<a href="#" class="btn btn-danger">Delete</a> 
							</td>
						</tr>
					<?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createJob">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3>Create New Job</h3>
					<form class="form-horizontal p-4" method="post" action="job.php">
						<div class="row form-group">
							<label class="control-label" for="category">Job Category</label>
							<select class="form-control" name="category">
								<option>--Select Category---</option>
								<?php while($row = mysqli_fetch_assoc($categories)):?>
									<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
								<?php endwhile;?>
							</select>
						</div>
						<div class="row form-group">
							<label class="control-label" for="positiion">Job Position</label>
							<select class="form-control" name="position">
								<option>--Select Job Position--</option>
								<?php while($row = mysqli_fetch_assoc($positions)):?>
									<option value="<?php echo $row['id'];?>" <?php echo $row['id']==1 ? 'selected' : '';?>> 
										<?php echo $row['name'];?></option>
								<?php endwhile;?>
							</select>
						</div>
						<div class="row form-group">
							<label class="control-label" for="title">Job Title</label>
							<input type="text" name="title" id="title" class="form-control">
						</div>
						<div class="row form-group">
							<label class="control-label" for="desription">Job Descriptioon</label>
							<textarea name="description" id="description" class="form-control"></textarea>
						</div>
						<div class="row form-group">
							<label class="control-label" for="requirement">Job Requirement</label>
							<textarea name="requirement" id="requirement" class="form-control"></textarea>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-success">Save</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php session_unset();
?>