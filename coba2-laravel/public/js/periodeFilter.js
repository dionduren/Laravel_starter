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