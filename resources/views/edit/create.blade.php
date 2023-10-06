@extends('edit.main')

@section('contain')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Data') }}</div>
                <div class="container">
                    <form action="{{ route('submission.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nama">{{ __('Nama') }}</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="NIP">{{ __('NIP') }}</label>
                            <input id="NIP" type="text" class="form-control" name="NIP" value="{{ old('NIP') }}" required autofocus>
                            @error('NIP')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="bagian">{{ __('Bagian/Unit Kerja') }}</label>
                            <input id="bagian" type="text" class="form-control" name="bagian" value="{{ old('bagian') }}" required autofocus>
                            @error('bagian')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="tujuan">{{ __('Perguruan Tinggi Tujuan') }}</label>
                            <input id="tujuan" type="text" class="form-control" name="tujuan" value="{{ old('tujuan') }}" required autofocus>
                            @error('tujuan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="jenjang_pendidikan">{{ __('Jenjang Pendidikan') }}</label>
                            <input id="jenjang_pendidikan" type="text" class="form-control" name="jenjang_pendidikan" value="{{ old('jenjang_pendidikan') }}" required autofocus>
                            @error('jenjang_pendidikan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="surat">{{ __('Surat Pengajuan') }}</label>
                            <input id="surat" type="file" class="form-control" name="surat" value="{{ old('surat') }}" accept=".pdf" required>
                            @error('surat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                        <button type="submit" class="btn btn-primary mt-3 mb-3">
                            {{ __('Konfirmasi') }}
                        </button>
                        <a class="btn btn-danger ms-2" href="{{ route('submission.approver')}}">{{ __('Cancel') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection