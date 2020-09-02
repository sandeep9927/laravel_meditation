 @extends('layouts.admin_panel')
  @section('title','create department')
  @section('content')
  <div class="col-sm-6">
      <form method="post" action="/department">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" aria-describedby="nameHelp" placeholder="Enter Title">
            @error('title')<p style="color: red">{{$message}}</p>@enderror
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select class="custom-select" name="status">
                <option selected >Active</option>
                <option value="Inactive">Inactive</option>
              </select>
              @error('status')<p style="color: red">{{$message}}</p>@enderror
              </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
        </form>
  </div>
  @endsection  