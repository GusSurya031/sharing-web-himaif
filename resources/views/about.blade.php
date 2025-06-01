<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pengajuan Peminjaman Inventaris</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header>
        <h1>Ini adalah halaman About</h1>
    </header>
    <main class="p-4">
        <p>Data Product: </p>
        <div class="container grid grid-cols-3 gap-4">
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <div class="bg-blue-200 p-4 rounded-md">
                        <p class="text-xl font-bold">{{ $product->name }}</p>
                        <p>{{ $product->description }}</p>
                    </div>
                @endforeach
            @else
                <p>Tidak ada data</p>
            @endif
        </div>
        <div class="mt-4">
            <p>Tambah Data produk</p>
            <form action="/create-product" method="POST">
                @csrf
                <div>
                    <label for="product_name">Nama Produk: </label>
                    <input type="text" name="product_name" id="product_name" class="w-64 border rounded-md">
                </div>
                <div>
                    <label for="description">Deskripsi: </label>
                    <textarea name="description" id="description" class="w-64 border rounded-md"></textarea>
                </div>
                <button type="submit" class="bg-blue-200 rounded-md px-4 py-2">
                    Tambah Data
                </button>
            </form>
        </div>
    </main>
</body>

</html>
