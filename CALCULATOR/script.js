const display = document.getElementById("display");
const allButtons = document.querySelectorAll("input[data-value]");
const clearBtn = document.getElementById("ac");
const deleteBtn = document.getElementById("de");
const equalsBtn = document.getElementById("equals");


allButtons.forEach(button => {
  button.addEventListener("click", () => {
    const value = button.getAttribute("data-value");
    display.value += value;
  });
});

clearBtn.addEventListener("click", () => {
  display.value = "";
});

deleteBtn.addEventListener("click", () => {
  display.value = display.value.slice(0, -1);
});


equalsBtn.addEventListener("click", () => {
  try {
    display.value = eval(display.value);
  } catch {
    display.value = "Error";
  }
});


document.addEventListener("keydown", (event) => {
  const key = event.key;
  const validKeys = ['0','1','2','3','4','5','6','7','8','9','+','-','*','/','%','.','(',')'];

  if (validKeys.includes(key)) {
    display.value += key;
  } 
  else if (key === "Backspace") {
    display.value = display.value.slice(0, -1);
  } 
  else if (key === "Enter" || key === "=") {
    try {
      display.value = eval(display.value);
    } catch {
      display.value = "Error";
    }
  } 
  else if (key === "Escape") {
    display.value = "";
  }
});
