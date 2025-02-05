<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset ('dash-assets') }}/"
  data-template="vertical-menu-template-free">
 
  @include('dashboard.partials.head')

  <body>
    <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        <!-- Menu -->
         @include('dashboard.partials.sidebar')
        <!-- / Menu -->
  
          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->
  
            @include('dashboard.partials.navbar')
  
            <!-- / Navbar -->
  
            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
             @yield('content')
              
              <!-- / Content -->
  
              <!-- Footer -->
              @include('dashboard.partials.footer')

              <!-- / Footer -->
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper --> 
      <!-- Core JS -->
      @include('dashboard.partials.scripts')
    </body>
  </body>
</html>
