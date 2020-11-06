@extends('front.layouts.master')

@section('content')
    <!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('{{ $article->getImage() }}'); background-repeat:no-repeat; background-size: 1350px 480px;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html">{{ $article->categories->name }}</a>
						</div>
						<h1>{{ $article->title }}</h1>
						<ul class="post-meta">
							<li><a href="author.html">{{ $article->user->name }}</a></li>
							<li>{{ $article->created_at->diffForHumans() }}</li>
							<li><i class="fa fa-eye"></i> {{ $article->view }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
          <!-- /PAGE HEADER -->
          
          <!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					

					<!-- post content -->
					<div class="section-row">
                              @php
                                  $paragraf = explode("\r\n\r\n",$article->body);
                                  $text = "";

                                  for($i = 0; $i <= count($paragraf) - 1; $i++){
                                       $part = str_replace($paragraf[$i], "<p>".$paragraf[$i]."</p>", $paragraf[$i]);
                                       $text .= $part;
                                  }
                              @endphp
                              {!! $text !!}
					</div>
					<!-- /post content -->

					<!-- post tags -->
					<div class="section-row">
						<div class="post-tags">
							<ul>
								<li>Category:</li>
								<li><a href="#">{{ $article->categories->name }}</a></li>
								
							</ul>
						</div>
					</div>
					<!-- /post tags -->

					<!-- post author -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">About <a href="author.html">{{ $article->user->name }}</a></h3>
						</div>
						<div class="author media">
							<div class="media-left">
								<a href="author.html">
									<img class="author-img media-object" src="{{ asset('storage/image/rizal.jpg') }}" alt="">
								</a>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="author-social">
                                             <li><a href="https://facebook.com/rizalruby.rahman.1"><i class="fa fa-facebook"></i></a></li>
                                             <li><a href="https://github.com/Rizalrubyrahman"><i class="fa fa-github"></i></a></li>
                                             <li><a href="mailto:rizalrubyr@gmail.com"><i class="fa fa-google"></i></a></li>
                                             <li><a href="https://www.instagram.com/rizalrrhmn/"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post author -->

					<!-- /related post -->
					<div>
						<div class="section-title">
							<h3 class="title">Related Posts</h3>
						</div>
						<div class="row">
							@foreach ($articles->where('category_id', $article->categories->id)->take(3) as $article)
                                   <!-- post -->
                                        <div class="col-md-4">
                                             <div class="post post-sm">
                                                  <div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:10px; margin-left:10px;">
                                                       <i class="fa fa-eye" style="font-size: 16px;"></i>
                                                       <span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
                                                  </div>
                                                  <a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}"></a>
                                                  <div class="post-body">
                                                       <div class="post-category">
                                                            <a href="{{ url($article->categories->slug) }}">{{ $article->categories->name }}</a>
                                                       </div>
                                                       <h3 class="post-title title-sm"><a href="{{ url($article->slug) }}l">{{ $article->title }}</a></h3>
                                                       <ul class="post-meta">
                                                            <li><a href="author.html">{{ $article->user->name }}</a></li>
                                                            <li>{{ $article->created_at->diffForHumans() }}</li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
							<!-- /post -->
                                   @endforeach
						</div>
					</div>
					<!-- /related post -->

					{{-- <!-- post comments -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">3 Comments</h3>
						</div>
						<div class="post-comments">
							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/avatar-2.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>John Doe</h4>
										<span class="time">5 min ago</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a href="#" class="reply">Reply</a>
									<!-- comment -->
									<div class="media media-author">
										<div class="media-left">
											<img class="media-object" src="./img/avatar-1.jpg" alt="">
										</div>
										<div class="media-body">
											<div class="media-heading">
												<h4>John Doe</h4>
												<span class="time">5 min ago</span>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<a href="#" class="reply">Reply</a>
										</div>
									</div>
									<!-- /comment -->
								</div>
							</div>
							<!-- /comment -->

							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/avatar-3.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>John Doe</h4>
										<span class="time">5 min ago</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a href="#" class="reply">Reply</a>
								</div>
							</div>
							<!-- /comment -->
						</div>
					</div>
					<!-- /post comments --> --}}

					{{-- <!-- post reply -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Leave a reply</h3>
						</div>
						<form class="post-reply">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="website" placeholder="Website">
									</div>
								</div>
								<div class="col-md-12">
									<button class="primary-button">Submit</button>
								</div>

							</div>
						</form>
					</div>
					<!-- /post reply --> --}}
				</div>
				<div class="col-md-4">

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="https://facebook.com/rizalruby.rahman.1" class="social-facebook">
										<i class="fa fa-facebook"></i>
										
									</a>
								</li>
								<li>
									<a href="https://github.com/Rizalrubyrahman" class="social" style="background-color: black;">
										<i class="fa fa-github"></i>
										
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/rizalrrhmn/" class="social" style="background-color: #7232bd;">
										<i class="fa fa-instagram"></i>
										
									</a>
								</li>
								<li>
									<a href="mailto:rizalrubyr@gmail.com" class="social-google-plus">
										<i class="fa fa-google"></i>
										
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
                                        @foreach ($categories as $category)
                                            <li><a href="{{ url($category->slug) }}">{{ $category->name }} <span>{{ $article->where('category_id', $category->id)->count() }}</span></a></li>
                                        @endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->


					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						@foreach ($populer as $post)
                                  <!-- post -->
                                        <div class="post post-widget">
                                             <a class="post-img" href="{{ url($post->slug) }}"><img style="margin-top:9px;" src="{{ $post->getImage() }}" alt=""></a>
                                             <div class="post-body">
                                                  <div class="post-category">
                                                       <a href="{{ url($post->categories->slug) }}">{{ $post->categories->name }}</a>
                                                  </div>
                                                  <h3 class="post-title"><a href="{{ url($post->slug) }}">{{ $post->title }}</a></h3>
                                             </div>
                                        </div>
                                   <!-- /post --> 
                              @endforeach
					</div>
					<!-- /post widget -->

					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
@endsection