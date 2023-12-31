@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid py-4">
        {{-- {{ dd($enrollment) }} --}}
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 ">
                                <h4 class="text-capitalize">Manage Enrollment</h4>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-success mb-0" href="{{ route('AddEnrollment') }}"><i
                                    class="fas fa-plus"></i>&nbsp;&nbsp;Add Enrollment</a>
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
                        <h6>Enrollment Category</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body p-3">
                                <div class="row">
                                    @foreach ($enrollment as $e)
                                    <div class="col-md-4  ">
                                        <div class="card card-profile">
                                                <img src="{{ asset('storage/uploads/certificate/images/' . $e->Certificate_Image) }}"
                                                    alt="Image placeholder" style="width:auto;height:200px;object-fit: contain">
                                                <div class="row justify-content-center">
                                                    <div class="col-4 col-lg-4 order-lg-2">
                                                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                                            <a
                                                                href="{{ route('DetailEnrollment', ['category' => $e->Enrollment_Title]) }}">
                                                                <img src="images/logo.png"
                                                                    class="rounded-circle img-fluid border border-2 border-white">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="card-body">
                                                        <div class="ms-auto text-end">
                                                            <a href="{{ route('EditEnrollment', ['id' => $e->Enrollment_Id]) }}"
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
                                                                data-href='{{ route('DeleteEnrollment', ['id' => $e->Enrollment_Id]) }}'>
                                                                <i class="fas fa-trash p-2"></i>
                                                            </button>

                                                        </div>
                                                        <h5 class="card-title">{{ $e->Enrollment_Title }}</h5>
                                                        <p class="card-text">{{ $e->Enrollment_Desc }}</p>
                                                        <p class="card-text">{{ $e->Enrollment_Start }} - {{ $e->Enrollment_End }}</p>
                                                        <p class="card-text">Expired : {{ floor((strtotime($e->Enrollment_End) - time()) / 86400) + 1 }} Day Left</p>
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
