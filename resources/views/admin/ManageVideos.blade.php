@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 ">
                                <h4 class="text-capitalize">Manage Videos</h4>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-success mb-0" href="{{ route('AddVideos') }}"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Add</a>
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
                        <h6>Videos</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body p-3">
                                <div class="row">
                                    @foreach ($courses as $c)
                                        <div class="col-md-4  ">
                                            <div class="card card-profile">
                                                <img src="{{ asset('storage/uploads/courses/images/' . $c->Courses_Image) }}"
                                                    alt="Image placeholder" class="card-img-top">
                                                <div class="row justify-content-center">
                                                    <div class="col-4 col-lg-4 order-lg-2">
                                                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                                            <a
                                                                href="{{ route('VideoDetail', ['courses' => $c->Courses_Title]) }}">
                                                                <img src="/images/logo.png"
                                                                    class="rounded-circle img-fluid border border-2 border-white">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $c->Courses_Title }}</h5>
                                                        <p class="card-text">{{ $c->Courses_Desc }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = session('success'))
        <script>
            Swal.fire({
                position: 'top-mid',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
@endsection
