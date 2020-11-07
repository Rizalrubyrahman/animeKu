<header id="header">
     <!-- NAV -->
     <div id="nav">
          <!-- Top Nav -->
          <div id="nav-top">
               <div class="container">
                    <!-- social -->
                    <ul class="nav-social">
                         <li><a href="https://facebook.com/rizalruby.rahman.1"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="https://github.com/Rizalrubyrahman"><i class="fa fa-github"></i></a></li>
                         <li><a href="mailto:rizalrubyr@gmail.com"><i class="fa fa-google"></i></a></li>
                         <li><a href="https://www.instagram.com/rizalrrhmn/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                         <a href="/" class="logo"><h1 style="position: relative; margin-top:20px;">Rizal<b>Blog</b></h1></a>
                    </div>
                    <!-- /logo -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                         <button class="aside-btn"><i class="fa fa-bars"></i></button>
                         <button class="search-btn"><i class="fa fa-search"></i></button>
                         <div id="nav-search">
                              <form>
                                   <input class="input" name="search" placeholder="Enter your search...">
                              </form>
                              <button class="nav-close search-close">
                                   <span></span>
                              </button>
                         </div>
                    </div>
                    <!-- /search & aside toggle -->
               </div>
          </div>
          <!-- /Top Nav -->

          <!-- Main Nav -->
          <div id="nav-bottom" style="z-index: 9999; position:relative;">
               <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                         <li class="{{ request()->is('/') ? 'active' : '' }}">
                              <a href="/">Home</a>
                         </li>
                         
                         <li class="has-dropdown megamenu">
                              <a href="#">Kategori</a>
                              <div class="dropdown">
                                   <div class="dropdown-body">
                                        <h4 class="dropdown-heading">Kategori</h4>
                                        <ul class="dropdown-list">
                                             <div class="row">
                                                  @foreach ($categories as $category)
                                                       <div class="col-md-3">
                                                            <li><a href="{{ url('kategori/'.$category->slug) }}">{{ $category->name }}</a></li>
                                                       </div>
                                                  @endforeach
                                             </div>
                                        </ul>
                                   </div>
                              </div>
                         </li>
                    </ul>
                    <!-- /nav -->
               </div>
          </div>
          <!-- /Main Nav -->

          <!-- Aside Nav -->
          <div id="nav-aside">
               <ul class="nav-aside-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="has-dropdown"><a>Kategori</a>
                         <ul class="dropdown">
                             @foreach ($categories as $category)
                              <li><a href="{{ url('kategori/'.$category->slug) }}">{{ $category->name }}</a></li>
                             @endforeach
                         </ul>
                    </li>
                    
               </ul>
               <button class="nav-close nav-aside-close"><span></span></button>
          </div>
          <!-- /Aside Nav -->
     </div>
     <!-- /NAV -->
</header>
<!-- /HEADER -->