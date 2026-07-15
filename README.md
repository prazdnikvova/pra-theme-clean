# Pra Theme Clean

The barest possible WordPress starter: a clean PHP template hierarchy, one
stylesheet, **zero JavaScript, zero tooling**. Activate, replace the
`pra-theme-clean` / `pra_clean_` / `Pra Theme Clean` identifiers with your own,
and build.

Need deferred assets, security hardening, PHPCS, CI and a Playwright smoke
test out of the box? Use the batteries-included sibling:
**[Pra Theme](https://github.com/prazdnikvova/pra-theme)**.

## What's inside

- 16 PHP templates: no `category.php`/`tag.php`/`author.php` duplicates
  (WordPress falls back to `archive.php`), a compact `entry-*` partial family,
  comments without trackback legacy.
- `functions.php` — three small functions: theme supports, one stylesheet
  enqueued with a `filemtime()` version plus comment-reply, a skip link. That's all.
- `style.css`: theme header + cross-browser reset + accessibility helpers.
- Every string in gettext with the `pra-theme-clean` text domain;
  viewport with `initial-scale=1`.

## Structure

| Path | What it does |
|---|---|
| `style.css` | Theme header, cross-browser reset, WordPress core classes, accessibility helpers |
| `functions.php` | Theme supports and menu location, the stylesheet, comment-reply, skip link |
| `header.php`, `footer.php` | Document shell: `<head>`, logo and primary menu, `main#content`, copyright line |
| `index.php`, `archive.php`, `search.php` | Post lists with older / newer links from `nav-below.php` |
| `single.php`, `page.php`, `404.php` | Single post with previous / next links from `nav-below-single.php`, static page, not-found page |
| `entry.php`, `entry-*.php` | Post partial: title, date and author, content or excerpt, categories and tags |
| `comments.php` | Comment list, pagination and form |

## Getting started

1. Copy the folder into `wp-content/themes/` and rename it to your slug.
2. Replace `pra-theme-clean` (text domain and stylesheet handle), `pra_clean_`
   (function prefix) and `Pra Theme Clean` (name), then edit the `style.css` header.
3. Activate the theme, assign a menu to the Primary location and set a logo in
   the Customizer.
4. Write project styles in `style.css` below the helpers. When a page needs its
   own CSS or JS, enqueue it in `pra_clean_enqueue()` only where it is used.

Based on [BlankSlate](https://github.com/webguyio/blankslate) (GPL).
License: GNU General Public License v3 or later.

---

# Pra Theme Clean — українською

Максимально голий старт для WordPress: чиста ієрархія PHP-шаблонів, один
стилевий файл, **нуль JavaScript, нуль тулінгу**. Активуй, заміни
ідентифікатори `pra-theme-clean` / `pra_clean_` / `Pra Theme Clean` на свої —
і будуй.

Потрібні defer-асети, безпека, PHPCS, CI і смоук-тест з коробки? Бери
повнішого брата: **[Pra Theme](https://github.com/prazdnikvova/pra-theme)**.

## Що всередині

- 16 PHP-шаблонів: без дублів `category.php`/`tag.php`/`author.php`
  (WordPress сам відкочується до `archive.php`), компактна сім'я `entry-*`,
  коментарі без trackback-легасі.
- `functions.php` — три невеликі функції: theme supports, один стиль з версією
  через `filemtime()` разом із comment-reply, skip link. Усе.
- `style.css`: шапка теми + кросбраузерний reset + a11y-хелпери.
- Всі рядки в gettext з доменом `pra-theme-clean`; viewport з `initial-scale=1`.

## Структура

| Шлях | Що робить |
|---|---|
| `style.css` | Шапка теми, кросбраузерний reset, класи ядра WordPress, a11y-хелпери |
| `functions.php` | Theme supports і локація меню, стиль, comment-reply, skip link |
| `header.php`, `footer.php` | Каркас документа: `<head>`, логотип і головне меню, `main#content`, рядок копірайту |
| `index.php`, `archive.php`, `search.php` | Списки записів з лінками «старіші / новіші» з `nav-below.php` |
| `single.php`, `page.php`, `404.php` | Запис з лінками «попередній / наступний» з `nav-below-single.php`, статична сторінка, сторінка 404 |
| `entry.php`, `entry-*.php` | Партіал запису: заголовок, дата й автор, вміст або уривок, рубрики й мітки |
| `comments.php` | Список коментарів, пагінація і форма |

## Як почати

1. Скопіюй теку в `wp-content/themes/` і перейменуй на свій слаг.
2. Заміни `pra-theme-clean` (text domain і хендл стилю), `pra_clean_` (префікс
   функцій) і `Pra Theme Clean` (назва), потім онови шапку `style.css`.
3. Активуй тему, признач меню локації Primary і задай логотип у Customizer.
4. Стилі проєкту пиши в `style.css` під хелперами. Якщо сторінці потрібні власні
   CSS чи JS, підключай їх у `pra_clean_enqueue()` лише там, де вони потрібні.

На базі [BlankSlate](https://github.com/webguyio/blankslate) (GPL).
Ліцензія: GNU General Public License v3 or later.

**Volodymyr Prazdnikov** — [LinkedIn](https://www.linkedin.com/in/volodymyr-prazdnikov-2516451ab/)
