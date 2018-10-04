from tkinter import *
#from beep import *

#import winsound # Module pour ajouter la Beep

#====================================================================
class Mycalcul :
    # Constructeur de calculatrice
    def __init__(self, master):
        self.root = master
        self.topfrm = Frame  ( master ) # Frame d'affichage et d'enter
        self.botfrm = Frame  ( master ) # Frame des buttons
        self.topfrm.pack()
        self.botfrm.pack()
        self.screenTxt = StringVar() # Screen d'affichage
        self.InputTxt = StringVar()   # Screen d'Entrer
        self.text = ' '         # Text inistialiser en screen
        self.CreateWidget() 
        self.a = 0 # Variable contient le dernier résultat "ANS"
#----------------------------------------------------------------------------------------------------
    def CreateWidget(self): # Creation des Widgets
        #--------------------------------------MenuOptions----------------------------------------
        self.menubar = Menu(self.root) 
        self.root.config(menu=self.menubar)
        self.menu = Menu(self.menubar, tearoff=False)
        # add_separator pour ajouter une ligne pour separer entre les command
        self.menu.add_command(label="Exit", command=self.Exit) 
        self.menubar.add_cascade(label="File", menu=self.menu)
        #--------------------------------------Creation des Buttons------------------------------
        self.btn1 = Button(self.botfrm, text=" 1 ", bg = 'light slate blue', width = 10, height = 5, command = lambda x='1' : self.writeWid(x))
        self.btn1.grid(row = 0, column = 0)
        self.btn2 = Button(self.botfrm, text=" 2 ",bg = 'light slate blue', width = 10, height = 5, command = lambda x='2' : self.writeWid(x))
        self.btn2.grid(row = 0, column = 1)
        self.btn3 = Button(self.botfrm, text=" 3 ",bg = 'light slate blue', width = 10, height = 5, command = lambda x='3' : self.writeWid(x))
        self.btn3.grid(row = 0, column = 2)
        self.btnclr = Button(self.botfrm, text=" clear ",bg = 'cyan', width = 11, height = 5, command = self.clr)
        self.btnclr.grid(row = 0, column = 3, sticky="W")
        self.btnclr = Button(self.botfrm, text=" Exit ",bg = 'sea green', width = 11, height = 5, command = self.Exit)
        self.btnclr.grid(row = 0, column = 4, sticky="W")
        self.btn4 = Button(self.botfrm, text=" 4 ",bg = 'medium slate blue', width = 10, height = 5, command = lambda x='4' : self.writeWid(x))
        self.btn4.grid(row = 1, column = 0)
        self.btn5 = Button(self.botfrm, text=" 5 ",bg = 'medium slate blue', width = 10, height = 5, command = lambda x='5' : self.writeWid(x))
        self.btn5.grid(row = 1, column = 1)
        self.btn6 = Button(self.botfrm, text=" 6 ",bg = 'medium slate blue', width = 10, height = 5, command = lambda x='6' : self.writeWid(x))
        self.btn6.grid(row = 1, column = 2)
        self.btnmul = Button(self.botfrm, text=" X ",bg = 'sky blue', width = 11, height = 5,command = lambda x='*' : self.writeWid(x))
        self.btnmul.grid(row = 1, column = 3)
        self.btnadd = Button(self.botfrm, text=" + ",bg = 'sky blue', width = 11, height = 5, command = lambda x='+' : self.writeWid(x))
        self.btnadd.grid(row = 1, column = 4)
        self.btn7 = Button(self.botfrm, text=" 7 ",bg = 'slate blue', width = 10, height = 5, command = lambda x='7' : self.writeWid(x))
        self.btn7.grid(row = 2, column = 0)
        self.btn8 = Button(self.botfrm, text=" 8 ",bg = 'slate blue', width = 10, height = 5, command = lambda x='8' : self.writeWid(x))
        self.btn8.grid(row = 2, column = 1)
        self.btn9 = Button(self.botfrm, text=" 9 ",bg = 'slate blue', width = 10, height = 5, command = lambda x='9' : self.writeWid(x))
        self.btn9.grid(row = 2, column = 2)
        self.btndiv = Button(self.botfrm, text=" / ",bg = 'sky blue', width = 11, height = 5, command = lambda x='/' : self.writeWid(x))
        self.btndiv.grid(row = 2, column = 3)
        self.btnsub = Button(self.botfrm, text=" - ",bg = 'sky blue', width = 11, height = 5, command = lambda x='-' : self.writeWid(x))
        self.btnsub.grid(row = 2, column = 4)
        self.btn0 = Button(self.botfrm, text=" 0 ",bg = 'dark blue', width = 10, height = 5, command = lambda x='0' : self.writeWid(x))
        self.btn0.grid(row = 3, column = 1)
        self.btnvrg = Button(self.botfrm, text=" , ",bg = 'rosy brown', width = 10, height = 5, command = lambda x='.' : self.writeWid(x))
        self.btnvrg.grid(row = 3, column = 0)
        self.btneq = Button(self.botfrm, text=" = ",bg = 'blue', width = 22, height = 5, command = self.equal)
        self.btneq.grid(row = 3, column = 3, columnspan = 2, sticky="WE")
        self.btnAns = Button(self.botfrm, text="Ans",bg = 'steel blue', width = 10, height = 5, command = self.Ans)
        self.btnAns.grid(row = 3, column = 2)
        #--------------------------------------Frame d'affichage----------------------------------------
        self.lblScreen = Label (self.topfrm, width = 59,height = 2, bg='moccasin', textvariable= self.screenTxt )
        self.txtInput  = Entry (self.topfrm, bg='moccasin', textvariable= self.InputTxt )
        self.lblScreen.grid( row=0, column =0, sticky='WE')
        self.txtInput.grid( row=1, column =0, sticky='WE')
        self.txtInput.bind("<Key>", self.write ) # Lecture d'entrer par clavier

    def clr (self): # Methode de netoyage == supprimer le contenu en Screen
#        self.beep()
        self.text = ' '
        self.screenTxt.set( self.text )
        
    def Ans(self): # Methode qui retourn le dernier resultat
#        self.beep()
        self.text = str (self.a)
        self.screenTxt.set(self.text)
        
    def equal (self, event = None): # Methode Egale qui return le resultat de la formule 
#        self.beep()
        if self.text == ' ':
            self.screenTxt.set ( self.a )
        elif (self.text[-1] == '+' or self.text[-1] == '-'):
            return
        else :
            self.a = eval(self.text)
            self.clr()
            self.screenTxt.set(self.a)
            
    def rtr (self, event = None): # Methode pour effacer "19*8.63" >> "19*8.6"
#        self.beep()
        if self.text == ' ':
            self.text = ' '
            return
        else :
            self.text = self.text[:-1]
            self.screenTxt.set( self.text )
#    def beep (self): # Methode d'ajouter une Beep dans chaque clique
#        winsound.PlaySound("beep.wav", winsound.SND_ALIAS)

    def vrg (self):
        self.writeWid ('.')
                
    def writeWid(self, Nomber): # Methode d'ecrire en Screen les buttons taper d'application
        if self.text[-1] in ( '/*. ' ) and ( Nomber in '/*.' ):
#            self.beep()
            return
        elif self.text[-1] in ( '+-.' ) and ( Nomber in '*/' ):
            return
        else :
#            self.beep()
            x = Nomber
            self.text += x
            self.screenTxt.set( self.text )
            
    def write (self,event): # Methode d'ecrire en Entrer les evenement de Clavier
        x = event.char
        if self.text[-1] in ( '/*. ' ) and (x in '/*.' or ord(x) == 13) :
            return
        elif self.text[-1] in ( '+-.' ) and ( x in '*/' ):
            return
        else :
            if '0'<= x <= '9' or x in '+-*/':
                self.text += x
                self.screenTxt.set( self.text )
#                self.beep()
            if ord(x) == 13 : self.equal()
            if ord(x) == 8 : self.rtr()
            if x == ',' or x == '.': self.vrg()
                
    def Exit(self): # Methode Pour sortir de l'application
        if messagebox.askokcancel("Exit", "Do you want to Exit !!"): 
            self.root.destroy()
            
if __name__ == '__main__':
    root = Tk()
    root.title("Calculatrice")
    root.geometry ("416x400+250+250")
    root.resizable(width=False, height = False)
    calc = Mycalcul(root)
    root.mainloop()
