<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'zxx'); ?>" 
dir="<?= htmlspecialchars($dir ?? 'ltr'); ?>">
<head>
    <?php include_once 'partials/style.php'; ?>
</head>
<body class="<?= htmlspecialchars($body_class ?? ''); ?>">
    <?php
    if (defined('SMS_SHOW_DEMO_BANNER') && SMS_SHOW_DEMO_BANNER) {
        include __DIR__ . '/partials/components/sms-demo-banner.php';
    }
    ?>
    <?php
     if (!empty($content)) {
          echo $content;
     }
    ?>
    <?php include 'partials/scripts.php'; ?>
</body>
</html>

