@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><center><h2><b>Data Pegawai</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/Pegawai/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Foto</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td colspan="3"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($pegawais as $baru)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset('img/'.$baru->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image"></td>
                                    <td>{{ $baru->nip }}</td>
                                    <td>{{ $baru->User->name }}</td>
                                    <td>{{ $baru->jabatan->nama_jabatan }}</td>
                                    <td>{{ $baru->golongan->nama_golongan }}</td>
                                    <td><a href="{{route('Pegawai.show',$baru->id)}}" class="btn btn-warning">Read Data</a></td>
                                    <td><a href="{{route('Pegawai.edit',$baru->id)}}" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $baru->id]]) !!}
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
