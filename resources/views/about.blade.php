@extends('partials.app')
@section('content')

<div id="top_banner" style="background-image :url('{{ asset('storage/img1.jpg') }}')">
    <div class="contener">
        <h1 class="main_title">
            <span class="part1">About Eventify</span>
            
        </h1>
    </div>
</div>

<div class="contener">
    <div class="about">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</div>
@endsection