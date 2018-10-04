#!/usr/bin/env python3

def display_all(param):
    for elt in param.values():
        print ("([{}]):[{}]".format(type(elt).__name__, elt))

