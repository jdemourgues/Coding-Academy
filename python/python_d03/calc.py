#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#
#  Programme My_Calc.py by jdemourgues
#  Created 2017-12-14 11:45 - Last Modified 2017-12-14 14:15
#  Démonstration du language

from tkinter import *

class MyCalc:

    def __init__(self):
        self.calc = Tk()
        self.calc.title("Ma Calculatrice")
        self.calc.resizable(width=False, height=False)
        self.calcMethod = CalcMethod(self.calc)
        self.calcView = CalcView(self.calc, self.calcMethod)
        self.calc.mainloop()

class CalcView:

    # Constructeur de la view de ma calculatrice

    def __init__(self, go, calcMethod):
        self.calc = go
        self.ecran = Frame(go)
        self.clavier = Frame(go)
        self.ecran.pack()
        self.clavier.pack()
        self.screenTxt = StringVar()
        self.text = ' '
        self.CreateCalc(calcMethod)

    # ======================================================
    # Création du clavier
    def CreateCalc(self, calcMethod):
#        _r = 4
#        _c = 5
        _w = 5
        _h = 3
#        i = 0
#        j = 0
        self.screenTxt = "0"
        _bgcolor = "wheat"


# Table des touches =========================================

# ===========================================================

        # while i < _r:
        #     j = 0
        #     while j < _c:
        #         self.btn1 = Button(self.clavier, text=" sin ", bg=_bgcolor, width=_w, height=_h)
        #         self.btn1.grid(row=i, column=j)
        #         j += 1
        #     i += 1


        # Ligne 1
        self.btn1 = Button(self.clavier, text=" sin ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=1, column=1)
        self.btn1 = Button(self.clavier, text=" Cos ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=1, column=2)
        self.btn1 = Button(self.clavier, text=" Tg ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=1, column=3)
        self.btn1 = Button(self.clavier, text=" Hex ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=1, column=4)
        self.btn1 = Button(self.clavier, text=" Oct ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row = 1, column = 5)

        # Ligne 2
        self.btn1 = Button(self.clavier, text=" bin ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=2, column=1)
        self.btn1 = Button(self.clavier, text=" ^ ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=2, column=2)
        self.btn1 = Button(self.clavier, text=" C ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=2, column=3)
        self.btn1 = Button(self.clavier, text=" Ce ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=2, column=4)
        self.btn1 = Button(self.clavier, text=" / ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=2, column=5)

        # Ligne 3
        self.btn1 = Button(self.clavier, text=" Mc ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=3, column=1)
        self.btn1 = Button(self.clavier, text=" 7 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=3, column=2)
        self.btn1 = Button(self.clavier, text=" 8 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=3, column=3)
        self.btn1 = Button(self.clavier, text=" 9 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=3, column=4)
        self.btn1 = Button(self.clavier, text=" X ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=3, column=5)

        # Ligne 4
        self.btn1 = Button(self.clavier, text=" Mr ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=4, column=1)
        self.btn1 = Button(self.clavier, text=" 4 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=4, column=2)
        self.btn1 = Button(self.clavier, text=" 5 ", bg=_bgcolor, width=_w, height=_h, command=calcMethod.clickButton("5"))
        self.btn1.grid(row=4, column=3)
        self.btn1 = Button(self.clavier, text=" 6 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=4, column=4)
        self.btn1 = Button(self.clavier, text=" - ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=4, column=5)

        # Ligne 5
        self.btn1 = Button(self.clavier, text=" M- ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=5, column=1)
        self.btn1 = Button(self.clavier, text=" 1 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=5, column=2)
        self.btn1 = Button(self.clavier, text=" 2 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=5, column=3)
        self.btn1 = Button(self.clavier, text=" 3 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=5, column=4)
        self.btn1 = Button(self.clavier, text=" + ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=5, column=5)

        # Ligne 6
        self.btn1 = Button(self.clavier, text=" M+ ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=6, column=1)
        self.btn1 = Button(self.clavier, text=" 0 ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=6, column=2)
        self.btn1 = Button(self.clavier, text=" . ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=6, column=3)
        self.btn1 = Button(self.clavier, text="+/-", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=6, column=4)
        self.btn1 = Button(self.clavier, text=" = ", bg=_bgcolor, width=_w, height=_h)
        self.btn1.grid(row=6, column=5)

# --------------------------------------Frame d'affichage----------------------------------------
        self.Screen = Label(self.ecran, width=42, height=4, bg='palegoldenrod', textvariable=self.screenTxt)
        self.Screen.grid(row=0, column=0, sticky='WE')


# -------------------------------------------------------
# Zone des fonctions
class CalcMethod:

    def __init__(self, tk):
        self.tk = tk

    def clickButton(self, value):
        self.tk.screenTxt.set(self.tk.screenTxt.get() + value)



#class CalcController:



# Saisie des chiffres
#        def inputNbr(self, btnText):
#        self.screenTxt.set(self.screenTxt.get() + btnText)


# -------------------------------------------------------
# Zone d'Affichage'
# -------------------------------------------------------

# Gestion des entrées
# Entrée clavier
# Entrée souris

# Gestion des sorties

# Gestion de la mémoire

# Calculs


if __name__ == '__main__':
    calc = MyCalc()