@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> {{ $menu }}</h4>
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                  <table class="datatables-basic table">
                    <thead>
                      <tr>

                        <th>id</th>
                        <th>Nama Aset</th>
                        <th>Brand/Merk</th>
                        <th>Lokasi</th>
                        <th>PIC Penanggung Jawab</th>
                        <th>Kondisi Aset</th>
                        <th>Gambar Aset</th>
                        <th>Fungsi</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
