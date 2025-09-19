# Project Frontend Documentation

## Project Setup
1. PHP 8.2+ installed (NTS)
2. Composer installed
3. Clone project
4. Run `composer install`
5. Run `npm install` (for Vite)
6. Run dev server: `php artisan serve`
7. Run frontend dev (Vite HMR): `npm run dev`
8. Open: http://127.0.0.1:8000

## Project Structure (frontend-focused)
- `resources/views/` → Blade templates
- `resources/js/` → JS modules (plain JS)
- `resources/css/` → Styling
- `routes/web.php` → Maps URLs to views
- `.env` → Adjust SESSION_DRIVER=file for no DB

## Blade & JS Conventions
- Layouts: `resources/views/layouts/` → shared templates (navbar, footer)
- Components: `resources/views/components/` → reusable Blade snippets
- Pages: `resources/views/{home,about,etc}.blade.php` → page content
- JS: `resources/js/app.js` → main entry, import modular JS

## Latest Updates Addresses:
- Responsive style issues
- Code Readability

## Glossary
- Sites : components directly part of layout
    | class : ".site-xrole"
- Pages : collection of content placed in layout of different routes
    | class : ".page-xrole"
- Sections : units of content
    | class : ".section-xrole"
- Elements : building blocks of each content unit
    | class : ".parentrole.xrole"

