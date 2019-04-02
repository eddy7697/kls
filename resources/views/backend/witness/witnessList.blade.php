@extends('backend.admin')

@section('custom-js-script')
<script src="{{ asset('js/backend/witness-list.js') }}"></script>
@endsection

@section('panel-content')
<div class="row" id="witness-list">
    <div class="col-md-12">
        <witness-list></witness-list>
    </div>
</div>
@endsection
