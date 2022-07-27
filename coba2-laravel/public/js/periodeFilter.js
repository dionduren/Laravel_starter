// ------- BAGIAN PERIODE MAGANG -----------

// Variabel untuk Periode dan Bulan Magang
var option3 = {
  '': 'Pilih Bulan Magang',
  '3a': 'Januari-Maret',
  '3b': 'April - Juni',
  '3c': 'Juli - September',
  '3d': 'Oktober - Desember'
};

var option6 = {
  '': 'Pilih Bulan Magang',
  '6a': 'Januari - Juni',
  '6b': 'Juli - Desember'
};

var selectPeriode = document.getElementById("periode");
var selectBulan = document.getElementById("bulan");

// Aktifitas Perubahan pada opsi Periode
// Mengubah opsi pada bagian bulan
selectPeriode.addEventListener("change", function () {
  var i, L = selectBulan.options.length - 1;
  for (i = L; i >= 0; i--) {
    selectBulan.remove(i);
  }

  if (selectPeriode.value == "3") {
    addActivityItem3();
  }
  else if (selectPeriode.value == "6") {
    addActivityItem6();
  }
});

function addActivityItem3() {
  for (index in option3) {
    selectBulan.options[selectBulan.length] = new Option(option3[index], index);
  }
}

function addActivityItem6() {
  for (index in option6) {
    selectBulan.options[selectBulan.length] = new Option(option6[index], index);
  }
}

// ------- BAGIAN PENDIDIKAN -----------

// bagian jenis pendidikan
var mahasiswa = {
  '': 'Pilih Tingkat Pendidikan',
  'd2': 'D2',
  'd3': 'D3',
  'd4': 'D4',
  's1': 'S1',
  's2': 'S2'
};

var pelajar = {
  '': 'Pilih Tingkat Pendidikan',
  'sma': 'SMA',
  'smk': 'SMK'
};

//bagian jenis institusi
var kampus = {
  '': 'Pilih Institusi',
  'mulawarman': 'Universitas Mulawarman',
  'ui': 'Universitas Indonesia',
  'itb': 'ITB',
  'unpad': 'Universitas Padjadjaran',
  'ipb': 'IPB',
  'its': 'ITS'
};

var sekolahSMA = {
  '': 'Pilih Institusi',
  'a': 'SMA A',
  'b': 'SMA B',
  'c': 'SMA C'
};

var sekolahSMK = {
  '': 'Pilih Institusi',
  'd': 'SMK D',
  'e': 'SMK E',
  'f': 'SMK F'
};

//bagian jurusan
// var jurKampus = {
//   'a': 'Teknik A',
//   'b': 'Teknik B',
//   'c': 'Ilmu C',
//   'd': 'Lainnya'
// };

var jurSMA = {
  '': 'Pilih Jurusan',
  'ipa': 'IPA',
  'ips': 'IPS',
  'bahasa': 'Bahasa'
};

var jurSMK = {
  '': 'Pilih Jurusan',
  'tkj': 'Teknik Komputer dan Jaringan',
  'multimedia': 'Desain Grafis / Multimedia',
  'mesin': 'Teknik Pemesinan',
  'other': 'Lainnya'
};

var selectPendidikan = document.getElementById("tipependidikan");
var selectTingkat = document.getElementById("tingkatpendidikan");
var selectInstitusi = document.getElementById("institusi");
var selectJurusan = document.getElementById("jurusan");
var i;

// Event Listener untuk mengecek apakah Kategori Pendidikan Berubah
selectPendidikan.addEventListener("change", function () {
  var i;

  hapusInstitusi();
  hapusTingkat();

  // ADD OPTION
  //menjalankan fungsi bila kondisi memenuhi
  if (selectPendidikan.value == "mahasiswa") {
    addActivityItemMahasiswa();
  }
  else if (selectPendidikan.value == "pelajar") {
    addActivityItemPelajar();
  }
});

// Event Listener untuk mengecek apakah Tingkat Pendidikan Berubah
selectTingkat.addEventListener("change", function () {
  //menjalankan fungsi bila kondisi memenuhi
  if (selectTingkat.value == "sma") {
    addActivityItemSMA();
  }
  else if (selectTingkat.value == "smk") {
    addActivityItemSMK();
  }
});

function addActivityItemMahasiswa() {
  // Memunculkan Fakultas bila sebelumnya memilih Siswa sebagai kategori pendidikan
  document.getElementById("divFakultas").style.display = 'flex';
  document.getElementById("divJurusan").style.display = 'none';
  hapusJurusan();

  // ADD OPTION
  //mengisi opsi tingkat pendidikan
  for (index in mahasiswa) {
    selectTingkat.options[selectTingkat.length] = new Option(mahasiswa[index], index);
  }

  //mengisi opsi institusi
  for (index in kampus) {
    selectInstitusi.options[selectInstitusi.length] = new Option(kampus[index], index);
  }

  // //mengisi opsi jurusan
  // for (index in jurKampus) {
  //   selectJurusan.options[selectJurusan.length] = new Option(jurKampus[index], index);
  // }
}

function addActivityItemPelajar() {
  document.getElementById("divJurusan").style.display = 'flex';
  document.getElementById("divFakultas").style.display = 'none';
  hapusJurusan();

  for (index in pelajar) {
    selectTingkat.options[selectTingkat.length] = new Option(pelajar[index], index);
  }

  for (index in sekolahSMA) {
    selectInstitusi.options[selectInstitusi.length] = new Option(sekolahSMA[index], index);
  }

  //mengisi opsi jurusan
  for (index in jurSMA) {
    selectJurusan.options[selectJurusan.length] = new Option(jurSMA[index], index);
  }
}

function addActivityItemSMA() {
  hapusJurusan();
  hapusInstitusi();

  //mengisi opsi institusi
  for (index in sekolahSMA) {
    selectInstitusi.options[selectInstitusi.length] = new Option(sekolahSMA[index], index);
  }

  //mengisi opsi jurusan
  for (index in jurSMA) {
    selectJurusan.options[selectJurusan.length] = new Option(jurSMA[index], index);
  }
}

function addActivityItemSMK() {
  hapusJurusan();
  hapusInstitusi();

  //mengisi opsi institusi
  for (index in sekolahSMK) {
    selectInstitusi.options[selectInstitusi.length] = new Option(sekolahSMK[index], index);
  }

  //mengisi opsi jurusan
  for (index in jurSMK) {
    selectJurusan.options[selectJurusan.length] = new Option(jurSMK[index], index);
  }
}

// DELETE OPTION
//menghapus option tingkat pendidikan
function hapusTingkat() {
  var tingkatLength = selectTingkat.options.length - 1;
  for (i = tingkatLength; i >= 0; i--) {
    selectTingkat.remove(i);
  }
}

//menghapus option tingkat pendidikan
function hapusJurusan() {
  var jurusanLength = selectJurusan.options.length - 1;
  for (i = jurusanLength; i >= 0; i--) {
    selectJurusan.remove(i);
  }
}

//menghapus option institusi
function hapusInstitusi() {
  var institusiLength = selectInstitusi.options.length - 1;
  for (i = institusiLength; i >= 0; i--) {
    selectInstitusi.remove(i);
  }
}