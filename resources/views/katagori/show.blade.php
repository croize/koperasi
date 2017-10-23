@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/katagori">Katagori</a>
    </li>
    <li class="active">{{$sa->nama_pinjaman}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Katagori View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data katagori peminjaman {{$sa->nama_pinjaman}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Pinjaman </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->nama_pinjaman}}</span>
    </div>
  </div>
</div>

@endsection
