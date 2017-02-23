@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'LemburPegawai'])!!}
                    <label>Kode Lembur</label>
                    
                    <select name="kode_lembur_id" class="form-control">
                        <option value="">Pilih Kode Tunjangan</option>
                        @foreach($kategori_lemburs as $baru)
                        <option value="{{$baru->id}}">{{$baru->kode_lembur}}</option>
                        @endforeach
                    </select><br>

                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        @foreach($pegawais as $baru)
                        <option value="{{$baru->id}}">{{$baru->User->name}}</option>
                        @endforeach
                    </select><br>

                    <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                        <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                        <div class="col-md-6">
                            <input id="jumlah_jam" type="jumlah_jam" class="form-control" name="jumlah_jam" value="{{ old('jumlah_jam') }}" required autofocus>

                            @if ($errors->has('jumlah_jam'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlah_jam') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br><br>
                    
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
