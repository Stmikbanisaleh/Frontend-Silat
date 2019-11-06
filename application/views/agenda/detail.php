<!--=== Container Part ===-->
<div class="container margin-bottom-40 margin-top-20">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-9">
            <!-- Blog Carousel Heading -->
            <div class="blog-cars-heading">
                <h2></h2>
            </div>
            <!-- End Blog Carousel Heading -->

            <!-- Blog Carousel -->
            <div class="blog-carousel margin-bottom-50">
                <!-- Blog Grid -->
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 sm-margin-bottom-20">
                            <img class="img-responsive" src="assets/img/blog/img6.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <div class="blog-grid">
                                <h3><a href="blog_single.html">New winter fashion style</a></h3>
                                <ul class="blog-grid-info">
                                    <li>Evan Bartlett</li>
                                    <li>Mar 6, 2015</li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                </ul>
                                <p>Pellentesque turpis lacus, tempus et fermentum vitae, dignissim ornare purus. Nulla facilisi. Suspendisse potenti. Aenean vitae lacus lobortis lacus finibus volutpat eu nec sem. Sed ultrices velit vitae tortor posuere ultrices. Aliquam laoreet lorem et vulputate porta.</p>
                                <a class="r-more" href="blog_single.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Grid -->

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