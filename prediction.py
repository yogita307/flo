#!C:\Users\malth\AppData\Local\Programs\Python\Python310\python.exe
# Importing the 'cgi' module
from calendar import calendar, month
import datetime
from datetime import date
import cgi
import mysql.connector

import cgitb
cgitb.enable()
form = cgi.FieldStorage()

print("Content-Type: text/html")
print('')
print("<html><body style='text-align: center;background: rgba( 242, 206, 218, 0.3 );box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 6.5px );border-radius: 1000px;'>")
print("<br>")
print("<h1 style='text-decoration:underline'> Your Report </h1>")

if form.getvalue("submit"):

    email = form.getvalue("email")
    print("<h1 style='text-decoration:underline' > Email: " +
          email + "</h1>")

    type = form.getvalue("type")
    print("<br>")
    print("<br>")

    ############################################
    length = form.getvalue("length")
    length = int(length)
    if length > 1 and length <= 7:
        print("<p>Your period length is normal</p><br />")
    elif length == 1 or length > 7:
        print("<p>Your period is not normal</p><br />")
    ###################################3##
    pp = form.getvalue("last_period")
    day = pp[8:]
    mont = pp[5:7]
    year = pp[0:4]

    t1 = date.today()
    t2 = date(year=int(year), month=int(mont), day=int(day))
    t3 = t1 - t2
    gap = t3.days

    gap = 28
    today = datetime.date.today()
    next_cycle = datetime.datetime.strptime(
        pp, "%Y-%m-%d") + datetime.timedelta(days=gap)
    if gap > 0:
        # Print the date of the next menstrual cycle
        print("<h3>Your next menstrual cycle is expected to start on: ",
              next_cycle.strftime("%Y-%m-%d"), "</h3>")
    elif gap < 0:
        print("Entered wrong")
    print("<br>")

    if gap == 0 or gap == 1:
        print("<p>you have just completed your period")
    elif gap < 21 and gap > 1:
        print("<p>Your period has completed a few days back i.e." +
              str(gap) + "days</p><br />")
    elif gap > 21 and gap < 35:
        print("<p>You may get your period soon. Do not worry!!</p><br />")

    # elif gap > 35:
    #     print("Your period has completed " + str(gap) +
    #           " days ago and you haven't got it yet.")

    ############################################
    pills = form.getvalue("pills")
    other = form.getvalue("other")

    if other and gap > 35:
        if pills == "Yes":
            print(
                f"<p>Your periods has completed {gap} days ago.<br /> As you are using pills control pills to get rid of {other}, You may get period <br />soon or else refer to your Doctor for other solution </p><br /> ")
        else:
            print(
                "<p>As you have " + str(other) + " Periods  delayed with " + str(gap) + " days. So, please refer to your doctor</p><br /> ")
    if other and gap < 35 and gap > 0:
        print(
            f"<p>As you mentioned that you are having {other}, Its okay as of now because the gap between your previous period and now is {gap} days</p><br />")

    print("<a href='main.html' >Go to home</a>")
    # Establishing database connection

# connection = mysql.connect("%Y-%m-%d"
#     host="localhost", user="root", password="", database="app_flo")
# cursor = connection.cursor()
# insert1 = "INSERT INTO inputs (email,type, pills, last_period,length,other) values('{0}',{1},{2},'{3}')".format(
#     email, type, pills, pp, length, other)
# # some other statements  with the help of cursor
# try:
#     cursor.execute(insert1)
#     connection.commit()
# except mysql.IntegrityError:
#     logging.warning("failed to insert values")

# connection.close()
print("</body></html>")
print("<style>")

print("")
#

print("</style>")
email = form.getvalue("email")
type = form.getvalue("type")

pp = form.getvalue("last_period")
pills = form.getvalue("pills")
other = form.getvalue("other")

try:
    connection = mysql.connector.connect(
        host="localhost", username="root", password="", database="app_flo"
    )
    cursor = connection.cursor()
    # print("Gt5v")
except:
    print("Error connecting to MySQL database: ")
    exit()

    # Inserting data into the database

insert1 = "INSERT INTO inputs(email,type,pills,last_period,length,other) VALUES ('%s','%s','%s','%s','%s','%s')" % (
    email, type,
    pills,
    datetime.datetime.strptime(pp, "%Y-%m-%d"),
    length,
    other)

insert2 = "INSERT INTO dates(last_period,length,predicted) VAlUES ('%s','%s','%s')" % (
    datetime.datetime.strptime(pp, "%Y-%m-%d"), length, next_cycle.strftime("%Y-%m-%d"))
try:
    cursor.execute(insert1)
    cursor.execute(insert2)
    connection.commit()
    # print("Data inserted successfully!")
    exit()
# except:
#     print("rg")

finally:
    connection.close()
