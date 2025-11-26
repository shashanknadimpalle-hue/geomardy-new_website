<?php
// inc/division-navigation.php
// Simple division navigation pills. Use in division pages to show active state.

$current = basename($_SERVER['PHP_SELF'] ?? '');
?>
<nav class="nav nav-pills division-nav my-4 justify-content-center" role="navigation" aria-label="Division navigation">
  <a
    class="nav-link <?php echo ($current === 'solutions-division-i.php') ? 'active' : ''; ?>"
    href="<?php echo url('solutions-division-i.php'); ?>"
    aria-current="<?php echo ($current === 'solutions-division-i.php') ? 'page' : 'false'; ?>"
  >
    Division I
  </a>

  <a
    class="nav-link <?php echo ($current === 'solutions-division-ii.php') ? 'active' : ''; ?>"
    href="<?php echo url('solutions-division-ii.php'); ?>"
    aria-current="<?php echo ($current === 'solutions-division-ii.php') ? 'page' : 'false'; ?>"
  >
    Division II
  </a>
</nav>
