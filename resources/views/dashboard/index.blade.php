@extends('layouts.app')

@section('content')

<div class="row justify-content-around">

    <div class="card col-md-3">
        @include('dashboard.partials.datatable', array('name' => 'pipeline'))
    </div>
    <div class="card col-md-4">
        @include('dashboard.partials.datatable', array('name' => 'in_progress'))
    </div>
    <div class="card col-md-3">
        @include('dashboard.partials.datatable', array('name' => 'judged'))
    </div>
    
</div>




@endsection


@section('footer_javascript')
<script>

    console.log(moment().format());
    var entries = {!! $entries !!};
    
    var pipeline = entries.filter(entry => entry.status==="to_be_judged");
    var in_progress = entries.filter(entry => entry.status==="in_progress");
    var judged = entries.filter(entry => entry.status==="judged");

    function makeTable(data, in_progress=false, buttons=true) {
        return {
            data: data,
            hide: true,
            columns: [
                {data: 'name', width: '90px'},
                {data: 'short_description', width:'130px'},
                {data: 'categories', width: '90px',
                 render: function(data, type, row) {
                   return row.categories ? row.categories.map(cat => cat.name).join(', ') : "N/A"
                 }},
                {data: 'updated_at', width: '90px',
                 render: function(data, type, row) {
                   var time = in_progress ? moment(data).fromNow() : moment(data).format('ddd MMM DD YYYY');
                   return time;
                 }},
                {visible: buttons,
                 sortable: false,
                 width: '80px',
                 render: function(data, type, row) {
                   var btn = in_progress ? 'Resume Judging' : 'Start Judging' ;
                   return `<a href="entries/` + row.id + `"><button class="btn btn-primary float-right">`+ btn +`</button>`;
                 }},

            ],
            lengthMenu: [[15, 30, 45, -1], [
                  "15",
                  "30",
                  "Everything"
                ]],
            language: {
                  searchPlaceholder: "Search...",
                }
        }
    }

    $(document).ready( function () {
        $('.pipeline').DataTable(makeTable(pipeline));
        $('.in_progress').DataTable(makeTable(in_progress, true));
        $('.judged').DataTable(makeTable(judged, false, false));
    });
    
</script>
@endsection