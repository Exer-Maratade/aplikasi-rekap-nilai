@extends('Index')

@section('Container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show mt-3 mb-4" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/" method="post" class="form-inputtransaksi" enctype="multipart/form-data">
                    @csrf
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text"
                                            class="form-control
                                        @error('nama_customer') is invalid
                                    @enderror"
                                            id="exampleFormControlInput1" placeholder="10cm">
                                        <label for="nama_customer mb-5" class="form-label">Nama Customer</label>

                                    </div>
                                    @error('nama_customer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <span>
                                <center class="Atasan">
                                    Ukuran atasan
                                </center>
                            </span>

                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk pinggang</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk pinggang</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk pinggang</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk pinggang</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <span>
                                <center class="Atasan">
                                    Ukuran Bawah
                                </center>
                            </span>

                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk pinggang</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk Paha</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Uk lutut</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control
                                    @error('uk_pinggang') is invalid
                                @enderror"
                                        id="exampleFormControlInput1" placeholder="10cm">
                                    <label for="uk_pinggang" class="form-label">Panjang kaki</label>
                                </div>
                                @error('uk_pinggang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="form">
                <label for="pembayaran">Cash</label>
                <input type="text" class="form-control" id="pembayaran" placeholder="Rp.50.000"
                    style="width: 300px">
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn">Submit</button>
            </div>


        </div>
    </div>
@endsection
