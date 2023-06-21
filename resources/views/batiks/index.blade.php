@extends('layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Batiks Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/batiks/create') }}" class="btn btn-success btn-sm" title="Add New batiks">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Merek</th>
                                        <th>Stok</th>
                                        <th>Ukuran</th>
                                        <th>Harga</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($batiks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->merek }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td>{{ $item->ukuran }}</td>
                                        <td>{{ $item->harga }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/batiks/' . $item->id) }}" title="View batiks"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/batiks/' . $item->id . '/edit') }}" title="Edit batiks"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/batiks' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete batiks" onclick="return confirm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection