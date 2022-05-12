


<div class='card card-profile text-center shadow-lg p-3 mb-5 bg-white rounded box-shadow bg-white ' >

    <?php if (isset($_SESSION['auth'])) { ?>

    <img alt='' class='card-img-top card-user-cover' src='..//logo.jpg'>
    <div class='card-block'>
        <a href='../profile'>
            <img src='../assets/uploads/users/<?php echo $_SESSION['profile_image']; ?>' class='card-img-profile'>
        </a>
        <a href="../profile-edit">
            <i class="fa fa-pencil-alt fa-1x edit-profile" aria-hidden="true"></i>
            <!-- <i class="fa fa-female"></i> -->
        </a>
        <h4 class='card-title'>
            <?php echo $_SESSION['username']; ?>
            <small class="text-muted">
                <?php echo $_SESSION['email']; ?>
            </small>
            <small class="text-muted mt-2">
                <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>
            </small>
            <small class="text-muted mt-4">
                <?php echo $_SESSION['headline']; ?>
            </small>
        </h4>
    </div>
    
    <?php } else { ?>

    <img alt='' class='card-img-top card-user-cover' src='..//logo.jpg' >
    <div class='card-block'>
            <img src='..//logo.jpg' class='card-img-profile'>
        </a>
        <h5  class='card-title'>
            انت غير مسجل
            <small class="text-muted">
                <a href="mailto:mohamed15.sheta15@gmail.com">تواصل معانا لمشاكل التسجيل</a>    
            </small>
            <br>
            <small class="text-muted">جامعة مطروح - كلية التربية النوعية</small>
        </h5>
    </div>

    <?php } ?>

</div>