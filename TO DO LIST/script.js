  function add() {
    let task = document.getElementById("task");
    const taskinput = task.value.trim();

    if (taskinput === "") return;

    let li = document.createElement("li");
    li.textContent = taskinput;

    let now = new Date();
    let datestr = now.toLocaleString();
  li.innerHTML = taskinput + "\n\n<br><small>Added on:<br> " + datestr + "</small>";
  

    let removebtn = document.createElement("button");
    removebtn.textContent = "Remove";

    removebtn.onclick = function () {
      li.remove();
    };

    li.appendChild(removebtn);
    document.getElementById("taskList").appendChild(li);

    task.value = "";
  }

  let demo = document.getElementById("taskList");

  function clearall() {
    demo.innerHTML = "";
  }
