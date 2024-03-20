<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main profil-admin">
            <form action="/savelaporan" method="POST" enctype="multipart/form-data" class="edit-laporan">
                <?php csrf_field(); ?>
                <h1>Edit Laporan</h1>
                <div class="form-input">
                    <div class="col-md-6 left-input" style="display: flex; flex-direction: column; align-items: flex-s rt; gap: 32px; flex: 1 0 0;"> 
                        <input type="hidden" name="id" value="<?= $result['id']; ?>">
                        <div class="input-base">
                            <label for="" class="label">Tanggal</label>
                            <div class="input-container">
                                <input class="input-field" type="date" name="tanggal" value="<?= $result['tanggal']; ?>">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Nama Tugas</label>
                            <div class="input-container">
                                <input class="input-field" name="nama_tugas" type="text" value="<?= $result['nama_tugas']; ?>">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Deskripsi</label>
                            <div class="input-container">
                                <input class="input-field" name="deskripsi" type="text" value="<?= $result['deskripsi']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 16px;align-self: stretch;">
                    <button class="button-base">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>