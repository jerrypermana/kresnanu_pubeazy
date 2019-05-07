<?php
if ($_SESSION['group_session'] == 'admin' || $_SESSION['group_session'] == 'reviewer') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-cog"></i> System Settings
        </h1>

    </section>
    </br>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">



                                <div class="box box-solid">

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-group" id="accordion">
                                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            <i class="fa fa-envelope"></i> Setting Email
                                                        </a>
                                                    </h4>
                                                </div>
                                                <form role="form" action="" method="POST" name='simpan' onSubmit='return validasi()' enctype="multipart/form-data">
                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                        <?php


                                                        $q_email        = "SELECT * FROM mst_email";
                                                        $hasil_email    = mysqli_query($konek, $q_email);
                                                        $d_email        = mysqli_fetch_array($hasil_email);

                                                        ?>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">SMTP Host</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="SMTP_Host" id='SMTP_Host' class="form-control" value='<?php echo $d_email['SMTP_Host']; ?>'>
                                                                <input type="hidden" name="email_id" id='email_id' class="form-control" value='<?php echo $d_email['email_id']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">SMTP User</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="SMTP_User" id='SMTP_User' class="form-control" value='<?php echo $d_email['SMTP_User'];  ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">SMTP Pass</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="SMTP_Pass" id='SMTP_Pass' class="form-control" value='<?php echo $d_email['SMTP_Pass']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">SMTP Port</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="SMTP_Port" id='SMTP_Port' class="form-control" value='<?php echo $d_email['SMTP_Port']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Mail Protocol</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="Mail_Protocol" id='Mail_Protocol' class="form-control" value='<?php echo $d_email['Mail_Protocol']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <button type="submit" name="u_email" class="btn btn-info">Update</button>
                                                            <button type="cancel" class="btn btn-default  pull-right">Cancel</button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>



                                            <div class="panel box box-danger">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                            <i class="fa fa-home"></i> Setting Home Pages
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse in">
                                                    <form role="form" action="" method="POST" name='simpan' onSubmit='return validasi()' enctype="multipart/form-data">
                                                        <?php


                                                        $q_home        = "SELECT * FROM homepage";
                                                        $hasil_home    = mysqli_query($konek, $q_home);
                                                        $d_hp          = mysqli_fetch_array($hasil_home);

                                                        ?>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">About Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="about_title" class="form-control" value='<?php echo $d_hp['about_title']; ?>'>
                                                                <input type="hidden" name="id" id='id' class="form-control" value='<?php echo $d_hp['id']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">About Text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="about_text" rows="3"><?php echo $d_hp['about_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Location Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="location_title" class="form-control" value='<?php echo $d_hp['location_title']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Location Text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="location_text" rows="2"><?php echo $d_hp['location_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">When Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="when_title" class="form-control" value='<?php echo $d_hp['when_title']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">When text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="when_text" rows="2"><?php echo $d_hp['when_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <button type="submit" name="u_home" class="btn btn-info">Update</button>
                                                            <button type="cancel" class="btn btn-default  pull-right">Cancel</button>

                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="panel box box-success">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        <i class="fa fa-phone"></i> Contact Us
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse in">
                                                    <form role="form" action="" method="POST" name='simpan' onSubmit='return validasi()' enctype="multipart/form-data">
                                                        <?php


                                                        $q_cp           = "SELECT * FROM contact_us";
                                                        $hasil_cp       = mysqli_query($konek, $q_cp);
                                                        $d_cp           = mysqli_fetch_array($hasil_cp);

                                                        ?>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Contact Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="contact_title" class="form-control" value='<?php echo $d_cp['contact_title']; ?>'>
                                                                <input type="hidden" name="contact_id"  class="form-control" value='<?php echo $d_cp['contact_id']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Contact Text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="contact_text" rows="3"><?php echo $d_cp['contact_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Address Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="address_title" class="form-control" value='<?php echo $d_cp['address_title']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Address Text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="address_text" rows="2"><?php echo $d_cp['address_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Phone Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="phone_title" class="form-control" value='<?php echo $d_cp['phone_title']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Phone text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="phone_text" rows="2"><?php echo $d_cp['phone_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Email Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="email_title" class="form-control" value='<?php echo $d_cp['email_title']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label">Email text</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" name="email_text" rows="2"><?php echo $d_cp['email_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <button type="submit" name="u_contact" class="btn btn-info">Update</button>
                                                            <button type="cancel" class="btn btn-default  pull-right">Cancel</button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="panel box box-success">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                        <i class="fa fa-th-large"></i> Social Media
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse in">
                                                    <form role="form" action="" method="POST" name='simpan' onSubmit='return validasi()' enctype="multipart/form-data">
                                                        <?php


                                                        $q_sm           = "SELECT * FROM social_media";
                                                        $hasil_sm       = mysqli_query($konek, $q_sm);
                                                        $d_sm           = mysqli_fetch_array($hasil_sm);

                                                        ?>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label"><i class="fa fa-facebook-official"></i> Facebook</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="facebook" class="form-control" value='<?php echo $d_sm['facebook']; ?>'>           
                                                                <input type="hidden" name="socmed_id"  class="form-control" value='<?php echo $d_sm['socmed_id']; ?>'>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label"><i class="fa fa-twitter-square"></i> Twitter</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="twitter" class="form-control" value='<?php echo $d_sm['twitter']; ?>'>           
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <label class="col-sm-2 control-label"><i class="fa fa-instagram"></i> Instagram</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="ig" class="form-control" value='<?php echo $d_sm['instagram']; ?>'>           
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <button type="submit" name="u_sosmed" class="btn btn-info">Update</button>
                                                            <button type="cancel" class="btn btn-default  pull-right">Cancel</button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['u_email'])) {
                                $email_id       = $_POST['email_id'];
                                $SMTP_Host      = $_POST['SMTP_Host'];
                                $SMTP_User      = $_POST['SMTP_User'];
                                $SMTP_Pass      = $_POST['SMTP_Pass'];
                                $SMTP_Port      = $_POST['SMTP_Port'];
                                $Mail_Protocol  = $_POST['Mail_Protocol'];

                                $q_mail     = "UPDATE mst_email set SMTP_Host='$SMTP_Host', 
                                    SMTP_User='$SMTP_User',
                                    SMTP_Pass='$SMTP_Pass',
                                    SMTP_Port='$SMTP_Port',
                                    Mail_Protocol='$Mail_Protocol'
                                    WHERE email_id='$email_id'";

                                $upd_mail     = mysqli_query($konek, $q_mail);

                                if ($upd_mail) {
                                    echo '<script>alert("System Settings Email is Update")
                                location.replace("' . $base_url . '/index.php?p=system-setting")</script>';
                                } else {
                                    echo '<script>alert("System Settings Email Failed Update")</script>';
                                }
                            }

                            if (isset($_POST['u_home'])) {
                                $id                 = $_POST['id'];
                                $about_title        = $_POST['about_title'];
                                $about_text         = $_POST['about_text'];
                                $location_title     = $_POST['location_title'];
                                $location_text      = $_POST['location_text'];
                                $when_title         = $_POST['when_title'];
                                $when_text          = $_POST['when_text'];

                                $q_home    = "UPDATE homepage set about_title='$about_title', 
                                    about_text='$about_text',
                                    location_title='$location_title',
                                    location_text='$location_text',
                                    when_title='$when_title',
                                    when_text='$when_text'
                                    WHERE id='$id'";

                                //echo $q_home;

                                $upd_home     = mysqli_query($konek, $q_home);
                                if ($upd_home) {
                                    echo '<script>alert("System Settings Home Page is Update")
                                location.replace("' . $base_url . '/index.php?p=system-setting")</script>';
                                } else {
                                    echo '<script>alert("System Settings Home Page Failed Update")</script>';
                                }
                            }

                            if (isset($_POST['u_contact'])) {

                                $contact_id                 = $_POST['contact_id'];
                                $contact_title              = $_POST['contact_title'];
                                $contact_text               = $_POST['contact_text'];
                                $address_title              = $_POST['address_title'];
                                $address_text               = $_POST['address_text'];
                                $phone_title                = $_POST['phone_title'];
                                $phone_text                 = $_POST['phone_text'];
                                $email_title                = $_POST['email_title'];
                                $email_text                 = $_POST['email_text'];

                               

                                $q_contact   = "UPDATE contact_us set contact_title='$contact_title', 
                                    contact_text='$contact_text',
                                    address_title='$address_title',
                                    address_text='$address_text',
                                    phone_title='$phone_title',
                                    phone_text='$phone_text',
                                    email_title='$email_title',
                                    email_text='$email_text'
                                    WHERE contact_id='$contact_id'";

                                //echo $q_contact;

                                $upd_contact     = mysqli_query($konek, $q_contact);
                                if ($upd_contact) {
                                    echo '<script>alert("System Settings Contact Us is Update")
                                location.replace("' . $base_url . '/index.php?p=system-setting")</script>';
                                } else {
                                    echo '<script>alert("System Settings Contact Us Failed Update")</script>';
                                }
                            }

                            if (isset($_POST['u_sosmed'])) {
                                $socmed_id          = $_POST['socmed_id'];
                                $facebook           = $_POST['facebook'];
                                $twitter            = $_POST['twitter'];
                                $ig                 = $_POST['ig'];

                                $q_socmed     = "UPDATE social_media set facebook='$facebook', 
                                    twitter='$twitter',
                                    instagram='$ig'
                                    WHERE socmed_id='$socmed_id'";

                                    ///echo $q_socmed;

                                $upd_socmed     = mysqli_query($konek, $q_socmed);

                                if ($upd_socmed) {
                                    echo '<script>alert("System Settings Social Media is Update")
                                location.replace("' . $base_url . '/index.php?p=system-setting")</script>';
                                } else {
                                    echo '<script>alert("System Settings Social Media Failed Update")</script>';
                                }
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->


            <!-- /.box -->

            <!-- Input addon -->


        </div>


    <?php
}
?>