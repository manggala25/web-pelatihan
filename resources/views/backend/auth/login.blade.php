<!DOCTYPE html>
<html dir="ltr">
  <x-admin.head />

  <body>
    <div class="main-wrapper">
      <!-- ============================================================= -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================= -->
      <x-admin.preloader />
      <!-- ============================================================= -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================= -->
      <!-- ============================================================= -->
      <!-- Login box.scss -->
      <!-- ============================================================= -->
      <div class="
          auth-wrapper
          d-flex
          justify-content-center
          align-items-center
          vh-100
          bg-light
      ">
        <div class="auth-box p-4 bg-white rounded shadow">
          <div id="loginform">
            <div class="logo text-center">
              <h3 class="box-title mb-3">Login Admin</h3>
            </div>
      
            @if ($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
        </div>
      @endif
      
            <!-- Form -->
            <form class="form-horizontal mt-3" action="{{ url(config('admin.prefix') . '/login') }}" method="POST">
              @csrf
              <div class="form-group mb-3">
                <label>Email:</label>
                <input class="form-control" type="email" name="email" required placeholder="Masukkan Email" />
              </div>
              <div class="form-group mb-4">
                <label>Password:</label>
                <input class="form-control" type="password" name="password" required placeholder="Masukkan Password" />
              </div>
              <div class="form-group text-center">
                <button class="btn btn-primary w-100" type="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ============================================================= -->
      <!-- Login box.scss -->
      <!-- ============================================================= -->
    </div>
    <!-- ============================================================= -->
    <!-- All Required js -->
    <!-- ============================================================= -->
    <x-admin.script />
  </body>
</html>
