    @extends('staff.layout.master')

    @section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>List Konser</h1>
        </div><!-- End Page Title -->
        <a href="{{route('konser.add')}}"><button style="margin-bottom: 20px;" class="btn btn-primary">Tambah Konser</button></a>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List Konser</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Konser</th>
                                        <th scope="col">Jadwal</th>
                                        <th scope="col">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @forelse($data as $i=>$row)
                                    <tr>
                                        <!-- loop data -->
                                        <td>{{++$i}}</td>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->jadwal}}</td>
                                        <td>{{$row->deskripsi}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td onscroll="6" style="text-align: center;">Belum ada data yang tersimpan</td>
                                    </tr>
                                    @endforelse
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
    @endsection