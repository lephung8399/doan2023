@extends('layouts.app1')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories Product</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Category Name</th>
                                {{--                                <th>Category Name</th>--}}
                                {{--                                <th class="text-right">Salary</th>--}}
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            {{dd($categoryUpdate)}}--}}
                                <form action="{{ route('admin.category.updateProcess',$categoryUpdate->CategoryID) }}" method="POST">
                                    @csrf
                                    <tr>
                                        <td class="text-center">
                                            <input type="text" readonly="readonly" style="border: none; padding-left: 15px" name="CategoryID" value="{{$categoryUpdate->CategoryID}}">
                                        </td>
                                        <td>
                                            <input type="text" name="CategoryName" value="{{$categoryUpdate->CategoryName}}">
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="submit" class="btn btn-wd btn-success">Update</button>
                                            <a href="{{ URL::previous() }}"><button class="btn btn-warning btn-fill btn-wd" type="button" style="display: inline-block">Cancel</button></a>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
