<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <title>Form Pesanan — TierraStone</title>
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
            --red: #c53030;
            --red-bg: #fff5f5;
            --red-border: #fed7d7;
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
            -moz-osx-font-smoothing: grayscale;
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

        /* ══════ NAV ══════ */
        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .97);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border2);
        }

        .nav-inner {
            max-width: 740px;
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

        .nav-back {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 400;
            color: var(--muted);
            text-decoration: none;
            transition: color .2s;
            letter-spacing: .03em;
            text-transform: uppercase;
        }

        .nav-back:hover {
            color: var(--ink);
        }

        .nav-back i {
            font-size: 10px;
        }

        /* ══════ PAGE HEADER ══════ */
        .page-header {
            max-width: 740px;
            margin: 0 auto;
            padding: 56px 24px 32px;
            opacity: 0;
            animation: fadeUp .6s .15s cubic-bezier(.16, 1, .3, 1) forwards;
        }

        .page-header-label {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 14px;
        }

        .page-header h1 {
            font-family: var(--ff-display);
            font-size: clamp(32px, 5vw, 48px);
            font-weight: 400;
            line-height: 1.1;
            color: var(--ink);
            letter-spacing: -.01em;
        }

        .page-header h1 em {
            font-style: italic;
        }

        .page-header p {
            margin-top: 12px;
            font-size: 15px;
            font-weight: 300;
            color: var(--body);
            line-height: 1.7;
            max-width: 480px;
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

        /* ══════ PROGRESS ══════ */
        .progress-wrap {
            max-width: 740px;
            margin: 0 auto;
            padding: 0 24px 28px;
            opacity: 0;
            animation: fadeUp .6s .25s cubic-bezier(.16, 1, .3, 1) forwards;
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
            font-weight: 400;
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
            width: 26px;
            height: 26px;
            border-radius: 50%;
            border: 1px solid currentColor;
            display: grid;
            place-items: center;
            font-size: 12px;
            font-weight: 500;
            flex-shrink: 0;
            transition: all .25s;
        }

        .step-item.active .step-num {
            background: var(--ink);
            border-color: var(--ink);
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
            margin: 0 16px;
        }

        .progress-bar {
            height: 1px;
            background: var(--border2);
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--ink);
            transition: width .5s cubic-bezier(.4, 0, .2, 1);
        }

        /* ══════ MAIN ══════ */
        .main {
            max-width: 740px;
            margin: 0 auto;
            padding: 0 24px 64px;
            opacity: 0;
            animation: fadeUp .6s .35s cubic-bezier(.16, 1, .3, 1) forwards;
        }

        .form-card {
            background: var(--white);
            border: 1px solid var(--border2);
            overflow: hidden;
        }

        /* ══════ SECTION HEADERS ══════ */
        .section-head {
            padding: 32px 36px 0;
        }

        @media (max-width: 560px) {
            .section-head {
                padding: 24px 20px 0;
            }
        }

        .section-label {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .section-title {
            font-family: var(--ff-display);
            font-size: 26px;
            font-weight: 400;
            color: var(--ink);
            line-height: 1.2;
        }

        .section-desc {
            font-size: 14px;
            color: var(--muted);
            margin-top: 4px;
            font-weight: 300;
        }

        .divider {
            height: 1px;
            background: var(--border2);
            margin: 28px 36px;
        }

        @media (max-width: 560px) {
            .divider {
                margin: 24px 20px;
            }
        }

        /* ══════ FORM BODY ══════ */
        .form-body {
            padding: 24px 36px 36px;
        }

        @media (max-width: 560px) {
            .form-body {
                padding: 20px 20px 28px;
            }
        }

        /* ══════ PRODUCT CARDS ══════ */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 16px;
        }

        @media (max-width: 560px) {
            .product-grid {
                gap: 8px;
            }
        }

        .prod-card {
            cursor: pointer;
            position: relative;
            border: 1px solid var(--border);
            background: var(--ink);
            transition: border-color .2s, box-shadow .2s, transform .2s;
            overflow: hidden;
        }

        .prod-card:hover {
            border-color: var(--subtle);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .08);
        }

        .prod-card.selected {
            border-color: var(--ink);
            box-shadow: 0 0 0 2px var(--ink), 0 8px 24px rgba(0, 0, 0, .08);
        }

        .prod-check {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--ink);
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

        @media (max-width: 560px) {
            .prod-img {
                height: 72px;
            }
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

        @media (max-width: 560px) {
            .prod-info {
                padding: 8px 10px 10px;
            }
        }

        .prod-name {
            font-size: 13px;
            font-weight: 500;
            color: white;
            line-height: 1.3;
        }

        @media (max-width: 560px) {
            .prod-name {
                font-size: 11.5px;
            }
        }

        .prod-sub {
            font-size: 11px;
            color: rgba(255, 255, 255, .4);
            margin-top: 2px;
        }

        @media (max-width: 560px) {
            .prod-sub {
                font-size: 10px;
            }
        }

        /* ══════ SELECT WRAPPER ══════ */
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

        /* ══════ INPUTS ══════ */
        .field {
            margin-bottom: 20px;
        }

        .field:last-child {
            margin-bottom: 0;
        }

        .label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--ink2);
            margin-bottom: 7px;
        }

        .label-opt {
            font-size: 11px;
            font-weight: 400;
            letter-spacing: 0;
            text-transform: none;
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
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 0;
            font-family: var(--ff-body);
            font-size: 14.5px;
            font-weight: 400;
            background: var(--white);
            color: var(--ink);
            outline: none;
            appearance: none;
            -webkit-appearance: none;
            transition: border-color .2s, box-shadow .2s;
        }

        .input:focus {
            border-color: var(--ink);
            box-shadow: 0 0 0 1px var(--ink);
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

        @media (max-width: 560px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }

            .grid-3 {
                grid-template-columns: 1fr 1fr;
            }
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
            padding: 12px 14px;
            background: var(--bg);
            color: var(--body);
            border: 1px solid var(--border);
            border-right: none;
            font-size: 13.5px;
            font-weight: 500;
            flex-shrink: 0;
        }

        .phone-wrap .input {
            flex: 1;
        }

        /* ══════ FINISHING CHIPS ══════ */
        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .chip {
            padding: 9px 18px;
            border: 1px solid var(--border);
            font-family: var(--ff-body);
            font-size: 13px;
            font-weight: 400;
            cursor: pointer;
            background: var(--white);
            color: var(--body);
            user-select: none;
            transition: all .2s ease;
            letter-spacing: .02em;
        }

        .chip:hover {
            border-color: var(--ink);
            color: var(--ink);
        }

        .chip.active {
            background: var(--ink);
            border-color: var(--ink);
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

        /* ══════ BUTTONS ══════ */
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
            gap: 10px;
            padding: 14px 32px;
            background: var(--ink);
            color: white;
            border: none;
            font-family: var(--ff-body);
            font-size: 13px;
            font-weight: 500;
            letter-spacing: .06em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .3s cubic-bezier(.16, 1, .3, 1);
        }

        .btn-primary:hover {
            background: var(--ink2);
            padding-right: 40px;
        }

        .btn-primary i {
            font-size: 10px;
            transition: transform .3s ease;
        }

        .btn-primary:hover i {
            transform: translateX(4px);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 24px;
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
            font-family: var(--ff-body);
            font-size: 13px;
            font-weight: 400;
            letter-spacing: .04em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .2s;
        }

        .btn-ghost:hover {
            color: var(--ink);
            border-color: var(--ink);
        }

        .btn-wa {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 16px;
            background: #16a34a;
            color: white;
            border: none;
            font-family: var(--ff-body);
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .04em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .3s cubic-bezier(.16, 1, .3, 1);
        }

        .btn-wa:hover {
            background: #15803d;
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(22, 163, 74, .2);
        }

        .btn-wa i {
            font-size: 18px;
        }

        /* ══════ ERROR BOX ══════ */
        .error-box {
            display: none;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            margin-top: 18px;
            background: var(--red-bg);
            border: 1px solid var(--red-border);
            font-size: 13.5px;
            color: #b91c1c;
        }

        .error-box.visible {
            display: flex;
        }

        /* ══════ STEP TRANSITIONS ══════ */
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(24px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-24px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideOutLeft {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(-18px);
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

        /* ══════ SUMMARY (step 2) ══════ */
        .summary-block {
            border: 1px solid var(--border2);
            overflow: hidden;
            margin-bottom: 16px;
        }

        .summary-head {
            padding: 12px 18px;
            background: var(--bg);
            border-bottom: 1px solid var(--border2);
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .16em;
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
            font-size: 13.5px;
            color: #15803d;
        }

        .wa-note i {
            font-size: 16px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        /* ══════ TRUST ROW ══════ */
        .trust-row {
            display: flex;
            justify-content: center;
            gap: 28px;
            flex-wrap: wrap;
            padding: 28px 24px 0;
            max-width: 740px;
            margin: 0 auto;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            color: var(--muted);
            font-weight: 400;
            letter-spacing: .02em;
        }

        .trust-item i {
            font-size: 12px;
        }

        /* ══════ FOOTER ══════ */
        footer {
            border-top: 1px solid var(--border2);
            padding: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            max-width: 740px;
            margin: 40px auto 0;
        }

        .footer-logo {
            font-family: var(--ff-display);
            font-weight: 600;
            font-size: 16px;
            letter-spacing: .02em;
            color: var(--ink);
        }

        .footer-copy {
            font-size: 11px;
            font-weight: 300;
            color: var(--subtle);
            letter-spacing: .04em;
        }

        /* ══════ MISC ══════ */
        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            20%,
            60% {
                transform: translateX(-5px);
            }

            40%,
            80% {
                transform: translateX(5px);
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

    <!-- NAV -->
    <nav class="nav">
        <div class="nav-inner">
            <a href="{{ route('welcome') }}" class="nav-logo">TierraStone</a>
            <a href="{{ route('welcome') }}" class="nav-back">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <div class="page-header">
        <div class="page-header-label">Form Pemesanan</div>
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

                <div class="section-head">
                    <div class="section-label">01 — Jenis Batu</div>
                    <div class="section-title">Pilih Material</div>
                    <div class="section-desc">Pilih dari kartu atau cari via dropdown untuk pilihan lengkap.</div>
                </div>

                <div class="form-body" style="padding-bottom: 0">
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
                            <input type="text" id="jenis-custom" class="input" placeholder="Tulis jenis batu yang Anda inginkan...">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

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
                                <div class="input-hint">Panjang</div>
                            </div>
                            <div>
                                <input type="number" id="width" class="input" placeholder="Lebar" min="1">
                                <div class="input-hint">Lebar</div>
                            </div>
                            <div>
                                <input type="number" id="thickness" class="input" placeholder="1.2" min="0" step="0.1">
                                <div class="input-hint">Tebal</div>
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

                    <div class="error-box shake" id="step1-error">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span id="s1-msg"></span>
                    </div>

                    <div class="btn-row">
                        <span style="font-size:12px; color:var(--subtle)">
                            <span style="color:var(--red)">*</span> Wajib diisi
                        </span>
                        <button class="btn-primary" onclick="goStep2()" type="button">
                            Review Pesanan <i class="fa-solid fa-arrow-right" style="font-size:10px"></i>
                        </button>
                    </div>
                </div>
            </div>

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

        </div>
    </main>

    <!-- Trust row -->
    <div class="trust-row">
        <div class="trust-item"><i class="fa-solid fa-lock" style="color:var(--green)"></i> Data aman & privat</div>
        <div class="trust-item"><i class="fa-regular fa-clock" style="color:var(--ink)"></i> Respons jam kerja</div>
        <div class="trust-item"><i class="fa-solid fa-truck-fast" style="color:var(--muted)"></i> Kirim seluruh Indonesia</div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-logo">TierraStone</div>
        <div class="footer-copy">&copy; 2026 TierraStone. All rights reserved.</div>
    </footer>

    <script>
        const WA_NUMBER = '6289683000050';
        let selectedProduct = '',
            selectedFinishing = '';

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
            return document.getElementById('finishing-custom').value.trim() || document.getElementById('finishing').value;
        }

        function goStep2() {
            const produk = getProductValue();
            if (!produk) {
                const dd = document.getElementById('jenis-batu');
                return showErr(dd.value === 'Lainnya' ? 'Tulis jenis batu yang Anda inginkan.' : 'Pilih jenis batu terlebih dahulu.');
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

        function fillSummary() {
            const g = id => document.getElementById(id)?.value?.trim() ?? '';
            const len = g('length'),
                wid = g('width'),
                thick = g('thickness');
            const fin = getFinishingValue();
            const email = g('email');
            const catatan = g('catatan');
            let dimStr = `${len} × ${wid}`;
            if (thick) dimStr += ` ketebalan: ${thick}`;
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

        function kirimWA() {
            const g = id => document.getElementById(id)?.value?.trim() ?? '';
            const len = g('length'),
                wid = g('width'),
                thick = g('thickness');
            const fin = getFinishingValue();
            const email = g('email');
            const note = g('catatan') || '-';
            const produk = getProductValue();
            let dimLine = `${len} × ${wid} `;
            if (thick) dimLine += `, tebal ${thick} `;
            const msg =
                `Halo TierraStone!\n\nSaya ingin memesan batu alam:\n\n*Jenis Batu:* ${produk}\n*Dimensi(panjang x lebar):* ${dimLine}${fin ? `\n*Finishing:* ${fin}` : ''}\n\n*Data Pemesan:*\nNama: ${g('nama')}\nNo. WA: +62${g('phone')}${email ? '\nEmail: ' + email : ''}\n\n*Catatan:* ${note}\n\nMohon informasi selanjutnya. Terima kasih!`;
            window.open(`https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(msg)}`, '_blank');
        }
    </script>
</body>

</html>