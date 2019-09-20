-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2017 at 03:50 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'Only i) would compile successfully and it would return size as 4.'),
(2, 1, 1, 'i), ii) and iii) would compile successfully and size of each would be same i.e. 4'),
(3, 1, 0, 'i), ii) and iii) would compile successfully but the size of each would be different.'),
(4, 1, 0, 'ii) and iii) would result in compile error but i) would compile and result in size as 4'),
(5, 2, 1, '4 4 4'),
(6, 2, 0, '1 4 4 '),
(7, 2, 0, '1 4 8'),
(8, 2, 0, 'none of above'),
(9, 3, 0, 'malloc() for ppInt1 and ppInt2 isn’t correct. It’ll give compile time error.'),
(10, 3, 0, 'free(*ppInt2) is not correct. It’ll give compile time error'),
(11, 3, 0, 'free(*ppInt2) is not correct. It’ll give run time error.'),
(12, 3, 1, 'No issue with any of the malloc() and free() i.e. no compile/run time error.'),
(13, 4, 0, 'Assigning (void *)0 to pVoid isn’t correct because memory hasn’t been allocated.'),
(14, 4, 0, 'That’s why it\'ll result in compile error.'),
(15, 4, 1, 'No compile issue and no run time issue.'),
(16, 4, 0, 'sizeof() operator isn’t defined for a pointer of void type.\r\n'),
(17, 5, 1, 'Both i) and iii) are valid.'),
(18, 5, 0, 'Only i) is valid.'),
(19, 5, 0, 'Both i) and ii) are valid.'),
(20, 5, 0, 'all are valid');

-- --------------------------------------------------------

--
-- Table structure for table `choices_2`
--

CREATE TABLE `choices_2` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices_2`
--

INSERT INTO `choices_2` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'error in using cin keyword'),
(2, 1, 1, 'cin+junk value'),
(3, 1, 0, 'cin+input'),
(4, 1, 0, 'runtime error'),
(5, 2, 0, 'v1'),
(6, 2, 0, 'v2'),
(7, 2, 0, 'v1 and v2'),
(8, 2, 1, 'no destructor call'),
(9, 3, 0, 'unpredictable'),
(10, 3, 0, 'runtime error'),
(11, 3, 1, '0'),
(12, 3, 0, '99\r\n'),
(13, 4, 0, '2'),
(14, 4, 0, '4'),
(15, 4, 0, '6'),
(16, 4, 1, 'all of the above\r\n'),
(17, 5, 0, 'by overloading new operator'),
(18, 5, 0, 'by making an empty private new operator'),
(19, 5, 1, 'by making an empty private and new[] operator'),
(20, 5, 0, 'by overloading new operator and new[] operators');

-- --------------------------------------------------------

--
-- Table structure for table `choices_3`
--

CREATE TABLE `choices_3` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices_3`
--

INSERT INTO `choices_3` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'Outer.Inner.class'),
(2, 1, 0, 'Inner.class'),
(3, 1, 0, 'Outer.class'),
(4, 1, 1, 'Outer$Inner.class'),
(5, 2, 0, 'Hii'),
(6, 2, 0, 'compile time error'),
(7, 2, 1, 'runtime error'),
(8, 2, 0, 'no output'),
(9, 3, 0, 'Hii'),
(10, 3, 0, 'runtime'),
(11, 3, 1, 'compile time error'),
(12, 3, 0, 'no output'),
(13, 4, 0, 'Outer o=new Outer();\r\nOuter.Inner i=o.new Inner();\r\ni.m1();'),
(14, 4, 0, 'Outer.Inner i=new Outer().new Inner();\r\ni.m1();'),
(15, 4, 0, 'new Outer().new Inner().m1();'),
(16, 4, 1, 'all of the above'),
(17, 5, 0, 'it must be marked final'),
(18, 5, 0, 'it can be marked native'),
(19, 5, 0, 'it must be marked public'),
(20, 5, 1, 'it cane be marked static');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'Suppose that in a C program snippet, followings statements are used.\r\ni) sizeof(int);\r\nii) sizeof(int*);\r\niii) sizeof(int**);'),
(2, 'Assume int is 4 bytes, char is 1 byte and float is 4 bytes. Also, assume that pointer size is 4 bytes (i.e. typical case)\r\nchar *pChar;\r\nint *pInt;\r\nfloat *pFloat;\r\n \r\nsizeof(pChar);\r\nsizeof(pInt);\r\nsizeof(pFloat);\r\nWhat’s the size returned for each of sizeof() operator?'),
(3, '#include \"stdlib.h\"\r\nint main()\r\n{\r\n int *pInt;\r\n int **ppInt1;\r\n int **ppInt2;\r\n \r\n pInt = (int*)malloc(sizeof(int));\r\n ppInt1 = (int**)malloc(10*sizeof(int*));\r\n ppInt2 = (int**)malloc(10*sizeof(int*));\r\n \r\n free(pInt);\r\n free(ppInt1);\r\n free(*ppInt2);\r\n return 0;\r\n}\r\nChoose the correct statement w.r.t. above C program.'),
(4, '#include \"stdio.h\" \r\nint main()\r\n{\r\n void *pVoid;\r\n pVoid = (void*)0;\r\n printf(\"%lu\",sizeof(pVoid));\r\n return 0;\r\n}\r\nPick the best statement for the above C program snippet.'),
(5, 'Consider the following variable declarations and definitions in C\r\ni) int var_9 = 1;\r\nii) int 9_var = 2;\r\niii) int _ = 3;\r\nChoose the correct statement w.r.t. above variables.');

-- --------------------------------------------------------

--
-- Table structure for table `questions_2`
--

CREATE TABLE `questions_2` (
  `question_number` int(11) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_2`
--

INSERT INTO `questions_2` (`question_number`, `text`) VALUES
(1, '#include<iostream> using namespace std; int main () {        int cin;        cin >> cin;        cout << \"cin\" << cin;        return 0; }'),
(2, 'Would destructor be called, if yes, then due to which vector?\r\n\r\n#include <iostream>\r\n#include <vector>\r\nusing namespace std;\r\n \r\nclass a\r\n{\r\npublic :\r\n    ~a()\r\n    {\r\n        cout << \"destroy\";\r\n    }\r\n};\r\nint main()\r\n{\r\n   vector <a*> *v1  = new vector<a*>;\r\n   vector <a> *v2  = new vector<a>;\r\n   return 0;\r\n}'),
(3, '#include<iostream>\r\nusing namespace std;\r\n \r\nint x[100];\r\nint main()\r\n{\r\n    cout << x[99] << endl;\r\n}'),
(4, 'Consider the below C++ program.\r\n\r\n#include<iostream>\r\nusing namespace std;\r\nclass A\r\n{\r\npublic:\r\n     A(){ cout <<\"1\";}\r\n     A(const A &obj){ cout <<\"2\";}\r\n};\r\n \r\nclass B: virtual A\r\n{\r\npublic:\r\n    B(){cout <<\"3\";}\r\n    B(const B & obj){cout<<\"4\";}\r\n};\r\n \r\nclass C: virtual A\r\n{\r\npublic:\r\n   C(){cout<<\"5\";}\r\n   C(const C & obj){cout <<\"6\";}\r\n};\r\n \r\nclass D:B,C\r\n{\r\npublic:\r\n    D(){cout<<\"7\";}\r\n    D(const D & obj){cout <<\"8\";}\r\n};\r\n \r\nint main()\r\n{\r\n   D d1;\r\n   D d(d1);\r\n}\r\nWhich of the below is not printed?'),
(5, 'How can we restrict dynamic allocation of objects of a class using new?');

-- --------------------------------------------------------

--
-- Table structure for table `questions_3`
--

CREATE TABLE `questions_3` (
  `question_number` int(11) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_3`
--

INSERT INTO `questions_3` (`question_number`, `text`) VALUES
(1, '1. What will be the .class file name of the Inner class?\r\n\r\nclass Outer {\r\n    class Inner {\r\n    public\r\n        void m1()\r\n        {\r\n            System.out.println(\"Hello Geeks\");\r\n        }\r\n    }\r\n}'),
(2, '2. What will be the output of the following program if we use java Outer$Inner in command prompt?\r\n\r\nclass Outer {\r\n    class Inner {\r\n    public\r\n        void m1()\r\n        {\r\n            System.out.println(\"Hii\");\r\n        }\r\n    } public static void main(String[] args)\r\n    {\r\n        Outer o = new Outer();\r\n        o.m1();\r\n    }\r\n}'),
(3, '3. What will be the output of the following program?\r\n\r\nclass Outer {\r\n    class Inner {\r\n    public\r\n        static void main()\r\n        {\r\n            System.out.println(\"Hii\");\r\n        }\r\n    } Outer o = new Outer();\r\n    o.main();\r\n}'),
(4, '4.What will be the option is suitable to replace with Line-1 to access m1() method of the Inner class?\r\n\r\nclass Outer {\r\n    class Inner {\r\n    public\r\n        void m1()\r\n        {\r\n            System.out.println(\"Hii\");\r\n        }\r\n    } public static void main(String[] args)\r\n    {\r\n        Line - 1\r\n    }\r\n}'),
(5, '5.Which is true about a Normal/Regular inner class?');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `srno` int(11) NOT NULL,
  `scores_1` int(11) NOT NULL,
  `scores_2` int(11) NOT NULL,
  `scores_3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`srno`, `scores_1`, `scores_2`, `scores_3`) VALUES
(11, 1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE `studentdb` (
  `srno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdb`
--

INSERT INTO `studentdb` (`srno`, `username`, `password`, `department`, `Name`, `EmailId`) VALUES
(11, 'ajay', 'ajay', 'IT', 'ajay', 'jaya@gmal.com'),
(12, 'abc', 'abcde', 'CO', 'Abcd', 'abcd@hmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question_number` (`question_number`,`is_correct`,`text`);

--
-- Indexes for table `choices_2`
--
ALTER TABLE `choices_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choices_3`
--
ALTER TABLE `choices_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `questions_2`
--
ALTER TABLE `questions_2`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `questions_3`
--
ALTER TABLE `questions_3`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `studentdb`
--
ALTER TABLE `studentdb`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `choices_2`
--
ALTER TABLE `choices_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `choices_3`
--
ALTER TABLE `choices_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions_2`
--
ALTER TABLE `questions_2`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions_3`
--
ALTER TABLE `questions_3`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `studentdb`
--
ALTER TABLE `studentdb`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
