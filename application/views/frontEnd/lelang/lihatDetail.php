            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Detail Ajuan</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Detail Mobil</h4>
                                </div>
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="<?= $dataAjuan['gambar'] ?>" style="width: 280px;" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <h3 class="mb-0"><b><?= $dataAjuan['merk'] ?> <?= $dataAjuan['model'] ?></b> (<?= $dataAjuan['tahun_dibuat'] ?>)</h3>
                                            <h4 class="mb-0"><?= $dataAjuan['tipe'] ?></h4>
                                            <h4 class="mt-3 mb-0"><span class="text-muted">Kategori : </span><?= $dataAjuan['kategori'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Transmisi : </span><?= $dataAjuan['transmisi'] ?> <?= $dataAjuan['girboks'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Mesin : </span><?= $dataAjuan['jenis_mesin'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Penggerak : </span><?= $dataAjuan['jenis_penggerak'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Bahan Bakar : </span><?= $dataAjuan['jenis_bbm'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Kapasitas CC : </span><?= $dataAjuan['kapasitas_cc'] ?> CC</h4>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="col-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Detail Pelelang</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url() ?>assets/static/img/photos/default.jpg" style="width: 115px;" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <h4 class="mb-0 text-danger"><span class="text-muted">ID Lelang : </span><?= $dataAjuan['id_lelang'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Nama Pelelang : </span><?= $dataAjuan['nama_pengguna'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Email Pelelang : </span><?= $dataAjuan['email_pengguna'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">Email 2 : </span><?= $dataAjuan['email2'] ?></h4>
                                            <h4 class="mb-0"><span class="text-muted">No. Handphone : </span><?= $dataAjuan['telp'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Detail Ajuan</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="mb-0 text-muted">Harga Lelang : <span class="h3">Rp. <?= number_format($dataAjuan['harga_lelang']) ?></span></h4>
                                    <h4 class="mb-0 text-muted">Harga Baru : <span class="h3">Rp. <?= number_format($dataAjuan['harga_baru']) ?></span></h4>
                                    <h4 class="mb-0 text-muted">Harga Ajuan : <span class="h3">Rp. <?= number_format($dataAjuan['jumlah_lelang']) ?></span></h4>
                                    <h4 class="mb-0"><span class="text-muted">Diajukan pada : </span><?= $dataAjuan['dilelang_pada'] ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-8 offset-2">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title mb-0">Riwayat Pengguna Mengajukan</h4>
                                </div>
                                <div class="card-body">
                                    <?php $bgLight = true; ?>
                                        <?php foreach($dataPengajuan as $dp) : ?>
                                            <?php if ($bgLight) : ?>
                                                <div class="row py-4 mx-1 bg-light">
                                            <?php else : ?>
                                                <div class="row py-4 mx-1">
                                            <?php endif; ?>
                                            <?php $bgLight = !$bgLight;?>
                                        <div class="col-sm-2 offset-sm-2">
                                            <img src="<?= base_url() ?>assets/static/img/photos/default.jpg" class="rounded-circle" style="width: 80px;" alt="">
                                        </div>
                                        <div class="col-sm-5">
                                            <h5 class="text-danger mb-0"><span class="text-muted">ID Lelang : </span><?= $dp['id_lelang'] ?></h5>
                                            <h5 class="mb-0"><span class="text-muted">Email : </span><?= $dp['email2'] ?></h5>
                                            <h5 class="mb-0"><span class="text-muted">Nama : </span><?= $dp['nama_pengguna'] ?></h5>
                                            <!-- <h5 class="mb-0"><span class="text-muted">No. Handphone : </span><?= $dp['telp'] ?></h5> -->
                                            <h4 class="mb-0 mt-2"><span class="text-muted"></span>Rp. <?= number_format($dp['jumlah_lelang']) ?></h4>
                                        </div>
                                        <!-- <div class="col-sm-1 text-end mt-xl-5">
                                            <a href="<?= base_url() ?>admin/hapusPelelang/<?= $dp['id_lelang'] ?>/<?= $dp['id_mobil'] ?>" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-danger hapus-ajuan-2"><span data-feather="trash-2"></span></a>
                                        </div> -->
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
					</div>

				</div>
			</main>