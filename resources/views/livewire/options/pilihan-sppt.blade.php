<div>
    <div class="item form-group d-flex align-items-center mb-2">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="rayon_id">{{ ucwords(str_replace('-', ' ', $aplikasi['sebutan_rayon'] )) }} <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <select name="rayon_id" id="rayon_id" wire:model="selectedRayon" required="required" class="form-select " data-width="100%">
                <option value=''>-- Pilih {{ ucwords(str_replace('-', ' ', $aplikasi['sebutan_rayon'] )) }} --</option>
                @foreach($rayons as $rayon)
                    <option value="{{ $rayon->id }}" >{{ $rayon->nama_rayon}}</option>
                @endforeach
            </select>
        </div>
        @error('rayon_id')
        <div class="text-danger mt-1 d-block">{{ $message }}</div>
        @enderror
    </div>
    {{-- @if($selectedRayon > 0) --}}
    <div class="item form-group d-flex align-items-center mb-2">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="rt_id">RT <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <select name="rt_id" id="rt_id" wire:model="selectedRT" required="required" class="form-select " data-width="100%">
                <option value=''>-- Pilih RT --</option>
                @foreach($rts as $rt)
                    <option value="{{ $rt->id }}" >{{ $rt->nama_rt}}</option>
                @endforeach
            </select>
        </div>
        @error('rt_id')
        <div class="text-danger mt-1 d-block">{{ $message }}</div>
        @enderror
    </div>
    {{-- @endif --}}
    {{-- @if($selectedRT > 0) --}}
    <div class="item form-group d-flex align-items-center mb-2">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="sppt_id">SPPT | Nama Wajib Pajak <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <select name="sppt_id" id="sppt_id" wire:model="selectedSppt" required="required" class="form-select filter" data-width="100%">
                <option value=''>-- Pilih SPPT | Nama Wajib Pajak --</option>
                @foreach($sppts as $sppt)
                    <option value="{{ $sppt->id }}" >{{ $sppt->nop.'|'.$sppt->subjek_pajak->nama_subjek}}</option>
                @endforeach
            </select>
        </div>
        @error('sppt_id')
        <div class="text-danger mt-1 d-block">{{ $message }}</div>
        @enderror
    </div>
    {{-- @endif --}}
    {{-- @if($selectedSppt > 0) --}}
        <div class="item form-group d-flex mb-2">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_pagu_pajak">Nilai Pagu Pajak</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" value="Rp. {{ $pagu == 0 ? '-' : number_format($pagu, 0, ".", ".") }}" readonly>
            </div>
        </div>

        <div class="item form-group d-flex mb-2">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_denda">Denda</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" wire:model="denda" id="nilai_denda" name="nilai_denda" class="form-control inputmask" value="{{ old('nilai_denda') ?? '' }}">
            </div>
            @error('nilai_denda')
            <div class="text-danger mt-1 d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="item form-group d-flex mb-2">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="total_bayar">Total Bayar</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" value="Rp. {{ $total == 0 ? '-' : number_format($total, 0, ".", ".") }}" readonly>
            </div>
        </div>
    {{-- @endif --}}
</div>

@push('scripts')
    <script nonce="{{ csp_nonce() }}">
    document.addEventListener("DOMContentLoaded", () => {
        $(".filter").on('change', function(){
            let sppt = $('#sppt_id').val()
            livewire.emit('setSppt', sppt);
        })

            var elements = document.getElementsByTagName("SELECT");
            for (var i = 0; i < elements.length; i++) {
                elements[i].oninvalid = function (e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        switch (e.srcElement.id) {
                            case "rayon_id":
                                e.target.setCustomValidity("silakan isi pilih dari daftar {{ strtolower(str_replace('-', ' ', $aplikasi['sebutan_rayon'] )) }} !!!");
                                break;
                            case "rt_id":
                                e.target.setCustomValidity("silakan isi pilih dari daftar RT !!!");
                                break;
                            case "sppt_id":
                                e.target.setCustomValidity("silakan isi pilih dari daftar SPPT !!!");
                                break;
                        }
                    }
                };
                elements[i].oninput = function (e) {
                    e.target.setCustomValidity("");
                };
            }
        })
    </script>
@endpush
