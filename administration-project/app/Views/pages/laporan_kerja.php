<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<main class="main">
    <div class="container">
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
                        <div class="text-header">Data Laporan <span class="span-info">100 Laporan</span></div>
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Nama Tugas</th>
                                <th>Deskripsi</th>
                                <th class="button-crud"></th>
                            </tr>
                            <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($result as $rs) : ?>
                                    <td><?= $i++; ?></td>
                                    <td><?= $rs['tanggal']; ?></td>
                                    <td>
                                        <div class="table-text-wrapper">
                                            <img class="table-image" src="/img/<?= $rs['image']; ?>" alt="">
                                            <?= $rs['nama']; ?>
                                        </div>
                                    </td>
                                    <td><?= $rs['nama_tugas'] . ' #' . $i-1; ?></td>
                                    <td><?= $rs['deskripsi']; ?></td>
                                    <td style="width: 100px;">
                                        <img src="/img/eye.svg" alt="">
                                        <img src="/img/edit-2.svg" alt="">
                                        <a href="<?= base_url() . 'hapus/' . $rs['id']; ?>"><img src="/img/trash.svg" alt=""></a>
                                    </td>
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
</main>
<?= $this->endSection(); ?>