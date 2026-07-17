# Hotel Aretê — Website Template

Boutique hotel website template for Hotel Aretê in Búzios, Rio de Janeiro. Static HTML/CSS/JS, deployable to Vercel.

## Stack

- **HTML5** — single-page homepage
- **CSS3** — custom properties, grid, flexbox, animations
- **Vanilla JS** — no frameworks, no build step
- **Google Fonts** — Cormorant Garamond, Jost, Alex Brush
- **Images** — AVIF format, 76 hotel photographs

## Structure

```
├── index.html          # Homepage (all sections)
├── assets/
│   ├── css/style.css   # Global styles (950+ lines)
│   ├── js/main.js      # Interactions (nav, slider, testimonials, reveals)
│   └── *.avif          # 76 hotel images
├── .gitignore
└── README.md
```

## Sections

1. **Hero** — fullscreen with parallax zoom
2. **O Hotel** — brand story + masonry images
3. **Premiações** — awards grid (Condé Nast, Travel+Leisure, TripAdvisor, Forbes)
4. **Galeria** — 12-image grid with hover effects
5. **Acomodações** — horizontal slider with 5 room cards
6. **Depoimentos** — auto-rotating testimonials
7. **Contato** — reservation form
8. **Restaurante** — split layout with menu preview
9. **Vivências** — 4 experience cards
10. **Destino** — Búzios info + facts
11. **Localização** — 3 airport routes + Google Maps embed

## Deploy

Static site — no build step required.

```bash
# Vercel
vercel --prod
```

## Local Development

```bash
# Any static server
npx serve .
# or
python -m http.server 8000
```

## Future WordPress Migration

Original WordPress theme files were converted to static HTML. To migrate back:

1. Restore `functions.php`, `header.php`, `footer.php`
2. Replace `<?php get_header(); ?>` / `<?php get_footer(); ?>` in page templates
3. Move inline CSS back to `<style>` or enqueue via `wp_enqueue_style()`
4. Move JS to `wp_enqueue_script()`
5. Import content from database (pages, posts, ACF fields)

## Credits

- Design: Hotel Aretê brand
- Development: Claude + Gemini + GPT
- Photography: Hotel Aretê archive (76 AVIF images)
