@extends('Index')

@section('Container')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
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
</div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>ini memunculkan kurikulum</h1>
            </div>
            <div class="card-body">
                <h1>bagian</h1>
            </div>

            <div class="card-footer">
                bagian footer
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
