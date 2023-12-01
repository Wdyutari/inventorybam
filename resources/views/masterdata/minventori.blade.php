@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Inventori</h4>

              <!-- Accordion -->
              <div class="row">
                <div class="col-md mb-4 mb-md-2">
                  <div class="accordion mt-3" id="accordionExample">
                    <div class="card accordion-item active">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          type="button"
                          class="accordion-button"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionOne"
                          aria-expanded="true"
                          aria-controls="accordionOne"
                        >
                          Unit Bisnis
                        </button>
                      </h2>

                      <div
                        id="accordionOne"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                             <!-- Vertically Centered Modal -->
                    <div class="col-lg-4 col-md-6">

                        <div class="mt-3">
                          <!-- Button trigger modal -->
                          <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#modalCenter"
                          >
                            Tambah Unit Bisnis
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modalCenterTitle">Tambah Unit Bisnis</h5>
                                  <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                  ></button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameWithTitle" class="form-label">Nama Unit Bisnis</label>
                                      <input
                                        type="text"
                                        id="nameWithTitle"
                                        class="form-control"
                                        placeholder="Enter Name"
                                      />
                                    </div>
                                  </div>

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

                            <table class="datatables-basic table table-bordered">
                                <thead>
                                  <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                              </table>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionTwo"
                          aria-expanded="false"
                          aria-controls="accordionTwo"
                        >
                          Unit Kerja
                        </button>
                      </h2>
                      <div
                        id="accordionTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                            <div class="mt-3">
                                <!-- Button trigger modal -->
                                <button
                                  type="button"
                                  class="btn btn-primary"
                                  data-bs-toggle="modal"
                                  data-bs-target="#unitBisnis"
                                >
                                  Tambah Unit Bisnis
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="unitBisnis" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Tambah Unit Bisnis</h5>
                                        <button
                                          type="button"
                                          class="btn-close"
                                          data-bs-dismiss="modal"
                                          aria-label="Close"
                                        ></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Nama Unit Bisnis</label>
                                            <input
                                              type="text"
                                              id="nameWithTitle"
                                              class="form-control"
                                              placeholder="Enter Name"
                                            />
                                          </div>
                                        </div>

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
                            <table class="datatables-basic table table-bordered">
                                <thead>
                                  <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                              </table>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionThree"
                          aria-expanded="false"
                          aria-controls="accordionThree"
                        >
                          Jenis Inventori
                        </button>
                      </h2>
                      <div
                        id="accordionThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                            <table class="datatables-basic table table-bordered">
                                <thead>
                                  <tr>
                                    <th>id</th>
                                    <th>Jenis Inventori</th>
                                    <th>Fungsi</th>
                                  </tr>
                                </thead>
                              </table>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingFourth">
                          <button
                            type="button"
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#accordionFourth"
                            aria-expanded="false"
                            aria-controls="accordionFourth"
                          >
                            Penanggung Jawab
                          </button>
                        </h2>
                        <div
                          id="accordionFourth"
                          class="accordion-collapse collapse"
                          aria-labelledby="headingFourth"
                          data-bs-parent="#accordionExample"
                        >
                          <div class="accordion-body">
                            <table class="datatables-basic table table-bordered">
                                <thead>
                                  <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                              </table>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!--/ Accordion -->
        </div>

        <!-- / Content -->
    </div>
@endsection
