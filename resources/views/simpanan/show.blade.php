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
    <li class="active">{{$sa->anggota['nama']}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Simpanan View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data simpanan {{$sa->anggota['nama']}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Simpanan </div>

    <div class="profile-info-value">
      <span class="editable" id="username">@if($sa->nm_simpanan == "SP") Simpan Pinjam @elseif($sa->nm_simpanan == "SY") Syariah @else Tabungan Keluarga @endif</span>
    </div>
  </div>
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Anggota</div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->anggota['nama']}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal Simpanan </div>

    <div class="profile-info-value">
      <span class="editable" id="country"> {{$sa->tgl_simpanan}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Besar Simpanan </div>

    <div class="profile-info-value">
      <span class="editable" id="age">Rp. {{$sa->besar_simpanan}}</span>
    </div>
  </div>
  <div class="profile-info-row">
    <div class="profile-info-name"> Keterangan </div>

    <div class="profile-info-value">
      @if($sa->ket == "Accepted")
        <span class="label label-sm label-success">Accepted</span>
      @else
        <span class="label label-sm label-warning">Pending</span>
      @endif
    </div>
  </div>
</div>

@endsection
