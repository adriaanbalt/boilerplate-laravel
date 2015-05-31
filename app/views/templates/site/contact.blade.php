@section('content')
<div id='contact'>
@foreach( $data as $item )
	<div>
		<p>{{ $item->name }}</p>
		<p>{{ $item->address }}</p>
		<p>
			<a href='tel:{{ $item->telephone }}'>{{ $item->telephone }}</a>
		</p>
		<p>
			<a href='tel:{{ $item->telephone }}'>{{ $item->fax }}</a>
		</p>
		<p>
			<a href='mailto:{{ $item->email }}'>{{ $item->email }}</a>
		</p>
	</div>
@endforeach
</div>
@stop
