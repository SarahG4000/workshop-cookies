const hello = 'Hello World'
// const name = "teste2";
document.cookie = 'cookie1=test; expires=Sun, 1 Jan 2023 00:00:00 UTC; path=/'
Set-Cookie : flavor=choco; SameSite=None; Secure

document.querySelector('#run').addEventListener('click', () => {
  console.log(hello)
})

document.querySelector('#creat').addEventListener('click', () => {
  $input = document.querySelector('#creatin').value

  alert($input)
  setCookie()

  function setCookie($name = 'test2', $inputvalue = $input, days) {
    if (days) {
      const date = new Date()
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000)
      var expires = '; expires=' + date.toGMTString()
    } else var expires = ''
    document.cookie = $name + '=' + $inputvalue + expires + '; path=/'
  }
})

document.querySelector('#read').addEventListener('click', () => {
  getCookie()
})

function getCookie($name = 'test2') {
  let nameEQ = $name + '='
  let ca = document.cookie.split(';')
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i]
    while (c.charAt(0) === ' ') c = c.substring(1, c.length)
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length)
  }
  return null
}

document.querySelector('#delete').addEventListener('click', () => {
  eraseCookie(($name = 'test2'))
})

function eraseCookie($name = 'test2') {
  setCookie($name, '', -1)
}
