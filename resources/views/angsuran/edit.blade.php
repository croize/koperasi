@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/angsuran">Angsuran</a>
    </li>
    <li class="active">{{$sa->anggota['nama']}}</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Angsuran
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Isi data dengan benar
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/angsuran/{{$sa->id_angsuran}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Besar Angsuran </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Besar Angsuran" value="{{$sa->besar_angsuran}}" name="besar_angsuran" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Angsuran Ke </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Angsuran Ke" name="angsuran_ke" value="{{$sa->angsuran_ke}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pembayaran </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Pembayaran" name="tgl_pembayaran" value="{{$sa->tgl_pembayaran}}" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Anggota </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_anggota">
            <option value="">--SELECT--</option>
            @foreach($ta as $anggota)
            <option value="{{$anggota->id_anggota}}" @if(($sa->id_anggota) == ($anggota->id_anggota)) selected @endif>{{$anggota->nama}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Katagori </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_katagori">
            <option value="">--SELECT--</option>
            @foreach($gori as $katagori)
            <option value="{{$katagori->id_katagori_peminjaman}}"  @if(($sa->id_katagori) == ($katagori->id_katagori_peminjaman)) selected @endif>{{$katagori->nama_pinjaman}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="ket">
            <option value="">--SELECT--</option>
            <option value="Lunas" @if($sa->ket == "Lunas") selected @endif>Lunas</option>
            <option value="BL"@if($sa->ket == "BL") selected @endif>Belum Lunas</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="center">
          <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
          </button>
        </div>
      </div>
    </form>
  </div><!-- /.col -->
@endsection
