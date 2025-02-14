<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Undangan Pernikahan</title>
    <meta name="description" content="Jasa undangan digital profesional untuk berbagai acara, termasuk pernikahan, ulang tahun, dan acara lainnya. Mudah digunakan, desain elegan, dan hemat biaya.">
    <meta name="keywords" content="jasa undangan digital, undangan pernikahan online, undangan digital kreatif, undangan ulang tahun digital, undangan online, undangan ramah lingkungan, buat undangan digital, undangan digital elegan, jasa desain undangan digital, undangan acara spesial">
    <meta name="author" content="Made Heri">
    <link rel="apple-touch-icon" href="{{ url('/') }}/assets-lp/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-lpssets/images/ico/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Ephesis&display=swap" rel="stylesheet"/>

    <!-- Simply CountDown -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-lp/Countdown/simplyCountdown.theme.default.css" />
    <script src="{{ url('/') }}/assets-lp/Countdown/simplyCountdown.min.js"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-lp/style-template-4.css" />
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-lp/lightbox2/dist/css/lightbox.min.css" />
    <style>
      @font-face{
        font-family: "Sunroll";
        src: url("{{ url('/') }}/assets-lp/fonts/Sunroll.ttf");
      }

      @font-face{
        font-family: "Eyesome Script";
        src: url("{{ url('/') }}/assets-lp/fonts/Eyesome Script.otf");
      }

      section, footer {
        /* text-center d-flex justify-content-center align-items-center */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 414px;
        height: auto;
        margin: 0 auto;
      }

      .elmnt-image {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 6rem;
        font-family: "Ephesis", cursive;
        color: var(--inv-accent);
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 0 auto 72px auto;
        text-shadow: var(--shadow);
      }

      .eyesome-script {
        font-family: "Eyesome Script", cursive;
        font-size: 3rem;
        color: var(--inv-accent);
        text-shadow: var(--shadow);
      }

      /* Animasi untuk gambar bagian bawah (gerak kiri-kanan) */
      @keyframes moveLeftRight {
          0% { transform: rotate(-2deg); }
          50% { transform: rotate(2deg); }
          100% { transform: rotate(-2deg); }
      }

      /* Animasi untuk gambar bagian atas (gerak atas-bawah) */
      @keyframes moveUpDown {
          0% { transform: rotate(-2deg); }
          50% { transform: rotate(2deg); }
          100% { transform: rotate(-2deg); }
      }

      /* Animasi untuk gambar bagian bawah (gerak kanan-kiri) */
      @keyframes moveRightLeft {
          0% { transform: rotate(2deg); }
          50% { transform: rotate(-2deg); }
          100% { transform: rotate(2deg); }
      }

      /* Animasi untuk gambar bagian atas (gerak bawah-atas) */
      @keyframes moveDownUp {
          0% { transform: rotate(2deg); }
          50% { transform: rotate(-2deg); }
          100% { transform: rotate(2deg); }
      }

      /* Gambar bagian atas kiri */
      .top-0.start-0 {
          animation: moveUpDown 4s ease-in-out infinite;
          width: 300px !important;
      }

      /* Gambar bagian atas kanan */
      .top-0.end-0 {
          animation: moveDownUp 4s ease-in-out infinite;
          width: 300px !important;
      }

      /* Gambar bagian bawah kiri */
      .bottom-0.start-0 {
          animation: moveLeftRight 4s ease-in-out infinite;
          bottom: -28px !important;
          left: -17px !important;
      }

      /* Gambar bagian bawah kanan */
      .bottom-0.end-0 {
          animation: moveRightLeft 4s ease-in-out infinite;
          bottom: -28px !important;
          right: -17px !important;
      }
    </style>
  </head>
  <body>
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white" style="width: 414px !important;" >
      <div class="frame">
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp"
          alt=""
          class="position-absolute top-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp"
          alt=""
          class="position-absolute top-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png"
          alt=""
          class="position-absolute bottom-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/br.png"
          alt=""
          class="position-absolute bottom-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
      </div>
      <main
        data-aos="zoom-in"
        data-aos-duration="2000"
        data-aos-easing="ease-in-out"
      >
        <!-- <h5 style="position: relative; top: -14px; font-size: 28px;" class="eyesome-script">The Wedding Of</h5> -->
        <div class="elmnt-image">
          <img src="{{ url('/') }}/assets-lp/img-template/temp4/gunungan.webp" title="Wedding" alt="Wedding" data-recalc-dims="1" style="width: 150px;" />
          <!-- <span style="transform: translate(10px, -10px);">D</span>
          <span style="transform: translate(-10px, 10px);">R</span> -->
        </div>
        <h1 style="font-size: 4rem;">Dian & Rahmat</h1>
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="row mb-0">
                <div class="col-3 m-0 p-1">
                  <div class="card p-2 my-auto rounded-4 bg-berem text-black" style="font-size: large;">
                    <p class="p-0 m-0" id="hari"></p>
                    Hari
                  </div>
                </div>
                <div class="col-3 m-0 p-1">
                  <div class="card p-2 my-auto rounded-4 bg-berem text-black" style="font-size: large;">
                    <p class="p-0 m-0" id="jam"></p>
                    Jam
                  </div>
                </div>
                <div class="col-3 m-0 p-1">
                  <div class="card p-2 my-auto rounded-4 bg-berem text-black" style="font-size: large;">
                    <p class="p-0 m-0" id="menit"></p>
                    Menit
                  </div>
                </div>
                <div class="col-3 m-0 p-1">
                  <div class="card p-2 my-auto rounded-4 bg-berem text-black" style="font-size: large;">
                    <p class="p-0 m-0" id="detik"></p>
                    Detik
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p style="font-size: medium; position: relative; top: 20px;">Kepada Yth. Bapak/Ibu/Saudara/i</p>
        <div class="mt-5" style="color: black;">Nama Tamu</div>
        <!-- <div class="simply-countdown"></div> -->
        <a href="#home" class="btn btn-lg mt-2" style="position: relative; top: 50px;" onClick="enablescroll()">Lihat Undangan</a>
      </main>
    </section>
    <section id="home" class="home" style="width: 414px !important;">
      <div class="frame">
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp"
          alt=""
          class="position-absolute top-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp"
          alt=""
          class="position-absolute top-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png"
          alt=""
          class="position-absolute bottom-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/br.png"
          alt=""
          class="position-absolute bottom-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-11 text-center mt-0">
            <h5 class="eyesome-script" style="font-size: 30px;" data-aos="fade-right" data-aos-duration="2000">Save The Date</h5>
            <div class="mb-4 mx-auto d-flex flex-column justify-content-center animate__animated animate__zoomIn animate__slower image-editable"
                style="width: 80%; overflow: hidden; aspect-ratio: 1 / 1; position: relative;">
                <!-- Gambar pasangan -->
                <div class="mx-auto image-editable"
                    style="width: 180px; height: 180px; margin-top: -46px; position: relative; z-index: 1;">
                    <img src="{{ url('/') }}/assets-lp/img-template/pasangan.webp" alt="Pasangan" class="w-100 h-100"
                        style="width: 200px !important; height: 200px !important;">
                </div>

                <!-- Frame mempelai -->
                <div class="frame-mempelai"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('./assets-lp/img-template/temp4/frame-mempelai.png');
                            background-size: 100%; background-repeat: no-repeat; z-index: 2;">
                </div>
            </div>
            <h5 class="eyesome-script" style="font-size: 30px;" data-aos="fade-right" data-aos-duration="2000">Dian & Rahmat</h5>
            <h2 data-aos="fade-left" data-aos-duration="2000">03 Januari 2024</h2>
            <p data-aos="fade-right" data-aos-duration="2000" style="font-size: medium; margin: 0 0 10px 0;">
              Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.
            </p>
            <p data-aos="fade-left" data-aos-duration="2000" style="font-size: medium;">
              (QS. Ar-Ruum 30 : 21)
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="pengantin" class="home" style="width: 414px !important; padding-top: 100px; padding-bottom: 10px;">
      <div class="frame">
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp"
          alt=""
          class="position-absolute top-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp"
          alt=""
          class="position-absolute top-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png"
          alt=""
          class="position-absolute bottom-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/br.png"
          alt=""
          class="position-absolute bottom-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
      </div>
      <div class="container">
        <div class="container text-center mempelai">
          <div class="row mb-2">
            <div class="col-12" data-aos="fade-right" data-aos-duration="2000">
              <p style="font-size: medium; line-height: 19px; margin: 0; position: relative;">
                Maha Suci Allah SWT <br>
                yang telah menciptakan Mahluk-Nya berpasang-pasangan. <br>
                Ya Allah Perkenankanlah kami menikahkan putra-putri kami :
              </p>
            </div>
            <div class="col-12" data-aos="fade-right" data-aos-duration="2000">
              <div class="animate__animated animate__zoomIn animate__slower" style="position: relative;">
                <div style="position: absolute; width: 100%; left: 0px; right: 0px; bottom: -19px; height: 74px; background-image: url('./assets-lp/img-template/photo-frame.webp'); background-size: contain; background-position: center center; background-repeat: no-repeat;"></div>
                <div class="image-editable" style="height: 120px; width: 120px; margin: auto auto 20px; border-radius: 100%; overflow: hidden;">
                  <img src="https://assets.satumomen.com/assets/pengantin-wanita-ilustrasi-1688039849.jpg" alt="pengantin-wanita-ilustrasi-1688039849.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
              </div>
              <h2 style="font-size: 2.5rem">Dian Purnama Sari</h2>
              <p style="font-size: medium; line-height: 19px;">Putri Dari <br />Bapak H. M. Ali Asmin <br />& Ibu Hj. Jannatun, S.Pd</p>
            </div>
            <div class="col-lg-6 offset-lg-3" data-aos="zoom-in" data-aos-duration="2000">
              <h2>Dengan</h2>
            </div>
            <div class="col-12" data-aos="fade-left" data-aos-duration="2000">
              <div class="animate__animated animate__zoomIn animate__slower" style="position: relative;">
                <div style="position: absolute; width: 100%; left: 0px; right: 0px; bottom: -19px; height: 74px; background-image: url('./assets-lp/img-template/photo-frame.webp'); background-size: contain; background-position: center center; background-repeat: no-repeat;"></div>
                <div class="image-editable" style="height: 120px; width: 120px; margin: auto auto 20px; border-radius: 100%; overflow: hidden;">
                  <img src="https://assets.satumomen.com/assets/pengantin-pria-ilustrasi-1688039880.jpg" alt="pengantin-pria-ilustrasi-1688039880.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
              </div>
              <h2 style="font-size: 2.5rem">Rahmat</h2>
              <p style="font-size: medium; line-height: 19px;">Putra Dari <br />Alm Bapak Muchtar Lutfi<br />& Ibu Rohani</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="info" class="info" style="width: 414px !important;">
      <div class="frame">
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp"
          alt=""
          class="position-absolute top-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp"
          alt=""
          class="position-absolute top-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png"
          alt=""
          class="position-absolute bottom-0 start-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/br.png"
          alt=""
          class="position-absolute bottom-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 text-center">
            <h2 style="font-size: 28px; font-weight: 200;" data-aos="fade-left" data-aos-duration="2000">Assalamu'alaikum Warahmatullahi Wabarakatuh</h2>
            <p class="alamat" data-aos="fade-left" data-aos-duration="2000" style="font-size: medium; line-height: 19px;">
              Dengan memohon rahmat dan ridho Allah SWT, kami mengharap kehadiran Bapak / Ibu / Saudara / i pada acara resepsi pernikahan putra-putri kami
            </p>
            <div class="card text-center text-bg-light mb-5 p-2">
              <div class="card-header fw-bold">Akad Nikah</div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block">
                    <i class="bi bi-calendar3 d-block"></i>
                    <span class="d-block">Rabu, 03 Januari 2024</span>
                    <span style="position: relative; top: -5px;">09.00 WIB</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card text-center text-bg-light mb-5 p-2">
              <div class="card-header fw-bold">Resepsi</div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-12 d-block">
                    <i class="bi bi-calendar3 d-block"></i>
                    <span class="d-block">Rabu, 03 Januari 2024</span>
                    <span style="position: relative; top: -5px;">11.00 WIB - Selesai</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- {{-- <section id="family" class="family" style="width: 414px !important;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="mt-3">
            <div class="container text-center">
              <div class="row justify-content-center">
                <div
                  class="col-12 text-center fw-bold mb-2"
                  data-aos="zoom-in"
                  data-aos-duration="2000"
                >
                  <h2>Turut Mengundang</h2>
                </div>
                <div
                  class="col-12 text-center mb-2 mt-3 fw-bold"
                  data-aos="zoom-in-right"
                  data-aos-duration="2000"
                >
                  <h4>Mempelai Wanita</h4>
                </div>
                <div
                  class="col-5 col-lg-3"
                  data-aos="zoom-in-right"
                  data-aos-duration="2000"
                >
                  <ul>
                    <li>Dani Suganda/Istri</li>
                    <li>Panca Purnama</li>
                    <li>Hj. Masriah</li>
                    <li>Hj. Saniah</li>
                    <li>Maimunah</li>
                    <li>M. Rum/Istri</li>
                    <li>Hj. Masaraiah</li>
                    <li>Samsarani/Suami</li>
                    <li>Asmara Jaya/Istri</li>
                    <li>M. Khaidir/Istri</li>
                    <li>Seluruh Keluarga</li>
                  </ul>
                </div>
                <div
                  class="col-5 col-lg-3"
                  data-aos="zoom-in-right"
                  data-aos-duration="2000"
                >
                  <ul>
                    <li>(Adek) P.Brandan</li>
                    <li>(Adek) P.Brandan</li>
                    <li>(Uwak) Medan</li>
                    <li>(Uwak) P.Brandan</li>
                    <li>(Uwak) P.Brandan</li>
                    <li>(Uwak) P.Brandan</li>
                    <li>(Uwak) P.Brandan</li>
                    <li>(Ibuk) Rampah</li>
                    <li>(Pakcik) P.Brandan</li>
                    <li>(Pakcik) P.Brandan</li>
                    <li></li>
                  </ul>
                </div>
                <div
                  class="col-12 text-center mb-2 mt-3 fw-bold mt-5"
                  data-aos="zoom-in-left"
                  data-aos-duration="2000"
                >
                  <h4>Mempelai Pria</h4>
                </div>
                <div
                  class="col-5 col-lg-3"
                  data-aos="zoom-in-left"
                  data-aos-duration="2000"
                >
                  <ul>
                    <li>Thaufikkhurrahman/Istri</li>
                    <li>Masran</li>
                    <li>Iwan Syarif/Istri</li>
                    <li>Rasid/Istri</li>
                    <li>Abdurrahman/Istri</li>
                    <li>H. Rasuli/Istri</li>
                    <li>Khaled/Istri</li>
                    <li>Bambang/Istri</li>
                    <li>Halidi/Istri</li>
                    <li>Rasqa Keenan</li>
                    <li>Seluruh Keluarga</li>
                  </ul>
                </div>
                <div
                  class="col-5 col-lg-3"
                  data-aos="zoom-in-left"
                  data-aos-duration="2000"
                >
                  <ul>
                    <li>(Abang) K. Lahang</li>
                    <li>(Bapak) Belengkong</li>
                    <li>(Acik) Batam</li>
                    <li>(Acik) Teluk Pinang</li>
                    <li>(Acik) Teluk Pinang</li>
                    <li>(Acik) K. Lahang</li>
                    <li>(Abang) Batam</li>
                    <li>(Abang) K. Lahang</li>
                    <li>(Bapak) K. Lahang</li>
                    <li>(Keponakan) K. Lahang</li>
                    <li></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}} -->

    <section class="gallery" id="gallery" style="width: 414px !important;">
        <div class="frame">
            <img src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp" alt=""
                class="position-absolute top-0 start-0 m-0" data-aos="zoom-out" data-aos-duration="2000"
                data-aos-easing="ease-in-out" style="width: 150px;" />
            <img src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp" alt=""
                class="position-absolute top-0 end-0" data-aos="zoom-out" data-aos-duration="2000"
                data-aos-easing="ease-in-out" style="width: 150px;" />
            <img src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png" alt=""
                class="position-absolute bottom-0 start-0 m-0" data-aos="zoom-out" data-aos-duration="2000"
                data-aos-easing="ease-in-out" style="width: 150px;" />
            <img src="{{ url('/') }}/assets-lp/img-template/temp4/br.png" alt=""
                class="position-absolute bottom-0 end-0 m-0" data-aos="zoom-out" data-aos-duration="2000"
                data-aos-easing="ease-in-out" style="width: 150px;" />
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center mb-5" data-aos="zoom-out" data-aos-easing="ease-in-out"
                    data-aos-duration="2000">
                    <h2 style="font-size: 38px; font-weight: 200;">Gallery Mempelai</h2>
                </div>
            </div>

            <div class="row row-cols-lg-12 row-cols-md-3 row-cols-sm-2 row-cols-2 justify-content-center">
                <div class="col mt-4" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/1.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/1.jpg"
                            alt="Ami Reza 1" class="img-fluid w-100 rounded" data-lightbox="gallery" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/2.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/2.jpg"
                            alt="Ami Reza 2" class="img-fluid w-100 rounded" data-lightbox="gallery" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/3.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/3.jpg"
                            alt="Ami Reza 3" class="img-fluid w-100 rounded" data-lightbox="gallery" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/4.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/4.jpg"
                            alt="Ami Reza 4" class="img-fluid w-100 rounded" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/5.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/5.jpg"
                            alt="Ami Reza 5" class="img-fluid w-100 rounded" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/6.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/6.jpg"
                            alt="Ami Reza 6" class="img-fluid w-100 rounded" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/9.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/9.jpg"
                            alt="Ami Reza 9" class="img-fluid w-100 rounded" />
                    </a>
                </div>
                <div class="col mt-4" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="2000">
                    <a href="{{ url('/') }}/assets-lp/img-template/mempelai/10.jpg" data-lightbox="gallery">
                        <img src="{{ url('/') }}/assets-lp/img-template/mempelai/thumbnail/10.jpg"
                            alt="Ami Reza 10" class="img-fluid w-100 rounded" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi" class="gifts" style="width: 414px !important;">
      <div class="frame">
        <img src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp" alt=""
            class="position-absolute top-0 start-0 m-0" data-aos="zoom-out" data-aos-duration="2000"
            data-aos-easing="ease-in-out" style="width: 150px;" />
        <img src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp" alt=""
            class="position-absolute top-0 end-0" data-aos="zoom-out" data-aos-duration="2000"
            data-aos-easing="ease-in-out" style="width: 150px;" />
        <img src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png" alt=""
            class="position-absolute bottom-0 start-0 m-0" data-aos="zoom-out" data-aos-duration="2000"
            data-aos-easing="ease-in-out" style="width: 150px;" />
        <img src="{{ url('/') }}/assets-lp/img-template/temp4/br.png" alt=""
            class="position-absolute bottom-0 end-0 m-0" data-aos="zoom-out" data-aos-duration="2000"
            data-aos-easing="ease-in-out" style="width: 150px;" />
    </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 text-center">
            <h2 data-aos="zoom-in-down" data-aos-duration="2000" style="font-size: 38px; font-weight: 200;">Lokasi Pernikahan</h2>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d995.0146651978059!2d98.29892426961422!3d4.008362337572285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMDAnMzAuMSJOIDk4wrAxNyc1OC40IkU!5e0!3m2!1sid!2sid!4v1701093038384!5m2!1sid!2sid"
              width="100%"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              data-aos="fade-right"
              data-aos-duration="2000"
            ></iframe>
            <p class="mt-5" data-aos="zoom-in-down" data-aos-duration="2000" style="font-size: medium; line-height: 19px;">
              Terima kasih atas doa dan restu yang telah anda berikan, jika anda
              ingin mengirimkan kado nikah, silahkan kirim dengan cara dibawah
              ini. Sebelumnya, kami mengucapkan banyak terima kasih.
            </p>
            <a
              href="https://maps.app.goo.gl/JGLV2bpX6moHwkPp6"
              target="_blank"
              class="btn btn-light btn-sm my-3 mt-5 mb-5"
              data-aos="zoom-in"
              data-aos-duration="2000"
              >Klik untuk membuka peta</a
            >
          </div>
        </div>
      </div>
    </section>

    <section id="gifts" class="gifts" style="width: 414px !important;">
      <div class="frame">
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tl.webp"
          alt=""
          class="position-absolute top-0 start-0 m-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/tr.webp"
          alt=""
          class="position-absolute top-0 end-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 300px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/bl.png"
          alt=""
          class="position-absolute bottom-0 start-0 m-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
        <img
          src="{{ url('/') }}/assets-lp/img-template/temp4/br.png"
          alt=""
          class="position-absolute bottom-0 end-0 m-0"
          data-aos="zoom-out"
          data-aos-duration="2000"
          data-aos-easing="ease-in-out"
          style="width: 150px;"
        />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 text-center">
            <h2 data-aos="zoom-in-down" data-aos-duration="2000" style="font-size: 38px; font-weight: 200;">Kirim Hadiah</h2>
            <p class="mb-5" data-aos="zoom-in-down" data-aos-duration="2000" style="font-size: medium; line-height: 19px;">
              Terima kasih atas doa dan restu yang telah anda berikan, jika anda
              ingin mengirimkan kado nikah, silahkan kirim dengan cara dibawah
              ini. Sebelumnya, kami mengucapkan banyak terima kasih.
            </p>
            <div class="card text-center text-bg-light mb-5 p-2">
              <div class="card-header fw-bold" style="background: none;">
                <img src="{{ url('/') }}/assets-lp/img-bank/mandiri-logo.png" data-aos="zoom-in" data-aos-duration="2000" style="margin: 0;" />
              </div>
              <div class="card-body">
                <div class="fw-bolds" data-aos="zoom-in-up" data-aos-duration="2000" >
                  <p id="myInput">1090018086470</p>
                  <p>Mandiri - Dian Purnama Sari</p>
                </div>
                <button class="btn btn-outline-purple mt-3">Salin</button>
                <button class="btn btn-outline-purple mt-3">Konfirmasi Whatsapp</button>
              </div>
            </div>
            <div class="card text-center text-bg-light mb-5 p-2">
              <div class="card-header fw-bold" style="background: none;">
                <img src="{{ url('/') }}/assets-lp/img-bank/Bank_Central_Asia.svg" data-aos="zoom-in" data-aos-duration="2000" style="margin: 0;" />
              </div>
              <div class="card-body">
                <div class="fw-bolds" data-aos="zoom-in-up" data-aos-duration="2000" >
                  <p id="myInput">1090018086470</p>
                  <p>Mandiri - Dian Purnama Sari</p>
                  <button class="btn btn-outline-purple mt-3">Salin</button>
                  <button class="btn btn-outline-purple mt-3">Konfirmasi Whatsapp</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer style="width: 414px !important;">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <small class="block"
              >&copy; 2023 Dian & Rahmat Wedding. All Right Reserved.</small
            >
            <small class="block"
              >Design by
              <a href="https://instagram.com/madeheriii">@madeheriii</a>.</small
            >
          </div>
        </div>
      </div>
    </footer>

    <div id="audio-container">
      <audio id="song" autoplay loop>
        <source
          src="{{ url('/') }}/assets-lp/Audio/Afgan ft. Rossa - Kamu Yang Kutunggu (Lirik).mp3"
          type="audio/mp3"
        />
      </audio>
      <div class="audio-icon-wrapper" style="display: none">
        <i class="bi bi-disc"></i>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Lightbox JS -->
    <script src="{{ url('/') }}/assets-lp/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Custom js -->
    <script src="{{ url('/') }}/assets-lp/script-template.js"></script>

    <script>
      // simplyCountdown(".simply-countdown", {
      //   year: 2024, // required
      //   month: 1, // required
      //   day: 3, // required
      //   hours: 9, // Default is 0 [0-23] integer
      //   words: {
      //     //words displayed into the countdown
      //     days: { singular: "hari", plural: "hari" },
      //     hours: { singular: "jam", plural: "jam" },
      //     minutes: { singular: "menit", plural: "menit" },
      //     seconds: { singular: "detik", plural: "detik" },
      //   },
      // });

      dateCount('2024-11-03 00:00:00');
    </script>

    <script>
      const rootElement = document.querySelector(":root");
      const audioIconWrapper = document.querySelector(".audio-icon-wrapper");
      const audioIcon = document.querySelector(".audio-icon-wrapper i");
      const song = document.querySelector("#song");
      let isPlaying = false;

      function disableScroll() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        window.onscroll = function () {
          window.scrollTo(scrollTop, scrollLeft);
        };

        rootElement.style.scrollBehavior = "auto";
      }

      function enablescroll() {
        window.onscroll = function () {};
        rootElement.style.scrollBehavior = "smooth";
        // localStorage.setItem("opened", "true");
        // playAudio();
      }
      function playAudio() {
        song.volume = 0.3;
        audioIconWrapper.style.display = "flex";
        song.play();
        isPlaying = true;
      }

      audioIconWrapper.onclick = function () {
        if (isPlaying) {
          song.pause();
          audioIcon.classList.remove("bi-disc");
          audioIcon.classList.add("bi-pause-circle");
        } else {
          song.play();
          audioIcon.classList.add("bi-disc");
          audioIcon.classList.remove("bi-pause-circle");
        }

        isPlaying = !isPlaying;
      };

      //   if (!localStorage.getItem("opened")) {
      //     disableScroll();
      //   }
      disableScroll();
    </script>

    <script>
      window.addEventListener("load", function () {
        const form = document.getElementById("my-form");
        form.addEventListener("submit", function (e) {
          e.preventDefault();
          const data = new FormData(form);
          const action = e.target.action;
          fetch(action, {
            method: "POST",
            body: data,
          }).then(() => {
            alert("Konfirmasi Kehadiran Berhasil Terkirim!");
          });
        });
      });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
