<?php 
ob_start();
include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
$query = "select * from admin where admin_id = {$_GET['admin_id']}";
$result = mysqli_query($conn, $query);
$adminset = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    //fetch datat from from
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];


    //query
    $query = "update admin set admin_email = '$email',admin_password = '$password',admin_fullname = '$full_name' where admin_id = {$_GET['admin_id']}";
    mysqli_query($conn, $query);
    header("location:manage_admin.php");
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Update Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input id="cc-number" name="full_name" type="text" class="form-control cc-number identified visa" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number" value="<?php echo $adminset['admin_fullname']; ?>">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input id="cc-name" name="password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $adminset['admin_password']; ?>">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">E-mail</label>
                                    <input id="cc-pament" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $adminset['admin_email']; ?>">
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