@extends('focuslife-template')

@section('css')
<link href="css/css-Dossier.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div id="stickers">
	@foreach($posts as $post)
		<div class="sticker_lign">
			<span>
				<a href="{{ $post->posttype->type == 'ACTUALITE' ? route('news.show', $post->id) : route('dossier.show', $post->id) }}" class="article_link">
					<div class="sticker_M sticker_left" id="sticker_1" style="background-image: url({{ 'img/' . $post->img }});">								
					</div>
					<div class="resume">
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
							<h3>
								<p>
									{{ str_limit($post->contenu, 400, $end = '...') }}
									<!--Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
									et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
									Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
									minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
									ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis...-->
								</p>
							</h3>
							<h4>
								<p>
									En savoir plus
								</p>
							</h4>
						</div>
					</div>
					
				</a>
			</span>
		</div>
	@endforeach
</div>
@endsection