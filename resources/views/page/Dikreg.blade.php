@extends('index')

@section('Container')
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
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


                <main class="inputDikreg">
                    <form action="/Dikreg" method="post" class="form-control" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">

                            <label class="form-label" for="jenis_dik">Pilih jenis Dik</label>
                            <select class="form-select mb-3" id="jenis_dik" name="jenis_dik" required />
                            <option value="" selected disabled>--Jenis Dik --</option>
                            <option value="Diktuk">Diktuk</option>
                            <option value="Dikbang">DikbangSpes</option>
                            <option value="Pelatihan">Pelatihan</option>
                            </select>
                        </div>

                        <div class="mb-3 row">
                            <label for="nama_dik" class="col-sm-8 col-form-label">Nama pendidikan</label>
                            <input type="text" class="form-control" id="nama_dik" name="nama_dik"
                                placeholder="Diktukba Polri gel-I 2023">
                        </div>

                        <div class="mb-3 row">
                            <label for="angkatan" class="col-sm-8 col-form-label mr-5">angkatan pendidikan</label>
                            <input type="text" class="form-control" id="angkatan" name="angkatan"
                                placeholder="Angkatan">

                        </div>

                        <div class="mb-3 row">
                            <label for="tahun" class="col-sm-8 col-form-label">Tahun</label>
                            <input type="date" class="form-control-sm" id="tahun" name="tahun" placeholder="2023">
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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
