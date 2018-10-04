#!/usr/bin/env python3

def display_all(param):
    for i, elt in enumerate(param):
        print("[{}]->([{}]:[{}])".format(i, type(elt).__name__, elt))