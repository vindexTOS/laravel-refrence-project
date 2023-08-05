
@extends("layout")
@section("content")

@include("partials._hero")
@include("partials._search")

<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

 
 
   @if(count($listings)  >= 1)


  @foreach ($listings as $list)   
<!-- Item 1 -->
 <x-listing-card  :list="$list" />
 @endforeach 
</div>

 @else 
 <p>NO LISTINS</p>
 @endif

 @endsection

