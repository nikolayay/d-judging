@extends('layouts.app')
@section('content')

@section('header')
    <header class="content__title">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $entry->name }} - {!! $entry->status === 'to_be_judged' ? '<span class="badge badge-primary">to be judged</span>' : '<span class="badge badge-warning">Judging in Progress</span>' !!}</h1>
            </div>
            <div class="col-md-4 pull-right">
                <a href="#" class="entry-button btn btn-secondary btn--icon-text float-right">Next</a>
                <div></div>
                <a href="#" class="entry-button btn btn-secondary btn--icon-text float-right">Previous</a>
            </div>
        </div>
    </header>
@endsection

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

            @if(!empty($entry->question))
                <p><strong>Question:</strong><br> {{ $entry->question }}</p><br>
            @endif

        </div>        
    </div>
    
    <div class="col-md-4">
        
        <div class="card-header card">
            <h5>Questions</h5>
        </div>

        <eg></eg>

    <ul class="list-group d-flex w-100">
            @foreach ($questions as $question)
                <li class="list-group-item question card card-body">
                    {{$question->body}} <span class="badge badge-info float-right"></span>
                    <div class="slider slider{{$question->id}}"></div>
                </li>
            @endforeach
        </ul>
        <div class="card card-footer">
            <button class="btn btn-success">Submit</button>        
        </div>
    </div>
</div>

@endsection
@section('footer_javascript')
<script>


    var sliders = document.getElementsByClassName('slider');

    for (var i = 0; i < sliders.length; i++) {
        noUiSlider.create(sliders.item(i), {
            start: 5,
            step: 1,
            connect: "lower",
            orientation: "horizontal",
            range: {
                'min': 0,
                'max': 10
            },
        });
    }

    

</script>
@endsection