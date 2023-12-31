<div>
    <div class="item form-group d-flex mb-2">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nop">NOP<span class="required"> *</span></label>
        <div class="col-md-2 col-sm-2">
            <input type="text" id="nop_wilayah" name="nop_wilayah" required="required" class="form-control nop-wilayah ls-15" value="{{ $wilayah['kode_provinsi'].'.'.$wilayah['kode_kabupaten'].'.'.$wilayah['kode_kecamatan'].'.'.$wilayah['kode_desa'] }}" readonly>
        </div>
        <div class="col-md-1 col-sm-1">
            <input type="text" id="nop_blok" name="nop_blok" required="required" class="form-control nop-blok ls-15" value="{{ $blok ? '.'.$blok.'-' : $blok }}" readonly>
        </div>
        <div class="col-md-3 col-sm-3">
            <input type="text" id="nop" name="nop" required="required" maxlength="6" class="form-control nop-urut ls-15" value="{{ old('nop') ?? $nop }}">
        </div>
        @error('message')
        <div class="text-danger ms-2 d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="item form-group d-flex align-items-center mb-2">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="rayon_id">{{ ucwords(str_replace('-', ' ', $aplikasi['sebutan_rayon'] )) }} <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <select name="rayon_id" id="rayon_id" wire:model="selectedRayon" required="required" class="form-select " data-width="100%">
                <option value=''>-- Pilih {{ ucwords(str_replace('-', ' ', $aplikasi['sebutan_rayon'] )) }} --</option>
                @foreach($rayons as $rayon)
                <option value="{{ $rayon->id }}">{{ $rayon->nama_rayon}}</option>
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
    {{-- @endif
    @if($selectedRT > 0) --}}
    <div class="item form-group d-flex align-items-center mb-2">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="objek_pajak_id">Objek Pajak <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <select name="objek_pajak_id" id="objek_pajak_id" wire:model="selectedObjek" required class="form-select filter" data-width="100%">
                <option value=''>-- Pilih Objek Pajak --</option>
                @foreach($objeks as $objek)
                    <option value="{{ $objek->id }}" >{{ $objek->kode_blok.' - '.$objek->letak_objek}}</option>
                @endforeach
            </select>
        </div>
        @error('objek_pajak_id')
        <div class="text-danger mt-1 d-block">{{ $message }}</div>
        @enderror
    </div>
    {{-- @endif --}}
    @if($selectedObjek > 0)
        <div class="item form-group d-flex mb-2">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_pagu_pajak">Alamat Objek Pajak</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" value="{{ $alamat_objek }}" readonly>
            </div>
        </div>

        <div class="item form-group d-flex mb-2">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_pagu_pajak">Luas Objek Pajak Bumi</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" value="{{ number_format($luas_bumi, 0, ".", ".") }}" readonly>
            </div>
        </div>

        <div class="item form-group d-flex mb-2">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_pagu_pajak">Luas Objek Pajak Bangunan</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" value="{{ number_format($luas_bangunan, 0, ".", ".") }}" readonly>
            </div>
        </div>
    @endif
</div>

@push('scripts')
<script nonce="{{ csp_nonce() }}">
document.addEventListener("DOMContentLoaded", () => {
    $(".filter").on('change', function(){
        let objek = $('#objek_pajak_id').val()
        livewire.emit('setBlok', objek);
    })


        var elements = document.getElementsByTagName("INPUT");
        for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function (e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    switch (e.srcElement.id) {
                        case "nop":
                            e.target.setCustomValidity("silakan isi NOP !!!");
                            break;
                    }
                }
            };
            elements[i].oninput = function (e) {
                e.target.setCustomValidity("");
            };
        }

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
                        case "objek_pajak_id":
                            e.target.setCustomValidity("silakan isi pilih dari daftar objek pajak !!!");
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
