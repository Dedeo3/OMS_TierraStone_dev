<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Sekarang – TierraStone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --stone: #b5a89a;
            --earth: #7c6b5d;
            --dark: #1c1814;
            --cream: #f5f1ec;
            --blue: #2563eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--cream);
            color: var(--dark);
        }

        h1,
        h2,
        h3,
        .display {
            font-family: 'Cormorant Garamond', serif;
        }

        /* Subtle stone texture overlay */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
        }

        .step-indicator {
            display: flex;
            align-items: center;
            gap: 0;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 500;
            color: #9ca3af;
            transition: color 0.3s;
        }

        .step.active {
            color: var(--blue);
        }

        .step.done {
            color: #16a34a;
        }

        .step-num {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 2px solid currentColor;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            transition: all 0.3s;
        }

        .step.active .step-num {
            background: var(--blue);
            color: white;
            border-color: var(--blue);
        }

        .step.done .step-num {
            background: #16a34a;
            color: white;
            border-color: #16a34a;
        }

        .step-line {
            width: 40px;
            height: 2px;
            background: #e2e8f0;
            margin: 0 4px;
        }

        /* Card glass style */
        .card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(181, 168, 154, 0.25);
            border-radius: 20px;
            box-shadow: 0 4px 40px rgba(28, 24, 20, 0.06), 0 1px 4px rgba(28, 24, 20, 0.04);
        }

        /* Product selector */
        .product-card {
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.25s ease;
            background: white;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(28, 24, 20, 0.1);
        }

        .product-card.selected {
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
        }

        .product-card.selected::after {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--blue);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            display: grid;
            place-items: center;
        }

        /* Input styling */
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            background: white;
            color: var(--dark);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-input::placeholder {
            color: #adb5bd;
        }

        select.form-input {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            padding-right: 42px;
        }

        /* Btn */
        .btn-primary {
            background: var(--blue);
            color: white;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-secondary {
            background: transparent;
            color: var(--earth);
            padding: 14px 24px;
            border-radius: 12px;
            font-weight: 500;
            font-size: 15px;
            border: 1.5px solid var(--stone);
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-secondary:hover {
            background: var(--cream);
        }

        /* Qty stepper */
        .qty-btn {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: 1.5px solid #e2e8f0;
            background: white;
            display: grid;
            place-items: center;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.15s;
            color: var(--dark);
        }

        .qty-btn:hover {
            background: var(--blue);
            color: white;
            border-color: var(--blue);
        }

        /* Slide animation */
        .form-step {
            display: none;
            animation: slideIn 0.35s ease;
        }

        .form-step.active {
            display: block;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(24px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Summary */
        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 10px 0;
            border-bottom: 1px dashed #e2e8f0;
            font-size: 14px;
        }

        .summary-row:last-child {
            border: none;
        }

        .summary-label {
            color: #6b7280;
        }

        .summary-value {
            font-weight: 600;
            text-align: right;
            max-width: 60%;
        }
    </style>
</head>

<body class="min-h-screen relative">

    <!-- Nav -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200 relative">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold tracking-tight text-slate-800" style="font-family:'Cormorant Garamond',serif;">TIERRA<span style="color:var(--blue)">STONE</span></a>
            <a href="/" class="text-sm text-slate-500 hover:text-slate-800 transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
            </a>
        </div>
    </nav>

    <main class="relative z-10 max-w-2xl mx-auto px-4 py-12">

        <!-- Header -->
        <div class="text-center mb-10">
            <p class="text-sm font-semibold tracking-widest uppercase mb-2" style="color:var(--earth)">Form Pemesanan</p>
            <h1 class="text-4xl font-bold leading-tight" style="font-family:'Cormorant Garamond',serif;">Mulai Pesanan Anda</h1>
            <p class="text-slate-500 mt-3 text-base">Isi form di bawah, tim kami akan segera menghubungi Anda via WhatsApp.</p>
        </div>

        <!-- Step Indicator -->
        <div class="flex justify-center mb-8">
            <div class="step-indicator">
                <div class="step active" id="step-ind-1">
                    <div class="step-num">1</div>
                    <span class="hidden sm:inline">Produk</span>
                </div>
                <div class="step-line"></div>
                <div class="step" id="step-ind-2">
                    <div class="step-num">2</div>
                    <span class="hidden sm:inline">Detail</span>
                </div>
                <div class="step-line"></div>
                <div class="step" id="step-ind-3">
                    <div class="step-num">3</div>
                    <span class="hidden sm:inline">Konfirmasi</span>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="card p-8">

            <!-- STEP 1: Pilih Produk -->
            <div class="form-step active" id="step-1">
                <h2 class="text-2xl font-bold mb-1">Pilih Produk</h2>
                <p class="text-slate-500 text-sm mb-6">Pilih jenis batu alam yang Anda butuhkan.</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4" id="product-list">
                    <div class="product-card" data-product="Marmer Premium" onclick="selectProduct(this)">
                        <img src="https://images.unsplash.com/photo-1590065582372-df56824f9231?auto=format&fit=crop&q=80&w=300" alt="Marmer" class="w-full h-32 object-cover">
                        <div class="p-3">
                            <p class="font-semibold text-sm">Marmer Premium</p>
                            <p class="text-xs text-slate-400 mt-0.5">Lantai & dinding eksklusif</p>
                        </div>
                    </div>
                    <div class="product-card" data-product="Granit Alam" onclick="selectProduct(this)">
                        <img src="https://images.unsplash.com/photo-1533003057134-297c4f74f762?auto=format&fit=crop&q=80&w=300" alt="Granit" class="w-full h-32 object-cover">
                        <div class="p-3">
                            <p class="font-semibold text-sm">Granit Alam</p>
                            <p class="text-xs text-slate-400 mt-0.5">Outdoor & dapur</p>
                        </div>
                    </div>
                    <div class="product-card" data-product="Batu Landscape" onclick="selectProduct(this)">
                        <img src="https://images.unsplash.com/photo-1504148455328-c376907d081c?auto=format&fit=crop&q=80&w=300" alt="Landscape" class="w-full h-32 object-cover">
                        <div class="p-3">
                            <p class="font-semibold text-sm">Batu Landscape</p>
                            <p class="text-xs text-slate-400 mt-0.5">Taman & kolam</p>
                        </div>
                    </div>
                </div>

                <!-- Jumlah -->
                <div class="mt-8">
                    <label class="block text-sm font-semibold text-slate-700 mb-3">Estimasi Jumlah (m²)</label>
                    <div class="flex items-center gap-4">
                        <button class="qty-btn" onclick="changeQty(-1)" type="button">−</button>
                        <input type="number" id="qty" class="form-input text-center" style="max-width:100px;" value="10" min="1" placeholder="m²">
                        <button class="qty-btn" onclick="changeQty(1)" type="button">+</button>
                        <span class="text-slate-400 text-sm">m² (minimum order 5 m²)</span>
                    </div>
                </div>

                <div id="step1-error" class="hidden mt-4 text-red-500 text-sm flex items-center gap-2">
                    <i class="fa-solid fa-circle-exclamation"></i> <span></span>
                </div>

                <div class="flex justify-end mt-8">
                    <button class="btn-primary" onclick="goStep(2)" type="button">
                        Lanjut <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- STEP 2: Data Diri -->
            <div class="form-step" id="step-2">
                <h2 class="text-2xl font-bold mb-1">Data Diri</h2>
                <p class="text-slate-500 text-sm mb-6">Lengkapi informasi Anda agar tim kami bisa menghubungi.</p>

                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" id="nama" class="form-input" placeholder="Contoh: Budi Santoso">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor WhatsApp <span class="text-red-500">*</span></label>
                        <div class="flex gap-2">
                            <span class="form-input" style="width:auto;min-width:60px;background:#f8f9fa;color:#6b7280;flex-shrink:0;">+62</span>
                            <input type="tel" id="phone" class="form-input" placeholder="81234567890">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Kota / Lokasi Proyek <span class="text-red-500">*</span></label>
                        <input type="text" id="kota" class="form-input" placeholder="Contoh: Jakarta Selatan">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Tipe Proyek</label>
                        <select id="tipe" class="form-input">
                            <option value="">Pilih tipe proyek...</option>
                            <option>Rumah Tinggal</option>
                            <option>Apartemen</option>
                            <option>Komersial / Perkantoran</option>
                            <option>Villa / Resort</option>
                            <option>Landscape / Taman</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Catatan Tambahan</label>
                        <textarea id="catatan" class="form-input" rows="3" placeholder="Warna, motif, finishing, atau pertanyaan lain..."></textarea>
                    </div>
                </div>

                <div id="step2-error" class="hidden mt-4 text-red-500 text-sm flex items-center gap-2">
                    <i class="fa-solid fa-circle-exclamation"></i> <span></span>
                </div>

                <div class="flex justify-between mt-8">
                    <button class="btn-secondary" onclick="goStep(1)" type="button">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </button>
                    <button class="btn-primary" onclick="goStep(3)" type="button">
                        Lanjut <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- STEP 3: Konfirmasi -->
            <div class="form-step" id="step-3">
                <h2 class="text-2xl font-bold mb-1">Konfirmasi Pesanan</h2>
                <p class="text-slate-500 text-sm mb-6">Pastikan semua detail sudah benar sebelum lanjut ke WhatsApp.</p>

                <!-- Summary -->
                <div class="bg-slate-50 rounded-2xl p-5 mb-6 border border-slate-100">
                    <div class="summary-row">
                        <span class="summary-label">Produk</span>
                        <span class="summary-value" id="s-produk">—</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Jumlah</span>
                        <span class="summary-value" id="s-qty">—</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Nama</span>
                        <span class="summary-value" id="s-nama">—</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">WhatsApp</span>
                        <span class="summary-value" id="s-phone">—</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Lokasi Proyek</span>
                        <span class="summary-value" id="s-kota">—</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Tipe Proyek</span>
                        <span class="summary-value" id="s-tipe">—</span>
                    </div>
                    <div class="summary-row" id="s-catatan-row">
                        <span class="summary-label">Catatan</span>
                        <span class="summary-value" id="s-catatan">—</span>
                    </div>
                </div>

                <!-- Info note -->
                <div class="flex gap-3 bg-blue-50 border border-blue-100 rounded-xl p-4 text-sm text-blue-700 mb-6">
                    <i class="fa-brands fa-whatsapp text-lg mt-0.5 flex-shrink-0"></i>
                    <p>Setelah menekan tombol di bawah, Anda akan diarahkan ke WhatsApp dengan pesan yang sudah terisi otomatis. Tim kami akan merespons dalam waktu kerja (08.00–17.00 WIB).</p>
                </div>

                <div class="flex justify-between mt-2">
                    <button class="btn-secondary" onclick="goStep(2)" type="button">
                        <i class="fa-solid fa-arrow-left"></i> Edit
                    </button>
                    <button class="btn-primary" onclick="kirimWA()" type="button" style="background:#16a34a;" onmouseover="this.style.background='#15803d'" onmouseout="this.style.background='#16a34a'">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Kirim via WhatsApp
                    </button>
                </div>
            </div>

        </div>

        <!-- Trust badges -->
        <div class="flex justify-center gap-8 mt-10 text-xs text-slate-400 flex-wrap">
            <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-green-500"></i> Data Anda aman</span>
            <span class="flex items-center gap-1.5"><i class="fa-solid fa-clock text-blue-400"></i> Respons cepat</span>
            <span class="flex items-center gap-1.5"><i class="fa-solid fa-truck-fast text-amber-500"></i> Pengiriman seluruh Indonesia</span>
        </div>
    </main>

    <footer class="relative z-10 py-8 mt-8 border-t border-slate-200 text-center text-slate-400 text-sm">
        &copy; 2026 OMS TierraStone. All rights reserved.
    </footer>

    <script>
        // ─── State ───────────────────────────────────────────────
        let selectedProduct = '';
        const WA_NUMBER = '6289530513637'; // ← Ganti nomor WA di sini

        // ─── Product selection ───────────────────────────────────
        function selectProduct(el) {
            document.querySelectorAll('.product-card').forEach(c => c.classList.remove('selected'));
            el.classList.add('selected');
            selectedProduct = el.dataset.product;
        }

        // ─── Qty stepper ─────────────────────────────────────────
        function changeQty(delta) {
            const input = document.getElementById('qty');
            let val = parseInt(input.value) || 0;
            val = Math.max(1, val + delta);
            input.value = val;
        }

        // ─── Step navigation ─────────────────────────────────────
        function goStep(n) {
            // Validate before moving forward
            if (n === 2) {
                if (!selectedProduct) return showError('step1-error', 'Silakan pilih produk terlebih dahulu.');
                const qty = parseInt(document.getElementById('qty').value);
                if (!qty || qty < 5) return showError('step1-error', 'Minimum order adalah 5 m².');
            }
            if (n === 3) {
                const nama = document.getElementById('nama').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const kota = document.getElementById('kota').value.trim();
                if (!nama) return showError('step2-error', 'Nama tidak boleh kosong.');
                if (!phone) return showError('step2-error', 'Nomor WhatsApp tidak boleh kosong.');
                if (!/^\d{8,14}$/.test(phone)) return showError('step2-error', 'Format nomor tidak valid (contoh: 81234567890).');
                if (!kota) return showError('step2-error', 'Lokasi proyek tidak boleh kosong.');
                fillSummary();
            }

            // Hide all, show target
            document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
            document.getElementById('step-' + n).classList.add('active');
            updateStepIndicator(n);
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function showError(id, msg) {
            const el = document.getElementById(id);
            el.classList.remove('hidden');
            el.querySelector('span').textContent = msg;
            setTimeout(() => el.classList.add('hidden'), 4000);
        }

        function updateStepIndicator(active) {
            for (let i = 1; i <= 3; i++) {
                const ind = document.getElementById('step-ind-' + i);
                ind.classList.remove('active', 'done');
                if (i < active) ind.classList.add('done');
                else if (i === active) ind.classList.add('active');
            }
        }

        // ─── Fill summary ─────────────────────────────────────────
        function fillSummary() {
            const qty = document.getElementById('qty').value;
            const nama = document.getElementById('nama').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const kota = document.getElementById('kota').value.trim();
            const tipe = document.getElementById('tipe').value || '—';
            const note = document.getElementById('catatan').value.trim() || '—';

            document.getElementById('s-produk').textContent = selectedProduct;
            document.getElementById('s-qty').textContent = qty + ' m²';
            document.getElementById('s-nama').textContent = nama;
            document.getElementById('s-phone').textContent = '+62' + phone;
            document.getElementById('s-kota').textContent = kota;
            document.getElementById('s-tipe').textContent = tipe;
            document.getElementById('s-catatan').textContent = note;
        }

        // ─── Send to WhatsApp ─────────────────────────────────────
        function kirimWA() {
            const qty = document.getElementById('qty').value;
            const nama = document.getElementById('nama').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const kota = document.getElementById('kota').value.trim();
            const tipe = document.getElementById('tipe').value || '-';
            const note = document.getElementById('catatan').value.trim() || '-';

            const msg = `Halo TierraStone! 👋

Saya ingin melakukan pemesanan batu alam:

🪨 *Produk:* ${selectedProduct}
📐 *Jumlah:* ${qty} m²
📍 *Lokasi Proyek:* ${kota}
🏗️ *Tipe Proyek:* ${tipe}

*Data Pemesan:*
👤 Nama: ${nama}
📱 No. WA: +62${phone}

📝 *Catatan:* ${note}

Mohon informasi lebih lanjut mengenai ketersediaan stok dan harga. Terima kasih!`;

            const encoded = encodeURIComponent(msg);
            window.open(`https://wa.me/${WA_NUMBER}?text=${encoded}`, '_blank');
        }
    </script>
</body>

</html>