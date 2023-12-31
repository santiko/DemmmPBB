<x-app-layout title="Ubah Subjek Pajak">

    @section('breadcrumbs')
        <x-breadcrumbs navigations="Master Data" active="Ubah Subjek Pajak"></x-breadcrumbs>
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

                            <strong class="card-title">Ubah Subjek Pajak</strong>
                        </div>

                        <div class="card-body">
                            <form action="{{ route($table.'.update', encrypt($subjek->id)) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @livewire('options.pilihan-subjek', [
                                    'options' => $options,
                                    'subjek' => $subjek,
                                    'selectedSubjek' => $subjek->penduduk ?? null,
                                ])
                                @include('pages.master-data.subjek-pajak._form-control')
                            </form>

                            <span class="button-delete-right">
                                <!-- Tombol Hapus Data -->
                                <button type="button" class="btn btn-danger btn-circle me-2" data-bs-toggle="modal" data-bs-target="#{{ $table }}-{{ $subjek->id }}"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus {{ ucwords(str_replace('-', ' ', $table )) }}">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>

                                <!-- Modal Hapus Data -->
                                @include('layouts.modals.delete', ['table' => $table , 'data' => $subjek])
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

</x-app-layout>
