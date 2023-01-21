    @extends('staff.layout.master')

    @section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Penonton</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rincian Penonton</h5>

                            <form class="row g-3" action="{{route('cekin.update', $id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    @foreach($hasil as $hasil)
                                    <p>Kode Tiket : {{$hasil ->id}}</p>
                                    <p>Nama User : {{$hasil ->user->name}}</p>
                                    <p>Konser Number : {{$hasil -> konser->nama}}</p>
                                    <p>Jadwal : {{$hasil -> konser->jadwal}}</p>

                                    <input type="hidden" type="text" name="id" value="{{$id}}" class="form-control" id="inputNanme4" readonly>
                                </div>
                                @if($hasil->status == 1)
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" disabled>Sudah Cekin</button>
                                </div>
                                @else
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Cekin</button>
                                </div>
                                @endif
                                @endforeach
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
    @endsection