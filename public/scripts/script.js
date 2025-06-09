const form = document.querySelector("form");
const input = document.querySelector('input[name="task"]');
const list = document.querySelector(".task-list");

form.addEventListener("submit", function (event) {
  event.preventDefault();
  const taskText = input.value.trim();
  if (taskText === "") return;

  const li = document.createElement("li");

  const span = document.createElement("span");
  span.textContent = taskText;

  const doneBtn = document.createElement("input");
  doneBtn.type = "checkbox";
  doneBtn.classList.add("done-btn");
  doneBtn.onclick = () => li.classList.toggle("task-done");

  // Кнопка удаления
  const deleteBtn = document.createElement("button");
  deleteBtn.textContent = "✖";
  deleteBtn.classList.add("delete-btn");
  deleteBtn.onclick = () => li.remove();

  // Добавляем всё в li
  li.appendChild(doneBtn);
  li.appendChild(span);
  li.appendChild(deleteBtn);

  list.appendChild(li);
  input.value = "";
});

// const listItem = event.target.closest("li");
// const taskParagrapf = listItem.querySelector(".para");
// // Add a class to mark the task as done
// taskParagrapf.classList.toggle("task-done");
// listItem.classList.toggle("li-done");
