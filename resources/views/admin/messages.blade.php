@extends('admin.layouts.app')

@section('title')
    messages
@endsection

@php
    $page = 'messages';
@endphp

@section('mainpart')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title">All messages</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Name & Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $key => $message)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                @if ($message->user_photo == null)
                                    <img src="{{ asset('images/user_photos/user.png') }}" alt="" style="width: 50px"
                                        class="rounded-circle">
                                @else
                                    <img src="{{ asset('images/user_photos/' . $message->user_photo) }}" alt=""
                                        style="width: 50px" class="rounded-circle">
                                @endif
                            </td>
                            <td>
                                {{ $message->user_name }} <br>
                                <small>{{ $message->user_email }}</small>
                            </td>
                            <td>{{ $message->subject }}</td>
                            <td>
                                @php
                                    echo $message->message;
                                @endphp
                            </td>

                            <td>
                                <div class="d-flex">
                                    <a class="mr-2 btn btn-info btn-sm" href="mailto:{{ $message->user_email }}"
                                        target="blank">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <form action="{{ route('messages.destroy', $message->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="delete btn btn-danger btn-sm"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
