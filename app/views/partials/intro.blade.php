<div id='intro' class={{ $status }}>
	<div class='valign'></div>
	<div class='vcontent'>
		<img class='logo-pink' src="images/logo-pink.svg">
		<div id='definition'>
			@foreach( $data as $item )
			<p>{{ $item['row'] }}</p>
			@endforeach
		</div>
	</div>
</div>