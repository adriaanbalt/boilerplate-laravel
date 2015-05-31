@section('content')
<div id='listing'>
	<ul id='grid' class='clearfix' data-columns>
@foreach( $data as $item )
		<li>
			<a href="http://www.studiohansraj.com/setdesign/{{ $item->slug }}">
				<img src="{{ URL::asset( $item->cover_photo ) }}"/>
				<div class='valign'></div>
				<p class='vcontent'>{{ $item->name }}</p>
			</a>
		</li>
@endforeach
	</ul>
</div>
@stop
