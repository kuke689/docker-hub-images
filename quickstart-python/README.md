# quickstart-python
A simple Python app ( using [Flask](http://flask.pocoo.org/): a microframework for Python based on Werkzeug, Jinja 2. ) which can easily be deployed to Arukas.

## Running locally

```
$ git clone git@github.com:arukasio/docker-hub-images.git
$ cd docker-hub-images/quickstart-python
$ docker build --no-cache --tag quickstart-python .
$ docker run -d -p 80:80 quickstart-python
```

Your app should now be running:

```
$ curl 192.168.59.103:80
Hello World!
```

## Deploying to Arukas

[Install the Arukas CLI](https://github.com/arukasio/cli),

or If you have docker installed already, try
```
$ docker run --rm -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
                  -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
                    arukasio/arukas run --instances=1 \
                                        --mem=512 \
                                        --ports=80:tcp arukasio/quickstart-python
```

## License

This project is licensed under the terms of the MIT license.

**Continue with this tutorial [here](https://arukas.io/tutorials/tutorials-python/).**
