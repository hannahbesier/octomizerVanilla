import { fetchHTML } from "./fetchHTML.js";
const routes = {
    "/": {
        "html": "/pages/home.html",
        "js": () => import("./pages/home.js")
    },
    "/login": {
        "html": "/pages/login.html",
        "js": () => import("./pages/login.js")
    },
    "/issueEdit": {
        "html": "/pages/issueEdit.html",
        "js": () => import("./pages/issueEdit.js")
    },
    "/issueBoard": {
        "html": "/pages/issueBoard.html",
    }
};
export async function navigate(path) {
    history.pushState({}, "", path);
    await initRouter();
}
export async function initRouter() {
    const path = window.location.pathname;
    await fetchHTML(routes[path].html, "child");
    const loadPage = routes[path];
    if (typeof loadPage.js !== "function") {
        return;
    }
    const page = await loadPage.js();
    if (page.init) {
        await page.init();
    }
};

window.addEventListener("popstate", initRouter);

