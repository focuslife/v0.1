@extends('focuslife-template')

@section('css')
<!--<link href="css/css-Article.css" rel="stylesheet" type="text/css">-->
	<link href="../css/css-Article.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div id="stickers">
	<div class="sticker_lign">
			<span>
				<div class="sticker_B" id="sticker_0" style="background-image: url({{ '../img/' . $post->img }});">
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
				</div>
			</span>
	</div>
	<h2>{{ $post->titre }}</h2>
	<h3>{{ $post->contenu }}</h3>
	<!--<h3>
		<p>Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
			et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
			Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
			minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
			ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.
			Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
			et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
			Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
			minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
			ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.
		</p>
	</h3>
	<h2>
		<p>
			Je suis un gros titre
		</p>
	</h2>
	<h3>
		<p>
			Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
			et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
			Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
			minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
			ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.
		</p>
		<p>
			Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
			et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
			Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
			minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
			ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.
		</p>
		<p>
			Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
			et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
			Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
			minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
			ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.
			Dum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos,
			et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post 
			Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis 
			minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! 
			ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.
		</p>
	</h3>-->
</div>
@endsection