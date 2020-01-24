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
        print("You're connected to database: ", record)
        query = """ UPDATE parking_data
                SET status = %s
                WHERE position = %s """
        data = (0,'A01')
        cursor.execute(query, data)
        connection.commit()
finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print("MySQL connection is closed")
