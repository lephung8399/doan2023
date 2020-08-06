@extends('layouts.app1')

@section('content')
    <div class="container">
        <form action="{{ route('admin.category.store') }}"  class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" style="width: 683px" name="CategoryName">
                                <span class="help-block">A block of help text that breaks onto a new line.</span>
                            </div>
                        </div>
                    </fieldset>
            </div>
            <div class="row">
                <div class="col-md-8">

                </div>
                <div class="col-md-4 col-md-offset-6">
                    <button class="btn btn-success btn-fill btn-wd" style="display: inline-block" type="submit">Submit</button>
                    <a href="{{ URL::previous() }}"><button class="btn btn-warning btn-fill btn-wd" type="button" style="display: inline-block">Cancel</button></a>
                </div>
            </div>
        </form>
    </div>

@endsection

