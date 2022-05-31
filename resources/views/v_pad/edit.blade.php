@extends('layout/template')
@section('title', 'Edit PAD Trayek')
@section('content')

<form action="/v_pad/update/{{$pad->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- <form role="form"> -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="kod_rek">Kode Rek</label>
                                    <input type="text" name="kod_rek" class="form-control" id="kod_rek" value="{{$pad->kod_rek}}">
                                    <div class="text-danger">
                                        @error('kod_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_rek">Kode Rek</label>
                                    <input type="text" name="no_rek" class="form-control" id="no_rek" value="{{$pad->no_rek}}">
                                    <div class="text-danger">
                                        @error('no_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_rek">Nama Rek</label>
                                    <input type="text" name="nama_rek" class="form-control" id="nama_rek" value="{{$pad->nama_rek}}">
                                    <div class="text-danger">
                                        @error('nama_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$pad->tanggal}}">
                                    <div class="text-danger">
                                        @error('tanggal')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_bukti">No Bukti</label>
                                    <input type="text" name="no_bukti" class="form-control" id="no_bukti" value="{{$pad->no_bukti}}">
                                    <div class="text-danger">
                                        @error('no_bukti')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="grup">Grup</label>
                                    <input type="text" name="grup" class="form-control" id="grup" value="{{$pad->grup}}">
                                    <div class="text-danger">
                                        @error('grup')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="urut">Urut</label>
                                    <input type="text" name="urut" class="form-control" id="urut" value="{{$pad->urut}}">
                                    <div class="text-danger">
                                        @error('urut')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="uraian">Uraian</label>
                                    <input type="text" name="uraian" class="form-control" id="uraian" value="{{$pad->uraian}}">
                                    <div class="text-danger">
                                        @error('uraian')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="unit">Unit</label>
                                    <input type="text" name="unit" class="form-control" id="unit" value="{{$pad->unit}}">
                                    <div class="text-danger">
                                        @error('unit')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="retribusi">Retribusi</label>
                                    <input type="text" name="retribusi" class="form-control" id="retribusi" value="{{$pad->retribusi}}">
                                    <div class="text-danger">
                                        @error('retribusi')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{$pad->jumlah}}">
                                    <div class="text-danger">
                                        @error('jumlah')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="pad" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>

@endsection