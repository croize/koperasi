@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/detail">Detail Angsuran</a>
    </li>
    <li class="active">{{$sa->angsuran->anggota['nama']}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Detail Angsuran View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan detail angsuran {{$sa->angsuran->anggota['nama']}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Anggota </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->angsuran->anggota['nama']}}</span>
    </div>
  </div>
</div>
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal jatuh tempo </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->tgl_jatuh_tempo}}</span>
    </div>
  </div>
</div>
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Besar Angsuran </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->besar_angsuran}}</span>
    </div>
  </div>
</div>
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Keterangan </div>

    <div class="profile-info-value">
      @if($sa->ket == "Tuntas")
        <span class="label label-sm label-success">Tuntas</span>
      @else
        <span class="label label-sm label-warning">Belum Tuntas</span>
      @endif
    </div>
  </div>
</div>

@endsection
