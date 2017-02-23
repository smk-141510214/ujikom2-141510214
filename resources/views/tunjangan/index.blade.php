@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><center><h2><b>Tunjangan</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/Tunjangan/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Tunjangan</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td><center><b>Status</b></center></td>
                                <td><center><b>Jumlah Anak</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunjangans as $baru)
                                <tr>
                                    <td>{{ $i++}}</td>
                                    <td>{{ $baru->kode_tunjangan }}</td>
                                    <td>{{ $baru->jabatan->nama_jabatan }}</td>
                                    <td>{{ $baru->golongan->nama_golongan }}</td>
                                    <td>{{ $baru->status }}</td>
                                    <td>{{ $baru->jumlah_anak }}</td>
                                    <td>{{ $baru->besaran_uang }}</td>
                                    <td><a href="{{route('Tunjangan.edit',$baru->id)}}" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $baru->id]]) !!}
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
