@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Sửa từ khoá bài viết</h5>
    <div class="card-body">
      <form method="post" action="{{route('post-tag.update',$postTag->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tên</label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$postTag->title}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Trạng thái</label>
          <select name="status" class="form-control">
            <option value="active" {{(($postTag->status=='active') ? 'selected' : '')}}>Có</option>
            <option value="inactive" {{(($postTag->status=='inactive') ? 'selected' : '')}}>Ko</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Sửa</button>
        </div>
      </form>
    </div>
</div>

@endsection
