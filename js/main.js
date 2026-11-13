import { navbar } from "./components/navbar.js";
import { navigate, initRouter } from "./router.js";
import { fetchHTML } from "./fetchHTML.js";

await fetchHTML("/components/header.html", "header");
await fetchHTML("/components/navbar.html", "navbar");

navbar();

document.addEventListener("click", (event) => {
    const link = event.target.closest("[link]");
    if (!link) return;
    event.preventDefault();
    const path = link.getAttribute("href");
    navigate(path);
    navbar();
})
initRouter();