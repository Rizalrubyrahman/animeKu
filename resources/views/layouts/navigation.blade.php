<header class="main-header">
     <!-- Logo -->
     <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>L</b>BG</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Laravel</b>Blog</span>
     </a>
     <!-- Header Navbar: style can be found in header.less -->
     <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <img src="{{ auth()->user()->getImage() }}" class="user-image" alt="User Image">
                         <span class="hidden-xs">{{ Auth::user()->name }}</span>
                         </a>
                         <ul class="dropdown-menu">
                         <!-- User image -->
                         <li class="user-header">
                              <img src="{{ auth()->user()->getImage() }}" class="img-circle" alt="User Image">

                              <p>
                                   {{ Auth::user()->name}}
                              </p>
                         </li>

                         <!-- Menu Footer-->
                         <li class="user-footer">
                              <div class="pull-right">
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        <button type="submit" class="btn btn-default btn-flat">Logout</button>
                                   </form>
                              </div>
                         </li>
                         </ul>
                    </li>
               </ul>
          </div>
     </nav>
</header>