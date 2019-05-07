<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Add Home Content
        </h1>

    </section>
    <br>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-1">


            </div>
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <!-- Horizontal Form -->
                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-file-text-o"></i> List of Pages</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="" method="POST" name='simpan' class='form-horizontal form-bordered'>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Page Title*</label>

                                <div class="col-sm-9">
                                    <input type="text" name="page_title" id='speaker_name' class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Description</label>

                                <div class="col-sm-9">
                                    <!-- <textarea id="txtEditor" name='desc_text'></textarea> -->
                                    <!-- <textarea id='txtEditor' name="desc" class="form-control" style="height: 300px"></textarea> -->
                                    <textarea id="summernote" name="summernote"></textarea>
                                
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Sequance</label>

                                <div class="col-sm-2">
                                    <input type="text" name="sequance" id='sequance' class="form-control" placeholder="1 - 2 - 3 - 4" required>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="cancel" class="btn btn-default">Cancel</button>
                            <!-- <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button> -->
                            <button class="btn btn-info pull-right" type="Submit" name="submit">Submit</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
            <div class="col-md-1">


            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {

            $page_title         = $_POST['page_title'];
            $description        = $_POST['summernote'];
            $sequance           = $_POST['sequance'];
            $input_date         = date('Y-m-d');


            $query_content  = "INSERT INTO home_content (page_title, description, sequance, input_date)
                                        VALUES('$page_title','$description','$sequance', '$input_date')";

           //echo $query_content;
            //echo $description;
            $insert_content = mysqli_query($konek, $query_content);

            if ($insert_content) {
                echo '<script>alert("Home Content Berhasil di Tambahkan")</script>';
            } else {
                echo '<script>alert("Home Content Gagal di Tambahkan")</script>';
            }
        }

        ?>
        <script>
            // $(function() {
            //     //Add text editor
            //     $("#txtEditor").Editor();
            // });


            $('#summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 500
            });
        </script>

        <!-- <script>
                        $(document).ready(function() {
                
                        });
                    </script> -->

    <?php
}
?>