CREATE DATABASE IF NOT EXISTS rk_life_science;
USE rk_life_science;

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL
);

-- Insert default admin user (username: admin, password: admin123)
INSERT INTO admin (username, password) VALUES ('admin', 'admin123');
