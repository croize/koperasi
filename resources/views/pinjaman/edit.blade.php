@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/pinjaman">Pinjaman</a>
    </li>
    <li class="active">Input Pinjaman</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Pinjaman
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Isi data dengan benar
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/pinjaman/{{$sa->id_pinjaman}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Pinjaman </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Nama Pinjaman" name="nama_pinjaman" value="{{$sa->nama_pinjaman}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Anggota </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_anggota">
            <option value="">--SELECT--</option>
            @foreach($gota as $anggota)
            <option value="{{$anggota->id_anggota}}"@if(($sa->id_anggota) == ($anggota->id_anggota))selected @endif>{{$anggota->nama}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Besar Pinjaman </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Besar Pinjaman" value="{{$sa->besar_pinjaman}}" name="besar_pinjaman" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pengajuan Peminjaman </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Pengajuan Peminjaman" name="tgl_pengajuan_peminjaman" value="{{$sa->tgl_pengajuan_peminjaman}}" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Acc Peminjaman </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Acc Peminjaman" name="tgl_acc_peminjaman" value="{{$sa->tgl_acc_peminjaman}}" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pinjaman </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text"  value="{{$sa->tgl_pinjaman}}" placeholder="Tanggal Lahir" name="tgl_pinjaman" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pelunasan </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal Lahir"  value="{{$sa->tgl_pelunasan}}" name="tgl_pelunasan" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Angsuran </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_angsuran">
            <option value="">--SELECT--</option>
            @foreach($sur as $angsuran)
            <option value="{{$angsuran->id_angsuran}}" @if(($sa->id_angsuran) == ($angsuran->id_angsuran)) selected @endif>{{$angsuran->anggota['nama']}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="ket">
            <option value="">--SELECT--</option>
            <option value="Accepted"@if($sa->ket == "Accepted") selected @endif>Accepted</option>
            <option value="Pending"@if($sa->ket == "Pending") selected @endif>Pending</option>
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
