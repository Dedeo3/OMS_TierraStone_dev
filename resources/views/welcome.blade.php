<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TierraStone – Premium Natural Stone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        /* ══════════════════════════════════════
   TOKENS — Moonstone (G11) Palette
══════════════════════════════════════ */
        :root {
            /* Brand palette - Moonstone */
            --p1: #e7ebf7;
            --p2: #d9e3ec;
            --p3: #bfd0e5;
            --p4: #a6bddf;
            --p5: #90add9;

            /* Extended darks for contrast */
            --p6: #5a7fa8;
            --p7: #3d6590;
            --p8: #2b4f78;

            /* Semantic */
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

            /* Accent */
            --accent: #3d6590;
            --accent2: #2b4f78;
            --accent-light: #a6bddf;
            --glow: rgba(61, 101, 144, .12);
            --glow2: rgba(144, 173, 217, .10);
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
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* ══════════════════════════════════════
   NOISE OVERLAY
══════════════════════════════════════ */
        .noise {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 200;
            opacity: .12;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='n'%3E%3CfeTurbulence baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
        }

        /* ══════════════════════════════════════
   NAV
══════════════════════════════════════ */
        #nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 22px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all .4s ease;
        }

        #nav.scrolled {
            background: rgba(255, 255, 255, .96);
            backdrop-filter: blur(20px);
            padding: 14px 60px;
            border-bottom: 1px solid var(--border);
            box-shadow: 0 1px 20px rgba(61, 101, 144, .06);
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

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .nav-link {
            font-size: 13px;
            font-weight: 500;
            letter-spacing: .03em;
            color: var(--body);
            text-decoration: none;
            position: relative;
            transition: color .2s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: var(--accent);
            transition: width .28s ease;
        }

        .nav-link:hover {
            color: var(--accent);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-cta {
            font-size: 12.5px;
            font-weight: 600;
            letter-spacing: .04em;
            color: var(--white);
            background: var(--accent);
            padding: 10px 24px;
            text-decoration: none;
            border-radius: 6px;
            transition: all .25s;
            box-shadow: 0 2px 12px rgba(61, 101, 144, .22);
        }

        .nav-cta:hover {
            background: var(--accent2);
            transform: translateY(-1px);
            box-shadow: 0 4px 18px rgba(61, 101, 144, .32);
        }

        .nav-mobile {
            display: none;
            align-items: center;
            gap: 14px;
        }

        @media (max-width: 768px) {
            #nav {
                padding: 16px 20px;
            }

            #nav.scrolled {
                padding: 12px 20px;
            }

            .nav-links {
                display: none;
            }

            .nav-mobile {
                display: flex;
            }
        }

        /* ══════════════════════════════════════
   HERO
══════════════════════════════════════ */
        #hero {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: var(--white);
        }

        @media (max-width: 768px) {
            #hero {
                grid-template-columns: 1fr;
            }
        }

        .hero-mesh {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            background:
                radial-gradient(ellipse 60% 60% at 75% 20%, rgba(144, 173, 217, .15) 0%, transparent 60%),
                radial-gradient(ellipse 45% 50% at 20% 75%, rgba(166, 189, 223, .10) 0%, transparent 55%);
        }

        .hero-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 120px 72px 80px;
            position: relative;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .hero-left {
                padding: 100px 24px 48px;
            }
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
            opacity: 0;
            animation: fadeUp .6s .1s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        .eyebrow-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 999px;
            padding: 6px 16px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--accent);
        }

        .eyebrow-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--accent);
            animation: pulse 2.5s ease infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.4);
                opacity: .5;
            }
        }

        .hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(48px, 5.8vw, 82px);
            font-weight: 600;
            line-height: 1;
            color: var(--ink);
            letter-spacing: -.01em;
            margin-bottom: 24px;
            opacity: 0;
            animation: fadeUp .75s .22s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        .hero-title em {
            font-style: italic;
            font-weight: 500;
            color: var(--accent);
        }

        .hero-title .outline {
            -webkit-text-stroke: 1.2px var(--p4);
            color: transparent;
        }

        .hero-sub {
            font-size: 15.5px;
            font-weight: 300;
            line-height: 1.8;
            color: var(--body);
            max-width: 420px;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeUp .75s .36s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        .hero-btns {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeUp .75s .5s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 13px 28px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .03em;
            text-decoration: none;
            border-radius: 6px;
            transition: all .25s ease;
            border: none;
            cursor: pointer;
        }

        .btn-accent {
            background: var(--accent);
            color: white;
            box-shadow: 0 3px 16px rgba(61, 101, 144, .25);
        }

        .btn-accent:hover {
            background: var(--accent2);
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(61, 101, 144, .35);
        }

        .btn-outline {
            border: 1.5px solid var(--border);
            color: var(--body);
            background: transparent;
        }

        .btn-outline:hover {
            border-color: var(--accent);
            color: var(--accent);
            background: var(--surface);
        }

        .hero-trust {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-top: 44px;
            padding-top: 24px;
            border-top: 1px solid var(--border2);
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeUp .75s .64s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            font-weight: 500;
            color: var(--muted);
        }

        .trust-item i {
            color: var(--accent);
            font-size: 13px;
        }

        /* Hero right */
        .hero-right {
            position: relative;
            overflow: hidden;
            background: var(--surface);
        }

        @media (max-width: 768px) {
            .hero-right {
                height: 54vw;
                min-height: 260px;
            }
        }

        .hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: heroReveal 1.2s .05s cubic-bezier(.22, 1, .36, 1) forwards;
            clip-path: inset(0 100% 0 0);
        }

        @keyframes heroReveal {
            to {
                clip-path: inset(0 0% 0 0);
            }
        }

        .hero-right::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(135deg, rgba(61, 101, 144, .12) 0%, transparent 50%);
        }

        .hero-right::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(to left, transparent 60%, var(--white) 100%);
        }

        /* Floating stat cards */
        .hero-stats {
            position: absolute;
            bottom: 40px;
            right: 24px;
            z-index: 3;
            display: flex;
            flex-direction: column;
            gap: 10px;
            opacity: 0;
            animation: fadeSlide .7s .95s ease forwards;
        }

        @media (max-width: 768px) {
            .hero-stats {
                display: none;
            }
        }

        @keyframes fadeSlide {
            from {
                opacity: 0;
                transform: translateX(16px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .stat-card {
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(16px);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 2px 16px rgba(61, 101, 144, .08);
            min-width: 164px;
        }

        .stat-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: var(--surface);
            display: grid;
            place-items: center;
            color: var(--accent);
            font-size: 14px;
            flex-shrink: 0;
        }

        .stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 24px;
            font-weight: 600;
            line-height: 1;
            color: var(--ink);
        }

        .stat-lbl {
            font-size: 10px;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--muted);
            margin-top: 2px;
        }

        /* Scroll hint */
        .scroll-hint {
            position: absolute;
            bottom: 28px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            font-size: 9px;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--subtle);
            z-index: 3;
            opacity: 0;
            animation: fadeUp 1s 1.4s ease forwards;
        }

        .scroll-line {
            width: 1px;
            height: 36px;
            background: linear-gradient(to bottom, var(--accent), transparent);
            animation: scrollAnim 2.2s 1.7s ease infinite;
        }

        @keyframes scrollAnim {
            0% {
                transform: scaleY(0);
                transform-origin: top;
            }

            50% {
                transform: scaleY(1);
                transform-origin: top;
            }

            51% {
                transform: scaleY(1);
                transform-origin: bottom;
            }

            100% {
                transform: scaleY(0);
                transform-origin: bottom;
            }
        }

        /* ══════════════════════════════════════
   MARQUEE
══════════════════════════════════════ */
        .marquee-wrap {
            overflow: hidden;
            background: linear-gradient(90deg, var(--p7), var(--p8) 50%, var(--p7));
            padding: 13px 0;
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marquee 24s linear infinite;
        }

        .marquee-item {
            display: flex;
            align-items: center;
            gap: 28px;
            padding: 0 32px;
            white-space: nowrap;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .55);
        }

        .m-dot {
            width: 3px;
            height: 3px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .3);
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ══════════════════════════════════════
   SECTION COMMONS
══════════════════════════════════════ */
        .sec-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .sec-eyebrow-line {
            width: 24px;
            height: 1.5px;
            background: var(--accent);
        }

        .sec-eyebrow span {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--accent);
        }

        .sec-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(32px, 3.6vw, 52px);
            font-weight: 600;
            line-height: 1.1;
            color: var(--ink);
            letter-spacing: -.005em;
            margin-bottom: 18px;
        }

        .sec-title em {
            font-style: italic;
            font-weight: 500;
            color: var(--accent);
        }

        .sec-body {
            font-size: 15px;
            font-weight: 300;
            line-height: 1.85;
            color: var(--body);
            margin-bottom: 28px;
        }

        /* ══════════════════════════════════════
   ABOUT
══════════════════════════════════════ */
        #about {
            background: var(--white);
            padding: 0;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        @media (max-width: 768px) {
            #about {
                grid-template-columns: 1fr;
            }
        }

        .about-img-col {
            position: relative;
            overflow: hidden;
            min-height: 480px;
        }

        @media (max-width: 768px) {
            .about-img-col {
                min-height: 280px;
                order: -1;
            }
        }

        .about-img-col img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 8s ease;
        }

        .about-img-col:hover img {
            transform: scale(1.03);
        }

        .about-img-col::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(61, 101, 144, .15) 0%, transparent 55%);
        }

        .about-watermark {
            position: absolute;
            top: 16px;
            left: 16px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 160px;
            font-weight: 700;
            line-height: 1;
            color: transparent;
            -webkit-text-stroke: 1px rgba(61, 101, 144, .1);
            pointer-events: none;
            user-select: none;
            z-index: 2;
        }

        .about-corner {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 72px;
            height: 72px;
            background: var(--accent);
            opacity: .1;
            z-index: 2;
        }

        .about-text-col {
            padding: 72px 64px;
            background: var(--white);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .about-text-col {
                padding: 44px 24px;
            }
        }

        .feat-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 32px;
        }

        .feat-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 14px 16px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: all .25s;
        }

        .feat-item:hover {
            border-color: var(--p4);
            background: var(--p1);
            transform: translateY(-2px);
            box-shadow: 0 4px 14px rgba(61, 101, 144, .08);
        }

        .feat-item i {
            color: var(--accent);
            font-size: 13px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .feat-item span {
            font-size: 13px;
            font-weight: 500;
            color: var(--ink2);
            line-height: 1.4;
        }

        /* ══════════════════════════════════════
   PRODUCTS
══════════════════════════════════════ */
        #products {
            background: var(--bg);
            padding: 100px 64px;
        }

        @media (max-width: 768px) {
            #products {
                padding: 64px 24px;
            }
        }

        .prod-header {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: flex-end;
            margin-bottom: 48px;
            gap: 24px;
        }

        @media (max-width: 600px) {
            .prod-header {
                grid-template-columns: 1fr;
            }
        }

        .prod-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 16px;
        }

        @media (max-width: 900px) {
            .prod-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 560px) {
            .prod-grid {
                grid-template-columns: 1fr;
            }
        }

        .pcard {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(61, 101, 144, .06);
            transition: box-shadow .35s, transform .35s;
            background: var(--surface);
        }

        .pcard:first-child {
            aspect-ratio: 4/5;
        }

        .pcard:not(:first-child) {
            aspect-ratio: 3/4;
        }

        .pcard:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 44px rgba(61, 101, 144, .14);
        }

        .pcard img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s cubic-bezier(.22, 1, .36, 1), filter .4s;
            filter: brightness(.88) saturate(.9);
        }

        .pcard:hover img {
            transform: scale(1.05);
            filter: brightness(.74) saturate(.85);
        }

        .pcard-overlay {
            position: absolute;
            inset: 0;
            border-radius: 14px;
            background: linear-gradient(to top, rgba(26, 34, 51, .85) 0%, rgba(26, 34, 51, .06) 55%);
            transition: background .35s;
        }

        .pcard:hover .pcard-overlay {
            background: linear-gradient(to top, rgba(26, 34, 51, .92) 0%, rgba(61, 101, 144, .15) 100%);
        }

        .pcard::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--p4), var(--p5), var(--p7));
            z-index: 3;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .4s cubic-bezier(.22, 1, .36, 1);
        }

        .pcard:hover::before {
            transform: scaleX(1);
        }

        .pcard-body {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 2;
            padding: 24px 22px;
            transition: transform .38s cubic-bezier(.22, 1, .36, 1);
        }

        .pcard:hover .pcard-body {
            transform: translateY(-4px);
        }

        .pcard-idx {
            font-size: 10.5px;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--p4);
            margin-bottom: 6px;
        }

        .pcard-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 24px;
            font-weight: 600;
            line-height: 1.1;
            color: white;
            margin-bottom: 6px;
        }

        .pcard-desc {
            font-size: 12.5px;
            color: rgba(255, 255, 255, .5);
            line-height: 1.6;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height .4s ease, opacity .3s;
        }

        .pcard:hover .pcard-desc {
            max-height: 56px;
            opacity: 1;
        }

        .pcard-cta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 11.5px;
            font-weight: 600;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: white;
            text-decoration: none;
            background: var(--accent);
            padding: 8px 16px;
            border-radius: 6px;
            margin-top: 12px;
            opacity: 0;
            transform: translateY(8px);
            transition: opacity .3s .1s, transform .3s .1s, background .2s;
        }

        .pcard:hover .pcard-cta {
            opacity: 1;
            transform: translateY(0);
        }

        .pcard-cta:hover {
            background: var(--accent2);
        }

        /* ══════════════════════════════════════
   WHY US
══════════════════════════════════════ */
        #why {
            background: var(--ink);
            padding: 100px 64px;
            position: relative;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            #why {
                padding: 64px 24px;
            }
        }

        .why-bg {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                radial-gradient(ellipse 55% 55% at 10% 50%, rgba(61, 101, 144, .12) 0%, transparent 60%),
                radial-gradient(ellipse 40% 40% at 90% 20%, rgba(144, 173, 217, .08) 0%, transparent 55%);
        }

        .why-header {
            text-align: center;
            margin-bottom: 56px;
            position: relative;
            z-index: 1;
        }

        .why-header .sec-eyebrow {
            justify-content: center;
        }

        .why-header .sec-title {
            color: white;
        }

        .why-header .sec-title em {
            color: var(--p4);
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .why-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }
        }

        .why-card {
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(144, 173, 217, .14);
            border-radius: 14px;
            padding: 32px 26px;
            transition: all .3s;
            position: relative;
            overflow: hidden;
        }

        .why-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--p7), var(--p5));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .35s ease;
        }

        .why-card:hover {
            background: rgba(144, 173, 217, .06);
            border-color: rgba(144, 173, 217, .28);
            transform: translateY(-3px);
            box-shadow: 0 10px 36px rgba(61, 101, 144, .12);
        }

        .why-card:hover::before {
            transform: scaleX(1);
        }

        .why-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: rgba(61, 101, 144, .15);
            border: 1px solid rgba(61, 101, 144, .25);
            display: grid;
            place-items: center;
            color: var(--p4);
            font-size: 19px;
            margin-bottom: 18px;
        }

        .why-num {
            position: absolute;
            top: 18px;
            right: 22px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 50px;
            font-weight: 400;
            color: rgba(255, 255, 255, .04);
            line-height: 1;
        }

        .why-card h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            font-weight: 600;
            color: white;
            margin-bottom: 10px;
        }

        .why-card p {
            font-size: 14px;
            font-weight: 300;
            color: rgba(255, 255, 255, .45);
            line-height: 1.8;
        }

        /* Stats row */
        .why-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            margin-top: 56px;
            border: 1px solid rgba(144, 173, 217, .12);
            border-radius: 14px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .why-stats {
                grid-template-columns: 1fr;
            }
        }

        .why-stat {
            padding: 32px 28px;
            text-align: center;
            border-right: 1px solid rgba(144, 173, 217, .12);
        }

        .why-stat:last-child {
            border-right: none;
        }

        .why-stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 50px;
            font-weight: 600;
            line-height: 1;
            background: linear-gradient(135deg, var(--p3), var(--p7));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 6px;
        }

        .why-stat-lbl {
            font-size: 11.5px;
            font-weight: 500;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .35);
        }

        /* ══════════════════════════════════════
   CTA
══════════════════════════════════════ */
        #cta {
            position: relative;
            overflow: hidden;
            background: var(--white);
            padding: 110px 72px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 72px;
            align-items: center;
        }

        @media (max-width: 768px) {
            #cta {
                grid-template-columns: 1fr;
                padding: 64px 24px;
                gap: 40px;
            }
        }

        .cta-mesh {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                radial-gradient(ellipse 50% 60% at 80% 30%, rgba(144, 173, 217, .1) 0%, transparent 55%),
                radial-gradient(ellipse 35% 35% at 15% 75%, rgba(166, 189, 223, .06) 0%, transparent 55%);
        }

        .cta-bracket {
            position: absolute;
            top: 40px;
            right: 56px;
            width: 52px;
            height: 52px;
            border-top: 2px solid var(--border);
            border-right: 2px solid var(--border);
        }

        .cta-bracket-bl {
            position: absolute;
            bottom: 40px;
            left: 56px;
            width: 52px;
            height: 52px;
            border-bottom: 2px solid var(--border);
            border-left: 2px solid var(--border);
        }

        .cta-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(40px, 5vw, 68px);
            font-weight: 600;
            line-height: 1;
            color: var(--ink);
            letter-spacing: -.01em;
        }

        .cta-title em {
            font-style: italic;
            font-weight: 500;
            color: var(--accent);
        }

        .cta-right {
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: relative;
            z-index: 1;
        }

        .cta-btn-main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 24px;
            background: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .05em;
            transition: all .25s;
            box-shadow: 0 4px 18px rgba(61, 101, 144, .22);
        }

        .cta-btn-main:hover {
            background: var(--accent2);
            transform: translateX(4px);
            box-shadow: 0 8px 28px rgba(61, 101, 144, .32);
        }

        .cta-btn-sec {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 24px;
            border: 1.5px solid var(--border);
            color: var(--body);
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .05em;
            transition: all .25s;
            background: transparent;
        }

        .cta-btn-sec:hover {
            border-color: var(--accent);
            color: var(--accent);
            background: var(--surface);
            transform: translateX(4px);
        }

        .cta-note {
            font-size: 12px;
            font-weight: 300;
            color: var(--muted);
            padding-top: 8px;
            border-top: 1px solid var(--border2);
        }

        /* ══════════════════════════════════════
   FOOTER
══════════════════════════════════════ */
        footer {
            background: var(--ink);
            padding: 40px 72px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        @media (max-width: 768px) {
            footer {
                padding: 32px 24px;
                flex-direction: column;
                text-align: center;
            }
        }

        .f-logo {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 20px;
            letter-spacing: .06em;
            color: white;
        }

        .f-logo em {
            font-style: normal;
            color: var(--p4);
        }

        .f-links {
            display: flex;
            gap: 24px;
        }

        .f-link {
            font-size: 12px;
            color: rgba(255, 255, 255, .38);
            text-decoration: none;
            transition: color .2s;
        }

        .f-link:hover {
            color: var(--p4);
        }

        .f-copy {
            font-size: 11px;
            color: rgba(255, 255, 255, .22);
            letter-spacing: .04em;
        }

        /* ══════════════════════════════════════
   SCROLL REVEAL
══════════════════════════════════════ */
        .rev {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .6s ease, transform .6s cubic-bezier(.22, 1, .36, 1);
        }

        .rev.in {
            opacity: 1;
            transform: translateY(0);
        }

        .rev-d1 {
            transition-delay: .1s;
        }

        .rev-d2 {
            transition-delay: .2s;
        }

        .rev-d3 {
            transition-delay: .3s;
        }

        .rev-d4 {
            transition-delay: .4s;
        }

        /* ══════════════════════════════════════
   KEYFRAMES
══════════════════════════════════════ */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
    </style>
</head>

<body>

    <div class="noise"></div>

    <!-- ═══ NAV ═══ -->
    <nav id="nav">
        <a href="{{ route('welcome') }}" class="nav-logo">Tierra<em>Stone</em></a>
        <div class="nav-links">
            <a href="#about" class="nav-link">About</a>
            <a href="#products" class="nav-link">Products</a>
            <a href="#why" class="nav-link">Why Us</a>
            <a href="{{ route('orders.track') }}" class="nav-link">
                <i class="fa-solid fa-magnifying-glass" style="font-size:10px; margin-right:4px"></i>Lacak
            </a>
            <a href="{{ route('order') }}" class="nav-cta">Order Now</a>
        </div>
        <div class="nav-mobile">
            <a href="{{ route('orders.track') }}" style="color:var(--body); font-size:16px">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="{{ route('order') }}" class="nav-cta" style="font-size:11px; padding:8px 18px">Order</a>
        </div>
    </nav>

    <!-- ═══ HERO ═══ -->
    <section id="hero">
        <div class="hero-mesh"></div>

        <div class="hero-left">
            <div class="hero-eyebrow">
                <div class="eyebrow-pill">
                    <div class="eyebrow-dot"></div>
                    Premium Stone Supplier · Est. 2010
                </div>
            </div>

            <h1 class="hero-title">
                Batu <em>Alam</em><br>
                <span class="outline">Pilihan</span><br>
                Terbaik.
            </h1>

            <p class="hero-sub">
                Penyedia batu alam berkualitas tinggi untuk proyek konstruksi, landscape, dan desain interior. Kuat, elegan, dan tahan lama.
            </p>

            <div class="hero-btns">
                <a href="#products" class="btn btn-accent">
                    Lihat Koleksi <i class="fa-solid fa-arrow-right" style="font-size:10px"></i>
                </a>
                <a href="{{ route('orders.track') }}" class="btn btn-outline">
                    <i class="fa-solid fa-magnifying-glass" style="font-size:10px"></i>
                    Lacak Pesanan
                </a>
            </div>

            <div class="hero-trust">
                <div class="trust-item"><i class="fa-solid fa-shield-halved"></i> Tersertifikasi</div>
                <div class="trust-item"><i class="fa-solid fa-truck-fast"></i> Kirim Nasional</div>
                <div class="trust-item"><i class="fa-solid fa-headset"></i> Konsultasi Gratis</div>
            </div>
        </div>

        <div class="hero-right">
            <img src="https://static.wixstatic.com/media/f7651b_c752c6eff5cc477981c65962cd252cfc~mv2.jpg/v1/fill/w_320,h_240,q_90,enc_avif,quality_auto/f7651b_c752c6eff5cc477981c65962cd252cfc~mv2.jpg"
                alt="TierraStone" class="hero-img">

            <div class="hero-stats">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <div>
                        <div class="stat-num">15+</div>
                        <div class="stat-lbl">Tahun Pengalaman</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-building"></i></div>
                    <div>
                        <div class="stat-num">500+</div>
                        <div class="stat-lbl">Proyek Selesai</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <div>
                        <div class="stat-num">30+</div>
                        <div class="stat-lbl">Jenis Batu</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-hint">
            <div class="scroll-line"></div>
            <span>Scroll</span>
        </div>
    </section>

    <!-- ═══ MARQUEE ═══ -->
    <div class="marquee-wrap">
        <div class="marquee-track">
            <div class="marquee-item"><span>Marmer Premium</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Granit Alam</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Batu Andesit</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Batu Landscape</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Paras Jogja</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Batu Candi</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Palimanan</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Bush Hammer · Poles · Bakar</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Marmer Premium</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Granit Alam</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Batu Andesit</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Batu Landscape</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Paras Jogja</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Batu Candi</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Palimanan</span>
                <div class="m-dot"></div>
            </div>
            <div class="marquee-item"><span>Bush Hammer · Poles · Bakar</span>
                <div class="m-dot"></div>
            </div>
        </div>
    </div>

    <!-- ═══ ABOUT ═══ -->
    <section id="about">
        <div class="about-img-col rev">
            <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Stone detail">
            <div class="about-watermark">15</div>
            <div class="about-corner"></div>
        </div>

        <div class="about-text-col">
            <div class="sec-eyebrow rev">
                <div class="sec-eyebrow-line"></div><span>Tentang Kami</span>
            </div>
            <h2 class="sec-title rev rev-d1">
                Material yang<br><em>Hidup</em> dalam<br>Setiap Proyek.
            </h2>
            <p class="sec-body rev rev-d2">
                TierraStone hadir sebagai mitra terpercaya para arsitek, kontraktor, dan desainer interior dalam memilih batu alam terbaik. Setiap batu dipilih dengan standar ketat untuk memastikan kekuatan dan keindahan jangka panjang.
            </p>
            <div class="feat-grid rev rev-d2">
                <div class="feat-item"><i class="fa-solid fa-certificate"></i><span>Kualitas Tersertifikasi</span></div>
                <div class="feat-item"><i class="fa-solid fa-truck-fast"></i><span>Pengiriman Nasional</span></div>
                <div class="feat-item"><i class="fa-solid fa-comments"></i><span>Konsultasi Gratis</span></div>
                <div class="feat-item"><i class="fa-solid fa-boxes-stacked"></i><span>Stok Selalu Ready</span></div>
            </div>
            <a href="{{ route('order') }}" class="btn btn-accent rev rev-d3" style="align-self:flex-start">
                Mulai Konsultasi <i class="fa-solid fa-arrow-right" style="font-size:10px"></i>
            </a>
        </div>
    </section>

    <!-- ═══ PRODUCTS ═══ -->
    <section id="products">
        <div class="prod-header">
            <div>
                <div class="sec-eyebrow rev">
                    <div class="sec-eyebrow-line"></div><span>Koleksi Produk</span>
                </div>
                <h2 class="sec-title rev rev-d1" style="margin-bottom:0">Produk <em>Unggulan</em></h2>
            </div>
            <a href="{{ route('order') }}" class="btn btn-outline rev" style="align-self:flex-end; font-size:12px; white-space:nowrap">
                Lihat Semua <i class="fa-solid fa-arrow-right" style="font-size:9px"></i>
            </a>
        </div>

        <div class="prod-grid">
            <div class="pcard rev">
                <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Marmer">
                <div class="pcard-overlay"></div>
                <div class="pcard-body">
                    <div class="pcard-idx">01 / Marmer</div>
                    <div class="pcard-name">Marmer<br>Premium</div>
                    <div class="pcard-desc">Koleksi marmer eksklusif untuk lantai dan dinding interior mewah.</div>
                    <a href="{{ route('order') }}?product=Marmer+Premium" class="pcard-cta">
                        Pesan <i class="fa-solid fa-arrow-right" style="font-size:9px"></i>
                    </a>
                </div>
            </div>
            <div class="pcard rev rev-d1">
                <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Granit">
                <div class="pcard-overlay"></div>
                <div class="pcard-body">
                    <div class="pcard-idx">02 / Granit</div>
                    <div class="pcard-name">Granit<br>Alam</div>
                    <div class="pcard-desc">Daya tahan luar biasa untuk area outdoor dan dapur.</div>
                    <a href="{{ route('order') }}?product=Granit+Alam" class="pcard-cta">
                        Pesan <i class="fa-solid fa-arrow-right" style="font-size:9px"></i>
                    </a>
                </div>
            </div>
            <div class="pcard rev rev-d2">
                <img src="https://static.wixstatic.com/media/ef7d36_87da53ee99ff44238a005f84bacfa038~mv2.png/v1/fill/w_538,h_538,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/granite-stone_110707071.png" alt="Landscape">
                <div class="pcard-overlay"></div>
                <div class="pcard-body">
                    <div class="pcard-idx">03 / Landscape</div>
                    <div class="pcard-name">Batu<br>Landscape</div>
                    <div class="pcard-desc">Mempercantik taman dan kolam dengan nuansa alami.</div>
                    <a href="{{ route('order') }}?product=Batu+Landscape" class="pcard-cta">
                        Pesan <i class="fa-solid fa-arrow-right" style="font-size:9px"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ WHY US ═══ -->
    <section id="why">
        <div class="why-bg"></div>
        <div class="why-header">
            <div class="sec-eyebrow rev">
                <div class="sec-eyebrow-line"></div><span>Keunggulan Kami</span>
            </div>
            <h2 class="sec-title rev rev-d1">Mengapa <em>TierraStone?</em></h2>
        </div>
        <div class="why-grid">
            <div class="why-card rev">
                <div class="why-num">01</div>
                <div class="why-icon"><i class="fa-solid fa-gem"></i></div>
                <h3>Kualitas Premium</h3>
                <p>Setiap batu diseleksi ketat — hanya material dengan densitas, warna, dan tekstur terbaik yang lolos kurasi tim kami.</p>
            </div>
            <div class="why-card rev rev-d1">
                <div class="why-num">02</div>
                <div class="why-icon"><i class="fa-solid fa-truck-fast"></i></div>
                <h3>Pengiriman Andal</h3>
                <p>Jaringan logistik ke seluruh Indonesia dengan packaging khusus batu alam agar produk tiba dalam kondisi sempurna.</p>
            </div>
            <div class="why-card rev rev-d2">
                <div class="why-num">03</div>
                <div class="why-icon"><i class="fa-solid fa-headset"></i></div>
                <h3>Konsultasi Expert</h3>
                <p>Tim kami siap membantu memilih material yang tepat sesuai konsep desain, anggaran, dan kebutuhan teknis proyek Anda.</p>
            </div>
        </div>
        <div class="why-stats rev rev-d1">
            <div class="why-stat">
                <div class="why-stat-num">15+</div>
                <div class="why-stat-lbl">Tahun Pengalaman</div>
            </div>
            <div class="why-stat">
                <div class="why-stat-num">500+</div>
                <div class="why-stat-lbl">Proyek Selesai</div>
            </div>
            <div class="why-stat">
                <div class="why-stat-num">30+</div>
                <div class="why-stat-lbl">Jenis Material</div>
            </div>
        </div>
    </section>

    <!-- ═══ CTA ═══ -->
    <section id="cta">
        <div class="cta-mesh"></div>
        <div class="cta-bracket"></div>
        <div class="cta-bracket-bl"></div>

        <div class="rev">
            <div class="sec-eyebrow" style="margin-bottom:24px">
                <div class="sec-eyebrow-line"></div><span>Mulai Sekarang</span>
            </div>
            <h2 class="cta-title">
                Siap Wujudkan<br>Proyek <em>Impian</em><br>Anda?
            </h2>
        </div>

        <div class="cta-right rev rev-d2">
            <a href="{{ route('order') }}" class="cta-btn-main">
                <span>Buat Pesanan</span>
                <i class="fa-solid fa-arrow-right" style="font-size:11px"></i>
            </a>
            <a href="{{ route('orders.track') }}" class="cta-btn-sec">
                <span>Lacak Pesanan</span>
                <i class="fa-solid fa-magnifying-glass" style="font-size:11px"></i>
            </a>
            <p class="cta-note">
                <i class="fa-brands fa-whatsapp" style="color:var(--accent); margin-right:5px"></i>
                Respons via WhatsApp jam kerja 08.00–17.00 WIB
            </p>
        </div>
    </section>

    <!-- ═══ FOOTER ═══ -->
    <footer>
        <div class="f-logo">Tierra<em>Stone</em></div>
        <div class="f-links">
            <a href="#about" class="f-link">About</a>
            <a href="#products" class="f-link">Products</a>
            <a href="{{ route('orders.track') }}" class="f-link">Lacak</a>
        </div>
        <div class="f-copy">&copy; 2026 TierraStone. All rights reserved.</div>
    </footer>

    <script>
        /* ── NAV ── */
        const nav = document.getElementById('nav');
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 50), {
            passive: true
        });

        /* ── SCROLL REVEAL ── */
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: .1
        });
        document.querySelectorAll('.rev').forEach(el => io.observe(el));
    </script>
</body>

</html>