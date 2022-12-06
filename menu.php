<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<section class="h-100 w-100" style="box-sizing: border-box; background-color:#1F1D2B">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .navbar-1-4.navbar-dark .navbar-nav .nav-link {
        color: #fff;
      }

      .navbar-1-4 .bg-black {
        background-color: #1f1d2b;
      }

      .navbar-1-4 .btn-get-started {
        border-radius: 20px;
        padding: 12px 30px;
        font-weight: 500;
      }

      .navbar-1-4 .btn-get-started-purple {
        background-color: #525298;
        transition: 0.3s;
      }

      .navbar-1-4 .btn-get-started-purple:hover {
        background-color: #5353a8;
        transition: 0.3s;
      }
    </style>

    <nav class="navbar-1-4 navbar navbar-expand-lg navbar-dark p-4 px-md-4 mb-3 bg-black fs-4">
      <div class="container">
        <a class="navbar-brand" href="#">
          <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M3.5 15.75C3.5 8.9845 8.98451 3.49999 15.75 3.49999H29.75C30.7165 3.49999 31.5 4.28349 31.5 5.24999C31.5 6.21649 30.7165 6.99999 29.75 6.99999H15.75C10.9175 6.99999 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
              fill="#22B07D" />
            <path
              d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
              fill="#22B07D" />
          </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link px-md-4 active" aria-current="page" href="welcome.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="datakaryawan.php">Data Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="absensi.php">Rekapitulasi Absensi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="scan.php">Scan Kartu</a>
            </li>
            
          </ul>
          <div class="d-flex">
            <a class="btn btn-get-started btn-get-started-purple text-white" href="logout.php">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
  </section> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>