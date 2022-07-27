var primary = "rgba(244, 98, 58, 1)";
var clear = "rgba(0, 0, 0, 0)";

window.addEventListener('DOMContentLoaded', event => {
  // inisiasi onLoad
  var stepNumber = 1
  navigateToFormStep(stepNumber);

  var nextStep = document.getElementById("next");
  var prevStep = document.getElementById("prev");
  var goto1 = document.getElementById("goto1");
  var goto2 = document.getElementById("goto2");
  var goto3 = document.getElementById("goto3");
  var goto4 = document.getElementById("goto4");
  var goto5 = document.getElementById("goto5");

  // Navigasi Tombol
  nextStep.addEventListener("click", function () {
    stepNumber++;
    navigateToFormStep(stepNumber);
  });

  prevStep.addEventListener("click", function () {
    stepNumber--;
    navigateToFormStep(stepNumber);
  });

  // Navigasi Navbar
  goto1.addEventListener("click", function () {
    stepNumber = 1;
    navigateToFormStep(stepNumber);
  });

  goto2.addEventListener("click", function () {
    stepNumber = 2;
    navigateToFormStep(stepNumber);
  });

  goto3.addEventListener("click", function () {
    stepNumber = 3;
    navigateToFormStep(stepNumber);
  });

  goto4.addEventListener("click", function () {
    stepNumber = 4;
    navigateToFormStep(stepNumber);
  });

  goto5.addEventListener("click", function () {
    stepNumber = 5;
    navigateToFormStep(stepNumber);
  });
});

const navigateToFormStep = (stepNumber) => {
  // Hapus semua kemunculan div form
  document.querySelectorAll(".form-step").forEach((formStepElement) => {
    formStepElement.style.display = "none";
  });

  // Highlight Navbar
  for (var x = 1; x <= 5; x++) {
    document.getElementById('selector-' + x).style.backgroundColor = clear;
  }
  document.getElementById('selector-' + stepNumber).style.backgroundColor = primary;

  // Kemunculan Tombol
  if (stepNumber == 1) {
    document.getElementById('prev').style.display = "none";
    document.getElementById('next').style.display = "block";
    document.getElementById('submit').style.display = "none";
  } else if (stepNumber > 1 && stepNumber < 5) {
    document.getElementById('submit').style.display = "none";
    document.getElementById('prev').style.display = "block";
    document.getElementById('next').style.display = "block";
  } else if (stepNumber == 5) {
    document.getElementById('prev').style.display = "block";
    document.getElementById('next').style.display = "none";
    document.getElementById('submit').style.display = "block";
  }

  // Memunculkan Div step ke-X
  document.querySelector("#step-" + stepNumber).style.display = "flex";

};