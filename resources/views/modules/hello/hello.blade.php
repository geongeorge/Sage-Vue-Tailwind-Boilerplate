<div id="module-hello">
    <div class="bg-gray-200 p-3">
        <p class="text-lg">@{{ name }}</p>
        <p>Hello <span v-text="name"></span>!</p>
        <br>
        <input type="text" v-model="name">
    </div>
</div>