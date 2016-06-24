# arukasio/hello-world

"Hello, World!"

## Running locally

```
$ git clone git@github.com:arukasio/docker-hub-images.git
$ cd docker-hub-images/hello-world
$ docker-compose up
```

## Deploying to Arukas

[Install the Arukas CLI](https://github.com/arukasio/cli),

or If you have docker installed already,
```
$ docker run
    --rm
    -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
    -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
    arukasio/arukas run --instances=1 --mem=256 --ports=80:tcp arukasio/hello-world
```

## License

This project is licensed under the terms of the MIT license.
