@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/simpanan">Simpanan</a>
    </li>
    <li class="active">Edit Simpanan Anggota {{$sa->anggota['nama']}}</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Simpanan
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      {{$sa->anggota['nama']}}
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/simpanan/{{$sa->id_simpanan}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Simpanan </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="nm_simpanan">
            <option value="">--SELECT--</option>
            <option value="SP" @if($sa->nm_simpanan == "SP")selected @endif>Simpan Pinjam</option>
            <option value="SY" @if($sa->nm_simpanan == "SY")selected @endif>Syariah</option>
            <option value="TK" @if($sa->nm_simpanan == "TK")selected @endif>Tabungan Keluarga</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Anggota </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_anggota">
            <option value="">--SELECT--</option>
            @foreach($us as $su)
              <option value="{{$su->id_anggota}}" @if(($sa->id_anggota) == ($su->id_anggota))selected @endif>{{$su->nama}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Simpanan </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Simpanan" name="tgl_simpanan" value="{{$sa->tgl_simpanan}}" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Besar Simpanan </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Besar Simpanan" value="{{$sa->besar_simpanan}}" name="besar_simpanan" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="ket">
            <option value="">--SELECT--</option>
            <option value="Accepted"@if($sa->ket == "Accepted")selected @endif>ACCEPTED</option>
            <option value="Pending"@if($sa->ket == "Pending")selected @endif>PENDING</option>
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
