const form = document.getElementById("task-form");
const input = document.getElementById("task-input");
const list = document.getElementById("task-list");

form.addEventListener("submit", function (e) {
  e.preventDefault(); // предотвращает перезагрузку

  const taskText = input.value.trim();
  if (taskText === "") return;

  const li = document.createElement("li");
  li.textContent = taskText;

  // Добавим кнопку удаления
  const deleteBtn = document.createElement("button");
  deleteBtn.textContent = "🗑";
  deleteBtn.onclick = () => li.remove();

  li.appendChild(deleteBtn);
  list.appendChild(li);

  input.value = ""; // очистить поле
});

console.log("NEw message");
