#!/usr/bin/env python3

import time

def display_time(param):
    return time.strftime("%H:%M:%S, %A, %w day of the %W week of %Y, %B", time.gmtime(param))