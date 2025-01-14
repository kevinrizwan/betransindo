  @extends('penonton.layout.master')

  @section('content')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
          <div class="row">

              <!-- Left side columns -->
              <div class="col-lg-8">
                  <div class="row">

                      <!-- Sales Card -->
                      <div class="col-xxl-4 col-md-6">
                          <div class="card info-card sales-card">
                              <div class="card-body">
                                  <h1 class="card-title">Selamat datang<span> | {{Auth::user()->name}}</span></h1>


                              </div>

                          </div>
                      </div><!-- End Sales Card -->


                  </div>
              </div><!-- End Left side columns -->

          </div>
      </section>

  </main><!-- End #main -->
  @endsection