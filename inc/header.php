<?php
require_once __DIR__ . '/functions.php';
$videos = $GLOBALS['ENV']['hero_videos'] ?? [];
$hero_video = $videos[0] ?? null;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo e($pageTitle ?? SITE_NAME); ?></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main CSS (cache-busted during development) -->
  <link rel="stylesheet" href="<?php echo url('assets/css/style.css'); ?>?v=<?php echo filemtime(__DIR__ . '/../assets/css/style.css'); ?>">

  <meta name="theme-color" content="#041827">
</head>

<body>

<!-- ===================== NAVIGATION ===================== -->
<nav class="navbar navbar-expand-lg navbar-light navbar-sticky fixed-top custom-header" role="navigation" aria-label="Main navigation">
  <div class="container">

    <!-- TEXT-ONLY BRAND (ALL CAPS, spacing controlled by CSS) -->
    <a class="navbar-brand fw-bold text-uppercase" href="<?php echo url(''); ?>">
      GEOMARDY
    </a>

    <!-- Mobile toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
            aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation -->
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="<?php echo url(''); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo url('about.php'); ?>">About</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="solutionsMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Divisions
          </a>
          <ul class="dropdown-menu" aria-labelledby="solutionsMenu">
            <li><a class="dropdown-item" href="<?php echo url('solutions-division-i.php'); ?>">Division I - Marine Investigations &amp; Intelligence</a></li>
            <li><a class="dropdown-item" href="<?php echo url('solutions-division-ii.php'); ?>">Division II - Defence Systems &amp; Strategic Technologies</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="<?php echo url('capabilities.php'); ?>">Capabilities</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo url('case-studies.php'); ?>">Case Studies</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo url('ecosystem.php'); ?>">Ecosystem</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo url('insights.php'); ?>">Insights</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo url('contact.php'); ?>">Contact</a></li>
      </ul>

      <!-- No CTA in header (keeps header clean) -->
    </div>
  </div>
</nav>

<!-- MAIN WRAPPER -->
<main class="container">
