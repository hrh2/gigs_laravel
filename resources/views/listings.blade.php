@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless (count($listings)==0)
    @foreach ( $listings as $list_items )
    <x-listItemCard :listing="$list_items"/>

    @endforeach
    @else
    <p class="text-center text-gray-500 text-sm">No results found</p>
    @endunless
</div>
@endsection
{{--  on 1:39  --}}
