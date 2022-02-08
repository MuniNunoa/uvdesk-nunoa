#!/bin/bash

LETSENCRYPT_VOLUME_DIR=$PWD/certs/letsencrypt
DOMAIN="soporte.nunoa.cl"

sudo docker run \
  --interactive \
  --tty \
  --rm \
  --name certbot \
  -p 80:80 \
  -p 443:443 \
  -v "$LETSENCRYPT_VOLUME_DIR:/etc/letsencrypt" \
  certbot/certbot \
  certonly -d $DOMAIN --standalone
