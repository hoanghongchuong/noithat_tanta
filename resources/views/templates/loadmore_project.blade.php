@foreach($projects as $item)
	<div class="col-lg-105 col-md-4 col-sm-6">
		<div class="pj-item">
			<figure class="text-center pj-item-img">
				<a href="{{ url('du-an/'.$item->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" title="" alt="" title=""></a>
			</figure>
			
			<figcaption class="pj-item-info">
				<h3 class="text-center"><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="">{{$item->name}}</a></h3>
			</figcaption>
		</div>
	</div>
@endforeach