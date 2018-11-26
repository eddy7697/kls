@extends('backend.admin')

@section('custom-js-script')
<script src="{{ asset('js/backend/tag-manager.js')}}" charset="utf-8"></script>
@endsection

@section('panel-content')
<div class="row ch-product-form" id="tag-manager">
    <div class="col-md-12">
        <tag-manager></tag-manager>
    </div>
</div>
@endsection
