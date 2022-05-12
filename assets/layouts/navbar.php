    <?php if (!isset($_SESSION['auth'])) { ?>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-2">

        <?php } else { ?>

            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm p-2">


            <?php } ?>


            <div class="container" dir="rtl">
                <a class="navbar-brand" href="../home">

                    <?php if (!isset($_SESSION['auth'])) { ?>
                        <img src="..//logo.jpg" style="border-radius: 23px; margin: 1px;" alt="" width="50" height="50" class="mr-3">
                    <?php } else { ?>
                        <img src="..//logo.jpg" style="border-radius: 23px; margin:1%;"  alt="" width="50" height="50" class="mr-3">
                    <?php } ?>

                    <?php echo APP_NAME; ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="../welcome">مرحبا</a>
                        </li>

                        <?php if (!isset($_SESSION['auth'])) { ?>

                            <li class="nav-item">
                                <a class="nav-link" href="mailto:mohamed15.sheta15@gmail.com">تواصل معانا</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="../login">تسجيل الدخول</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../register">إنشاء حساب</a>
                            </li>

                        <?php } else { ?>

                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard">وحدة التحكم</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../home">الصفحة الرئيسية</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="mailto:mohamed15.sheta15@gmail.com">تواصل معانا</a>
                            </li>

                            <div class="dropdown" >
                                <button class="btn btn-dark dropdown-toggle" type="button" id="imgdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="navbar-img" src="../assets/uploads/users/<?php echo $_SESSION['profile_image'] ?>">
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="imgdropdown">
                                    <a class="dropdown-item text-muted" href="../profile"><i style="margin: 3%;" class="fa fa-user pr-2"></i>الصفحة الشخصية</a>
                                    <a class="dropdown-item text-muted" href="../profile-edit"><i style="margin: 1%;" class="fa fa-pencil-alt pr-2"></i> تعديل البيانات </a>
                                    <a class="dropdown-item text-muted" href="../logout"><i class="fa fa-running pr-2"></i> تسجيل الخروج</a>
                                </div>
                            </div>

                        <?php } ?>





                    </ul>
                </div>
            </div>
            </nav>