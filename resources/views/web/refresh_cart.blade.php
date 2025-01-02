<div id="top-cart-content">
	@php $total = 0 ; @endphp
	@foreach($cart as $v)
	<div class="top-cart-item">
		<div class="top-cart-item-image">
			
			@if($v->catalog->type=="textbook")
				<a href="#"><img src="{{ url('upload/textbook/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
			@elseif($v->catalog->type=="monograph")
				<a href="#"><img src="{{ url('upload/monograph/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
			@elseif($v->catalog->type=="reference")
				<a href="#"><img src="{{ url('upload/reference/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
			@else
				<a href="#"><img src="{{ url('upload/novel/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
			@endif
			
		</div>
		<div class="top-cart-item-desc">
			<div class="top-cart-item-desc-title">
				<a href="#">{{ $v->catalog->name }}</a>
				<span class="top-cart-item-price d-block">Rp. {{ number_format($v->catalog->selling_price, 0, ',', '.') }}</span>
			</div>
			<div class="top-cart-item-quantity">x {{ number_format($v->qty, 0, ',', '.') }}</div>
		</div>
	</div>
	@php $total = $total + ($v->qty * $v->selling_price) ; @endphp
	@endforeach
</div>