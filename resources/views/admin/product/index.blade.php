@extends('admin.master')

@section('title')
    {{trans('admin_title_page_trans.Product')}}
@stop

@section('css')

@stop

@section('title_page')
    {{trans('admin_title_page_trans.Product')}}
@endsection

@section('content')
<div class="content-wrapper ">
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> {{ trans('admin_sidebar_trans.Product') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ trans('admin_sidebar_trans.Product') }}</a></li>
                        <li class="breadcrumb-item active"> {{ trans('admin_sidebar_trans.Dashboard') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Content Wrapper. Contains page content -->
    <div class="card-header">
        <a href="{{route('products.create')}}" class="btn btn-outline-primary">{{trans('buttons_trans.create')}}</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>{{trans('product_trans.name')}}</th>
                <th>{{trans('product_trans.category')}}</th>
                <th>{{trans('product_trans.image')}}</th>
                <th>{{trans('product_trans.status')}}</th>
                <th>{{trans('product_trans.trend')}}</th>
                <th>{{trans('buttons_trans.Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($products as $product)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td><img src="{{ asset($product->image) }}" alt="" class="rounded mx-auto d-block" style="max-width:200px;"></td>
                    <td>
                        @if($product->status == 1)
                            <span class="badge badge-success">{{trans('category_trans.showing')}}</span>
                        @else
                            <span class="badge badge-danger">{{trans('category_trans.hidden')}}</span>
                        @endif
                    </td>
                    <td>
                        @if($product->trend == 1)
                            <span class="badge badge-success">{{trans('category_trans.popular')}}</span>
                        @else
                            <span class="badge badge-danger">{{trans('category_trans.no_popular')}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('products.show', $product->id)}}" class="btn btn-sm btn-outline-success">{{trans('buttons_trans.show')}}</a>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-sm btn-outline-warning">{{trans('buttons_trans.edit')}}</a>
                        @include('admin.includes.delete_modal',['type'=>'product','data'=>$product,'routes'=>'products.destroy'])
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": true,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            // });
        });
    </script>
@endsection
