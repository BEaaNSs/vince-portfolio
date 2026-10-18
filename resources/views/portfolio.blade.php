<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Portfolio of Vince M. Ybañez — junior software engineer, Laravel developer and creator of web and mobile applications.">
  <title>Vince M. Ybañez — Software Developer</title>
  <link rel="stylesheet" href="{{ '/css/portfolio.css' }}">
  <link rel="stylesheet" href="{{ '/css/bento.css' }}">
  <script defer src="{{ '/js/portfolio.js' }}"></script>
  <script defer src="{{ '/js/bento.js' }}"></script>
</head>
<body class="bento-site">
  <div class="progress" id="scroll-progress" aria-hidden="true"></div>
  <div class="bento-shell">
    <header class="bento-header">
      <a class="bento-brand" href="{{ route('home') }}" aria-label="Vince — home">Vince<span>.</span></a>
      <button class="bento-menu" id="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open navigation">☰</button>
      <nav id="site-nav" aria-label="Primary navigation">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#work">Work</a>
        <a href="#contact">Contact</a>
      </nav>
      <a class="bento-talk" href="mailto:{{ config('portfolio.email') }}">Let's talk <span aria-hidden="true">↗</span></a>
    </header>

    <main>
      <section id="home" class="bento-grid" aria-label="Portfolio introduction">
        <article class="bento-card intro-card reveal" id="about">
          <div class="micro-label">A SOFTWARE DEVELOPER BASED IN CEBU</div>
          <div>
            <h1>Hi, I'm<br>Vince <span>Ybañez.</span></h1>
            <p>Junior Software Engineer creating practical web and mobile experiences. I enjoy turning ideas into working applications and learning something new along the way.</p>
          </div>
          <a class="round-arrow" href="#work" aria-label="Explore my work">↗</a>
        </article>

        <div class="social-grid reveal" aria-label="Quick links">
          <a class="bento-card social-tile" href="{{ config('portfolio.linkedin') }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn profile">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 9v11M4 4v.1M9 20v-11h4v1.7c.6-1.2 1.6-2 3.3-2 3.2 0 3.7 2.1 3.7 4.8V20M3 9h2M3 20h2M9 9h4"/></svg>
            <span>LinkedIn ↗</span>
          </a>
          <a class="bento-card social-tile" href="{{ config('portfolio.github') }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub profile">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 6v-3.9c0-1.1.1-1.5-.5-2.1 2.7-.3 5.5-1.3 5.5-6A4.6 4.6 0 0 0 18.7 6.8 4.3 4.3 0 0 0 18.6 3S17.6 2.7 15 4.5a13.8 13.8 0 0 0-6 0C6.4 2.7 5.4 3 5.4 3a4.3 4.3 0 0 0-.1 3.8A4.6 4.6 0 0 0 4 10c0 4.7 2.8 5.7 5.5 6-.6.6-.6 1.2-.5 2.1V22"/></svg>
            <span>GitHub ↗</span>
          </a>
          <a class="bento-card social-tile" href="mailto:{{ config('portfolio.email') }}" aria-label="Send me an email">
            <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="m3 6 9 7 9-7"/></svg>
            <span>Email ↗</span>
          </a>
          <a class="bento-card social-tile" href="{{ config('portfolio.facebook') }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook profile">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 21v-9H18l.5-4h-4V6c0-1.3.3-2 2-2h2V.5A24 24 0 0 0 15.5 0C12 0 10 2.2 10 6v2H7v4h3v9"/></svg>
            <span>Facebook ↗</span>
          </a>
          <a class="bento-card social-tile" href="{{ config('portfolio.instagram') }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram profile">
            <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".8" fill="currentColor" stroke="none"/></svg>
            <span>Instagram ↗</span>
          </a>
          <a class="bento-card social-tile" href="{{ config('portfolio.viber_url') }}" aria-label="Chat with Vince on Viber" title="Opens the Viber app if installed">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5.5 6.5c-1.6 1.8-2.3 5.8-.7 8.4l-1 4 4.1-1.2c3.4 1.8 8.6.6 10.6-2.4 1.8-2.7 1.8-6.1.2-8.6C16.4 3.2 8.7 3 5.5 6.5Z"/><path d="M9 8.5c-.7.5-.6 1.3-.2 2.3.9 2.1 2.1 3.3 4.3 4.3 1 .4 1.8.5 2.3-.2l.4-1.2-2.1-1.3-1 1c-1.1-.5-2.1-1.5-2.6-2.6l1-1-1.3-2.1Z"/></svg>
            <span>Viber ↗</span>
          </a>
        </div>

        <article class="bento-card statement-card reveal">
          <div class="micro-label">WHAT I DO</div>
          <h2>Building skills<br>for the <em>future.</em></h2>
          <p>Design. Develop. Improve. Repeat.</p>
          <span class="statement-spark" aria-hidden="true">✳</span>
        </article>

        <article class="bento-card skill-card reveal" id="skills">
          <div class="micro-label">MY TOOLKIT</div>
          <div class="skill-icons" aria-label="Technologies">
            <span title="Laravel">L<span class="small-icon-label">Laravel</span></span>
            <span title="PHP">php<span class="small-icon-label">PHP</span></span>
            <span title="JavaScript">JS<span class="small-icon-label">JavaScript</span></span>
            <span title="C Sharp">C#<span class="small-icon-label">C#</span></span>
            <span title="Python">Py<span class="small-icon-label">Python</span></span>
            <span title="Java">Jv<span class="small-icon-label">Java</span></span>
            <span title="HTML">&lt;/&gt;<span class="small-icon-label">HTML/CSS</span></span>
            <span title="SQLite">SQL<span class="small-icon-label">SQLite</span></span>
            <span title="Supabase">Sb<span class="small-icon-label">Supabase</span></span>
          </div>
          <div class="bento-card-bottom"><div><small>What I use</small><strong>Technical skills</strong></div><a href="#experience" class="small-arrow" aria-label="Explore technical experience">↗</a></div>
        </article>

        <article class="bento-card projects-feature reveal" id="work">
          <div class="feature-head"><span class="micro-label">SELECTED WORK</span><span>2025 — 2026</span></div>
          <div class="feature-previews">
            @foreach(array_slice($projects, 0, 2) as $project)
              <a class="feature-preview" href="{{ route('projects.show', $project['slug']) }}" aria-label="See {{ $project['title'] }} project">
                @if(!empty($project['image']))
                  <img src="{{ '/' . ltrim($project['image'], '/') }}" alt="{{ $project['title'] }} screenshot" loading="lazy">
                @endif
                <span>{{ $project['title'] }} <b>↗</b></span>
              </a>
            @endforeach
          </div>
          <div class="bento-card-bottom"><div><small>Take a look at my</small><strong>Projects</strong></div><a class="small-arrow" href="#projects" aria-label="See all projects">↗</a></div>
        </article>

        <article class="bento-card portrait-card reveal">
          <img src="{{ '/' . ltrim(config('portfolio.portraits.barong'), '/') }}" alt="Professional portrait of Vince M. Ybañez" loading="eager">
          <div class="portrait-gradient"></div>
          <div class="portrait-bottom"><div><small>Get to know me</small><strong>Behind the code</strong></div><a class="small-arrow" href="#experience" aria-label="Read about Vince">↗</a></div>
        </article>
      </section>

      <section class="bento-section reveal" id="projects">
        <div class="section-heading"><div><span class="micro-label">01 / PROJECTS</span><h2>Selected <em>work.</em></h2></div><p>A closer look at the products and applications I've worked on.</p></div>
        <div class="bento-project-list">
          @foreach($projects as $project)
            <article class="bento-card bento-project reveal">
              <a class="project-screen" href="{{ route('projects.show', $project['slug']) }}" aria-label="Explore {{ $project['title'] }}">
                @if(!empty($project['image']))
                  <img src="{{ '/' . ltrim($project['image'], '/') }}" alt="Preview of {{ $project['title'] }}" loading="lazy">
                @else
                  <div class="project-unavailable" aria-label="Preview coming soon"><span>✳</span><p>Preview coming soon</p></div>
                @endif
              </a>
              <div class="bento-project-copy"><span class="micro-label">{{ strtoupper($project['type']) }}</span><h3>{{ $project['title'] }}</h3><p>{{ $project['summary'] }}</p><div class="bento-tags">@foreach(array_slice($project['stack'], 0, 4) as $tag)<span>{{ $tag }}</span>@endforeach</div>
                <div class="bento-project-actions"><a href="{{ route('projects.show', $project['slug']) }}">Case study ↗</a>
                  @if(!empty($project['live_url']))
                    <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer">Live website ↗</a>
                  @endif
                </div>
              </div>
            </article>
          @endforeach
        </div>
      </section>

      <section class="bento-section reveal" id="experience">
        <div class="section-heading"><div><span class="micro-label">02 / ABOUT ME</span><h2>My <em>journey.</em></h2></div><p>Engineering software with curiosity and purpose.</p></div>
        <div class="journey-grid">
          <div class="bento-card journey-photo"><img src="{{ '/' . ltrim(config('portfolio.portraits.graduation'), '/') }}" alt="Vince wearing his graduation gown" loading="lazy"></div>
          <div class="journey-content"><div class="journey-item"><span>APR 2026 — PRESENT</span><h3>Junior Software Engineer</h3><p>NPAX Cebu Corporation — web and Android development supporting MOPA and business application workflows.</p></div><div class="journey-item"><span>JAN — APR 2026</span><h3>ERP Intern</h3><p>NPAX Cebu Corporation — ASP.NET Core MVC web development training and media-related tasks.</p></div><div class="journey-item"><span>2022 — 2026</span><h3>BS Information Technology</h3><p>University of Cebu — Lapu-Lapu and Mandaue. Consistent Dean's Lister as recorded in my resume.</p></div><div class="journey-item"><span>2024 — PRESENT</span><h3>Youth Council President</h3><p>Joanna Homes Youth Council — youth outreach, counseling, and disaster-risk-reduction activities.</p></div></div>
        </div>
      </section>

      <section class="bento-section contact-section reveal" id="contact"><span class="micro-label">03 / GET IN TOUCH</span><h2>Let's make something <em>happen.</em></h2><p>Have a collaboration, project, or opportunity in mind? I'd love to hear from you.</p>
        <div class="contact-buttons"><a class="contact-primary" href="mailto:{{ config('portfolio.email') }}">Email me ↗</a><a href="{{ config('portfolio.viber_url') }}" title="Opens Viber if installed">Chat on Viber ↗</a><a href="{{ config('portfolio.linkedin') }}" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a><a href="{{ config('portfolio.github') }}" target="_blank" rel="noopener noreferrer">GitHub ↗</a></div><p class="viber-fallback">Viber number: {{ config('portfolio.phone') }} · If the chat link does not open, find me by number in the Viber app.</p>
      </section>
    </main>
    <footer class="bento-footer"><a class="bento-brand" href="#home">Vince<span>.</span></a><div><a href="#home">Home</a><a href="#about">About</a><a href="#work">Work</a><a href="#contact">Contact</a></div><small>© {{ date('Y') }} Vince M. Ybañez. Built with Laravel.</small></footer>
  </div>
</body>
</html>
