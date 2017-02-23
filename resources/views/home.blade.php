@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                    <li><a href="{{ url('/Jabatan') }}">jabatan</a></li>
                    <li><a href="{{ url('/Pegawai') }}">pegawai</a></li>
                    <li><a href="{{ url('/Golongan') }}">golongan</a></li>
                    <li><a href="{{ url('/KategoriLembur') }}">kategori</a></li>
                    <li><a href="{{ url('/LemburPegawai') }}">lembur</a></li>
                    <li><a href="{{ url('/Tunjangan') }}">tunjangan</a></li>
                    <li><a href="{{ url('/TunjanganPegawai') }}">tunnjangan pegawai</a></li>
                    <li><a href="{{ url('/Penggajian') }}">penggajian</a></li> 
            </div>
        </div>
    </div>
</div>
@endsection
