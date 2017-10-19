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
    <li class="active">{{$sa->nama_pinjaman}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Pinjaman View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data pinjaman {{$sa->nama_pinjaman}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Anggota</div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->anggota['nama']}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Besar Pinjaman </div>

    <div class="profile-info-value">
      <span class="editable" id="country">Rp. {{$sa->besar_pinjaman}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal Pengajuan Pinjaman </div>

    <div class="profile-info-value">
      <span class="editable" id="age">{{$sa->tgl_pengajuan_peminjaman}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal Acc Peminjaman </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->tgl_acc_peminjaman}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal Pinjaman </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->tgl_pinjaman}}</span>
    </div>
  </div>
  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal Pelunasan </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->tgl_pelunasan}}</span>
    </div>
  </div>
  <div class="profile-info-row">
    <div class="profile-info-name"> Angsuran Ke </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->angsuran['angsuran_ke']}}</span>
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
