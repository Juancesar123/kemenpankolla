@extends('layouts.app')
@section('content')
@foreach($data as $result)
    <form action="/ubahdata_biodataaction/{{$result['id']}}" method="POST">
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
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label>email</label>
                <input type="text" class="form-control" name="email" value="{{$result['email']}}">
            </div>
            @if ($errors->has('notelpon'))
                <span class="help-block">
                    <strong>{{ $errors->first('notelpon') }}</strong>
                </span>
            @endif
            <div class="form-group {{ $errors->has('notelpon') ? ' has-error' : '' }}">
                <label>Nomor Telpon</label>
                <input type="text" class="form-control" name="notelpon" value="{{$result['notelp']}}">
            </div>
            @if ($errors->has('alamat'))
                <span class="help-block">
                    <strong>{{ $errors->first('alamat') }}</strong>
                </span>
            @endif
            <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat">{{$result['alamat']}}</textarea>
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endforeach
@endsection