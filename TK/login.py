# import tkinter as tk
# from tkinter import messagebox 
# window = tk.Tk()
# window.title("Log in form ")
# window.geometry("300x250")

# def Log():
#     username = User_entry.get()
#     Password = Password_entry.get()

#     if username == "Ahmed" and Password == "1234":
#         messagebox.showinfo("Passed","LOGIN Success")
#     else:
#         messagebox.showerror("Error","Wrong Password or UserName")


# label =tk.Label(window , text="UserName").pack()
# User_entry = tk.Entry(window)
# User_entry.pack()

# label =tk.Label(window , text="Password").pack()
# Password_entry = tk.Entry(window ,show="*")
# Password_entry.pack()

# button = tk.Button(window , text="Login" , command=Log).pack()


# window.mainloop()

import tkinter as tk 
from tkinter import messagebox
widnow = tk.Tk()
widnow.title("login")
widnow.geometry("320x150")

def login():
    username = user_entry.get()
    password = password_entry.get()

    if username == "speed" and password == "123":
        messagebox.showinfo("success" , "login success")
    else:
        messagebox.showerror("error","wrong data")


label = tk.Label(widnow,text="enter username").pack()
user_entry = tk.Entry(widnow)
user_entry.pack()

label = tk.Label(widnow,text="enter password").pack()
password_entry = tk.Entry(widnow)
password_entry.pack()

button = tk.Button(widnow,text="login" , command=login).pack()

widnow.mainloop()