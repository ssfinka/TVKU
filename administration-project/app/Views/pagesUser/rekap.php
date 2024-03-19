<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
<div class="container">
        <div class="records records2">
            <div class="record-header">
                <div class="record-header">
                    <button class="filter">
                        <p>Download</p>
                        <i class='bx bx-cloud-download'></i>
                    </button>
                    <div class="input-container">
                        <input class="input-field" type="date" placeholder="tanggal mulai">
                    </div>
                    <div class="input-container">
                        <input class="input-field" type="date" placeholder="tanggal mulai">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page">
            <div class="title">
                <h5>Daftar Laporan</h5>
                <p>100 laporan</p>
            </div>
            <table>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th style="text-align: center;">Deskripsi</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>01 Januari 2024</td>
                    <td style="text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td style="background: #fff;">2</td>
                    <td style="background: #fff;">01 Januari 2024</td>
                    <td style="background: #fff; text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td style="background: #fff;"><i class='bx bx-show eye-show'></i></td>
                    <td style="background: #fff;"><i class='bx bx-edit-alt'></i></td>
                    <td style="background: #fff;"><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>01 Januari 2024</td>
                    <td style="text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td style="background: #fff;">4</td>
                    <td style="background: #fff;">01 Januari 2024</td>
                    <td style="background: #fff; text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td style="background: #fff;"><i class='bx bx-show eye-show'></i></td>
                    <td style="background: #fff;"><i class='bx bx-edit-alt'></i></td>
                    <td style="background: #fff;"><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>01 Januari 2024</td>
                    <td style="text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td style="background: #fff;">6</td>
                    <td style="background: #fff;">01 Januari 2024</td>
                    <td style="background: #fff; text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td style="background: #fff;"><i class='bx bx-show eye-show'></i></td>
                    <td style="background: #fff;"><i class='bx bx-edit-alt'></i></td>
                    <td style="background: #fff;"><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>01 Januari 2024</td>
                    <td style="text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td style="background: #fff;">8</td>
                    <td style="background: #fff;">01 Januari 2024</td>
                    <td style="background: #fff; text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td style="background: #fff;"><i class='bx bx-show eye-show'></i></td>
                    <td style="background: #fff;"><i class='bx bx-edit-alt'></i></td>
                    <td style="background: #fff;"><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>01 Januari 2024</td>
                    <td style="text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td style="background: #fff;">10</td>
                    <td style="background: #fff;">01 Januari 2024</td>
                    <td style="background: #fff; text-align: center;">Lorem ipsum dolor sit amet consectetur</td>
                    <td style="background: #fff;"><i class='bx bx-show eye-show'></i></td>
                    <td style="background: #fff;"><i class='bx bx-edit-alt'></i></td>
                    <td style="background: #fff;"><i class='bx bx-trash'></i></td>
                  </tr>
            </table>
            <div class="pagination">
                <button class="button-gray" style="width: fit-content;"><i class='bx bx-left-arrow-alt' ></i>Prev</button>
                <div style="display: flex; gap: 4px;">
                    <button class="button-gray">1</button>
                    <button class="button-gray">2</button>
                    <button class="button-gray">3</button>
                    <button class="button-gray">4</button>
                    <button class="button-gray">5</button>
                </div>
                <button class="button-gray" style="width: fit-content;">Next<i class='bx bx-right-arrow-alt'></i></button>
            </div>
        </div>
</div>
</main>
<?= $this->endSection(); ?>