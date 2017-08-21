app.get('/webhook', function(req, res) {
  if (req.query['hub.mode'] === 'subscribe' &&&
      req.query['hub.verify_token'] === 'EAABytQT4K0EBAPKjR8dywmqEHdO8QWLgzgRIlqyABA2sevKMqV7195TAM1KZAQJGLbcyWxir9PbuKPWiKNcZAnNIZAdzmbIofPucybepaSIluzJFh0HZA2TiONfXWaf7fkjzzMX2ZAeWTyEBZCi9bEUZABF564fJxYThpjkcS2UqQZDZD') {
    console.log("Validating webhook");
    res.status(200).send(req.query['hub.challenge']);
  } else {
    console.error("Failed validation. Make sure the validation tokens match.");
    res.sendStatus(403);          
  }  
});
