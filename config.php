<?php
/**
 * SMS Final Design - Sant Manjit Singh College of Nursing & Allied Healthcare
 */
if (!defined('SMS_SITE_NAME')) {
    define('SMS_SITE_NAME', 'Sant Manjit Singh College of Nursing & Allied Healthcare');
    define('SMS_SITE_SHORT', 'SMS College');
    define('SMS_SITE_TAGLINE', 'Affiliated with University of Jammu · Est. 2026');

    // Contact (full line for display & maps)
    define('SMS_ADDRESS', 'Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001, Jammu & Kashmir');
    define('SMS_PHONE_1', '9149585221');
    define('SMS_PHONE_2', '9906585221');
    define('SMS_EMAIL', 'sms.conaps@gmail.com');

    // Links
    define('SMS_APPLY_URL', 'admission.php');
    define('SMS_COURSES_URL', 'courses.php');
    define('SMS_ABOUT_URL', 'about.php');
    define('SMS_GALLERY_URL', 'gallery.php');
    define('SMS_CONTACT_URL', 'contact.php');

    /** Primary horizontal logo (PNG, transparent) — header, favicon */
    define('SMS_LOGO_MAIN', 'assets/images/logo/sms-logo-horizontal-transparent.png');

    /** White / light wordmark for dark maroon footer only */
    define('SMS_LOGO_FOOTER', 'assets/images/logo/sms-logo-footer-white.png');

    /** College crest / emblem (PNG) — use for icon chips, tiles, CTAs */
    define('SMS_LOGO_CREST', 'assets/images/logo/sms-college-crest.png');

    // Optional — About section principal card (homepage)
    // define('SMS_PRINCIPAL_NAME', 'Dr. …');
    // define('SMS_PRINCIPAL_QUAL', 'M.Sc Nursing, University of Jammu');
    // define('SMS_PRINCIPAL_PHOTO', 'assets/images/team/principal.jpg');
}
if (!defined('SMS_LOGO_MAIN')) {
    define('SMS_LOGO_MAIN', 'assets/images/logo/sms-logo-horizontal-transparent.png');
}
if (!defined('SMS_LOGO_FOOTER')) {
    define('SMS_LOGO_FOOTER', 'assets/images/logo/sms-logo-footer-white.png');
}
if (!defined('SMS_LOGO_CREST')) {
    define('SMS_LOGO_CREST', 'assets/images/logo/sms-college-crest.png');
}
if (!defined('SMS_SITE_TAGLINE')) {
    define('SMS_SITE_TAGLINE', 'Affiliated with University of Jammu · Est. 2026');
}

/** Enquiry form: notification inbox — defaults to college email when defined */
if (!defined('SMS_ENQUIRY_NOTIFY_EMAIL')) {
    define(
        'SMS_ENQUIRY_NOTIFY_EMAIL',
        defined('SMS_EMAIL') && SMS_EMAIL !== '' ? SMS_EMAIL : 'hello@repixelx.tech'
    );
}
/**
 * From address for PHP mail() envelope (-f). Must be allowed by your host (often @your domain).
 * If mail never arrives, use hosting SMTP / cPanel "Email Deliverability" or set SMS_ENQUIRY_RESEND_API_KEY.
 */
if (!defined('SMS_ENQUIRY_MAIL_FROM')) {
    define(
        'SMS_ENQUIRY_MAIL_FROM',
        defined('SMS_EMAIL') && SMS_EMAIL !== '' ? SMS_EMAIL : 'noreply@repixelx.tech'
    );
}
/** Optional: Resend.com API — if set, email is sent via API (reliable when host mail() is broken). */
// define('SMS_ENQUIRY_RESEND_API_KEY', 're_xxxxxxxx');
// define('SMS_ENQUIRY_RESEND_FROM', 'SMS College <onboarding@resend.dev>');

/**
 * Start PHP session for one-time enquiry success messages (no ?enquiry= in URL).
 */
function sms_enquiry_session_start(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        @session_start();
    }
}

/**
 * HD editorial photography (Unsplash — nursing, campus, clinical).
 * Replace with your own campus shots anytime; keep width=2400 or 1600 for sharp displays.
 */
if (!defined('SMS_STOCK_HERO_1')) {
    define('SMS_STOCK_HERO_1', 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_HERO_2')) {
    define('SMS_STOCK_HERO_2', 'https://images.unsplash.com/photo-1498243691581-b145c3f54a78?auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_HERO_3')) {
    define('SMS_STOCK_HERO_3', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_HERO_4')) {
    define('SMS_STOCK_HERO_4', 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_ABOUT_COLUMN')) {
    /* Campus / nursing education — reliable Unsplash id (replace with your photo anytime) */
    define('SMS_STOCK_ABOUT_COLUMN', 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1400&q=88');
}
if (!defined('SMS_STOCK_BREADCRUMB')) {
    define('SMS_STOCK_BREADCRUMB', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=2400&q=90');
}
/** Inner page heroes — distinct demo images (centre-cropped in CSS); override with your photos anytime */
if (!defined('SMS_PAGE_HERO_CONTACT')) {
    /* Campus / communication — distinct from other inner heroes */
    define('SMS_PAGE_HERO_CONTACT', 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=2000&q=88');
}
if (!defined('SMS_PAGE_HERO_ADMISSION')) {
    /* Nursing / clinical learning */
    define('SMS_PAGE_HERO_ADMISSION', 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?auto=format&fit=crop&w=2000&q=88');
}
if (!defined('SMS_PAGE_HERO_ABOUT')) {
    /* Students / campus life */
    define('SMS_PAGE_HERO_ABOUT', 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=2000&q=88');
}
if (!defined('SMS_PAGE_HERO_GALLERY')) {
    define('SMS_PAGE_HERO_GALLERY', 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=2000&q=88');
}
if (!defined('SMS_STOCK_COURSE_BSC')) {
    define('SMS_STOCK_COURSE_BSC', 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?auto=format&fit=crop&w=1600&q=90');
}
if (!defined('SMS_STOCK_COURSE_GNM')) {
    define('SMS_STOCK_COURSE_GNM', 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=1600&q=90');
}
if (!defined('SMS_STOCK_CLINICAL_A')) {
    define('SMS_STOCK_CLINICAL_A', 'https://images.unsplash.com/photo-1516549655169-66039c7b8baf?auto=format&fit=crop&w=1600&q=90');
}
if (!defined('SMS_STOCK_CLINICAL_B')) {
    define('SMS_STOCK_CLINICAL_B', 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1600&q=90');
}
if (!defined('SMS_STOCK_CLINICAL_C')) {
    define('SMS_STOCK_CLINICAL_C', 'https://images.unsplash.com/photo-1584515933487-779824d29330?auto=format&fit=crop&w=1600&q=90');
}
if (!defined('SMS_STOCK_GALLERY_1')) {
    define('SMS_STOCK_GALLERY_1', 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_2')) {
    define('SMS_STOCK_GALLERY_2', 'https://images.unsplash.com/photo-1498243691581-b145c3f54a78?auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_3')) {
    define('SMS_STOCK_GALLERY_3', 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_4')) {
    define('SMS_STOCK_GALLERY_4', 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_5')) {
    define('SMS_STOCK_GALLERY_5', 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_FAQ_SIDE')) {
    define('SMS_STOCK_FAQ_SIDE', 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=90');
}

/**
 * Homepage hero uses a single background image in assets/css/sms-theme.css
 * (selector .sms-hero-cu__bg--hero-photo). Swap the url() there for your campus photo.
 */

require_once __DIR__ . '/partials/components/sms-svg-icon.php';
