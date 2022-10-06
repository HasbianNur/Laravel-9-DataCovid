@extends('layout.master')

{{-- @section('judul', 'About page') --}}

@section('konten')
<p>

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="https://pps.whatsapp.net/v/t61.24694-24/296806065_978412156273842_88459715687810673_n.jpg?ccb=11-4&oh=01_AVyIRQRe-v7BM9nN1ThRQLnTcYN6IXOBWQUgAXMfhGRJ_A&oe=633AAA2E" alt="Hasbian Nur" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4">Hasbian Nur</h1>
    <p class="lead">Student | Programmer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="10"
        d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,80C672,64,768,64,864,96C960,128,1056,192,1152,186.7C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col" data-aos="fade-down">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4" data-aos="fade-right">
          <p>Hello, My name is Hasbian Nur, you can call me hasbi. I am a backend developer. I am 17 years old and I live in Balikpapan, East Kalimantan.</p>
        </div>
        <div class="col-md-4" data-aos="fade-left">
          <p>Halo, Nama saya Hasbian Nur, Anda bisa memanggil saya hasbi. Saya seorang pengembang backend. Saya berumur 17 tahun dan saya tinggal di Balikpapan, Kalimantan Timur.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="wpu-contact-form">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->
</p>

<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbx0KOfrI9dDg2_oCNSmbNF3qDYVVbzEr1BD025t-i2j6v40v5NEWNKn2Xzj4C7XPX_HKQ/exec';
    const form = document.forms['wpu-contact-form'];
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      // ketika tombol submit diklik
      // tampilkan tombol loading, hilangkan tombol kirim
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then((response) => {
          // tampilkan tombol kirim, hilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          // tampilkan alert
          myAlert.classList.toggle('d-none');
          // reset formnya
          form.reset();
          console.log('Success!', response);
        })
        .catch((error) => console.error('Error!', error.message));
    });
  </script>
@endsection