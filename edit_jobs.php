<?php
ob_start();
include'includes/admin_header.php';
?>
<?php include'includes/connection.php'; ?>
<?php
$query = "select * from jobs where job_id = {$_GET['job_id']}";
$result = mysqli_query($conn, $query);
$adminset = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    //fetch datat from from
    $name = $_POST['name'];
    $description = $_POST['desc'];
    $qualification = $_POST['qual'];


    //query
    $query = "update jobs set job_name = '$name',job_desc = '$description',job_qual = '$qualification'  where job_id = {$_GET['job_id']}";
    mysqli_query($conn, $query);
    header("location:manage_jobs.php");
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Update Jobs</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Jobs</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number" value="<?php echo $adminset['job_name']; ?>">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="desc"  type="text"  id="textarea-input" rows="9" placeholder="Content..." class="form-control"><?php echo htmlspecialchars($adminset['job_desc']); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Qualification</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="qual"  type="text" id="textarea-input" rows="9" placeholder="Content..." class="form-control"><?php echo htmlspecialchars($adminset['job_qual']); ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">

                                        <span id="payment-button-amount">Update</span>

                                    </button>
                                </div>

                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include'includes/admin_footer.php'; ?>