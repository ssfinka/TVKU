<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
    <!-- <p style="margin: 20px 0px 40px 150px">Dashboard</p> -->
    <div class="container">
        <div class="col-md-12">
            <div class="frame-gray">
                <div class="input-container" style="width: 75%">
                    <i class="input-logo">
                        <img src="/img/search.svg" alt="" />
                    </i>
                    <input class="input-field" type="text" placeholder="Search" />
                </div>
                <button class="button-gray" style="width: fit-content">
                    <img src="/img/filter.svg" alt="" />More Filter
                </button>
                <button id="tambahLaporan" class="button-base">
                    <img src="/img/plus.svg" alt="" />Tambah Pengguna
                </button>
            </div>
        </div>
        <!-- TABLE -->
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card-table">
                    <div class="card-header">
                        <div class="text-header">
                            Anggota Tim <span class="span-info">100 Anggota</span>
                        </div>
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>No. Telp</th>
                                <th>Peran</th>
                                <th></th>
                            </tr>
                            <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($result as $rs) : ?>
                                <td><?= $i++; ?></td>
                                <td>
                                    <div class="table-text-wrapper">
                                        <img class="table-image" src="/img/<?= $rs['image']; ?>" alt="" />
                                        <?= $rs['nama']; ?>
                                    </div>
                                </td>
                                <td><?= $rs['tanggal_lahir']; ?></td>
                                <td><?= $rs['email']; ?></td>
                                <td><?= $rs['no_telp']; ?></td>
                                <td><?= $rs['peran']; ?></td>
                                <td><img src="/img/eye.svg" alt="" /></td>                         
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="pagination">
                        <button class="button-gray" style="width: fit-content">
                            <img src="/img/arrow-left.svg" alt="" />Prev
                        </button>
                        <div style="display: flex; gap: 1px">
                            <button class="button-gray">1</button>
                            <button class="button-gray">2</button>
                            <button class="button-gray">3</button>
                            <button class="button-gray">4</button>
                            <button class="button-gray">5</button>
                        </div>
                        <button class="button-gray" style="width: fit-content">
                            <img src="/img/arrow-right.svg" alt="" />Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TAMBAH LAPORAN -->

    <div id="modal" class="modal">
        <div class="modal-wrap">
            <div class="modal-header">
                <div style="
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                flex: 1 0 0;
              ">
                    <div class="text-18">Tambah Pengguna</div>
                    <div class="text-14">
                        Masukan data laporan pekerjaan dengan lengkap
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px">
                    <button id="close" class="button-gray">Batal</button>
                    <button class="button-base">Simpan</button>
                </div>
            </div>
            <div class="modal-content">
                <div class="input-base">
                    <label for="" class="label">Nama Karyawan</label>
                    <div class="input-container">
                        <input class="input-field" type="text" placeholder="Masukan nama Lenkap" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Tanggal Lahir</label>
                    <div class="input-container">
                        <input class="input-field" type="date" placeholder="DD/MM/YYYY" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Username</label>
                    <div class="input-container">
                        <input class="input-field" type="text" placeholder="DD/MM/YYYY" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">No telp</label>
                    <div class="input-container">
                        <input class="input-field" type="text" placeholder="08xxxxxxxxxxxxxxx" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Email</label>
                    <div class="input-container">
                        <input class="input-field" type="email" placeholder="user@email.com" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Peran</label>
                    <div class="input-container">
                        <select name="status-pekerjaan" id="status" class="input-field">
                            <option value="-">--Pilih Peran--</option>
                            <option value="admin">Admin</option>
                            <option value="karyawan">Karyawan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Get the modal
    var modal = document.getElementById('modal');

    // Get the button that opens the modal
    var btn = document.getElementById('tambahLaporan');

    // Get the <span> element that closes the modal
    var batal = document.getElementById('close');

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = 'block';
    };

    // When the user clicks on <span> (x), close the modal
    batal.onclick = function() {
        modal.style.display = 'none';
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
</script>
<?= $this->endSection(); ?>