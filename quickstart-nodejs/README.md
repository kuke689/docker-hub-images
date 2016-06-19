# quickstart-nodejs
A simple Node.js app ( using [Express.js](http://expressjs.com/): Fast, unopinionated, minimalist web framework.) which can easily be deployed to Arukas.

## Running locally

```
$ git clone git@github.com:arukasio/docker-hub-images.git
$ cd quickstart-nodejs
$ docker build --no-cache --tag quickstart-nodejs .
$ docker run -d -p 3000:3000 quickstart-nodejs
```

Your app should now be running:

```
$ curl 192.168.59.103:3000
Hello World!
```

## Deploying to Arukas

[Install the Arukas CLI](https://github.com/arukasio/cli),

or If you have docker installed already,
```
$ docker run \
    --rm \
    -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
    -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
    arukasio/arukas run --instances=1 --mem=512 --ports=3000:tcp arukasio/quickstart-nodejs
```

## License

This project is licensed under the terms of the MIT license.

**Continue with this tutorial [here](https://arukas.io/tutorials/tutorials-nodejs/).**
