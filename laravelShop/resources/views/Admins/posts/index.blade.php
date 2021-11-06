@php
/** @var \App\Models\Post[] $posts */
@endphp

@extends('admins.layout')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">isActive ?? null</th>
            <th scope="col">createdAt</th>
        </tr>
    </thead>
    <tbody>
        @if($posts->isNotEmpty())
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <!-- <td><i class="fa {{ $post->is_active ? 'fa-check text-success' : 'fa-times text-danger' }}"></i></td> -->
                <td>{{ $post->is_active }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection