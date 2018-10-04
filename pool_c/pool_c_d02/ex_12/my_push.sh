#!/bin/bash
if [ $# -eq 0 ]
then echo "No commit message. no add and no push."
else
    firstarg=$1
    if [ $# -eq 1 ]
    then
	git add --all
    else
        shift
	git add $*
    fi
git commit -m $firstarg
git push origin master
fi
