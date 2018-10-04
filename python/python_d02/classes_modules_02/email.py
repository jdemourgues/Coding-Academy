#!/usr/bin/env python3

from sendable import Sendable


class Email(Sendable):
    def __init__(self, body, subject, frm, to):
        Sendable.__init__(self, body=body, subject=subject, frm=frm, to=to)


test = Email("azert", "qsdfgh", "jdm", "toto")

# test.send()
print(test._body)
print(test._subject)
print(test._frm)
print(test._to)
test.send()