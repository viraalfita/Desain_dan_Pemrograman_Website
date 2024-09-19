// validasi_biodata.js
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const cekNama = document.getElementById("cekNama");
  const cekAlamat = document.querySelector(".cekAlamat");
  const cekTglLahir = document.querySelector(".cekTglLahir");
  const cekJenisKelamin = document.querySelector(".cekJenisKelamin");
  const cekHobby = document.querySelector(".cekHobby");
  const cekPekerjaan = document.querySelector(".cekPekerjaan");
  const cekNilaiAkhir = document.querySelector(".cekNilaiAkhir");
  const cekKirim = document.querySelector(".cekKirim");
  
  form.addEventListener("submit", function (event) {
    // Mengambil nilai input
    const nama = document.getElementById("nama").value.trim();
    const alamat = document.getElementById("alamat").value.trim();
    const tglLahir = document.getElementById("tglLahir").value.trim();
    const jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked');
    const hobby = document.querySelector('input[name="hobby"]:checked');
    const pekerjaan = document.querySelector('input[name="pekerjaan"]:checked');
    const nilaiAkhir = document.getElementById("nilaiAkhir").value.trim();
    const kirim = document.getElementById("kirim").checked;



    let valid = true;

    // Validasi jika checkbox kirim tercentang
    if (kirim) {
      if (!nama) {
        cekNama.textContent = "Nama tidak boleh kosong!";
        valid = false;
      }
      if (!alamat) {
        cekAlamat.textContent = "Alamat tidak boleh kosong!";
        valid = false;
      }
      if (!tglLahir) {
        cekTglLahir.textContent = "Tanggal lahir tidak boleh kosong!";
        valid = false;
      }
      if (!jenisKelamin) {
        cekJenisKelamin.textContent = "Pilih jenis kelamin!";
        valid = false;
      }
      if (!hobby) {
        cekHobby.textContent = "Pilih salah satu hobby!";
        valid = false;
      }
     // Validasi pekerjaan: tidak boleh lebih dari satu
      if (pekerjaan.length === 0) {
        cekPekerjaan.textContent = "Pilih salah satu pekerjaan!";
        valid = false;
      } else if (pekerjaan.length > 1) {
        cekPekerjaan.textContent = "Pekerjaan tidak boleh lebih dari satu!";
        valid = false;
      }
      if (!nilaiAkhir) {
        cekNilaiAkhir.textContent = "Nilai akhir tidak boleh kosong!";
        valid = false;
      }
    }

    // Jika tidak valid, mencegah pengiriman form
    if (!valid) {
      event.preventDefault();
    }
  });
});
