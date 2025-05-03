@extends('partials.app')
@section('content')


<article id="Products" class="section_gap2">
    <div class="contener">
        <div class="search-summary">
            @if($search)
                <p>Search Text: <strong>{{ $search }}</strong></p>
            @endif
            @if($countryName)
                <p>Country: <strong>{{ $countryName }}</strong></p>
            @endif
        </div>
        @if ($products->isEmpty())
            <p>No products found matching your search.</p>
        @else
        <div class="products_box">
            @foreach ($products as $product)
                <a class="product_item" title="{{ $product->title }}" href="{{ route('event',['id'=> $product->id]) }}">
                    <picture class="product_img">
                        <span class="material-icons on_photo_icon">star</span>
                        <img src="{{ asset('image/'.$product->photo) }}" alt="{{ $product->title }}">
                        <div class="prod_cat_name">{{ $product->category?->name}}</div>
                    </picture>
                    <div class="product_bottom_box">
                        <div class="product_left_box">
                            @php 
                                $month='';
                                $day='';
                                $year='';
                                $from= new DateTime($product->event_date_from);
                                if($product->event_date_to==NULL){
                                    $year=$from->format('Y');
                                    $month=$from->format('M');
                                    $day=$from->format('d');
                                    echo '<div class="event_year">'.$year.'</div>';
                                    echo '<div class="event_month">'.$month.'</div>';
                                    echo '<div class="event_day">'.$day.'</div>';

                                }else{
                                    $to=new DateTime($product->event_date_to);
                                    if($from->format('Y-m-d')===$to->format('Y-m-d')){
                                        $year=$from->format('Y');
                                        $month=$from->format('M');
                                        $day=$from->format('d');
                                        echo '<div class="event_year">'.$year.'</div>';
                                        echo '<div class="event_month">'.$month.'</div>';
                                        echo '<div class="event_day">'.$day.'</div>';
                                    }else
                                    if($from->format('Y-m')===$to->format('Y-m')){
                                        $year=$from->format('Y');
                                        $month=$from->format('M');
                                        $day=$from->format('d').' - '.$to->format('d');
                                        echo '<div class="event_year">'.$year.'</div>';
                                        echo '<div class="event_month">'.$month.'</div>';
                                        echo '<div class="event_day">'.$day.'</div>';
                                    }else
                                    if($from->format('Y')===$to->format('Y')){
                                        $year=$from->format('Y');
                                        echo '<div class="event_year">'.$year.'</div>';
                                        echo '<div class="event_date"><span class="event_month">'.$from->format('M').'</span><span class="event_day">'.$from->format('d').'</span></div>';
                                        echo '<div class="event_date"><span class="event_month">'.$to->format('M').'</span><span class="event_day">'.$to->format('d').'</span></div>';
                                    }else{
                                        echo '<div class="event_date_f"><span class="event_year">'.$from->format('Y').'</span><span class="event_month">'.$from->format('M').'</span><span class="event_day">'.$from->format('d').'</span></div>';
                                        echo '<div class="event_date_f"><span class="event_year">'.$to->format('Y').'</span><span class="event_month">'.$to->format('M').'</span><span class="event_day">'.$to->format('d').'</span></div>';
                                    }
                                }
                            @endphp
                        </div><!--
                        --><div class="product_right_box">
                            <div class="prod_name">{{ $product->title}}</div>
                            <div class="prod_desc line-limit">{{ $product->description}}</div>
                            <div class="prod_country">{{ $product->country?->title}}</div>
                            <div class="time">
                                <span class="prod_time">{{ date('h:i A',strtotime($product->time_from))}} - {{ date('h:i A',strtotime($product->time_to))}}</span> 
                            </div>
                            <div class="price">
                                <span class="material-icons prod_price_icon">confirmation_number</span>
                                <span>INR</span>
                                <span class="prod_price">{{ number_format($product->price)}}</span>
                            </div>
                            <div class="rate">
                                <span class="material-icons">star</span>
                                <span class="prod_rate">{{ number_format($product->rate)}}</span>
                                <span class="prod_rate">interested</span>
                            </div>
                        </div>

                       
                    </div>
                    
                </a>
            @endforeach
        </div>
        @endif
       {{-- <div class="see_more_box"><a href="{{ route('create_product') }}" title="See More Events">See More</a></div> --}}
       {{ $products->links() }}
    </div>
</artical>
@endsection