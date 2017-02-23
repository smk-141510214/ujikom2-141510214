@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'Tunjangan'])!!}

                    <div class="form-group{{ $errors->has('kode_tunjangan') ? ' has-error' : '' }}">
                        <label for="kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan</label>
                        <div class="col-md-6">
                            <input id="kode_tunjangan" type="kode_tunjangan" class="form-control" name="kode_tunjangan" value="{{ old('kode_tunjangan') }}" required autofocus>

                            @if ($errors->has('kode_tunjangan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                           <select name="jabatan_id" class="form-control" required>
                            <option value="">Pilih Nama Jabatan</option>
                                @foreach($jabatans as $baru)
                                    <option value="{{$baru->id}}">{{$baru->nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                           <select name="golongan_id" class="form-control" required>
                            <option value="">Pilih Nama golongan</option>
                                @foreach($golongans as $baru)
                                    <option value="{{$baru->id}}">{{$baru->nama_golongan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-md-4 control-label">Status</label>
                        <div class="col-md-6">
                           <select class="form-control" name="status">
                                <option value="Menikah">Menikah</option>
                                <option value="BelumMenikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
                        <label for="jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>
                        <div class="col-md-6">
                            <input id="jumlah_anak" type="jumlah_anak" class="form-control" name="jumlah_anak" value="{{ old('jumlah_anak') }}" required autofocus>

                            @if ($errors->has('jumlah_anak'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlah_anak') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>

                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                        <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                            <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}" required autofocus>

                            @if ($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('besaran_uang') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
