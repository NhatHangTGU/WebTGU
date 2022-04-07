@extends('admin.main')

@section ('head')
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
@endsection

@section('content')
    <div class="col-lg-12 text-center text-lg-right" style="margin: 4px;">
        <a class="btn btn-success" href="{{'list'}}">Danh sách menu
        </a>
    </div>

    <div class="card card-primary">
        <!-- form start -->
        <form action ="" method="POST">

            <div class="card-body">
                <div class="form-group">
                    <label>Tên Menu</label>
                    <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập tên menu">
                </div>

                <div class="form-group">
                    <label>Menu</label>
                    <select class ="form-control" name="parent_id">
                        <option value="0"> Menu cha </option>
                            @foreach($menus as $menu)
                            <option value="{{$menu->id}}"> {{$menu->name}} </option>
                            @endforeach
                    </select>
                </div>

                {{--<div class="form-group">
                    <label>Mô tả</label>
                    <textarea name ="description" class ="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Mô tả chi tiết</label>
                    <textarea name="content" id="content" class ="form-control"></textarea>
                </div>--}}

                <div class=" "form-group>
                    <label>Kích hoạt</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="active" name="active" value="1" checked="">
                        <label for="active" class="custom-control-label">Có</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="no_active" name="active">
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo Menu</button>
            </div>
            @csrf
        </form>
    </div>
@endsection

@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
@endsection
