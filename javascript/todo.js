const Todo = document.getElementById("Todo");
const addButton = document.getElementById("addButton");
const todolist = document.getElementById("todolist");

function addTodo() {
  //pick value of todo
  const todoValue = Todo.value;
  //create <li> element
  const list = document.createElement("li");
  //add the Todo value as text inside the <li> tags
  list.textContent = todoValue;
 //add listitem inside the todolist
  todoList.append(list);

  //Remove items
  list.addEventListener("click", function() {
     //list.remove();
      list.style.textDecoration = "line-through";
      list.style.color = "red";

  });

}
addButton.addEventListener("click", addTodo);