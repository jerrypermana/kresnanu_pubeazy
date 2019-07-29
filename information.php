<br>
<br>
<?php

$infoID         = $_GET['infoID'];
$info        = mysqli_query($konek, "SELECT * FROM home_information WHERE information_id='$infoID'");
$d_info         = mysqli_fetch_array($info);
$hitung         = mysqli_num_rows($info);


if ($hitung == 0) {
    echo '<script>alert("Pages is Not Found")
        location.replace("' . $base_url . '/url.php?p=home")</script>';
}



?>
<section id="speakers-details" class="wow fadeIn">
    <div class="container">
        <div class="section-header">
            <h2><?php echo $d_info['page_information']; ?></h2>
            <!-- <p>Praesentium ut qui possimus sapiente nulla.</p> -->
        </div>


            <div class="col-md-12">
                <div class="details">
                    
                    <?php echo $d_info['description']; ?>

                </div>
            </div>

        </div>
    </div>

</section>