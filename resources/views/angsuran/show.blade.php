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
    Angsuran View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data angsuran {{$sa->anggota['nama']}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Katagori Pinjaman </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->katagori['nama_pinjaman']}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Anggota </div>

    <div class="profile-info-value">
      {{$sa->anggota['nama']}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Besar Angsuran </div>

    <div class="profile-info-value">
      <span class="editable" id="age">{{$sa->besar_angsuran}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal Pembayaran </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->tgl_pembayaran}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Angsuran Ke </div>

    <div class="profile-info-value">
      {{$sa->angsuran_ke}}
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Keterangan </div>

    <div class="profile-info-value">
      @if($sa->ket == "Lunas")
        <span class="label label-sm label-success">Lunas</span>
      @else
        <span class="label label-sm label-warning">Belum Lunas</span>
      @endif
    </div>
  </div>
</div>

@endsection
