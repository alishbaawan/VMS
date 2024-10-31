-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 01:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epro`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_appointment`
--

CREATE TABLE `add_appointment` (
  `ID` int(55) NOT NULL,
  `USER_ID` int(55) NOT NULL,
  `CHILD_ID` int(55) NOT NULL,
  `HOSPITAL_ID` int(55) NOT NULL,
  `VACCINE_ID` int(55) NOT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(55) NOT NULL,
  `TIME` time NOT NULL,
  `REMARK` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_appointment`
--

INSERT INTO `add_appointment` (`ID`, `USER_ID`, `CHILD_ID`, `HOSPITAL_ID`, `VACCINE_ID`, `DATE`, `STATUS`, `TIME`, `REMARK`) VALUES
(18, 28, 23, 1, 13, '2024-09-28', 'Pending', '17:21:00', ''),
(20, 28, 23, 1, 15, '2024-09-28', 'Pending', '18:28:00', ''),
(21, 28, 23, 5, 15, '2024-09-28', 'Vaccinated', '20:37:00', '10');

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `ID` int(11) NOT NULL,
  `VAC_NAME` varchar(40) NOT NULL,
  `DETAILS` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`ID`, `VAC_NAME`, `DETAILS`) VALUES
(1, 'Covid-19', 'Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that originated in China.  The virus is known as severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease it causes is called coronavirus disease 2019 (COVID-19). In March 2020, the World Health Organization (WHO) declared the COVID-19 outbreak a pandemic.  Public health groups, including the U.S. Centers for Disease Control and Prevention (CDC) and WHO, are monitoring the COVID-19 pandemic and posting updates on their websites. These groups have also issued recommendations for preventing and treating the virus that causes COVID-19.'),
(2, 'Chickenpox', 'Chickenpox is an infection caused by the varicella-zoster virus. It causes an itchy rash with small, fluid-filled blisters. Chickenpox is highly contagious to people who haven\'t had the disease or been vaccinated against it. Today, a vaccine is available that protects children against chickenpox. Routine vaccination is recommended by the U.S. Centers for Disease Control and Prevention (CDC).\r\n\r\nThe chickenpox vaccine is a safe, effective way to prevent chickenpox and its possible complications.'),
(3, 'Dengue', 'Dengue (DENG-gey) fever is a mosquito-borne illness that occurs in tropical and subtropical areas of the world. Mild dengue fever causes a high fever and flu-like symptoms. The severe form of dengue fever, also called dengue hemorrhagic fever, can cause serious bleeding, a sudden drop in blood pressure (shock) and death.\r\n\r\nMillions of cases of dengue infection occur worldwide each year. Dengue fever is most common in Southeast Asia, the western Pacific islands, Latin America and Africa. But the disease has been spreading to new areas, including local outbreaks in Europe and southern parts of the United States.\r\n\r\nResearchers are working on dengue fever vaccines. For now, in areas where dengue fever is common, the best ways to prevent infection are to avoid being bitten by mosquitoes and to take steps to reduce the mosquito population'),
(4, 'Flu', 'Flu (influenza) is an infection of the nose, throat and lungs, which are part of the respiratory system. Influenza is commonly called the flu, but it\'s not the same as stomach \"flu\" viruses that cause diarrhea and vomiting.\r\n\r\nMost people with the flu get better on their own. But sometimes, influenza and its complications can be deadly. People at higher risk of developing flu complications include:\r\n\r\nYoung children under age 2\r\nAdults older than age 65\r\nResidents of nursing homes and other long-term care facilities\r\nPeople who are pregnant or plan to be pregnant during flu season\r\nPeople with weakened immune systems\r\nAmerican Indians or Alaska Natives\r\nPeople who have chronic illnesses, such as asthma, heart disease, kidney disease, liver disease and diabetes\r\nPeople with a body mass index (BMI) of 40 or higher\r\nAlthough the annual influenza vaccine isn\'t 100% effective, it reduces the chances of having severe complications from infection.'),
(5, 'Polio', 'Polio is a contagious viral illness that in its most severe form causes nerve injury leading to paralysis, difficulty breathing and sometimes death.\r\n\r\nIn the U.S., the last case of naturally occurring polio was in 1979. Today, despite a worldwide effort to wipe out polio, poliovirus continues to affect children and adults in parts of Asia and Africa.\r\n\r\nThe Centers for Disease Control and Prevention (CDC) advises taking precautions to protect yourself from polio if you\'re traveling anywhere there\'s a risk of polio.\r\n\r\nAdults who have been vaccinated who plan to travel to an area where polio is occurring should receive a booster dose of inactivated poliovirus vaccine (IPV). Immunity after a booster lasts a lifetime.');

-- --------------------------------------------------------

--
-- Table structure for table `add_child`
--

CREATE TABLE `add_child` (
  `ID` int(11) NOT NULL,
  `PARENT_ID` int(11) NOT NULL,
  `D_O_B` date NOT NULL,
  `CHILD_NAME` varchar(20) NOT NULL,
  `BLOOD_GROUP` varchar(11) NOT NULL,
  `GENDER` varchar(11) NOT NULL,
  `B_FORM` int(55) NOT NULL,
  `PARENT_CNIC` int(55) NOT NULL,
  `CHILD_PIC` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_child`
--

INSERT INTO `add_child` (`ID`, `PARENT_ID`, `D_O_B`, `CHILD_NAME`, `BLOOD_GROUP`, `GENDER`, `B_FORM`, `PARENT_CNIC`, `CHILD_PIC`) VALUES
(23, 28, '2024-09-19', 'alizaib', 'A+', 'Male', 2147483647, 2147483647, 'assets/img/child/child.png');

-- --------------------------------------------------------

--
-- Table structure for table `add_contact`
--

CREATE TABLE `add_contact` (
  `ID` int(11) NOT NULL,
  `C_NAME` varchar(50) NOT NULL,
  `C_MAIL` varchar(50) NOT NULL,
  `C_SUBJECT` varchar(255) NOT NULL,
  `C_MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_contact`
--

INSERT INTO `add_contact` (`ID`, `C_NAME`, `C_MAIL`, `C_SUBJECT`, `C_MESSAGE`) VALUES
(5, 'Alizaib Zahid', 'alizaibzahid32@gmail.com', 'ali', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `add_hospital`
--

CREATE TABLE `add_hospital` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `HOSPITALS_NAME` varchar(50) NOT NULL,
  `LOCATION` varchar(60) NOT NULL,
  `CONTACT` varchar(30) NOT NULL,
  `HOSPITALS_PIC` varchar(100) NOT NULL,
  `DETAILS` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_hospital`
--

INSERT INTO `add_hospital` (`ID`, `USER_ID`, `HOSPITALS_NAME`, `LOCATION`, `CONTACT`, `HOSPITALS_PIC`, `DETAILS`) VALUES
(1, 3, 'Agha Khan Hospital', 'Stadium Road,Karachi ', '\'+92 21 3493 0051', 'assets/img/hospital/agha_khan.jpg', 'The Aga Khan University Hospital in Karachi, established in 1985. Their vision is to provide premier,            tertiary, referral health care facilities to the people of Pakistan.AKU\\\'s objective is to promote human welfare by             disseminating knowledge and providing instruction, training, research and services in health sciences, education and             other disciplines. AKU is a non-denominational institution open to all on merit, and admissions to its academic             programmes are needs-blind. The University places special emphasis on the development of women. Through its high             academic standards, programmes relevant to the needs of developing societies, its work as a dialogue partner with             government on issues of health and education policy, and its delivery of critical social services, AKU has had a              national impact in Pakistan. With the launch of academic programmes in East Africa, the United Kingdom, Syria and              Afghanistan, AKU has now established itself as an international institution at ten sites in seven countries. AKU\\\'s               Faculty of Health Sciences, comprising a Medical College and a School of Nursing, is located on the same campus in               Karachi as Aga Khan University Hospital (AKUH). The Institute for Educational Development (AKUIED) is situated at                another campus in Karachi, while the Institute for the Study of Muslim Civilisations (AKU-ISMC) is based in                London. With the development of AKU-IED and AKU-ISMC, along with the planning of a Faculty of Arts and Sciences,                AKU has moved towards becoming a comprehensive university.'),
(2, 4, 'Liaquat National Hospital', 'National Stadium Road,Karachi', '+92-21 34413010', 'assets/img/hospital/liaquat_national.png', 'Welcome to Liaquat National Hospital! Every day thousands of people enter the gates of Liaquat National Hospital (LNH) seeking medical attention for themselves or their loved ones. With an undying commitment to excellence that meets international standards, regulations and quality systems, we make sure that the patient’s needs are met satisfactorily under a single roof. Liaquat National Hospital is located in the center of the bustling city of Karachi near the National Cricket Stadium. Owing to this unique location LNH has easy access from all quadrants of the city.  LNH was conceived 60 years ago as a not-for-profit organization with a vision to provide quality healthcare at an affordable cost to all socioeconomic classes. Over the years, the hospital has evolved to become the largest tertiary care hospital in the country with more than 700 beds. We also have the largest number of ICU beds and ventilators in the city. The hospital excels in all facets of medicine, surgery, diagnostics and medical support services. LNH houses more than 35 specialties. Considering patient’s care as priority, we provide 24 hour emergency services, acute care, inpatient, outpatient and day care facilities not only to the city but also to patients from the far reaching corners of Sindh, Balochistan, Khyber Pakhtunkhwa and Punjab'),
(3, 6, 'Civil Hospital', 'Allawala Market, M.A.Jinnah Road,Karachi', '02199215740', 'assets/img/hospital/civil_hosp.jpg', 'The Civil Hospital Karachi Initially established in 1898 with 250 beds to provide basic health facilities, the hospital has expanded considerably and has been totally transformed over the years. Its 1900 beds are located in 34 departments, with over a dozen major operation theaters and a huge out patient’s attendance. Greater stress is being laid on public-private partnerships and preventive work notably in the Paediatrics department to avert unnecessary infant and child deaths due to pneumonia, malnutrition, diarrhea or vaccine-preventable illnesses. Measures are also in place to prevent and control major communicable diseases such as Tuberculosis, Malaria, viral Hepatitis B & C and HIV/AIDS, in addition to non-communicable diseases such as cardiovascular diseases, diabetes and cancers having a huge burden in Pakistan. Today as Karachi is a sprawling mega-city with a population estimated at 18 million divided into 18 major towns, the Civil Hospital Karachi lives on to tell two tales in the same city. The services of this tertiary care institution have kept in line with the latest technological advances as far as that is compatible with the situation in a low-income developing country. Sophisticated laboratory and radiographical procedures, investigations and examinations are performed totally free to benefit the poor patients attending the hospital. An average of two million out-patients report to the Hospital annually; 95% of which are non-affording patients entailing a huge cost on medicines, laboratory facilities and other logistics.'),
(4, 7, 'Dow Hospital', 'Saddar,Karachi', '+ 922199232660', 'assets/img/hospital/dow_medical.jpg', 'Dow Hospital was established in the year 2009. It serves as a tertiary care University Hospital attached to Dow International Medical College for teaching and training of MBBS & Post-graduate students. The Dow hospital is a 5 story building, with large capacity of 1000 beds, fully equipped emergency room, spacious general wards, semi-private rooms, private rooms, an operation theater complex and labor rooms. It is also equipped with most modern facilities and units for treatment of surgical and medical problems, like the 12 bedded ICU and HDU, Nursery, Special Care Unit, Endoscopy Units, and the Liver Transplant Center. The hospital consists of Ultrasound, Echocardiography and pharmacy besides Seminar Rooms, a cafeteria, and the administrative departments.\\n \\nAll types of routine and specialized surgeries are carried out by qualified and experienced surgeons of every specialty, including neurosurgery, cardiac surgery and even plastic surgery. The Intensive Care Unit (ICU) is also fully equipped with ventilators and other required equipment and monitors. High Dependency Unit (HDU) is meant for serious patients, not requiring ventilators. 10 dialysis machines are providing services till late night daily, separate machines are designated for Hepatitis B and C patients. A new dialysis lab has also been created to meet with demand for dialysis around the clock. A lab collection point is placed within the Dow Hospital to facilitate indoor and emergency patients, besides specialized collection centers all over the city, and interior of Sindh.'),
(5, 5, 'Patel Hospital', 'ST-18, Block 4, Gulshan-e-Iqbal,Karachi', '03005684174', 'assets/img/hospital/patel_hosp.jpg', 'Patel Hospital is one of the prominent not-for-profit tertiary healthcare hospitals  Comprising of more than 250 beds established to provide quality healthcare amenities to all at an affordable cost and Welfare Support to the under- privileged.  The hospital is located in densely populated area of Karachi which provides services to millions of patients arriving from not only in Karachi but also from Interior Sindh, Baluchistan and KPK. Patel Hospital has been certified by the College of Physicians and Surgeons for post-graduate training and Pakistan Medical & Dental Council. In addition to that, the hospital is certified with ISO 9001-2015, RIQAS, CAP and PCP and has effectively accomplished the status of a tertiary healthcare & teaching hospital. At Patel Hospital we offer complete In-Patient and Out-Patient care through automated and advanced equipment, techniques, and a team of highly –skilled, qualified, and dedicated people who share its mission and values.');

-- --------------------------------------------------------

--
-- Table structure for table `add_role`
--

CREATE TABLE `add_role` (
  `ID` int(15) NOT NULL,
  `ROLE_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_role`
--

INSERT INTO `add_role` (`ID`, `ROLE_NAME`) VALUES
(1, 'Admin'),
(2, 'Parent'),
(3, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `ID` int(11) NOT NULL,
  `ROLE_ID` int(11) NOT NULL,
  `USER_NAME` varchar(55) NOT NULL,
  `PASSWORD` varchar(55) NOT NULL,
  `PHONE` varchar(55) NOT NULL,
  `USER_PIC` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`ID`, `ROLE_ID`, `USER_NAME`, `PASSWORD`, `PHONE`, `USER_PIC`) VALUES
(1, 1, 'vms', 'vms', '02053524245', 'assets/img/admin/Profile.png'),
(2, 2, 'Adil', 'vmss', '0343718182', 'assets/img/user/mud.png'),
(3, 3, 'Agha', 'agha123', '03001234567', 'assets/img/admin/agha.jpg'),
(4, 3, 'Liaquat', 'liaquat123', '12345678', 'assets/img/admin/liaquat.png'),
(5, 3, 'Patel', 'patel123', '03353780500', 'assets/img/admin/patel.jpg'),
(6, 3, 'Civil', 'civil123', '03353780501', 'assets/img/admin/civil.jpg'),
(7, 3, 'Dow', 'dow123', '03353780504', 'assets/img/admin/dow.jpg'),
(28, 2, 'Ali', 'jokhio12', '03279670434', 'assets/img/user/parent1.png');

-- --------------------------------------------------------

--
-- Table structure for table `add_vaccine`
--

CREATE TABLE `add_vaccine` (
  `ID` int(11) NOT NULL,
  `VAC_ID` int(11) NOT NULL,
  `VAC_NAME` varchar(55) NOT NULL,
  `DOSAGE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_vaccine`
--

INSERT INTO `add_vaccine` (`ID`, `VAC_ID`, `VAC_NAME`, `DOSAGE`) VALUES
(12, 1, 'Pfizer', 'First'),
(13, 1, 'Moderna', 'First'),
(14, 1, 'Synopharm', 'First'),
(15, 1, 'Varivax', 'first');

-- --------------------------------------------------------

--
-- Table structure for table `available_vaccine`
--

CREATE TABLE `available_vaccine` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `VACCINE_ID` int(11) NOT NULL,
  `STATUS` varchar(55) NOT NULL,
  `HOSPITAL` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `available_vaccine`
--

INSERT INTO `available_vaccine` (`ID`, `USER_ID`, `VACCINE_ID`, `STATUS`, `HOSPITAL`) VALUES
(7, 3, 14, 'Not Available', 'Agha Khan Hospital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_appointment`
--
ALTER TABLE `add_appointment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `add_appointment_ibfk_1` (`VACCINE_ID`),
  ADD KEY `add_appointment_ibfk_2` (`CHILD_ID`),
  ADD KEY `add_appointment_ibfk_3` (`USER_ID`),
  ADD KEY `add_appointment_ibfk_4` (`HOSPITAL_ID`);

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_child`
--
ALTER TABLE `add_child`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `add_child_ibfk_1` (`PARENT_ID`);

--
-- Indexes for table `add_contact`
--
ALTER TABLE `add_contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_hospital`
--
ALTER TABLE `add_hospital`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `add_hospital_ibfk_1` (`USER_ID`);

--
-- Indexes for table `add_role`
--
ALTER TABLE `add_role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `add_user_ibfk_1` (`ROLE_ID`);

--
-- Indexes for table `add_vaccine`
--
ALTER TABLE `add_vaccine`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `add_vaccine_ibfk_1` (`VAC_ID`);

--
-- Indexes for table `available_vaccine`
--
ALTER TABLE `available_vaccine`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `available_vaccine_ibfk_1` (`USER_ID`),
  ADD KEY `available_vaccine_ibfk_2` (`VACCINE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_appointment`
--
ALTER TABLE `add_appointment`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_child`
--
ALTER TABLE `add_child`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `add_contact`
--
ALTER TABLE `add_contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_hospital`
--
ALTER TABLE `add_hospital`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_role`
--
ALTER TABLE `add_role`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `add_vaccine`
--
ALTER TABLE `add_vaccine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `available_vaccine`
--
ALTER TABLE `available_vaccine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_appointment`
--
ALTER TABLE `add_appointment`
  ADD CONSTRAINT `add_appointment_ibfk_1` FOREIGN KEY (`VACCINE_ID`) REFERENCES `add_vaccine` (`ID`),
  ADD CONSTRAINT `add_appointment_ibfk_2` FOREIGN KEY (`CHILD_ID`) REFERENCES `add_child` (`ID`),
  ADD CONSTRAINT `add_appointment_ibfk_3` FOREIGN KEY (`USER_ID`) REFERENCES `add_user` (`ID`),
  ADD CONSTRAINT `add_appointment_ibfk_4` FOREIGN KEY (`HOSPITAL_ID`) REFERENCES `add_hospital` (`ID`);

--
-- Constraints for table `add_child`
--
ALTER TABLE `add_child`
  ADD CONSTRAINT `add_child_ibfk_1` FOREIGN KEY (`PARENT_ID`) REFERENCES `add_user` (`ID`);

--
-- Constraints for table `add_hospital`
--
ALTER TABLE `add_hospital`
  ADD CONSTRAINT `add_hospital_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `add_user` (`ID`);

--
-- Constraints for table `add_user`
--
ALTER TABLE `add_user`
  ADD CONSTRAINT `add_user_ibfk_1` FOREIGN KEY (`ROLE_ID`) REFERENCES `add_role` (`ID`);

--
-- Constraints for table `add_vaccine`
--
ALTER TABLE `add_vaccine`
  ADD CONSTRAINT `add_vaccine_ibfk_1` FOREIGN KEY (`VAC_ID`) REFERENCES `add_category` (`ID`);

--
-- Constraints for table `available_vaccine`
--
ALTER TABLE `available_vaccine`
  ADD CONSTRAINT `available_vaccine_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `add_user` (`ID`),
  ADD CONSTRAINT `available_vaccine_ibfk_2` FOREIGN KEY (`VACCINE_ID`) REFERENCES `add_vaccine` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
