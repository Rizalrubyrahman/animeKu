@extends('front.layouts.master')

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
						<a class="post-img" href="blog-post.html"><img src="{{ $new->getImage() }}" style="height: 510px;"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{ $new->categories->name }}</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">{{ $new->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $new->user->name }}</a></li>
								<li>
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
										<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
									</svg>
									<span style="margin-left:5px;">{{ $new->created_at->diffForHumans() }}</span>
								</li>
							</ul>
							
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					
						@foreach ($news as $new)
						<div class="post post-thumb" >
							<a class="post-img" href="blog-post.html"><img src="{{ $new->getImage() }}" style="height: 252px;"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">{{ $new->categories->name }}</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{ $new->title }}</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">{{ $new->user->name }}</a></li>
									<li>
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
											<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
										</svg>
										<span style="margin-left:5px;">{{ $new->created_at->diffForHumans() }}</span>
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
						@foreach ($recents1 as $recent)
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.html"><img src="{{ $recent->getImage() }}" style="height: 200px;"></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html">{{ $recent->categories->name }}</a>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{ $recent->title }}</a></h3>
										<ul class="post-meta">
											<li><a href="author.html">{{ $recent->user->name }}</a></li>
											<li>
												<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
													<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
												</svg>
												<span style="margin-left:5px;">{{ $recent->created_at->diffForHumans() }}</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						<div class="clearfix visible-md visible-lg"></div>
						@foreach ($recents2 as $recent)
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.html"><img src="{{ $recent->getImage() }}" style="height: 200px;"></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html">{{ $recent->categories->name }}</a>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{ $recent->title }}</a></h3>
										<ul class="post-meta">
											<li><a href="author.html">{{ $recent->user->name }}</a></li>
											<li>
												<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
													<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
												</svg>
												<span style="margin-left:5px;">{{ $recent->created_at->diffForHumans() }}</span>
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
										<a class="post-img" href="blog-post.html"><img src="{{ $article->getImage() }}" alt=""></a>
										<div class="post-body">
											<div class="post-category">
												<a href="category.html">{{ $article->categories->name }}</a>
											</div>
											<h3 class="post-title title-sm"><a href="blog-post.html">{{ $article->title }}</a></h3>
											<ul class="post-meta">
												<li><a href="author.html">{{ $article->user->name }}</a></li>
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
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										
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
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="front/img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="front/img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Technology</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="front/img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="front/img/widget-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div>
						<!-- /post -->
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
							<a class="post-img" href=""><img src="{{ $article->getImage() }}" style="margin-top:5px; width:250px; height:170px;"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="">{{ $article->categories->name }}</a>
									
								</div>
								<h3 class="post-title"><a href="">{{ $article->title }}</a></h3>
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
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						
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