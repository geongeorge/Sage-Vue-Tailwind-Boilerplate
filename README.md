# Sage - Vue - Tailwind Boilerplate

- Sage 9.0.9
- Vue js 2.6.11
- Tailwind 1.5.2

## Config

Edit Sage config in `resources/assets/config.json`

```json
"publicPath": "/wp-content/themes/sage",
"devUrl": "http://wordpress.test",
```

## Install

    composer install

    yarn

## Dev Server

    yarn start

## Build

    yarn build

## Theme name

Edit theme name in `resources/style.css`

## Vue js

- Create a module folder in `resources/views/modules`
- Create a `.vue.js` file and initialize Vue there
- Create a blade file
- Use `id` to link the vue instance with the blade html

`modules/counter/counter.blade.php`

```html
<div id="counter-module">
  @{{count}}
  <button @click="count++">+</button>
</div>
```

`modules/counter/counter.vue.js`

```js
import Vue from 'vue'

new Vue({
    el: '#counter-module',
    data: {
        count: : 0
    },
})
```

### Vue interpolations

Unfortunately, default Vue text interpolation syntax `{{ someVariable }}` will not work. This is because it conflicts with blade templating syntax.

The alternative is to use either of these

**`@` to escape blade**

```html
<p>@{{ someVariable }}</p>
```

**`v-text`**

```html
<p v-text="someVariable"></p>
```

## Deploy

Read the [guide on roots.io](https://roots.io/docs/sage/9.x/deployment/)

# WordPress Customize Settings

## Set a Customizer setting

Create a php file in `app/Customizers`. Any php file in it will be **auto loaded** in **alphabetic order**.

So you can optionally prepend filenames with numbers
eg: `001.Home.php`, `002.About.php`

**\$wp_customize** should be available in each of the files.

See `app/Customizers/001.Home.php` for example

## Fetch a Customizer setting - getMod() Helper

You can call the `\App\getMod()` helper to get theme mod variables as an array.

**Input**: Pass in an array with object elements each having `name`, `setting` and `default`

```php
$hero = \App\getMod([
      [
        'name' => 'title',
        'setting' => 'hero_title',
      ],
      [
        'name' => 'subtitle',
        'setting' => 'hero_subtitle',
        'default' => '',
      ])
// Output ->
$hero = [
    'title' : 'Value of title',
    'subtitle' : 'Value of subtitle (if empty default value)'
]

```

See `./app/Controllers/App.php` for example usage
