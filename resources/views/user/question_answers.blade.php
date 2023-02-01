@extends('layouts.app')

@section('title')
    Question answers |
@endsection

@section('mainSection')
    <!-- Answer section -->
    <div class="py-4"></div>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-5 col-lg-9 mb-lg-0">
                    <article>

                        <h1 class="h2">{{ $question->question }}</h1>
                        <ul class="mt-4 card-meta list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="card-meta-author">
                                    @if ($question->user_photo)
                                        <img src="{{ asset('images/user_photos/' . $question->user_photo) }}">
                                    @else
                                        <img src="{{ asset('images/user_photos/user.png') }}">
                                    @endif
                                    <span>{{ $question->user_name }}</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ date('d M, Y', strtotime($question->created_at)) }}
                            </li>
                            <li class="list-inline-item text-primary">
                                <i class="ti-bookmark"></i>{{ $question->category_name }}
                            </li>
                        </ul>

                    </article>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="pt-5 mt-4 mb-5 border-top">
                        <h3 class="mb-4">Answers</h3>

                        @if ($answers->count() > 0)
                            @foreach ($answers as $answer)
                                <div class="mt-4 card card-body">
                                    <div class="media d-block d-sm-flex">
                                        <a class="mb-3 mr-2 d-inline-block mb-md-0" href="#">
                                            @if ($answer->user_photo)
                                                <img src="{{ asset('images/user_photos/' . $answer->user_photo) }}"
                                                    class="mr-3 avater">
                                            @else
                                                <img src="{{ asset('images/user_photos/user.png') }}" class="mr-3 avater">
                                            @endif
                                        </a>
                                        <div class="media-body">
                                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                                <span>
                                                    <a href="#!"
                                                        class="mb-3 h4 d-inline-block">{{ $answer->user_name }}</a>
                                                    <small class="ml-2 text-black-800 font-weight-600">
                                                        {{ date('d M, Y', strtotime($answer->created_at)) }}
                                                    </small>
                                                </span>

                                                @if ($answer->user_id === auth()->user()->id)
                                                    <form action="{{ route('question_answer_delete', $answer->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="bg-white border-0 text-danger delete"> <i
                                                                class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                            <p>
                                                @php
                                                    echo $answer->answer;
                                                @endphp
                                            </p>
                                            <hr class="my-3">
                                            <div class="">

                                                @php
                                                    $likes = DB::table('question_answer_likes')
                                                        ->where('answer_id', $answer->id)
                                                        ->get();
                                                    $liker_user = DB::table('question_answer_likes')
                                                        ->where('answer_id', $answer->id)
                                                        ->where('user_id', auth()->user()->id)
                                                        ->first();
                                                @endphp

                                                @if ($liker_user)
                                                    <a href="{{ route('question_answer_unlike', $answer->id) }}">
                                                        <i class="fa fa-heart text-danger"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('question_answer_like', $answer->id) }}">
                                                        <i class="far fa-heart text-dark"></i>
                                                    </a>
                                                @endif
                                                <span class="ml-1">({{ $likes->count() }})</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No answer found</p>
                        @endif

                    </div>

                    <div>
                        <h3 class="pt-4 mb-4">Leave an answer</h3>

                        <form action="{{ route('question_answer_store', $question->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="shadow-none summernote form-control" name="answer" rows="7" required></textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit Answer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
