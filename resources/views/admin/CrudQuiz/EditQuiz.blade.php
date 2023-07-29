@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 ">
                                <h4 class="text-capitalize">Add Quiz</h4>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-success mb-0" href="{{ route('ManageQuiz') }}"><i
                                        class="fas fa-sign-out"></i>&nbsp;&nbsp;Back</a>
                            </div>
                        </div>

                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Quiz Information</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form action="{{ route('EditedQuiz', ['courses' => $courses->Courses_Title, 'id' => $quiz->Quiz_Id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <select id="courses" class="form-control" name="Courses">
                                                <option value="{{ $courses->Courses_Id }}">{{ $courses->Courses_Title }}
                                                </option>
                                                @php
                                                    $usedCoursesTitles = [];
                                                @endphp
                                                @foreach ($allcourses as $c)
                                                    @if ($c->Courses_Id !== $courses->Courses_Id && !in_array($c->Courses_Title, $usedCoursesTitles))
                                                        <option value="{{ $c->Courses_Id }}">{{ $c->Courses_Title }}
                                                        </option>
                                                        @php
                                                            $usedCoursesTitles[] = $c->Courses_Title;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('Courses')
                                                <div class="mb-3">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Quiz Title</label>
                                            <input class="form-control " type="text" placeholder="Enter your Quiz Name"
                                                name="QuizTitle" value="{{ $quiz->Quiz_Title }}">
                                            @error('QuizTitle')
                                                <div class="mb-3">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Quiz
                                                Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Your Quiz Description" rows="3"
                                                name="QuizDesc">{{ $quiz->Quiz_Desc }}</textarea>
                                            @error('QuizDesc')
                                                <div class="mb-3">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>

                            <div class="col-1 text-end">
                                <button class="btn bg-gradient-success mb-2" type="submit"></i>&nbsp;&nbsp;Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
