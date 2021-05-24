@extends('layouts.app')
@section('title', 'Laravel 8 CRUD')

@section('content')
    <div class="container">

        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::get('faild'))
            <div class="alert alert-warning alert-dismissible fade show">
                {{ Session::get('faild') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    Add To DataBases +
                </button>

                {{-- --------------------------- Model Add ---------------------- --}}
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addModal">Add Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('crud.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Your Name" required value="{{ old('name') }}">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label>username</label>
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="Enter Your Name" required value="{{ old('username') }}">
                                        <span class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" id="phone" class="form-control"
                                            placeholder="Enter Your number phone" required value="{{ old('phone') }}">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Enter Your Email" required value="{{ old('email') }}">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ------------------------ Model Edit ---------------------- --}}
                <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModal"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EditModal">Edite Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('crud.update', 'test') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" id="id" class="form-control" value="">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Your Name" required value="{{ old('name') }}">
                                        {{-- <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label>username</label>
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="Enter Your Name" required value="{{ old('username') }}">
                                        {{-- <span class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" id="phone" class="form-control"
                                            placeholder="Enter Your number phone" required value="{{ old('phone') }}">
                                        {{-- <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Enter Your Email" required value="{{ old('email') }}">
                                        {{-- <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ---------------------- Model delete --------------------- --}}
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModal">Delete Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('crud.destroy','test')}}" method="POST">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <p class="h3 text-danger text-center m-5">هل تريد الحذف بلتاكيد؟؟</p>
                                        <input type="hidden" name="id" id="id" class="form-control" value="">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Yes Delete</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ------------------------ End All Modele ---------------- --}}

            </div>
            <div class="col-lg-8">
                <h1 class="text-danger text-center">Laern to Laravel 8 CRUD</h1>
            </div>
        </div>
        <div class="row d-flex mt-5 justify-content-center">
            <div class="col-lg-12 offset-md-3">
                <table class="table w-100">
                    <thead>
                        <tr class="bg-dark text-primary">
                            {{-- text-white --}}
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">username</th>
                            <th scope="col">phone</th>
                            <th scope="col">email</th>
                            <th scope="col" class="text-center">CRUD</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emps as $emp)
                            <tr>
                                <th scope="row">{{ $emp->id }}</th>
                                <td>{{ $emp->name }}</td>
                                <td>{{ $emp->username }}</td>
                                <td>{{ $emp->phone }}</td>
                                <td>{{ $emp->email }}</td>
                                <td class="text-center">
                                    <a type="button" class="btn  btn-outline-primary mr-1" data-toggle="modal"
                                        data-target="#EditModal"> edit </a>
                                    <a type="button" class="btn btn-outline-danger mr-1" data-toggle="modal"
                                        data-target="#deleteModal"> Delete </a>
                                    <a type="button" class="btn btn-outline-success mr-1" data-toggle="modal"
                                    data-target="#"> show </a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(Document).ready(function() {
            $('.alert').fadeOut(5000);
        });

    </script>
    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })

    </script>
@endsection
