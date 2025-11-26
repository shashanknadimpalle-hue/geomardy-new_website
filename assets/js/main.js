document.addEventListener('DOMContentLoaded', function(){ document.querySelectorAll('a[href^="#"]').forEach(function(a){ a.addEventListener('click', function(e){ e.preventDefault(); var id = this.getAttribute('href').substring(1); var el = document.getElementById(id); if(el) el.scrollIntoView({behavior:'smooth'}); }); }); });

// call after page load
document.addEventListener('DOMContentLoaded', function(){
  // Clicking a carousel slide anchor will navigate naturally (we already wrap slides with <a>)
  // Lightbox: if you decide to use data-slug attributes for mapping, use this snippet:
  document.querySelectorAll('.case-thumb img[data-slug]').forEach(img=>{
    img.addEventListener('click', function(){
      const slug = img.dataset.slug;
      const modalImg = document.getElementById('caseLightboxImage');
      modalImg.src = img.dataset.large || img.src;
      document.getElementById('caseLightboxOpenDetail').href = '<?php echo url('case-detail.php?slug='); ?>' + slug;
      new bootstrap.Modal(document.getElementById('caseLightbox')).show();
    });
  });
});
