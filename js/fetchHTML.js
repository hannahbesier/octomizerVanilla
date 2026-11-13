export async function fetchHTML(file, id) {
  try {
    const response = await fetch(file);
    if (!response.ok) {
      throw new Error("HTML error");
    }
    const html = await response.text();

    document.getElementById(id).innerHTML = html;

  } catch (error) {
    console.log("HTML loading failed: " + error);
  }
}