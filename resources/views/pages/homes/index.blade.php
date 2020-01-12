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
    <section id="home-section-2" class="swc-section-container">
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
    <div id="home-section-3"class="swc-section-container">
      <div class="container-fluid">
        <div class="row d-flex justify-center">
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
        <div class="row d-flex justify-center guest-section">
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
        <div class="row">
          <div class="container">
            <div class="row d-flex justify-center align-center flex-column">
              <h2 class="swc-section-title">WORKSHOP</h2>
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
    </div>
@endsection