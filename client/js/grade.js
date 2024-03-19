const searchStudent = document.querySelector("#searchStudent");
const searchBar = document.querySelector("#searchBar");

searchStudent.addEventListener("input", (event) => {
    if (event.target.value === "") {
        searchBar.classList.add("hidden");
        searchBar.classList.remove("block");
    } else {
        fetch(`/client/api/get_suggestions.php?query=${event.target.value}`)
            .then(response => response.json())
            .then(data => {
                searchBar.innerHTML = "";
                if (data.length > 0) {
                    data.forEach(suggestion => {
                        const suggestionDiv = document.createElement("div");
                        suggestionDiv.classList.add("p-5", "border-b", "borde-b-slate-200");
                        suggestionDiv.innerHTML = `
                            <h3>${suggestion.student_last_name}, ${suggestion.student_first_name} ${suggestion.student_middle_name.substring(0, 1)}.</h3>
                            <small>LRN: #${suggestion.learner_reference_number}</small>
                        `;
                        searchBar.appendChild(suggestionDiv);
                    });
                } else {
                    searchBar.innerHTML = "<div class='text-center text-slate-400'>No data</div>";
                }
            })
            .catch(error => {
                console.error('Error fetching suggestions:', error);
            });
        searchBar.classList.add("block");
        searchBar.classList.remove("hidden");
    }
});
