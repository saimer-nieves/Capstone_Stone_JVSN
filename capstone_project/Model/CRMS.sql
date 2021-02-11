-- Show tables;

/* Employee Logins Table */

CREATE TABLE IF NOT EXISTS mechants_
 (
	userID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        company NVARCHAR(255) DEFAULT NULL,
        fname NVARCHAR(255) DEFAULT NULL,
        lname NVARCHAR(255) DEFAULT NULL,
        email NVARCHAR(255) DEFAULT NULL,
         phone NVARCHAR(255) DEFAULT NULL,
        bo_username  NVARCHAR(255) DEFAULT NULL,
        bo_password  NVARCHAR(255) DEFAULT NULL   
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

/*******************************/

CREATE TABLE IF NOT EXISTS merchants_TBL (
		mer_ID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        mer_fname NVARCHAR(255),
        mer_lname NVARCHAR(255),
        
        mer_email NVARCHAR(255),
        mer_phone NVARCHAR(255),
        mer_password NVARCHAR(255)
               
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


/*******************************/
CREATE TABLE IF NOT EXISTS customers_tbl (
		cus_ID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cus_fname NVARCHAR(255),
        cus_lname NVARCHAR(255),
        
        cus_email NVARCHAR(255),
        cus_phone NVARCHAR(255),
        cus_password NVARCHAR(255)
               
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;




INSERT INTO teams (teamName,division) VALUES ("Boston Celtics", "East");
INSERT INTO teams (teamName,division) VALUES ("LA Lakers", "West");
INSERT INTO teams (teamName,division) VALUES ("Houston Rockets", "West");
INSERT INTO teams (teamName,division) VALUES ("Miami Heat", "East");



-- SELECT * FROM EmployeeLogins;
-- INSERT INTO EmployeeLogins (username, userPassword) VALUES ('Jack', SHA1('Password'));
-- INSERT INTO EmployeeLogins (username, userPassword, userGroup, companyID) VALUES ('Scott', SHA1('NEIT'), "employee", 1);
-- INSERT INTO EmployeeLogins (username, userPassword, userGroup, companyID) VALUES ('Erik', SHA1('NEIT'), "manager", 1);
-- UPDATE EmployeeLogins SET username = "Zach", userPassword = SHA1('Frost'), userGroup = "employee", companyID = 1 WHERE userID = 1;
-- UPDATE EmployeeLogins SET username = "Jack", userPassword = SHA1('Password'), userGroup = "manager", companyID = 1 WHERE userID = 2;

/* Client Companies Table */

CREATE TABLE IF NOT EXISTS ClientCompanies (
	companyID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        companyName NVARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- SELECT * FROM ClientCompanies;
-- INSERT INTO ClientCompanies (companyName) VALUES ("Meat Company");

/* Employee Audits Table */

CREATE TABLE IF NOT EXISTS EmployeeAudits (
	auditID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        userID INT UNSIGNED,
        aDate DATETIME,
        aAction NVARCHAR(255),
        customerID INT UNSIGNED,
        FOREIGN KEY (userID) REFERENCES EmployeeLogins(userID) ON DELETE CASCADE,
        FOREIGN KEY (customerID) REFERENCES Customers(customerID) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- SELECT * FROM EmployeeAudits;
-- DELETE FROM EmployeeAudits WHERE auditID = 27;

/* Customers Table */

CREATE TABLE IF NOT EXISTS Customers (
	customerID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        companyID INT UNSIGNED,
        profileImg NVARCHAR(5000),
        firstName NVARCHAR(255),
        middleName NVARCHAR(255), 
        lastName NVARCHAR(255),
        address1 NVARCHAR(255),
        address2 NVARCHAR(255),
        city NVARCHAR(255),
        state NVARCHAR(2),
        zip NVARCHAR(5),
        phone NVARCHAR(30),
        email NVARCHAR(255),
        purchases INT UNSIGNED,
        birthday DATETIME,
        FOREIGN KEY (companyID) REFERENCES ClientCompanies(companyID) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- SELECT * FROM Customers;
-- INSERT INTO Customers (companyID, profileImg, firstName, middleName, lastName, address1, address2, city, state, zip, phone, email, purchases, birthday) VALUES (1, "", "Mike", "Rosso", "Coltelli", "5 Brick Road", "", "Miami", "FL", "52211", "(401) 211-7821", "Mike.Coltelli@bing.com", 0, "2005/03/15");
-- SELECT state, COUNT(*) AS custsPerStateCtr from Customers GROUP BY state ORDER BY COUNT(*);
-- SELECT birthday from Customers;

/* Memos Table */

CREATE TABLE IF NOT EXISTS Memos (
	memoID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        customerID INT UNSIGNED,
        mDate DATETIME,
        memo NVARCHAR(5000),
        FOREIGN KEY (customerID) REFERENCES Customers(customerID) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- SELECT * FROM Memos;
-- INSERT INTO MEMOS (customerID, mDate, memo) VALUES (5, "2020/10/15", "Replaced car tires.");

