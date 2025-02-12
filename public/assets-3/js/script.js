$(document).ready(function () {
  $(".example1").arctext({ radius: 200 });
});
// Ambil elemen-elemen yang dibutuhkan
var popup = document.getElementById("myPopup");
var closeBtn = document.getElementsByClassName("close")[0];
var isAudioPlaying = true;
var logo = document.getElementById("logo");

// Fungsi untuk menampilkan popup
function showPopup() {
  popup.style.display = "flex";
  document.body.style.overflow = "hidden";
  setTimeout(function () {
    popup.style.transform = "translateY(0)";
    popup.style.opacity = 1;
  }); // Tambahkan penundaan agar animasi berfungsi dengan baik
}

// Fungsi untuk menyembunyikan popup
function hidePopup() {
  var popupAudio = document.getElementById("popupAudio");
  popupAudio.play(); // Menghentikan audio
  popup.style.transform = "translateY(-100%)";
  document.body.style.overflow = "auto";
  popup.style.opacity = 0;
  setTimeout(function () {
    popup.style.display = "none";
    popup.style.opacity = 1;
    popup.style.transform = "translateY(0)"; // Reset transformasi saat popup disembunyikan
  }, 5000); // Waktu yang sesuai dengan durasi transisi
}

function pause() {
  var popupAudio = document.getElementById("popupAudio");
  if (isAudioPlaying) {
    popupAudio.pause(); // Menghentikan lagu jika sedang diputar
    isAudioPlaying = false;
  } else {
    popupAudio.play(); // Memulai kembali lagu jika tidak sedang diputar
    isAudioPlaying = true;
  }
}

// Tambahkan event listener pada tombol tutup
closeBtn.addEventListener("click", hidePopup);
logo.addEventListener("click", pause);
// Tampilkan popup setelah halaman dimuat
window.onload = showPopup;

document.addEventListener("DOMContentLoaded", function () {
  // Ambil elemen slide dan atur slide pertama sebagai aktif
  var slides = document.querySelectorAll(".slide");
  var currentSlide = 0;
  slides[currentSlide].classList.add("active");

  // Fungsi untuk pindah ke slide berikutnya
  function nextSlide() {
    // Sembunyikan slide saat ini
    slides[currentSlide].classList.remove("active");

    // Pindah ke slide berikutnya
    currentSlide = (currentSlide + 1) % slides.length;

    // Tampilkan slide berikutnya
    slides[currentSlide].classList.add("active");
  }

  // Atur interval perpindahan slide
  setInterval(nextSlide, 5000);
});

// fitur Hitung Mundur
// Mengatur waktu akhir perhitungan mundur
// var countDownDate = new Date("Jul 30, 2023 10:00:00").getTime();

// // Memperbarui hitungan mundur setiap 1 detik
// var x = setInterval(function () {
//   // Untuk mendapatkan tanggal dan waktu hari ini
//   var now = new Date().getTime();

//   // Temukan jarak antara sekarang dan tanggal hitung mundur
//   var distance = countDownDate - now;

//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("countdown").innerHTML = "Waktu telah habis!";
//     return;
//   }

//   // Perhitungan waktu untuk hari, jam, menit dan detik
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Keluarkan hasil dalam elemen dengan id = "demo"
//   document.getElementById("days").innerHTML = days;
//   document.getElementById("hours").innerHTML = hours;
//   document.getElementById("minutes").innerHTML = minutes;
//   document.getElementById("seconds").innerHTML = seconds;

//   // Jika hitungan mundur selesai, tulis beberapa teks
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);
function startCountdown(targetDate, countdownElementId) {
  var countDownDate = new Date(targetDate).getTime();

  // Memperbarui hitungan mundur setiap 1 detik
  var x = setInterval(function () {
      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();

      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;

      if (distance < 0) {
          clearInterval(x);
          document.getElementById(countdownElementId).innerHTML = "Waktu telah habis!";
          return;
      }

      // Perhitungan waktu untuk hari, jam, menit dan detik
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Keluarkan hasil dalam elemen dengan ID yang diterima
      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

  }, 1000);
}

// Show Cards
const showCardButton = document.getElementById("show-cards");
const cardContainer = document.getElementById("card-container");
const cards = document.querySelectorAll(".card");

showCardButton.addEventListener("click", function () {
  cardContainer.classList.toggle("show");
  if (cardContainer.classList.contains("show")) {
    showCardsSequentially();
  } else {
    resetCardStyles();
  }
});

function showCardsSequentially() {
  cards.forEach((card, index) => {
    card.style.animation = `cardFadeIn 0.2s ease ${index * 0.2 + 0.2}s forwards`;
  });
}

function resetCardStyles() {
  cards.forEach((card) => {
    card.style.animation = "";
  });
}

function salinNoRek(norek) {
  var textarea = document.createElement("textarea");
  textarea.value = norek;
  document.body.appendChild(textarea);

  textarea.select();
  document.execCommand("copy");
  document.body.removeChild(textarea);
  toastr["success"]("No Rekening Berhasil Disalin", "Success");
}

const resetForm = () => {
  document.getElementById('kirim').style.display = 'block';
  document.getElementById('hadiran').style.display = 'block';
  document.getElementById('labelhadir').style.display = 'block';
  document.getElementById('batal').style.display = 'none';
  document.getElementById('kirimbalasan').style.display = 'none';
  document.getElementById('idbalasan').value = null;
  document.getElementById('balasan').innerHTML = null;
  document.getElementById('nama').value = null;
  document.getElementById('hadiran').value = 0;
  document.getElementById('ucapan').value = null;
};

const balasan = async (button) => {
  button.disabled = true;
  let tmp = button.innerText;
  button.innerText = 'Loading...';

  const BALAS = document.getElementById('balasan');
  BALAS.innerHTML = null;

  let id = button.getAttribute('data-uuid').toString();
  let token = localStorage.getItem('token') ?? '';

  if (token.length == 0) {
      alert('Terdapat kesalahan, token kosong !');
      window.location.reload();
      return;
  }

  const REQ = {
      method: 'GET',
      headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + token
      }
  };

  await fetch(location.origin + '/api/daftar-ucapan' + id, REQ)
      .then((res) => res.json())
      .then((res) => {
          if (res.code == 200) {
              document.getElementById('kirim').style.display = 'none';
              document.getElementById('hadiran').style.display = 'none';
              document.getElementById('labelhadir').style.display = 'none';
              document.getElementById('batal').style.display = 'block';
              document.getElementById('kirimbalasan').style.display = 'block';
              document.getElementById('idbalasan').value = id;

              BALAS.innerHTML = `
              <div class="card-body p-2 my-2" style="border-bottom: 1px solid;">
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                          <strong>${res.data.nama}</strong>
                      </p>
                      <small class="text-dark m-0 p-0" style="font-size: 0.75rem;">${res.data.created_at}</small>
                  </div>
                  <hr class="text-dark my-1">
                  <p class="text-dark m-0 p-0" style="white-space: pre-line">${res.data.komentar}</p>
                  <br>
              </div>`;
          }

          if (res.error.length != 0) {
              if (res.error[0] == 'Expired token') {
                  alert('Terdapat kesalahan, token expired !');
                  window.location.reload();
                  return;
              }

              alert(res.error[0]);
          }
      })
      .catch((err) => alert(err));

  document.getElementById('ucapan').scrollIntoView({ behavior: 'smooth' });
  button.disabled = false;
  button.innerText = tmp;
};

const kirimBalasan = async () => {
  let nama = document.getElementById('nama').value;
  let komentar = document.getElementById('ucapan').value;
  let token = localStorage.getItem('token') ?? '';
  let id = document.getElementById('idbalasan').value;

  if (token.length == 0) {
      alert('Terdapat kesalahan, token kosong !');
      window.location.reload();
      return;
  }

  if (nama.length == 0) {
      alert('nama tidak boleh kosong');
      return;
  }

  if (nama.length >= 35) {
      alert('panjangan nama maksimal 35');
      return;
  }

  if (komentar.length == 0) {
      alert('pesan tidak boleh kosong');
      return;
  }

  document.getElementById('batal').disabled = true;
  document.getElementById('kirimbalasan').disabled = true;
  let tmp = document.getElementById('kirimbalasan').innerHTML;
  document.getElementById('kirimbalasan').innerHTML = `<span class="spinner-border spinner-border-sm me-1"></span>Loading...`;

  const REQ = {
      method: 'POST',
      headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + token
      },
      body: JSON.stringify({
          nama: nama,
          id: id,
          komentar: komentar
      })
  };

  await fetch('https://undangan-api-gules.vercel.app/api/comment', REQ)
      .then((res) => res.json())
      .then((res) => {
          if (res.code == 201) {
              resetForm();
          }

          if (res.error.length != 0) {
              if (res.error[0] == 'Expired token') {
                  alert('Terdapat kesalahan, token expired !');
                  window.location.reload();
                  return;
              }

              alert(res.error[0]);
          }
      })
      .catch((err) => alert(err));

  await ucapan();
  document.getElementById(id).scrollIntoView({ behavior: 'smooth' });

  document.getElementById('batal').disabled = false;
  document.getElementById('kirimbalasan').disabled = false;
  document.getElementById('kirimbalasan').innerHTML = tmp;
};

const innerCard = (comment) => {
  let result = '';

  // comment.forEach((data) => {
  //     result += `
  //     <div class="card-body border-start bg-light py-2 ps-2 pe-0 my-2 ms-3 me-0" id="${data.id}">
  //         <div class="d-flex flex-wrap justify-content-between align-items-center">
  //             <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
  //                 <strong>${data.nama}</strong>
  //             </p>
  //             <small class="text-dark m-0 p-0" style="font-size: 0.75rem;">${data.created_at}</small>
  //         </div>
  //         <hr class="text-dark my-1">
  //         <p class="text-dark mt-0 mb-1 mx-0 p-0" style="white-space: pre-line">${data.komentar}</p>
  //         <button style="font-size: 0.8rem;" onclick="balasan(this)" data-uuid="${data.uuid}" class="btn btn-sm btn-outline-dark py-0">Balas</button>
  //         ${innerCard(data.comment)}
  //     </div>`;
  // });

  return result;
};

const renderCard = (data) => {
  const DIV = document.createElement('div');
  DIV.classList.add('mb-3');
  DIV.innerHTML = `
  <div class="card-body p-2 m-0" id="${data.id}">
      <div class="row">
          <div class="col-1">
              <img src="../assets-4/img/envelope.png" style="width: 20px;" />
          </div>
          <div class="col-11">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                      <strong class="me-1">${data.nama}</strong>${data.konfirmasi == 'Hadir' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fa-solid fa-circle-xmark text-danger"></i>'}
                  </p>
                  <small class="text-dark m-0 p-0" style="font-size: 0.75rem;">${joinDate(new Date(data.created_at))}</small>
              </div>
              <hr class="text-dark my-1">
              <p class="text-dark mt-0 mb-1 mx-0 p-0" style="white-space: pre-line; text-align: left;">${data.ucapan}</p>
              <br>
          </div>
      </div>
  </div>`;
      // <button style="font-size: 0.8rem;" onclick="balasan(this)" data-uuid="${data.id}" class="btn btn-sm btn-outline-dark py-0">Balas</button>
      // ${innerCard(data.comment)}
  return DIV;
};

const ucapan = async () => {
  const UCAPAN = document.getElementById('daftarucapan');
  UCAPAN.innerHTML = `<div class="text-center"><span class="spinner-border spinner-border-sm me-1"></span>Loading...</div>`;

  const REQ = '';

  let slugUser = '';

  // split window.location.href
  let url = window.location.href;
  let split = url.split('/');
  slugUser = split[split.length - 1];
  slugUser = slugUser.split('?');
  

  await fetch(location.origin + '/api/daftar-ucapan/' + slugUser[0])
      .then((res) => res.json())
      .then((res) => {
          if (res.code == 200) {
              UCAPAN.innerHTML = null;
              let arr = Object.values(res.data).map(key => {
                  UCAPAN.appendChild(renderCard(key))
              });

              // let arr = Object.keys(res.data)
              // if (Array.isArray(res.data)) {  
              // }

              if (res.data.length == 0) {
                  UCAPAN.innerHTML = ``;
              }
          }

          // if (res.error.length != 0) {
          //     if (res.error[0] == 'Expired token') {
          //         alert('Terdapat kesalahan, token expired !');
          //         window.location.reload();
          //         return;
          //     }

          //     alert(res.error[0]);
          // }
      })
      .catch((err) => alert(err));
};

document.addEventListener('DOMContentLoaded', () => {
  ucapan()
})

function joinDate(date, separator = ' ') {
  function format(option) {
     let formatter = new Intl.DateTimeFormat('id', option);
     return formatter.format(date);
  }
  
  let options = [{day: 'numeric'}, {month: 'long'}, {year: 'numeric'}];
  // let joined = join(new Date, options, '-');

  return options.map(format).join(separator);
}
