#!/usr/bin/env python3

def my_args_handler(*param):

    return ', '.join([str(x) for x in param])
