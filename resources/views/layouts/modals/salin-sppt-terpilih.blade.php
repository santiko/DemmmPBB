<!-- Modal untuk hapus beberapa data -->
<div class="modal fade text-start" id="salinDataDipilih-{{ $table }}" tabindex="-1" role="dialog" aria-labelledby="salinDataDipilih-{{ $table }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="salinDataDipilih-{{ $table }}Label">Apakah Anda yakin menyalin data {{ $table }} yang dipilih ?</h5>
            </div>
            <div class="modal-body">
                <div class="mb-5">
                    Data yang dipilih akan disalin tahun {{ date('Y') }} <i class="fa fa-warning"></i><br>
                </div>
                <div class="clear"></div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Tidak</button>
                    <a href="#" class="btn btn-danger" id="salinAllSelectedRecord">
                        <i class="fa fa-trash me-2"></i>Ya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>