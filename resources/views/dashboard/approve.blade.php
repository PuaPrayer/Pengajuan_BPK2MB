@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">
    <div class="box-content">
        <div class="data-header">
        <h2>Pengajuan</h2>
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
                                <td scope="row"><a href="{{ asset('storage/'. $mail['surat']) }}" target="_blank"><img class="rounded mx-auto d-block" src="{{ asset('img/pdf.png') }}" alt="" style="width: 20%;"></a></td>
                                @if ($mail['approved'] == 'Menunggu')
                                <td>
                                    <!-- Setujui Modal -->
                                    <div class="modal fade" id="setujuiModal" tabindex="-1" aria-labelledby="setujuiModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="setujuiModalLabel">Konfirmasi Setujui</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menyetujui?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="{{ route('data.approve', $mail['id']) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Setujui</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tolak Modal -->
                                    <div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="tolakModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tolakModalLabel">Konfirmasi Tolak</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menolak?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="{{ route('data.reject', $mail['id']) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="ms-2">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#setujuiModal">Setujui</button>
                                        </div>
                                        <div class="ms-2">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tolakModal">Tolak</button>
                                        </div>
                                    </div>
                                </td>
                                @else
                                    <td scope="row">{{ $mail['approved'] }}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
</main>
@endsection


