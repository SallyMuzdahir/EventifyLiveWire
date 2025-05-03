@extends('partials.app')
@section('content')

<div id="top_banner" style="background-image :url('{{ asset('image/img1.jpg') }}')">
    <div class="contener">
        <h1 class="main_title">
            <span class="part1">Create A new events</span>
            
        </h1>
      
    </div>
</div>
<article>
    <div class="contener">
        <h2 class="title">Create A new Event</h2>
        @if (session('success'))
        <div style="color: red;">
            {{ session('success') }}
        </div>
        @endif
        @if ($errors->any())
        <div style="color: red">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>    
            @endforeach
        </div>
        @endif

        <form action="{{ route('store_product') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="input_area">
                <label>Title:</label>
                <input type="text" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="input_area">
                <label>Description:</label>
                <textarea name="description" required>{{ old('description') }}</textarea>
            </div>

            <div class="input_area">
                <label>Event Date From:</label>
                <input required type="date" name="event_date_from" value="{{ old('event_date_from') }}">
            </div>

            <div class="input_area">
                <label>Event Date To:</label>
                <input required type="date" name="event_date_to" value="{{ old('event_date_to') }}">
            </div>

            <div class="input_area">
                <label>Time From:</label>
                <input required type="time" name="time_from" value="{{ old('time_from') }}">
            </div>
            <div class="input_area">
                <label>Time To:</label>
                <input required type="time" name="time_to" value="{{ old('time_to') }}">
            </div>
            <div class="input_area">
                <label>Price:</label>
                <input required type="number"  name="price" value="{{ old('price') }}">
            </div>
            <div class="input_area">
                <label>Category ID:</label>
                <select required name="category_id"  >
                    <option value="0" >Choose</option>
                    @foreach ($categories as $category)
                       <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option> 
                    @endforeach
                </select>
            </div>

            <div class="input_area">
                <label>Country ID:</label>
                <select required name="country_id" >
                    <option value="0" >Choose</option>
                    @foreach ($countries as $country)
                       <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->title }}</option> 
                    @endforeach
                </select>
            </div>

            <div class="input_area">
                <label>Photo Filename:</label>
                <input required type="file" name="photo" accept="image/*" >
            </div>

            <div class="input_area see_more_box">
                <button type="submit">Create Product</button>
            </div>
        </form>
    </div>
</article>

@endsection