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
        <a class="btn btn-success" href="{{'add'}}">Thêm Bài Viết Mới
        </a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th style="width:50px">STT</th>
           {{-- <th style="width:50px">ID</th>--}}
            <th style="width:200px">Photo</th>
            <th style="width:300px">Tiêu đề</th>
            <th style="width:300px">Chuyên mục</th>
            <th style="width:150px">Người đăng</th>
            <th style="width:50px">Hot</th>
            <th style="width:100px">Updated</th>
            <th style="width:50px">Edit</th>
            <th style="width:50px">Delete</th>
          {{--  <th style="width:100px">&nbsp;</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($news as $key => $new)
        <tr>
            <td>{{$key+1}}</td>
            {{--<td>{{$new->id}}</td>--}}
            <td>
            <div id="image_show">
                <a href="{{ $new->photo}}" target="_blank">
                    <img src="{{ $new->photo}}" width="100px">
                </a>
            </div>
            </td>
            <input type="hidden" name="photo" value="{{ $new->photo}}" id="photo">
            <td>{{$new->name}}</td>
            <td>{{$new->menu->name}}</td>
            <td>{!! \App\Helpers\Helper::user($new->user)!!}</td>
            <td>{!! \App\Helpers\Helper::active($new->hot)!!}</td>
            <td>{{ $new->updated_at }}</td>
            <td>
                <a class = "btn btn-primary btn-sm" href="/admin/news/edit/{{$new->id}}'">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <a href="#" class="btn btn-danger btn-sm"
                   onclick="removeRow({{ $new->id }}, '/admin/news/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">
        {!! $news->links("pagination::bootstrap-4") !!}
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
