<x-app-layout title="Ubah {{ ucwords(str_replace('-', ' ', $table )) }}">

    @section('breadcrumbs')
        <x-breadcrumbs navigations="Master Data" active="Ubah {{ ucwords(str_replace('-', ' ', $table )) }}"></x-breadcrumbs>
    @endsection

    @section('content')
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route($table.'.index') }}" class="btn btn-outline-secondary btn-circle me-2"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali ke Tabel {{ ucwords(str_replace('-', ' ', $table )) }}">
                                <i class="fa fa-arrow-left"></i>
                            </a>

                            <strong class="card-title">Ubah {{ ucwords(str_replace('-', ' ', $table )) }}</strong>
                        </div>

                        <div class="card-body">
                            <form action="{{ route($table.'.update', encrypt($objek->id)) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @include('pages.master-data.objek-pajak._form-control')
                            </form>

                            <span class="button-delete-right">
                                <!-- Tombol Hapus Data -->
                                <button type="button" class="btn btn-danger btn-circle" data-bs-toggle="modal" data-bs-target="#{{ $table }}-{{ $objek->id }}"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus {{ ucwords(str_replace('-', ' ', $table )) }}">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>

                                <!-- Modal Hapus Data -->
                                @include('layouts.modals.delete', ['table' => $table , 'data' => $objek])
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

</x-app-layout>
