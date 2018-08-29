@extends('layouts.app')

@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            @can ('create-user')
            <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="icon-plus"></i> {{ trans('general.create_account') }} </a>
            @endcan
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
        {!! $dataTable->table() !!}
        </div>
    </div>
@endsection

@push('styles')
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {!! $dataTable->scripts() !!}
    <script>
        $.fn.dataTable.ext.errMode = 'none';
    </script>
@endpush