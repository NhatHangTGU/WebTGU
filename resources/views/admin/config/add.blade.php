@extends('admin.main')

@section('content')
    <div class="card card-primary">
        <!-- form start -->
        <form action ="" method="POST" enctype="multipart/form-data">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên Khoa/Phòng/Ban</label>
                            <input type="text" name="company" value=" {{$company->description}}" class="form-control" id="company">
                        </div>
                    </div>

                </div>


                <div class="form-group">
                    <label for="menu">Logo</label>
                    <input type="file" name="file" class="form-control" id="upload">
                    <div id="image_show">
                        <a href="{{ url('storage/uploads/')}}" target="_blank">
                            <img src="{{ $photo->description}}" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="photo" value="{{ $photo ->description}}" id="photo">
                </div>

                <div class="form-group">
                    <label for="menu">Email</label>
                    <input type="text" name="email" value=" {{$email->description}}"  class="form-control" >
                </div>

                <div class="form-group">
                    <label for="menu">Phone</label>
                    <input type="text" name="phone" value=" {{$phone->description}}" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="menu">Địa chỉ 1</label>
                    <input type="text" name="address1" value=" {{$address1->description}}" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="menu">Địa chỉ 2</label>
                    <input type="text" name="address2" value=" {{$address2->description}}" class="form-control" >
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập Nhật Cấu hình</button>
            </div>
            @csrf
        </form>
    </div>
@endsection


