# pikoserve-examples
Various microservices built with Pikoserve. Please send a PR to add your own!

## Live demos:

### Ping:
Send a ping, get a pong!
Live link: https://demos.desilva.se/pikoserve/pikoserve-examples/ping/
Sample response:
```json
{"statusCode":200,"statusMessage":"OK","message":"Pong!","version":"1.0.2","time":1650639414}
```

### Calculator:
Get the sum of two numbers. Showcases the usage of the Request helper and how to add basic input validation.
Live link: https://demos.desilva.se/pikoserve/pikoserve-examples/calculator?x=5&y=3
```json
{"statusCode":200,"statusMessage":"OK","result":8}
```
