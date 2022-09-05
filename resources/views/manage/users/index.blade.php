@section('plugins.Datatables', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.jsgrid', true)
@section('plugins.jqueryUi', true)
@section('plugins.jqueryKnob', true)
@section('plugins.jqueryMapael', true)
@section('plugins.flagIconCss', true)
@section('plugins.daterangepicker', true)
@section('plugins.datatablesPlugins', true)
@section('plugins.Select2', true)
@section('plugins.bootstrapSwitch', true)
@extends('adminlte::page')
@section('title', 'manage users')   
@section('content_header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{'name'}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
              <a href="{{route('users.create')}}" role="button" value="Create new user" class="btn btn-success float-right">Create new user</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="yajra-datatable" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>name</th>
                  <th>Email</th>
                  <th>Creation Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      {{-- $users->links() !!--}}

    </div>
    <!-- /.container-fluid -->
  </section>
{{--data tabels--}}
@endsection
@section('js') 
<script>
  /*  $(document).ready(function(){

        // DataTable
        $('#example1').DataTable({
           processing: true,
           serverSide: true,
           ajax: "#",
           columns: [
              { data: 'id' },
              { data: 'name' },
              { data: 'email' },
              { data: 'date' },
           ]
        });
      });
   */ 
   $(function () {
    
    var table = $('#yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
   /*$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "buttons": ["copy", "csv", "excel", "pdf","print","colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });*/

  
</script>
@endsection