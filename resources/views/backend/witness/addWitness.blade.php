@extends('backend.admin')

@section('custom-js-script')
<script src="{{ asset('js/backend/add-witness.js') }}"></script>
@endsection

@section('panel-content')
<div class="row" id="add-witness">
    <div class="col-md-12">
        @if ($mode == 'edit')
            <add-witness mode="{{$mode}}" id="{{$id}}"></add-witness>
        @else
            <add-witness mode="{{$mode}}"></add-witness>
        @endif
    </div>
</div>
@endsection
