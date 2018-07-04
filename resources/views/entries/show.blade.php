@extends('layouts.app')
@section('content')

@section('header')
    <header class="content__title">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $entry->name }} - {!! $entry->status === 'to_be_judged' ? '<span class="badge badge-primary">to be judged</span>' : '<span class="badge badge-warning">Judging in Progress</span>' !!}</h1>
            </div>
            <div class="col-md-4 pull-right">
                <a href="{{ $next ? route('entries.show', $next) : '#' }}" class="entry-button btn btn-secondary btn--icon-text float-right">Next</a>
                <a href="{{ $previous ? route('entries.show', $previous) : '#' }}" class="entry-button btn btn-secondary btn--icon-text float-right">Previous</a>
                <div class="entry-button form-group float-right">
            </div>
        </div>
    </header>
@endsection

@include('entries.partials.lightbox')

<div class="row">
    <div class="col-md-4 card">
        
        <div class="card-header">
            <h5>Info</h5>
        </div>
        <div class="card-body">
            @if(!empty($entry->iname))
                <p><strong>Name:</strong> {{ $entry->name }}</p><br>
            @endif

            @if($entry->company)
                <p><strong>Company Name:</strong> {{ $entry->company->name }}</p><br>
            @endif

            @if($entry->creator)
                <p><strong>Contact Name:</strong> {{ $entry->creator->first_name . ' ' . $entry->creator->last_name }} {{ !empty($entry->creator->occupation) ? '(' . $entry->creator->occupation . ')' : '' }}</p><br>
            @endif

            @if($entry->address)
                <p><strong>Address:</strong> {{ $entry->address->name }}</p><br>
            @endif

            @if(!empty($entry->website))
                <p><strong>Website:</strong> {{ $entry->website }} - <a target="_blank" href="{{ $entry->website }}">Click here to open</a></p><br>
            @endif

            @if(!empty($entry->phone))
                <p><strong>Phone:</strong> {{ $entry->phone }}</p><br>
            @endif

            @if(!empty($entry->email))
                <p><strong>Email:</strong> {{ $entry->email }}</p><br>
            @endif

            @if(!empty($entry->designer_and_others))
                <p><strong>Designer and others:</strong> {{ $entry->designer_and_others }}</p><br>
            @endif

            @if(!empty($entry->cost))
                <p><strong>Cost:</strong> {{ $entry->cost }}</p><br>
            @endif

            @if(!empty($entry->credits))
                <p><strong>Credits:</strong> {{ $entry->credits }}</p><br>
            @endif

            @if(!empty($entry->floor_area))
                <p><strong>Floor Area:</strong> {{ $entry->floor_area }}</p><br>
            @endif

            @if(!empty($entry->short_description))
                <p><strong>Short Description:</strong><br> {{ $entry->short_description }}</p><br>
            @endif

            @if(!empty($entry->long_description))
                <p><strong>Long Description:</strong><br> {{ $entry->long_description }}</p><br>
            @endif

        </div>        
    </div>
    
    <div class="col-md-4">
        
        <div class="card-header card">
            <h5>Questions</h5>
        </div>

        

    <ul class="list-group d-flex w-100">
            @foreach ($questions as $question)
                <li class="list-group-item question card card-body">
                    {{$question->body}} <span  data-value="" class="badge badge-info float-right slider-badge{{$question->id}}" ></span>
                    <div class="slider" data-id="{{$question->id}}"></div>
                </li>
            @endforeach
        </ul>
        <div class="card card-footer">
            <button class="btn btn-success" disabled>Submit</button>        
        </div>
    </div>

    <div class="col-md-4">
        
        <div class="card-header card">
            <h5>Comments</h5>
        </div>

        

    <ul class="list-group d-flex w-100">
            @foreach ($comments as $comment)
                <li class="list-group-item question card card-body">
                    <div>
                        <strong>{{$comment->user->name}}</strong> <small>{{$comment->created_at->diffForHumans()}}</small>
                        <p>{{$comment->body}}<p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
@section('footer_javascript')
<script>


    var sliders = document.getElementsByClassName('slider');

    [].slice.call(sliders).forEach(function(slider, index) {
        
        noUiSlider.create(slider, {
            start: 5,
            step: 1,
            connect: "lower",
            orientation: "horizontal",
            range: {
                'min': 0,
                'max': 10
            },
        });

        slider.noUiSlider.on('set', function() {
            var id = ($( $(this)[0].target ).data('id'));
            var selector = 'span.slider-badge' + id;
            
            $(selector).data('value', slider.noUiSlider.get() );
            $(selector).html( slider.noUiSlider.get() );

            var values = document.getElementsByClassName('badge-info');
            values = [].slice.call(values).map(val => parseInt( $(val).html() )).filter(val => (val) );

            if (values.length == sliders.length) {
                $('.btn.btn-success').removeAttr('disabled')
            }
        });
    });


    

</script>
@endsection