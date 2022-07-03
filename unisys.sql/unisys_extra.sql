
--
-- Indexes for dumped tables
--

--
-- Indexes for table `examoutput`
--
ALTER TABLE `examoutput`
  ADD PRIMARY KEY (`TransactionID`),
  ADD UNIQUE KEY `FOREIGN` (`StudentNumber`,`ModuleCode`),
  ADD KEY `ModuleCode` (`ModuleCode`);

--
-- Indexes for table `examsetup`
--
ALTER TABLE `examsetup`
  ADD PRIMARY KEY (`ExamPaperPDF`);

--
-- Indexes for table `moduleinfo`
--
ALTER TABLE `moduleinfo`
  ADD PRIMARY KEY (`ModuleCode`);

--
-- Indexes for table `moduleleader`
--
ALTER TABLE `moduleleader`
  ADD PRIMARY KEY (`ModuleCode`,`StaffNumber`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`StaffNumber`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`StudentNumber`);

--
-- Indexes for table `studentmodule`
--
ALTER TABLE `studentmodule`
  ADD UNIQUE KEY `FOREIGN` (`StudentNumber`,`ModuleCode`);
