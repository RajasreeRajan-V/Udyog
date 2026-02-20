<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Granite Udyog</title>

<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root {
    --green: #A0D25D;
    --green-dark: #7dbb3a;
    --green-glow: rgba(160,210,93,0.5);
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #111;
    overflow: hidden;
    position: relative;
}

/* === STONE TEXTURE BACKGROUND === */
body::before {
    content: '';
    position: fixed;
    inset: 0;
    background:
        radial-gradient(ellipse at 20% 30%, rgba(160,210,93,0.07) 0%, transparent 55%),
        radial-gradient(ellipse at 80% 70%, rgba(100,160,40,0.05) 0%, transparent 55%),
        linear-gradient(135deg, #0e0e0e 0%, #1a1a1a 40%, #111 70%, #0a0a0a 100%);
    z-index: 0;
}

/* Animated grain overlay */
body::after {
    content: '';
    position: fixed;
    inset: -50%;
    width: 200%;
    height: 200%;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    opacity: 0.5;
    z-index: 0;
    animation: grainShift 8s steps(2) infinite;
}

@keyframes grainShift {
    0% { transform: translate(0,0); }
    25% { transform: translate(-5%, 5%); }
    50% { transform: translate(5%, -3%); }
    75% { transform: translate(-3%, -5%); }
    100% { transform: translate(0,0); }
}

/* Floating particles */
.particles {
    position: fixed;
    inset: 0;
    z-index: 0;
    overflow: hidden;
}
.particle {
    position: absolute;
    border-radius: 50%;
    background: var(--green);
    opacity: 0;
    animation: floatUp linear infinite;
}

@keyframes floatUp {
    0% { transform: translateY(100vh) scale(0); opacity: 0; }
    10% { opacity: 0.4; }
    90% { opacity: 0.1; }
    100% { transform: translateY(-20px) scale(1); opacity: 0; }
}

.login-container {
    width: 100%;
    max-width: 430px;
    padding: 48px 44px;
    border-radius: 24px;
    backdrop-filter: blur(28px) saturate(1.4);
    background: rgba(20, 22, 18, 0.82);
    border: 1px solid rgba(160,210,93,0.18);
    box-shadow:
        0 0 0 1px rgba(255,255,255,0.04) inset,
        0 32px 64px rgba(0,0,0,0.8),
        0 0 80px rgba(160,210,93,0.04);
    text-align: center;
    color: #fff;
    position: relative;
    z-index: 10;
    transition: box-shadow 0.4s ease;
}

.login-container:hover {
    box-shadow:
        0 0 0 1px rgba(255,255,255,0.06) inset,
        0 40px 80px rgba(0,0,0,0.85),
        0 0 120px rgba(160,210,93,0.08);
}

/* ============================================================
   ✨ ULTRA KIDILAM PROFESSIONAL LOGO
   ============================================================ */

.logo-wrapper {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 148px;
    height: 148px;
    margin-bottom: 28px;
    animation: floatLogo 5s ease-in-out infinite;
}

/* Outer spinning ring - dashed granite texture */
.logo-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px dashed rgba(160,210,93,0.3);
    animation: spinSlow 18s linear infinite;
}

/* Pulsing ambient glow */
.logo-wrapper::after {
    content: '';
    position: absolute;
    width: 190px;
    height: 190px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(160,210,93,0.18) 0%, transparent 70%);
    filter: blur(18px);
    animation: pulseGlow 3.5s ease-in-out infinite;
    z-index: 0;
}

/* SVG Emblem container */
.logo-emblem {
    position: relative;
    z-index: 2;
    width: 148px;
    height: 148px;
}

/* The spinning decorative outer SVG ring */
.ring-outer {
    position: absolute;
    inset: 0;
    animation: spinSlow 22s linear infinite reverse;
}

/* Inner counter-spin ring */
.ring-inner {
    position: absolute;
    inset: 12px;
    animation: spinSlow 14s linear infinite;
}

/* Core shield/hexagon badge */
.badge-core {
    position: absolute;
    inset: 16px;
    background: linear-gradient(145deg, #1c2214, #232e16, #1a2010);
    border-radius: 50%;
    border: 1.5px solid rgba(160,210,93,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    box-shadow:
        0 0 20px rgba(160,210,93,0.2),
        0 0 40px rgba(0,0,0,0.6) inset;
    overflow: hidden;
}

/* Shimmer sweep across badge */
.badge-core::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, transparent 30%, rgba(160,210,93,0.15) 50%, transparent 70%);
    animation: shimmer 3.5s ease-in-out infinite;
    border-radius: 50%;
}

.badge-img {
    width: 76px;
    height: 76px;
    object-fit: contain;
    position: relative;
    z-index: 2;
    filter: drop-shadow(0 2px 12px rgba(160,210,93,0.6)) brightness(1.1);
    animation: breathe 4s ease-in-out infinite;
}

/* Fallback monogram if image fails */
.badge-monogram {
    font-family: 'Cinzel', serif;
    font-size: 34px;
    font-weight: 700;
    color: var(--green);
    letter-spacing: 2px;
    text-shadow: 0 0 20px rgba(160,210,93,0.8), 0 2px 4px rgba(0,0,0,0.8);
    position: relative;
    z-index: 2;
    line-height: 1;
}

.badge-sub {
    font-size: 7px;
    font-weight: 600;
    letter-spacing: 3px;
    color: rgba(160,210,93,0.7);
    text-transform: uppercase;
    margin-top: 3px;
    position: relative;
    z-index: 2;
}

/* Decorative dots around outer ring */
.dot-ring {
    position: absolute;
    inset: -4px;
    animation: spinSlow 30s linear infinite;
}

/* Brand name below emblem */
.brand-name {
    font-family: 'Cinzel', serif;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: var(--green);
    margin-top: 4px;
    text-shadow: 0 0 16px rgba(160,210,93,0.5);
    animation: fadeInUp 1s ease 0.3s both;
}

.brand-tagline {
    font-size: 9.5px;
    letter-spacing: 3.5px;
    color: rgba(255,255,255,0.3);
    text-transform: uppercase;
    margin-top: 2px;
    animation: fadeInUp 1s ease 0.5s both;
}

/* ============================================================ */

@keyframes floatLogo {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-9px); }
}

@keyframes spinSlow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes pulseGlow {
    0%, 100% { opacity: 0.5; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.12); }
}

@keyframes shimmer {
    0% { transform: translateX(-100%) rotate(0deg); }
    60%, 100% { transform: translateX(200%) rotate(0deg); }
}

@keyframes breathe {
    0%, 100% { transform: scale(1); filter: drop-shadow(0 2px 12px rgba(160,210,93,0.6)) brightness(1.1); }
    50% { transform: scale(1.06); filter: drop-shadow(0 4px 20px rgba(160,210,93,0.9)) brightness(1.2); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}

/* === TEXT === */
.login-container h2 {
    font-family: 'Cinzel', serif;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-bottom: 6px;
    background: linear-gradient(135deg, #fff 40%, rgba(160,210,93,0.85));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.login-container p {
    font-size: 13px;
    color: rgba(255,255,255,0.4);
    margin-bottom: 32px;
    letter-spacing: 0.5px;
}

/* === DIVIDER === */
.divider {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 28px;
}
.divider::before, .divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(160,210,93,0.3), transparent);
}
.divider-icon {
    width: 6px;
    height: 6px;
    border: 1px solid rgba(160,210,93,0.5);
    transform: rotate(45deg);
    background: rgba(160,210,93,0.2);
}

/* === INPUTS === */
.input-group {
    position: relative;
    margin-bottom: 22px;
}

.input-group input {
    width: 100%;
    padding: 15px 14px 15px 42px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    outline: none;
    background: rgba(255,255,255,0.05);
    color: #fff;
    font-size: 14px;
    transition: all 0.35s ease;
    letter-spacing: 0.3px;
}

.input-group input:focus {
    background: rgba(160,210,93,0.06);
    border-color: rgba(160,210,93,0.5);
    box-shadow: 0 0 0 3px rgba(160,210,93,0.08), 0 0 20px rgba(160,210,93,0.1);
}

.input-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.4;
    transition: opacity 0.3s;
    pointer-events: none;
}

.input-group input:focus ~ .input-icon {
    opacity: 0.9;
}

.input-group label {
    position: absolute;
    top: 50%;
    left: 42px;
    transform: translateY(-50%);
    color: rgba(255,255,255,0.35);
    font-size: 13px;
    pointer-events: none;
    transition: all 0.3s ease;
}

.input-group input:focus + label,
.input-group input:valid + label {
    top: -9px;
    left: 38px;
    font-size: 10.5px;
    background: #1a1f13;
    padding: 1px 6px;
    border-radius: 4px;
    color: var(--green);
    letter-spacing: 1px;
}

/* === BUTTON === */
.login-btn {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg, #A0D25D 0%, #7dbb3a 50%, #6aaa28 100%);
    color: #0e1a05;
    font-weight: 700;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-family: 'Cinzel', serif;
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(160,210,93,0.3);
}

.login-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
    transition: left 0.5s ease;
}

.login-btn:hover::before {
    left: 100%;
}

.login-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(160,210,93,0.5), 0 0 60px rgba(160,210,93,0.15);
}

.login-btn:active {
    transform: translateY(0);
}

/* === EXTRAS === */
.extra-links {
    margin-top: 22px;
    font-size: 12.5px;
    color: rgba(255,255,255,0.3);
}

.extra-links a {
    color: rgba(160,210,93,0.75);
    text-decoration: none;
    transition: color 0.3s;
    letter-spacing: 0.5px;
}

.extra-links a:hover {
    color: var(--green);
    text-shadow: 0 0 10px rgba(160,210,93,0.5);
}

/* === CORNER ORNAMENTS === */
.corner {
    position: absolute;
    width: 18px;
    height: 18px;
    border-color: rgba(160,210,93,0.35);
    border-style: solid;
}
.corner-tl { top: 16px; left: 16px; border-width: 1.5px 0 0 1.5px; border-radius: 3px 0 0 0; }
.corner-tr { top: 16px; right: 16px; border-width: 1.5px 1.5px 0 0; border-radius: 0 3px 0 0; }
.corner-bl { bottom: 16px; left: 16px; border-width: 0 0 1.5px 1.5px; border-radius: 0 0 0 3px; }
.corner-br { bottom: 16px; right: 16px; border-width: 0 1.5px 1.5px 0; border-radius: 0 0 3px 0; }

@media (max-width: 480px) {
    .login-container { margin: 20px; padding: 32px 24px; }
}
</style>
</head>
<body>

<!-- Particles -->
<div class="particles" id="particles"></div>

<div class="login-container">

    <!-- Corner ornaments -->
    <div class="corner corner-tl"></div>
    <div class="corner corner-tr"></div>
    <div class="corner corner-bl"></div>
    <div class="corner corner-br"></div>

    <!-- LOGO -->
    <div class="logo-wrapper">
        <div class="logo-emblem">

            <!-- Outermost rotating SVG ring with notches -->
            <svg class="ring-outer" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="74" cy="74" r="70" stroke="rgba(160,210,93,0.25)" stroke-width="1" stroke-dasharray="4 8"/>
                <!-- Tick marks at 12 positions -->
                <g stroke="rgba(160,210,93,0.6)" stroke-width="1.5" stroke-linecap="round">
                    <line x1="74" y1="4" x2="74" y2="12"/>
                    <line x1="74" y1="136" x2="74" y2="144"/>
                    <line x1="4" y1="74" x2="12" y2="74"/>
                    <line x1="136" y1="74" x2="144" y2="74"/>
                    <line x1="23.1" y1="23.1" x2="28.7" y2="28.7"/>
                    <line x1="119.3" y1="119.3" x2="124.9" y2="124.9"/>
                    <line x1="124.9" y1="23.1" x2="119.3" y2="28.7"/>
                    <line x1="28.7" y1="119.3" x2="23.1" y2="124.9"/>
                </g>
                <!-- Diamond nodes at cardinal points -->
                <g fill="rgba(160,210,93,0.8)">
                    <polygon points="74,2 76.5,6 74,10 71.5,6" />
                    <polygon points="74,138 76.5,142 74,146 71.5,142" />
                    <polygon points="2,74 6,76.5 10,74 6,71.5" />
                    <polygon points="138,74 142,76.5 146,74 142,71.5" />
                </g>
            </svg>

            <!-- Inner spinning ring -->
            <svg class="ring-inner" viewBox="0 0 124 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="62" cy="62" r="58" stroke="rgba(160,210,93,0.15)" stroke-width="0.5" stroke-dasharray="2 6"/>
                <circle cx="62" cy="62" r="50" stroke="rgba(160,210,93,0.4)" stroke-width="1" stroke-dasharray="18 4"/>
                <!-- Small dot accents -->
                <g fill="rgba(160,210,93,0.7)">
                    <circle cx="62" cy="4" r="2.5"/>
                    <circle cx="62" cy="120" r="2.5"/>
                    <circle cx="4" cy="62" r="2.5"/>
                    <circle cx="120" cy="62" r="2.5"/>
                    <circle cx="19.6" cy="19.6" r="1.5"/>
                    <circle cx="104.4" cy="104.4" r="1.5"/>
                    <circle cx="104.4" cy="19.6" r="1.5"/>
                    <circle cx="19.6" cy="104.4" r="1.5"/>
                </g>
            </svg>

            <!-- Core badge -->
            <div class="badge-core">
                <img src="assets/images/logo_main3.png" alt="Granite Udyog" class="badge-img"
                    onerror="this.style.display='none'; document.getElementById('monogram').style.display='flex';">
                <div id="monogram" style="display:none; flex-direction:column; align-items:center;">
                    <div class="badge-monogram">GU</div>
                    <div class="badge-sub">Granite</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Brand text -->
    <div class="brand-name">Granite Udyog</div>
    <div class="brand-tagline">Premium Stone Collection</div>

    <h2 style="margin-top: 24px;">Welcome Back</h2>
    <p>Sign in to manage your granite collection</p>

    <div class="divider"><div class="divider-icon"></div></div>

    <form method="POST" action="{{ route('admin.do.login') }}">
        @csrf
        <div class="input-group">
            <input type="email" name="email" id="email" required>
            <label for="email">Email Address</label>
            <span class="input-icon">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A0D25D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
            </span>
        </div>

        <div class="input-group">
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
            <span class="input-icon">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A0D25D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
            </span>
        </div>

        <button type="submit" class="login-btn">Enter</button>

        <div class="extra-links">
            <a href="#">Forgot Password?</a>
        </div>

    </form>
</div>

<script>
// Generate floating particles
const container = document.getElementById('particles');
for (let i = 0; i < 22; i++) {
    const p = document.createElement('div');
    p.classList.add('particle');
    const size = Math.random() * 3 + 1;
    p.style.cssText = `
        width: ${size}px;
        height: ${size}px;
        left: ${Math.random() * 100}%;
        animation-duration: ${Math.random() * 12 + 8}s;
        animation-delay: ${Math.random() * 10}s;
        opacity: 0;
    `;
    container.appendChild(p);
}
</script>
</body>
</html>