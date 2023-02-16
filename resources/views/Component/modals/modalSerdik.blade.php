<!-- edit serdik -->
<@foreach ($data as $item)
    <div class="modal fade" id="update{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Judul Modal</h5>
                </div>
                <div class="modal-body">
                    <main class="form-group">
                        <form action="/update/{{ $item->id }}" method="POST" class="form">
                            @csrf
                            <div class="form-floating">
                                <div class="mb-3">
                                    <label class="form-label" for="nama_siswa"><strong> Nama serdik </strong></label>
                                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa"
                                        value="{{ $item->nama_siswa }}">
                                </div>
    
                                <div class="mb-3 align-item-left">
                                    <label class="nosis" for="nosis"><strong> Nomor siswa </strong></label>
                                    <input type="integer" name="nosis" class="form-control" id="nosis"
                                        value="{{ $item->nosis }}">
                                </div>
                                <div class="mb-3 align-item-left">
                                    <label class="tempat_lahir" for="tempat_lahir"><strong> Tempat lahir </strong></label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"
                                        value="{{ $item->tempat_lahir }}">
                                </div>
                                <div class="mb-3 align-item-left">
                                    <label class="tgl_lahir" for="tgl_lahir"><strong> Tanggal lahir </strong></label>
                                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"
                                        value="{{ $item->tgl_lahir }}">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
    @endforeach
