<!--=== Container Part ===-->
<div class="container margin-bottom-40 margin-top-20">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-9">
            <h2 class="title-v4">&nbsp;</h2>
            <?php foreach ($getBeritaDetail as $gbd) { ?>
            <!-- Blog Grid -->
            <div class="blog-grid margin-bottom-30">
                <h2 class="blog-grid-title-lg">
                    <h2><?= $gbd['judul']; ?></h2>

                </h2>
                <div class="overflow-h margin-bottom-10">
                    <ul class="blog-grid-info pull-left">
                        <li><?= $gbd['username']; ?></li>
                        <li><?= date('d-m-Y', strtotime($gbd['tanggal'])); ?></li>
                    </ul>
                </div>
                <img class="img-responsive" src="../../../assets/img_berita/<?= $gbd['gambar']; ?>" alt="">
                <?= $gbd['isi_berita']; ?>
            </div>
            <!-- End Blog Grid Tagds -->
            <?php } ?>

        </div>
        <div class="col-md-3">
            <h2 class="title-v4">Berita Terbaru</h2>
            <?php foreach ($getBeritaList as $br) : ?>
            <div class="blog-thumb-v3">
                <small><?= date('d-m-Y', strtotime($br['tanggal'])); ?></small>
                <h3><a href="<?= base_url() ?>berita/read/<?= $br['judul_seo'] ?>"><?= $br['judul']; ?></a></h3>
            </div>
            <hr class="hr-xs">
            <?php endforeach; ?>
        </div>
        <!-- End Main Content -->

    </div>
</div>
<!--=== End Container Part ===-->