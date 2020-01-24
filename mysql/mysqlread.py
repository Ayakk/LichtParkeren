import mysql.connector

try:
    connection = mysql.connector.connect(host='localhost',
                                         database='lichtparkeren',
                                         user='root',
                                         password='')
    if connection.is_connected():
        db_Info = connection.get_server_info()
        print("Connected to MySQL Server version ", db_Info)
        cursor = connection.cursor()
        cursor.execute("select database();")
        record = cursor.fetchone()
        cursor.execute("SELECT date FROM parking_data")
        for row in cursor.fetchall():
            print (row[0])
        print("You're connected to database: ", record)

finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print("MySQL connection is closed")
