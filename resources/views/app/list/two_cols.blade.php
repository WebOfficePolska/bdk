@extends('app.app_base_two_cols')



@section('col_1_text')
 <ul class="list-group">
  <li class="list-group-item active"> Nasza oferta</li>
  @foreach($categories as $category)
  <li class="list-group-item"><a href="{{ route('category', ['id' => $category->id]) }}">{{ $category->title }}</a></li>
  @endforeach
</ul> 
@stop



@section('content_text')

	@yield('list_content_text')

@stop
