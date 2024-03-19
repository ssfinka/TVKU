<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
        <!-- <p style="margin: 20px 0px 40px 150px">Dashboard</p> -->
        <div class="container">
            <div class="col-md-12">
                <div class="frame-gray">
                    <div class="input-container" style="width: 75%">
                        <i class="input-logo">
                            <img src="images/search.svg" alt="" />
                        </i>
                        <input class="input-field" type="text" placeholder="Search" />
                    </div>
                    <button class="button-gray" style="width: fit-content">
                        <img src="images/filter.svg" alt="" />More Filter
                    </button>
                    <button id="tambahLaporan" class="button-base">
                        <img src="images/plus.svg" alt="" />Tambah Pengguna
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
                                    <th>Tanggal Lahir</th>
                                    <th>Deskripsi</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
    
                                </tr>
                                <tr class="highlighted-row">
                                    <td>2</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
    
                                </tr>
                                <tr class="highlighted-row">
                                    <td>4</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
    
                                </tr>
                                <tr class="highlighted-row">
                                    <td>6</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
    
                                </tr>
                                <tr class="highlighted-row">
                                    <td>8</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
    
                                </tr>
                                <tr class="highlighted-row">
                                    <td>10</td>
                                    <td>01-01-2000</td>
                                    <td>username@email.com</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td><img src="images/eye.svg" alt="" /></td>
                                </tr>
                            </table>
                        </div>
                        <div class="pagination">
                            <button class="button-gray" style="width: fit-content">
                                <img src="images/arrow-left.svg" alt="" />Prev
                            </button>
                            <div style="display: flex; gap: 1px">
                                <button class="button-gray">1</button>
                                <button class="button-gray">2</button>
                                <button class="button-gray">3</button>
                                <button class="button-gray">4</button>
                                <button class="button-gray">5</button>
                            </div>
                            <button class="button-gray" style="width: fit-content">
                                <img src="images/arrow-right.svg" alt="" />Next
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
                <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 8px; flex: 1 0 0;">
                    <div class="text-18">Tambah Tugas</div>
                    <div class="text-14">Masukan pekerjaan dengan lengkap</div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px;">
                    <button id="close" class="button-gray">Batal</button>
                    <button class="button-base">Simpan</button>
                </div>
            </div>
            <div class="modal-content">
                <div class="input-base">
                    <label for="" class="label">Nama Tugas</label>
                    <div class="input-container container-label">
                        <input class="input-field" type="text" placeholder="Masukkan nama tugas">
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Tanggal</label>
                    <div class="input-container container-label">
                        <input class="input-field" type="datetime-local" placeholder="Masukan jadwal">
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Deskripsi</label>
                    <div class="">
                        <textarea name="" id="" cols="50" rows="10"></textarea>
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Status Pekerjaan</label>
                    <div class="input-container container-label">
                        <select name="status-pekerjaan" id="status" class="input-field">
                            <option value="-">--Pilih Status--</option>
                            <option value="belum dikerjakan">Belum Dikerjakan</option>
                            <option value="dalam proses">Dalam Proses</option>
                            <option value="selesai">Selesai</option>
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