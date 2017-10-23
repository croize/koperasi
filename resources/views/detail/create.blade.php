@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/detail">Detail</a>
    </li>
    <li class="active">Input Detail</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Detail
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Isi data dengan benar
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/detail" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Angsuran Anggota </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_angsuran">
            <option value="">--SELECT--</option>
            @foreach($sa as $anggota)
            <option value="{{$anggota->id_angsuran}}">{{$anggota->anggota['nama']}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Jatuh Tempo </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Jatuh Tempo" name="tgl_jatuh_tempo" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Besar Angsuran </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Besar Angsuran" name="besar_angsuran" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="ket">
            <option value="">--SELECT--</option>
            <option value="Tuntas">Tuntas</option>
            <option value="BT">Belum Tuntas</option>
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
