<?php include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    //fetch datat from from
    $name = $_POST['name'];
    $description = $_POST['desc'];
    $qualification = $_POST['qual'];


    //query
    $query = "insert into jobs (job_name,job_desc,job_qual) values('$name','$description','$qualification')";
    mysqli_query($conn, $query);
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Jobs</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">create Jobs</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="desc" type="text" id="textarea-input" rows="15" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Qualification</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="qual" type="text" id="textarea-input" rows="15" placeholder="Qualification..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                <!--div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Qualification</label>
                                    <input id="cc-number" name="qual" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div-->
                                

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
                                <th>Description</th>
                                <th>Qualification</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from jobs";
                            $result = mysqli_query($conn, $query);
                            while ($adminset = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td> {$adminset['job_id']}</td>";
                                echo "<td> {$adminset['job_name']}</td>";
                                echo "<td> {$adminset['job_desc']}</td>";
                                echo "<td> {$adminset['job_qual']}</td>";
                                echo "<td> <a href='edit_jobs.php?job_id={$adminset['job_id']}'>Edit</td>";
                                echo "<td> <a href='delete_jobs.php?job_id={$adminset['job_id']}'>Delete</td>";
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