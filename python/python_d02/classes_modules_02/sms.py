#!/usr/bin/env python3

from sendable import Sendable


class Sms(Sendable):
    def __init__(self, body, frm, to):
        super().__init__(self, body, frm, to))


# test = Sendable.Sms("azertqsdfgh", "jdm", "toto")
# print(Sendable.Sms.body)
print(Sendable.Sms.frm)
print(Sendable.Sms.to)