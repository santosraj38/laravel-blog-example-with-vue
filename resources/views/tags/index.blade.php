@extends('layouts.app')


@section('content')

        @if($tags->isNotEmpty())
          @foreach ($tags as $tag)
            <div class="container">
              <h3><a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a></h3>

            </div>

          @endforeach

            @if (empty($_GET))
						{{$tags->links()}}
					@else
						{{$tags->appends($_GET)->links()}}
					@endif

        @else
            <h3>No tag items found</h3>
        @endif


@endsection
