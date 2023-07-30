@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="mi-card">
            <div class="mi-header info transparent"> LIST OF PAGES <a href="{{ route('page.create') }}"><button
                        class="butn info">ADD NEW PAGE</button></a> </div>
            <div class="mi-body">
                <table class="mi-table table table-bordered table-striped"  id="dataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>BANNER IMAGE</th>
                            <th>BANNER TITLE</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> <?php $i = 0; ?> @foreach ($data as $item)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td> {{ $item->name }} </td>
                                <td> <a href="{{ $item->banner_image_url }}"><img width="70" height="50"
                                            src="{{ $item->banner_image_url }}" alt=""></a> </td>
                                <td> {{ $item->banner_title }} </td>
                                <td class="mi-action-button"><a href="{{ route('page.edit', ['id' => $item->id]) }}"> <button
                                            class="butn warning transparent"><i class="fa fa-edit"></i></button></a><a
                                        onclick="return confirm('Are you sure to delete')"
                                        href="{{ route('page.delete', ['id' => $item->id]) }}"> <button
                                            class="butn danger transparent"><i class="fa fa-trash"></i></button></a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mi-footer">
                <div class="float-right"> </div>
            </div>
        </div>
    </div>
@endsection
