<div id='navigation' class='{{ $status }}'>
	<nav>
@foreach( $navigation as $item )
		<a href="/{{ $item['slug'] }}" class="{{ $item['slug'] }}">
			<div class="out icon icon-{{$item['slug']}}"></div>
			<div class="over icon icon-{{$item['slug']}}-over"></div>
		</a>
@endforeach
	</nav>
</div>