<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <title>Lacak Pesanan – TierraStone</title>
    <link rel="icon" type="image/avif" href="{{ asset('images/logos.avif') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300;1,9..40,400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --ink: #111111;
            --ink2: #1a1a1a;
            --body: #555555;
            --muted: #999999;
            --subtle: #bbbbbb;
            --border: #e0e0e0;
            --border2: #ebebeb;
            --bg: #f5f5f3;
            --surface: #eaeae7;
            --white: #ffffff;
            --accent: #2a2a2a;
            --ff-display: 'Playfair Display', Georgia, serif;
            --ff-body: 'DM Sans', 'Helvetica Neue', sans-serif;
            --green: #16a34a;
            --green-bg: #f0fdf4;
            --green-border: #bbf7d0;
            --yellow-bg: #fefce8;
            --yellow-border: #fef08a;
            --yellow-text: #854d0e;
            --blue-bg: #eff6ff;
            --blue-border: #bfdbfe;
            --blue-text: #1e40af;
            --orange-bg: #fff7ed;
            --orange-border: #fed7aa;
            --orange-text: #9a3412;
            --purple-bg: #faf5ff;
            --purple-border: #e9d5ff;
            --purple-text: #6b21a8;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: var(--ff-body);
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            opacity: 0;
            animation: pageIn .6s .05s ease forwards;
        }

        @keyframes pageIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        ::selection {
            background: var(--ink);
            color: var(--white);
        }

        /* NAV */
        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .97);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border2);
        }

        .nav-inner {
            max-width: 680px;
            margin: 0 auto;
            padding: 0 24px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-logo {
            font-family: var(--ff-display);
            font-weight: 600;
            font-size: 18px;
            letter-spacing: .02em;
            color: var(--ink);
            text-decoration: none;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-link {
            font-size: 12px;
            font-weight: 400;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--muted);
            text-decoration: none;
            transition: color .2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .nav-link:hover {
            color: var(--ink);
        }

        .nav-link i {
            font-size: 10px;
        }

        .nav-cta {
            font-size: 12px;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--white);
            text-decoration: none;
            background: var(--ink);
            padding: 9px 22px;
            transition: all .3s cubic-bezier(.16, 1, .3, 1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .nav-cta:hover {
            background: var(--ink2);
        }

        .nav-cta i {
            font-size: 10px;
        }

        @media (max-width:560px) {
            .nav-cta {
                display: none;
            }
        }

        /* PAGE HEADER */
        .page-header {
            max-width: 680px;
            margin: 0 auto;
            padding: 64px 24px 36px;
            text-align: center;
            opacity: 0;
            animation: fadeUp .6s .15s cubic-bezier(.16, 1, .3, 1) forwards;
        }

        .page-header-label {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 16px;
        }

        .page-header h1 {
            font-family: var(--ff-display);
            font-size: clamp(36px, 5vw, 52px);
            font-weight: 400;
            line-height: 1.05;
            color: var(--ink);
            letter-spacing: -.01em;
        }

        .page-header h1 em {
            font-style: italic;
        }

        .page-header p {
            margin-top: 14px;
            font-size: 15px;
            font-weight: 300;
            color: var(--body);
            line-height: 1.7;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* MAIN */
        .main {
            max-width: 680px;
            margin: 0 auto;
            padding: 0 24px 80px;
        }

        /* SEARCH */
        .search-card {
            background: var(--white);
            border: 1px solid var(--border2);
            padding: 28px;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeUp .6s .25s cubic-bezier(.16, 1, .3, 1) forwards;
        }

        .search-wrap {
            position: relative;
        }

        .search-wrap input {
            width: 100%;
            padding: 14px 56px 14px 16px;
            border: 1px solid var(--border);
            border-radius: 0;
            font-family: var(--ff-body);
            font-size: 14.5px;
            font-weight: 400;
            background: var(--white);
            color: var(--ink);
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }

        .search-wrap input:focus {
            border-color: var(--ink);
            box-shadow: 0 0 0 1px var(--ink);
        }

        .search-wrap input::placeholder {
            color: var(--subtle);
            font-weight: 300;
        }

        .search-wrap button {
            position: absolute;
            right: 6px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--ink);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: grid;
            place-items: center;
            font-size: 13px;
            transition: background .2s;
        }

        .search-wrap button:hover {
            background: var(--ink2);
        }

        .search-hint {
            font-size: 12px;
            color: var(--muted);
            margin-top: 12px;
            font-weight: 300;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .search-hint i {
            font-size: 11px;
            color: var(--subtle);
        }

        /* RESULTS */
        #results-area {
            opacity: 0;
            animation: fadeUp .6s .35s cubic-bezier(.16, 1, .3, 1) forwards;
        }

        .results-card {
            background: var(--white);
            border: 1px solid var(--border2);
            padding: 24px;
        }

        .results-count {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 16px;
        }

        .results-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        /* ORDER ROW */
        .order-row {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 18px;
            border: 1px solid var(--border2);
            background: var(--white);
            cursor: pointer;
            transition: all .25s ease;
            text-decoration: none;
        }

        .order-row:hover {
            border-color: var(--ink);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, .06);
        }

        .order-icon {
            width: 42px;
            height: 42px;
            background: var(--bg);
            border: 1px solid var(--border);
            display: grid;
            place-items: center;
            flex-shrink: 0;
            color: var(--muted);
            font-size: 14px;
        }

        .order-info {
            flex: 1;
            min-width: 0;
        }

        .order-id {
            font-size: 14px;
            font-weight: 500;
            color: var(--ink);
        }

        .order-meta {
            font-size: 12px;
            color: var(--muted);
            font-weight: 300;
            margin-top: 2px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .order-chevron {
            color: var(--subtle);
            font-size: 11px;
            flex-shrink: 0;
        }

        /* BADGES */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 12px;
            font-size: 11px;
            font-weight: 500;
            white-space: nowrap;
            letter-spacing: .03em;
        }

        .badge-pending {
            background: var(--yellow-bg);
            color: var(--yellow-text);
            border: 1px solid var(--yellow-border);
        }

        .badge-production {
            background: var(--blue-bg);
            color: var(--blue-text);
            border: 1px solid var(--blue-border);
        }

        .badge-on_working {
            background: var(--orange-bg);
            color: var(--orange-text);
            border: 1px solid var(--orange-border);
        }

        .badge-ready_to_send {
            background: var(--purple-bg);
            color: var(--purple-text);
            border: 1px solid var(--purple-border);
        }

        .badge-done {
            background: var(--green-bg);
            color: #166534;
            border: 1px solid var(--green-border);
        }

        /* SKELETON */
        .skeleton {
            background: linear-gradient(90deg, var(--surface) 25%, var(--border2) 50%, var(--surface) 75%);
            background-size: 200% 100%;
            animation: shimmer 1.4s infinite;
        }

        @keyframes shimmer {
            from {
                background-position: 200% 0;
            }

            to {
                background-position: -200% 0;
            }
        }

        /* EMPTY */
        .empty-state {
            text-align: center;
            padding: 56px 24px;
            background: var(--white);
            border: 1px solid var(--border2);
        }

        .empty-icon {
            width: 56px;
            height: 56px;
            background: var(--bg);
            border: 1px solid var(--border);
            display: grid;
            place-items: center;
            margin: 0 auto 16px;
            color: var(--subtle);
            font-size: 20px;
        }

        .empty-title {
            font-size: 16px;
            font-weight: 500;
            color: var(--ink);
            margin-bottom: 6px;
        }

        .empty-desc {
            font-size: 13px;
            color: var(--muted);
            font-weight: 300;
        }

        /* MODAL */
        #modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 500;
            background: rgba(17, 17, 17, .4);
            backdrop-filter: blur(4px);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 16px;
        }

        #modal-overlay.open {
            display: flex;
            animation: overlayIn .2s ease;
        }

        @keyframes overlayIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        #modal-box {
            background: var(--white);
            border: 1px solid var(--border2);
            width: 100%;
            max-width: 520px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 24px 80px rgba(0, 0, 0, .15);
            animation: modalUp .3s cubic-bezier(.16, 1, .3, 1);
        }

        @keyframes modalUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #modal-box::-webkit-scrollbar {
            width: 3px;
        }

        #modal-box::-webkit-scrollbar-track {
            background: var(--bg);
        }

        #modal-box::-webkit-scrollbar-thumb {
            background: var(--subtle);
        }

        .modal-header {
            padding: 24px 24px 0;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }

        .modal-label {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .modal-title {
            font-family: var(--ff-display);
            font-size: 28px;
            font-weight: 400;
            color: var(--ink);
            line-height: 1;
        }

        .modal-close {
            width: 36px;
            height: 36px;
            border: 1px solid var(--border);
            background: var(--white);
            display: grid;
            place-items: center;
            cursor: pointer;
            color: var(--muted);
            font-size: 14px;
            transition: all .2s;
        }

        .modal-close:hover {
            border-color: var(--ink);
            color: var(--ink);
        }

        .m-divider {
            height: 1px;
            background: var(--border2);
            margin: 20px 24px;
        }

        .modal-body {
            padding: 0 24px 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .modal-status-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 8px;
        }

        .modal-date {
            font-size: 12px;
            color: var(--muted);
            font-weight: 300;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        @media (max-width:480px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }

        .info-tile {
            background: var(--bg);
            border: 1px solid var(--border2);
            padding: 14px 16px;
        }

        .info-tile-label {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .info-tile-val {
            font-size: 13px;
            font-weight: 500;
            color: var(--ink);
        }

        .modal-note {
            background: var(--bg);
            border: 1px solid var(--border2);
            padding: 14px 16px;
        }

        .modal-note-label {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .modal-note-text {
            font-size: 13px;
            color: var(--ink2);
            font-weight: 300;
            line-height: 1.6;
        }

        /* TIMELINE */
        .tl-heading {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 16px;
        }

        .timeline {
            position: relative;
            padding-left: 28px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 8px;
            top: 4px;
            bottom: 4px;
            width: 1px;
            background: var(--border);
        }

        .tl-item {
            position: relative;
            margin-bottom: 18px;
        }

        .tl-item:last-child {
            margin-bottom: 0;
        }

        .tl-dot {
            position: absolute;
            left: -28px;
            top: 2px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 1.5px solid var(--border);
            background: var(--white);
            display: grid;
            place-items: center;
            font-size: 7px;
        }

        .tl-dot.done {
            background: var(--ink);
            border-color: var(--ink);
            color: white;
        }

        .tl-dot.active {
            background: var(--white);
            border-color: var(--ink);
            box-shadow: 0 0 0 3px rgba(17, 17, 17, .08);
        }

        .tl-label {
            font-size: 13px;
            font-weight: 500;
            color: var(--ink);
        }

        .tl-label.dim {
            color: var(--subtle);
        }

        .tl-time {
            font-size: 11px;
            margin-top: 2px;
            color: var(--muted);
            font-weight: 300;
        }

        .tl-time.active-time {
            color: var(--ink);
            font-weight: 500;
        }

        .tl-time.dim-time {
            color: var(--subtle);
        }

        /* FOOTER */
        footer {
            background: var(--ink);
            padding: 28px 48px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(255, 255, 255, .06);
        }

        @media (max-width:560px) {
            footer {
                padding: 24px;
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }
        }

        .footer-logo {
            font-family: var(--ff-display);
            font-weight: 600;
            font-size: 16px;
            letter-spacing: .02em;
            color: var(--white);
        }

        .footer-copy {
            font-size: 11px;
            font-weight: 300;
            letter-spacing: .04em;
            color: rgba(255, 255, 255, .25);
        }

        ::-webkit-scrollbar {
            width: 3px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--subtle);
        }
    </style>
</head>

<body>

    <nav class="nav">
        <div class="nav-inner">
            <a href="{{ route('welcome') }}" class="nav-logo">TierraStone</a>
            <div class="nav-right">
                <a href="{{ route('order') }}" class="nav-cta">
                    <i class="fa-solid fa-pen-to-square"></i> Buat Pesanan
                </a>
                <a href="{{ route('welcome') }}" class="nav-link">
                    <i class="fa-solid fa-arrow-left"></i> Beranda
                </a>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="page-header-label">Tracking Pesanan</div>
        <h1>Lacak <em>Pesanan</em> Anda</h1>
        <p>Masukkan nomor order untuk melihat status pesanan.</p>
    </div>

    <div class="main">
        <div class="search-card">
            <div class="search-wrap">
                <input type="text" id="search-input" placeholder="Cari: ORD-20260001" onkeydown="if(event.key==='Enter') doSearch()">
                <button onclick="doSearch()" title="Cari"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="search-hint">
                <i class="fa-solid fa-circle-info"></i>
                Gunakan nomor pesanan yang Anda terima via WhatsApp dari tim kami.
            </div>
        </div>
        <div id="results-area"></div>
    </div>

    <!-- MODAL -->
    <div id="modal-overlay" onclick="closeModalOutside(event)">
        <div id="modal-box">
            <div class="modal-header">
                <div>
                    <div class="modal-label">Detail Pesanan</div>
                    <h2 id="m-order-id" class="modal-title">—</h2>
                </div>
                <button class="modal-close" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="m-divider"></div>
            <div class="modal-body">
                <div class="modal-status-row">
                    <div id="m-status-badge"></div>
                    <span id="m-date" class="modal-date"></span>
                </div>
                <div class="info-grid">
                    <div class="info-tile">
                        <div class="info-tile-label">Nama</div>
                        <div class="info-tile-val" id="m-nama">—</div>
                    </div>
                    <div class="info-tile">
                        <div class="info-tile-label">WhatsApp</div>
                        <div class="info-tile-val" id="m-phone">—</div>
                    </div>
                    <div class="info-tile">
                        <div class="info-tile-label">Produk</div>
                        <div class="info-tile-val" id="m-produk">—</div>
                    </div>
                    <div class="info-tile">
                        <div class="info-tile-label">Jumlah</div>
                        <div class="info-tile-val" id="m-qty">—</div>
                    </div>
                    <div class="info-tile">
                        <div class="info-tile-label">Lokasi Proyek</div>
                        <div class="info-tile-val" id="m-kota">—</div>
                    </div>
                    <div class="info-tile">
                        <div class="info-tile-label">Tipe Proyek</div>
                        <div class="info-tile-val" id="m-tipe">—</div>
                    </div>
                </div>
                <div id="m-catatan-wrap" class="modal-note" style="display:none">
                    <div class="modal-note-label"><i class="fa-solid fa-note-sticky" style="margin-right:5px"></i>Catatan</div>
                    <p id="m-catatan" class="modal-note-text"></p>
                </div>
                <div>
                    <div class="tl-heading">Riwayat Status</div>
                    <div class="timeline" id="m-timeline"></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-logo">TierraStone</div>
        <div class="footer-copy">&copy; 2026 TierraStone. All rights reserved.</div>
    </footer>

    <script>
        const MOCK_ORDERS = [{
                id: 'ORD-20260001',
                nama: 'Budi Santoso',
                phone: '081234567890',
                produk: 'Marmer Premium',
                qty: '25 m²',
                kota: 'Jakarta Selatan',
                tipe: 'Rumah Tinggal',
                catatan: 'Mohon warna cream/beige, finishing polished.',
                status: 'ready_to_send',
                tanggal: '28 Feb 2026',
                timeline: [{
                        label: 'Pending',
                        time: '28 Feb 2026, 09.15',
                        done: true
                    },
                    {
                        label: 'Production',
                        time: '28 Feb 2026, 11.30',
                        done: true
                    },
                    {
                        label: 'On Working',
                        time: '1 Mar 2026, 08.00',
                        done: true
                    },
                    {
                        label: 'Ready to Send',
                        time: '3 Mar 2026, 14.00',
                        done: true,
                        active: true
                    },
                    {
                        label: 'Done',
                        time: '—',
                        done: false
                    },
                ]
            },
            {
                id: 'ORD-20260002',
                nama: 'Siti Rahayu',
                phone: '085678901234',
                produk: 'Granit Alam',
                qty: '40 m²',
                kota: 'Surabaya',
                tipe: 'Komersial / Perkantoran',
                catatan: '',
                status: 'on_working',
                tanggal: '3 Mar 2026',
                timeline: [{
                        label: 'Pending',
                        time: '3 Mar 2026, 10.00',
                        done: true
                    },
                    {
                        label: 'Production',
                        time: '3 Mar 2026, 12.45',
                        done: true
                    },
                    {
                        label: 'On Working',
                        time: 'Sedang berjalan',
                        done: false,
                        active: true
                    },
                    {
                        label: 'Ready to Send',
                        time: '—',
                        done: false
                    },
                    {
                        label: 'Done',
                        time: '—',
                        done: false
                    },
                ]
            },
            {
                id: 'ORD-20260003',
                nama: 'Ahmad Fauzi',
                phone: '089876543210',
                produk: 'Batu Landscape',
                qty: '15 m²',
                kota: 'Bandung',
                tipe: 'Landscape / Taman',
                catatan: 'Batu andesit hitam jika tersedia.',
                status: 'pending',
                tanggal: '5 Mar 2026',
                timeline: [{
                        label: 'Pending',
                        time: '5 Mar 2026, 08.30',
                        done: true,
                        active: true
                    },
                    {
                        label: 'Production',
                        time: '—',
                        done: false
                    },
                    {
                        label: 'On Working',
                        time: '—',
                        done: false
                    },
                    {
                        label: 'Ready to Send',
                        time: '—',
                        done: false
                    },
                    {
                        label: 'Done',
                        time: '—',
                        done: false
                    },
                ]
            },
        ];

        const STATUS_CONFIG = {
            pending: {
                label: 'Pending',
                icon: 'fa-clock',
                cls: 'badge-pending'
            },
            production: {
                label: 'Production',
                icon: 'fa-industry',
                cls: 'badge-production'
            },
            on_working: {
                label: 'On Working',
                icon: 'fa-hammer',
                cls: 'badge-on_working'
            },
            ready_to_send: {
                label: 'Ready to Send',
                icon: 'fa-box-open',
                cls: 'badge-ready_to_send'
            },
            done: {
                label: 'Done',
                icon: 'fa-circle-check',
                cls: 'badge-done'
            },
        };

        function doSearch() {
            const raw = document.getElementById('search-input').value.trim().toLowerCase();
            const area = document.getElementById('results-area');
            if (!raw) {
                area.innerHTML = '';
                return;
            }

            area.innerHTML = `
                <div class="results-card" style="display:flex; flex-direction:column; gap:12px; padding:24px">
                    ${[1,2].map(() => `
                    <div style="display:flex; align-items:center; gap:14px">
                        <div class="skeleton" style="width:42px; height:42px; flex-shrink:0"></div>
                        <div style="flex:1; display:flex; flex-direction:column; gap:7px">
                            <div class="skeleton" style="height:13px; width:38%"></div>
                            <div class="skeleton" style="height:11px; width:55%"></div>
                        </div>
                        <div class="skeleton" style="height:24px; width:90px"></div>
                    </div>`).join('')}
                </div>`;

            setTimeout(() => {
                const results = MOCK_ORDERS.filter(o =>
                    o.phone.replace(/\D/g, '').includes(raw.replace(/\D/g, '')) ||
                    o.id.toLowerCase().includes(raw) ||
                    o.nama.toLowerCase().includes(raw)
                );
                renderResults(results);
            }, 600);
        }

        function renderResults(orders) {
            const area = document.getElementById('results-area');
            if (!orders.length) {
                area.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-icon"><i class="fa-solid fa-box-open"></i></div>
                        <div class="empty-title">Pesanan tidak ditemukan</div>
                        <div class="empty-desc">Coba gunakan nomor order yang tepat.</div>
                    </div>`;
                return;
            }

            const rows = orders.map(o => {
                const st = STATUS_CONFIG[o.status] || STATUS_CONFIG.pending;
                return `
                <div class="order-row" onclick="openModal('${o.id}')">
                    <div class="order-icon"><i class="fa-solid fa-box"></i></div>
                    <div class="order-info">
                        <div class="order-id">${o.id}</div>
                        <div class="order-meta">${o.produk} · ${o.qty} · ${o.kota}</div>
                    </div>
                    <span class="badge ${st.cls}"><i class="fa-solid ${st.icon}"></i>${st.label}</span>
                    <i class="fa-solid fa-chevron-right order-chevron"></i>
                </div>`;
            }).join('');

            area.innerHTML = `
                <div class="results-card">
                    <div class="results-count">${orders.length} pesanan ditemukan</div>
                    <div class="results-list">${rows}</div>
                </div>`;
        }

        function openModal(orderId) {
            const o = MOCK_ORDERS.find(x => x.id === orderId);
            if (!o) return;
            const st = STATUS_CONFIG[o.status] || STATUS_CONFIG.pending;

            document.getElementById('m-order-id').textContent = o.id;
            document.getElementById('m-date').textContent = o.tanggal;
            document.getElementById('m-nama').textContent = o.nama;
            document.getElementById('m-phone').textContent = o.phone;
            document.getElementById('m-produk').textContent = o.produk;
            document.getElementById('m-qty').textContent = o.qty;
            document.getElementById('m-kota').textContent = o.kota;
            document.getElementById('m-tipe').textContent = o.tipe || '—';

            document.getElementById('m-status-badge').innerHTML =
                `<span class="badge ${st.cls}"><i class="fa-solid ${st.icon}" style="margin-right:4px"></i>${st.label}</span>`;

            const noteWrap = document.getElementById('m-catatan-wrap');
            if (o.catatan) {
                noteWrap.style.display = 'block';
                document.getElementById('m-catatan').textContent = o.catatan;
            } else {
                noteWrap.style.display = 'none';
            }

            document.getElementById('m-timeline').innerHTML = o.timeline.map(t => `
                <div class="tl-item">
                    <div class="tl-dot ${t.done ? 'done' : t.active ? 'active' : ''}">
                        ${t.done ? '<i class="fa-solid fa-check"></i>' : ''}
                    </div>
                    <p class="tl-label ${!t.done && !t.active ? 'dim' : ''}">${t.label}</p>
                    <p class="tl-time ${t.active ? 'active-time' : !t.done ? 'dim-time' : ''}">${t.time}</p>
                </div>`).join('');

            document.getElementById('modal-overlay').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('modal-overlay').classList.remove('open');
            document.body.style.overflow = '';
        }

        function closeModalOutside(e) {
            if (e.target.id === 'modal-overlay') closeModal();
        }
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeModal();
        });

        window.addEventListener('DOMContentLoaded', () => {
            const q = new URLSearchParams(window.location.search).get('q');
            if (q) {
                document.getElementById('search-input').value = q;
                doSearch();
            }
        });
    </script>
</body>

</html>