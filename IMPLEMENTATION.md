# Portfolio Website - Figma Design Implementation

## Overview
Dokładna implementacja strony portfolio na podstawie projektu Figma.
Design wykorzystuje Laravel Blade dla SEO i minimalistyczny, czysty układ.

## Design Figma
Link: https://www.figma.com/design/QWfQ7asmdyF7UOSPfou0de/Untitled?node-id=1-509&m=dev

## Struktura strony

### 1. Header
- Minimalistyczny hamburger menu (3 linie) po lewej stronie
- Sticky positioning opcjonalnie

### 2. Hero Section
- Kwadratowe zdjęcie profilowe (120x120px) z zaokrąglonymi rogami
- 5 ikon social media w rzędzie (Instagram, LinkedIn, Behance, Dribbble, Pinterest)
- Wyśrodkowany tekst: "I am a Graphic Designer based in Atlanta, Georgia focused on creating simple and effective solutions."

### 3. Project Sections (4 sekcje)
Każda sekcja ma:
- **Layout**: Alternatywny (tekst-obraz, obraz-tekst)
- **Tło kolorowe**: Purple (#E9D5FF), Blue (#DBEAFE), Green (#D1FAE5), Pink (#FCE7F3)
- **Treść**: Tytuł, opis, lista bullet points
- **Obraz**: Po prawej/lewej stronie z zaokrąglonymi rogami

Sekcje:
1. Brand Identity Design (purple bg)
2. UI/UX Design (blue bg) - reversed layout
3. Print & Editorial (green bg)
4. Illustration & Graphics (pink bg) - reversed layout

### 4. Portfolio Grid
- Grid 2x2 na desktop, 1 kolumna na mobile
- 4 karty z różnymi kolorami:
  - Green (#D1FAE5)
  - Dark (#2D3748)
  - Charcoal (#4A5568)
  - Peach (#FED7AA)
- Każda karta: tytuł + opis
- Hover effect: translateY(-4px)

### 5. Footer CTA
- Tło: Navy Blue (#1E3A8A)
- Tekst biały
- Tytuł: "Thanks"
- Subtitle
- Przycisk "Reach Out" (biały z zaokrąglonymi rogami)

## Kolory (dokładne z Figma)

```scss
$color-purple: #E9D5FF;
$color-blue: #DBEAFE;
$color-green: #D1FAE5;
$color-pink: #FCE7F3;
$color-peach: #FED7AA;
$color-navy: #1E3A8A;
$color-dark: #2D3748;
$color-charcoal: #4A5568;
```

## Typography

- **Font**: System fonts (-apple-system, BlinkMacSystemFont, Segoe UI, Roboto)
- **Hero text**: 28px, line-height: 1.75
- **Section titles**: 32px, bold
- **Project descriptions**: 18px, line-height: 1.75

## Spacing

- Padding między sekcjami: 96px (desktop)
- Container max-width: 1200px
- Container padding: 24px

## Responsive Design

### Breakpoints:
- Desktop: > 968px
- Tablet: 768px - 968px
- Mobile: < 768px

### Zmiany responsive:
- Project sections: 2 kolumny → 1 kolumna
- Grid: 2x2 → 1 kolumna
- Font sizes: proporcjonalnie mniejsze
- Reverse layouts są wyłączane na mobile

## Pliki projektu

```
resources/
├── scss/
│   ├── app.scss          # Wszystkie style w jednym pliku
│   └── _variables.scss   # Zmienne
├── views/
│   ├── layouts/
│   │   └── app.blade.php # Layout z SEO meta tags
│   └── home.blade.php    # Strona główna
└── js/
    └── app.js            # Minimalna konfiguracja Vue
```

## Obrazy wymagane

Dodaj następujące obrazy:

```
public/images/
├── profile.jpg           # 120x120px lub większy (kwadrat)
├── project-1.jpg         # Brand Identity
├── project-2.jpg         # UI/UX Design
├── project-3.jpg         # Print & Editorial
└── project-4.jpg         # Illustration & Graphics
```

## Uruchomienie

### Development
```bash
npm run dev
php artisan serve
```

### Production
```bash
npm run build
```

## SEO Features

Layout zawiera:
- Meta description, keywords, author
- Open Graph tags (Facebook)
- Twitter Card tags
- Canonical URLs
- Strukturalny HTML dla lepszego SEO

## Features

✅ Pixel-perfect design z Figma
✅ Pełne responsive design
✅ SEO optimized z Blade
✅ Hover effects i transitions
✅ Alternating layouts w sekcjach projektów
✅ Minimalistyczny, czysty design
✅ System fonts dla szybkiego ładowania
✅ Accessibility (aria-labels, semantic HTML)

## Browser Support

- Chrome, Firefox, Safari, Edge (ostatnie 2 wersje)
- Mobile Safari, Chrome Mobile
- IE11 nie jest wspierany

## Performance

- CSS: ~5KB (minified + gzipped: 1.4KB)
- JS: ~205KB (includes Vue.js)
- Build time: ~1.6s
- No external dependencies for UI

## Dostosowanie

### Zmiana kolorów
Edytuj `resources/scss/_variables.scss`

### Zmiana treści
Edytuj `resources/views/home.blade.php`

### Dodanie nowych sekcji
Kopiuj strukturę sekcji projektów i zmień klasy modyfikatorów (--purple, --blue, etc.)

## Notes

- Design jest zoptymalizowany pod kątem czystości i prostoty
- Wszystkie SVG icons są inline dla lepszej wydajności
- Użyto CSS Grid dla layoutów - nowoczesne i elastyczne
- Brak jQuery ani innych ciężkich bibliotek
- Vue.js jest opcjonalny - można go usunąć jeśli nie potrzeba interaktywności

## Maintenance

Projekt jest prosty i łatwy w utrzymaniu:
- Jeden główny plik SCSS
- Jeden główny plik Blade
- Minimalna konfiguracja JS
- Wszystko jest dobrze udokumentowane w kodzie
