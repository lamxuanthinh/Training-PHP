CREATE TABLE feedback (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
)

INSERT INTO `feedback`( `name`, `email`, `body`, `date`)
VALUES ('thinh','thinhlam749@gmail.com','i like it', CURRENT_TIMESTAMP);