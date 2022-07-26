// ------- BAGIAN PERIODE MAGANG -----------

// Variabel untuk Periode dan Bulan Magang
var option3 = {
  '3a': 'Januari-Maret',
  '3b': 'April - Juni',
  '3c': 'Juli - September',
  '3d': 'Oktober - Desember'
};

var option6 = {
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
  'd1': 'D1',
  'd2': 'D2',
  'd3': 'D3',
  'd4': 'D4',
  's1': 'S1',
  's2': 'S2',
  's3': 'S3',
};

var pelajar = {
  'sma': 'SMA',
  'smk': 'SMK'
};

//bagian jenis institusi
var kampus = {
  'mulawarman': 'Universitas Mulawarman',
  'ui': 'Universitas Indonesia',
  'itb': 'ITB',
  'unpad': 'Universitas Padjadjaran',
  'ipb': 'IPB',
  'its': 'ITS'
};

var sekolahSMA = {
  'a': 'SMA A',
  'b': 'SMA B',
  'c': 'SMA C'
};

var sekolahSMK = {
  'd': 'SMK D',
  'e': 'SMK E',
  'f': 'SMK F'
};

//bagian jurusan
var jurKampus = {
  'a': 'Teknik A',
  'b': 'Teknik B',
  'c': 'Ilmu C',
  'd': 'Lainnya'
};

var jurSMA = {
  'ipa': 'IPA',
  'ips': 'IPS',
  'bahasa': 'Bahasa'
};

var jurSMK = {
  'tkj': 'Teknik Komputer dan Jaringan',
  'multimedia': 'Desain Grafis / Multimedia',
  'mesin': 'Teknik Pemesinan',
  'other': 'Lainnya'
};

var selectPendidikan = document.getElementById("tipependidikan");
var selectTingkat = document.getElementById("tingkatpendidikan");
var selectInstitusi = document.getElementById("institusi");
var selectJurusan = document.getElementById("jurusan");

// Event Listener untuk mengecek apakah Kategori Pendidikan Berubah
selectPendidikan.addEventListener("change", function () {
  var i;

  // DELETE OPTION
  //menghapus option tingkat pendidikan
  var tingkatLength = selectTingkat.options.length - 1;
  for (i = tingkatLength; i >= 0; i--) {
    selectTingkat.remove(i);
  }
  //menghapus option institusi 
  var institusiLength = selectInstitusi.options.length - 1;
  for (i = institusiLength; i >= 0; i--) {
    selectInstitusi.remove(i);
  }

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
  var i;
  //menghapus option tingkat pendidikan
  var jurusanLength = selectJurusan.options.length - 1;
  for (i = jurusanLength; i >= 0; i--) {
    selectJurusan.remove(i);
  }
  //menghapus option institusi 
  var institusiLength = selectInstitusi.options.length - 1;
  for (i = institusiLength; i >= 0; i--) {
    selectInstitusi.remove(i);
  }

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

  // DELETE OPTION
  //menghapus option jurusan 
  var jurusanLength = selectJurusan.options.length - 1;
  for (i = jurusanLength; i >= 0; i--) {
    selectJurusan.remove(i);
  }

  // ADD OPTION
  //mengisi opsi tingkat pendidikan
  for (index in mahasiswa) {
    selectTingkat.options[selectTingkat.length] = new Option(mahasiswa[index], index);
  }

  //mengisi opsi institusi
  for (index in kampus) {
    selectInstitusi.options[selectInstitusi.length] = new Option(kampus[index], index);
  }

  //mengisi opsi jurusan
  for (index in jurKampus) {
    selectJurusan.options[selectJurusan.length] = new Option(jurKampus[index], index);
  }
}

function addActivityItemPelajar() {
  for (index in pelajar) {
    selectTingkat.options[selectTingkat.length] = new Option(pelajar[index], index);
  }

  for (index in sekolahSMA) {
    selectInstitusi.options[selectInstitusi.length] = new Option(sekolahSMA[index], index);
  }

  document.getElementById("divFakultas").style.display = 'none';
}

function addActivityItemSMA() {
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
  //mengisi opsi institusi
  for (index in sekolahSMK) {
    selectInstitusi.options[selectInstitusi.length] = new Option(sekolahSMK[index], index);
  }

  //mengisi opsi jurusan
  for (index in jurSMK) {
    selectJurusan.options[selectJurusan.length] = new Option(jurSMK[index], index);
  }
}