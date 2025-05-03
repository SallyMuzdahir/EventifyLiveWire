<div>
  
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
            <form wire:submit="save">
                @csrf
                <div class="input_area align_top">
                    <label>Title:</label>
                    <input type="text" wire:model="title" value="{{ old('title') }}" />
                    @error('title')<em class="create-event-errot">{{ $message }}</em> @enderror

                </div>{{-- 
                     --}}<div class="input_area align_top">
                        <label>Category ID:</label>
                        <select  wire:model="category_id"  >
                            <option value="0" >Choose</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option> 
                            @endforeach
                        </select>
                        @error('category_id')<em class="create-event-errot">{{ $message }}</em>@enderror
                    </div>{{-- 
                     --}}<div class="input_area align_top">
                        <label>Country ID:</label>
                        <select  wire:model="country_id" >
                            <option value="0" >Choose</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->title }}</option> 
                            @endforeach
                        </select>
                        @error('country_id')<em class="create-event-errot">{{ $message }}</em>@enderror
                    </div>{{-- 
                        --}}<div class="input_area align_top">
                            <label>Price:</label>
                            <input  type="number"  wire:model="price" value="{{ old('price') }}">
                            @error('price')<em class="create-event-errot">{{ $message }}</em>@enderror
                        </div>{{--  
             
                 --}}<div class="input_area align_top">
                    <label>Event Date From:</label>
                    <input  type="date" wire:model="event_date_from" value="{{ old('event_date_from') }}">
                    @error('event_date_from')<em class="create-event-errot">{{ $message }}</em>@enderror
                </div>{{--  

                --}}<div class="input_area align_top">
                    <label>Event Date To:</label>
                    <input  type="date" wire:model="event_date_to" value="{{ old('event_date_to') }}"/>
                    @error('event_date_to')<em class="create-event-errot">{{ $message }}</em>@enderror
                </div>{{-- 
                 --}}<div class="input_area align_top">
                    <label>Time From:</label>
                    <input  type="time" wire:model="time_from" value="{{ old('time_from') }}"/>
                    @error('time_from')<em class="create-event-errot">{{ $message }}</em>@enderror
                </div>{{-- 
                 --}}<div class="input_area align_top">
                    <label>Time To:</label>
                    <input  type="time" wire:model="time_to" value="{{ old('time_to') }}"/>
                    @error('time_to')<em class="create-event-errot">{{ $message }}</em>@enderror
                </div>{{-- 
             
                --}}<div class="input_area align_top">
                    <label>Description:</label>
                    <textarea wire:model="description" >{{ old('description') }}</textarea>
                    <small>Words: 
                        <span x-text="$wire.description.split(' ').length-1"></span>
                    </small>
                    @error('description')<em class="create-event-errot">{{ $message }}</em>@enderror
                </div>{{-- 
                 --}}<div class="input_area align_top pic_box">
                    <div class="align_top w50">
                    <label class="align_top">Photo Filename:</label>
                    <input  type="file" wire:model="photo" accept="image/*" class="file_input"/>
                </div>{{-- 
                     --}}<div class="preview_photo_box align_top w50">
                        @if($photo)
                        <img src="{{ $photo->temporaryUrl()}}" class="preview_img" alt="preview"/>
                        @endif
                    </div>
                    @error('photo')<em class="create-event-errot">{{ $message }}</em>@enderror
                </div>{{-- 
                 --}}<div class="input_area  see_more_box">
                    <button class="save_btn" type="submit">Create Product</button>
                </div>
            </form>
        </div>
    </article>

</div>
