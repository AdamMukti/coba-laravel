@extends("layouts.template")

@section("content")
    <div class="container mt-3">
        <h2>Crud Laravel</h2>
        <a type="button" class="btn btn-primary mb-3" href="/product/add">Add Product</a>

        <div class="row">
            <div class="col-md-8">
                <div class="card mt-3">
                    <h5 class="card-header">
                        Product List
                    </h5>
                    <div class='card-body'>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $product->id }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $product->name }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $product->stock }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $product->price }}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="/products/{{ $product->id }}">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" />
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" />
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
