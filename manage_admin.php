<?php include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    //fetch datat from from
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    //query
    $query = "insert into admin (admin_fullname,admin_password,admin_email) values('$full_name','$password','$email')";
    mysqli_query($conn, $query);
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">create Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input id="cc-number" name="full_name" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input id="cc-name" name="password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">E-mail</label>
                                    <input id="cc-pament" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">

                                        <span id="payment-button-amount">Create</span>

                                    </button>
                                </div>

                            </form>

                        </div>


                    </div>
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>E-mail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from admin";
                            $result = mysqli_query($conn, $query);
                            while ($adminset = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td> {$adminset['admin_id']}</td>";
                                echo "<td> {$adminset['admin_fullname']}</td>";
                                echo "<td> {$adminset['admin_email']}</td>";
                                echo "<td> <a href='edit_admin.php?admin_id={$adminset['admin_id']}'>Edit</td>";
                                echo "<td> <a href='delete_admin.php?admin_id={$adminset['admin_id']}'>Delete</td>";
                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include'includes/admin_footer.php'; ?>