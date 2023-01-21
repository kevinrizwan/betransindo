    @extends('penonton.layout.master')

    @section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pesanan</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rincian Pesanan</h5>

                            <form class="row g-3" action="{{route('pesan.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <p>Konser Number : {{$data->id}}</p>
                                    <input type="hidden" type="text" name="id" value="{{$data->id}}" class="form-control" id="inputNanme4" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Nama Konser : {{$data->nama}}</label>
                                    <input type="hidden" type="text" name="nama" class="form-control" value="{{$data->nama}}" id="inputNanme4" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Jadwal : {{$data->jadwal}}</label>
                                    <input type="hidden" type="text" name="jadwal" class="form-control" value="{{$data->jadwal}}" id="inputNanme2" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Deskripsi : {{$data->deskripsi}}</label>
                                    <input type="hidden" type="text" name="deskripsi" class="form-control" value="{{$data->deskripsi}}" id="inputNanme1" readonly>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
    @endsection