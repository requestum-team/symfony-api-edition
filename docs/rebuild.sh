#!/usr/bin/env bash
sudo chown -R $USER ../web/docs/
gulp build
sudo chown -R www-data:www-data ../web/docs/

