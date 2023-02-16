@extends('index')

@section('Container')
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
            <tr>
                <th scope="col">{{ $loop->iteration }}</th>
                <td>
            </tr>
        </tbody>
    </table>
@endsection
