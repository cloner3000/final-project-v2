let substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    let matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

// Declare Array
let typeahead_jenis_kelamin = ['L', 'P'];
let typeahead_kewarganegaraan = ['WNI', 'WNA'];
let typeahead_golongan_darah = ['A', 'B', 'O', 'AB'];
let typeahead_agama = ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha'];
let typeahead_status_perkawinan = ['Lajang', 'Menikah', 'Cerai Hidup', 'Cerai Mati'];
let typeahead_pendidikan = ['Tidak/Belum Sekolah', 'SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
let typeahead_pekerjaan = [
  'Belum/Tidak Bekerja',
  'Mengurus Rumah Tangga',
  'Pelajar/Mahasiswa',
  'Pensiunan',
  'Pegawai Negeri Sipil (PNS)',
  'Tentara Nasional Indonesia',
  'Kepolisian RI',
  'Perdagangan',
  'Karyawan Swasta',
  'Karyawan BUMN',
  'Guru',
  'Dosen',
  'Dokter',
  'Wiraswasta',
  'Buruh Harian Lepas'
];
let typeahead_kelurahan = ['Cipaganti', 'Dago', 'Lebak Gede', 'Lebak Siliwangi', 'Sekeloa', 'Sadang Serang'];
let typeahead_jenis_berkas = ['E-KTP', 'KK'];
let typeahead_shdk = [
  'Kepala Keluarga',
  'Suami',
  'Istri',
  'Anak',
  'Menantu',
  'Cucu',
  'Orangtua',
  'Mertua',
  'Famili Lain',
  'Pembantu',
  'Lainnya'
];

// Jenis Kelamin
$('.typeahead-jenis-kelamin').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'jenis_kelamin',
  source: substringMatcher(typeahead_jenis_kelamin)
});

// Kewarganegaraan
$('.typeahead-kewarganegaraan').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'kewarganegaraan',
  source: substringMatcher(typeahead_kewarganegaraan)
});

// Golongan Darah
$('.typeahead-golongan-darah').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'gol_darah',
  source: substringMatcher(typeahead_golongan_darah)
});

// Agama
$('.typeahead-agama').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'agama',
  source: substringMatcher(typeahead_agama)
});

// Status Perkawinan
$('.typeahead-status-perkawinan').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'status_perkawinan',
  source: substringMatcher(typeahead_status_perkawinan)
});

// Pendidikan
$('.typeahead-pendidikan').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'pendidikan',
  source: substringMatcher(typeahead_pendidikan)
});

// Pekerjaan
$('.typeahead-pekerjaan').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'pekerjaan',
  source: substringMatcher(typeahead_pekerjaan)
});

// Kelurahan
$('.typeahead-kelurahan').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'kelurahan',
  source: substringMatcher(typeahead_kelurahan)
});

// Jenis Berkas
$('.typeahead-jenis-berkas').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'jenis_berkas',
  source: substringMatcher(typeahead_jenis_berkas)
});

// SHDK
$('.typeahead-shdk').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'shdk',
  source: substringMatcher(typeahead_shdk)
});