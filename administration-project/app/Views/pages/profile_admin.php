<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main profil-admin">
    <div class="container">
        <div class="col-md-12" style="display: inline-flex; flex-direction: column; align-items: flex-start; gap: 32px;">
            <div style="display: flex; width: 100%; align-items: center; gap: 24px;">
                <img src="/img/avatar-profile-photo.png" alt="">
                <div style="display: flex; padding-top: 32px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 20px; flex: 1 0 0;">
                    <div class="text-number">Olivia Rhye</div>
                    <div class="text-16">@olivia</div>
                </div>
            </div>

            <div class="form-input">
                <div class="col-md-6 left-input" style="display: flex; flex-direction: column; align-items: flex-s rt; gap: 32px; flex: 1 0 0;">
                    <div class="input-base">
                        <label for="" class="label">Nama Karyawan</label>
                        <div class="input-container">
                            <input class="input-field" type="text" placeholder="Masukan nama Lengkap">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Tanggal Lahir</label>
                        <div class="input-container">
                            <input class="input-field" type="date" placeholder="DD/MM/YYYY">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">No telp</label>
                        <div class="input-container">
                            <input class="input-field" type="text" placeholder="08xxxxxxxxxxxxxxx">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Email</label>
                        <div class="input-container">
                            <input class="input-field" type="email" placeholder="user@email.com">
                        </div>
                    </div>
                    <div class="input-base hiding-input">
                        <label for="" class="label">Username</label>
                        <div class="input-container">
                            <input class="input-field" type="text" placeholder="masukan username">
                        </div>
                    </div>
                    <div class="input-base hiding-input">
                        <label for="" class="label">Password</label>
                        <div class="input-container">
                            <input class="input-field" type="password" placeholder="min 8 digit">
                        </div>
                    </div>
                    <div class="input-base hiding-input">
                        <label for="" class="label">Masukan Ulang Password</label>
                        <div class="input-container">
                            <input class="input-field" type="password" placeholder="min 8 digit">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right-input">
                    <div class="input-base">
                        <label for="" class="label">Username</label>
                        <div class="input-container">
                            <input class="input-field" type="text" placeholder="masukan username">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Password</label>
                        <div class="input-container">
                            <input class="input-field" type="password" placeholder="min 8 digit">
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Masukan Ulang Password</label>
                        <div class="input-container">
                            <input class="input-field" type="password" placeholder="min 8 digit">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 16px;align-self: stretch;">
                    <button id="close" class="button-gray">Batal</button>
                    <button class="button-base">Simpan</button>
                </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>