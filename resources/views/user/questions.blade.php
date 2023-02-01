@extends('layouts.app')

@section('title')
    Questions |
@endsection

@section('mainSection')
    @include('layouts.banner')

    <!-- questions section -->
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-5 col-lg-8 mb-lg-0">
                    <h2 class="h5 section-title">Questions</h2>

                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <h3 class="h5">Frequently asked questions</h5>
                            <a href="#askQuestion" class="btn btn-primary">Ask a Question</a>
                    </div>


                    @foreach ($questions as $question)
                        <div class="mt-4 border card">
                            <div class="card-body">
                                <div class="mb-4 d-flex justify-content-between align-items-center">
                                    <a href="{{ route('question_answers', $question->id) }}"
                                        class="btn-link h4">{{ $question->question }}</a>
                                    @if ($question->user_id === auth()->user()->id)
                                        <form action="{{ route('question_delete', $question->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-white border-0 text-danger delete"> <i
                                                    class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>

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
                                    <li class="list-inline-item text-primary">
                                        <i class="ti-comment"></i>
                                        @php
                                            $answers = DB::table('question_answers')
                                                ->where('question_id', $question->id)
                                                ->get();
                                            echo count($answers);
                                            if (count($answers) > 1) {
                                                echo ' answers';
                                            } else {
                                                echo ' answer';
                                            }
                                        @endphp
                                    </li>
                                </ul>

                                <a href="{{ route('question_answers', $question->id) }}"
                                    class="py-1 mt-4 btn btn-outline-primary btn-sm">See
                                    answers</a>
                            </div>
                        </div>
                    @endforeach

                    <div class="mt-5">
                        {{ $questions->links('pagination::bootstrap-5') }}
                    </div>




                    <!-- ask question form -->
                    <h3 class="mb-3 h4" id="askQuestion">Ask a question</h3>

                    <form action="{{ route('question_store') }}" method="post">
                        @csrf
                        <div class="mb-3 form-group">
                            <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror"
                                required>
                                <option disabled selected>Choose Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group">
                            <textarea class="form-control  @error('question') is-invalid @enderror" name="question" rows="10"
                                placeholder="Enter question here..."></textarea>
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Question</button>
                    </form>

                </div>


                {{-- rightbar --}}
                @include('layouts.rightbar')
            </div>
        </div>
    </section>
@endsection
