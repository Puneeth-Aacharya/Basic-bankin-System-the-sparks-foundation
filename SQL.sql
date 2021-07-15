SET time_zone = "+00.00";

CREATE TABLE `basic_banking_system`.`users` ( `acno` INT(3) NOT NULL , `name` TEXT NOT NULL , `email` VARCHAR(40) NOT NULL , `balance` INT(9) NOT NULL ) ENGINE = MyISAM;



CREATE TABLE `basic_banking_system`.`transaction` ( `uid` INT(3) NOT NULL , `SENDER` VARCHAR(30) NOT NULL , `RECEIVER` VARCHAR(30) NOT NULL , `BALENCE` INT(10) NOT NULL , `DATE` datetime NOT NULL DEFAULT current_timestamp() ) ENGINE = MyISAM;


INSERT INTO `users` (`acno`, `name`, `email`, `balance`) VALUES
(1, 'Ramesh', 'ramesg12@gmail.com', 5000),
(2, 'Harish', 'harish54@gmail.com', 35000),
(3, 'Peter', 'peter53.25@gmail.com', 8000),
(4, 'Jhon', 'jhon25@gmail.com', 60000),
(5, 'Ram', 'ram54.25@gmail.com', 3000),
(6, 'Prakash', 'prakash2@gmail.com', 2500),
(7, 'Ricahrd', 'richard.25@gmail.com', 8000),
(8, 'Joseph', 'joseph.264@gmail.com', 40000),
(9, 'Suresh', 'suresh@gmail.com', 35000),
(10, 'Ganesh', 'ganesh@gmail.com', 40000);


ALTER TABLE `transaction`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`uid`);