@extends('layout.main')
@section('body')
    <section id="home-section-1" class="swc-section-container">
      <div class="section-bg-small" id="section-1-bg-small1">
        <img src="/images/section1-bg-small1.png" alt="">
      </div>
      <div class="section-bg-small" id="section-1-bg-small2">
        <img src="/images/section1-bg-small2.png" alt="">
      </div>
      <div class="container-fluid swc-section">
        <div class="row">
          <div class="container">
            <div class="row d-flex justify-center">
              <div class="main-title">
                <img src="/images/title.png" alt="">
              </div>
            </div>
            <div class="row d-flex justify-center">
              <p class="prolog">
                Shine Women Conference adalah conference yang diadakan oleh shine Ministry (Pelayanan Kaum Wanita) yang berada di bawah naungan GKPB Fajar Pengharapan Bandung.
                <br/>
                Di dalam Shine Women Conference ini kami sangat merindukan setiap perempuan, dapat menemukan panggilan yang khusus & unik untuk setiap pribadi, yang Tuhan sudah persiapkan. Dan tentunya tidak hanya menemukan panggilan tersebut, tetapi juga menjalankan panggilan tersebut bersama dengan Tuhan.
              </p>
            </div>
            <div class="row d-flex justify-center">
              <div class="date-time">
                <span class="day">MARCH 13<sup>TH</sup>,2020: 5pm-9pm</span>
                <span class="day">MARCH 14<sup>TH</sup>,2020: 8.30am-4pm</span>
                <span class="address">JALAN PASIR KOJA NO.58 BANDUNG</span>
              </div>
            </div>
            <div class="row">
              <div class="register-button">
                <button class="button swc-button">
                  <span>REGISTER NOW</span>
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="bible-verse-section" class="swc-section-container">
      <div class="container">
        <div class="row d-flex justify-center">
          <div class="bible-verse-container">
            <div class="bible-verse-image">
              <img src="/images/bible-verse-main-image.png" alt="">
              <div class="bible-verse-asset" id="bible-verse-asset1">
                <img src="/images/bible-verse-asset1.png" alt="">
              </div>
              <div class="bible-verse-asset" id="bible-verse-asset2">
                <img src="/images/bible-verse-asset2.png" alt="">
              </div>
              <div class="bible-verse-asset" id="bible-verse-asset3">
                <img src="/images/bible-verse-asset3.png" alt="">
              </div>
            </div>
            <div class="bible-verse-content">
              <span class="verse">EPHESIANS 2:10</span>
              <span class="version">(NLT)</span>
              <p>
                "For we are God's masterpiece. He has created us a new in Christ Jesus, so we can do the good things he planned for us long ago."
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="home-section-2"class="swc-section-container">
      <div class="container-fluid speakers-container">
        <div class="section-bg-small" id="section-2-bg-small1">
          <img src="/images/section2-bg-small1.png" alt="">
        </div>
        <div class="section-bg-asset" id="section-2-bg-asset1">
          <img src="/images/section2-bg-asset1.png" alt="">
        </div>
        <div class="row d-flex justify-center swc-section">
          <h2 class="swc-section-title">SPEAKERS</h2>
          <div class="speakers">
            <ul>
              <li class="speaker">
                <div class="speaker-profile-picture">
                  <div class="profile-picture">
                    <img src="/images/speaker1.png" alt="">
                  </div>
                  <div class="speaker-name">
                    <span>Henny Kristianus</span>
                  </div>
                </div>
              </li>
              <li class="speaker">
                <div class="speaker-profile-picture">
                  <div class="profile-picture">
                    <img src="/images/speaker2.png" alt="">
                  </div>
                  <div class="speaker-name">
                    <span>Melasari Toto</span>
                  </div>
                </div>
              </li>
              <li class="speaker">
                <div class="speaker-profile-picture">
                  <div class="profile-picture">
                    <img src="/images/speaker3.png" alt="">
                  </div>
                  <div class="speaker-name">
                    <span>Grace Natalie</span>
                  </div>
                </div>
              </li>
              <li class="speaker">
                <div class="speaker-profile-picture">
                  <div class="profile-picture">
                    <img src="/images/speaker4.png" alt="">
                  </div>
                  <div class="speaker-name">
                    <span>Veronica Colondam</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="row d-flex justify-center guest-section swc-section">
          <h2 class="swc-section-title">PRAISE & WORSHIP WITH</h2>
          <div class="guest">
            <ul>
              <li class="speaker">
                <div class="speaker-profile-picture">
                  <div class="profile-picture">
                    <img src="/images/guest.png" alt="">
                  </div>
                  <div class="speaker-name">
                    <span>Franky Kuncoro</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid workshop-container">
        <div class="section-bg-asset" id="section-2-bg-asset3">
          <img src="/images/section2-bg-asset3.png" alt="">
        </div>
        <div class="section-bg-small" id="section-2-bg-small2">
          <img src="/images/section2-bg-small2.png" alt="">
        </div>
        <div class="row swc-section">
          <div class="container">
            <div class="row d-flex justify-center align-center flex-column">
              <div class="workshop-title-container">
                <h2 class="swc-section-title">WORKSHOP</h2>
                <div class="section-bg-asset" id="section-2-bg-asset2">
                  <img src="/images/section2-bg-asset2.png" alt="">
                </div>
              </div>
              <ul class="workshops">
                <li class="workshop">
                  <span class="workshop-title">BASIC MAKE UP</span>
                  <span class="workshop-speaker">Fedya Make Up</span>
                </li>
                <li class="workshop">
                  <span class="workshop-title">PARENTING</span>
                  <span class="workshop-speaker">Dr Paulus Kurnia</span>
                </li>
                <li class="workshop">
                  <span class="workshop-title">FASHION</span>
                  <span class="workshop-speaker">Mia Radjagukguk</span>
                </li>
                <li class="workshop">
                  <span class="workshop-title">ONLINE SHOP</span>
                  <span class="workshop-speaker">
                    Hanna <br>
                    <span class="beyond-infinity-bracket">Owner Hanako Babyshop</span>
                  </span>
                </li>
              </ul>
              <div class="rundown-button">
                <button class="button swc-button">
                  <span>RUNDOWN ACARA</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid video-promotion swc-section">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-8 offset-2 video-container">
                <video class="shine-promo-video" controls poster="/videos/thumbnail.png">Your browser does not support the &lt;video&gt; tag.
                  <source src="/videos/shine-promo-1.mp4" type="video/mp4" />
                </video>
              </div>
              {{-- <div class="col-8 offset-2 video-container">
                <img src="http://placehold.it/1000x400" alt="">
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid registration-price swc-section">
        <div class="section-bg-small" id="section-2-bg-small3">
          <img src="/images/section2-bg-small3.png" alt="">
        </div>
        <div class="section-bg-asset" id="section-2-bg-asset5">
          <img src="/images/section2-bg-asset5.png" alt="">
        </div>
        <div class="row swc-section d-flex flex-column align-center">
          <h2 class="swc-section-title">BIAYA<br>REGISTRASI</h2>
          <div id="section-2-asset4">
            <img src="/images/section2-bg-asset4.png" alt="">
          </div>
          <ul>
            <li class="price-type">
              <span class="price-title">EARLY BIRD</span>
              <span>JAN 14<sup>TH</sup> - FEB 21<sup>ST</sup> 2020</span>
              <span>RP 300.000/2 PERSONS</span>
              <span>RP 175.000/PERSON</span>
            </li>
            <li class="price-type">
              <span class="price-title">REGULER</span>
              <span>FEB 22<sup>ND</sup> - MAR 11<sup>TH</sup> 2020</span>
              <span>RP 350.000/2 PERSONS</span>
              <span>RP 200.000/PERSON</span>
            </li>
          </ul>
          <div class="register-button">
            <button class="button swc-button">
              <span>REGISTER NOW</span>
            </button>
          </div>
        </div>

      </div>
    </div>
    <div class="swc-section-container" id="home-section-3">
      <div class="container-fluid connect-container">
        <div class="section-bg-asset" id="section-3-bg-asset1">
          <img src="/images/section3-bg-asset1.png" alt="">
        </div>
        <div class="section-bg-asset" id="section-3-bg-asset2">
          <img src="/images/section3-bg-asset2.png" alt="">
        </div>
        <div class="row">
          <div class="container">
            <div class="row d-flex justify-center align-center flex-column">
              <h2 class="swc-section-title">CONNECT WITH US</h2>
              <ul class="social-media">
                <li class="socmed ig">
                  <div class="socmed-logo">
                    <img src="/images/ig.png" alt="">
                  </div>
                  <div class="socmed-name">
                    <span>SHINEMINISTRY.BDG</span>
                  </div>
                </li>
                <li class="socmed wa">
                  <div class="contact-us">
                    <span>CONTACT US!</span>
                  </div>
                  <div class="socmed-logo">
                    <img src="/images/wa.png" alt="">
                  </div>
                  <div class="socmed-name">
                    <span>WA 0812 8199 0905</span>
                    <span>(LENA SANDINI)</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection