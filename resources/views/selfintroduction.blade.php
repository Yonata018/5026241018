<!DOCTYPE html>
<html lang="id">

<head>
    <title>Self Introduction - Yonata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="selfintroduction.css">
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px; 
    background-color: #ffffff;
    margin: 0;
    overflow-x: hidden; 
    position: relative;
}

.decor-left {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 250px;
    background-color: #ffb800;
}

.decor-right {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 250px;
    background-color: #ffb800;
}

.hi-there-container {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
.hi-line {
    width: 50px;
    height: 5px;
    background-color: #ffb800;
    margin-right: 15px;
}
.hi-there {
    color: #ffb800;
    font-weight: 800;
    font-size: 2rem; 
    margin: 0;
}

.name-wrapper {
    font-size: 5.5rem; 
    font-weight: 900; 
    line-height: 1.1;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.name-outline {
    color: transparent;
    -webkit-text-stroke: 3px #000000; 
    letter-spacing: 2px;
}
.name-solid {
    color: #ffb800;
    letter-spacing: 2px;
    text-shadow: 2px 2px 0px rgba(0,0,0,0.05);
}

.badge-yellow {
    background-color: #ffb800;
    color: #000000;
    font-weight: 700;
    padding: 6px 15px;
    display: inline-block;
    font-size: 1.1rem; 
    letter-spacing: 1px;
    margin-bottom: 10px;
}
.badge-black {
    background-color: #000000;
    color: #ffb800;
    font-weight: 700;
    padding: 6px 15px;
    display: inline-block;
    font-size: 1.1rem; 
    letter-spacing: 1px;
}

.deskripsi {
    color: #444;
    font-size: 1.15rem; 
    line-height: 1.8;
    margin-top: 30px;
    margin-bottom: 40px;
    max-width: 90%;
}

.action-container {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.btn-instagram {
    background-color: #c13584; 
    border-color: #c13584;
    color: #ffffff;
    transition: all 0.3s ease;
}
.btn-instagram:hover {
    background-color: #8f2762; 
    border-color: #8f2762;
    color: #ffffff;
}

.profile-img-container {
    position: relative;
    display: inline-block;
}
.profile-img {
    width: 350px; 
    height: 350px;
    border-radius: 50%;
    object-fit: cover;
    border: 10px solid #ffffff; 
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

@media (max-width: 991px) {
    .name-wrapper { font-size: 4rem; } 
    .deskripsi { max-width: 100%; font-size: 1.1rem; }
    .decor-left, .decor-right { display: none; } 
    .profile-img { width: 280px; height: 280px; }
    .action-container { margin-bottom: 40px; }
}
    </style>
<body>

    <div class="decor-left d-none d-lg-block"></div>
    <div class="decor-right d-none d-lg-block"></div>

    <div class="container min-vh-100 d-flex align-items-center py-5">
        <div class="row w-100 align-items-center">
            <div class="col-lg-7 col-md-12 order-2 order-lg-1">
                
                <div class="hi-there-container">
                    <div class="hi-line"></div>
                    <h5 class="hi-there">HI THERE!</h5>
                </div>

                <h1 class="name-wrapper">
                    <span class="name-outline">I'M</span>
                    <span class="name-solid">YONATA</span>
                </h1>

                <div class="badge-yellow">STUDENT</div><br>
                <div class="badge-black">INFORMATION SYSTEMS ITS</div>
                
                <p class="deskripsi">
                    Perkenalkan, saya Pande Made Yonata Axel Eldrian, seorang mahasiswa Sistem Informasi ITS yang berdedikasi
                    dalam dunia teknologi informasi. Saya memiliki minat besar dalam manajemen proyek TI, analisis sistem, dan
                    pengembangan perangkat lunak. Bagi saya, Sistem Informasi bukan sekadar tentang kode, melainkan tentang
                    bagaimana mengintegrasikan teknologi untuk memecahkan masalah kompleks dan mengoptimalkan proses bisnis di
                    era transformasi digital.
                </p>
 
                <div class="action-container mt-4">
                    <a href="https://wa.me/+6285646613329" target="_blank" class="btn btn-success btn-lg rounded-pill font-weight-bold px-4" role="button">
                        MESSAGE
                    </a>
                    <a href="https://www.instagram.com/yonataeldrian/" target="_blank" class="btn btn-instagram btn-lg rounded-pill font-weight-bold px-4" role="button">
                        <i class="fab fa-instagram mr-2"></i>INSTAGRAM
                    </a>
                    <a href="https://www.linkedin.com/in/pande-made-yonata/" target="_blank" class="btn btn-primary btn-lg rounded-pill font-weight-bold px-4" role="button">
                        <i class="fab fa-linkedin-in mr-2"></i>LINKEDIN
                    </a>

                </div>
                
            </div>
            <div class="col-lg-5 col-md-12 text-center order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="profile-img-container">
                    <img src="/assets/img/person/fotoyonata.jpeg" alt="Pande Made Yonata" class="profile-img">
                </div>
            </div>

        </div>
    </div>

</body>

</html>