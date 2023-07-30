@extends('admin.layouts.app') @section('content') <div class="row">
  <div class="col-sm-7 m-auto">
    <div class="mi-card">
      <!--start of mi-fc-card-->
      <div class="mi-header warning">
        <!--mi card header started-->EDIT MENU
      </div>
      <!--end of mi card header-->
      <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        <div class="mi-body">
          <!--mi-card body started-->
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
          <input name="id" type="hidden" value="{{ $data->id }}">
          <div class="form-group">
            <label>NAME <b class="text-danger">*</b>
            </label>
            <input type="text" placeholder="NAME" name="name" id="name" class="form-control" value="{{ old('name')?old('name'):$data->name }}" required>
          </div>
          <div class="form-group">
            <label>LINK <b class="text-danger">*</b>
            </label>
            <input type="text" placeholder="LINK" name="link" id="link" class="form-control" value="{{ old('link')?old('link'):$data->link }}" required>
          </div>

          <div class="form-group">
            <label>ROUTE <b class="text-danger">*</b>
            </label>
            <input type="text" placeholder="ROUTE NAME" name="route" id="route" class="form-control" value="{{ old('route')?old('route'):$data->route }}" required>
          </div>
        </div>
        <!--end of mi-card-body-->
        <div class="mi-footer">
          <!--mi-card footer started-->
          <div class="row">
            <div class="col-sm-4 m-auto">
              <button type="submit" class="butn warning w-100"> UPDATE </button>
            </div>
          </div>
        </div>
        <!--end of mi-card-footer-->
      </form>
    </div>
    <!--end of mi-fc-card-->
  </div>
</div> @endsection