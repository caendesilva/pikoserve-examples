# A simple example to showcase the Request class

Make a request specifying `x` and `y` as parameters:

```
HTTP GET: http://localhost/?x=5&y=3
```

You'll then get a response with the sum of the two numbers:

```
HTTP/1.1 200 OK
Content-Type: application/json
{"result": 8}
```
