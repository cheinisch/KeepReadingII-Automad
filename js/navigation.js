
  (() => {
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');

    const open = () => {
      menu.classList.remove('hidden');
      btn.setAttribute('aria-expanded', 'true');
      // kleine Einblend-Animation
      menu.animate([{opacity:0, transform:'scaleY(0.98)'},{opacity:1, transform:'scaleY(1)'}], {duration:120, easing:'ease-out'});
      // Esc schließt
      document.addEventListener('keydown', onKeydown);
    };

    const close = () => {
      // kleine Ausblend-Animation
      const anim = menu.animate([{opacity:1, transform:'scaleY(1)'},{opacity:0, transform:'scaleY(0.98)'}], {duration:100, easing:'ease-in'});
      anim.addEventListener('finish', () => menu.classList.add('hidden'));
      btn.setAttribute('aria-expanded', 'false');
      document.removeEventListener('keydown', onKeydown);
    };

    const toggle = () => menu.classList.contains('hidden') ? open() : close();

    const onKeydown = (e) => {
      if (e.key === 'Escape') close();
    };

    // Klick auf Button toggelt
    btn.addEventListener('click', toggle);

    // Klick außerhalb schließt
    document.addEventListener('click', (e) => {
      if (menu.classList.contains('hidden')) return;
      const clickInside = menu.contains(e.target) || btn.contains(e.target);
      if (!clickInside) close();
    });
  })();
