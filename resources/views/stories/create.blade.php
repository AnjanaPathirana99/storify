@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Story
                    <a href="{{route('stories.index')}}" class="btn btn-secondary" style="float: right">Back</a>
                <div class="card-body">
                 <form action="{{route('stories.store')}}" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class= "form-control" />
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea type="text" name="body" class= "form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" class="form-control">
                            <option value="">--Select--</option>
                            <option value="short">Short</option>
                            <option value="long">Long</option>
                        </select>
                    </div>
                    








                    <button class="btn btn-primary" style= "margin-block: 10px">Add</button>
                 </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection