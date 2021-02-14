@extends('layout.master')
@section('title')
Archives
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
Archives
@endsection

@section('content')
<form action="{{ route('archives.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">File Browser</div>
        <div class="card-body">
            <label class="custom-file">
                <input type="file" name="file" id="file2" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
            <button type="submit" class="btn btn-success">Add File</button>
        </div>
    </div>

</form>
<form action="{{ route('archives.dir') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" class="form-control" name="name">
            <button type="submit" class="btn btn-success">Add Dir</button>


</form>


<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header"><span>Users Datatable</span>  </div>
            <div class="card-body">
                <div id="basicExample_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="basicExample" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="basicExample_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="basicExample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 147px;">#</th>
                            <th class="sorting" tabindex="0" aria-controls="basicExample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 243px;">Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                    <tr role="row" class="odd">


                           <td>{{ $file->id }}</td>
                            <td>{{ $file->file_name }}</td>



                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </div>
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

@endsection
