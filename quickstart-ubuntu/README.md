# quickstart-ubuntu
Getting start in Arukas wih Ubuntu

## Running locally

##### Public key authentication
```
$ git clone git@github.com:arukasio/docker-hub-images.git
$ cd docker-hub-images/quickstart-ubuntu
$ docker build --no-cache --tag quickstart-ubuntu .
$ docker run -d -e AUTHORIZED_KEY="`cat ~/.ssh/id_rsa.pub`" -P quickstart-ubuntu
```

##### username/password
If you want to use your original password instead of the default one: "root", you can
set the environment variable ROOT_PWD to your specific password when running the container:
```
$ git clone git@github.com:arukasio/quickstart-ubuntu.git
$ cd quickstart-ubuntu
$ docker build --no-cache --tag quickstart-ubuntu .
$ docker run -d -e ROOT_PWD="ubuntu" -P quickstart-ubuntu
```
And now you can ssh as root on the container’s IP address  on some port of Docker daemon's host IP address.

## Deploying to Arukas

[Install the Arukas CLI](https://github.com/arukasio/cli),

or If you have docker installed already,

##### Public key authentication
```
$ docker run --rm \
      -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
      -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
          arukasio/arukas run --instances=1 \
              --mem=512 \
              --envs AUTHORIZED_KEY="`cat ~/.ssh/id_rsa.pub`" \
              --ports=22:tcp \
                  arukasio/quickstart-ubuntu
```
##### username/password

For demonstration purpose, we’ll create a strong random password in here.
(We strongly recommend your to use a strong password in order to protect your application from crackers and other malicious attacks.)

```
$ YOUR_PWD=$(openssl rand -base64 48)
$ echo $YOUR_PWD
ytN+1FOAlUImG1Qkp9Zhps+mn9+dAomQF7aoJ4Htc3/cGpDylOTIm5IJ5VhNT+TO
```

```
$ docker run --rm \
      -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
      -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
          arukasio/arukas run --instances=1 \
              --mem=512 \
              --ports=22:tcp \
                  arukasio/quickstart-ubuntu \
                      -e ROOT_PWD=$YOUR_PWD
```

## License

This project is licensed under the terms of the MIT license.

**Continue with this tutorial [here](https://arukas.io/tutorials/tutorials-ubuntu/).**

