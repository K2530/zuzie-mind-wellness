# Zuzie Mind Wellness

Bilingual PHP mockup home page for Zuzie Mind Wellness with Tailwind CSS v4 local build, JavaScript language switching, and include-based layout.

## Stack

- HTML/PHP
- Tailwind CSS v4 via local npm package, no CDN
- Vanilla JavaScript

## Structure

```text
app/
  Support/          PHP helpers and security headers
  data/             Mock page data
public/
  includes/         Header/footer includes
  assets/           Compiled CSS, JS, and images
src/css/            Tailwind v4 source
```

## Setup

```bash
npm install
npm run build
php -S localhost:8000 -t public
```

Open `http://localhost:8000`.

## Development

```bash
npm run watch
```

Tailwind source is `src/css/input.css`; compiled CSS is written to `public/assets/css/app.css`.

## GitHub

Remote repository:

```bash
https://github.com/frongkung1/zuzie-mind-wellness.git
```
