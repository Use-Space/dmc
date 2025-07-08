import "../css/app.css";
import "./bootstrap";
import "primeicons/primeicons.css";
import "@fortawesome/fontawesome-free/css/all.css";

import { createInertiaApp } from "@inertiajs/vue3";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import { Head } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import Layout from "./Layouts/Layout.vue";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

import { definePreset } from "@primeuix/themes";
import PrimeVue from "primevue/config";
import Aura from "@primeuix/themes/aura";

const MyPreset = definePreset(Aura, {
    components: {
        accordion: {
            header: {
                padding: "1rem 0 0 0",
                fontWeight: "500",
                color: "",
            },
            panel: {
                borderColor: "transparent",
            },
            content: {
                padding: "1rem 0 0 1rem",
            },
        },
        menubar: {
            root: {
                borderColor: "none",
                background: "none",
                borderRadius: "none",
                padding: "0",
                gap: "1.2rem",
            },
            item: {
                color: "white",
            },
            submenu: {
                background: "#1d4ed8", // Change this to your desired submenu color
                color: "white",        // Optional: submenu text color
            },
        },
        tabs: {
            activeBar: {
                background: "#1d4ed8",
            },

            tab: {
                activeColor: "#1d4ed8",
            },
        },

        breadcrumb: {
            root: {
                background: "none",
            },
            item: {
                color: "white",
                hover: {
                    color: "none",
                },
                icon: {
                    color: "white",
                    hover: {
                        color: "none",
                    },
                },
            },
        },
    },
});

createInertiaApp({
    title: (title) => `DMC ${title}`,
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue, {
                theme: {
                    preset: MyPreset,
                    options: {
                        darkModeSelector: "none",
                    },
                },
            })
            .component("Head", Head)
            .component("Link", Link)
            .component("font-awesome-icon", FontAwesomeIcon)
            .mount(el);
    },
    progress: {
        color: "#1d4ed8",
    },
});
