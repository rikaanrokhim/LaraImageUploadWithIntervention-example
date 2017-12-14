@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Image</div>

                <div class="panel-body">                <!--image disini nama db nya-->
                    <img src="images/{{ $image->image }}" alt="default" width="150px" height="150px">
                    <form method="post" action="postImage" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="image"> <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
