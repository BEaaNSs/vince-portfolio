(() => {
  const portrait = document.getElementById('hero-portrait');
  document.querySelectorAll('[data-portrait]').forEach(button => button.addEventListener('click', () => {
    if (!portrait || button.getAttribute('aria-pressed') === 'true') return;
    const src = button.dataset.portrait;
    const alt = button.dataset.alt;
    const next = new Image();
    next.onload = () => { portrait.classList.add('switching'); window.setTimeout(() => { portrait.src = src; portrait.alt = alt; portrait.classList.remove('switching'); }, 180); };
    next.src = src;
    document.querySelectorAll('[data-portrait]').forEach(b => { b.classList.toggle('selected', b === button); b.setAttribute('aria-pressed', String(b === button)); });
  }));
  const imageDialog = document.getElementById('image-dialog');
  const imageDialogImage = document.getElementById('dialog-image');
  document.querySelectorAll('[data-gallery-image]').forEach(button => button.addEventListener('click', () => {
    if (!imageDialog || !imageDialogImage) return;
    imageDialogImage.src = button.dataset.galleryImage;
    imageDialogImage.alt = button.dataset.galleryAlt;
    imageDialog.showModal();
  }));
  document.getElementById('dialog-close')?.addEventListener('click', () => imageDialog?.close());
  imageDialog?.addEventListener('click', event => { if (event.target === imageDialog) imageDialog.close(); });
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const reveals = document.querySelectorAll('.reveal');
  if (!reduceMotion && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); } });
    }, { threshold: .08, rootMargin: '0px 0px -30px 0px' });
    reveals.forEach((node, index) => { node.style.transitionDelay = `${Math.min(index % 4, 3) * 65}ms`; observer.observe(node); });
  } else reveals.forEach(node => node.classList.add('visible'));

  const menu = document.getElementById('menu-toggle');
  const nav = document.getElementById('site-nav');
  menu?.addEventListener('click', () => {
    const open = nav.classList.toggle('open');
    menu.setAttribute('aria-expanded', String(open));
    menu.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    menu.textContent = open ? '✕' : '☰';
  });
  nav?.querySelectorAll('a[href^="#"]').forEach(link => link.addEventListener('click', () => {
    nav.classList.remove('open'); menu?.setAttribute('aria-expanded', 'false');
    if (menu) menu.textContent = '☰';
  }));

  const theme = document.getElementById('theme-toggle');
  const currentTheme = (() => { try { return localStorage.getItem('portfolio-theme'); } catch { return null; } })();
  if (currentTheme === 'light') document.body.classList.add('light');
  const updateTheme = () => { if (theme) { theme.textContent = document.body.classList.contains('light') ? '☾' : '☀'; theme.setAttribute('aria-label', document.body.classList.contains('light') ? 'Switch to dark theme' : 'Switch to light theme'); }};
  updateTheme();
  theme?.addEventListener('click', () => { document.body.classList.toggle('light'); updateTheme(); try { localStorage.setItem('portfolio-theme', document.body.classList.contains('light') ? 'light' : 'dark'); } catch {} });

  const chips = document.querySelectorAll('[data-filter]');
  const cards = document.querySelectorAll('[data-category]');
  chips.forEach(chip => chip.addEventListener('click', () => {
    const category = chip.dataset.filter;
    chips.forEach(c => { const chosen = c === chip; c.classList.toggle('active', chosen); c.setAttribute('aria-pressed', String(chosen)); });
    let visible = 0;
    cards.forEach(card => { const matches = category === 'all' || card.dataset.category === category; card.hidden = !matches; if (matches) visible++; });
    const empty = document.getElementById('no-results'); if (empty) empty.hidden = visible > 0;
  }));

  const sections = document.querySelectorAll('main section[id]');
  if ('IntersectionObserver' in window && nav) {
    const sectionObserver = new IntersectionObserver(entries => entries.forEach(entry => {
      if (entry.isIntersecting) nav.querySelectorAll('a[href^="#"]').forEach(a => a.classList.toggle('active', a.getAttribute('href') === `#${entry.target.id}`));
    }), { rootMargin: '-20% 0px -70% 0px' });
    sections.forEach(section => sectionObserver.observe(section));
  }
  const progress = document.getElementById('scroll-progress');
  const updateProgress = () => { if (!progress) return; const max = document.documentElement.scrollHeight - innerHeight; progress.style.width = `${max > 0 ? Math.min(100, scrollY / max * 100) : 0}%`; };
  window.addEventListener('scroll', updateProgress, { passive: true }); updateProgress();

  document.getElementById('copy-email')?.addEventListener('click', async event => {
    const email = event.currentTarget.dataset.email;
    const status = document.getElementById('copy-status');
    try { await navigator.clipboard.writeText(email); if (status) status.textContent = 'Email copied to clipboard.'; }
    catch { if (status) status.textContent = `Copy this email: ${email}`; }
  });
})();
