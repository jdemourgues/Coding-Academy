#!/bin/bash
set -e
blih -u jerome.de-mourgues@coding-academy.fr repository create $1
blih -u jerome.de-mourgues@coding-academy.fr repository setacl $1 ramassage-tek r
blih -u jerome.de-mourgues@coding-academy.fr repository setacl $1 gecko r
git  clone git@git.epitech.eu:/jerome.de-mourgues@coding-academy.fr/$1
