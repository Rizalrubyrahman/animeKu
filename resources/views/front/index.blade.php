@extends('front.layouts.master')

@section('title','Home')

@section('content')
    <!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:20px; margin-left:20px;">
							<i class="fa fa-eye" style="font-size: 16px;"></i>
							<span style="margin-left:5px; margin-top:-100px;">{{ $articles->first()->view }}</span>
						</div>
						<a class="post-img" href="{{ url($articles->first()->slug) }}"><img src="{{ $articles->first()->getImage() }}" style="height: 510px;"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{ url('kategori/'.$articles->first()->categories->slug) }}">{{ $articles->first()->categories->name }}</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{ url($articles->first()->slug) }}">{{ $articles->first()->title }}</a></h3>
							<ul class="post-meta">
								<li><a>{{ $articles->first()->user->name }}</a></li>
								<li>
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
										<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
									</svg>
									<span style="margin-left:5px;">{{ $articles->first()->created_at->diffForHumans() }}</span>
								</li>
							</ul>
							
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					
					@foreach ($articles->skip(1)->take(2) as $article)
						<div class="post post-thumb" >
							<div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:10px; margin-left:10px;">
								<i class="fa fa-eye" style="font-size: 16px;"></i>
								<span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
							</div>
							<a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}" style="height: 252px;"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
								</div>
								<h3 class="post-title"><a href="{{ $article->slug }}">{{ $article->title }}</a></h3>
								<ul class="post-meta">
									<li><a>{{ $article->user->name }}</a></li>
									<li>
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
											<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
										</svg>
										<span style="margin-left:5px;">{{ $article->created_at->diffForHumans() }}</span>
									</li>
								</ul>
							</div>
						</div>
						@endforeach
					
					<!-- /post -->

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($articles->skip(3)->take(2) as $article)
							<div class="col-md-6">
								<div class="post">
									<div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:10px; margin-left:10px;">
										<i class="fa fa-eye" style="font-size: 16px;"></i>
										<span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
									</div>
									<a class="post-img" href="{{ $article->slug }}"><img src="{{ $article->getImage() }}" style="height: 200px;"></a>
									<div class="post-body">
										<div class="post-category">
											<a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
										</div>
										<h3 class="post-title"><a href="{{ $article->slug }}">{{ $article->title }}</a></h3>
										<ul class="post-meta">
											<li><a>{{ $article->user->name }}</a></li>
											<li>
												<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
													<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
												</svg>
												<span style="margin-left:5px;">{{ $article->created_at->diffForHumans() }}</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						<div class="clearfix visible-md visible-lg"></div>
						@foreach ($articles->skip(5)->take(2) as $article)
							<div class="col-md-6">
								<div class="post">
									<div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:10px; margin-left:10px;">
										<i class="fa fa-eye" style="font-size: 16px;"></i>
										<span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
									</div>
									<a class="post-img" href="{{ $article->slug }}"><img src="{{ $article->getImage() }}" style="height: 200px;"></a>
									<div class="post-body">
										<div class="post-category">
											<a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
										</div>
										<h3 class="post-title"><a href="{{ $article->slug }}">{{ $article->title }}</a></h3>
										<ul class="post-meta">
											<li><a>{{ $article->user->name }}</a></li>
											<li>
												<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
													<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
												</svg>
												<span style="margin-left:5px;">{{ $article->created_at->diffForHumans() }}</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
						
					<div class="row">

						@foreach ($categories as $category)
							<div class="col-md-12">
								<div class="section-title">
									
										<h2 class="title">{{ $category->name }}</h2>
									
								</div>
							</div>
							@foreach ($articles->where('category_id', $category->id)->take(3) as $article)
							<!-- post -->
								<div class="col-md-4">
									<div class="post post-sm">
										<div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:10px; margin-left:10px;">
											<i class="fa fa-eye" style="font-size: 16px;"></i>
											<span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
										</div>
										<a class="post-img" href="{{ $article->slug }}"><img src="{{ $article->getImage() }}" style="height:150px;"></a>
										<div class="post-body">
											<div class="post-category">
												<a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
											</div>
											<h3 class="post-title title-sm"><a href="{{ $article->slug }}">{{ $article->title }}</a></h3>
											<ul class="post-meta">
												<li><a>{{ $article->user->name }}</a></li>
												<li>
													<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
														<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
													</svg>
													<span style="margin-left:5px;">{{ $article->created_at->diffForHumans() }}</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							@endforeach
						@endforeach
					</div>
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
											<a href="{{ url('kategori/'.$post->categories->slug) }}">{{ $post->categories->name }}</a>
										</div>
										<h3 class="post-title"><a href="{{ url($post->slug) }}">{{ \Str::limit($post->title, 50, '.') }}</a></h3>
									</div>
								</div>
							<!-- /post -->
						@endforeach
					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
						@foreach ($articles as $article)
						<div class="post post-row">
							<div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:15px; margin-left:10px;">
								<i class="fa fa-eye" style="font-size: 16px;"></i>
								<span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
							</div>
							<a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}" style="margin-top:5px; width:280px; height:170px;"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
									
								</div>
								<h3 class="post-title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h3>
								<ul class="post-meta">
									<li>
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
											<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
										</svg>
										<span style="margin-left:5px;">{{ $article->created_at->diffForHumans() }}</span>
									</li>
								</ul>
								<p>{{ \Str::limit($article->body, '100', '.') }}</p>
							</div>
						</div>
					@endforeach

					<div class="section-row loadmore text-center">
						{{ $articles->links() }}
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div style="margin-top:-70px;" id="kopi-covid"></div>
						
					</div>
					<!-- /galery widget -->

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
@endsection