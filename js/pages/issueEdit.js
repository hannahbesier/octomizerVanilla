export async function init() {
    const { default: getIssue } = await import("../getIssue.js");
    await getIssue();
}