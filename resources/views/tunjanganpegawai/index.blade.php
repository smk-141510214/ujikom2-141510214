@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><center><h2><b>Tunjangan Pegawai</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Tunjangan</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jabatan</b></center></td>
                                <td><center><b>Golongan</b></center></td>
                                <td><center><b>Jumlah Anak</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunjanganpegawais as $baru)
                                <tr>
                                    <td>{{ $i++}}</td>
                                    <td>{{ $baru->tunjangan->kode_tunjangan }}</td>
                                    <td><center>{{ $baru->pegawai->nip }}</center></td>
                                    <td><center>{{ $baru->pegawai->User->name }}</center></td>
                                    <td><center>{{ $baru->pegawai->Jabatan->nama_jabatan }}</center></td>
                                    <td><center>{{ $baru->pegawai->Golongan->nama_golongan }}</center></td>
                                    <td><center>{{ $baru->Tunjangan->jumlah_anak}}</center></td>
                                    <td><center>{{ $baru->Tunjangan->besaran_uang}}</center></td>


                                    <td><a href="{{route('TunjanganPegawai.edit',$baru->id)}}" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['TunjanganPegawai.destroy', $baru->id]]) !!}
                                    {!! Form::submit('Delete Data', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
