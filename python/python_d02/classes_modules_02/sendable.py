#!/usr/bin/env python3

import datetime
import time


class Sendable:

    def __init__(self, body, subject, frm, to, sent_at=None):
        self._body = body
        self._subject = subject
        self._frm = frm
        self._to = to
        self._created_at = datetime.datetime.now()
        self._updated_at = datetime.datetime.now()
        self._sent_at = sent_at

    #        print (self._sent_at)

    def send(self):
        if self._sent_at is None:
            self._sent_at = datetime.datetime.now()
        else:
            raise Exception('DataAlreadySent')
        #        print("send")
        return self
