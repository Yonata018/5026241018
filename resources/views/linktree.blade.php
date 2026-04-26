<!DOCTYPE html>
<html lang="en">
<head>
  <title>@official.smadabaya | Linktree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: #f5f6f8;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }
    
    .linktree-container {
      width: 100%;
      max-width: 37.5rem;
      margin: 0 auto;
      background-color: #ffffff;
      min-height: 100vh;
      padding: 4%;
      box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,0.05);
      position: relative;
    }

    .top-bar {
      margin-bottom: 5%;
    }

    .btn-top-icon {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(0.25rem);
      border: 0.0625rem solid rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #000;
      cursor: pointer;
      transition: transform 0.2s, background-color 0.2s;
    }

    .btn-top-icon:hover {
      background-color: #f5f5f5;
      transform: scale(0.95);
    }

    .btn-top-icon svg {
      width: 1.125rem;
      height: 1.125rem;
    }

    .profile-img {
      width: 25%;
      max-width: 6rem;
      height: auto;
      aspect-ratio: 1 / 1;
      object-fit: cover;
    }

    .profile-title {
      font-size: 125%;
      font-weight: 700;
      color: #0A0B0D;
    }

    .profile-desc {
      font-size: 100%;
      font-weight: 500;
      color: #000000;
      line-height: 1.5;
    }

    .social-icon {
      color: #0A0B0D;
      width: 8%;
      max-width: 1.75rem;
      margin: 0 2%;
      transition: transform 0.2s;
      display: inline-block;
    }
    
    .social-icon svg {
      width: 100%;
      height: auto;
    }

    .social-icon:hover {
      transform: scale(1.1);
      color: #2665D6;
    }

    .section-title {
      font-size: 100%;
      font-weight: 700;
      color: #000;
      margin-top: 6%;
      margin-bottom: 3%;
    }

    .btn-linktree {
      background-color: #2665D6;
      color: #ffffff !important;
      border: none;
      border-radius: 0.5rem;
      padding: 2%;
      min-height: 4rem;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 3%;
      transition: transform 0.2s ease-in-out, background-color 0.2s;
      box-shadow: 0 0.125rem 0.3125rem rgba(0,0,0,0.1);
      width: 100%;
    }

    .btn-linktree:hover {
      transform: scale(1.02);
      background-color: #1c4b9e;
    }

    .btn-linktree .link-thumb {
      position: absolute;
      left: 2%;
      width: 12%;
      max-width: 3rem;
      height: auto;
      aspect-ratio: 1 / 1;
      border-radius: 0.375rem;
      object-fit: cover;
    }

    .btn-linktree .link-text {
      font-size: 95%;
      font-weight: 500;
      text-align: center;
      padding: 0 15%;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      width: 100%;
    }

    .btn-linktree .link-subtitle {
      display: block;
      font-size: 75%;
      font-weight: 400;
      opacity: 0.8;
      margin-top: 1%;
    }

    .profile-footer {
      margin-top: 15%;
      padding-bottom: 5%;
    }

    .btn-footer-join {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: #ffffff;
      color: #000000 !important;
      font-weight: 600;
      font-size: 100%;
      padding: 3% 6%;
      border-radius: 0.75rem; 
      border: 0.0625rem solid #e0e0e0;
      box-shadow: 0 0.25rem 0.5rem rgba(0,0,0,0.1);
      text-decoration: none;
      transition: background-color 0.2s, border-color 0.2s;
    }

    .btn-footer-join:hover {
      background-color: #f8f9fa;
      border-color: #d0d0d0;
      text-decoration: none;
    }

    .footer-links {
      font-size: 0.625rem;
      color: #000000;
      margin-top: 6%;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0.8;
    }

    .footer-links a, .footer-links button {
      color: inherit;
      text-decoration: none;
      background: none;
      border: none;
      padding: 0;
      font-size: inherit;
      cursor: pointer;
      outline: none;
    }

    .footer-links a:hover, .footer-links button:hover {
      text-decoration: underline;
    }

    .footer-links span {
      margin: 0 2%;
    }

    .modal-content {
      border-radius: 1rem;
      padding: 2%;
    }
  </style>
</head>
<body>

<div class="container-fluid p-0">
  <div class="linktree-container">

    <div class="top-bar d-flex justify-content-between align-items-center w-100">
      <a href="https://linktr.ee/" target="_blank" rel="noopener noreferrer" class="btn-top-icon" aria-label="Linktree Logo" style="text-decoration: none;">
        <svg fill="none" viewBox="0 0 28 28">
          <path d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z" fill="currentColor"></path>
        </svg>
      </a>
      
      <button class="btn-top-icon" aria-label="Share Profile">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
          <path d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z"></path>
        </svg>
      </button>
    </div>
    
    <div class="text-center mb-4">
      <img src="https://ugc.production.linktr.ee/44d04368-032d-40dd-82a7-51eff64fbefb_S.jpeg?io=true&size=avatar-v3_0" alt="Profile" class="rounded-circle profile-img mb-3">
      <h1 class="profile-title mb-2">@official.smadabaya</h1>
      <p class="profile-desc">
        SMA NEGERI 2 Surabaya<br>
        Jalan Wijaya Kusuma No.48
      </p>

      <div class="d-flex justify-content-center align-items-center mt-3">
        <a href="https://instagram.com/official.smadabaya" target="_blank" class="social-icon">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM12 6.86456C11.3256 6.86456 10.6578 6.99739 10.0348 7.25547C9.41169 7.51355 8.84556 7.89182 8.36869 8.36869C7.89182 8.84556 7.51355 9.41169 7.25547 10.0348C6.99739 10.6578 6.86456 11.3256 6.86456 12C6.86456 12.6744 6.99739 13.3422 7.25547 13.9652C7.51355 14.5883 7.89182 15.1544 8.36869 15.6313C8.84556 16.1082 9.41169 16.4864 10.0348 16.7445C10.6578 17.0026 11.3256 17.1354 12 17.1354C13.362 17.1354 14.6682 16.5944 15.6313 15.6313C16.5944 14.6682 17.1354 13.362 17.1354 12C17.1354 10.638 16.5944 9.33178 15.6313 8.36869C14.6682 7.40561 13.362 6.86456 12 6.86456ZM12 8.67043C12.4372 8.67043 12.8702 8.75655 13.2742 8.92388C13.6781 9.0912 14.0452 9.33646 14.3544 9.64564C14.6635 9.95482 14.9088 10.3219 15.0761 10.7258C15.2434 11.1298 15.3296 11.5628 15.3296 12C15.3296 12.4372 15.2434 12.8702 15.0761 13.2742C14.9088 13.6781 14.6635 14.0452 14.3544 14.3544C14.0452 14.6635 13.6781 14.9088 13.2742 15.0761C12.8702 15.2434 12.4372 15.3296 12 15.3296C11.1169 15.3296 10.2701 14.9788 9.64564 14.3544C9.02122 13.7299 8.67043 12.8831 8.67043 12C8.67043 11.1169 9.02122 10.2701 9.64564 9.64564C10.2701 9.02122 11.1169 8.67043 12 8.67043Z"></path>
          </svg>
        </a>
        <a href="https://youtube.com/@officialsmanegeri2surabaya713?si=6upRPIBzYTXhtYwV" target="_blank" class="social-icon">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8142 5.41679C20.6763 5.64906 21.3541 6.32675 21.5832 7.18581C22 8.74483 22 11.9997 22 11.9997C22 11.9997 22 15.2545 21.5832 16.8136C21.3509 17.6757 20.6733 18.3535 19.8142 18.5825C18.2551 18.9993 12 18.9993 12 18.9993C12 18.9993 5.74801 18.9993 4.18581 18.5825C3.32358 18.3502 2.64588 17.6726 2.4168 16.8136C2 15.2545 2 11.9997 2 11.9997C2 11.9997 2 8.74483 2.4168 7.18581C2.64907 6.32358 3.32676 5.64588 4.18581 5.41679C5.74801 5 12 5 12 5C12 5 18.2551 5 19.8142 5.41679ZM15.1961 11.9992L10.0004 14.9994V8.99883L15.1961 11.9992Z"></path>
          </svg>
        </a>
      </div>
    </div>

    <h3 class="text-center section-title">Media Sosial</h3>
    
    <a href="https://sman2-sby.sch.id/" target="_blank" class="btn btn-linktree btn-block">
      <img src="https://ugc.production.linktr.ee/a63a3361-d221-4631-b5cd-fb22e7142ef9_image.png?io=true&size=thumbnail-stack_v1_0" class="link-thumb" alt="Website">
      <div class="link-text">Website</div>
    </a>
    
    <a href="https://youtube.com/@officialsmanegeri2surabaya713?si=6upRPIBzYTXhtYwV" target="_blank" class="btn btn-linktree btn-block">
      <img src="https://ugc.production.linktr.ee/5d83db6f-d8b8-42ce-bc49-8613add219ce_image.png?io=true&size=thumbnail-stack_v1_0" class="link-thumb" alt="YouTube">
      <div class="link-text">YouTube</div>
    </a>
    
    <a href="https://www.tiktok.com/@areksmada?_t=zs-8wyj5mzz4lk&_r=1" target="_blank" class="btn btn-linktree btn-block">
      <img src="https://ugc.production.linktr.ee/eb6583c1-86ca-487d-b23a-e69d267e6445_tiktok.png?io=true&size=thumbnail-stack_v1_0" class="link-thumb" alt="TikTok">
      <div class="link-text">TikTok</div>
    </a>

    <h3 class="text-center section-title">Update Berita Terbaru</h3>
    
    <a href="https://www.instagram.com/areksmada?igsh=MXR2N2ZveGtkZ3hobQ==" target="_blank" class="btn btn-linktree btn-block">
      <img src="https://ugc.production.linktr.ee/2d0e5297-cad2-4d5b-918d-12966746737c_instagram.png?io=true&size=thumbnail-stack_v1_0" class="link-thumb" alt="Instagram - OSIS SMADABAYA">
      <div class="link-text">Instagram - OSIS SMADABAYA</div>
    </a>
    
    <a href="https://sman2-sby.sch.id/berita-pengumuman/" target="_blank" class="btn btn-linktree btn-block">
      <img src="https://ugc.production.linktr.ee/c9b748f3-24f0-4a39-b6fe-c8514e1fe640_image.png?io=true&size=thumbnail-stack_v1_0" class="link-thumb" alt="Berita Sekolah">
      <div class="link-text">Berita / Pengumuman Sekolah</div>
    </a>

    <h3 class="text-center section-title">Lokasi</h3>
    
    <a href="https://maps.app.goo.gl/SKsw4eGvHLqdmZPy6?g_st=com.google.maps.preview.copy" target="_blank" class="btn btn-linktree btn-block">
      <img src="https://ugc.production.linktr.ee/b835eb8a-7331-402d-84e0-da27f1ef5ca9_image.png?io=true&size=thumbnail-stack_v1_0" class="link-thumb" alt="Maps">
      <div class="link-text">
        Senior High School State 2 of Surabaya
        <span class="link-subtitle">Jl. Wijaya Kusuma No.48, Ketabang, Surabaya</span>
      </div>
    </a>

    <div class="profile-footer text-center">
      
      <a href="https://linktr.ee/" target="_blank" class="btn-footer-join">
        Join official.smadabaya on Linktree
      </a>
      
      <div class="footer-links">
        <button type="button">Cookie Preferences</button>
        <span>•</span>
        <a href="https://linktr.ee/s/about/trust-center/report" target="_blank">Report</a>
        <span>•</span>
        <a href="https://linktr.ee/privacy" target="_blank">Privacy</a>
      </div>

    </div>

  </div>
</div>

</body>
</html>