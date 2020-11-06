<!-- FOOTER -->
<footer id="footer">
     <!-- container -->
     <div class="container">
          <!-- row -->
          <div class="row">
               <div class="col-md-6">
                    <div class="footer-widget">
                         <div class="footer-logo">
                              <a href="index.html" class="logo"><h1 style="color: white;">LaravelBlog</h1></a>
                         </div>
                         <ul class="contact-social">
                              <li><a href="https://facebook.com/rizalruby.rahman.1" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="https://github.com/Rizalrubyrahman" class="social-github"><i class="fa fa-github"></i></a></li>
                              <li><a href="mailto:rizalrubyr@gmail.com" class="social-google-plus"><i class="fa fa-google"></i></a></li>
                              <li><a href="https://www.instagram.com/rizalrrhmn/" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                         </ul>
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="footer-widget">
                         <h3 class="footer-title">Categories</h3>
                         <div class="category-widget">
                              <ul>
                                   <div class="row">
                                        @foreach ($categories as $category)
                                           <div class="col-md-6">
                                             <li><a href="{{ $category->slug }}">{{ $category->name }}</a></li>
                                           </div>
                                        @endforeach
                                   </div>
                                   
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
          <!-- /row -->

          <!-- row -->
          <div class="footer-bottom row">
               <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                         <li><a href="index.html">Home</a></li>
                         <li><a href="about.html">About Us</a></li>
                         <li><a href="contact.html">Contacts</a></li>
                         <li><a href="#">Advertise</a></li>
                         <li><a href="#">Privacy</a></li>
                    </ul>
               </div>
               <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rizal Ruby Rahman
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
               </div>
          </div>
          <!-- /row -->
     </div>
     <!-- /container -->
</footer>
<!-- /FOOTER -->




