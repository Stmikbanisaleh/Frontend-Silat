<!--=== Container Part ===-->
<div class="container margin-bottom-40">
    <div class="row margin-top-20">
        <div class="col-md-3">
            <!-- Blog Thumb v3 -->
            <div>
                <h2 class="title-v4">Agenda</h2>
                <?= $this->session->flashdata('message'); ?>
                <?php foreach ($agenda as $ag) : ?>
                    <div class="blog-thumb-v3">
                        <small><?= date('d-m-Y', strtotime($ag['tanggal_awal'])); ?></small>
                        <h3><a href="<?= base_url('agenda'); ?>"><?= $ag['nama_agenda']; ?></a></h3>

                    </div>
                    <hr class="hr-xs">
                <?php endforeach; ?>
                <div class="text-right">
                    <a href="<?= base_url('agenda'); ?>">Lihat Selengkapnya</a>
                </div>

            </div>
            <!-- End Blog Thumb v3 -->

            <div>
                <h2 class="title-v4">Program</h2>
                <p>Pengembangan standar penerbangan dan antariksa merupakan tahapan standardisasi yang
                    terdiri dari penyusunan rancangan standar, perumusan serta penetapan standar yang dilaksanakan oleh
                    Pusat Teknologi Informasi dan Standar Penerbangan dan Antariksa.</p>
            </div>

        </div>

        <!-- Slider -->
        <div class="col-md-6" style="height:100%;">
            <h2 class=" title-v4">&nbsp;</h2>
            <div id="myCarousel" class="carousel slide carousel-v1" ">
                <div class=" carousel-inner">
                <div class="item active">
                    <img src="../assets/img_kegiatan/<?= $ksispan['gambar']; ?>" alt="">
                    <div class="carousel-caption">
                        <p><?= $ksispan['nama_kegiatan']; ?></p>
                        <p><?= $ksispan['tempat']; ?> , <?= date('d-m-Y', strtotime($ksispan['tanggal'])); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <h2 class="title-v4">Berita Terbaru</h2>
        <?php foreach ($berita as $br) : ?>
            <div class="blog-thumb-v3">
                <small><?= date('d-m-Y', strtotime($br['tanggal'])); ?></small>
                <h3><a href="<?= base_url() ?>berita/read/<?= $br['judul_seo'] ?>"><?= $br['judul']; ?></a></h3>
            </div>
            <hr class="hr-xs">
        <?php endforeach; ?>
        <a href="<?= base_url('berita') . '/'; ?>">Lihat Selengkapnya</a>
    </div>
</div>
</div>
<!--=== End Container Part ===-->