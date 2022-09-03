@extends('layouts.dashboard')

@push('title')
    User Home Dashboard
@endpush


@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-3 col-12">
                <h2>
                    User Dashboard
                </h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                          Action
                        </th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody class="table-group-divide">
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $no }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->role }}
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-dark"><i
                                        class="fa-solid fa-pen me-2"></i>Edit</a>

                                <form class="mt-2" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    {{ method_field('delete') }} {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $no += 1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
