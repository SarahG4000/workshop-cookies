const hello = 'Hello World'
// const name = "teste2";
document.cookie =
  'cookie1=test; expires=Sun, 1 Jan 2023 00:00:00 UTC; path=/; SameSite=None; Secure'
// Set-Cookie : flavor=choco; SameSite=None; Secure

document.querySelector('#run').addEventListener('click', () => {
  console.log(hello)
})

document.querySelector('#creat').addEventListener('click', () => {
  $input = document.querySelector('#creatin').value

  alert($input)
  setCookie()
})

function setCookie($name = 'test2', $inputvalue = $input, days) {
  if (days) {
    const date = new Date()
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000)
    var expires = '; expires=' + date.toGMTString()
  } else var expires = ''
  document.cookie =
    $name + '=' + $inputvalue + expires + '; path=/ ; SameSite=None; Secure'
}

document.querySelector('#read').addEventListener('click', () => {
  $input = document.querySelector('#creatin').value
  const x = ''
  if ((x = readIt(($name = 'test2')))) {
    // Traitement de la valeur du cookie
    function readIt($name = 'test2', $inputvalue = $input) {
      alert('La valeur du cookie est : ' + $name + '' + $inputvalue)
    }
    // readCookie()
    readIt()
  }
})

document.querySelector('#delete').addEventListener('click', () => {
  eraseCookie(($name = 'test2'))
})

function eraseCookie($name = 'test2') {
  setCookie($name, '', -1)
}
