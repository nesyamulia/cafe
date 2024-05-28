@extends('dashboard.master')
@section('title', ' Create Customers')
@section('nav')
    @include('dashboard.nav')
@endsection
    @section('page', ' Create Customers')
@section('main')
    @include('dashboard.main')

    <!-- Awal Tabel -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Customers Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <!-- Awal Form -->
               <div class="card border-1 m-3 pt-3">
              <form action=""method="POST">
                <div class="mb-3 ms-3 me-3">
                <label for="fullname" class=form-label>Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" aria-label="fullname">
             </div>
                <div class="mb-3 ms-3 me-3">
                <label for="alamat1" class=form-label>Alamat Ke-1</label>
                <textarea rows="5" name="alamat1" id="alamat1" class="form-control" placeholder="Alamat Ke-1" aria-label="alamat1"></textarea>
             </div>
                <div class="mb-3 ms-3 me-3">
                <label for="alamat2" class=form-label>Alamat Ke-2</label>
                <textarea rows="5" name="alamat2" id="alamat2" class="form-control" placeholder="Alamat Ke-2" aria-label="alamat2"></textarea>
             </div>
                <div class="mb-3 ms-3 me-3">
                <label for="alamat3" class=form-label>Alamat Ke-3</label>
                <textarea rows="5" name="alamat3" id="alamat3" class="form-control" placeholder="Alamat Ke-3" aria-label="alamat3"></textarea>
             </div>
             <div class="mb-3 ms-3 me-3">
                <label for="number_phone" class=form-label>Number Phone</label>
                <input type="number" name="number_phone" id="number_phone" class="form-control" placeholder="Number Phone" aria-label="number_phone">
             </div>
             <div class="mb-3 ms-3 me-3">
                <label for="username" class=form-label>Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="username">
             </div>
             <div class="mb-3 ms-3 me-3">
                <label for="password" class=form-label>Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Full Name" aria-label="password">
             </div>
             <div class="mb-3 ms-3 me-3">
                <label for="photo" class=form-label>Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" placeholder="photo" aria-label="photo">
             </div>
                <div class="row ms-3 me-3 d-flex justify-content-end">
                  <div class="col-3">
                    <a href="{{route('pelanggan.index')}}" class="btn bg-gradient-secondary w-100">Cancel</a>
                      </div>
                    <div class="col-3">
                    <button type="button" class="btn bg-gradient-primary w-15 w-100">Save</button>
                      </div>
                    </div>
                </div>
            </form>
            <!-- Akhir Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Table -->
      <footer class="footer pt-5 ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>
@endsection