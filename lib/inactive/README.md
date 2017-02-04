[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

# _s

* A custom header implementation in `lib/php/custom-header.php`
  just add the code snippet found in the comments of `lib/php/custom-header.php` 
  to your `header.php` template.

* Custom template tags in `lib/php/template-tags.php` that keep your templates clean
  and neat and prevent code duplication.

* Some small tweaks in `lib/php/extras.php` that can improve your theming experience.

* A script at `js/navigation.js` that makes your menu a toggled dropdown on small
  screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.

* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.

---------------------

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in style.css.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.
