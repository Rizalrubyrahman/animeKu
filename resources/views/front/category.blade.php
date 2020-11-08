@extends('front.layouts.master')

@section('title', 'Kategori '.$category->name )

@section('content')
    <!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-color:rgb(106, 102, 102)(82, 82, 82);" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{ $category->name }}</h1>
					</div>
				</div>
			</div>
		</div>
     <!-- /PAGE HEADER -->
     
     <!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					@foreach ($articles->take(1) as $article)
                             <!-- post -->
                                   <div class="post post-thumb">
                                        <div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:20px; margin-left:20px;">
                                             <i class="fa fa-eye" style="font-size: 16px;"></i>
                                             <span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
                                        </div>
                                        <a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}"></a>
                                        <div class="post-body">
                                             <div class="post-category">
                                                  <a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
                                             </div>
                                             <h3 class="post-title title-lg"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h3>
                                             <ul class="post-meta">
                                                  <li>{{ $article->user->name }}</li>
                                                  <li>{{ $article->created_at->diffForHumans() }}</li>
                                             </ul>
                                        </div>
                                   </div>
                              <!-- /post -->
                         @endforeach

					<div class="row">
						@foreach ($articles->skip(1)->take(2) as $article)
                                  <!-- post -->
                                        <div class="col-md-6">
                                             <div class="post">
                                                  <div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:20px; margin-left:20px;">
                                                       <i class="fa fa-eye" style="font-size: 16px;"></i>
                                                       <span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
                                                  </div>
                                                  <a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}"></a>
                                                  <div class="post-body">
                                                       <div class="post-category">
                                                            <a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
                                                       </div>
                                                       <h3 class="post-title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h3>
                                                       <ul class="post-meta">
                                                            <li><a>{{ $article->user->name }}</a></li>
                                                            <li>{{ $article->created_at->diffForHumans() }}</li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   <!-- /post --> 
                              @endforeach

						<div class="clearfix visible-md visible-lg"></div>

						@foreach ($articles->skip(3)->take(2) as $article)
                                  <!-- post -->
                                        <div class="col-md-6">
                                             <div class="post">
                                                  <div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:20px; margin-left:20px;">
                                                       <i class="fa fa-eye" style="font-size: 16px;"></i>
                                                       <span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
                                                  </div>
                                                  <a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}"></a>
                                                  <div class="post-body">
                                                       <div class="post-category">
                                                            <a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
                                                       </div>
                                                       <h3 class="post-title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h3>
                                                       <ul class="post-meta">
                                                            <li><a>{{ $article->user->name }}</a></li>
                                                            <li>{{ $article->created_at->diffForHumans() }}</li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   <!-- /post --> 
                              @endforeach
					</div>

					@foreach ($articles as $article)
                             <!-- post -->
                                   <div class="badge badge-primary" style="position: absolute; z-index:99; margin-top:20px; margin-left:20px;">
                                        <i class="fa fa-eye" style="font-size: 16px;"></i>
                                        <span style="margin-left:5px; margin-top:-100px;">{{ $article->view }}</span>
                                   </div>
                                   <div class="post post-row">
                                        <a class="post-img" href="{{ url($article->slug) }}"><img src="{{ $article->getImage() }}" style="margin-top:7px;"></a>
                                        <div class="post-body">
                                             <div class="post-category">
                                                  <a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
                                             </div>
                                             <h3 class="post-title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h3>
                                             <ul class="post-meta">
                                                  <li><a>{{ $article->user->name }}</a></li>
                                                  <li>{{ $article->created_at->diffForHumans() }}</li>
                                             </ul>
                                             <p>{{ \Str::limit($article->body,100,'.') }}</p>
                                        </div>
                                   </div>
                              <!-- /post -->
                         @endforeach

					

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
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

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
                                        @foreach ($categories as $category)
                                            <li><a href="{{ url('kategori/'.$category->slug) }}">{{ $category->name }} <span>{{ $article->where('category_id', $category->id)->count() }}</span></a></li>
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
                                                       <a href="{{ url('kategori/'.$post->categories->slug) }}">{{ $post->categories->name }}</a>
                                                  </div>
                                                  <h3 class="post-title"><a href="{{ url($post->slug) }}">{{ \Str::limit($post->title, 50, '.') }}</a></h3>
                                             </div>
                                        </div>
                                   <!-- /post --> 
                              @endforeach
					</div>
					<!-- /post widget -->

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