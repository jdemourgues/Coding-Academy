# -*- coding: cp1252 -*- 

from tkinter import *
import tkinter as Tk
# from math import *

t,y,p,n=0,0,0,1

def nombre(x):
        global t,p,n
        if p==0:
                t=t*10+x
        else:
                t=t+x/(10**(n))
                n=n+1
        z.set(str(t))
        
def x0():
        nombre(0.)

def x1():
        nombre(1.)
        
def x2():
        nombre(2.)

                
def x3():
        nombre(3.)

def x4():
        nombre(4.)
        
def x5():
        nombre(5.)
        
def x6():
        nombre(6.)

def x7():
        nombre(7.)
        
def x8():
        nombre(8.)
        
def x9():
        nombre(9.)

def point():
        global p
        p = '.'

def aplus():
        global y,t1,t,p,n
        y,t1,p,n = '+',t,0,1
        t=0
                
def amoins():
        global y,t1,t,p,n
        y,t1,p,n = '-',t,0,1
        t=0
                        
def afois():
        global y,t1,t,p,n
        y ,t1,p,n= '*',t,0,1
        t=0

def adiv():
        global y,t1,t,p,n
        y,p,t1,n='/',0,t,1
        t=0
                        
def aegal():
        global t,t1,n,p
        v ,p= '=',0
        if y == '+':
                z.set(str((t1+t)))
                t=t1+t
        elif y== '-':
                z.set(str((t1-t)))
                t=t1-t
        elif y== '*':
                z.set(str((t1*t)))
                t=t1*t
        elif y=='/':
                if t==0:
                        z.set(str("Erreur, impossible"))
                else:
                        z.set(str((t1/t)))
                        t=t1/t
        t1,n=0,1

def clear():
        global t,t1,n,p,z,y
        t,t1,n=0,0,0
        p,y=0,0
        z.set(str('0'))
        


#-----Prog Principal-----#

fen = Tk.Tk()
fen.title('Calculatrice')

fra1 = Frame(fen)
fra1.grid(row=1,column=0)
Button(fra1, text = '9', command= x9).grid(row=2, column = 2, padx = 3, pady = 3)
Button(fra1, text = '8', command= x8).grid(row=2, column = 1, padx = 3, pady = 3)
Button(fra1, text = '7', command= x7).grid(row=2, column = 0, padx = 3, pady = 3)
Button(fra1, text = '6', command= x6).grid(row=3, column = 2, padx = 3, pady = 3)
Button(fra1, text = '5', command= x5).grid(row=3, column = 1, padx = 3, pady = 3)
Button(fra1, text = '4', command= x4).grid(row=3, column = 0, padx = 3, pady = 3)
Button(fra1, text = '3', command= x3).grid(row=4, column = 2, padx = 3, pady = 3)
Button(fra1, text = '2', command= x2).grid(row=4, column = 1, padx = 3, pady = 3)
Button(fra1, text = '1', command= x1).grid(row=4, column = 0, padx = 3, pady = 3)
Button(fra1, text = '0', command= x0).grid(row=5, column = 2, padx = 3, pady = 3)

z = StringVar()
entree=Entry(fen,textvariable=z)
entree.grid(row=0,column=0)
z.set("0.")

Button(fra1, text= '+', command = aplus).grid(row=2,column=5, padx = 3, pady = 3)
Button(fra1, text= '-', command = amoins).grid(row=3,column=5, padx = 3, pady = 3)
Button(fra1, text= '*', command = afois).grid(row=2,column=6, padx = 3, pady = 3)
Button(fra1, text= '/', command = adiv).grid(row=3,column=6, padx = 3, pady = 3)
Button(fra1, text= '.', command = point).grid(row=4,column=5, padx = 3, pady = 3)
Button(fra1, text= '=', command = aegal).grid(row=4,column=6, padx = 3, pady = 3)
Button(fra1, text= 'C', command = clear).grid(row=5, column=6, padx = 3, pady = 3)

Button(fen,text='Quitter',command = fen.destroy).grid(row=6,column=7)
fen.mainloop

