# Vince M. Ybañez — Interactive Laravel Portfolio (v2)

This is a **drop-in Laravel starter overlay**, not a full Laravel framework installation.

## Setup (Laragon / Windows)

1. `composer create-project laravel/laravel vince-portfolio`
2. Copy `config`, `routes`, `resources`, and `public` from this ZIP's `vince-laravel-portfolio` folder into the new project's root (merge/overwrite relevant files).
3. Copy `.env.example.portfolio` settings into your **existing** Laravel `.env`, filling in only verified URLs.
4. Run `php artisan config:clear` and `php artisan route:clear`.
5. Start using `php artisan serve`; visit http://127.0.0.1:8000.

## What's interactive

- Sticky navigation with active-section highlighting and responsive mobile menu
- Scroll-reveal animations, hover transitions, scroll progress bar, reduced-motion support
- Filterable projects, clickable dedicated case study pages (`/projects/mopa`, `/projects/replay`, `/projects/breathebetter`)
- Persistent light/dark theme toggle
- Configurable verified email, social profiles, resume, external demo links, repository links, and project screenshots
- Accessible interactive controls (keyboard focus, labels, aria-pressed)

## Editing content

Edit **`config/portfolio.php`**. Each project has `slug`, `title`, `type`, `summary`, `details`, `stack`, `live_url`, `repo_url`, `image`.

Use genuine public `https://...` URLs for `live_url` / `repo_url`. If blank, the corresponding button is hidden; internal case-study links always work. Put screenshot files under `public/images`, e.g. `public/images/replay.png`, then set `image => 'images/replay.png'`.

Resume had email domain `gmai.com`, not `gmail.com`. Therefore public email is deliberately blank pending verification. The portfolio also omits the street address, personal information, and reference phone numbers.

**Security:** MOPA may be internal/proprietary; do not post code, screenshots or private deployments without company authorization. External link values and image paths should be edited only by the trusted site maintainer.

## Files

- `routes/web.php` — landing page and internal project routes
- `config/portfolio.php` — content and outgoing links
- `resources/views/portfolio.blade.php` — main portfolio
- `resources/views/project.blade.php` — dynamic project case studies
- `public/css/portfolio.css` — animations, responsive UI, theme
- `public/js/portfolio.js` — interactions
- `.env.example.portfolio` — optional environment settings

## V3: portraits and visual project previews

- Two real, web-optimized user-supplied portraits are included under `public/images/`. The hero portrait defaults to the barong photo and can be switched to the graduation photo. The About section uses the graduation photo.
- Each project card and project detail page displays an **explicitly labeled illustration placeholder**, not a claimed screenshot, until real project images are provided.
- To add actual screenshots, copy authorized image files into `public/images/` and edit the corresponding project in `config/portfolio.php`:

```php
'image' => 'images/replay-home.webp',
'gallery' => [
    'images/replay-booking.webp',
    'images/replay-admin.webp',
],
```

- Clicking screenshots in a populated gallery opens an image lightbox. Internal project routes remain unchanged.
- Do not upload screenshots of client production data, credentials, or proprietary NPAX systems without approval.

Updated files: `config/portfolio.php` (portrait and gallery config), `resources/views/portfolio.blade.php` (hero/about photography and card previews), `resources/views/project.blade.php` (detail placeholders, gallery dialog), `public/css/portfolio.css` (responsive photo/gallery styling), `public/js/portfolio.js` (portrait switcher and gallery lightbox); added `public/images/vince-barong.webp` and `public/images/vince-graduation.webp`.


## Replay screenshots and live website (v4)

Replay now uses the real screenshots supplied by the portfolio owner. `public/images/replay-home.webp` is the main project-card and detail-page image. `public/images/replay-booking-calendar.webp` is the booking-calendar gallery image. Both appear in the Replay project gallery and can be opened using the existing image dialog. The live link is `https://www.replaypickleballph.com/` (opens in a new tab).

All other project content and portrait assets are unchanged from the V3 Blade-syntax-fixed release. The provided screenshots may contain live booking availability from October 2026; treat the images as historical UI examples, **not** current availability.

Copy the `config/portfolio.php` file and the two `public/images/replay-*.webp` files to update an existing V3 installation. For a fresh install, copy all overlay folders. After deployment run `php artisan optimize:clear` and refresh the page.


## MOPA screenshots and live website (v5)

MOPA now uses the real screenshots supplied by the portfolio owner. `public/images/mopa-login.webp` is the main project-card and detail-page image. `public/images/mopa-dashboard.webp` is the second gallery image. Both appear in the MOPA project gallery and can be opened using the existing image dialog. The live link is `https://mopa.n-pax.com/mopa/` (opens in a new tab).

Because MOPA appears to be a business platform, only the screenshots explicitly provided by the portfolio owner are included. Do not add private credentials, internal-only pages, or unauthorized client data. To update an existing Replay V4 installation, copy `config/portfolio.php` plus the two `public/images/mopa-*.webp` files, then run `php artisan optimize:clear`.


## V6 — Contact details

The homepage Contact section now links to the confirmed email address (`mailto:`), phone number (`tel:`), LinkedIn, Facebook, and Instagram. Links to external profiles open in a separate tab. The email copy button remains available. Contact tiles have hover transitions and a responsive mobile layout.

Changed: `config/portfolio.php`, `resources/views/portfolio.blade.php`, and `public/css/portfolio.css`. All V5 assets, project galleries and URLs are retained. **Note:** The contact details will be publicly visible to anyone visiting the portfolio. An existing `.env` value for `PORTFOLIO_EMAIL` or `PORTFOLIO_LINKEDIN` overrides the defaults in `config/portfolio.php`.

## V7: dark bento-grid redesign

The homepage has been redesigned using the supplied inspiration screenshot (layout inspiration, not a copied third-party template). The design includes an intro card, LinkedIn/email/Facebook/Instagram tiles, orange headline card, skills grid, two featured project screenshots, a portrait card, detailed project cards, experience and education, and a contact area. The original Laravel routes and project case-study galleries remain intact.

**Modified:** `resources/views/portfolio.blade.php` (complete responsive homepage markup).
**Added:** `public/css/bento.css` (bento design and mobile layouts), `public/js/bento.js` (reserved for bento-specific progressive enhancements).
**Preserved:** `config/portfolio.php` (contact info, project links and metadata), `resources/views/project.blade.php`, existing `public/images/`, and `routes/web.php`.

To upgrade from V6: copy the new `resources/views/portfolio.blade.php` and `public/css/bento.css` and `public/js/bento.js` into your Laravel application. For a fresh installation, merge the entire overlay folder into a `composer create-project laravel/laravel` project. Run `php artisan optimize:clear` and then `php artisan serve`.

No npm/Vite build is required. The reference uses a compact grid at desktop sizes and stacks cards responsively on mobile. Images are actual screenshots supplied by the portfolio owner; BreatheBetter remains labeled `Preview coming soon` until a screenshot is supplied.


## BreatheBetter screenshot and live website (v8)

BreatheBetter now uses the real screenshot supplied by the portfolio owner. `public/images/breathebetter-home.webp` is used as the main project-card image and also appears in the project gallery. The live link is `https://subelarioisrael.github.io/breathebetter-site/` (opens in a new tab).

To update an existing V7 installation, copy `config/portfolio.php` and `public/images/breathebetter-home.webp`, then run `php artisan optimize:clear`.
