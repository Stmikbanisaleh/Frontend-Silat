<!--=== Container Part ===-->
<div class="container margin-bottom-40 margin-top-20">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-10">
            <h2 class="title-v4">Berita</h2>
            <?php foreach ($getBerita as $gb) { ?>
                <div class="row margin-top-20">
                    <div class="col-md-2">
                        <a href="<?= base_url() ?>berita/read/<?= $gb['judul_seo'] ?>">
                            <?php if ($start) { ?>
                                <img height="140px" width="140px" class="img-thumbnail" src="../../../assets/img_berita/<?= $gb['gambar']; ?>">
                            <?php } else { ?>
                                <img height="140px" width="140px" class="img-thumbnail" src="../../assets/img_berita/<?= $gb['gambar']; ?>">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-md-10 blog-thumb-v3">
                        <small><?= date('d-m-Y', strtotime($gb['tanggal'])); ?></small>
                        <br>
                        <small><i><?= $gb['username'];  ?></i></small>
                        <h3><b><a href="<?= base_url() ?>berita/read/<?= $gb['judul_seo'] ?>"><?= $gb['judul']; ?></a></b></h3>
                        <h3><?= $gb['sub_judul']; ?></h3>
                    </div>
                </div>
            <?php } ?>
            <?= $this->pagination->create_links() ?>
        </div>
        <!-- End Main Content -->
    </div>
</div>
<!--=== End Container Part ===-->