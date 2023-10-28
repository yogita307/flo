
import mysql.connector

try:
    connection = mysql.connect(
        host="localhost", username="root", password=""
    )
    cursor = connection.cursor()
    print("Gt5v")
except:
    print(f"Error connecting to MySQL database: ")
    exit()

    # Inserting data into the database

insert1 = f"INSERT INTO inputs (email, type, pills, last_period, length, other) VALUES ('email')"
try:
    cursor.execute(insert1)
    connection.commit()
    print("Data inserted successfully!")

finally:
    connection.close()
