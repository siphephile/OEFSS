
-- --------------------------------------------------------

--
-- Table structure for table `moduleinfo`
--

CREATE TABLE `moduleinfo` (
  `ModuleCode` varchar(7) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moduleinfo`
--

INSERT INTO `moduleinfo` (`ModuleCode`, `Description`) VALUES
('AST2652', 'Accounting Sciences II'),
('CHE1504', 'Introduction to Chemistry I'),
('CHE181T', 'Chemistry I (Theory)'),
('CHE2611', 'Inorganic Chemistry II (Theory)'),
('CHE2613', 'Organic Chemistry II (Theory)'),
('CHE3701', 'Inorganic Chemistry III (Theory)'),
('CHE3703', 'Organic Chemistry III (Theory)'),
('CHE3704', 'Analytical Chemistry III'),
('CHE4801', 'Inorganic Chemistry IV'),
('ELE2561', 'Electrical Engineering II (Theory)'),
('ENG1011', 'Engineering Methods'),
('ENG1012', 'Engineering Design'),
('ENG1013', 'Engineering Smart systems'),
('ENG1014', 'Engineering Numerical analysis'),
('ENG1015', 'Design and Manufacture I'),
('ENG1016', 'Mechanical Design I'),
('ENG1017', 'Engineering Materials'),
('ENG1018', 'Engineering Science'),
('ENG1019', 'Engineering Practice I'),
('ICT1111', 'Introduction to Programming'),
('ICT1112', 'Introduction to GUI'),
('ICT1113', 'Introduction to Web Application'),
('ICT1114', 'Introduction to Databases'),
('ICT1115', 'Introduction to Information Systems'),
('ICT1116', 'Introduction to Operating Systems'),
('ICT1117', 'Introduction to Formal Logic'),
('ICT1118', 'Language and Life Skills'),
('ICT1119', 'End User Computing'),
('ICT1120', 'Introduction to Applications'),
('ICT2612', 'Internet Programming II'),
('ICT3611', 'Internet Programming III'),
('ICT3722', 'Advanced Databases'),
('MAT2612', 'Mathematics II');
