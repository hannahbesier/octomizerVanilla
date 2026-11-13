export function navbar() {
    const currentPath = window.location.pathname;
    document.querySelectorAll(".link").forEach(link => {
        if (link.pathname === currentPath) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
}