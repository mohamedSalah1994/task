@extends('layout.master')

@section('title')
 Users
@endsection

@section('css')
 @include('layout.header-css')

@endsection

@section('header')
    @include('layout.header')
@endsection

@section('side-bar')
    @include('layout.sidebar')
@endsection

@section('main-heading')
Users
@endsection



@section('content')


<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Basic Datatable</div>
            <div class="card-body">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
</div>




@endsection

@section('script')

 <!-- jQuery first, then Tether, then other JS. -->
 <script src="{{ URL::asset('js/jquery.js') }}"></script>
 <script src="{{ URL::asset('js/tether.min.js') }}"></script>
 <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ URL::asset('vendor/unifyMenu/unifyMenu.js') }}"></script>
 <script src="{{ URL::asset('vendor/onoffcanvas/onoffcanvas.js') }}"></script>
 <script src="{{ URL::asset('js/moment.js') }}"></script>

      <!-- Data Tables -->
      <script src="{{ URL::asset('vendor/datatables/dataTables.min.js') }}"></script>
      <script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>


      <!-- Custom Data tables -->
      <script src="{{ URL::asset('vendor/datatables/custom/custom-datatables.js') }}"></script>
      <script src="{{ URL::asset('vendor/datatables/custom/fixedHeader.js') }}"></script>


      <!-- Common JS -->
      <script src="{{ URL::asset('js/common.js') }}"></script>
      {!! $dataTable->scripts() !!}

@endsection
