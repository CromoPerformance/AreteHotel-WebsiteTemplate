# Hotel Aretê — Website Template

Boutique hotel website template for Hotel Aretê in Búzios, Rio de Janeiro. Static HTML/CSS/JS, deployable to Vercel.

## Stack

- **HTML5** — multi-page structure
- **CSS3** — custom properties, grid, flexbox, animations
- **Google Fonts** — Cormorant Garamond, Jost
- **Images** — AVIF format, 76 hotel photographs

## Structure

```
├── index.html          # Homepage
├── acomodacoes.html    # Acomodações
├── restaurante.html    # Restaurante
├── experiencias.html   # Experiências
├── buzios.html         # Búzios destino
├── blog.html           # Blog
├── assets/
│   ├── css/site.css    # Global styles (522 lines)
│   └── *.avif          # 76 hotel images
├── .gitignore
└── README.md
```

## Sections (index.html)

1. **Hero** — fullscreen with parallax
2. **Manifesto** — brand philosophy
3. **Filosofia** — split layout
4. **Natureza** — location story
5. **Amenities** — Búzios highlights
6. **Quando ir** — seasonal info
7. **Stats** — key numbers
8. **Acomodações** — room preview
9. **Gastronomia** — split layout
10. **Footer** — full footer with contact

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
- Development: Cromo Performance
- Photography: Hotel Aretê archive (76 AVIF images)
