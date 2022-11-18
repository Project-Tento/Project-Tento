--create students table
CREATE TABLE students (
UserID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Name VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Password VARCHAR(100) NOT NULL,
ProfilePicture LONGTEXT,
Bio LONGTEXT,
Institution VARCHAR(30),
Level VARCHAR(30),
Status TINYINT,
Code INT
);

--create subjects table
CREATE TABLE subjects (
SubjectCode INT PRIMARY KEY NOT NULL,
SubjectName VARCHAR(30) NOT NULL,
Level VARCHAR(30) NOT NULL
);

--create topics table
CREATE TABLE topics (
TopicID INT PRIMARY KEY NOT NULL,
TopicName VARCHAR(30) NOT NULL,
SubjectCode INT NOT NULL
);

--create questions table
CREATE TABLE questions (
QuestionID INT PRIMARY KEY NOT NULL,
QuestionText LONGTEXT NOT NULL,
QuestionPicture LONGTEXT,
TopicID INT
);

--create choices table
CREATE TABLE choices (
QuestionID INT NOT NULL,
ChoiceAText LONGTEXT,
ChoiceBText LONGTEXT,
ChoiceCText LONGTEXT,
ChoiceDText LONGTEXT,
ChoiceAPic LONGTEXT,
ChoiceBPic LONGTEXT,
ChoiceCPic LONGTEXT,
ChoiceDPic LONGTEXT
);

--create solutions table
CREATE TABLE solutions (
QuestionID INT NOT NULL,
SolutionText LONGTEXT NOT NULL,
SolutionPicture LONGTEXT,
Hint LONGTEXT NOT NULL,
AnswerText LONGTEXT,
AnswerPic LONGTEXT
);

--create test sessions table
CREATE TABLE testSessions (
SessionID INT PRIMARY KEY NOT NULL,
Score INT NOT NULL,
DateTime DATETIME NOT NULL,
UserID INT NOT NULL,
TopicID INT NOT NULL
);

--create motivational quotes table
CREATE TABLE motivationalquotes (
QuoteID INT PRIMARY KEY NOT NULL,
Quote TEXT NOT NULL
);

--add foreign keys in required tables
ALTER TABLE topics
    ADD FOREIGN KEY (SubjectCode) REFERENCES subjects(SubjectCode);

ALTER TABLE questions
    ADD FOREIGN KEY (TopicID) REFERENCES topics(TopicID);

ALTER TABLE choices
    ADD FOREIGN KEY (QuestionID) REFERENCES questions(QuestionID);

ALTER TABLE solutions
    ADD FOREIGN KEY (QuestionID) REFERENCES questions(QuestionID);

ALTER TABLE testSessions
    ADD FOREIGN KEY (TopicID) REFERENCES topics(TopicID),
    ADD FOREIGN KEY (UserID) REFERENCES students(UserID);