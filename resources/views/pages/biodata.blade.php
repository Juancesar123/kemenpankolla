@extends('layouts.app')
@section('content')
    <h1><center>Biodata</center></h1>
    <form action="simpandata_biodata" method="POST">
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
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label>email</label>
            <input type="text" class="form-control" name="email">
        </div>
        @if ($errors->has('notelpon'))
            <span class="help-block">
                <strong>{{ $errors->first('notelpon') }}</strong>
            </span>
        @endif
        <div class="form-group {{ $errors->has('notelpon') ? ' has-error' : '' }}">
            <label>Nomor Telpon</label>
            <input type="text" class="form-control" name="notelpon">
        </div>
        @if ($errors->has('alamat'))
            <span class="help-block">
                <strong>{{ $errors->first('alamat') }}</strong>
            </span>
        @endif
        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table class="table bordered-stripped">
        <thead>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Nomor Telpon</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($data as $result)
            <tr>
                <td>{{$result['nama']}}</td>
                <td>{{$result['email']}}</td>
                <td>{{$result['alamat']}}</td>
                <td>{{$result['notelp']}}</td>
                <td><a href="ubahdata_biodata/{{$result['id']}}" class="btn btn-success">Ubah</a><a href="hapusdata_biodata/{{$result['id']}}" class="btn btn-danger">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection