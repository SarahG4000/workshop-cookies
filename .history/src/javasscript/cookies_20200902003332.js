const hello = "Hello World";
const name = "teste2";

document.querySelector("#run").addEventListener("click", () => {
  console.log(hello);
});

document.querySelector("#creat").addEventListener("click", () => {
  const input = document.querySelector("#creatin").value;

  alert(input);
  createCookie();
});

function createCookie(name, input, days) {
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    var expires = "; expires=" + date.toGMTString();
  } else var expires = "";
  document.cookie = name + "=" + input + expires + "; path=/";
}

function readCookie(name) {
  let nameEQ = name + "=";
  let ca = document.cookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name, "", -1);
}
