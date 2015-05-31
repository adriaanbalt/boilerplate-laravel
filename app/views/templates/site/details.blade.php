@section('content')
<div id='details'>

	<ul class='clearfix hide'>
	@foreach( $photos as $item )
	<li>
		<img src="{{ URL::asset( $item->path ) }}"/>
	</li>
	@endforeach
	</ul>

	<header>
		<h2>{{ $name }}</h2>
	</header>
	
	<div class='information'>
		@if ( $client && $client_url ) 
		<p>Client: <a href="{{ $client_url }}" target="_blank">{{ $client }}</a></p>
		@elseif ( $client )
		<p>Client: {{ $client }}</p>
		@endif
		
		@if ( $director && $director_url ) 
		<p>Director: <a href="{{ $director_url }}" target="_blank">{{ $director }}</a></p>
		@elseif ( $director )
		<p>Director: {{ $director }}</p>
		@endif

		@if ( $photographer && $photographer_url ) 
		<p>Photographer: <a href="{{ $photographer_url }}" target="_blank">{{ $photographer }}</a></p>
		@elseif ( $photographer )
		<p>Photographer: {{ $photographer }}</p>
		@endif
		
		@if ( $stylist && $stylist_url) 
		<p>Stylist: <a href="{{ $stylist_url }}" target="_blank">{{ $stylist }}</a></p>
		@elseif ( $stylist_url )
		<p>Stylist: {{ $stylist }}</p>
		@endif
		
		@if ( $makeup && $makeup_url ) 
		<p>Makeup: <a href="{{ $makeup_url }}" target="_blank">{{ $makeup }}</a></p>
		@elseif ( $makeup_url )
		<p>Makeup: {{ $makeup }}</p>
		@endif
		
		@if ( $hair && $hair_url ) 
		<p>Hair: <a href="{{ $hair_url }}" target="_blank">{{ $hair }}</a></p>
		@elseif ( $hair_url )
		<p>Hair: {{ $hair }}</p>
		@endif
		
		@if ( $talent && $talent_url ) 
		<p>Talent: <a href="{{ $talent_url }}" target="_blank">{{ $talent }}</a></p>
		@elseif ( $talent_url )
		<p>Talent: {{ $talent }}</p>
		@endif
	</div>
</div>
@stop
