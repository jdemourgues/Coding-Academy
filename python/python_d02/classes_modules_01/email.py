#!/usr/bin/env python3

import datetime

class Email:
    def __init__(self, body, subject, frm, to):
        self._body = body
        self._subject = subject
        self._from = frm
        self._to = to
        self._created_at = datetime.datetime.now()
        self._updated_at = datetime.datetime.now()
        self._sent_at = None

