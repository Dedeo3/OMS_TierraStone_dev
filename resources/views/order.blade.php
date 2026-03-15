<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan — TierraStone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        /* ─── TOKENS — Moonstone (G11) Palette ─── */
        :root {
            --p1: #e7ebf7;
            --p2: #d9e3ec;
            --p3: #bfd0e5;
            --p4: #a6bddf;
            --p5: #90add9;
            --p6: #5a7fa8;
            --p7: #3d6590;
            --p8: #2b4f78;

            --bg: #f6f8fb;
            --surface: #eef2f7;
            --white: #ffffff;
            --ink: #1a2233;
            --ink2: #2c3a4e;
            --body: #4a5568;
            --muted: #8694a7;
            --subtle: #b8c4d0;
            --border: #dce4ed;
            --border2: #e8edf3;

            --accent: #3d6590;
            --accent2: #2b4f78;
            --accent-light: #a6bddf;

            --green: #16a34a;
            --green-bg: #f0fdf4;
            --green-border: #bbf7d0;
            --red: #dc2626;
            --red-bg: #fef2f2;
            --red-border: #fecaca;
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
            font-family: 'Source Sans 3', 'Segoe UI', sans-serif;
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        /* ─── NAV ─── */
        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .96);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border2);
            box-shadow: 0 1px 12px rgba(61, 101, 144, .04);
        }

        .nav-inner {
            max-width: 740px;
            margin: 0 auto;
            padding: 0 24px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-logo {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 22px;
            letter-spacing: .06em;
            color: var(--ink);
            text-decoration: none;
        }

        .nav-logo em {
            font-style: normal;
            color: var(--accent);
        }

        .nav-back {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
            transition: color .18s;
        }

        .nav-back:hover {
            color: var(--ink);
        }

        .nav-back i {
            font-size: 10px;
        }

        /* ─── PAGE HEADER ─── */
        .page-header {
            max-width: 740px;
            margin: 0 auto;
            padding: 48px 24px 36px;
        }

        .page-header-eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
        }

        .page-header-eyebrow span {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .page-header-eyebrow::before,
        .page-header-eyebrow::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .page-header h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(30px, 5vw, 42px);
            font-weight: 600;
            line-height: 1.1;
            color: var(--ink);
        }

        .page-header h1 em {
            font-style: italic;
            font-weight: 500;
            color: var(--accent);
        }

        .page-header p {
            margin-top: 10px;
            font-size: 15px;
            font-weight: 300;
            color: var(--body);
            line-height: 1.7;
        }

        /* ─── PROGRESS ─── */
        .progress-wrap {
            max-width: 740px;
            margin: 0 auto;
            padding: 0 24px 28px;
        }

        .steps-row {
            display: flex;
            align-items: center;
            gap: 0;
            margin-bottom: 12px;
        }

        .step-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 500;
            color: var(--subtle);
            transition: color .25s;
        }

        .step-item.active {
            color: var(--ink);
        }

        .step-item.done {
            color: var(--green);
        }

        .step-num {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 1.5px solid currentColor;
            display: grid;
            place-items: center;
            font-size: 11px;
            font-weight: 600;
            flex-shrink: 0;
            transition: all .25s;
        }

        .step-item.active .step-num {
            background: var(--accent);
            border-color: var(--accent);
            color: white;
        }

        .step-item.done .step-num {
            background: var(--green);
            border-color: var(--green);
            color: white;
        }

        .step-line {
            flex: 1;
            height: 1px;
            background: var(--border);
            margin: 0 14px;
        }

        .progress-bar {
            height: 2px;
            background: var(--border2);
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--accent);
            border-radius: 2px;
            transition: width .5s cubic-bezier(.4, 0, .2, 1);
        }

        /* ─── MAIN CARD ─── */
        .main {
            max-width: 740px;
            margin: 0 auto;
            padding: 0 24px 64px;
        }

        .form-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(61, 101, 144, .04), 0 6px 28px rgba(61, 101, 144, .06);
        }

        /* ─── SECTION HEADER ─── */
        .section-head {
            padding: 28px 32px 0;
        }

        .section-label {
            font-size: 10.5px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 5px;
        }

        .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 24px;
            font-weight: 600;
            color: var(--ink);
            line-height: 1.2;
        }

        .section-desc {
            font-size: 13.5px;
            color: var(--muted);
            margin-top: 4px;
            font-weight: 300;
        }

        .divider {
            height: 1px;
            background: var(--border2);
            margin: 28px 32px;
        }

        /* ─── FORM BODY ─── */
        .form-body {
            padding: 24px 32px 32px;
        }

        /* ─── PRODUCT CARDS ─── */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 16px;
        }

        .prod-card {
            cursor: pointer;
            position: relative;
            border-radius: 10px;
            border: 1.5px solid var(--border);
            background: var(--ink);
            transition: border-color .2s, box-shadow .2s, transform .2s;
            overflow: hidden;
        }

        .prod-card:hover {
            border-color: var(--subtle);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(61, 101, 144, .1);
        }

        .prod-card.selected {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(61, 101, 144, .12), 0 6px 20px rgba(61, 101, 144, .12);
        }

        .prod-check {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--accent);
            color: white;
            display: grid;
            place-items: center;
            font-size: 9px;
            opacity: 0;
            transform: scale(0);
            transition: all .2s cubic-bezier(.34, 1.5, .64, 1);
        }

        .prod-card.selected .prod-check {
            opacity: 1;
            transform: scale(1);
        }

        .prod-img {
            height: 96px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, .04);
        }

        .prod-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 12px;
            transition: transform .4s ease;
        }

        .prod-card:hover .prod-img img {
            transform: scale(1.06);
        }

        .prod-info {
            padding: 10px 14px 14px;
        }

        .prod-name {
            font-size: 13px;
            font-weight: 600;
            color: white;
            line-height: 1.3;
        }

        .prod-sub {
            font-size: 11px;
            color: rgba(255, 255, 255, .4);
            margin-top: 2px;
        }

        /* ─── SELECT WRAPPER ─── */
        .sel-wrap {
            position: relative;
        }

        .sel-wrap::after {
            content: '';
            pointer-events: none;
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 5px solid var(--muted);
        }

        /* ─── INPUTS ─── */
        .field {
            margin-bottom: 20px;
        }

        .field:last-child {
            margin-bottom: 0;
        }

        .label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .04em;
            color: var(--ink2);
            margin-bottom: 7px;
        }

        .label-opt {
            font-size: 11px;
            font-weight: 400;
            letter-spacing: 0;
            color: var(--muted);
            margin-left: 4px;
        }

        .req {
            color: var(--red);
            margin-left: 2px;
            font-size: 13px;
        }

        .input {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 14.5px;
            font-weight: 400;
            background: var(--white);
            color: var(--ink);
            outline: none;
            appearance: none;
            -webkit-appearance: none;
            transition: border-color .18s, box-shadow .18s;
        }

        .input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(61, 101, 144, .1);
        }

        .input::placeholder {
            color: var(--subtle);
            font-weight: 300;
        }

        .input.error {
            border-color: var(--red);
        }

        .input-hint {
            font-size: 11.5px;
            color: var(--muted);
            margin-top: 5px;
            font-weight: 300;
        }

        /* Grid cols */
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 16px;
        }

        /* Phone prefix */
        .phone-wrap {
            display: flex;
            gap: 0;
        }

        .phone-prefix {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 11px 14px;
            background: var(--surface);
            color: var(--body);
            border: 1.5px solid var(--border);
            border-right: none;
            border-radius: 8px 0 0 8px;
            font-size: 13.5px;
            font-weight: 500;
            flex-shrink: 0;
        }

        .phone-wrap .input {
            border-radius: 0 8px 8px 0;
            flex: 1;
        }

        /* ─── FINISHING CHIPS ─── */
        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .chip {
            padding: 8px 16px;
            border-radius: 6px;
            border: 1.5px solid var(--border);
            font-family: 'Source Sans 3', sans-serif;
            font-size: 13px;
            font-weight: 400;
            cursor: pointer;
            background: var(--white);
            color: var(--body);
            user-select: none;
            transition: all .16s ease;
        }

        .chip:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .chip.active {
            background: var(--accent);
            border-color: var(--accent);
            color: white;
            font-weight: 500;
        }

        .chip-custom-input {
            margin-top: 10px;
            display: none;
        }

        .chip-custom-input.visible {
            display: block;
        }

        /* ─── BUTTONS ─── */
        .btn-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid var(--border2);
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 8px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .02em;
            cursor: pointer;
            transition: background .18s, transform .15s, box-shadow .18s;
            box-shadow: 0 2px 10px rgba(61, 101, 144, .2);
        }

        .btn-primary:hover {
            background: var(--accent2);
            transform: translateY(-1px);
            box-shadow: 0 4px 18px rgba(61, 101, 144, .28);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 11px 20px;
            background: transparent;
            color: var(--muted);
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 13.5px;
            font-weight: 500;
            cursor: pointer;
            transition: all .18s;
        }

        .btn-ghost:hover {
            color: var(--accent);
            border-color: var(--accent);
        }

        .btn-wa {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 14px;
            background: #16a34a;
            color: white;
            border: none;
            border-radius: 8px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background .18s, transform .15s, box-shadow .18s;
            box-shadow: 0 2px 12px rgba(22, 163, 74, .2);
        }

        .btn-wa:hover {
            background: #15803d;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(22, 163, 74, .25);
        }

        .btn-wa i {
            font-size: 18px;
        }

        /* ─── ERROR BOX ─── */
        .error-box {
            display: none;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            margin-top: 18px;
            background: var(--red-bg);
            border: 1px solid var(--red-border);
            border-radius: 8px;
            font-size: 13.5px;
            color: #b91c1c;
        }

        .error-box.visible {
            display: flex;
        }

        /* ─── STEP TRANSITIONS ─── */
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(24px)
            }

            to {
                opacity: 1;
                transform: translateX(0)
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-24px)
            }

            to {
                opacity: 1;
                transform: translateX(0)
            }
        }

        @keyframes slideOutLeft {
            from {
                opacity: 1;
                transform: translateX(0)
            }

            to {
                opacity: 0;
                transform: translateX(-18px)
            }
        }

        .anim-in {
            animation: slideInRight .35s cubic-bezier(.4, 0, .2, 1) forwards;
        }

        .anim-in-back {
            animation: slideInLeft .35s cubic-bezier(.4, 0, .2, 1) forwards;
        }

        .anim-out {
            animation: slideOutLeft .18s ease forwards;
        }

        /* ─── SUMMARY (step 2) ─── */
        .summary-block {
            border: 1px solid var(--border);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .summary-head {
            padding: 12px 18px;
            background: var(--surface);
            border-bottom: 1px solid var(--border2);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .sum-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            padding: 12px 18px;
            border-bottom: 1px solid var(--border2);
            font-size: 14px;
        }

        .sum-row:last-child {
            border: none;
        }

        .sum-lbl {
            color: var(--muted);
            font-weight: 300;
        }

        .sum-val {
            font-weight: 500;
            color: var(--ink);
            text-align: right;
            max-width: 60%;
        }

        .wa-note {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 14px 16px;
            margin-bottom: 20px;
            background: var(--green-bg);
            border: 1px solid var(--green-border);
            border-radius: 8px;
            font-size: 13.5px;
            color: #15803d;
        }

        .wa-note i {
            font-size: 16px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        /* ─── TRUST ROW ─── */
        .trust-row {
            display: flex;
            justify-content: center;
            gap: 28px;
            flex-wrap: wrap;
            padding: 24px 24px 0;
            max-width: 740px;
            margin: 0 auto;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12.5px;
            color: var(--muted);
            font-weight: 400;
        }

        .trust-item i {
            font-size: 12px;
        }

        /* ─── FOOTER ─── */
        footer {
            border-top: 1px solid var(--border2);
            padding: 28px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            max-width: 740px;
            margin: 40px auto 0;
        }

        .footer-logo {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: .06em;
            color: var(--ink);
        }

        .footer-logo em {
            font-style: normal;
            color: var(--accent);
        }

        .footer-copy {
            font-size: 11.5px;
            color: var(--subtle);
        }

        /* ─── MISC ─── */
        @keyframes shake {

            0%,
            100% {
                transform: translateX(0)
            }

            20%,
            60% {
                transform: translateX(-5px)
            }

            40%,
            80% {
                transform: translateX(5px)
            }
        }

        .shake {
            animation: shake .3s ease;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        ::selection {
            background: var(--accent);
            color: white;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--border);
            border-radius: 4px;
        }

        @media (max-width: 560px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 8px;
            }

            .grid-2 {
                grid-template-columns: 1fr;
            }

            .grid-3 {
                grid-template-columns: 1fr 1fr;
            }

            .form-body {
                padding: 20px 20px 28px;
            }

            .section-head {
                padding: 24px 20px 0;
            }

            .divider {
                margin: 24px 20px;
            }

            .page-header {
                padding: 32px 20px 24px;
            }

            .prod-img {
                height: 72px;
            }

            .prod-name {
                font-size: 11.5px;
            }

            .prod-sub {
                font-size: 10px;
            }

            .prod-info {
                padding: 8px 10px 10px;
            }
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <nav class="nav">
        <div class="nav-inner">
            <a href="{{ route('welcome') }}" class="nav-logo">Tierra<em>Stone</em></a>
            <a href="{{ route('welcome') }}" class="nav-back">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <div class="page-header">
        <div class="page-header-eyebrow">
            <span>Form Pemesanan</span>
        </div>
        <h1>Buat Pesanan <em>Baru</em></h1>
        <p>Lengkapi spesifikasi batu dan data kontak Anda. Tim kami akan menghubungi via WhatsApp.</p>
    </div>

    <!-- PROGRESS -->
    <div class="progress-wrap">
        <div class="steps-row">
            <div class="step-item active" id="step-item-1">
                <div class="step-num" id="step-num-1">1</div>
                <span>Spesifikasi</span>
            </div>
            <div class="step-line"></div>
            <div class="step-item" id="step-item-2">
                <div class="step-num" id="step-num-2">2</div>
                <span>Konfirmasi</span>
            </div>
        </div>
        <div class="progress-bar">
            <div class="progress-fill" id="prog-fill" style="width:50%"></div>
        </div>
    </div>

    <!-- MAIN -->
    <main class="main">
        <div class="form-card">

            <!-- ═══ STEP 1 ═══ -->
            <div class="form-step active" id="step-1">

                <!-- Section: Jenis Batu -->
                <div class="section-head">
                    <div class="section-label">01 — Jenis Batu</div>
                    <div class="section-title">Pilih Material</div>
                    <div class="section-desc">Pilih dari kartu atau cari via dropdown untuk pilihan lengkap.</div>
                </div>

                <div class="form-body" style="padding-bottom: 0">
                    <!-- Product cards -->
                    <div class="product-grid" id="product-list">
                        <div class="prod-card" data-product="Marmer Premium" onclick="selectProduct(this)">
                            <div class="prod-check"><i class="fa-solid fa-check"></i></div>
                            <div class="prod-img">
                                <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Marmer">
                            </div>
                            <div class="prod-info">
                                <div class="prod-name">Marmer Premium</div>
                                <div class="prod-sub">Lantai · Dinding</div>
                            </div>
                        </div>
                        <div class="prod-card" data-product="Granit Alam" onclick="selectProduct(this)">
                            <div class="prod-check"><i class="fa-solid fa-check"></i></div>
                            <div class="prod-img">
                                <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Granit">
                            </div>
                            <div class="prod-info">
                                <div class="prod-name">Granit Alam</div>
                                <div class="prod-sub">Outdoor · Dapur</div>
                            </div>
                        </div>
                        <div class="prod-card" data-product="Batu Landscape" onclick="selectProduct(this)">
                            <div class="prod-check"><i class="fa-solid fa-check"></i></div>
                            <div class="prod-img">
                                <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Landscape">
                            </div>
                            <div class="prod-info">
                                <div class="prod-name">Batu Landscape</div>
                                <div class="prod-sub">Taman · Kolam</div>
                            </div>
                        </div>
                    </div>

                    <div class="field" style="margin-top:14px">
                        <div class="sel-wrap">
                            <select id="jenis-batu" class="input" onchange="syncProductFromDropdown(this.value)">
                                <option value="">Pilih dari daftar lengkap...</option>
                                <option value="Marmer Premium">Marmer Premium</option>
                                <option value="Granit Alam">Granit Alam</option>
                                <option value="Batu Landscape">Batu Landscape</option>
                                <option value="Andesit">Andesit</option>
                                <option value="Palimanan">Palimanan</option>
                                <option value="Batu Candi">Batu Candi</option>
                                <option value="Batu Templek">Batu Templek</option>
                                <option value="Paras Jogja">Paras Jogja</option>
                                <option value="Lainnya">Lainnya...</option>
                            </select>
                        </div>
                        <div id="jenis-custom-wrap" style="display:none; margin-top:10px">
                            <input type="text" id="jenis-custom" class="input"
                                placeholder="Tulis jenis batu yang Anda inginkan...">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Section: Spesifikasi -->
                <div class="section-head">
                    <div class="section-label">02 — Spesifikasi</div>
                    <div class="section-title">Dimensi & Finishing</div>
                </div>

                <div class="form-body">

                    <div class="field">
                        <label class="label">Dimensi <span class="req">*</span></label>
                        <div class="grid-3">
                            <div>
                                <input type="number" id="length" class="input" placeholder="Panjang" min="1">
                                <div class="input-hint">Panjang (cm)</div>
                            </div>
                            <div>
                                <input type="number" id="width" class="input" placeholder="Lebar" min="1">
                                <div class="input-hint">Lebar (cm)</div>
                            </div>
                            <div>
                                <input type="number" id="thickness" class="input" placeholder="1.2" min="0" step="0.1">
                                <div class="input-hint">Tebal (cm)</div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Finishing <span class="label-opt">(opsional)</span></label>
                        <div class="chips">
                            <span class="chip" onclick="selectChip(this)" data-val="Bakar">Bakar</span>
                            <span class="chip" onclick="selectChip(this)" data-val="Bush Hammer">Bush Hammer</span>
                            <span class="chip" onclick="selectChip(this)" data-val="Poles">Poles</span>
                            <span class="chip" onclick="selectChip(this)" data-val="Tekstur">Tekstur</span>
                            <span class="chip" onclick="selectChip(this)" data-val="Sandblast">Sandblast</span>
                            <span class="chip" id="chip-custom-toggle" onclick="selectChip(this)" data-val="__custom__">+ Lainnya</span>
                        </div>
                        <div class="chip-custom-input" id="finishing-custom-wrap">
                            <input type="text" id="finishing-custom" class="input" placeholder="Tulis jenis finishing...">
                        </div>
                        <input type="hidden" id="finishing" value="">
                    </div>

                    <div class="divider" style="margin: 24px 0"></div>

                    <!-- Informasi Diri -->
                    <div class="section-label" style="margin-bottom:14px">03 — Data Pemesan</div>

                    <div class="field">
                        <label class="label">Nama Lengkap <span class="req">*</span></label>
                        <input type="text" id="nama" class="input" placeholder="Nama lengkap Anda" autocomplete="name">
                    </div>

                    <div class="grid-2">
                        <div class="field">
                            <label class="label">No. WhatsApp <span class="req">*</span></label>
                            <div class="phone-wrap">
                                <div class="phone-prefix">+62</div>
                                <input type="number" id="phone" class="input" placeholder="81234567890" autocomplete="tel">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email <span class="label-opt">(opsional)</span></label>
                            <input type="email" id="email" class="input" placeholder="email@domain.com" autocomplete="email">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Catatan <span class="label-opt">(opsional)</span></label>
                        <textarea id="catatan" class="input" rows="3"
                            placeholder="Warna preferensi, motif, lokasi proyek, atau informasi lainnya..."
                            style="resize:vertical; min-height:80px; line-height:1.6"></textarea>
                    </div>

                    <!-- Error -->
                    <div class="error-box shake" id="step1-error">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span id="s1-msg"></span>
                    </div>

                    <div class="btn-row">
                        <span style="font-size:12px; color:var(--subtle)">
                            <span style="color:var(--red)">*</span> Wajib diisi
                        </span>
                        <button class="btn-primary" onclick="goStep2()" type="button">
                            Review Pesanan <i class="fa-solid fa-arrow-right" style="font-size:11px"></i>
                        </button>
                    </div>
                </div>

            </div>
            <!-- /step-1 -->

            <!-- ═══ STEP 2 ═══ -->
            <div class="form-step" id="step-2">

                <div class="section-head">
                    <div class="section-label">Konfirmasi</div>
                    <div class="section-title">Periksa Detail</div>
                    <div class="section-desc">Pastikan semua informasi sudah benar sebelum dikirim.</div>
                </div>

                <div class="form-body">

                    <div class="summary-block">
                        <div class="summary-head">Spesifikasi Material</div>
                        <div class="sum-row"><span class="sum-lbl">Jenis Batu</span><span class="sum-val" id="s-produk">—</span></div>
                        <div class="sum-row"><span class="sum-lbl">Dimensi</span><span class="sum-val" id="s-dimensi">—</span></div>
                        <div class="sum-row" id="s-finishing-row"><span class="sum-lbl">Finishing</span><span class="sum-val" id="s-finishing-val">—</span></div>
                    </div>

                    <div class="summary-block">
                        <div class="summary-head">Data Pemesan</div>
                        <div class="sum-row"><span class="sum-lbl">Nama</span><span class="sum-val" id="s-nama">—</span></div>
                        <div class="sum-row"><span class="sum-lbl">WhatsApp</span><span class="sum-val" id="s-phone">—</span></div>
                        <div class="sum-row" id="s-email-row" style="display:none"><span class="sum-lbl">Email</span><span class="sum-val" id="s-email">—</span></div>
                        <div class="sum-row" id="s-catatan-row"><span class="sum-lbl">Catatan</span><span class="sum-val" id="s-catatan">—</span></div>
                    </div>

                    <div class="wa-note">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Pesan WhatsApp sudah terisi otomatis. Klik tombol di bawah dan tinggal kirim.</span>
                    </div>

                    <button class="btn-wa" onclick="kirimWA()" type="button">
                        <i class="fa-brands fa-whatsapp"></i> Kirim via WhatsApp
                    </button>

                    <div class="btn-row" style="justify-content:center; border:none; margin-top:12px; padding-top:0">
                        <button class="btn-ghost" onclick="goBack()" type="button">
                            <i class="fa-solid fa-arrow-left" style="font-size:10px"></i> Edit Pesanan
                        </button>
                    </div>

                </div>
            </div>
            <!-- /step-2 -->

        </div>
    </main>

    <!-- Trust row -->
    <div class="trust-row">
        <div class="trust-item"><i class="fa-solid fa-lock" style="color:var(--green)"></i> Data aman & privat</div>
        <div class="trust-item"><i class="fa-regular fa-clock" style="color:var(--accent)"></i> Respons jam kerja</div>
        <div class="trust-item"><i class="fa-solid fa-truck-fast" style="color:var(--p6)"></i> Kirim seluruh Indonesia</div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-logo">Tierra<em>Stone</em></div>
        <div class="footer-copy">&copy; 2026 TierraStone. All rights reserved.</div>
    </footer>

    <script>
        const WA_NUMBER = '6289683000050';
        let selectedProduct = '',
            selectedFinishing = '';

        // ── INIT ──
        window.addEventListener('DOMContentLoaded', () => {
            const p = new URLSearchParams(window.location.search).get('product');
            if (p) {
                const card = document.querySelector(`.prod-card[data-product="${p}"]`);
                if (card) selectProduct(card);
                const dd = document.getElementById('jenis-batu');
                if ([...dd.options].some(o => o.value === p)) dd.value = p;
                else selectedProduct = p;
                const known = [...dd.options].map(o => o.value);
                if (!known.includes(p) && p) {
                    dd.value = 'Lainnya';
                    showJenisCustom(p);
                }
            }
            document.getElementById('finishing-custom').addEventListener('input', function() {
                selectedFinishing = this.value.trim();
                document.getElementById('finishing').value = selectedFinishing;
            });
            document.getElementById('jenis-custom').addEventListener('input', function() {
                if (this.value.trim()) selectedProduct = this.value.trim();
            });
        });

        // ── PRODUCT SELECT ──
        function selectProduct(el) {
            document.querySelectorAll('.prod-card').forEach(c => c.classList.remove('selected'));
            el.classList.add('selected');
            selectedProduct = el.dataset.product;
            const dd = document.getElementById('jenis-batu');
            dd.value = [...dd.options].some(o => o.value === selectedProduct) ? selectedProduct : '';
            hideJenisCustom();
        }

        function syncProductFromDropdown(val) {
            document.querySelectorAll('.prod-card').forEach(c => c.classList.remove('selected'));
            if (val === 'Lainnya') {
                selectedProduct = '';
                showJenisCustom();
                return;
            }
            hideJenisCustom();
            if (!val) {
                selectedProduct = '';
                return;
            }
            selectedProduct = val;
            const card = document.querySelector(`.prod-card[data-product="${val}"]`);
            if (card) card.classList.add('selected');
        }

        function showJenisCustom(prefill) {
            const wrap = document.getElementById('jenis-custom-wrap');
            const input = document.getElementById('jenis-custom');
            wrap.style.display = 'block';
            if (prefill) input.value = prefill;
            setTimeout(() => input.focus(), 60);
        }

        function hideJenisCustom() {
            document.getElementById('jenis-custom-wrap').style.display = 'none';
            document.getElementById('jenis-custom').value = '';
        }

        function getProductValue() {
            const dd = document.getElementById('jenis-batu');
            if (dd.value === 'Lainnya') return document.getElementById('jenis-custom').value.trim();
            return selectedProduct;
        }

        // ── CHIPS ──
        function selectChip(el) {
            const val = el.dataset.val;
            if (val === '__custom__') {
                const wrap = document.getElementById('finishing-custom-wrap');
                const open = !wrap.classList.contains('visible');
                wrap.classList.toggle('visible', open);
                el.classList.toggle('active', open);
                if (open) {
                    document.querySelectorAll('.chip:not(#chip-custom-toggle)').forEach(c => c.classList.remove('active'));
                    selectedFinishing = '';
                    document.getElementById('finishing').value = '';
                    setTimeout(() => document.getElementById('finishing-custom').focus(), 60);
                } else {
                    selectedFinishing = '';
                    document.getElementById('finishing').value = '';
                    document.getElementById('finishing-custom').value = '';
                }
                return;
            }
            document.getElementById('finishing-custom-wrap').classList.remove('visible');
            document.getElementById('chip-custom-toggle').classList.remove('active');
            document.getElementById('finishing-custom').value = '';
            if (el.classList.contains('active')) {
                el.classList.remove('active');
                selectedFinishing = '';
                document.getElementById('finishing').value = '';
                return;
            }
            document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            selectedFinishing = val;
            document.getElementById('finishing').value = val;
        }

        function getFinishingValue() {
            return document.getElementById('finishing-custom').value.trim() ||
                document.getElementById('finishing').value;
        }

        // ── STEP NAV ──
        function goStep2() {
            const produk = getProductValue();
            if (!produk) {
                const dd = document.getElementById('jenis-batu');
                return showErr(dd.value === 'Lainnya' ?
                    'Tulis jenis batu yang Anda inginkan.' :
                    'Pilih jenis batu terlebih dahulu.');
            }
            const len = document.getElementById('length').value.trim();
            const wid = document.getElementById('width').value.trim();
            if (!len || !wid) return showErr('Panjang dan lebar wajib diisi.');
            if (!document.getElementById('nama').value.trim()) return showErr('Nama lengkap wajib diisi.');
            const ph = document.getElementById('phone').value.trim();
            if (!ph) return showErr('Nomor WhatsApp wajib diisi.');
            if (!/^\d{8,14}$/.test(ph)) return showErr('Format nomor tidak valid (contoh: 81234567890).');
            fillSummary();
            animStep('step-1', 'step-2', false);
            setSteps(2);
            document.getElementById('prog-fill').style.width = '100%';
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function goBack() {
            animStep('step-2', 'step-1', true);
            setSteps(1);
            document.getElementById('prog-fill').style.width = '50%';
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function animStep(fromId, toId, isBack) {
            const from = document.getElementById(fromId);
            const to = document.getElementById(toId);
            from.classList.add('anim-out');
            setTimeout(() => {
                from.classList.remove('active', 'anim-out');
                from.style.display = 'none';
                to.style.display = 'block';
                to.classList.add(isBack ? 'anim-in-back' : 'anim-in');
                setTimeout(() => {
                    to.classList.remove('anim-in', 'anim-in-back');
                    to.classList.add('active');
                }, 350);
            }, 180);
        }

        function setSteps(active) {
            const i1 = document.getElementById('step-item-1');
            const i2 = document.getElementById('step-item-2');
            const n1 = document.getElementById('step-num-1');
            const n2 = document.getElementById('step-num-2');
            if (active === 1) {
                i1.className = 'step-item active';
                n1.innerHTML = '1';
                i2.className = 'step-item';
                n2.innerHTML = '2';
            } else {
                i1.className = 'step-item done';
                n1.innerHTML = '<i class="fa-solid fa-check" style="font-size:9px"></i>';
                i2.className = 'step-item active';
                n2.innerHTML = '2';
            }
        }

        function showErr(msg) {
            const box = document.getElementById('step1-error');
            document.getElementById('s1-msg').textContent = msg;
            box.classList.add('visible', 'shake');
            setTimeout(() => box.classList.remove('shake'), 350);
            setTimeout(() => box.classList.remove('visible'), 4500);
        }

        // ── SUMMARY ──
        function fillSummary() {
            const g = id => document.getElementById(id)?.value?.trim() ?? '';
            const len = g('length'),
                wid = g('width'),
                thick = g('thickness');
            const fin = getFinishingValue();
            const email = g('email');
            const catatan = g('catatan');
            let dimStr = `${len} × ${wid} cm`;
            if (thick) dimStr += ` · ${thick} cm tebal`;
            document.getElementById('s-produk').textContent = getProductValue();
            document.getElementById('s-dimensi').textContent = dimStr;
            document.getElementById('s-finishing-val').textContent = fin || '—';
            document.getElementById('s-finishing-row').style.display = 'flex';
            document.getElementById('s-nama').textContent = g('nama');
            document.getElementById('s-phone').textContent = '+62' + g('phone');
            const er = document.getElementById('s-email-row');
            document.getElementById('s-email').textContent = email;
            er.style.display = email ? 'flex' : 'none';
            const cr = document.getElementById('s-catatan-row');
            document.getElementById('s-catatan').textContent = catatan || '—';
            cr.style.display = 'flex';
        }

        // ── SEND WA ──
        function kirimWA() {
            const g = id => document.getElementById(id)?.value?.trim() ?? '';
            const len = g('length'),
                wid = g('width'),
                thick = g('thickness');
            const fin = getFinishingValue();
            const email = g('email');
            const note = g('catatan') || '-';
            const produk = getProductValue();
            let dimLine = `${len} × ${wid} cm`;
            if (thick) dimLine += `, tebal ${thick} cm`;
            const msg =
                `Halo TierraStone!

Saya ingin memesan batu alam:

*Jenis Batu:* ${produk}
*Dimensi(panjang x lebar):* ${dimLine}${fin ? `\n*Finishing:* ${fin}` : ''}

*Data Pemesan:*
Nama: ${g('nama')}
No. WA: +62${g('phone')}${email ? '\nEmail: ' + email : ''}

*Catatan:* ${note}

Mohon informasi selanjutnya. Terima kasih!`;
            window.open(`https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(msg)}`, '_blank');
        }
    </script>
</body>

</html>