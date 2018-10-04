#!/usr/bin/env python3

import sys

def count(x):
    alpha = 0
    for i in x:
        if i.isalnum():
            alpha += 1
    return alpha

total = 0
for arg in sys.argv[1:]:
    total += count(arg)
print(total)
