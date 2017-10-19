@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/anggota">Anggota</a>
    </li>
    <li class="active">{{$sa->nama}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Anggota View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data anggota {{$sa->nama}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->nama}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tempat Tanggal Lahir </div>

    <div class="profile-info-value">
      <span class="editable" id="country">{{$sa->tmp_lhr}}, {{$sa->tgl_lahir}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Alamat </div>

    <div class="profile-info-value">
      <span class="editable" id="age">{{$sa->alamat}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Nomor Telepon </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->no_tlp}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Jenis Kelamin </div>

    <div class="profile-info-value">
      @if($sa->j_kel = "L")
        <i class="fa fa-male" aria-hidden="true"></i>
        Laki-Laki
      @else
        <i class="fa fa-female" aria-hidden="true"></i>
        Perempuan
      @endif
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Nomor Telepon </div>

    <div class="profile-info-value">
      @if($sa->status = "Approved")
        <span class="label label-sm label-success">Approved</span>
      @else
        <span class="label label-sm label-warning">Pending</span>
      @endif
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Keterangan </div>

    <div class="profile-info-value">
      <span class="editable" id="login">{{$sa->ket}}</span>
    </div>
  </div>
</div>

@endsection
