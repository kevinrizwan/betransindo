    @extends('staff.layout.master')

    @section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>List Tiket</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List Tiket</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Tiket</th>
                                        <th scope="col">Nama Penonton</th>
                                        <th scope="col">Konser</th>
                                        <th scope="col">Jadwal</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Dicekin Pada</th>
                                        <th scope="col">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @forelse($data as $i=>$row)
                                    <tr>
                                        <!-- loop data -->
                                        <td>{{++$i}}</td>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->user->name}}</td>
                                        <td>{{$row->konser->nama}}</td>
                                        <td>{{$row->konser->jadwal}}</td>
                                        <td>{{$row->konser->deskripsi}}</td>
                                        <td>
                                            @if ($row->status == 0)
                                            <label class="badge bg-warning">Belum Checkin</label>
                                            @endif
                                            @if ($row->status == 1)
                                            <label class="badge bg-success">Sudah Checkin</label>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($row->status == 0)
                                            -
                                            @endif
                                            @if ($row->status == 1)
                                            {{$row->updated_at}}
                                            @endif
                                        </td>
                                        <td><a href="{{ route('staff.tiket.destroy' ,$row->id) }}"><button class="btn bg-danger" type="button" title="Hapus" style="color: white;">Hapus</button></a></td>
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