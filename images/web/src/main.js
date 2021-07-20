import { createApp } from 'vue';
import App from './App.vue';
import runtime from "serviceworker-webpack-plugin/lib/runtime";
import { registerCore } from '@grapecity/wijmo.vue2.core';
import { registerInput } from '@grapecity/wijmo.vue2.input';

const app = createApp(App)
registerCore(app);  // register all components and directives from @grapecity/wijmo.vue2.core module
registerInput(app); // register all components and directives from @grapecity/wijmo.vue2.input module


// create service worker (to work off-line)
if ("serviceWorker" in navigator) {
  try {
    runtime.register();
    console.log("serviceWorker registered");
  } catch (error) {
    console.log("serviceWorker failed to register");
  }
}
app.mount('#app');