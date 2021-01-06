@extends('front.layouts.master')

@section('title', 'Detail Post')
@section('content')
    <!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('{{ $article->getImage() }}'); background-repeat:no-repeat; background-size: 1350px 480px;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
						</div>
						<h1>{{ $article->title }}</h1>
						<ul class="post-meta">
							<li><a>{{ $article->user->name }}</a></li>
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
								<li><a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a></li>
								
							</ul>
						</div>
					</div>
					<!-- /post tags -->

					<!-- post author -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Tentang <a>{{ $article->user->name }}</a></h3>
						</div>
						<div class="author media">
							<div class="media-left">
								<a>
									<img class="author-img media-object" src="{{ $article->user->getImage() }}" alt="">
								</a>
							</div>
							<div class="media-body">
								<p>{{ $article->user->description }}</p>
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
                                                            <a href="{{ url('kategori/'.$article->categories->slug) }}">{{ $article->categories->name }}</a>
                                                       </div>
                                                       <h3 class="post-title title-sm"><a href="{{ url($article->slug) }}l">{{ $article->title }}</a></h3>
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
					</div>
					<!-- /related post -->

					{{-- <!-- post comments -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">{{ $count }} Komentar</h3>
						</div>
						<div class="post-comments">
							
							<div class="media">
								<div class="media-body">
									@forelse ($post->comments as $row)
										<div class="garis" style="height:120px; border-left: 3px solid black; margin-top:50px;">	
											<div class="media-heading" style="margin-left: 50px;">
												<h4>{{ $row->username }}</h4>
												<span class="time">{{ $row->created_at->diffForHumans() }}</span>
											</div>
											<p style="margin-left: 50px;">{{ $row->comment }}</p>
											<a style="margin-left: 50px;" class="reply" href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
										</div>
										@foreach ($row->child as $val)
											<div class="media media-author">
												<div>
													<div class="garis" style="margin-left:50px; height:70px; border-left: 3px solid black;">	
														<div class="media-body">
															<div class="media-heading" style="margin-left: 50px;">
																<h4>{{ $val->username }}</h4>
																<span class="time">{{$val->created_at->diffForHumans()}}</span>
															</div>
															<p style="margin-left: 50px;">{{ $val->comment }}</p>
															
														</div>
													</div>
												</div>
											</div>
											
											
										@endforeach
									@empty
										<h3>Tidak Ada Komentar</h3>
									@endforelse
									<!-- comment -->
								
									<!-- /comment -->
								</div>
							</div>
							<!-- /comment -->
						</div>
					</div>
					
					 <!-- post reply -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Tinggalkan Balasan</h3>
						</div>
						<form class="post-reply" action="{{ url('/comment') }}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{ $post->id }}">
							<input type="hidden" name="parent_id" id="parent_id">
							<div class="row">

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" type="text" name="username" placeholder="Username">
										@error('username')
										    <div class="text-danger mt-2">
											    {{ $message }}
										    </div>
										@enderror
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group" style="display: none" id="formReplyComment">
										<label for="">Balas Komentar</label>
										<input type="text" id="replyComment" class="form-control" readonly>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="comment"  cols="30" rows="10" placeholder="Comment"></textarea>
										@error('comment')
										    <div class="text-danger mt-2">
											    {{ $message }}
										    </div>
										@enderror
									</div>
								</div>
								
								<div class="col-md-12">
									<button type="submit" class="primary-button">Submit</button>
								</div>

							</div>
						</form>
					</div> --}}
					<!-- /post reply -->
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
							<h2 class="title">Kategori</h2>
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
@section('script')
	<script>
		function balasKomentar(id, title) {
		$('#formReplyComment').show();
		$('#parent_id').val(id)
		$('#replyComment').val(title)
		}
	</script>
@endsection