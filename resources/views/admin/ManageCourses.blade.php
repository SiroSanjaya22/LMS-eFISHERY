@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 ">
                                <h4 class="text-capitalize">Manage Courses</h4>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-success mb-0" href="{{ route('AddCategoryCourses') }}"><i
                                    class="fas fa-plus"></i>&nbsp;&nbsp;Add Category</a>
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
                        <h6>Category</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body p-3">
                                <div class="row">
                                    @foreach ($CategoryCourses as $c)
                                        <div class="col-md-4  ">
                                            <div class="card card-profile">
                                                <img src="{{ asset('storage/uploads/category/images/' . $c->Category_Image) }}"
                                                    alt="Image placeholder" class="card-img-top">
                                                <div class="row justify-content-center">
                                                    <div class="col-4 col-lg-4 order-lg-2">
                                                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                                            <a
                                                                href="{{ route('Courses', ['category' => $c->Category_Name]) }}">
                                                                <img src="images/logo.png"
                                                                    class="rounded-circle img-fluid border border-2 border-white">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="card-body">
                                                        <div class="ms-auto text-end">
                                                            <a href="{{ route('EditCategoryCourses', ['id' => $c->Category_Id]) }}"
                                                                class="btn btn-white border-radius-lg p-2 mt-0  mx-md-0"
                                                                type="button" data-bs-toggle="tooltip"
                                                                data-bs-placement="left" title="Edit">
                                                                <i class="fas fa-pencil p-2"></i>
                                                            </a>
                                                            <button
                                                                class="btn btn-white text-danger border-radius-lg p-2 mt-0 mx-md-0"
                                                                type="button" data-bs-toggle="tooltip"
                                                                onclick="showDeleteConfirmation(this)" data-bs-placement="left"
                                                                title="Delete" id="delete"
                                                                data-href='{{ route('DeleteCategoryCourses', ['id' => $c->Category_Id]) }}'>
                                                                <i class="fas fa-trash p-2"></i>
                                                            </button>

                                                        </div>
                                                        <h5 class="card-title">{{ $c->Category_Name }}</h5>
                                                        <p class="card-text">{{ $c->Category_Desc }}</p>
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
