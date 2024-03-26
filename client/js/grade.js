const searchStudent = document.querySelector("#searchStudent");
const searchBar = document.querySelector("#searchBar");
const studentName = document.querySelector("#studentName");
const strandName = document.querySelector("#strandName");
const sectionName = document.querySelector("#sectionName");
const gradeLevel = document.querySelector("#gradeLevel");
const subjectDiv = document.querySelector("#subjectDiv");
const addGradeButton = document.querySelector("#addGradeButton");
const subjectList = document.querySelector("#subjectList");
const subjectGrade = document.querySelector("#subjectGrade");
let subjectArray = [];

searchStudent.addEventListener("input", (event) => {
    if (event.target.value === "") {
        searchBar.classList.add("hidden");
        searchBar.classList.remove("block");
        studentName.value = "";
        strandName.value = "";
        sectionName.value = "";
        gradeLevel.value = "";

        subjectDiv.classList.remove("block");
        subjectDiv.classList.add("hidden");
    } else {
        fetch(`/client/api/get_suggestions.php?query=${event.target.value}`)
            .then(response => response.json())
            .then(data => {
                searchBar.innerHTML = "";
                if (data.length > 0) {
                    data.forEach((suggestion, index) => {
                        const suggestionDiv = document.createElement("div");
                        suggestionDiv.classList.add("p-5", "border-b", "borde-b-slate-200", "cursor-pointer", "hover:bg-slate-100");
                        suggestionDiv.innerHTML = `
                            <h3>${suggestion.student_last_name}, ${suggestion.student_first_name} ${suggestion.student_middle_name.substring(0, 1)}.</h3>
                            <small>LRN: #${suggestion.learner_reference_number}</small>
                        `;

                        suggestionDiv.onclick = () => {
                            searchStudent.value = suggestion.learner_reference_number;
                            studentName.value = `${suggestion.student_last_name}, ${suggestion.student_first_name} ${suggestion.student_middle_name.substring(0, 1)}`;
                            strandName.value = suggestion.strand_name;
                            sectionName.value = suggestion.section_name;
                            gradeLevel.value = suggestion.gradeLevel;
                            searchBar.classList.add("hidden");
                            searchBar.classList.remove("block");

                            fetch(`/client/api/get_subject.php?query=${suggestion.strand_id}`)
                                .then(res => res.json())
                                .then(data => {
                                    createElementDiv(data);
                                });

                            subjectDiv.classList.remove("hidden");
                            subjectDiv.classList.add("block");
                        }

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

addGradeButton.addEventListener("click", () => {
    if (subjectList.value !== "" && subjectGrade.value !== "") {
        const subjectId = subjectList.value;
        const subjectIndex = subjectArray.findIndex(subject => subject.subject_id === subjectId);
        const selectedSubject = subjectArray.find(subject => subject.subject_id === subjectId);
        if (subjectIndex !== -1) {
            subjectArray.splice(subjectIndex, 1);
            
            const subjectDiv = document.querySelector("#gradedDiv");
            const divElement = document.createElement("div");
            divElement.setAttribute("class", "py-2 flex items-end gap-2 justify-between");
            divElement.innerHTML = `<div class="flex flex-col gap-2 w-full">
                <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" value="${selectedSubject.subject_name}" type="text" disabled>
            </div>
            <div class="flex flex-col gap-2 w-full">
                <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" value="${subjectGrade.value}" type="text">
            </div>`;

            subjectDiv.appendChild(divElement);

            const optionToRemove = subjectList.querySelector(`option[value="${subjectId}"]`);
            if (optionToRemove) {
                optionToRemove.remove();
            }

        } else {
            console.log("Subject not found in the array");
        }
    } else {
        alert("Please select subject and grade");
    }
});


// function for creating an option
const createElementDiv = (event) => {
    console.log(event);
    const subjectDiv = document.querySelector("#subjectList");
    subjectDiv.innerHTML = "";
    subjectDiv.innerHTML = "<option value='' selected>Select Subject</option>";

    event.forEach((subject) => {
            const option = document.createElement("option");
            option.textContent = subject.subject_name;
            option.value = subject.subject_id;
            subjectDiv.appendChild(option);
            subjectArray.push({ subject_id: subject.subject_id, subject_name: subject.subject_name });
    });
}
