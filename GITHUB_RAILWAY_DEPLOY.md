# Publishing Vince Portfolio V8 on GitHub and Railway

> This ZIP is a **Laravel source overlay**, not a standalone Laravel framework application. Do not select the overlay directory by itself for Railway deployment. Use the complete Laravel project that runs locally.

## 1. Prepare your working Laravel project

Your complete project folder must include `artisan`, `composer.json`, `bootstrap/`, `app/`, `config/`, `public/index.php`, `resources/` and `routes/`. Back it up before copying this package over it.

Copy this ZIP's `config/`, `routes/`, `resources/` and `public/` directories into the existing Laravel project, preserving its other Laravel files. Copy `.gitignore` into the **complete project root**, but review and merge with any existing ignore rules. Do not overwrite Laravel's standard `.env.example` with this overlay's additional env examples.

Make sure **your actual `.env` is not committed**. This portfolio does not need a database for its current static/config-powered pages. If your local app uses `SESSION_DRIVER=database` or `CACHE_STORE=database`, change those settings on Railway to file as in the provided sample (or provision a real database).

## 2. Test locally

In a terminal at the complete project root:

```powershell
php artisan optimize:clear
php artisan route:list
php artisan serve
```

Open `http://127.0.0.1:8000` and check `/projects/replay`, `/projects/mopa`, `/projects/breathebetter` plus images. If starting a **new** Laravel project rather than using your current working one, run `composer create-project laravel/laravel vince-portfolio` first, then merge the overlay, `cd vince-portfolio`, and verify it locally.

## 3. Commit the complete project to GitHub

Create a **public empty** repository on GitHub (for example `vince-laravel-portfolio`) with no auto-generated README/.gitignore/license. Then in the complete Laravel project folder:

```powershell
git init
git branch -M main
git add .
git status
git commit -m "Initial public portfolio"
git remote add origin https://github.com/YOUR_USERNAME/vince-laravel-portfolio.git
git push -u origin main
```

Before the commit, check `git status` and `git ls-files` to ensure `.env`, secrets, `vendor/`, SQL dumps, and client/private data are absent. Public screenshots may be visible to everyone; confirm you have permission for the MOPA screenshots.

## 4. Deploy from GitHub on Railway

1. Railway dashboard → **New Project** → **Deploy from GitHub repo**.
2. Connect GitHub and choose the full Laravel repository.
3. Add Railway service **Variables** (see `.env.railway.example`). Generate the APP_KEY with `php artisan key:generate --show` inside your local complete Laravel project, and paste the output **only into Railway Variables**.
4. Start deployment. Railway's standard Laravel detection uses PHP-FPM and Caddy; you normally do not need to override build/start commands.
5. Service → Settings → Networking → **Generate Domain**. Copy the exact domain and set `APP_URL` to `https://your-domain`. Redeploy if prompted.
6. Test `/`, three `/projects/...` routes, screenshots, social links, and outbound links.

## 5. Troubleshooting

- **Framework files missing / composer.json not found**: The overlay was uploaded rather than the full Laravel project.
- **500 / APP_KEY missing**: Set `APP_KEY` in Railway Variables (do not commit it).
- **Session/cache SQL errors**: Set `SESSION_DRIVER=file`, `CACHE_STORE=file`, and `QUEUE_CONNECTION=sync`.
- **Assets missing**: Commit `public/images`, `public/css`, and `public/js`.
- **404 on internal pages**: Verify `routes/web.php` was copied into the real Laravel project and Railway has deployed the latest commit.
- **Pages show debug errors**: Ensure `APP_DEBUG=false` and `APP_ENV=production`.
- **App has no public URL**: Generate a domain in Railway Networking.

## 6. Updates

Edit locally → `git add .` → `git commit -m "Update portfolio"` → `git push`.
Railway automatically redeploys when the connected branch changes.

Official references: https://docs.railway.com/guides/laravel and https://laravel.com/docs/13.x/deployment
