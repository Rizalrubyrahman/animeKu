<header id="header">
     <!-- NAV -->
     <div id="nav">
          <!-- Top Nav -->
          <div id="nav-top">
               <div class="container">
                    <!-- social -->
                    <ul class="nav-social">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                         <a href="/" class="logo"><h1 style="position: relative; margin-top:20px;">Laravel<b>Blog</b></h1></a>
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
          <div id="nav-bottom">
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
                                                            <li><a href="#">{{ $category->name }}</a></li>
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
                    <li><a href="index.html">Home</a></li>
                    <li class="has-dropdown"><a>Categories</a>
                         <ul class="dropdown">
                             @foreach ($categories as $category)
                              <li><a href="#">{{ $category->name }}</a></li>
                             @endforeach
                         </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contacts</a></li>
                    <li><a href="#">Advertise</a></li>
               </ul>
               <button class="nav-close nav-aside-close"><span></span></button>
          </div>
          <!-- /Aside Nav -->
     </div>
     <!-- /NAV -->
</header>
<!-- /HEADER -->