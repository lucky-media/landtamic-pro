import "@fontsource-variable/inter";
import AsyncAlpine from "async-alpine";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import resize from "@alpinejs/resize";
import { DarkMode } from "./core/";

window.Alpine = Alpine;

AsyncAlpine.init(Alpine);
AsyncAlpine.data("slider", () => import("./core/Slider.js")).start();

/* Alpine Plugins */
Alpine.plugin(collapse);
Alpine.plugin(resize);

/* Alpine Data Stores */
Alpine.data("darkMode", DarkMode);

Alpine.start();
