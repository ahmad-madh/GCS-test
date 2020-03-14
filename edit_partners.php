<?php
ob_start();
include'includes/admin_header.php';
?>
<?php include'includes/connection.php'; ?>
<?php
$query = "select * from partners where par_id = {$_GET['par_id']}";
$result = mysqli_query($conn, $query);
$adminset = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    //fetch datat from from
    $name = $_POST['name'];
    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "partners_img/";
    move_uploaded_file($tmp_name, $path . $file_name);


    //query
    $query = "update partners  set par_name = '$name',par_logo='$file_name' where par_id = {$_GET['par_id']}";
    mysqli_query($conn, $query);
    header("location:manage_partners.php");
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Update Partners</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Partners</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name</label>
                                    <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number" value="<?php echo $adminset['par_name']; ?>">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Logo</label>
                                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $adminset['par_logo']; ?>">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
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