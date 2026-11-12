<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navbar.php'; ?>
    <div class="container" style="padding-left:5rem; padding-right:5rem; display:flex; flex-direction:column; gap: 2rem;">
        <h1 style="color:var(--primary-bg-color)">Octomizer</h1>
        <div style="display:flex; flex-direction:column; align-items:center; gap: 2rem;">
            <button class="buttonPrimary" onclick="window.location.href='login.php'">Getting started</button>
            <button class="buttonPrimary" id="issueName" onclick="window.location.href='issueEdit.php'"></button>
        </div>
    </div>
</body>
<script>
    async function getIssue() {
        var issueName = document.getElementById("issueName");
        var issueMarkdown = document.getElementById("issueMarkdown");
        try {
            const response = await fetch("server/getIssue.php");
            if (!response.ok) {
                throw new Error("No php response");
            }
            const issue = await response.json();
            console.log(issue);
            issueName.textContent = issue.name;
            issueMarkdown.textContent = issue.markdown;
        } catch (error) {
            if (error) {
                console.log("Server error");
            }
        }
    }
    getIssue();
</script>

</html>