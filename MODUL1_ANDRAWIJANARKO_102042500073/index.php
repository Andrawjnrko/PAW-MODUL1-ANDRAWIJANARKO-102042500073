<?php
$products = [
    [
        "nama" => "Wireless Mechanical Keyboard",
        "kategori" => "Perangkat Input",
        "harga" => 850000,
        "stok" => 12
    ],
    [
        "nama" => "Mouse Gaming RGB",
        "kategori" => "Perangkat Input",
        "harga" => 350000,
        "stok" =>  5
    ],
    [
        "nama" => "Monitor LED 24 Inch FULL HD",
        "kategori" => "Display",
        "harga" => 1750000,
        "stok" => 0
    ],
    [
        "nama" => "USB-C Hub Multiport 7-in-1",
        "kategori" => "Audio",
        "harga" => 520000,
        "stok" => 0
    ],
    [
        "nama" => "Webcam HD 2160 dengan Mic",
        "kategori" => "Kamera & Video",
        "harga" => 410000,
        "stok" => 15
    ]
];

$total_produk = count($products);
?>

<!DOCTYPPE html>
<html lang= "id">
    <head>
        <meta charset= "UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cia Store - Katalog Perangkat & Aksesoris Teknologi</title>
        <style>
            :root {
                --primary-color: #2563eb;
                --primary-hover: #1d4ed8;
                --bg-color : #f8fafc;
                --card-bg: #ffffff;
                --text-color: #0f172a;
                --text-muted: #64748b;
                --success-color: #16a34a;
                --danger-color: #dc2626;
                --border-color : #e2e8f0;
                --radius : 12px;
                --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            }
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}

body {
    background-color: var(--bg-color);
    color: var(--text-color);
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.navbar {
    background-color: var(--card-bg);
    border-bottom: 1px solid var(--border-color);
    padding: 1rem 2rem;
    position: sticky;
    top: 0;
    z-index: 100;
}

.navbar-brand {
    font-size: 1.5rem;
    font-weight:700;
    color: var(--primary-color);
    text-decoration: none;
}

.hero {
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
    color: white;
    text-align: center;
    padding: 3rem 1.5rem;
}

.hero h1 {
    font-size: 2.5rem;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2.5rem 1.5rem;
    flex: 1;
    width: 100%;
}

.catalog-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--border-color);
}

.catalog-title {
    font-size: 1.5rem;
    font-weight:600;
}

.product-count {
    background-color : #dbeafe;
    color: var(--primary-color);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.75rem;   
}

.product-card {
    background-color: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    padding: 1.5rem;
    box-shadow: var(--shadow);
    display:  flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0.10px 15px -3px rgba(0, 0, 0, 0.1);
}

.product-category {
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--text-muted);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.product-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 12px;
    font-size: 0.80rem;
    font-weight: 600;
}

.badge-available {
    background-color: #dcfce7;
    color: var(--success-color);
}

.badge-out {
    background-color: #fee2e2;
    color: var(--danger-color);
}

.btn {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.2s ease;
        }

.btn-primary {
    background-color: var(--primary-color);
    color: white;
}

.btn-primary:hover {
    background-color: var(--primary-hover);
}

.btn-disabled {
    background-color: #e2e8f0;
    color: #94a3b8;
    cursor: not-allowed;
}

.footer {
    background-color: var(--card-bg);
    border-top: 1px solid var(--border-color);
    text-align: center;
    padding: 1.5rem;
    color: var(--text-muted);
    font-size: 0.9rem;
    margin-top: auto;
}

@media (max-width: 640px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            .catalog-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <a href="#" class="navbar-brand">Cia Store</a>
    </header>

    <section class="hero">
        <h1>Selamat Datang di Cia Store</h1>
    </section>

    <main class="container">
        
        <div class="catalog-header">
            <h2 class="catalog-title">Daftar Produk</h2>
            <div class="product-count">
                Total Produk: <?php echo $total_produk; ?> Jenis
            </div>
        </div>

        <div class="product-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div>
                        <div class="product-category"><?php echo htmlspecialchars($product['kategori']); ?></div>
                        <h3 class="product-name"><?php echo htmlspecialchars($product['nama']); ?></h3>
                        
                        <div class="product-price">
                            <?php echo "Rp " . number_format($product['harga'], 0, ',', '.'); ?>
                        </div>

                        <div class="product-meta">
                            <span>Sisa Stok: <strong><?php echo $product['stok']; ?></strong></span>

                            <?php if ($product['stok'] > 0): ?>
                                <span class="badge badge-available">Tersedia</span>
                            <?php else: ?>
                                <span class="badge badge-out">Stok Habis</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div>
                        <?php if ($product['stok'] > 0): ?>
                            <button type="button" class="btn btn-primary">Beli Sekarang</button>
                        <?php else: ?>
                            <button type="button" class="btn btn-disabled" disabled>Stok Habis</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </main>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Cia Store. All rights reserved.</p>
    </footer>

</body>
</html>