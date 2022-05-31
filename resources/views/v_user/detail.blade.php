@extends('layout/template')
@section('title', 'Detail User')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-15">
            <div class="box">
                <div class="box-header">
                    <a href="/v_user/edit/{{$user->id}}" class="btn btn-sm btn-warning pull-right">Edit Data</a>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>{{$user->nip}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td> <img src="{{URL::to('/')}}/foto/{{$user->foto}}" alt="" width="100px"></td>
                            </tr>
                            <tr>
                                <th>Level</th>
                                <td>{{$user->level->role}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <a href="../user" class="btn btn-success btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection