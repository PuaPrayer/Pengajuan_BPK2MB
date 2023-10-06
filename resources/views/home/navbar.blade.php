<header class="container header">
    <nav class="nav">
      <div class="logo">
        <h2>BPK2MB</h2>
      </div>

      <div class="nav_menu" id="nav_menu">
        <button class="close_btn" id="close_btn">
          <i class="ri-close-fill"></i>
        </button>

        <ul class="nav_menu_list">
          <li class="nav_menu_item">
            <a href="#Home" class="nav_menu_link">Home</a>
          </li>
          <li class="nav_menu_item">
            <a href="#About" class="nav_menu_link">About</a>
          </li>
          @guest
            <li class="nav_menu_item">
                <a href="{{ route('login') }}" class="nav_menu_link">Login</a>
            </li>
          @else
          @auth
            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST">
              @csrf
              <li class="nav_menu_item">
                <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <a href="{{ route('auth.logout') }}" class="nav_menu_link">Logout</a>
                </button>
              </li>
            </form>
          @endauth
          <li class="nav_menu_item">
            <p class="nav_menu_link">Welcome, {{ Auth::user()->name }}</p>
          </li>
          @endguest
        </ul>
      </div>

      <button class="toggle_btn" id="toggle_btn">
        <i class="ri-menu-line"></i>
      </button>
    </nav>
  </header>