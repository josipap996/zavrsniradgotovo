@extends('admin.layouts.app') @section('content') <div class="row">
  <div class="mi-card">
    <div class="mi-header info transparent"> LIST OF MENUS <a href="{{ route('menu.create') }}"><button
                        class="butn info">ADD NEW MENU</button></a></div>
    <div class="mi-body">
      <table class="mi-table table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Page</th>
            <th>Created by</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody> <?php $i=0; ?> @foreach($data as $item) <tr>
            <td>{{ ++$i }}</td>
            <td> {{ $item->name}} </td>
            <td> {{ optional($item->page)->name}} </td>
            <td> {{ optional($item->user)->name}} </td>
            <td class="mi-action-button">
              <a href="{{ route('menu.edit',['id'=>$item->id]) }}">
                <button class="butn warning transparent">
                  <i class="fa fa-edit"></i>
                </button>
              </a>
              <a onclick="return confirm('Are you sure to delete')" href="{{ route('menu.delete',['id'=>$item->id]) }}">
                <button class="butn danger transparent">
                    <i class="fa fa-trash"></i>
                </button>
              </a>
            </td>
          </tr> @endforeach </tbody>
      </table>
    </div>
  </div>
</div> @endsection