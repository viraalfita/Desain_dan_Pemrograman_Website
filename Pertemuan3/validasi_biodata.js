document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  // Selecting input elements
  const nama = document.getElementById("nama");
  const alamat = document.getElementById("alamat");
  const tglLahir = document.getElementById("tglLahir");
  const jenisKelaminP = document.getElementById("jenisKelaminP");
  const jenisKelaminW = document.getElementById("jenisKelaminW");
  const kirimCheckbox = document.getElementById("setujuKirim");

  form.addEventListener("submit", function (event) {
    let valid = true;

    // Reset all error messages
    document.getElementById("cekNama").innerHTML = "";
    document.getElementById("cekAlamat").innerHTML = "";
    document.querySelector(".cekTglLahir").innerHTML = "";
    document.querySelector(".cekJenisKelamin").innerHTML = "";
    document.querySelector(".cekHobby").innerHTML = "";
    document.querySelector(".cekPekerjaan").innerHTML = "";
    document.querySelector(".cekNilaiAkhir").innerHTML = "";
    document.querySelector(".cekKirim").innerHTML = "";

    // Nama validation
    if (nama.value.trim() === "") {
      document.getElementById("cekNama").innerHTML = "Nama harus diisi.";
      valid = false;
    }

    // Alamat validation
    if (alamat.value.trim() === "") {
      document.getElementById("cekAlamat").innerHTML = "Alamat harus diisi.";
      valid = false;
    }

    // Tanggal Lahir validation
    if (tglLahir.value === "") {
      document.querySelector(".cekTglLahir").innerHTML = "Tanggal lahir harus diisi.";
      valid = false;
    }

    // Jenis Kelamin validation (at least one must be checked)
    if (!jenisKelaminP.checked && !jenisKelaminW.checked) {
      document.querySelector(".cekJenisKelamin").innerHTML = "Pilih jenis kelamin.";
      valid = false;
    }

    // Hobby validation (at least one must be checked)
    const hobbyChecked = document.querySelectorAll("input[name='hobby']:checked");
    if (hobbyChecked.length === 0) {
      document.querySelector(".cekHobby").innerHTML = "Pilih minimal satu hobby.";
      valid = false;
    }

    // Pekerjaan validation (at least one must be checked)
    const pekerjaanChecked = document.querySelectorAll("input[name='pekerjaan']:checked");
    if (pekerjaanChecked.length === 0) {
      document.querySelector(".cekPekerjaan").innerHTML = "Pilih minimal satu pekerjaan.";
      valid = false;
    }

    // Nilai Akhir validation
    const nilaiAkhir = document.getElementById("nilaiAkhir").value.trim();
    if (nilaiAkhir === "") {
      document.querySelector(".cekNilaiAkhir").innerHTML = "Masukkan nilai akhir.";
      valid = false;
    }

    // Kirim checkbox validation
    if (!kirimCheckbox.checked) {
      document.querySelector(".cekKirim").innerHTML = "Anda harus mencentang checkbox kirim.";
      valid = false;
    }

    // If form is invalid, prevent form submission
    if (!valid) {
      event.preventDefault(); // Stop the form from submitting
    }
  });
});
