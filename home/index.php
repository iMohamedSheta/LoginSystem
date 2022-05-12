<?php

define('TITLE', "Home");
include '../assets/layouts/header.php';


?>


<main role="main" class="container" dir="rtl">

    <div class="row" >
        <div class="col-sm-3">

            <?php include('../assets/layouts/profile-card.php'); ?>

        </div>
        <div class="col-sm-9" >

            <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-purple rounded box-shadow" >
                <img class="mr-3" src="../logo.jpg" style="border-radius: 25px; margin:0% 1% ;" alt="" width="55" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">مرحبا, <?php echo $_SESSION['username']; ?> عيد فطر مبارك.</h6>
                    <small>اخر تسجيل دخول <?php echo date("m-d-Y", strtotime($_SESSION['last_login_at'])); ?></small>
                </div>
            </div>

            <div class="my-3 p-3 bg-white rounded box-shadow" >
                <h6 class="mb-0">[ اخر تحديثات جامعة مطروح ]</h6>
                <sub class="text-muted border-bottom border-gray pb-2 mb-0" >[ اخر الاخبار لجامعة مطروح - كلية التربية النوعية قسم تكنولوجيا التعليم ]</sub>

                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">كلية التربية النوعية</strong>
                       امتحان العملي لمادة تقنيات الويب نظام تسجيل دخول وخروج وتسجيل بيانات كامل.<br>
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">كلية التربية النوعية - قسم تكنولوجيا التعليم</strong>
                        الامتحانات في معادها في <br>
                       <b> 2022/5/23</b>
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">الموقع </strong>
                        الموقع مصمم من اكواد بوتستراب تم تصميمها واستخدمها من قبل ولكن تم التعديل عليها لتناسب الغرض. <br>
                       
                    </p>
    
        </div>
    </div>
</main>




    <?php

    include '../assets/layouts/footer.php'

    ?>