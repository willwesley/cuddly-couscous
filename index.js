const http = require('http')
const mysql = require('mysql2/promise')

http.createServer((request, response) => {
  console.log(request.url)
  const [path, query] = request.url.split('?')
  console.log(path)
  console.log(query)
  switch(path) {
    case '/booklist':
      console.log(query)
      if(query) {
        const search = query.split('=')
        console.log(search[0])
        mysql.createConnection('mysql://root:password@mysql/db34')
          .then((dbconn) => dbconn.execute('SELECT * FROM booklist WHERE year = ?', [search[1]]))
          .then((result) => {
            response.writeHead(200, { 'Content-Type': 'application/json' })
            response.end(JSON.stringify(result))
          })
      } else {
        mysql.createConnection('mysql://root:password@mysql/db34')
          .then((dbconn) => dbconn.execute('SELECT * FROM booklist'))
          .then((result) => {
            response.writeHead(200, { 'Content-Type': 'application/json' })
            response.end(JSON.stringify(result))
          })
      }
      break;
    case '/':
      response.writeHead(200, { 'Content-Type': 'application/json' })
      response.end(JSON.stringify({ msg: "Omg, Hi! How are you?"}))
      break;
    default:
      response.writeHead(404)
      response.end()
      console.log(request.url)
  }
}).listen(5000)

