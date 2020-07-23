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
