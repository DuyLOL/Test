@extends('backend.layouts.master')

@section('title','Sửa bình luận')

@section('main-content')
<div class="card">
  <h5 class="card-header">Sửa bình luận</h5>
  <div class="card-body">
    <form action="{{route('comment.update',$comment->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="name">Bởi:</label>
        
      </div>
      <div class="form-group">
        <label for="comment">bình luận</label>
      <textarea name="comment" id="" cols="20" rows="10" class="form-control">{{$comment->comment}}</textarea>
      </div>
      <div class="form-group">
        <label for="status">Trạng thái :</label>
        <select name="status" id="" class="form-control">
          <option value="">--Chọn--</option>
          <option value="active" {{(($comment->status=='active')? 'selected' : '')}}>Có</option>
          <option value="inactive" {{(($comment->status=='inactive')? 'selected' : '')}}>Ko</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }
</style>
@endpush