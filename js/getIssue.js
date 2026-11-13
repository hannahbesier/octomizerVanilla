export default async function getIssue() {
    const issueName = document.getElementById("issueName");
    const issueMarkdown = document.getElementById("issueMarkdown");

    try {
        const response = await fetch("../server/getIssue.php");

        if (!response.ok) {
            throw new Error("No php response");
        }

        const issue = await response.json();

        console.log(issue);

        issueName.textContent = issue.name;
        if (issueMarkdown) {
            issueMarkdown.textContent = issue.markdown;
        }
    } catch (error) {
        console.error("Server error:", error);
    }
}