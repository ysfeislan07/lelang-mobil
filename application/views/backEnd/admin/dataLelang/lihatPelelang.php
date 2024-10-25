            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3 text-center">Data Pelelang</h1>

					<div class="row">
						<div class="col-sm-6 offset-sm-3">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Top 10 Pelelang</h5>
								</div>
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="<?= $dataMobil['gambar'] ?>" style="width: 200px; max-width: 200px;" alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <h3 class="text-"><b><?= $dataMobil['merk'] ?> <?= $dataMobil['model'] ?></b> (<?= $dataMobil['tahun_dibuat'] ?>)</h3>
                                            <h5 class="text-black"><b>Harga Lelang : Rp. <?= number_format($dataMobil['harga_lelang']) ?></b> <small>OTR</small></h5>
                                            <h4 class="text-muted"><?= $dataMobil['tipe'] ?></h3>
                                            <form action="<?= base_url() ?>admin/lihatPelelang/<?= $dataLelang['id'] ?>" method="post">
                                                <div class="row pt-3">
                                                    <div class="col-7">
                                                        <select name="kategori" id="" class="form-select form-control">
                                                            <option value="">Pilih Opsi</option>
                                                            <?php foreach($dataLelang as $dl) : ?>
                                                                <option value="<?= $dl['model'] ?>"><?= $dl['model'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-button">
                                                            <button type="submit" class="btn btn-success form-control">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="col-sm-6 offset-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <?php $bgLight = true; ?>
                                            <?php foreach($dataPelelang as $dp) : ?>
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
                                            <div class="col-sm-1 text-end mt-xl-5">
                                                <a href="<?= base_url() ?>admin/hapusPelelang/<?= $dp['id_lelang'] ?>/<?= $dp['id_mobil'] ?>" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-danger hapus-ajuan-2"><span data-feather="trash-2"></span></a>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
					</div>

				</div>
			</main>