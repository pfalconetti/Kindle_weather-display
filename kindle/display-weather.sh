#!/bin/sh

cd "$(dirname "$0")"

rm output.png
eips -c
eips -c

if wget http://www.pierfilippo.net/kindlews/output.png;
    then
        eips -g output.png
    else
	    eips -g error.png
fi