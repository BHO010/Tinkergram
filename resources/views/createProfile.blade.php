@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">

             <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="profilepic">Profile Image</label><br>
                    <input type="file" name="profilepic" id="profilepic">
                </div>
                <button type="submit" class="btn btn-primary">Create Profile</button>
            </form>

        </div>
    </div>
</div>

</div>
@endsection