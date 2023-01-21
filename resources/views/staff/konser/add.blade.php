      @extends('staff.layout.master')

      @section('content')
      <main id="main" class="main">

          <div class="pagetitle">
              <h1>Tambah Konser</h1>
          </div><!-- End Page Title -->
          <section class="section">
              <div class="row">

                  <div class="col-lg-12">

                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Form Data</h5>

                              <!-- Vertical Form -->
                              <form class="row g-3" action="{{route('konser.store')}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="col-12">
                                      <label for="inputNanme4" class="form-label">Nama Konser</label>
                                      <input type="text" name="nama" class="form-control" id="inputNanme4" required>
                                  </div>
                                  <div class="col-12">
                                      <label for="inputNanme4" class="form-label">Jadwal</label>
                                      <input type="text" name="jadwal" class="form-control" id="inputNanme2" required>
                                  </div>
                                  <div class="col-12">
                                      <label for="inputNanme4" class="form-label">Deskripsi</label>
                                      <input type="text" name="deskripsi" class="form-control" id="inputNanme1" required>
                                  </div>
                                  <div class="text-center">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                      <button type="reset" class="btn btn-secondary">Reset</button>
                                  </div>
                              </form><!-- Vertical Form -->

                          </div>
                      </div>

                  </div>
              </div>
          </section>

      </main>
      @endsection