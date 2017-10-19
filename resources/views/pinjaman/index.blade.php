@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>
    <li class="active">Pinjaman</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="col-xs-12">
  <h3 class="header smaller lighter blue">Pinjaman</h3>
  <a href="/pinjaman/create"><button class="btn btn-primary">
    <i class="ace-icon fa fa-pencil align-top bigger-125"></i>
    Create
  </button></a>
  <div class="clearfix">
    <div class="pull-right tableTools-container"></div>
  </div>

  <div class="table-header">
    Data Pinjaman
  </div>

  <!-- div.table-responsive -->

  <!-- div.dataTables_borderWrap -->
  <div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pinjaman</th>
          <th>Nama Anggota</th>
          <th>Besar Pinjaman</th>
          <th class="hidden-480">Tanggal Pengajuan Peminjaman</th>
          <th>Tanggal Acc Pinjaman</th>
          <th>Tanggal Peminjaman</th>
          <th>Tanggal Pelunasan</th>
          <th>Angsuran</th>
          <th class="hidden-480">Keterangan</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($sa as $su)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$su->nama_pinjaman}}</td>
          <td class="hidden-480">{{$su->anggota['nama']}}</td>
          <td>{{$su->besar_pinjaman}}</td>
          <td class="hidden-480">{{$su->tgl_pengajuan_peminjaman}}</td>
          <td class="hidden-480">{{$su->tgl_acc_peminjaman}}</td>
          <td class="hidden-480">{{$su->tgl_pinjaman}}</td>
          <td class="hidden-480">{{$su->tgl_pelunasan}}</td>
          <td class="hidden-480">{{$su->angsuran['angsuran_ke']}}</td>
          <td class="hidden-480">
            @if($su->ket == "Accepted")
              <span class="label label-sm label-success">Accepted</span>
            @else
              <span class="label label-sm label-warning">Pending</span>
            @endif
          </td>

          <td>
            <div class="hidden-sm hidden-xs action-buttons">
              <a class="blue" href="/pinjaman/{{$su->id_pinjaman}}">
                <i class="ace-icon fa fa-search-plus bigger-130"></i>
              </a>

              <a class="green" href="/pinjaman/{{$su->id_pinjaman}}/edit">
                <i class="ace-icon fa fa-pencil bigger-130"></i>
              </a>

              <a class="red" href="{{url('pinjaman/delete',$su->id_pinjaman)}}">
                <i class="ace-icon fa fa-trash-o bigger-130"></i>
              </a>
            </div>

            <div class="hidden-md hidden-lg">
              <div class="inline pos-rel">
                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                  <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                  <li>
                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                      <span class="blue">
                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                      <span class="green">
                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                      <span class="red">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
@section('jumlahdata')
  null, null,null,null,null,null,null,null,null,
@endsection
