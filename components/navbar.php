<style>
    #navbar {
        display: flex;
        padding-left: 2rem;
        padding-right: 2rem;
        height: 2.5rem;
        background-color: var(--secondary-bg-color);
        box-shadow: 1px 1px 2px #b8b8b8;
        margin-left: 2rem;
        margin-right: 2rem;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px;
    }

    .link {
        display: flex;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        height: 100%;
        align-items: center;
    }

    .link:hover {
        background-color: var(--hover-bg-color);
    }

    .link.active {
        border-bottom: 2px solid var(--primary-bg-color);
    }
</style>
<div id="navbar">
    <a class="link" href="index.php">Home</a>
    <a class="link" href="issueboard.php">Issue board</a>
    <a class="link" href="myIssues.php">My issues</a>
    <a class="link" href="projects.php">Projects</a>
</div>
<script>
    const currentPath = window.location.pathname;
    document.querySelectorAll(".link").forEach(link => {
        if (link.pathname === currentPath) {
            link.classList.add("active");
        }
    });
</script>