import './bootstrap';
import "bootstrap";// *
import { createApp } from "vue";//
// import App from "./App.vue";//

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// createApp(App).mount("#app");

import LanguageChange from "./components/LanguageChange.vue";
import LogoText from "./components/LogoText.vue";

const app = createApp({});

app.component("language-change", LanguageChange);
app.component("logo-text", LogoText);

const mountedApp = app.mount("#app");
