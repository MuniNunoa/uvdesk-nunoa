#!/bin/bash

LETSENCRYPT_VOLUME_DIR=$PWD/certs/letsencrypt
LETSENCRYPT_LOGS_DIR=$PWD/certs/letsencrypt/logs
DOMAIN="soporte.nunoa.cl"

sudo docker run \
  --interactive \
  --tty \
  --rm \
  --name certbot \
  -p 80:80 \
  -p 443:443 \
  -v "$LETSENCRYPT_VOLUME_DIR:/etc/letsencrypt" \
  -v "$LETSENCRYPT_LOGS_DIR:/var/log/letsencrypt" \
  certbot/certbot \
  certonly -d $DOMAIN --standalone
