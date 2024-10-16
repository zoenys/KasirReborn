@extends('layouts.app')

@section('content')

<!-- Product Categories Table -->
<div class="card mb-4">
    <div class="card-body">
        <h3 class="text-primary fw-bold">Kategori Produk</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Total Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Elektronik</td>
                    <td>1000</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" onclick="editCategory(1)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fashion</td>
                    <td>1000</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" onclick="editCategory(2)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory(2)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Olahraga</td>
                    <td>1000</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" onclick="editCategory(3)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory(3)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Book Collection-->
<div class="card">
    <div class="card-body">
        <!-- Flexbox container to align H3 and button on the same row -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">Daftar Produk</h3>
            <button type="button" class="btn btn-success btn-icon-text text-white" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="mdi mdi-loupe btn-icon-prepend"></i>Tambah Produk
            </button>
        </div>
        
        <div class="row g-4 mb-4">
            <div class="col-md-8">
                <div class="input-group shadow-sm w-100">
                    <input type="search" class="form-control p-3" placeholder="Keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="btn-group w-100">
                    <button type="button" class="btn btn-primary">Kategori</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownCategoryButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownCategoryButton">
                        <h6 class="dropdown-header">Kategori</h6>
                        <a class="dropdown-item" href="#">Elektronik</a>
                        <a class="dropdown-item" href="#">Fashion</a>
                        <a class="dropdown-item" href="#">Olahraga</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Semua Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="btn-group w-100">
                    <button type="button" class="btn btn-info text-white">Urutkan</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split text-white" id="dropdownSortingButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownSortingButton">
                        <h6 class="dropdown-header">Sort by</h6>
                        <a class="dropdown-item" href="#">Nothing</a>
                        <a class="dropdown-item" href="#">Popularity</a>
                        <a class="dropdown-item" href="#">Organic</a>
                        <a class="dropdown-item" href="#">Fantastic</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-2 justify-content-left">
                    <div class="col-md-4 col-lg-2 col-xl-2">
                        <div class="rounded position-relative fruite-item h-100 clickable-box shadow-lg" onclick="#">
                            <div class="book-img">
                                <img src="assets/images/demo/icon-menu.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-dark px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Produk 1</div>
                            <div class="p-2 border bg-light border-light border-top-0 rounded-bottom d-flex flex-column">
                                <h5 class="text-wrapped text-center">Nama Produk 1</h5>
                                <span class="text-wrapped text-center">Rp. 100.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-xl-2">
                        <div class="rounded position-relative fruite-item h-100 clickable-box shadow-lg" onclick="#">
                            <div class="book-img">
                                <img src="assets/images/demo/icon-menu.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-dark px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Produk 2</div>
                            <div class="p-2 border bg-light border-light border-top-0 rounded-bottom d-flex flex-column">
                                <h5 class="text-wrapped text-center">Nama Produk 2</h5>
                                <span class="text-wrapped text-center">Rp. 200.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-xl-2">
                        <div class="rounded position-relative fruite-item h-100 clickable-box shadow-lg" onclick="#">
                            <div class="book-img">
                                <img src="assets/images/demo/icon-menu.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-dark px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Produk 3</div>
                            <div class="p-2 border bg-light border-light border-top-0 rounded-bottom d-flex flex-column">
                                <h5 class="text-wrapped text-center">Nama Produk 3</h5>
                                <span class="text-wrapped text-center">Rp. 300.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding Product -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="product_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-select" id="category_id" required>
                            <option value="">Pilih Kategori</option>
                            <option value="1">Elektronik</option>
                            <option value="2">Fashion</option>
                            <option value="3">Olahraga</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity_in_stock" class="form-label">Jumlah Stok</label>
                        <input type="number" class="form-control" id="quantity_in_stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="saveProductBtn">Simpan Produk</button>
            </div>
        </div>
    </div>
</div>

@endsection

/// gacor
@extends('layouts.app')

@section('content')

<!-- Alert Sukses -->
@if (session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
@endif

<!-- Alert Gagal -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Product Categories Table -->
<div class="card mb-4">
    <div class="card-body">
        <h3 class="text-primary fw-bold">Kategori Produk</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Total Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->category_id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->products->sum('quantity_in_stock') }}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" onclick="editCategory({{ $category->category_id }})">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory({{ $category->category_id }})">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Daftar Produk -->
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">Daftar Produk</h3>
            <button type="button" class="btn btn-success btn-icon-text text-white" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="mdi mdi-loupe btn-icon-prepend"></i>Tambah Produk
            </button>
        </div>
        
        <div class="row g-4 mb-4" id="product-list">
            @foreach ($products as $product)
            <div class="col-md-4 col-lg-2 col-xl-2">
                <div class="rounded position-relative h-100 shadow-lg clickable-box">
                    <div class="book-img">
                        <img src="{{ asset($product->gambar) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->product_name }}">
                    </div>
                    <div class="text-white bg-dark px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $product->product_name }}</div>
                    <div class="p-2 border bg-light border-light border-top-0 rounded-bottom d-flex flex-column">
                        <h5 class="text-wrapped text-center">{{ $product->product_name }}</h5>
                        <span class="text-center">Rp. {{ number_format($product->harga_jual, 0, ',', '.') }}</span>
                        <p class="text-muted text-center">{{ $product->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal untuk Tambah Produk -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Tambah Produk -->
                <form id="addProductForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-select" id="category_id" name="category_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity_in_stock" class="form-label">Jumlah Stok</label>
                        <input type="number" class="form-control" id="quantity_in_stock" name="quantity_in_stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept=".jpg,.jpeg,.png">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Produk</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Auto Reload and Dismiss Success Message -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Hide the success message after 2 seconds
        if (document.getElementById('success-message')) {
            setTimeout(function () {
                document.getElementById('success-message').style.display = 'none';
            }, 2000);  // 2 seconds delay
        }

        // Reload page after form submission
        document.getElementById('addProductForm').addEventListener('submit', function (event) {
            setTimeout(function () {
                location.reload();  // Reload after 2 seconds
            }, 2000);  // 2 seconds delay
        });
    });
</script>

@endsection
