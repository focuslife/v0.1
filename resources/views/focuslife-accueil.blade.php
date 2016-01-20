@extends('focuslife-template')

@section('css')
	<link href="css/css-HP.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
	<div id="stickers">
		<div class="sticker_B" id="sticker_0" style="background-image: url({{ 'img/' . $mostRecentPost->img }});">
			<span>
				<a href="{{ $mostRecentPost->posttype->type == 'ACTUALITE' ? route('news.show', $mostRecentPost->id) : route('dossier.show', $mostRecentPost->id) }}" class="sticker_B">
					<div class="article_bloc_text">
						<div class="article_group">
							<h5>
							<p>{{ $mostRecentPost->posttype->type }}</p>
							</h5>
						</div>
						<div class="article_title">
							<h1>
							<p>{{ $mostRecentPost->titre }}</p>
							</h1>
						</div>
						<div class="article_date">
							<p>{{ $mostRecentPost->created_at->format('d/m/Y') }}</p>
						</div>
						<!--<div class="article_comment">
							<p>(8)Commentaire(s)</p>
						</div>-->
					</div>
				</a>	
			</span>
		</div>
		@foreach($posts as $key => $post)
			@if (!($key%2))
				<div class="sticker_M sticker_left" id="sticker_1" style="background-image: url({{ 'img/' . $post->img }});">
					<span>
						<a href="{{ $post->posttype->type == 'ACTUALITE' ? route('news.show', $post->id) : route('dossier.show', $post->id) }}" class="sticker_M">
							<div class="article_bloc_text">
								<div class="article_group">
									<h5>
										<p>{{ $post->posttype->type }}</p>
									</h5>
								</div>
								<div class="article_title">
									<h1>
										<p>{{ $post->titre }}</p>
									</h1>
								</div>
								<div class="article_date">
									<p>{{ $post->created_at->format('d/m/Y') }}</p>
								</div>
								<!--<div class="article_comment">
									<p>(8)Commentaire(s)</p>
								</div>-->
							</div>							
						</a>
					</span>
				</div>
			@else
				<div class="sticker_M sticker_right" id="sticker_2" style="background-image: url({{ 'img/' . $post->img }});">
					<span>
						<a href="{{ $post->posttype->type == 'ACTUALITE' ? route('news.show', $post->id) : route('dossier.show', $post->id) }}" class="sticker_M">
							<div class="article_bloc_text">
								<div class="article_group">
									<h5>
										<p>{{ $post->posttype->type }}</p>
									</h5>
								</div>
								<div class="article_title">
									<h1>
										<p>{{ $post->titre }}</p>
									</h1>
								</div>
								<div class="article_date">
									<p>{{ $post->created_at->format('d/m/Y') }}</p>
								</div>
								<!--<div class="article_comment">
									<p>(8)Commentaire(s)</p>
								</div>-->
							</div>
						</a>	
					</span>
				</div>
			@endif
		@endforeach
	</div>
@endsection