@extends('admin.main')

@section('content')
    <div class="row align-items-center py-3 px-lg-12" style="margin: 1px;" style="margin: 2px;">
        <div class="input-group input-group-sm" style="width: 250px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search" style="height: 40px;">
            <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <a class="btn btn-success" href="{{'add'}}">Thêm Menu mới
        </a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>

            <th style="width:50px">ID</th>
            <th>Name</th>
            <th style="width:50px">Active</th>
            <th style="width:200px">Update</th>
            <th style="width:50px">Edit</th>
            <th style="width:50px">Delete</th>
            {{--<th style="width:200px">&nbsp;</th>--}}
        </tr>
        </thead>
        <tbody>
            {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>
    </table>
    <div class="card-footer clearfix">
        {!! $menus->links("pagination::bootstrap-4") !!}
    </div>
@endsection

<style>
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -7.5px;
        margin-left: -7.5px;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
</style>
