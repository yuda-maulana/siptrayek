@extends('layout/template')
@section('title', 'Profile')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <a href="edit/{{ Auth::user()->id }}" class="btn btn-warning btn-sm">Edit Data</a>
                    <a href="editpassword" class="btn btn-primary btn-sm">Ubah Password</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>{{ Auth::user()->nip }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <!-- <tr>
                                <th>Password</th>
                                <td>{{ Auth::user()->password }}</td>
                            </tr> -->
                            <tr>
                                <th>Foto</th>
                                <td>
                                    @if ( Auth::user()->foto != '')
                                    <img src="{{URL::to('/')}}/foto/{{ Auth::user()->foto}}" alt="" width="100px">
                                    @else
                                    <img src="{{URL::to('/')}}/foto/no_image.jpg" alt="" width="100px">
                                    @endif
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection