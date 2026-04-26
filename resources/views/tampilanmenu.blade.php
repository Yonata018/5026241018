<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu Tugas | 5026241018</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
      body {
          background-color: #0B2447; 
          color: #FFD700;
      }
      
      .card-menu {
          background-color: #19376D;
          border: 2px solid #FFD700;
          border-radius: 0.5rem;
          transition: transform 0.1s ease, background-color 0.2s ease, box-shadow 0.2s ease;
      }

      .card-menu h5 {
          color: #FFD700;
          font-weight: 600;
          font-size: 1.1rem; /* Ukuran font disesuaikan agar tidak terlalu besar */
      }

      .card-menu:hover {
          transform: translateY(-0.15rem);
          background-color: #FFD700;
          box-shadow: 0 4px 10px rgba(255, 215, 0, 0.4);
      }

      .card-menu:hover h5 {
          color: #0B2447; 
      }

      .card-menu:active {
          transform: scale(0.97);
          box-shadow: none;
      }
      
      a {
          text-decoration: none !important;
      }
  </style>
</head>

<body>

<div class="container mt-4 mb-4">
  <div class="text-center mb-4">
      <h2 class="font-weight-bold mb-3">Daftar Tugas</h2>
      <h4 class="mb-1">Pande Made Yonata Axel Eldrian</h4>
      <h5>5026241018</h5>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-8 col-lg-5"> <!-- Lebar kolom sedikit dikecilkan agar tombol lebih proporsional -->

          <!-- Menggunakan mb-2 untuk jarak antar tombol yang lebih rapat -->
          <!-- Menggunakan py-2 langsung di card tanpa card-body agar padding tidak berlebihan -->
          <div class="mb-2">
              <a href="{{ url('halo') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Halo</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('pert1') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Pertemuan 1</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('pert2') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Pertemuan 2</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('pert3') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Pertemuan 3</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('tugaspert3') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Tugas Pertemuan 3</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('pert4') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Pertemuan 4</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('pert5') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Pertemuan 5</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('blog') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Menu Blog</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('linktree') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Tugas Linktree</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('dosen') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Dosen Controller</h5>
                  </div>
              </a>
          </div>

          <div class="mb-2">
              <a href="{{ url('biodata') }}" class="d-block">
                  <div class="card card-menu text-center py-2">
                      <h5 class="m-0">Biodata Dosen</h5>
                  </div>
              </a>
          </div>

      </div>
  </div>
</div>

</body>
</html>