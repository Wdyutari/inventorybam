@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Input Data /</span> {{ $menu }}</h4>
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Inventory Assets</h5>
                            <small class="text-muted float-end">Bukit Asam Medika</small>
                        </div>
                        <div class="card-body">
                            <div class="mt-3">
                                <!-- Button trigger modal -->
                                <button
                                  type="button"
                                  class="btn btn-primary mb-2"
                                  data-bs-toggle="modal"
                                  data-bs-target="#asetBam"
                                >
                                  Tambah Asset
                                </button>

                                    <table class="datatables-basic table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama Aset</th>
                                                <th>Brand/Merk</th>
                                                <th>Lokasi</th>
                                                <th>Penanggung Jawab</th>
                                                <th>Kondisi Aset</th>
                                                <th>Fungsi</th>
                                            </tr>
                                        </thead>
                                    </table>

                                    <!-- Modal -->
                                    <div class="modal fade" id="asetBam" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-simple">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Tambah Asset</h5>
                                                            <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                            ></button>
                                                    </div>
                                                    <div class="modal-body">
                                                                <form>
                                                                        <div class="row">
                                                                        <div class="col">
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Nama
                                                                                    Aset</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" id="basic-default-name"
                                                                                        placeholder="Nama Aset" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-company">Merk</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" id="basic-default-company"
                                                                                        placeholder="Merk Aset" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-email">Tipe</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="text" id="basic-default-email" class="form-control"
                                                                                            placeholder="Tipe Aset" aria-label="john.doe"
                                                                                            aria-describedby="basic-default-email2" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-phone">No Seri</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" id="basic-default-phone"
                                                                                        class="form-control phone-mask" placeholder="No Seri Aset"
                                                                                        aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="tahun-perolehan">Tahun
                                                                                    Perolehan</label>
                                                                                <div class="col-sm-9">
                                                                                    <select id="tahun-perolehan" class="select2 form-select"
                                                                                        data-allow-clear="true">
                                                                                        <option value="">Pilih Tahun Perolehan</option>
                                                                                        <option value="2015">2015</option>
                                                                                        <option value="2016">2016</option>
                                                                                        <option value="2017">2017</option>
                                                                                        <option value="2018">2018</option>
                                                                                        <option value="2019">2019</option>
                                                                                        <option value="2020">2020</option>
                                                                                        <option value="2021">2021</option>
                                                                                        <option value="2022">2022</option>
                                                                                        <option value="2023">2023</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Unit
                                                                                    Kerja</label>
                                                                                <div class="col-sm-9">
                                                                                    <select id="tahun-perolehan" class="select2 form-select"
                                                                                        data-allow-clear="true">
                                                                                        <option value="">Unit Kerja</option>
                                                                                        <option value="2015">2015</option>
                                                                                        <option value="2016">2016</option>
                                                                                        <option value="2017">2017</option>
                                                                                        <option value="2018">2018</option>
                                                                                        <option value="2019">2019</option>
                                                                                        <option value="2020">2020</option>
                                                                                        <option value="2021">2021</option>
                                                                                        <option value="2022">2022</option>
                                                                                        <option value="2023">2023</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label"
                                                                                    for="basic-default-company">Lokasi</label>
                                                                                <div class="col-sm-9">
                                                                                    <select id="lokasi" class="select2 form-select" data-allow-clear="true">
                                                                                        <option value="">Lokasi</option>
                                                                                        <option value="2015">2015</option>
                                                                                        <option value="2016">2016</option>
                                                                                        <option value="2017">2017</option>
                                                                                        <option value="2018">2018</option>
                                                                                        <option value="2019">2019</option>
                                                                                        <option value="2020">2020</option>
                                                                                        <option value="2021">2021</option>
                                                                                        <option value="2022">2022</option>
                                                                                        <option value="2023">2023</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="no-inventaris">No Inventaris
                                                                                    Kode Pers</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="text" id="no-inventaris" class="form-control"
                                                                                            placeholder="No Inventaris Kode Pers" aria-label="" />

                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-phone">PIC
                                                                                </label>
                                                                                <div class="col-sm-9">
                                                                                    <select id="tahun-perolehan" class="select2 form-select"
                                                                                        data-allow-clear="true">
                                                                                        <option value="">Penanggung Jawab</option>
                                                                                        <option value="alkes">Alkes</option>
                                                                                        <option value="pk">PK</option>
                                                                                        <option value="prt">PRT</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-message">Jenis
                                                                                    Inventoris</label>
                                                                                <div class="col-sm-9">
                                                                                    <select id="tahun-perolehan" class="select2 form-select"
                                                                                        data-allow-clear="true">
                                                                                        <option value="">Jenis Inventori</option>
                                                                                        <option value="alkes">Alkes</option>
                                                                                        <option value="pk">PK</option>
                                                                                        <option value="prt">PRT</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-message">Kondisi
                                                                                    Aset</label>
                                                                                <div class="col-sm-9">
                                                                                    <select id="kondisi-aset" class="select2 form-select"
                                                                                        data-allow-clear="true">
                                                                                        <option value="">Kondisi Aset</option>
                                                                                        <option value="baik">Baik</option>
                                                                                        <option value="rusak">Rusak</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label" for="basic-default-message">Upload
                                                                                    Aset</label>
                                                                                <div class="col-sm-9">
                                                                                    <input class="form-control" type="file" id="formFile" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label class="col-sm-3 col-form-label"
                                                                                    for="basic-default-message">Keterangan</label>
                                                                                <div class="col-sm-9">
                                                                                    <textarea type="text" class="form-control" placeholder="Keterangan Aset"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                 </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                                            Tutup
                                                            </button>
                                                            <button type="button" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
