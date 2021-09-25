const config = {
  application: {
    cors: {
      server: [
        {
          origin: "127.0.0.1:8000",
          credentials: true
        },
        {
          origin: "http://fanclubweb.herokuapp.com",
          credentials: true
        },
        {
          origin: "http://fanclubweb.herokuapp.com/workarts",
          credentials: true
        },
        {
          origin: "http://fanclubweb.herokuapp.com/artists",
          credentials: true
        },
      ]
    }
  }
}

module.exports = config;