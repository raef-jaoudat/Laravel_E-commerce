@extends('admin.master')

@section('title')
    {{ trans('admin_title_page_trans.category') }}
@stop

@section('css')

@endsection
@section('title_page')
    {{ trans('admin_title_page_trans.category') }}
@endsection

@section('content')

    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> {{ trans('admin_sidebar_trans.Category') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ trans('admin_sidebar_trans.Category') }}</a></li>
                            <li class="breadcrumb-item active"> {{ trans('admin_sidebar_trans.Dashboard') }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="card-header">
            <a href="
            {{route('categories.create')}}
            " class="btn btn-outline-primary">{{trans('buttons_trans.create')}}</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('category_trans.name')}}</th>
                    <th>{{trans('category_trans.image')}}</th>
                    <th>{{trans('category_trans.is_showing')}}</th>
                    <th>{{trans('category_trans.is_popular')}}</th>
                    <th>{{trans('buttons_trans.Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        @if(Storage::disk('public')->exists($category->image))
                            <img src="{{ Storage::url($category->image) }}" alt="Category Image" class="img-thumbnail" style="max-width: 100px;">
                        @else
                            <span></span>
                        @endif
                    </td>

                    <td>
                        @if($category->is_showing == 1)
                            <span class="badge badge-success">{{trans('category_trans.showing')}}</span>
                        @else
                            <span class="badge badge-danger">{{trans('category_trans.hidden')}}</span>
                        @endif
                    </td>
                    <td>
                        @if($category->is_popular == 1)
                            <span class="badge badge-success">{{trans('category_trans.popular')}}</span>
                        @else
                            <span class="badge badge-danger">{{trans('category_trans.no_popular')}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('categories.show',$category->id)}}" class="btn btn-sm btn-outline-success">{{trans('buttons_trans.show')}}</a>
                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-outline-warning">{{trans('buttons_trans.edit')}}</a>
                       @include('admin.includes.delete_modal',['type'=>'category','data'=>$category,'routes'=>'categories.destroy'])
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <!-- /.content -->
    </div>
    <!-- Content Wrapper. Contains page content -->

@endsection

@section('js')

<script>
    $(document).ready(function() {

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @if(session('info'))
            toastr.info("{{ session('info') }}");
        @endif
        @if(session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

    });
</script>
{{-- ================================ --}}
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
    $("#example1").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.5/i18n/ar.json" // تعريب الجدول
        }
    });
});

    </script>



@endsection
