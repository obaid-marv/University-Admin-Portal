<x-app-layout>    
    <div class="flex">

        <div class="sidebar">
            <h5 class="sidebar-brand" style="color: white;">COMSATS University</h5>
            
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/students')}}">STUDENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/teachers')}}">TEACHERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/departments')}}">DEPARTMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
            </ul>
        </div>


        <div class="content">
            @yield('content')
        </div>
    </div>

    <div class="loading-container">
        <div class="loading-icon">
        <i class="fad fa-spinner-third fa-spin"></i>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(window).on('load', function() {
    // When the page is fully loaded, remove the loading icon element
    $('.loading-container').remove();
  });
</script>

</x-app-layout>