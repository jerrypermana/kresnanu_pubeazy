<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Edit Information Content
        </h1>

    </section>
    <br>
    <?php

    $infoID  = $_GET['infoID'];
    $query      = "SELECT * FROM home_information WHERE information_id='$infoID'";
    $hasil = mysqli_query($konek, $query);
    $row = mysqli_fetch_array($hasil);
    $hitung = mysqli_num_rows($hasil);

    if ($hitung == 0) {
        echo '<script>alert("Pages Tidak Di Temukan")
         location.replace("' . $base_url . '../index.php?id=list-information")</script>';
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
                                    <input type="text" name="page_information" class="form-control" value='<?php echo $row['page_information'] ?>'>
                                    <input type="hidden" name="information_id" class="form-control" value='<?php echo $row['information_id'] ?>'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Description</label>

                                <div class="col-sm-9">

                                <textarea id="editor1" name="description" rows="10" cols="80"><?php echo $row['description'] ?> </textarea>
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

            $information_id         = $_POST['information_id'];
            $page_info              = $_POST['page_information'];
            $description            = $_POST['description'];
            $sequance               = $_POST['sequance'];
            


            $query_content  = "UPDATE home_information SET 
                    page_information='$page_info', 
                    description= '$description',
                    sequance='$sequance'
                    WHERE information_id='$information_id'";





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
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1')
                //bootstrap WYSIHTML5 - text editor
                $('.textarea').wysihtml5()
            })
        </script>


    <?php
}
?>