
<?php if (isset($_SESSION['auth'])) { ?>

</body>

    <footer id="myFooter" dir="rtl" style="height:35%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo">
                        <a href="../home/" target="_blank"> 
                            <img src="..//logo.jpg" alt="في صورة المفروض هنا" style="border-radius: 50px;" width="200" height="200" >
                        </a>
                    </h2>
                </div>
                   <div class="col-sm-2">
                    <h5>القائمة </h5>
                    <ul>
                        <li style="margin: 1%;"><a href="../home/" target="_blank">الصفحة الرئيسية</a></li>
                        <li style="margin: 1%;"><a href="../dashboard/" target="_blank">وحدة التحكم</a></li>
                        <li style="margin: 1%;"><a href="../profile/" target="_blank">الصفحة الشخصية</a></li>
                        <li style="margin: 1%;"><a href="../profile-edit/" target="_blank">تعديل البيانات </a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>سجل معانا</h5>
                    <ul>
                        <li ><a href="../welcome/" target="_blank">مرحبا</a></li>
                        <li><a href="../login/" target="_blank">تسجيل الدخول</a></li>
                        <li><a href="../register/" target="_blank">إنشاء حساب</a></li>
                    </ul>
                </div>
             
 
        </div>
 
    </footer>

<?php } ?>


<script src="../assets/vendor/js/jquery-3.4.1.min.js"></script>
<script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<?php if(isset($_SESSION['auth'])) { ?> 

<script src="../assets/js/check_inactive.js"></script>
    
<?php } ?>


</body>

</html>

<?php

if (isset($_SESSION['ERRORS']))
    $_SESSION['ERRORS'] = NULL;
if (isset($_SESSION['STATUS']))
    $_SESSION['STATUS'] = NULL;

?>