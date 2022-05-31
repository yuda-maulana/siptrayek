@extends('layout/template')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{$data_lintrayek}}</h3>
                <p>Lintasan Trayek</p>
            </div>
            <div class="icon">
                <i class="fa fa-road"></i>
            </div>
            <a href="/v_insidentil/insidentil" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$data_insidentil}}</h3>
                <p>Izin Insidentil</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="/v_insidentil/insidentil" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$data_rekomendasi}}</h3>
                <p>Rekomendasi</p>
            </div>
            <div class="icon">
                <i class="fa fa-lightbulb-o"></i>
            </div>
            <a href="/v_rekomendasi/rekomendasi" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{$data_khusus}}</h3>
                <p>Khusus</p>
            </div>
            <div class="icon">
                <i class="fa fa-bus"></i>
            </div>
            <a href="/v_khusus/khusus" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$data_prinsip}}</h3>
                <p>Prinsip</p>
            </div>
            <div class="icon">
                <i class="fa fa-comments-o"></i>
            </div>
            <a href="/v_prinsip/prinsip" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{$data_pemilik}}</h3>
                <p>Izin Trayek</p>
            </div>
            <div class="icon">
                <i class="fa fa-map"></i>
            </div>
            <a href="/v_trayek/trayek" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{$data_usaha}}</h3>
                <p>Izin Usaha</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="/v_usaha/usaha" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{$data_user}}</h3>
                <p>Data User</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="/v_user/user" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>


</div>
@endsection