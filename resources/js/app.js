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
import HomePageCarrousel from "./components/HomePageCarrousel.vue";
import AdminLogin from "./components/AdminLogin.vue";

const app = createApp({});

app.component("language-change", LanguageChange);
app.component("logo-text", LogoText);
app.component("home-page-carrousel", HomePageCarrousel);
app.component("admin-login", AdminLogin);

const mountedApp = app.mount("#app");
