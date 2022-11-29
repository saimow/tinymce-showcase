import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'

import Editor from '@tinymce/tinymce-vue'

const app = createApp({})

app.component('Editor', Editor)

app.mount('#app')