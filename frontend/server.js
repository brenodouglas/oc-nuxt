const Nuxt = require('nuxt')
const app = require('express')()
const proxy = require('express-http-proxy');
const cors = require('cors');

const port = process.env.PORT || 3000

// We instantiate Nuxt.js with the options
let config = require('./nuxt.config.js')
const nuxt = new Nuxt(config)

app.use(cors());
app.use('/proxy', proxy('apache:8080'))

app.use(nuxt.render)
// Build only in dev mode
if (config.dev) {
  nuxt.build()
  .catch((error) => {
    console.error(error)
    process.exit(1)
  })
}

// Listen the server
app.listen(port, '0.0.0.0')
console.log('Server listening on localhost:' + port)
