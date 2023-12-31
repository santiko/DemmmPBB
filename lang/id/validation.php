<?php

return [

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai multi versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted' => 'Isian :attribute harus diterima.',
    'accepted_if' => 'Isian :attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Isian :attribute bukan URL yang valid.',
    'after' => 'Isian :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Isian :attribute harus berupa tanggal setelah atau sama dengan tanggal :date.',
    'alpha' => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num' => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Isian :attribute harus berupa sebuah array.',
    'ascii' => 'Isian :attribute hanya boleh berisi karakter dan simbol alfanumerik byte tunggal.',
    'before' => 'Isian :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Isian :attribute harus berupa tanggal sebelum atau sama dengan tanggal :date.',
    'between' => [
        'numeric' => 'Isian :attribute harus antara :min dan :max.',
        'file' => 'Isian :attribute harus antara :min dan :max kilobytes.',
        'string' => 'Isian :attribute harus antara :min dan :max karakter.',
        'array' => 'Isian :attribute harus antara :min dan :max item.',
    ],
    'boolean' => 'Isian :attribute harus berupa true atau false',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Isian :attribute bukan tanggal yang valid.',
    'date_equals' => 'Isian :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Isian :attribute tidak cocok dengan format :format.',
    'decimal' => 'Isian :attribute harus memiliki :decimal tempat desimal.',
    'declined' => 'Isian :attribute harus ditolak.',
    'declined_if' => 'Isian :attribute harus ditolak ketika :other adalah :value.',
    'different' => 'Isian :attribute dan :other harus berbeda.',
    'digits' => 'Isian :attribute harus berupa angka :digits.',
    'digits_between' => 'Isian :attribute harus antara angka :min dan :max.',
    'dimensions' => 'Bidang :attribute tidak memiliki dimensi gambar yang valid.',
    'distinct' => 'Bidang isian :attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => 'Isian :attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.',
    'doesnt_start_with' => 'Isian :attribute tidak boleh dimulai dengan salah satu dari berikut ini: :values.',
    'email' => 'Isian :attribute harus berupa alamat surel yang valid.',
    'ends_with' => 'Isian :attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum' => 'Isian terpilih :attribute tidak valid.',
    'exists' => 'Isian :attribute yang dipilih tidak valid.',
    'file' => 'Bidang :attribute harus berupa sebuah berkas.',
    'filled' => 'Isian :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => 'Isian :attribute harus lebih besar dari :value.',
        'file' => 'Isian :attribute harus lebih besar dari :value kilobytes.',
        'string' => 'Isian :attribute harus lebih besar dari :value karakter.',
        'array' => 'Isian :attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => 'Isian :attribute harus lebih besar dari atau sama dengan :value.',
        'file' => 'Isian :attribute harus lebih besar dari atau sama dengan :value kilobytes.',
        'string' => 'Isian :attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => 'Isian :attribute harus memiliki :value item atau lebih.',
    ],
    'image' => 'Isian :attribute harus berupa gambar.',
    'in' => 'Isian :attribute yang dipilih tidak valid.',
    'in_array' => 'Bidang isian :attribute tidak terdapat dalam :other.',
    'integer' => 'Isian :attribute harus merupakan bilangan bulat.',
    'ip' => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Isian :attribute harus berupa JSON string yang valid.',
    'lowercase' => 'Isian :attribute harus huruf kecil.',
    'lt' => [
        'numeric' => 'Isian :attribute harus kurang dari :value.',
        'file' => 'Isian :attribute harus kurang dari :value kilobytes.',
        'string' => 'Isian :attribute harus kurang dari :value karakter.',
        'array' => 'Isian :attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => 'Isian :attribute harus kurang dari atau sama dengan :value.',
        'file' => 'Isian :attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string' => 'Isian :attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => 'Isian :attribute tidak boleh lebih dari :value item.',
    ],
    'mac_address' => 'Isian :attribute harus valid MAC address.',
    'max' => [
        'numeric' => 'Isian :attribute tidak boleh lebih besar dari :max.',
        'file' => 'Isian :attribute tidak boleh lebih besar dari :max kilobytes.',
        'string' => 'Isian :attribute tidak boleh lebih besar dari :max karakter.',
        'array' => 'Isian :attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => 'Isian :attribute harus dokumen berjenis : :values.',
    'mimetypes' => 'Isian :attribute harus dokumen berjenis : :values.',
    'min' => [
        'numeric' => 'Isian :attribute harus minimal :min.',
        'file' => 'Isian :attribute harus minimal :min kilobytes.',
        'string' => 'Isian :attribute harus minimal :min karakter.',
        'array' => 'Isian :attribute harus minimal :min item.',
    ],
    'min_digits' => 'Isian :attribute harus memiliki setidaknya :min angka.',
    'multiple_of' => 'Isian :attribute harus kelipatan :value.',
    'not_in' => 'Isian :attribute yang dipilih tidak valid.',
    'not_regex' => 'Isian :attribute formatnya tidak valid.',
    'numeric' => 'Isian :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Isian :attribute harus mengandung setidaknya satu huruf.',
        'mixed' => 'Isian :attribute harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Isian :attribute harus mengandung setidaknya satu angka.',
        'symbols' => 'Isian :attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => 'Pemberian :attribute telah muncul dalam kebocoran data. Silakan pilih yang berbeda dari :attribute.',
    ],
    'present' => 'Bidang isian :attribute wajib ada.',
    'prohibited' => 'Isian :attribute bidang yang dilarang.',
    'prohibited_if' => 'Isian :attribute bidang yang dilarang ketika :other adalah :value.',
    'prohibited_unless' => 'Isian :attribute bidang yang dilarang kecuali :other sedang dalam :values.',
    'prohibits' => 'Isian :attribute bidang dilarang :other dari sekarang.',
    'regex' => 'Format isian :attribute tidak valid.',
    'required' => 'Bidang isian :attribute wajib diisi.',
    'required_array_keys' => 'Bidang isian :attribute bidang harus berisi isian untuk: :values.',
    'required_if' => 'Bidang isian :attribute wajib diisi bila :other adalah :value.',
    'required_if_accepted' => 'Bidang Isian :attribute bidang diperlukan ketika :other diterima.',
    'required_unless' => 'Bidang isian :attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with' => 'Bidang isian :attribute wajib diisi bila terdapat :values.',
    'required_with_all' => 'Bidang isian :attribute wajib diisi bila terdapat :values.',
    'required_without' => 'Bidang isian :attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => 'Bidang isian :attribute wajib diisi bila tidak terdapat ada :values.',
    'same' => 'Isian :attribute dan :other harus sama.',
    'size' => [
        'numeric' => 'Isian :attribute harus berukuran :size.',
        'file' => 'Isian :attribute harus berukuran :size kilobyte.',
        'string' => 'Isian :attribute harus berukuran :size karakter.',
        'array' => 'Isian :attribute harus mengandung :size item.',
    ],
    'starts_with' => 'Isian :attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => 'Isian :attribute harus berupa string.',
    'timezone' => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique' => 'Isian :attribute sudah ada sebelumnya.',
    'uploaded' => 'Isian :attribute gagal diunggah.',
    'uppercase' => 'Isian :attribute harus huruf besar.',
    'url' => 'Format isian :attribute tidak valid.',
    'ulid' => 'isian :attribute harus valid ULID.',
    'uuid' => 'Isian :attribute harus valid UUID.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan menggunakan
    | konvensi "attribute.rule" dalam penamaan baris. Hal ini membuat cepat dalam
    | menentukan spesifik baris bahasa kustom untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar atribut 'place-holders'
    | dengan sesuatu yang lebih bersahabat dengan pembaca seperti Alamat Surel daripada
    | "surel" saja. Ini benar-benar membantu kita membuat pesan sedikit bersih.
    |
    */

    'attributes' => [],

];
