<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password | Granite Udyog</title>

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
    padding: 44px 44px 40px;
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
    animation: cardEntrance 0.7s cubic-bezier(0.22, 1, 0.36, 1) both;
}

@keyframes cardEntrance {
    from { opacity: 0; transform: translateY(28px) scale(0.97); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

.login-container:hover {
    box-shadow:
        0 0 0 1px rgba(255,255,255,0.06) inset,
        0 40px 80px rgba(0,0,0,0.85),
        0 0 120px rgba(160,210,93,0.08);
}

/* === COMPACT LOGO === */
.logo-wrapper {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 96px;
    height: 96px;
    margin-bottom: 16px;
    animation: floatLogo 5s ease-in-out infinite;
}

.logo-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px dashed rgba(160,210,93,0.3);
    animation: spinSlow 18s linear infinite;
}

.logo-wrapper::after {
    content: '';
    position: absolute;
    width: 124px;
    height: 124px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(160,210,93,0.18) 0%, transparent 70%);
    filter: blur(14px);
    animation: pulseGlow 3.5s ease-in-out infinite;
    z-index: 0;
}

.logo-emblem {
    position: relative;
    z-index: 2;
    width: 96px;
    height: 96px;
}

.ring-outer {
    position: absolute;
    inset: 0;
    animation: spinSlow 22s linear infinite reverse;
}

.ring-inner {
    position: absolute;
    inset: 8px;
    animation: spinSlow 14s linear infinite;
}

.badge-core {
    position: absolute;
    inset: 10px;
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

.badge-core::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, transparent 30%, rgba(160,210,93,0.15) 50%, transparent 70%);
    animation: shimmer 3.5s ease-in-out infinite;
    border-radius: 50%;
}

.badge-img {
    width: 48px;
    height: 48px;
    object-fit: contain;
    position: relative;
    z-index: 2;
    filter: drop-shadow(0 2px 12px rgba(160,210,93,0.6)) brightness(1.1);
    animation: breathe 4s ease-in-out infinite;
}

.badge-monogram {
    font-family: 'Cinzel', serif;
    font-size: 22px;
    font-weight: 700;
    color: var(--green);
    letter-spacing: 2px;
    text-shadow: 0 0 20px rgba(160,210,93,0.8), 0 2px 4px rgba(0,0,0,0.8);
    position: relative;
    z-index: 2;
    line-height: 1;
}

.badge-sub {
    font-size: 5.5px;
    font-weight: 600;
    letter-spacing: 3px;
    color: rgba(160,210,93,0.7);
    text-transform: uppercase;
    margin-top: 2px;
    position: relative;
    z-index: 2;
}

.brand-name {
    font-family: 'Cinzel', serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: var(--green);
    margin-top: 4px;
    text-shadow: 0 0 16px rgba(160,210,93,0.5);
    animation: fadeInUp 1s ease 0.3s both;
}

.brand-tagline {
    font-size: 8px;
    letter-spacing: 3.5px;
    color: rgba(255,255,255,0.3);
    text-transform: uppercase;
    margin-top: 2px;
    animation: fadeInUp 1s ease 0.5s both;
}

/* === KEY ICON === */
.key-icon-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: rgba(160,210,93,0.08);
    border: 1px solid rgba(160,210,93,0.22);
    margin: 20px auto 18px;
    position: relative;
    animation: fadeInUp 0.8s ease 0.2s both;
    box-shadow: 0 0 20px rgba(160,210,93,0.08);
}

.key-icon-wrapper::before {
    content: '';
    position: absolute;
    inset: -1px;
    border-radius: 15px;
    background: linear-gradient(135deg, rgba(160,210,93,0.25), transparent 60%);
    z-index: -1;
}

/* === ANIMATIONS === */
@keyframes floatLogo {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-7px); }
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
    0% { transform: translateX(-100%); }
    60%, 100% { transform: translateX(200%); }
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
    font-size: 19px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-bottom: 8px;
    background: linear-gradient(135deg, #fff 40%, rgba(160,210,93,0.85));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: fadeInUp 0.8s ease 0.15s both;
}

.login-container p {
    font-size: 12.5px;
    color: rgba(255,255,255,0.38);
    margin-bottom: 26px;
    letter-spacing: 0.4px;
    line-height: 1.7;
    animation: fadeInUp 0.8s ease 0.25s both;
}

/* === SUCCESS BOX === */
.success-box {
    padding: 14px 16px;
    border-radius: 12px;
    background: rgba(160,210,93,0.07);
    border: 1px solid rgba(160,210,93,0.28);
    margin-bottom: 18px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    text-align: left;
    animation: fadeInUp 0.5s ease both;
}

.success-box svg { flex-shrink: 0; margin-top: 1px; }

.success-box p {
    color: rgba(160,210,93,0.9);
    font-size: 12.5px;
    margin-bottom: 0;
    letter-spacing: 0.3px;
    line-height: 1.5;
}

/* === DIVIDER === */
.divider {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
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

/* === INPUT === */
.input-group {
    position: relative;
    margin-bottom: 20px;
    animation: fadeInUp 0.8s ease 0.3s both;
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

.input-group input.is-invalid {
    border-color: rgba(255, 90, 90, 0.45);
    background: rgba(255, 90, 90, 0.04);
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

.input-group input:focus ~ .input-icon { opacity: 0.9; }

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

/* === ERROR MSG === */
.error-msg {
    font-size: 11.5px;
    color: rgba(255, 90, 90, 0.85);
    margin-top: -12px;
    margin-bottom: 16px;
    text-align: left;
    padding-left: 4px;
    animation: fadeInUp 0.3s ease both;
    display: flex;
    align-items: center;
    gap: 5px;
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
    animation: fadeInUp 0.8s ease 0.4s both;
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

.login-btn:hover::before { left: 100%; }

.login-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(160,210,93,0.5), 0 0 60px rgba(160,210,93,0.15);
}

.login-btn:active { transform: translateY(0); }

.login-btn.loading { pointer-events: none; opacity: 0.8; }
.login-btn .btn-text { transition: opacity 0.2s; }
.login-btn.loading .btn-text { opacity: 0; }

.btn-spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 18px;
    height: 18px;
    border: 2px solid rgba(14,26,5,0.3);
    border-top-color: #0e1a05;
    border-radius: 50%;
    opacity: 0;
    transition: opacity 0.2s;
    animation: spinBtn 0.7s linear infinite;
}

.login-btn.loading .btn-spinner { opacity: 1; }

@keyframes spinBtn {
    to { transform: translate(-50%, -50%) rotate(360deg); }
}

/* === BACK LINK === */
.extra-links {
    margin-top: 20px;
    font-size: 12.5px;
    color: rgba(255,255,255,0.3);
    animation: fadeInUp 0.8s ease 0.5s both;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

.extra-links a {
    color: rgba(160,210,93,0.75);
    text-decoration: none;
    transition: color 0.3s;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.extra-links a:hover {
    color: var(--green);
    text-shadow: 0 0 10px rgba(160,210,93,0.5);
}

.extra-links a svg { transition: transform 0.3s ease; }
.extra-links a:hover svg { transform: translateX(-3px); }

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

<div class="particles" id="particles"></div>

<div class="login-container">

    <div class="corner corner-tl"></div>
    <div class="corner corner-tr"></div>
    <div class="corner corner-bl"></div>
    <div class="corner corner-br"></div>

    <!-- Logo -->
    <div class="logo-wrapper">
        <div class="logo-emblem">

            <svg class="ring-outer" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="48" cy="48" r="44" stroke="rgba(160,210,93,0.25)" stroke-width="1" stroke-dasharray="4 8"/>
                <g stroke="rgba(160,210,93,0.6)" stroke-width="1.5" stroke-linecap="round">
                    <line x1="48" y1="4" x2="48" y2="10"/>
                    <line x1="48" y1="86" x2="48" y2="92"/>
                    <line x1="4" y1="48" x2="10" y2="48"/>
                    <line x1="86" y1="48" x2="92" y2="48"/>
                </g>
                <g fill="rgba(160,210,93,0.8)">
                    <polygon points="48,2 50,6 48,10 46,6" />
                    <polygon points="48,86 50,90 48,94 46,90" />
                    <polygon points="2,48 6,50 10,48 6,46" />
                    <polygon points="86,48 90,50 94,48 90,46" />
                </g>
            </svg>

            <svg class="ring-inner" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="36" stroke="rgba(160,210,93,0.15)" stroke-width="0.5" stroke-dasharray="2 6"/>
                <circle cx="40" cy="40" r="30" stroke="rgba(160,210,93,0.4)" stroke-width="1" stroke-dasharray="12 4"/>
                <g fill="rgba(160,210,93,0.7)">
                    <circle cx="40" cy="4" r="2"/>
                    <circle cx="40" cy="76" r="2"/>
                    <circle cx="4" cy="40" r="2"/>
                    <circle cx="76" cy="40" r="2"/>
                </g>
            </svg>

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

    <div class="brand-name">Granite Udyog</div>
    <div class="brand-tagline">Premium Stone Collection</div>

    <!-- Key icon -->
    <div class="key-icon-wrapper">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#A0D25D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="7.5" cy="15.5" r="5.5"/>
            <path d="M21 2L11.5 11.5"/>
            <path d="M15.5 6L17 7.5"/>
            <path d="M18.5 3L20 4.5"/>
        </svg>
    </div>

    <h2>Reset Password</h2>
    <p>Enter your registered email and we'll<br>send you a secure reset link.</p>

    @if(session('status'))
        <div class="success-box">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#A0D25D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <p>{{ session('status') }}</p>
        </div>
    @endif

    <div class="divider"><div class="divider-icon"></div></div>

    <form method="POST" action="{{ route('password.email') }}" id="forgotForm">
        @csrf

        <div class="input-group">
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
            >
            <label for="email">Email Address</label>
            <span class="input-icon">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A0D25D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
            </span>
        </div>

        @error('email')
            <div class="error-msg">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="login-btn" id="submitBtn">
            <span class="btn-text">Send Reset Link</span>
            <span class="btn-spinner"></span>
        </button>

        <div class="extra-links">
            <a href="{{ route('login') }}">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15,18 9,12 15,6"/>
                </svg>
                Back to Sign In
            </a>
        </div>

    </form>
</div>

<script>
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

document.getElementById('forgotForm').addEventListener('submit', function() {
    const btn = document.getElementById('submitBtn');
    btn.classList.add('loading');
});
</script>
</body>
</html>