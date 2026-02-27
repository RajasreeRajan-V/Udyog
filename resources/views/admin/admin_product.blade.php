@extends('layouts.app')

@section('title', 'Manage Products')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Products Management</h2>
            <button class="btn" data-bs-toggle="modal" data-bs-target="#createProductModal" style="background-color:#3A3A3A;
                               color:#A0D25D;
                               border:2px solid #A0D25D;
                               font-weight:600;
                               padding:8px 18px;
                               border-radius:8px;">
                + Add Product
            </button>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Products Table --}}
        <div class="card border-2" style="border-color: #A0D25D;">
            <div class="card-body">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Size</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img src="{{ asset('storage/' . $product->img) }}" width="60" class="img-thumbnail">
                                </td>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->size }}</td>
                                <td>{{ $product->category }}</td>

                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal{{ $product->id }}">
                                        Edit
                                    </button>

                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    No products found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- EDIT MODALS --}}
    @foreach($products as $product)
        <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1">
            <div class="modal-dialog">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control"
                                    required>{{ $product->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Size</label>
                                <input type="text" name="size" class="form-control" value="{{ $product->size }}" required>
                            </div>

                            <div class="mb-3">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control" value="{{ $product->category }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="img" class="form-control">
                                <img src="{{ asset('storage/' . $product->img) }}" width="80" class="img-thumbnail mt-2">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    {{-- CREATE MODAL --}}
    <div class="modal fade" id="createProductModal" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Size</label>
                            <input type="text" name="size" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Category</label>
                            <select name="category" class="form-control" required>
                                <option value="">-- Select Category --</option>
                                <option value="Granite">Granite</option>
                                <option value="Marble">Marble</option>
                                <option value="Tiles">Tiles</option>
                                <option value="Natural Stones">Natural Stones</option>
                                <option value="Quartz">Quartz</option>
                                <option value="Sandstone">Sandstone</option>
                                <option value="Limestone">Limestone</option>
                                <option value="Slate">Slate</option>
                                <option value="Onyx">Onyx</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection