# import tkinter as tk
# from tkinter import messagebox

# window = tk.Tk()
# window.title("Sales")
# window.geometry("320x120")


# def dis():
#     try:
#         price = float(price_entry.get())
#         discount = float(discount_entry.get())

#         if price < 0 or discount < 0 or discount > 100:
#             messagebox.showerror("Error", "Enter valid number")
#             return

#         net_price = price - (price * discount / 100)

#         result_label.config(text=f"Net_price: {net_price:.2f}")

#     except ValueError:
#         messagebox.showerror("Error", "Please insert numbers")


# tk.Label(window, text="Price").pack()
# price_entry = tk.Entry(window)
# price_entry.pack()

# tk.Label(window, text="Discount").pack()
# discount_entry = tk.Entry(window)
# discount_entry.pack()

# result_label = tk.Label(window, text="")
# result_label.pack()

# tk.Button(window, text="Order", command=dis).pack()

# window.mainloop()


import tkinter as tk 
from tkinter import messagebox 
window = tk.Tk()
window.title("login")
window.geometry("320x250")


def calc():
    try:
         price = float(Price_entry.get())
         discount = float(Discount_entry.get())

         if price < 0 or discount < 0 or discount > 100:
             messagebox.showerror('Error' , "valid number")
             return
    
         net_price = price - (price * discount / 100)

         result_label.config(text=f"Net_price : {net_price:.2f}")

    except ValueError:
       messagebox.showerror("Error","Please enter Number")



label = tk.Label(window,text="Price").pack()
Price_entry = tk.Entry(window)
Price_entry.pack()

label = tk.Label(window,text="Discount").pack()
Discount_entry = tk.Entry(window)
Discount_entry.pack()

result_label = tk.Label(window,text="")
result_label.pack()

button = tk.Button(window,text="Order" , command=calc).pack()

window.mainloop()
