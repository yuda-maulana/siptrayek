@extends('layout/template')
@section('title', 'Tambah Buku Penerimaan')
@section('content')

<form action="/v_bukubesar/insert" method="post" enctype="multipart/form-data">
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
                                    <label for="tahun">Tahun</label>
                                    <input type="text" name="tahun" class="form-control" id="tahun" value="{{old('tahun')}}">
                                    <div class="text-danger">
                                        @error('tahun')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="target_id">Target</label>
                                    <select class="form-control" name="target_id" id="target_id">
                                        <option disabled value>Pilih Lintasan</option>
                                        @foreach ($target as $item)
                                        <option value="{{$item->id}}">{{$item->tahun}} : @currency($item->target3)</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kode_rek">Kode Rek</label>
                                    <input type="text" name="kode_rek" class="form-control" id="kode_rek" value="{{old('kode_rek')}}">
                                    <div class="text-danger">
                                        @error('kode_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_rek">Nama Rek</label>
                                    <input type="text" name="nama_rek" class="form-control" id="nama_rek" value="{{old('nama_rek')}}">
                                    <div class="text-danger">
                                        @error('nama_rek')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_terima">Tanggal Terima</label>
                                    <input type="date" name="tgl_terima" class="form-control" id="tgl_terima" value="{{old('tgl_terima')}}">
                                    <div class="text-danger">
                                        @error('tgl_terima')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jml_terima">Jumlah Terima</label>
                                    <input type="text" name="jml_terima" class="form-control" id="jml_terima" value="{{old('jml_terima')}}">
                                    <div class="text-danger">
                                        @error('jml_terima')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_setor">Tanggal Setor</label>
                                    <input type="date" name="tgl_setor" class="form-control" id="tgl_setor" value="{{old('tgl_setor')}}">
                                    <div class="text-danger">
                                        @error('tgl_setor')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_setor">No Setor</label>
                                    <input type="text" name="no_setor" class="form-control" id="no_setor" value="{{old('no_setor')}}">
                                    <div class="text-danger">
                                        @error('no_setor')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jm_tg_i">Jumlah Tgl Ini</label>
                                    <input type="text" name="jm_tg_i" class="form-control" id="jm_tg_i" value="{{old('jm_tg_i')}}">
                                    <div class="text-danger">
                                        @error('jm_tg_i')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jm_tg_l">Jumlah Tgl Lalu</label>
                                    <input type="text" name="jm_tg_l" class="form-control" id="jm_tg_l" value="{{old('jm_tg_l')}}">
                                    <div class="text-danger">
                                        @error('jm_tg_l')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jm_stg_i">Jumlah s.d Tgl Ini</label>
                                    <input type="text" name="jm_stg_i" class="form-control" id="jm_stg_i" value="{{old('jm_stg_i')}}">
                                    <div class="text-danger">
                                        @error('jm_stg_i')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jm_bl_i">Jumlah Bulan Ini</label>
                                    <input type="text" name="jm_bl_i" class="form-control" id="jm_bl_i" value="{{old('jm_bl_i')}}">
                                    <div class="text-danger">
                                        @error('jm_bl_i')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jm_bl_l">Jumlah Bulan Lalu</label>
                                    <input type="text" name="jm_bl_l" class="form-control" id="jm_bl_l" value="{{old('jm_bl_l')}}">
                                    <div class="text-danger">
                                        @error('jm_bl_l')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jm_sbl_i">Jumlah s.d Bulan Ini</label>
                                    <input type="text" name="jm_sbl_i" class="form-control" id="jm_sbl_i" value="{{old('jm_sbl_i')}}">
                                    <div class="text-danger">
                                        @error('jm_sbl_i')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success">Simpan</button>
                        <a href="bukubesar" class="btn btn-danger">Batal</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</form>

@endsection