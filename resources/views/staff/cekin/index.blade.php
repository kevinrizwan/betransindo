      @extends('staff.layout.master')

      @section('content')
      <main id="main" class="main">

          <div class="pagetitle">
              <h1>Menu Cekin</h1>
          </div><!-- End Page Title -->
          <section class="section">
              <div class="row">

                  <div class="col-lg-12">

                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Form Data</h5>

                              <!-- Vertical Form -->
                              <form class="row g-3" action="{{route('cekin.show')}}" method="get" enctype="multipart/form-data">
                                  @csrf
                                  <div class="col-12">
                                      <label for="inputNanme4" class="form-label">Nomor Tiket</label>
                                      <input type="text" name="id" class="form-control" id="inputNanme4" required>
                                  </div>
                                  <div class="text-center">
                                      <button type="submit" class="btn btn-primary">Cek</button>
                                  </div>
                              </form><!-- Vertical Form -->

                          </div>
                      </div>

                  </div>
              </div>
          </section>

      </main>
      @endsection