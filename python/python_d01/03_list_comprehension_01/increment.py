#!/usr/bin/env python3

def increment(param):
    return [nb + 1 if isinstance(nb, int) else nb for nb in param]