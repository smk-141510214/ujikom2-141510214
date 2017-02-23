@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!!Form::open(['url'=>'/Pegawai', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'files'=>true])!!}
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
