<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
        <!-- <p style="margin: 20px 0px 40px 150px">Dashboard</p> -->
        <div class="container container-user">
            <div class="col-md-12">
            <div class="frame-gray">
                <div class="input-container" style="width: 75%;">
                    <i class="input-logo">
                        <img src="/img/search.svg" alt="">
                    </i>
                    <input class="input-field" type="text" placeholder="Search">
                </div>
                <div class="input-container">
                    <input class="input-field" type="date" placeholder="tanggal mulai">
                </div>
                <div class="input-container">
                    <input class="input-field" type="date" placeholder="tanggal selesai">
                </div>
                <!-- <button class="button-gray" style="width: fit-content;"><img src="/img/download-cloud.svg" alt="">download</button> -->
            </div>
            </div>
            <!-- TABLE -->
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card-table">
                        <div class="card-header">
                            <div class="text-header">
                                Daftar  Laporan<span class="span-info">100 Laporan</span>
                            </div>
                        </div>
                <div class="table">
                <table>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>01 Januari 2024</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td><i class='bx bx-show eye-show'></i></td>
                    <td><i class='bx bx-edit-alt'></i></td>
                    <td><i class='bx bx-trash'></i></td>
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
</main>
<?= $this->endSection(); ?>