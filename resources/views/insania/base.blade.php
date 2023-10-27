
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('insania-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('insania-assets/style/main.css')}}">
    <title>Slicing Figma - Bootstrap 5</title>
</head>
<body>

    <div class="sky">
        <a href="#navbar">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M3 14.828v9.172h18v-9.172l-9-8.375-9 8.375zm11 7.172h-4v-6h4v6zm10-9.852l-1.361 1.465-10.639-9.883-10.639 9.868-1.361-1.465 12-11.133 12 11.148z"/></svg>
        </a>
    </div>

    <!-- navbar start -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('insania-assets/img/insania-company-logo.png') }}" alt="insania brand logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="partner.html">Partner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#galeri">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#info">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#karir">Karir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#kontak">Kontak</a>
                        </li>
                        
                    </ul>
                    <div class="d-flex">
                        <a href="{{ route('login') }}" class="btn d-flex justify-content-center align-items-center">Masuk/Daftar</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar end -->

    <!-- header start -->
    <section id="hero">
        <header class="head container">
            <div class="row">
                <div class="col-md-6 kiri my-auto">
                    <h1>Selamat Datang di Insania Sinergia</h1>
                    <p>Penyedia  Jasa Konsultasi dan  rekomendasi terbaik terkait rencana bisnis maupun permasalahan bisnis yang tengah dihadapi.</p>
                    <button class="btn fw-bolder">Segera Atur Jadwal Konsultasi Anda</button>
                </div>
                <div class="col-md-6 kanan my-auto ">
                    <img src="{{ asset('insania-assets/img/img-hero.png') }}" alt="image-meeting" class="img-fluid">
                </div>
            </div>
        </header>
    </section>
    <!-- header end -->

    <!-- About start -->
    <section id="about">
        <div class="about container">
            <div class="row">
                <div class="col-md-8 kiri">
                    <img src="{{asset('insania-assets/img/about-1.png')}}" alt="img-1" class="img-1">
                    <img src="{{asset('insania-assets/img/about-2.png')}}" alt="img-2" class="img-2">
                </div>
                <div class="col-md-4 kanan my-auto text-end">
                    <h1>Tentang Kami</h1>
                    <p>Jasa kami mencakup bantuan nasihat bisnis, bimbingan dan operasional berbagai fungsi manajemen bisnis, konsultasi manajemen olah agronomist dan agricultural economis pada bidang pertanian...</p>
                    <button class="btn fw-semibold">Tampilkan Lebih Banyak</button>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- partner start -->
    <section id="partner">
        <div class="partner container container-lg container-md container-sm">
            <h1 class="fw-bold text-center">Mengapa Harus Kami?</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <!-- card 1 -->
                <div class="col partner-card">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="partner-icon mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/></svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">Pandangan Objektif</h5>
                            <p class="card-text text-center">Konsultan bisnis dapat memberi pandangan pihak ketiga tentang bisnis yang dijalankan. Dengan melakukan evaluasi operasi yang jujur, akan diberikan pandangan objektif yang dapat membantu dengan perencanaan di masa depan.</p>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="col partner-card">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="partner-icon mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M0 0v19h24v-19h-24zm22 14h-20v-12h20v12zm-6.599 7l2.599 3h-12l2.599-3h6.802z"/></svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">Branding Layanan </h5>
                            <p class="card-text text-center">Kami memberikan banyak informasi tentang bagaimana memasarkan produk dan bagaimana menggunakan branding untuk mendapatkan pemasaran produk. Branding layanan dan produk adalah bagian penting dalam mempromosikan bisnis.</p>
                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="col partner-card">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="partner-icon mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12.324 7.021l.154.345c.237-.041.52-.055.847-.025l.133.577c-.257-.032-.53-.062-.771-.012l-.092.023c-.464.123-.316.565.098.672.682.158 1.494.208 1.815.922.258.578-.041.973-.541 1.163l.154.346-.325.068-.147-.329c-.338.061-.725.053-1.08-.041l-.1-.584c.294.046.658.087.938.03l.186-.06c.333-.165.231-.582-.264-.681-.367-.083-1.342-.021-1.705-.831-.205-.458-.053-.936.535-1.154l-.161-.361.326-.068m3.82 1.614c-.706-1.648-2.681-2.751-4.409-2.463-1.728.288-2.557 1.857-1.85 3.506.746 1.739 2.888 2.853 4.651 2.414 1.562-.388 2.28-1.887 1.608-3.457zm4.05-5.635l3.766 8.233c-5.433 4.223-12.654-.038-17.951 4.461l-3.766-8.233c4.944-4.779 11.773-.45 17.951-4.461zm3.806 12.014c-6.857 3.939-12.399-1.424-19.5 5.986l-4.5-9.964 1.402-1.462 3.807 8.401-.002.008c7.445-5.592 11.195-1.175 18.109-4.561.294.647.565 1.33.684 1.592z"/></svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">Menghemat Uang dan Waktu</h5>
                            <p class="card-text text-center">Mengandalkan teknik trial and error untuk bergerak maju. Namun ini bisa menjadi cara belajar yang mahal, terutama jika telah melakukan kesalahan yang mengakibatkan kerugian dana besar. kami dapat membantu merencanakan, membuat keputusan, dan mengembangkan bisnis secara strategis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner end -->

    <!-- service start -->
    <section id="service">
        <div class="service container">
            <h1 class="fw-bold mb-5">Pelayanan Kami</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                
                <!-- ser 1 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-1.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">E-Faktur Jasa</h5>
                        </div>
                    </div>
                </div>

                <!-- ser 2 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-2.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">Pendaftaran PT</h5>
                        </div>
                    </div>
                </div>

                <!-- ser 3 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-3.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jasa Pembukuan</h5>
                        </div>
                    </div>
                </div>

                <!-- ser 4 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-4.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">E-Faktur Jasa</h5>
                        </div>
                    </div>
                </div>
                
                <!-- ser 5 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-3.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jasa Pembukuan</h5>
                        </div>
                    </div>
                </div>

                <!-- ser 6 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-4.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">Penutupan PT</h5>
                        </div>
                    </div>
                </div>

                <!-- ser 7 -->
                <div class="col">
                    <div class="card card-hover h-100 p-3">
                        <img src="{{ asset('insania-assets/img/ser-1.svg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">E-Faktur Jasa</h5>
                        </div>
                    </div>
                </div>

                <!-- lainnya -->
                <div class="col">
                    <div class="card h-100 p-3 lainnya my-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-4">Selengkapnya</h5>
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.007 2c-5.518 0-9.998 4.48-9.998 9.998 0 5.517 4.48 9.997 9.998 9.997s9.998-4.48 9.998-9.997c0-5.518-4.48-9.998-9.998-9.998zm1.523 6.21s1.502 1.505 3.255 3.259c.147.147.22.339.22.531s-.073.383-.22.53c-1.753 1.754-3.254 3.258-3.254 3.258-.145.145-.335.217-.526.217-.192-.001-.384-.074-.531-.221-.292-.293-.294-.766-.003-1.057l1.977-1.977h-6.693c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h6.693l-1.978-1.979c-.29-.289-.287-.762.006-1.054.147-.147.339-.221.53-.222.19 0 .38.071.524.215z" fill-rule="nonzero"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service start -->

    <!-- footer start -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col">
                        <img src="img/insania-company-logo.png" alt="">
                        <div class="icon-footer ">
                            <svg width="45  " height="50" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M6 23h-3v-10l8.991-8.005 9.009 8.005v10h-3v-9h-12v9zm1-2h10v2h-10v-2zm0-3h10v2h-10v-2zm10-3v2h-10v-2h10zm-5-14.029l12 10.661-1.328 1.493-10.672-9.481-10.672 9.481-1.328-1.493 12-10.661z"/></svg>
                            <span>Jl. Perintis Kemerdekaan No.59, Kota Makassar</span>
                        </div>
                        <div class="icon-footer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" viewBox="0 0 24 24"><path d="M16 0c-3.169 0-6 2.113-6 5.003 0 1.025.369 2.032 1.023 2.812.027.916-.511 2.228-.997 3.184 1.301-.235 3.151-.754 3.989-1.268 4.619 1.124 7.985-1.702 7.985-4.728 0-2.905-2.851-5.003-6-5.003zm-2.5 5.75c-.414 0-.75-.336-.75-.75s.336-.75.75-.75.75.336.75.75-.336.75-.75.75zm2.5 0c-.414 0-.75-.336-.75-.75s.336-.75.75-.75.75.336.75.75-.336.75-.75.75zm2.5 0c-.414 0-.75-.336-.75-.75s.336-.75.75-.75.75.336.75.75-.336.75-.75.75zm-6.5 6.853v3.397h-8v-8h4.766c-.491-.919-.766-1.945-.766-2.997v-.003h-4c-1.104 0-2 .896-2 2v15c0 1.104.896 2 2 2h8c1.104 0 2-.896 2-2v-10.047c-.634.257-1.34.476-2 .65zm-6 8.397h-2v-1h2v1zm0-2h-2v-1h2v1zm3 2h-2v-1h2v1zm0-2h-2v-1h2v1zm3 2h-2v-1h2v1zm0-2h-2v-1h2v1z"/></svg>
                            <span>+6281-2345-6782</span>
                        </div>
                        <div class="icon-footer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/></svg>
                            <span>insaniasinergia@gmail.com</span>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Layanan Insania Sinergia</h4>
                        <h5>Jasa Pembukuan</h5>
                        <h5>Jasa Pendampingan</h5>
                        <h5>Konsultasi Pajak</h5>
                        <h5>Pembuatan dan Perubahan akta</h5>
                        <h5>Kuasa hukum pengadilan pajak</h5>
                    </div>
                    <div class="col">
                        <h4>Sumber Data</h4>
                        <h5>FAQ</h5>
                        <h5>Studi Kasus</h5>
                    </div>
                    <div class="col">
                        <h4>Company</h4>
                        <h5>About
                            </h5>
                        <h5>Contact
                            </h5>
                        <h5>Careers
                            </h5>
                        <h5>Youtube
                            </h5>
                        <h5>Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="{{ asset('insania-assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>