<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top " style="background-color: rgb(10, 10, 10, 0.30); height: 12%;">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item ml-3">
            <a class="navbar-brand" href="#">
              <img class="brand-logo" alt="modern admin logo" src="{{asset('images/logo/logo.png')}}" style="width: 106% !important;">
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container">
        <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
          <ul class="nav navbar-nav mt-2">
            <li class="mr-3"><a href="" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>HOME</b></h5></a></li>

            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>ABOUT US</b></h5></a></li>
            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>CONTACT US</b></h5></a></li>

            @if (Auth::user())
            <li class="mr-3"><a href="{{ route('user.home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>Dashboard</b></h5></a></li>

            <li class="mr-3"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>Logout</b></h5></a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
            </li>
            @else
            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>Login</b></h5></a></li>

            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>
