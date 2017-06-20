@extends('layouts.app')
@section('content')
    <h1><center>Management File</center></h1>
    <form action="simpan_managementfile" method="POST" enctype='multipart/form-data'>
        @if ($errors->has('nama'))
            <span class="help-block">
                <strong>{{ $errors->first('nama') }}</strong>
            </span>
        @endif
        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
            <label>Nama</label>
            {{csrf_field()}}
            <input type="text" class="form-control" name="nama">
        </div>
        @if ($errors->has('files'))
            <span class="help-block">
                <strong>{{ $errors->first('files') }}</strong>
            </span>
        @endif
        <div class="form-group {{ $errors->has('files') ? ' has-error' : '' }}">
            <label>File</label>
            <input type="file" class="form-control" name="files">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <table class="table bordered-stripped">
        <thead>
            <th>Nama</th>
            <th>Letak File</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($data as $result)
            <tr>
                <td>{{$result['nama']}}</td>
                <td>{{$result['path']}}</td>
                <td><a href="ubah_managementfile/{{$result['id']}}" class="btn btn-success">Ubah</a><a href="hapus_managementfile/{{$result['id']}}" class="btn btn-danger">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection