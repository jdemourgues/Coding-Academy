#!/usr/bin/env python3
# -*- coding: utf-8 -*-

def shows(param):
    ma_liste = list()
    for key, value in param.items():
        ma_liste.append("{} => ({}: {})".format(key, type(value).__name__, value))
    print(*ma_liste, sep='\n')
