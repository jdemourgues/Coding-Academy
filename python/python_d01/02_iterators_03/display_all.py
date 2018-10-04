#!/usr/bin/env python3

def display_all(param):
    for cle, elt in param.items():
        print("[{}]->([{}]:[{}])".format(cle, type(elt).__name__, elt))


