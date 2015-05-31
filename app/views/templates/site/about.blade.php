@section('content')
<div id='about'>
	<ul>
@foreach( $data as $item )
		<li>
			<p>{{ $item['paragraph'] }}</p>
		</li>
@endforeach
	</ul>
</div>
@stop
