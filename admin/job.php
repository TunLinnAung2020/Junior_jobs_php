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
</div>