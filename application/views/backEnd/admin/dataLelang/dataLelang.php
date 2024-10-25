<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Data Mobil</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                                            <div class="card flex-fill">
                                                <div class="row">
                                                    <div class="col-4 mt-3">
                                                        <a href="<?= base_url('lelang/tambahLelang') ?>" class="btn btn-primary">TAMBAH MOBIL</a>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                    <div class="pagination-links">
                                                        <?= $this->pagination->create_links(); ?>  
                                                    </div>
                                                    </div>
                                                </div>
                                                <table class="table table-hover my-0">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Action</th>
                                                            <th class="d-none d-xl-table-cell">ID</th>
                                                            <th class="d-none d-xl-table-cell">Model</th>
                                                            <th class="d-none d-xl-table-cell">Tipe</th>
                                                            <th class="d-none d-xl-table-cell">Kategori</th>
                                                            <th class="d-none d-xl-table-cell">Harga Lelang</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($dataMobil as $dm) : ?>
                                                            <tr>
                                                                <td><?= ++$start ?></td>
                                                                <td>
                                                                    <a href="" class="btn btn-success edit-data-lelang"><span data-feather="edit"></span></a>
                                                                    <a href="" class="btn btn-danger hapus-data-lelang"><span data-feather="trash-2"></span></a>
                                                                </td>
                                                                <td><?= $dm['id'] ?></td>
                                                                <td><?= $dm['model'] ?></td>
                                                                <td><?= $dm['tipe'] ?></td>
                                                                <td class="text-"><?= $dm['kategori'] ?></td>
                                                                <td>Rp. <?= number_format($dm['harga_lelang']) ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <style>
                        .pagination-links {
                            margin-top: 20px;
                            font-size: 20px;
                        }

                        /* .pagination-links ul.pagination {
                            display: inline-block;
                            padding: 0;
                            margin: 0;
                        }

                        .pagination-links ul.pagination li {
                            display: inline;
                            margin: 0 5px;
                            font-size: 14px;
                        }

                        .pagination-links ul.pagination li a {
                            color: #333;
                            text-decoration: none;
                            padding: 5px 10px;
                            border: 1px solid #ccc;
                            background-color: #fff;
                            border-radius: 5px;
                            transition: background-color 0.2s;
                        }

                        .pagination-links ul.pagination li a:hover {
                            background-color: #007bff;
                            color: #fff;
                        }

                        .pagination-links ul.pagination .active a {
                            background-color: #007bff;
                            color: #fff;
                        }

                        /* Center the pagination */
                        .pagination-links ul.pagination {
                            text-align: center;
                        } */

                    </style>

				</div>
			</main>