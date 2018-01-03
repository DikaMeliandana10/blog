@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>
                <a href="{{route('category.create')}}" class="btn btn-sm btn-primary"> + </a></div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Tindakan</th>
                        </tr>
                        @forelse($categories as $category)
                        <tr>
                        <th>{{$category->id}}</th>
                        <th>{{$category->name}}</th>
                        <th><a href="{{route('category.edit', $category->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('category.show', $category->id)}}" class="btn btn-sm btn-success">Show</a>
                        </th>
                        <th><form action="{{route('category.destroy', $category->id)}}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        </th>
                        </tr>
                        @empty
                        <tr>
                        <th colspan="3">Data Kosong</th>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
