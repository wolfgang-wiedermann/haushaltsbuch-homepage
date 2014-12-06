#!/bin/bash
#
# Alte Inhalte löschen
#
rm ./build/*.html
rm ./build/.htaccess
#
# Generieren der Seite
#
php index.php > ./build/index.html
php installation.php > ./build/installation.html
php impressum.php > ./build/impressum.html
php erste_schritte.php > ./build/erste_schritte.html
php technisches.php > ./build/technisches.html
php kontenplan_howto.php > ./build/kontenplan_howto.html
cp htaccess ./build/.htaccess
