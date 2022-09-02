<?php 
require_once "core/functions.php";
require_once "template/header.php";
if(isset($_POST['submitBtn'])) {
    addContact();
}
?>

<div class="container">
    <div class="col-12 col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <a href="index.php" class="text-decoration-none me-2 mb-3 d-inline-block d-md-none">
                    <button class="btn btn-outline-primary">
                        <i class="feather-user h5 m-0 text-primary"></i>
                    </button>
                </a>
                <form method="post" enctype="multipart/form-data">
                    <h6>
                        <span class="d-inline-block me-3">Create New Contact</span>
                        <span class="d-inline-block text-secondary">
                            <i class="feather-tag"></i>
                            <span>No Label</span>
                        </span>
                    </h6>
                    
                    <div class="mb-3">
                        <input type="file" class="form-control" name="photo">
                        <small class="text-danger h6"><?php echo showError('photo'); ?></small>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label class="h6" for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name="first_name" value="<?php echo oldData('first_name'); ?>">
                            <small class="text-danger h6"><?php echo showError('first_name'); ?></small>
                        </div>
                        <div>
                            <label class="h6" for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="last_name" value="<?php echo oldData('last_name'); ?>">
                            <small class="text-danger h6"><?php echo showError('last_name'); ?></small>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label class="h6" for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company" value="<?php echo oldData('company'); ?>">
                            <small class="text-danger h6"><?php echo showError('company'); ?></small>
                        </div>
                        <div>
                            <label class="h6" for="job_title">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo oldData('job_title'); ?>">
                            <small class="text-danger h6"><?php echo showError('job_title'); ?></small>
                        </div>
                    </div>

                    <div>
                        <label class="h6" for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo oldData('email'); ?>">
                        <small class="text-danger h6"></small>
                    </div>

                    <div>
                        <label class="h6" for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone_number" value="<?php echo oldData('phone_number'); ?>">
                        <small class="text-danger h6"><?php echo showError('phone_number'); ?></small>
                    </div>

                    <div>
                        <label class="h6" for="note">Notes</label>
                        <input type="text" class="form-control" id="note" name="note" value="<?php echo oldData('note'); ?>">
                        <small class="text-danger h6"></small>
                    </div>

                    <div class="d-flex justify-content-end my-3">
                        <a href="index.php">
                            <button class="btn btn-outline-primary">Cancel</button>
                        </a>
                        <button type="submit" class="btn btn-primary ms-1" name="submitBtn">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "template/footer.php"; ?>