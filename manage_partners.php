<?php include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "partners_img/";
    move_uploaded_file($tmp_name, $path . $file_name);
    //fetch datat from from
    $name = $_POST['name'];
    


    //query
    $query = "insert into partners (par_name,par_logo) values('$name','$file_name')";
//    echo $query;die;
    mysqli_query($conn, $query);
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Partners</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Partners</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name</label>
                                    <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa"  data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Logo</label>
                                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
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
                                <th>Logo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from partners";
                            $result = mysqli_query($conn, $query);
                            while ($adminset = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td> {$adminset['par_id']}</td>";
                                echo "<td> {$adminset['par_name']}</td>";
                                echo "<td> <img src='partners_img/{$adminset['par_logo']}'></td>";
                                echo "<td> <a href='edit_partners.php?par_id={$adminset['par_id']}'>Edit</td>";
                                echo "<td> <a href='delete_partners.php?par_id={$adminset['par_id']}'>Delete</td>";
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