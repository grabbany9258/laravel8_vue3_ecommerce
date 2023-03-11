require("./bootstrap");

import { createApp } from "vue";
import axios from "axios";
// import test from "./components/test.vue";
import AddToBasket from "./components/AddToBasket.vue";
const app = createApp({});
// app.component("test", test);
app.component("addtobasket", AddToBasket);
app.mount("#app");
