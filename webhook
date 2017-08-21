app.get('/webhook', function(req, res) {
  if (req.query['hub.mode'] === 'subscribe' &&
      req.query['hub.verify_token'] === EAABytQT4K0EBAKcog0ZCctr60S9elYlmmfll7jGJuX9WHtd3L5gpDGK6AKZCc8WFgptCc9prdVJ3OkV3wK04gPZA6zseg6GriReJcL2jvpy5P3MZA4O6itEMxXQ2qxdbnFUXPXe2F6gi5FNalfY6zhQHAtniZBgvcuwT9MnmINAZDZD) {
    console.log("Validating webhook");
    res.status(200).send(req.query['hub.challenge']);
  } else {
    console.error("Failed validation. Make sure the validation tokens match.");
    res.sendStatus(403);          
  }  
});
