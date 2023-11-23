@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> {{ $menu }}</h4>
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Inventory Assets</h5>
                            <small class="text-muted float-end">Bukit Asam Medika</small>
                        </div>
                        <div class="card-body">

                            <form>
                                <div class="row">

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

                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
