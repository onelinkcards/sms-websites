<?php
/**
 * Tribute landing — shown before homepage (see index.php + SMS_TRIBUTE_SPLASH).
 */
declare(strict_types=1);

if (!defined('SMS_SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$_splash_portrait = defined('SMS_TRIBUTE_PORTRAIT') ? (string) SMS_TRIBUTE_PORTRAIT : 'assets/images/tribute/sant-manjit-singh-ji.jpeg';
$_splash_portrait_esc = htmlspecialchars($_splash_portrait, ENT_QUOTES, 'UTF-8');
$_site = defined('SMS_SITE_NAME') ? htmlspecialchars((string) SMS_SITE_NAME, ENT_QUOTES, 'UTF-8') : 'Sant Manjit Singh College of Nursing &amp; Allied Healthcare';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="robots" content="noindex, nofollow">
    <title>In reverence — <?php echo $_site; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=EB+Garamond:ital,wght@0,400;0,500;1,400&family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sms-splash-tribute.css">
</head>
<body class="sms-splash-tribute">
    <div class="sms-splash-tribute__bg" aria-hidden="true"></div>
    <div class="sms-splash-tribute__pattern" aria-hidden="true"></div>

    <div class="sms-splash-tribute__corner sms-splash-tribute__corner--tl" aria-hidden="true">
        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
            <path d="M4 4h36M4 4v36" stroke="#9B7D45" stroke-width="0.8"/>
            <path d="m4 4 16 16" stroke="#9B7D45" stroke-width="0.5" opacity="0.55"/>
            <circle cx="4" cy="4" r="3" stroke="#9B7D45" stroke-width="0.8" fill="none"/>
            <path d="M15 4q0 11-11 11" stroke="#9B7D45" stroke-width="0.5" fill="none"/>
        </svg>
    </div>
    <div class="sms-splash-tribute__corner sms-splash-tribute__corner--tr" aria-hidden="true">
        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
            <path d="M4 4h36M4 4v36" stroke="#9B7D45" stroke-width="0.8"/>
            <circle cx="4" cy="4" r="3" stroke="#9B7D45" stroke-width="0.8" fill="none"/>
            <path d="M15 4q0 11-11 11" stroke="#9B7D45" stroke-width="0.5" fill="none"/>
        </svg>
    </div>
    <div class="sms-splash-tribute__corner sms-splash-tribute__corner--bl" aria-hidden="true">
        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
            <path d="M4 4h36M4 4v36" stroke="#9B7D45" stroke-width="0.8"/>
            <circle cx="4" cy="4" r="3" stroke="#9B7D45" stroke-width="0.8" fill="none"/>
        </svg>
    </div>
    <div class="sms-splash-tribute__corner sms-splash-tribute__corner--br" aria-hidden="true">
        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
            <path d="M4 4h36M4 4v36" stroke="#9B7D45" stroke-width="0.8"/>
            <circle cx="4" cy="4" r="3" stroke="#9B7D45" stroke-width="0.8" fill="none"/>
        </svg>
    </div>

    <main class="sms-splash-tribute__container">
        <div class="sms-splash-tribute__top-ornament">
            <div class="sms-splash-tribute__divider-line sms-splash-tribute__divider-line--rev"></div>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true" focusable="false">
                <path d="M9 1v16M1 9h16M4 4l10 10m0-10L4 14" stroke="#9B7D45" stroke-width="0.75" opacity="0.6"/>
                <circle cx="9" cy="9" r="3" stroke="#9B7D45" stroke-width="0.75" fill="none"/>
            </svg>
            <div class="sms-splash-tribute__divider-line"></div>
        </div>

        <h1 class="sms-splash-tribute__headline">
            In reverence <span class="sms-splash-tribute__headline-accent">&amp; gratitude</span>
        </h1>
        <p class="sms-splash-tribute__subtitle">Tribute · Dera Nangali Sahib</p>

        <div class="sms-splash-tribute__photo-frame">
            <div class="sms-splash-tribute__frame-ring" aria-hidden="true"></div>
            <div class="sms-splash-tribute__frame-ring sms-splash-tribute__frame-ring--outer" aria-hidden="true"></div>
            <img
                class="sms-splash-tribute__photo"
                src="<?php echo $_splash_portrait_esc; ?>"
                alt="Sant Manjit Singh Ji — Mukhi, Dera Nangali Sahib"
                width="540"
                height="540"
                loading="eager"
                decoding="async"
            >
        </div>

        <div class="sms-splash-tribute__photo-line" aria-hidden="true">
            <svg width="120" height="14" viewBox="0 0 120 14" fill="none">
                <line x1="0" y1="7" x2="48" y2="7" stroke="#C8A96E" stroke-width="0.6" opacity="0.65"/>
                <circle cx="60" cy="7" r="4" stroke="#C8A96E" stroke-width="0.8" fill="none"/>
                <circle cx="60" cy="7" r="1.5" fill="#C8A96E" opacity="0.75"/>
                <line x1="72" y1="7" x2="120" y2="7" stroke="#C8A96E" stroke-width="0.6" opacity="0.65"/>
            </svg>
        </div>

        <div class="sms-splash-tribute__name-block">
            <div class="sms-splash-tribute__name-main">Sant Manjit Singh Ji</div>
            <div class="sms-splash-tribute__name-title">
                Mukhi · Dera Nangali Sahib<br>
                Poonch, Jammu &amp; Kashmir
            </div>
        </div>

        <div class="sms-splash-tribute__gold-rule">
            <div class="sms-splash-tribute__gold-line sms-splash-tribute__gold-line--rev"></div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
                <circle cx="12" cy="12" r="9" stroke="#C8A96E" stroke-width="0.9" fill="rgba(200,169,110,0.08)"/>
                <path d="M12 4v16M6 12h12" stroke="#C8A96E" stroke-width="0.7" opacity="0.85"/>
                <circle cx="12" cy="12" r="2" fill="none" stroke="#9B7D45" stroke-width="0.55"/>
            </svg>
            <div class="sms-splash-tribute__gold-line"></div>
        </div>

        <div class="sms-splash-tribute__quotes">
            <p class="sms-splash-tribute__quote">
                With profound reverence, we remember <strong>Sant Manjit Singh Ji</strong> of <strong>Dera Nangali Sahib</strong> — a life of selfless <em>seva</em>, compassion, and humility. His teachings remind us that true excellence in any profession, including nursing, is rooted in service to humanity and moral courage.
            </p>
            <div class="sms-splash-tribute__quote-sep" aria-hidden="true">✦ ✦ ✦</div>
            <p class="sms-splash-tribute__quote-2">
                <?php echo $_site; ?> is honoured to draw inspiration from his legacy — preparing caregivers who combine clinical skill with empathy, integrity, and respect for every life they serve.
            </p>
        </div>

        <a class="sms-splash-tribute__enter" href="index.php?continue=1">
            Enter website<span class="sms-splash-tribute__enter-arrow" aria-hidden="true"> →</span>
        </a>

        <p class="sms-splash-tribute__foot"><?php echo $_site; ?> · University of Jammu affiliation</p>
    </main>

</body>
</html>
