<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> Home Content
        </h1>

    </section>
    </br>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="col-md-3" align="right">
                    <a href="<?php echo $base_url; ?>/index.php?p=add-home-content" class="btn btn-block btn-primary">
                        <i class="fa fa-plus"></i> Add New Page 
                    </a>

                </div>
                
                <div class="col-md-3" align="right">
                    <a href="<?php echo $base_url; ?>/index.php?p=list-home-content" class="btn btn-block btn-primary">
                        <i class="fa fa-refresh"></i> Refresh
                    </a>
                </div>
                <div class="col-md-6">
                </div>
                <br>
                <br>

                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-file-text-o"></i> List Home Content</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">


                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tr>
                                                <th style="width: 10%; text-align: center;">Sequance</th>
                                                <th style="width: 70%; text-align: center;">Title</th>
                                                <th style="width: 20%; text-align: center;">Action</th>
                                            </tr>
                                            <?php


                                            $select = mysqli_query($konek, "SELECT * FROM home_content order by sequance ASC ");
                                            while ($row_content = mysqli_fetch_array($select)) {

                                               


                                                echo "<tbody>
                                            <tr>
                                                <td style='text-align: center;'>$row_content[sequance]</td>
                                               
                                                <td >$row_content[page_title]</td>
                                                <td align='center'><a href='$base_url/index.php?p=edit-home-content&contentID=$row_content[content_id]'><button type='button' class='btn btn-default'><i class='fa fa-edit'></i> Edit</button></a>
                                                &nbsp
                                               <a href='$base_url/index.php?p=mst-hapus&speakID=$row_content[content_id]'onClick=\"return confirm('Apakah anda yakin akan menghapus data Speakers $row_content[page_title] ?')\"><button type='button' class='btn btn-danger'><i class='fa fa-trash'> Hapus</i></button></a>
                                                </td>
                                            </tr>
                                        </tbody>";
                                            };
                                            ?>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>



            </div>
        </div>
        </div>
        <!-- /.box -->


        <!-- /.box -->

        <!-- Input addon -->


        </div>
        </div>
        <!-- Modal Popup untuk Add SUbject-->



        </div>
        </div>
    <?php
}
?>