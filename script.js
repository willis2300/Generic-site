document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("fetchData").addEventListener("click", function () {
        fetch("https://jsonplaceholder.typicode.com/posts/1")
            .then(response => response.json())
            .then(data => {
                document.getElementById("dataDisplay").innerHTML = `<p><strong>${data.title}</strong>: ${data.body}</p>`;
            })
            .catch(error => console.error("Error fetching data:", error));
    });

    document.getElementById("toggleContent").addEventListener("click", function () {
        let content = document.getElementById("hiddenContent");
        content.classList.toggle("is-hidden");
    });
});
