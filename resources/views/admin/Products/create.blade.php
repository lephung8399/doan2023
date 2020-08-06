@extends('layouts.app1')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="col-lg-4 col-md-5">
                    <div class="card card-user">
                        <div class="card-content">
                            <img src="{{ asset('images/types-of-image-files-extensions.jpg') }}" alt="..." height="100%" "/>
                        </div>
                        <input type="file" name="anh[]" class="form-control">

                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Profile</h4>
                        </div>
                        <div class="card-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control border-input" name="ProductName" placeholder="Press product name..." value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" class="form-control border-input" name="ProductPrice" placeholder="Press price product..." value="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><br>
                                        <label for="exampleInputEmail1" style="padding-top: 14px">VNĐ</label>
    {{--                                    <p>VNĐ</p>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="ProductCategoryID" id="" class="form-control">
                                                @foreach($cate as $cates)
                                                    <option value="{{ $cates->CategoryID }}" name="">{{ $cates->CategoryName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SKU</label>
                                            <input type="text" class="form-control border-input" name="ProductSKU" placeholder="Press SKU..." value="000-00">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="number" class="form-control border-input" name="ProductStock" placeholder="Press Stock..." value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="editor" rows="5" class="form-control border-input" name="ProductDescription" placeholder="Here can be your description" value="">

                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
