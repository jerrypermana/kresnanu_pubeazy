<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Edit Home Content
        </h1>

    </section>
    <br>
    <?php

    $contentID  = $_GET['contentID'];
    $query      = "SELECT * FROM home_content WHERE content_id='$contentID'";
    $hasil = mysqli_query($konek, $query);
    $row = mysqli_fetch_array($hasil);
    $hitung = mysqli_num_rows($hasil);

    if ($hitung == 0) {
        echo '<script>alert("Pages Tidak Di Temukan")
         location.replace("' . $base_url . '../index.php?id=list-home-content")</script>';
    }
    ?>

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
                                    <input type="text" name="page_title" class="form-control" value='<?php echo $row['page_title'] ?>'>
                                    <input type="hidden" name="content_id" class="form-control" value='<?php echo $row['content_id'] ?>'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Description</label>

                                <div class="col-sm-9">

                                    <textarea id="summernote" name="summernote"><?php echo $row['description'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Sequance</label>

                                <div class="col-sm-2">
                                    <input type="text" name="sequance" id='sequance' class="form-control" value='<?php echo $row['sequance'] ?>'>
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

            $content_id         = $_POST['content_id'];
            $page_title         = $_POST['page_title'];
            $description        = $_POST['summernote'];
            $sequance           = $_POST['sequance'];
            


            $query_content  = "UPDATE home_content SET 
                    page_title='$page_title', 
                    description= '$description',
                    sequance='$sequance'
                    WHERE content_id='$content_id'";





            //echo $query_content;
            $insert_content = mysqli_query($konek, $query_content);

            if ($insert_content) {
                echo '<script>alert("Home Content Berhasil di Perbaharui")</script>';
            } else {
                echo '<script>alert("Home Content Gagal di Perbaharui")</script>';
            }
        }

        ?>
        <script>
            $('#summernote').summernote({

                tabsize: 2,
                height: 500
            });
        </script>

    <?php
}
?>