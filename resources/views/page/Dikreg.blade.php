@extends('index')

@section('Container')
    <div class="container">
        @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show mt-3 mb-4" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show mt-3 mb-4" role="alert">
                {{ session('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <main class="inputDikreg">
                    <form action="/Dikreg" method="post" class="form-control" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-1 row">
                            <label class="form-label" for="jenis_dik">Pilih jenis Dik</label>
                            <select class="form-select mb-3 border" id="jenis_dik" name="jenis_dik" required />
                            <option value="" selected disabled>--Jenis Dik --</option>
                            <option value="Diktuk">Diktuk</option>
                            <option value="Dikbang">DikbangSpes</option>
                            <option value="Pelatihan">Pelatihan</option>
                            </select>
                        </div>

                        <div class="mb-1 row">
                            <label for="nama_dik" class="col-sm-8 col-form-label">Nama pendidikan</label>
                            <input type="text" class="form-control-sm border" id="nama_dik" name="nama_dik"
                                placeholder="Diktukba Polri gel-I 2023">
                        </div>

                        <div class="mb-1 row">
                            <label for="angkatan" class="col-sm-8 col-form-label mr-5">angkatan pendidikan</label>
                            <input type="text" class="form-control-sm border" id="angkatan" name="angkatan"
                                placeholder="Angkatan">

                        </div>

                        <div class="mb-1 row">
                            <label for="tahun" class="col-sm-8 col-form-label">Tahun</label>
                            <input type="date" class="form-control-sm border" id="tahun" name="tahun" placeholder="2023">
                            @error('tahun')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-2">
                            <button type="submit" class="btn">Submit</button>
                        </div>

                    </form>
                </main>
            </div>
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama siswa</th>
                            <th scope="col">Nosis</th>
                            <th scope="col">tempat lahir lahir</th>
                            <th scope="col">Tanggal lahir</th>
                            <th scope="col"></th>
                        </tr>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <th scope="col">{{ $loop->iteration }}</th>
                                <td>{{ $item->jenis_dik }}</td>
                                <td>{{ $item->nama_dik }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->angkatan }}</td>
                                <div class="row">
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#update{{ $item->id }}">
                                            <img src="./assets/icons/pen.svg" class="icon" alt="">
                                            edit</button>
                                        <button class="btn btn-secondary btn-sm">
                                            <img src="./assets/icons/eye.svg" class="icon" alt="">
                                            lihat</button>

                                    </td>

                                </div>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center font-weight-lighter fst-italic my-5">data
                                    kosong/tidak
                                    tersedia</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>




    </div>
@endsection
