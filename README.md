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
- `functions.php` under 40 lines: theme supports, one stylesheet enqueued with
  a `filemtime()` version, comment-reply, a skip link. That's all.
- `style.css`: theme header + cross-browser reset + accessibility helpers.
- Every string in gettext with the `pra-theme-clean` text domain;
  viewport with `initial-scale=1`.

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
- `functions.php` до 40 рядків: theme supports, один стиль з версією через
  `filemtime()`, comment-reply, skip link. Усе.
- `style.css`: шапка теми + кросбраузерний reset + a11y-хелпери.
- Всі рядки в gettext з доменом `pra-theme-clean`; viewport з `initial-scale=1`.

На базі [BlankSlate](https://github.com/webguyio/blankslate) (GPL).
Ліцензія: GNU General Public License v3 or later.

**Volodymyr Prazdnikov** — [LinkedIn](https://www.linkedin.com/in/volodymyr-prazdnikov-2516451ab/)
