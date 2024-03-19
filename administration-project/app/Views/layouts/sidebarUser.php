<input type="checkbox" id="check">
<!--header area start-->
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <img src="/img/tvku.png" class="mobile_profile_image" alt="">
    </div>
    <div class="right_area">
        <img src="/img/avatar-profile-photo.png" class="logout_btn" alt="">
        <!-- <a href="#" class="logout_btn"><i class="fas fa-sign-out-alt"></i> Logout</a> -->
    </div>
</header>
<!--header area end-->
<!--mobile navigation bar start-->
<div class="mobile_nav">
    <div class="nav_bar">
        <div class="input-container container-mobile">
                <i class="input-logo">
                    <img src="img/search.svg" alt="" />
                </i>
                <input class="input-field" type="text" placeholder="Search" />
            </div>
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="<?= base_url(); ?>/dashboard"><i class='bx bx-bar-chart'></i><span>Dashboard</span></a>
            <a href="<?= base_url(); ?>/tugas"><i class='bx bx-layer'></i><span>Tugas</span></a>
                    <a href="<?= base_url(); ?>/rekap"><i class='bx bx-file'></i><span>Rekap</span></a>
                    <a href="<?= base_url(); ?>/profile"><i class='bx bx-cog'></i><span>Pengaturan</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <div class="input-container container-search">
                <i class="input-logo">
                    <img src="img/search.svg" alt="" />
                </i>
                <input class="input-field" type="text" placeholder="Search" />
            </div>
        </div>
        <a href="<?= base_url(); ?>/dashboard"><i class='bx bx-bar-chart'></i><span>Dashboard</span></a>
        <br>
        <span class="judul">Kelola</span>
        <a href="<?= base_url(); ?>/tugas"><i class='bx bx-layer'></i><span>Tugas</span></a>
        <a href="<?= base_url(); ?>/rekap"><i class='bx bx-file'></i><span>Rekap</span></a>
        <a href="<?= base_url(); ?>/profile"><i class='bx bx-cog'></i><span>Pengaturan</span></a>
        <br><br><br><br>
        <a href="#"><i class='bx bx-log-in'></i><span>Logout</span></a>\
    
</div>
<!--sidebar end-->

<div class="content">
    <?= $this->renderSection('content'); ?>
</div>