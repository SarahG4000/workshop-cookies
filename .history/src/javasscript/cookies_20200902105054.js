const hello = 'Hello World'

document.cookie =
  'cookie1=test1; expires=Sun, 1 Jan 2023 00:00:00 UTC; path=/; SameSite=None; Secure'
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
    date.setTime(date.getTime() + days)
    var expires = '; expires=' + date.toGMTString()
  } else var expires = ''

  document.cookie =
    $name + '=' + $inputvalue + expires + '; path=/ ; SameSite=None; Secure'
}

document.querySelector('#read').addEventListener('click', () => {
  const allcookies = document.cookie
  alert(allcookies)
})

document.querySelector('#delete').addEventListener('click', () => {
  eraseCookie(($name = 'test2'))
})

function eraseCookie($name = 'test2') {
  setCookie($name, '', -1)
}
