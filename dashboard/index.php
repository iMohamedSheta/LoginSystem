<?php

define('TITLE', "Home");
include '../assets/layouts/header.php';

?>


<main role="main" class="container" dir="rtl">

    <div class="row">
        <div class="col-sm-3">

            <?php include('../assets/layouts/profile-card.php'); ?>

        </div>
        <div class="col-sm-9">

            <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-purple rounded box-shadow">
                <img class="mr-3" src="..//logo.jpg" style="border-radius: 25px;" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100" style="margin: 4px;">مرحبا طلاب جامعة مطروح كلية التربية النوعية !</h6>
                    <small>صباح الفل</small>
                </div>
      
                

                
            </div>

        </div>
    </div>
</main>




    <?php

    include '../assets/layouts/footer.php'

    ?>