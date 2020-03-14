<?php ob_start(); ?>
<?php include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    // upload file process
    //echo '<pre>';
    //print_r($_FILES);
    //die;
    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "news_img/";
    move_uploaded_file($tmp_name, $path . $file_name);
    //die;
    //fetch datat from from
    $name = $_POST['name'];
    $date = $_POST['date'];
    $description = $_POST['desc'];



    //query
    $query = "insert into news (news_name,news_date,news_img,news_desc) values('$name','$date','$file_name','$description')";
    //echo $query;die;
    mysqli_query($conn, $query);
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage News</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create News</h3>
                            </div>
                            <hr>
                            <!--enctype="multipart/form-data"  to add any upload file img/vedio-->
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name</label>
                                    <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa"  data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Date</label>
                                    <input id="cc-pament" name="date" type="date" class="form-control" aria-required="true" aria-invalid="false">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Image</label>
                                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description</label>
                                    <input id="cc-pament" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false">
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
                                <th>ID_News</th>
                                <th>Full Name</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from news";
                            $result = mysqli_query($conn, $query);
                            while ($adminset = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td> {$adminset['news_id']}</td>";
                                echo "<td> {$adminset['news_name']}</td>";
                                echo "<td> {$adminset['news_date']}</td>";
                                echo "<td> <img src='news_img/{$adminset['news_img']}'></td>";
                                echo "<td> {$adminset['news_desc']}</td>";
                                echo "<td> <a href='edit_news.php?news_id={$adminset['news_id']}'>Edit</td>";
                                echo "<td> <a href='delete_news.php?news_id={$adminset['news_id']}'>Delete</td>";
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