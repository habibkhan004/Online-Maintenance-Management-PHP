-- Create Database
CREATE DATABASE IF NOT EXISTS osms_db;
USE osms_db;

-- User Registration Table
CREATE TABLE user_tb (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    user_email VARCHAR(100) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Employee Table
CREATE TABLE technician_tb (
    empid INT AUTO_INCREMENT PRIMARY KEY,
    empName VARCHAR(100) NOT NULL,
    empCity VARCHAR(100),
    empMobile VARCHAR(15),
    empEmail VARCHAR(100),
    empDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE requesterlogin_tb (
    r_login_id INT AUTO_INCREMENT PRIMARY KEY,
    r_name VARCHAR(100) NOT NULL,
    r_email VARCHAR(100) NOT NULL UNIQUE,
    r_password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Product Table
CREATE TABLE assets_tb (
    pid INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(100) NOT NULL,
    pdop DATE,  -- Date of purchase
    pavail INT DEFAULT 0, -- Quantity available
    ptotal INT DEFAULT 0, -- Total stock
    poriginalcost DECIMAL(10,2),
    psellingcost DECIMAL(10,2)
);

-- Request Table

CREATE TABLE submitrequest_tb (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    request_info TEXT,
    request_desc TEXT,
    requester_name VARCHAR(100),
    requester_add1 VARCHAR(255),
    requester_add2 VARCHAR(255),
    requester_city VARCHAR(100),
    requester_state VARCHAR(100),
    requester_zip VARCHAR(10),
    requester_email VARCHAR(100),
    requester_mobile VARCHAR(15),
    request_date DATE
);


-- Assign Work Table
CREATE TABLE assignwork_tb (
    rno INT AUTO_INCREMENT PRIMARY KEY,
    request_id INT,
    request_info TEXT,
    request_desc TEXT,
    name VARCHAR(100),
    address TEXT,
    city VARCHAR(50),
    mobile VARCHAR(15),
    tech VARCHAR(100),
    assign_date DATE,
    FOREIGN KEY (request_id) REFERENCES submitrequest_tb(request_id)
);

-- Sell Product Table
CREATE TABLE customer_tb (
    custid INT AUTO_INCREMENT PRIMARY KEY,
    custname VARCHAR(100),
    address TEXT,
    productname VARCHAR(100),
    quantity INT,
    price_each DECIMAL(10,2),
    total DECIMAL(10,2),
    sell_date DATE
);
