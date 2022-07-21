<?php
$link = mysqli_query($conn, "SELECT * FROM sosialmedia ");
$row = mysqli_fetch_assoc($link);
?>
<!-- footer -->

<div class="container my-">

    <footer class="text-center text-lg-start border border-black mt-xl-5 pt-4 mt-5">
        <!-- Grid container -->
        <div class="container p-4 ">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-center">
                    <h5 class="mb-4 fw-bold" >GearKu.</h5>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-center">
                    <h5 class="text-uppercase mb-4 fw-bold">Toko Kami</h5>

                    <p>
                        Gearku merupakan toko yang menjual periferal gaming dari berbagai brand.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-center">
                    <h5 class="text-uppercase mb-4 fw-bold">Mitra Kami</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p style="cursor: pointer;">Razer</p>
                            <p style="cursor: pointer;">Logitech</p>
                            <p style="cursor: pointer;">Fantech</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-center">
                    <h5 class="text-uppercase mb-4 fw-bold">Sosial Media</h5>
                    <ul class="list-unstyled">
                        <li style="font-size: 25px; ">
                            <a href="<?= $row['whatsapp']?>" target="_blank" style="color: black">
                                <p style="cursor: pointer;"><i class="fa-brands fa-whatsapp"></i></p>
                            </a>

                            <a href="<?= $row['facebook']?>" target="_blank" style="color: black">
                            <p style="cursor: pointer;"><i class="fa-brands fa-facebook-f"></i></p>
                            </a>
                            <a href="<?= $row['instagram']?>" target="_blank" style="color: black">
                            <p style="cursor: pointer;"><i class="fa-brands fa-instagram"></i></p>
                            </a>
                        </li>
                    </ul>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 border-top border-white">
            © 2022 Copyright: GearKu.
        </div>
        <!-- Copyright -->
    </footer>

</div>