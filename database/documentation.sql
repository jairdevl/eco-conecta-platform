-- Command to connect to postgres
PS C:\Program Files\PostgreSQL\12\bin> .\psql.exe -U postgres

-- Create database
CREATE DATABASE ecoconecta;

-- List databases
\l

-- Connect to database
\c ecoconecta

-- Create table users
CREATE TABLE users(id SERIAL PRIMARY KEY,firstname VARCHAR(50) NOT NULL,lastname VARCHAR(50) NOT NULL,mobile_number VARCHAR(20) NULL,address VARCHAR(50) NULL,email VARCHAR(100) UNIQUE NOT NULL,password TEXT NOT NULL,status BOOLEAN DEFAULT true,created_at TIMESTAMP DEFAULT now(),updated_at TIMESTAMP DEFAULT now(),deleted_at TIMESTAMP NULL);



