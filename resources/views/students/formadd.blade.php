@extends('layout.main')

@section('content')
    <h2>Form New Data Students</h2>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form action="{{ url('students') }}" method="post">
                @csrf
                <form>
                    <div class="row mb-3">
                        <label for="txtid" class="col-sm-2 col-form-label">ID Students</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror"
                                id="txtid" name="txtid" value="{{ old('txtid') }}">
                            @error('txtid')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtfullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ old('txtfullname') }}">
                            @error('txtfullname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtgender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                            <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                                <option value="" selected>-Pilih-</option>
                                <option value="M" {{ (old('txtgender'=='M') ? 'selected' : '') }}>Male</option>
                                <option value="F" {{ (old('txtgender'=='F') ? 'selected' : '') }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control " name="txtaddress" id="txtaddress" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="txtemail" id="txtemail" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-6">
                            <input type="text" name="txtphone" id="txtphone" class="form-control form-control-sm @error('txtphone') is-invalid @enderror">
                            @error('txtphone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-sm btn-success">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
