@extends('admin.layout.main')
@section('title', 'Data Mobil - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Transaksi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Transaksi</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                        <li>
                            <a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                            <form class="form-inline search-form">
                                <div class="form-group form-control-search">
                                    <input type="text" placeholder="Search..">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                {{-- <div class="card-header pb-0">
                    <h5>Table Transaksi </h5>
                </div> --}}
                {{-- btn add --}}
                <div class="card-header pb-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#Add" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Status Pembayaran</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>
                                        @if($data->status_pembayaran == 'Belum Pilih Pembayaran')
                                        <span class="badge badge-danger">{{ $data->status_pembayaran }}</span>
                                        @elseif($data->status_pembayaran == 'pending')
                                        <span class="badge badge-warning">{{ $data->status_pembayaran }}</span>
                                        @elseif($data->status_pembayaran == 'expired')
                                        <span class="badge badge-danger">{{ $data->status_pembayaran }}</span>
                                        @elseif($data->status_pembayaran == 'paid')
                                        <span class="badge badge-success">{{ $data->status_pembayaran }}</span>
                                        @endif
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#Detail{{ $data->id }}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Edit" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="Detail{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        @php
                                                        $detail_transaksi = \App\Models\DetailTransaksi::with('transaksi','mobil')->where('id_transaksi',$data->id)->get();
                                                        $no = 1;
                                                        @endphp
                                                        @foreach ($detail_transaksi as $detail)
                                                        <li>{{ $no++ }}. {{ $detail->mobil->nama }}</li><br>
                                                        @endforeach

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Recipient:</label>
                                                        <input class="form-control" id="recipient-name" type="text" value="@Mat" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="message-text">Message:</label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary" type="button">
                                                    Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}
                                {{-- Delete Modal --}}
                                <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda Yakin Akan Menghapus ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary" type="button">
                                                    Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Add Modal --}}
                <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="recipient-name">Recipient:</label>
                                        <input class="form-control" id="recipient-name" type="text" value="@Mat" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="message-text">Message:</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button class="btn btn-primary" type="button">
                                    Ok
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Modal --}}
            </div>
        </div>
        <!-- DOM / jQuery  Ends-->
    </div>
</div>
@endsection
