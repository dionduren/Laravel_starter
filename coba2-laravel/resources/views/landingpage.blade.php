@extends('layouts.main')

@section('container')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container" style="padding-top : 100px;">
            <div>
                <h1 class="text-white font-weight-bold text-center">Selamat Datang di Program Kerja Praktik</h1>
                <h2 class="text-white font-weight-bold text-center">PT Pupuk Kaltim</h2>
                <hr class="divider" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-auto py-3" style="height: 400px; width: 400px">
                        <img src="img/ilustrasi1.png" alt="Office"
                            style='height: 100%; width: 100%; object-fit: contain; border-radius:25px; '>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="row">
                            <div class="col" style="text-align:justify;">
                                <p class="text-white">
                                    Dalam rangka untuk mensukseskan Program Corporate Social Responsibility (CSR), PT.
                                    Pupuk Kalimantan Timur membuka kesempatan bagi siswa-siswi SMK kota Bontang dan
                                    sekitarnya serta Mahasiswa-mahasiswi dari seluruh perguruan tinggi di Indonesia
                                    untuk dapat ikut berpartisipasi dalam Program Kerja Praktik. </p>
                                <p class="text-white">
                                    Selain itu, bagi Mahasiswa-mahasiswi dari seluruh perguruan tinggi di Indonesia yang
                                    akan mengerjakan tugas akhirnya (Skripsi/Tesis), PT. Pupuk Kalimantan Timur juga
                                    memberikan kesempatan untuk melakukan Penelitian/Pengambilan Data untuk mendapatkan
                                    bahan tugas akhir mereka.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-light" href="https://internship.pupukkaltim.com/usman.pdf"
                                        style="color: #f4623a">Lihat Detail</a>
                                    <a class="btn btn-primary mx-3" href="#about">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">PENGUMUMAN</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Diinformasikan bahwa sehubugan dengan masa pandemi Covid 19, PKL
                        periode tahun 2020 dibatalkan, sedangkan PKL periode 2021 dilaksanakan secara on line sampai
                        dengan pemberitahuan lebih lanjut</p>
                    <a class="btn btn-light btn-xl" href="/register">Daftar Sekarang!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="benefit">
        <div class="container px-4 px-lg-3">
            <h2 class="text-center mt-0">What Will You Get?</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-patch-check fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Program Certificate</h3>
                        <p class="text-muted mb-0">Mendapatkan sertifikat FHCI BUMN sebagai apresiasi atas kontribusi yang
                            telah diberikan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-briefcase-fill fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Real Project Challenge</h3>
                        <p class="text-muted mb-0">Terjun langsung dalam use case nyata pada berbagai disiplin ilmu.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Experience in National & Worldwide Company</h3>
                        <p class="text-muted mb-0">Pengalaman internship di perusahaan terkemuka, sebagai gerbang karir.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-file-earmark-richtext fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Final Assignment Project</h3>
                        <p class="text-muted mb-0">Berbagai use case dapat dijadikan topik untuk Tugas Akhir (TA) dengan
                            supervisor internship sebagai pembimbing..</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people-fill fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Corporate Culture</h3>
                        <p class="text-muted mb-0">Budaya kerja di perusahaan digital telekomunikasi dengan core value
                            Solid, Speed, Smart.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people-fill fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Corporate Culture</h3>
                        <p class="text-muted mb-0">Budaya kerja di perusahaan digital telekomunikasi dengan core value
                            Solid, Speed, Smart.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people-fill fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Corporate Culture</h3>
                        <p class="text-muted mb-0">Budaya kerja di perusahaan digital telekomunikasi dengan core value
                            Solid, Speed, Smart.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people-fill fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Corporate Culture</h3>
                        <p class="text-muted mb-0">Budaya kerja di perusahaan digital telekomunikasi dengan core value
                            Solid, Speed, Smart.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
