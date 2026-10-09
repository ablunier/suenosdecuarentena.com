# Sueños de cuarentena

Source of [suenosdecuarentena.com](https://suenosdecuarentena.com), a bank of dreams collected during the 2020 lockdown, in Spanish and Galician. Created by Adrián P. Blunier and Aymará Ghiglione.

The site is static and built with [Lume](https://lume.land). It was originally a Laravel application; the pages keep the URLs they had there.

## Requirements

[Deno](https://deno.com) 2. Lume itself is fetched on first run, so there is nothing to install.

## Usage

```sh
deno task serve   # development server at http://localhost:3000, rebuilds on change
deno task build   # build the site into _site/
```

## Deployment

The site is hosted on GitHub Pages. Every push to `main` runs `.github/workflows/deploy.yml`, which builds the site and publishes `_site/`. The workflow can also be run by hand from the Actions tab.

## Structure

| Path | Contents |
| --- | --- |
| `_config.ts` | Lume configuration: site location, static assets and sitemap |
| `_data/dreams.json` | The dreams, newest first |
| `_data/i18n.json` | Interface strings and URLs for each language |
| `dreams.page.ts` | Generates every page that shows dreams, in both languages |
| `_includes/` | Vento layouts and partials |
| `es/`, `gl/` | The hand-written pages: about and the notice that sending dreams is closed |
| `index.vto` | `/`, which redirects to `/es/` or `/gl/` by browser language |
| `assets/` | CSS, JavaScript and images, copied as they are |

From `_data/dreams.json`, `dreams.page.ts` generates for each language:

- one page per dream: `/es/sueno/nr-{id}/` and `/gl/sono/nr-{id}/`
- the home list, ten dreams per page: `/es/`, `/es/page/2/`, …
- the search page, which filters in the browser: `/es/buscar/`
- a redirect to a random dream: `/es/random/`

## Adding a dream

Add an entry to `_data/dreams.json`:

```json
{
  "id": 47,
  "date": "2021-04-02",
  "place": "Vigo",
  "author": "Ana",
  "body": "Text of the dream. It can contain HTML."
}
```

`id` and `date` are required, and `id` is part of the dream's URL, so it must not change once published. `place` and `author` are optional. The list follows the order of the file, so new dreams go at the top. A dream is shown with the same text in both languages.

## Sending dreams

Sending dreams is closed: the site is a bank of dreams collected during the covid lockdown. `/es/enviar/` and `/gl/enviar/` no longer hold a form, only a notice explaining this, so the "send a dream" buttons across the site lead there.
