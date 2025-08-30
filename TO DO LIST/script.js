function add() {
  let task = document.getElementById("task");
  const taskinput = task.value.trim();

  if (taskinput === "") return;

  let li = document.createElement("li");

  let now = new Date();
  let datestr = now.toLocaleString();
  li.innerHTML = taskinput + "\n\n<br><small>Added on:<br> " +datestr + "</small>";
  // li.innerHTML = taskinput ;


  let removebtn = document.createElement("button");
  removebtn.textContent = "-";
  removebtn.onclick = function () {
    li.remove();
    saveTask();
  };

  let checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  li.prepend(checkbox);

  checkbox.onchange = function () {
    if (checkbox.checked) {
      li.style.textDecoration = "line-through ";
      li.classList.remove("pending");
      li.classList.add("completed");
    } else {
      li.style.textDecoration = "none";
          // li.classList.remove("completed");
          // li.classList.add("pending");
    }
  };

  li.appendChild(removebtn);
  document.getElementById("taskList").appendChild(li);

  task.value = "";
 
  li.classList.add("pending");
}

let demo = document.getElementById("taskList");

function clearall() {
  demo.innerHTML = "";
  
}



let task = document.getElementById("task");


task.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    add();
  }
})

document.getElementById("pendingbtn").onclick = function () {
  filterTasks("pending");
};

document.getElementById("completedbtn").onclick = function () {
  filterTasks("completed");
};

function filterTasks(status) {
  let tasks = document.querySelectorAll("#taskList li");
  tasks.forEach(function (li) {
    if (li.classList.contains(status)) {
      li.style.display = "";
    } else {
      li.style.display = "none";
    }
  });
}

document.getElementById("allbtn").onclick = function () {
  showAllTasks();
};

function showAllTasks() {
  let tasks = document.querySelectorAll("#taskList li");
  tasks.forEach(function (li) {
    li.style.display = "";
  });
}

