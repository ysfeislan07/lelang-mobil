            <main class="content content-main">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><?= $detailLelang['model'] ?></h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
                                <div class="row p-4">
                                    <div class="col-sm-5">
                                        <!-- <div class="card-header">
                                            <h5 class="card-title mb-0">Empty card</h5>
                                        </div> -->
                                        <img  class="card-img-top rounded"src="<?=$detailLelang['gambar']  ?>"  style="width: 450px; height: 280px; max-width: 450px; max-height: 280px;" alt="">
                                    </div>
                                    <div class="col-sm-5">
                                        <h1 class="text-"><b><?= $detailLelang['merk'] ?> <?= $detailLelang['model'] ?></b> (<?= $detailLelang['tahun_dibuat'] ?>)</h1>
                                        <h4 class="text-black"><b>Harga Lelang : Rp. <?= number_format($detailLelang['harga_lelang']) ?></b> <small>OTR</small></h4>
                                        <h3 class="text-muted"><?= $detailLelang['tipe'] ?></h3>
                                        <h4 class="mt-4"><span class="text-muted">Kategori : </span><?= $detailLelang['kategori'] ?></h4>
                                        <h4 class=""><span class="text-muted">Odometer : </span><?= number_format($detailLelang['odometer']) ?> KM</h4>
                                        <h4 class=""><span class="text-muted">Wilayah : </span><?= $detailLelang['region'] ?></h4>
                                        <div class="button mt-5">
                                            <a href="<?= base_url() ?>lelang/ajuanTawaran/<?= $detailLelang['id'] ?>" class="btn btn-primary">AJUKAN TAWARAN</a>
                                            <a href="<?= base_url('lelang') ?>" class="btn btn-secondary ms-2">KEMBALI</a>
                                            <?php if($this->session->userdata('akses') == 1) : ?>
                                            <a href="<?= base_url() ?>admin/lihatPelelang/<?= $detailLelang['id'] ?>" class="btn btn-warning ms-2">SHOW</a>
                                            <?php if($detailLelang['sesi_lelang'] == 1) : ?>
                                            <a href="<?= base_url() ?>lelang/kembalikanSesi/<?= $detailLelang['id'] ?>" onclick="return confirm('Anda ingin mengembalikan sesi lelang?')" class="btn btn-success lelang-dikembalikan ms-2"><i data-feather="check-square"></i></a>
                                            <?php else : ?>
                                            <a href="<?= base_url() ?>lelang/akhiriSesi/<?= $detailLelang['id'] ?>" onclick="return confirm('Anda ingin mengakhiri sesi lelang?')" class="btn btn-info lelang-diakhiri ms-2"><i data-feather="clock"></i></a>
                                            <?php endif; ?>
                                            <?php else : ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header ms-3">
                                    <h3>Spesifikasi Utama</h3>
                                </div>
                                <div class="row ms-2">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="">
                                            <div class="card-body">
                                                <h5 class="text-muted">Jenis Transmisi</h5>
                                                <h4 class=""><?= $detailLelang['transmisi'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="">
                                            <div class="card-body">
                                                <h5 class="text-muted">Tenaga & Torsi</h5>
                                                <h4 class=""><?= $detailLelang['tenaga'] ?> HP & <?= $detailLelang['torsi'] ?> Nm</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="">
                                            <div class="card-body">
                                                <h5 class="text-muted">Kapasitas CC</h5>
                                                <h4 class=""><?= $detailLelang['kapasitas_cc'] ?> cc</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="">
                                            <div class="card-body">
                                                <h5 class="text-muted">Jenis Bahan Bakar</h5>
                                                <h4 class=""><?= $detailLelang['jenis_bbm'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-header ms-5">
                            <h3>Spesifikasi Lain</h3>
                        </div>
                        <div class="col-6">
                            <div class="card pt-3 pb-2">
                                <div class="row text-start ms-4">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <h4 class="text-muted">Mesin</h4>
                                        </div>
                                        <div class="col-sm-10 text-end">
                                            <h4 class="card-text"><?= $detailLelang['jenis_mesin'] ?></h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Katup</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['katup'] ?></h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Cylinder</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['cilinder'] ?> Cylinder</h4>                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card pt-3 pb-2">
                                <div class="row text-start ms-4">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Bahan Bakar</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['jenis_bbm'] ?></h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Tenaga</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['tenaga'] ?> HP</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Kapasitas CC</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['kapasitas_cc'] ?> cc</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Torsi</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['torsi'] ?> Nm</h4>                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card pt-3 pb-2">
                                <div class="row text-start ms-4">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Jenis Transmisi</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['transmisi'] ?></h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Girboks</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['girboks'] ?></h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Jenis Pengerak</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['jenis_penggerak'] ?></h4>                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card pt-3 pb-2">
                                <div class="row text-start ms-4">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Tangki</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['kapasitas_tangki'] ?> L</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Panjang</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['panjang'] ?> MM</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Lebar</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['lebar'] ?> MM</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Tinggi</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['tinggi'] ?> MM</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Ground C</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['ground'] ?> MM</h4>                                                       
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="text-muted">Kursi</h4>
                                        </div>
                                        <div class="col-sm-3 text-end">
                                            <h4 class="card-text"><?= $detailLelang['kapasitas_duduk'] ?></h4>                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>

                    <!-- <div class="row">
                        <?php foreach($dataLelang as $dl) : ?>
                            <div class="col-12 col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?= $dl['gambar'] ?>" style="width: 274px; height: 160px; max-width: 274px; max-height: 160px;" alt="Unsplash">
                                    <div class="card-header">
                                        <h4 class="mb-0"><b><?= $dl['model'] ?> <?= $dl['tahun_dibuat'] ?> </b></h4>
                                        <p class="card-text">Mulai dari Rp. <?= number_format($dl['harga_lelang']) ?></p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Ajukan lelang <?= $dl['model'] ?> hingga kalian mendapatkannya.</p>
                                        <a href="<?= base_url() ?>lelang/detailLelang/<?= $dl['id'] ?>" class="card-link btn btn-secondary">Cek Lelang</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div> -->

				</div>
			</main>