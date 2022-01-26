@extends('layouts.master')
@section('content')

@if(isset($page->page_detail))
<br />

<br />
<div class="container">
    <h2>{{ $page->page_detail[0]->title }}</h2>

    {!! $page->page_detail[0]->description !!}
</div>
@else
<h2>comming soon</h2>
@endif

@endsection
@section('script')
@endsection
