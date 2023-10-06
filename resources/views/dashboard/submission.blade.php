@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">
    <div class="box-content">
        <div class="data-header">
          <h2>Pengajuan</h2>
          <a href="{{ route('pengajuan.create') }}">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-add">+ Tambah</button>
          </a> 
        </div>
  
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">NIP</th>
                <th scope="col">Bagian/Unit Kerja</th>
                <th scope="col">Perguruan Tinggi Tujuan</th>
                <th scope="col">Jenjang Pendidikan</th>
                <th scope="col">Surat Permohonan</th>
                <th scope="col">Persetujuan</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              @foreach ($mails as $mail)
                <tr>
                  <td scope="row">{{ $mail['nama'] }}</td>
                  <td scope="row">{{ $mail['NIP'] }}</td>
                  <td scope="row">{{ $mail['bagian'] }}</td>
                  <td scope="row">{{ $mail['tujuan'] }}</td>
                  <td scope="row">{{ $mail['pendidikan'] }}</td>
                  <td scope="row"><a href="{{ asset('storage/'. $mail['surat']) }}" target="_blank"><img class="rounded mx-auto d-block" src="{{ asset('img/pdf.png') }}" style="width: 20%;"></a></td>
                  <td scope="row">{{ $mail['approved'] }}</td>
                  <td scope="row">
                    <!-- Tolak Modal -->
                      <div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="tolakModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="tolakModalLabel">Konfirmasi Tolak</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      Apakah Anda yakin ingin menghapusnya?
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                      <form action="{{ route('submission.delete', $mail['id']) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Hapus</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="d-flex justify-content-center">
                          <div class="ms-2">
                            <a href="{{ route('submission.edit', $mail['id'])}}">
                              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#setujuiModal">Edit</button>
                            </a>
                          </div>
                          <div class="ms-2">
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tolakModal">Hapus</button>
                          </div>
                      </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>            

  </main><!-- End #main -->
@endsection