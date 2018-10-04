#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#
#  Programme calcagg.py by jdemourgues
#  Created 2017-12-14 11:45 - Last Modified 2017-12-14 11:45
#  Démonstration du language


from tkinter import *

fenetre = Tk()
champ_label = Label(fenetre, width=60, text="La calculette à Jéjé")
champ_label.pack()

var_texte = StringVar()
ligne_texte = Entry(fenetre, textvariable=var_texte, width=30)
ligne_texte.pack()

var_case = IntVar()
case = Checkbutton(fenetre, text="Ne plus poser cette question", variable=var_case)
case.pack()

var_choix = StringVar()

choix_rouge = Radiobutton(fenetre, text="Rouge", variable=var_choix, value="rouge")
choix_vert = Radiobutton(fenetre, text="Vert", variable=var_choix, value="vert")
choix_bleu = Radiobutton(fenetre, text="Bleu", variable=var_choix, value="bleu")

choix_rouge.pack()
choix_vert.pack()
choix_bleu.pack()

bouton_quitter = Button(fenetre, text="Quitter", command=fenetre.quit)
bouton_quitter.pack()
fenetre.mainloop()