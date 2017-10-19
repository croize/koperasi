@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/petugas">Petugas</a>
    </li>
    <li class="active">Edit Petugas {{$sa->nama}}</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Petugas
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      {{$sa->nama}}
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/petugas/{{$sa->id_petugas}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Petugas </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Nama Petugas" name="nama" class="col-xs-10 col-sm-8" value="{{$sa->nama}}" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Alamat" name="alamat" class="col-xs-10 col-sm-8"  value="{{$sa->alamat}}"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Telepon </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Nomor Telepon" name="no_tlp" class="col-xs-10 col-sm-8" value="{{$sa->no_tlp}}" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Lahir </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Tempat" name="tmp_lhr" class="col-xs-10 col-sm-8"  value="{{$sa->tmp_lhr}}"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Lahir </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Lahir" name="tgl_lhr" class="form-control col-xs-10 col-sm-8" value="{{$sa->tgl_lhr}}" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="ket">
            <option value="">--SELECT--</option>
            <option value="Approved" @if($sa->ket == "Approved")selected @endif>Approved</option>
            <option value="Pending"@if($sa->ket == "Pending")selected @endif>Pending</option>
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
