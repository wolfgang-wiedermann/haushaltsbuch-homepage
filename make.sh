#!/bin/bash
#
# Generieren der Seite
#
php index.php > ./build/index.html
php installation.php > ./build/installation.html
php impressum.php > ./build/impressum.html
php erste_schritte.php > ./build/erste_schritte.html
php technisches.php > ./build/technisches.html
