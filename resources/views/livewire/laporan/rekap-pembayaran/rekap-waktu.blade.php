<div>
    <div class="table-responsive mt-3">
        <table id="table-detail{{ $table }}-{{ $data->tanggal_bayar }}" class="table table-striped table-bordered width-100">
            <!-- Judul tabel -->
            <thead>
                <tr>
                    <th class="text-center"><small>No</small></th>
                    <th class="text-center"><small>Nama</small></th>
                    <th class="text-center"><small>{{ $sebutanRayon }}</small></th>
                    <th class="text-center"><small>RT</small></th>
                    <th class="text-center"><small>Pagu Pajak</small></th>
                    <th class="text-center"><small>Status</small> </th>
                </tr>
            </thead>

            <!-- Isi data dalam tabel -->
            <tbody>
                @foreach($details as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-start">{{ $item->sppt->subjek_pajak?->nama_subjek }}</td>
                        <td>{{ $item->sppt->objek_pajak?->rt?->rayon->nama_rayon }}</td>
                        <td>{{ $item->sppt->objek_pajak?->rt->nama_rt }}</td>
                        <td class="text-end">Rp {{ number_format($item->sppt->nilai_pagu_pajak, 0, ".", ".") }}</td>
                        <td>
                            @if($item->sppt->status == 1)
                                <span class="badge badge-danger">Terhutang</span>
                            @else
                                <span class="badge badge-success">Lunas</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <!--  Datatables -->
    @include('layouts.includes._scripts-datatable')

    <!--  Menampilkan Datatables -->
    <script nonce="{{ csp_nonce() }}" type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            $('#table-detail{{ $table }}-{{ $data->tanggal_bayar }}').DataTable({
                'destroy': true,
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                language:{
                    url: "{{ asset('build/js/bahasa.json') }}"
                },
            });
        });
    </script>
@endpush

