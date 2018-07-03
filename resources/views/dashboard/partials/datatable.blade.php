<div class="card-header">
    <h5>{{ $name }}</h5>
</div>

<div class="card-body card-table">
    <table id='elixirr-table'  class="display {{ $name }}">
        <thead>
            <tr>
                <th>Entry</th>
                <th>Short Desctiption</th>
                <th>Category</th>
                <th>{{ $name==='in_progress' ? "Last Updated" : "Submit Date"}}</th>
                <th></th> {{-- Actions col --}}           
            </tr>
        </thead>
    </table>
</div>

