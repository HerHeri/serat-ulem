<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="The Wedding OF : {{ $du->nama_pengantin_pria }} & {{ $du->nama_pengantin_wanita }}">
    <meta property="og:description" content="{{ date('d F Y', strtotime($du->tanggal_resepsi)) }}">
    <meta property="og:image" content="{{ url('/app-assets/images/logo/logo.png') }}">
    <meta property="og:url" content="https://serat-ulem.my.id">
    <meta property="og:type" content="website">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet" />

    <!-- father icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my css -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-3/css/style.css" />
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-3/css/lightbox.css">
    <title>The Wedding Of : {{ $du->nama_pengantin_pria }} & {{ $du->nama_pengantin_wanita }}</title>
    <link rel="shortcut icon" href="{{ url('/') }}/assets-3/images/logo.png" />
    <!-- toastr -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-3/assets/toastr/toastr.min.css">
    <!-- sweaatalert -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-3/assets/sweetalert2/sweetalert2.min.css">
    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
      @keyframes spin {
        from {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(360deg);
        }
      }
    </style>
  </head>
  <body>
    
    <!-- popup start -->
    <div id="myPopup" class="popup">
      <div class="popup-container">
        <div class="popup-content">
          <h2 class="example1" data-aos="fade-down" data-aos-delay="800">The Wedding Of</h2>
          @php
              $pria = $du->nama_pengantin_pria;
              $first_word_pria = strtok($pria, " ");

              $wanita = $du->nama_pengantin_wanita;
              $first_word_wanita = strtok($wanita, " ");

              $tanggal_resepsi = date("d . m . Y", strtotime($du->tanggal_resepsi));
          @endphp
          <h1 data-aos="zoom-in" data-aos-delay="0" data-aos-duration="2000">{{ $first_word_pria }} <span> &</span> {{ $first_word_wanita }}</h1>
          <button data-aos="fade-up" data-aos-delay="800" class="close" style="border-radius: 8px !important;"><i data-feather="mail" style="vertical-align: middle;"></i> Buka Undangan</button>
          <audio id="popupAudio" src="{{ url('/') }}/assets-3/audio/utsmansong.mp3"></audio> <!-- Ganti dengan path file audio yang sesuai -->
        </div>
      </div>
    </div>
    
    <!-- popup end -->
    <!-- my Logo  -->
    <!-- Elemen logo -->
      <div id="logo">
        {{-- buatlah image bisa berputar --}}
        <img src="{{ url('/play-button.png') }}" alt="Logo" style="width: 60px; height: auto; animation: spin 10s linear infinite; opacity: 0.6;" />
        {{-- <img src="{{ url('/play-button.png') }}" alt="Logo" /> --}}
      </div>
    <!-- hero section start -->
    <section class="hero" id="home">
      <div class="slider">
        <img src="{{ url('/') }}/assets-3/images/hero/hero1.JPG" alt="" class="slide">
        <img src="{{ url('/') }}/assets-3/images/hero/hero2.JPG" alt="" class="slide">
        <img src="{{ url('/') }}/assets-3/images/hero/hero3.JPG" alt="" class="slide">
      </div>
      <div class="content" style="padding-bottom: 10rem; padding-top: 0rem;">
        <h4>The <span> Wedding Of</span></h4>
        <h1>{{ $first_word_pria }} <span> &</span> {{ $first_word_wanita }}</h1>
        <a href="">Save The Date | <span>{{ $tanggal_resepsi }}</span></a>
        <div class="countdown" id="countdown">
          <div class="waktu">
            <h5 id="days"></h5>
            <p>Days</p>
          </div>
          <div class="waktu">
            <h5 id="hours"></h5>
            <p>Hours</p>
          </div>
          <div class="waktu">
            <h5 id="minutes"></h5>
            <p>Minutes</p>
          </div>
          <div class="waktu">
            <h5 id="seconds"></h5>
            <p>Seconds</p>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->

    <!-- section quran start -->
    <section class="quran" id="quran">
      <div class="row">
        <div class="quran-img" data-aos="zoom-in" data-aos-duration="2000">
          <img src="{{ url('/') }}/assets-3/images/quran.png" alt="quran" />
        </div>
        <div class="content">
          <h3 data-aos="fade-up" data-aos-delay="700" data-aos-duration="2000">QS Ar-rum 21</h3>
          <p data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dan jenismu sendiri, agar kamu cenderung dan merasa tentram kepadanya, dan dia menjadikan di antaranya rasa kasih dan sayang"</p>
        </div>
      </div>
    </section>
    <!-- section quran end -->

    <!-- section about start -->
    <section class="about" id="about">
      <div class="row">
        <div class="about-img" data-aos="zoom-in-up">
          <img src="{{ url('/') }}/assets-3/images/utsman.jpg" alt="about" />
        </div>
        <div class="content">
          <h3 data-aos="fade-up" >{{ $du->nama_pengantin_pria }}</h3>
          <p data-aos="fade-up" data-aos-delay="300">Putra Dari :</p>
          <span data-aos="fade-up" data-aos-delay="300" >{{ $du->ayah_pengantin_pria }} <br> dan <br> {{ $du->ibu_pengantin_pria }}.</span>
          <a href="https://instagram.com/utsman520?igshid=MzNlNGNkZWQ4Mg==" data-aos="fade-up" data-aos-duration="2000" target="_blank" class="cba"><i data-feather="instagram" style="vertical-align: middle"></i> INSTAGRAM</a>
        </div>
      </div>
    </section>
    <!-- section about end -->

    <!-- section about2 start -->
    <section class="about2" id="about2">
      <div class="row">
        <div class="about2-img" data-aos="zoom-in-up">
          <img src="{{ url('/') }}/assets-3/images/yani.jpg" alt="about2" />
        </div>
        <div class="content">
          <h3 data-aos="fade-up">{{ $du->nama_pengantin_wanita }}</h3>
          <p data-aos="fade-up" data-aos-delay="300">Putri Dari :</p>
          <span data-aos="fade-up" data-aos-delay="300">{{ $du->ayah_pengantin_wanita }} <br> dan <br> {{ $du->ibu_pengantin_wanita }}.</span>
          <a href="https://instagram.com/_yniivzyus?igshid=OGQ5ZDc2ODk2ZA==" data-aos="fade-up" data-aos-duration="2000" target="_blank" class="cba"><i data-feather="instagram" style="vertical-align: middle"></i> INSTAGRAM</a>
        </div>
      </div>
    </section>
    <!-- section about2 end -->

    <!-- section Story start -->
    <section class="story" id="story">
      <h2 data-aos="zoom-in" >Our Love Story</h2>
      <div class="part">
        <h3 data-aos="fade-up">14 Agustus 2014</h3>
        <p >Tahun 2014, dimana tahun kita menjalani hubungan tepatnya di tanggal 14 Agustus 2014 Utsman mengungkapkan perasannya secara langsung kepada Yani.</p>
      </div>
      <div class="part">
        <h3 data-aos="fade-up">27 Feburari 2021</h3>
        <p >
          Kita memutuskan untuk benar-benar serius untuk ke jenjang selanjutnya. Dan akhirnya, pada tanggal 27 Feburari tahun 2021 kita melangsungkan pertunangan. 
        </p>
      </div>
      <div class="part">
        <h3 data-aos="fade-up">26 Juli 2023</h3>
        <p >Tahun ini, kita akan melangsungkan pernikahan tepatnya 26 Juli 2023, kita akan melaksanakan Akad Nikah dan di tanggal 30 Juli 2023 kita juga melangsungkan acara Resepsi. Kami mengubah status hingga menjadi pasangan suami istri. Semoga allah swt. Memberikan keberkahan pernikahan ini. "AMIN".</p>
      </div>
    </section>
    <!-- section Story end -->

    <section class="bg-event">
      <main class="event" id="date">
        <h2 data-aos="fade-right">Wedding <span>Event</span></h2>
  
        <div class="card" data-aos="fade-up-right" data-aos-delay="1000" data-aos-duration="1000">
          <div class="box-img">
            <div class="slider-img">
              <img src="{{ url('/') }}/assets-3/images/event/event.JPG" alt="" class="event-img" />
              <img src="{{ url('/') }}/assets-3/images/event/event1.JPG" alt="" class="event-img" />
              <img src="{{ url('/') }}/assets-3/images/event/event2.JPG" alt="" class="event-img" />
              
            </div>
          </div>
          <div class="box-date">
            <div class="title-event">
              <h3>Akad Nikah </h3>
            </div>
            <div class="date-event"> 
              <div class="tgl">
                <h5>{{ formatDateInIndonesian($du->tanggal_akad, 'day') }}</h5>
              </div>
              <div class="detail">
                <p style="font-size: 1.5rem;">{{ formatDateInIndonesian($du->tanggal_akad, 'date') }}</p>
                <p style="font-size: 1.5rem;">{{ formatDateInIndonesian($du->tanggal_akad, 'month') }}</p>
                <p style="font-size: 1.5rem;">{{ formatDateInIndonesian($du->tanggal_akad, 'year') }}</p>
              </div>

              <div class="jam">
                {{-- <p style="display: flex; justify-content: start; align-items: center; font-size: 11px;"><i data-feather="clock" style="color: #000; margin-right: 5px;"></i> {{ $du->jam_akad }} </p> --}}
                <div class="flex items-center space-x-2 text-gray-700 text-sm" style="display: flex; align-items: center; margin-top: 5px;">
                  <i data-feather="clock" class="w-4 h-4 text-blue-500" style="color: var(--dark-100);"></i>
                  <span class="font-medium" style="font-size: 1.7rem; margin-left: 5px; color: gray;">{{ $du->jam_akad }}</span>
                </div>              
                <div class="lokasi">
                  <h5>Lokasi Acara</h5>
                  <p>{{ $du->lokasi_akad }}</p>
                  {{-- <a href="https://goo.gl/maps/L2jcuRbeP6z76h6m7" target="_blank" class="cbt">Google Maps</a> --}}
               </div>
              </div>
           </div>
        </div>
      </main>
      <main class="event-2" id="date">
  
        <div class="card" data-aos="fade-up-left" data-aos-duration="1000"  data-aos-delay="1000"> 
          <div class="box-img">
            <div class="slider-img">
              <img src="{{ url('/') }}/assets-3/images/event/event4.JPG" alt="" class="event-2-img" />
              <img src="{{ url('/') }}/assets-3/images/event/event5.JPG" alt="" class="event-2-img" />
              <img src="{{ url('/') }}/assets-3/images/event/event6.JPG" alt="" class="event-2-img" /> 
            </div>
          </div>
          <div class="box-date">
            <div class="title-event-2">
              <h3>Resepsi </h3>
            </div>
            <div class="date-event-2"> 
              <div class="tgl">
                <h5>{{ formatDateInIndonesian($du->tanggal_resepsi, 'day') }}</h5>
              </div>
              <div class="detail">
                <p style="font-size: 1.5rem;">{{ formatDateInIndonesian($du->tanggal_resepsi, 'date') }}</p>
                <p style="font-size: 1.5rem;">{{ formatDateInIndonesian($du->tanggal_resepsi, 'month') }}</p>
                <p style="font-size: 1.5rem;">{{ formatDateInIndonesian($du->tanggal_resepsi, 'year') }}</p>
              </div>

              <div class="jam">
                <p style="display: flex; justify-content: start; align-items: center; font-size: 1.4rem;">
                  <i data-feather="clock" style="color: #000; margin-right: 5px;"></i> {{ $du->jam_resepsi }}
                </p>
                <div class="lokasi">
                  <h5>Lokasi Acara</h5>
                  <p>{{ $du->lokasi_resepsi }}</p>
                  {{-- <a href="https://goo.gl/maps/L2jcuRbeP6z76h6m7" class="cbt">Google Maps</a> --}}
               </div>
              </div>
           </div>
        </div>
      </main>
    </section>
    <!-- end Event Section-->

    <!-- Start Galley Section -->
    <div class="bg-gallery">
      <section class="gallery" id="gallery">
        <h2 data-aos="fade-right">Gallery Our Moment</h2>

        <div class="container">
          <div class="img-gallery">
            <a href="{{ url('/') }}/assets-3/images/gallery/1.JPG" data-lightbox="models" data-title="Caption1">
              <img src="{{ url('/') }}/assets-3/images/gallery/1.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/gallery/2.JPG" data-lightbox="models" data-title="Caption2">
              <img src="{{ url('/') }}/assets-3/images/gallery/2.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/gallery/3.JPG" data-lightbox="models" data-title="Caption3">
              <img src="{{ url('/') }}/assets-3/images/gallery/3.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/gallery/4.JPG" data-lightbox="models" data-title="Caption4">
              <img src="{{ url('/') }}/assets-3/images/gallery/4.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/gallery/9.JPG" data-lightbox="models" data-title="Caption5">
              <img src="{{ url('/') }}/assets-3/images/gallery/9.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/gallery/10.JPG" data-lightbox="models" data-title="Caption6">
              <img src="{{ url('/') }}/assets-3/images/gallery/10.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/gallery/11.JPG" data-lightbox="models" data-title="Caption7">
              <img src="{{ url('/') }}/assets-3/images/gallery/11.JPG" alt="" class="img">
            </a>
            <a href="{{ url('/') }}/assets-3/images/event/event5.JPG" data-lightbox="models" data-title="Caption8">
              <img src="{{ url('/') }}/assets-3/images/event/event5.JPG" alt="" class="img">
            </a>
        
          </div>
        </div>
      </section>
    </div>
    <!-- End Galley Section-->
    <!-- Start Wedding gift -->
    <section class="gift" id="gift">
      <h2 data-aos="fade-down" >Wedding Gift</h2>
      <p data-aos="fade-up" data-aos-delay="0">Bagi bapak/ibu/saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account atau e-wallet di bawah ini:</p>
      <div class="buttom" data-aos="fade-up" >
        <a class="rekening" id="show-cards"> Kilk Disini <i data-feather="arrow-right" style="vertical-align: middle"></i></a>
      </div>
      <div class="card-container" id="card-container">
        <div class="card">
          <h3>BRI</h3>
          <h5 id="textSalin">{{ $du->no_rek_digital_1 }}</h5>
          <p id="yani">{{ $du->nama_rek_digital_1 }}</p>
          <button class="salin" id="show-cards" onclick="salinNoRek({{ $du->no_rek_digital_1 }})"> <i data-feather="copy" style="vertical-align: middle"></i> Salin No Rekening </button>
        </div>
        <div class="card">
          <h3>BRI</h3>
          <h5 id="textSalin2">{{ $du->no_rek_digital_2 }}</h5>
          <p id="yani">{{ $du->nama_rek_digital_2 }}</p>
          <button class="salin" onclick="salinNoRek({{ $du->no_rek_digital_2 }})" id="show-cards"> <i data-feather="copy" style="vertical-align: middle"></i> Salin No Rekening </button>
        </div>
    
      </div>
    </section>
    <!-- End Wedding gift -->
    <!-- Start RSVP -->
    <section class="rsvp">
      <div class="row">

        <img src="{{ url('/') }}/assets-3/images/rsvp.jpg" alt="" class="rsvp-img">
        <div class="message" data-aos="fade-down">
          <form id="formUndangan" action="javascript:void(0)" method="post">
            @csrf
            <div class="input-group">
              <input type="text" name="nama" id="nama" placeholder="Nama">
              <div id="alert-nama"></div>
            </div>
            <div class="input-group">
              <select name="konfirmasi" id="konfirmasi" class="form-select" required>
                <option value="" selected>Konfirmasi Kehadiran</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
              </select>
              <div id="alert-konfirmasi"></div>
              {{-- <input type="text" name="hubungan" placeholder="Hubungan (Saudara, Teman Kerja, Teman Sekolah)"> --}}
            </div>
            <div class="input-group">
              <textarea  cols="30" rows="10" name="ucapan" id="ucapan" placeholder="Berikan Ucapan & Doa Terbaik Untuk kedua Mempelai"></textarea>
              <div id="alert-pesan"></div>
            </div>
            <button type="button" id="btn-submit" class="btn">Send<i data-feather="arrow-right" data-aos="fade-up" style="vertical-align: middle"></i></button>
          </form>
          {{-- <div class="overflow-y-scroll ucapan rounded-3 mt-4" style="max-height: 25rem;">
            <div id="daftarucapan" style="overflow-wrap: break-word !important;"></div>
          </div> --}}
          <div class="container-card" data-aos="fade-up">
            <div class="card-message" id="daftarucapan"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- End RSVP -->

    <!-- Start Doa -->
    <section class="doa" id="home">
  
      <div class="content">
        <h1 >TerimaKasih</h1>
        <h4>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami.</h4>
        <h4 style="margin-top: 8rem;" >KAMI YANG BERBAHAGIA</h4>
        <h3 >{{ $first_word_pria }} <span>&</span> {{ $first_word_wanita }}</h3>
      </div>
    </section> 
    <!-- End Doa -->

    <!-- start footer -->
    <footer>
      {{-- <div class="logo" >
        <img src="{{ url('/') }}/assets-3/images/logo.png" alt="logo">
        <a href="#" style="vertical-align: middle">imheri.my.id</a>
      </div> --}}
      <div class="socials" >
        <a href="" class="ig">@madeheriii</a>
      </div>
      <div class="credit" >
        <p>Copyright &copy; 2024</p>
        {{-- <h5>HUBUNGI KAMI</h5> --}}
      </div>
    </footer>
    <!-- end footer -->

    <!-- father icons -->  
    <script>
      feather.replace();
    </script>
    <!-- jquery -->
    <script src="{{ url('/') }}/assets-3/js/jquery.js"></script>
    <!-- arctext -->
    <script src="{{ url('/') }}/assets-3/js/script.js"></script>
    <!-- Lihgtbox js -->
    <script src="{{ url('/') }}/assets-3/js/lightbox-plus-jquery.js"></script>
    <!-- Message Strorage -->
    <script src="{{ url('/') }}/assets-3/js/strorage.js"></script>
    <!-- toastr -->
    <script src="{{ url('/') }}/assets-3/assets/toastr/toastr.min.js"></script>
    <!-- Aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- arctext -->
    <script src="{{ url('/') }}/assets-3/assets/Arctext/js/jquery.arctext.js"></script>
    <!-- sweetalert -->
    <script src="{{ url('/') }}/assets-3/assets/sweetalert2/sweetalert2.all.min.js"></script>
    {{-- <script src="{{ url('/') }}/assets-4/js/ucapan.js"></script> --}}
    <script>
        const gallery = document.querySelectorAll('.img');
        gallery.forEach((img, i) => {
            img.dataset.aos = 'fade-down';
            img.dataset.aosDelay = i * 100;
        });
        AOS.init({
          duration: 1500,
          once: true
        });

        startCountdown(`{{ $du->tanggal_resepsi }}`, "countdown");

        $('#btn-submit').on('click', function(e){
          e.preventDefault();
          let pesan = $('#ucapan').val()
          let nama = $('#nama').val()
          let konfirmasi = $('#konfirmasi').val()
          if (nama == '') {
            document.getElementById('alert-nama').innerHTML = '<span style="display: flex; text-align: left; color: red;">*Nama tidak boleh kosong</span>'
          }else{
            if (nama.length > 25) {
              document.getElementById('alert-nama').innerHTML = '<span style="display: flex; text-align: left; color: red;">*Panjang nama maksimal 25 karakter</span>'
            }else{
              document.getElementById('alert-nama').innerHTML = ''
            }
          }
          if (pesan == '') {
            document.getElementById('alert-pesan').innerHTML = '<span style="display: flex; text-align: left; color: red;">*Pesan tidak boleh kosong</span>'
          }else{
            document.getElementById('alert-pesan').innerHTML = ''
          }
          if (konfirmasi == '') {
            document.getElementById('alert-konfirmasi').innerHTML = '<span style="display: flex; text-align: left; color: red;">*Silahkan konfirmasi kehadiran</span>'
          }else{
            document.getElementById('alert-konfirmasi').innerHTML = ''
          }
          if(nama !== '' && pesan !== '' && konfirmasi !== ''){
            document.getElementById('alert-nama').innerHTML = ''
            document.getElementById('alert-pesan').innerHTML = ''
            document.getElementById('alert-konfirmasi').innerHTML = ''

            let form = $('#formUndangan').get(0);
            let formData = new FormData(form);
            $.ajax({
              url: location.origin + '/{{ $user->slug }}/store-ucapan',
              method: 'POST',
              data: formData,
              processData: false,
              cache: false,
              contentType: false,
              success: function(res){
                if(res.status == true){
                  Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: res.message,
                  })
                  $('#formUndangan').trigger("reset")
                  ucapan()
                }else{
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: res.message,
                  })
                }
              },
            })
          }
        })
    </script>
  </body>
</html>
