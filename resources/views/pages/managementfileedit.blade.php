@extends('layouts.app')
@section('content')
@foreach($data as $result)
    <form action="/ubahaction_managementfile/{{$result['id']}}" method="POST" enctype="multipart/form-data">
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                <label>Nama</label>
                {{csrf_field()}}
                <input type="text" class="form-control" name="nama" value="{{$result['nama']}}">
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="form-group {{ $errors->has('files') ? ' has-error' : '' }}">
                <label>File</label>
                <input type="file" class="form-control" name="files">
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endforeach
@endsection