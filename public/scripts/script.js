const form = document.querySelector("form");
const input = document.querySelector('input[name="task"]');
const list = document.querySelector(".task-list");

let tasks = [];

window.addEventListener("DOMContentLoaded", () => {
  const saved = localStorage.getItem("tasks");
  tasks = saved ? JSON.parse(saved) : [];
  tasks.forEach(renderTask);
});

form.addEventListener("submit", function (event) {
  event.preventDefault();
  const taskText = input.value.trim();
  if (taskText === "") return;

  const task = {
    text: taskText,
    done: false,
  };

  tasks.push(task);
  saveTasks();
  renderTask(task);
  input.value = "";
});

function renderTask(task) {
  const li = document.createElement("li");

  const span = document.createElement("span");
  span.textContent = task.text;
  if (task.done) {
    span.classList.add("task-done");
    li.classList.add("li-done");
  }

  const doneBtn = document.createElement("input");
  doneBtn.type = "checkbox";
  doneBtn.classList.add("done-btn");
  doneBtn.checked = task.done;

  doneBtn.addEventListener("click", function () {
    task.done = !task.done;
    span.classList.toggle("task-done");
    li.classList.toggle("li-done");
    saveTasks();
  });

  const deleteBtn = document.createElement("button");
  deleteBtn.textContent = "✖";
  deleteBtn.classList.add("delete-btn");
  deleteBtn.addEventListener("click", function () {
    li.remove();
    tasks = tasks.filter((t) => t !== task); // удаление из массива
    saveTasks();
  });

  li.appendChild(doneBtn);
  li.appendChild(span);
  li.appendChild(deleteBtn);
  list.appendChild(li);
}

function saveTasks() {
  localStorage.setItem("tasks", JSON.stringify(tasks));
}
