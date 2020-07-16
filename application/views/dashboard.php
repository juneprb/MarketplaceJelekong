<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="max-height: 450px; max-width: 1600px;">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slide/first.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slide/profileDesa.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slide/pelukis.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h4 class="text-center font-weight-bold m-4 text-dark mt-2 mb-2">PRODUK TERBARU</h4>
    <div class="row text-center mt-4">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-4 mb-4" style="width: 18rem; text-align: center; overflow: hidden; padding: 0;">
                <img style="max-height: 200px; max-width: 300px;" src="<?php echo base_url() . '/produk/' . $brg->gambar ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-dark" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> <?php echo $brg->nama_brg ?> </h5>
                    <span class="ket ml-2"><?php echo $brg->keterangan ?></span><br>
                    <span class="badge badge-success">Rp. <?php echo $brg->harga ?></span>
                    <br>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt mb-2"></i>
                    <br>
                    <a href="#" class="btn btn-primary ml-2">Detail</a>
                    <a href="#" class="btn btn-danger ml-2">Beli</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>